<?php

declare(strict_types=1);

namespace Serafim\SDL;

use FFI\Contracts\Headers\HeaderInterface;
use FFI\Contracts\Headers\Version\ComparableInterface;
use FFI\Contracts\Headers\VersionInterface;
use FFI\Contracts\Preprocessor\Exception\PreprocessorExceptionInterface;
use FFI\Contracts\Preprocessor\PreprocessorInterface;

final class Header implements HeaderInterface
{
    /**
     * @var non-empty-string
     */
    private const HEADERS_ENTRYPOINT = __DIR__ . '/../resources/headers/SDL.h';

    /**
     * @var non-empty-string
     */
    private const SDLINC_H = <<<'CPP'
    #ifndef SDL_stdinc_h_
        #define SDL_stdinc_h_
        typedef unsigned short wchar_t;

        typedef enum {
            SDL_FALSE = 0,
            SDL_TRUE = 1
        } SDL_bool;

        typedef int8_t Sint8;
        typedef uint8_t Uint8;
        typedef int16_t Sint16;
        typedef uint16_t Uint16;
        typedef int32_t Sint32;
        typedef uint32_t Uint32;
        typedef int64_t Sint64;
        typedef uint64_t Uint64;

        // From WinGW 5.1
        typedef struct _iobuf {
            char*   _ptr;
            int _cnt;
            char*   _base;
            int _flag;
            int _file;
            int _charbuf;
            int _bufsiz;
            char*   _tmpfname;
        } FILE;

        #define SDL_PRINTF_FORMAT_STRING
        #define SDL_SCANF_FORMAT_STRING
        #define SDL_PRINTF_VARARG_FUNC(x)

        #define SDL_FOURCC(A, B, C, D) (A << 0) | (B << 8) | (C << 16) | (D << 24)
        #define SDL_COMPILE_TIME_ASSERT(name, x) typedef int SDL_compile_time_assert_##name_stub
    #endif
    CPP;

    public function __construct(
        private readonly PreprocessorInterface $pre,
    ) {
    }

    /**
     * @return non-empty-string
     */
    public function getPathname(): string
    {
        return self::HEADERS_ENTRYPOINT;
    }

    public static function create(
        Platform $platform,
        VersionInterface $version,
        PreprocessorInterface $pre,
    ): self {
        $pre = clone $pre;

        if (!$version instanceof ComparableInterface) {
            $version = Version::create($version->toString());
        }

        $pre->define('_SDL_VERSION_GTE', static fn (string $expected): bool
            => \version_compare($version->toString(), $expected, '>='));
        $pre->define('SDL_VERSION_ATLEAST', static fn (string $a, string $b, string $c): bool
            => \version_compare($version->toString(), \sprintf('%d.%d.%d', $a, $b, $c), '>='));

        $pre->define('WINAPI_FAMILY_PARTITION', static fn (string $type) => 0);
        $pre->define('DECLSPEC', '');
        $pre->define('_SDL_HAS_BUILTIN', static fn (string $arg) => 0);

        // Remove stdinc and platform headers
        $pre->add('SDL_stdinc.h', self::SDLINC_H);

        switch ($platform) {
            case Platform::WINDOWS:
                $pre->define('__WIN32__', '1');
                $pre->define('__stdcall');
                $pre->define('__cdecl');
                $pre->add('process.h', '');
                break;

            case Platform::DARWIN:
                $pre->define('__APPLE__', '1');
                $pre->add('AvailabilityMacros.h', '');
                $pre->add('TargetConditionals.h', '');
                $pre->add('signal.h', '');
                $pre->add('libkern/OSAtomic.h', '');
                break;

            case Platform::FREEBSD:
                $pre->define('__FREEBSD__', '1');
                break;

            default:
                $pre->define('__LINUX__', '1');
        }

        return new self($pre);
    }

    /**
     * @throws PreprocessorExceptionInterface
     */
    public function __toString(): string
    {
        $result = $this->pre->process(new \SplFileInfo($this->getPathname()))
            . \PHP_EOL;

        $result = $this->withoutMainFunction($result);
        $result = $this->withoutStaticInline($result);

        return $result;
    }

    private function withoutMainFunction(string $result): string
    {
        $from = [];

        for ($i = 1; $i < 10; ++$i) {
            $from[] = 'extern' . \str_repeat(' ', $i) . 'int SDL_main(int argc, char *argv[]);';
        }

        return \str_replace($from, '', $result);
    }

    private function withoutStaticInline(string $result): string
    {
        while (($offset = \strpos($result, 'static inline')) !== false) {
            $to = $from = $offset;
            $depth = 0;

            do {
                switch ($result[$to]) {
                    case ';':
                        if ($depth === 0) {
                            $result = \substr($result, 0, $from)
                                . \substr($result, $to + 1);
                            continue 3;
                        }
                        break;

                    case '{':
                        $depth++;
                        break;

                    case '}':
                        $depth--;
                        if ($depth <= 0) {
                            while ($result[$to + 1] === ';') {
                                $to++;
                            }

                            $result = \substr($result, 0, $from)
                                . \substr($result, $to + 1);
                            continue 3;
                        }
                        break;
                }
            } while (isset($result[$to++]));
        }

        return $result;
    }
}
