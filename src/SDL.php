<?php

declare(strict_types=1);

namespace Serafim\SDL;

use FFI\CData;
use FFI\Contracts\Headers\VersionInterface;
use FFI\Contracts\Preprocessor\PreprocessorInterface;
use FFI\Env\Runtime;
use FFI\Location\Locator;
use FFI\Preprocessor\Preprocessor;
use FFI\Proxy\Proxy;
use Psr\SimpleCache\CacheInterface;
use Serafim\SDL\Internal\CacheAwareHeader;
use Serafim\SDL\Kernel\Enums;

/**
 * @mixin \FFI
 */
final class SDL extends Proxy implements Enums
{
    /**
     * Contains pathname to the binary library.
     *
     * @var non-empty-string
     */
    public readonly string $library;

    /**
     * Contains current compiled platform (OS).
     */
    public readonly Platform $platform;

    /**
     * Contains current compiled SDL version.
     */
    public readonly VersionInterface $version;

    /**
     * @psalm-taint-sink file $library
     * @param non-empty-string|null $library
     * @param VersionInterface|non-empty-string|null $version
     */
    public function __construct(
        ?string $library = null,
        Platform $platform = null,
        VersionInterface|string $version = null,
        CacheInterface $cache = null,
        PreprocessorInterface $pre = new Preprocessor(),
    ) {
        Runtime::assertAvailable();

        $this->platform = $platform ?? $this->detectPlatform();
        $this->library = $this->detectLibraryPathname($library);
        $this->version = match (true) {
            \is_string($version) => Version::create($version),
            $version instanceof VersionInterface => $version,
            default => $this->detectVersion(),
        };

        $header = $this->getHeader($pre, $cache);

        parent::__construct(\FFI::cdef((string)$header, $this->library));
    }

    private function getHeader(PreprocessorInterface $pre, ?CacheInterface $cache): string|\Stringable
    {
        if ($cache !== null) {
            return new CacheAwareHeader($this->platform, $this->version, $pre, $cache);
        }

        return Header::create($this->platform, $this->version, $pre);
    }

    private function detectLibraryPathname(?string $library): string
    {
        if ($library === null) {
            return match ($this->platform) {
                Platform::WINDOWS => Locator::resolve('SDL2.dll')
                    ?? throw new \RuntimeException(<<<'error'
                        Could not load [SDL2.dll].

                        Please make sure the SDL2 library is installed or specify
                        the path to the binary explicitly.
                        error),
                Platform::FREEBSD,
                Platform::LINUX => Locator::resolve('libSDL2-2.0.so', 'libSDL2-2.0.so.0')
                    ?? throw new \RuntimeException(<<<'error'
                        Could not load [libSDL2-2.0.so.0].

                        Please make sure the SDL2 library is installed or specify
                        the path to the binary explicitly.
                        error),
                Platform::DARWIN => Locator::resolve('libSDL2-2.0.0.dylib')
                    ?? throw new \RuntimeException(<<<'error'
                        Could not load [libSDL2-2.0.0.dylib].

                        Please make sure the SDL2 library is installed or specify
                        the path to the binary explicitly.
                        error),
            };
        }

        return \realpath($library) ?: Locator::resolve($library) ?? $library;
    }

    private function detectVersion(): VersionInterface
    {
        /**
         * @var object{SDL_GetVersion:callable(object):void} $ffi
         */
        $ffi = \FFI::cdef(<<<'CLANG'
            typedef uint8_t Uint8;
            typedef struct SDL_Version {
              Uint8 major;
              Uint8 minor;
              Uint8 patch;
            } SDL_Version;
            extern void SDL_GetVersion(SDL_Version* ver);
        CLANG, $this->library);

        /**
         * @var \FFI\CData&object{
         *     major: int<0, 255>,
         *     minor: int<0, 255>,
         *     patch: int<0, 255>
         * } $version
         */
        $version = $ffi->new('SDL_Version', false);

        $ffi->SDL_GetVersion(\FFI::addr($version));

        try {
            return Version::create(\vsprintf('%d.%d.%d', [
                $version->major,
                $version->minor,
                $version->patch,
            ]));
        } finally {
            \FFI::free(\FFI::addr($version));
        }
    }

    private function detectPlatform(): Platform
    {
        return match (\PHP_OS_FAMILY) {
            'Windows' => Platform::WINDOWS,
            'BSD' => Platform::FREEBSD,
            'Darwin' => Platform::DARWIN,
            default => Platform::LINUX,
        };
    }

    /**
     * @deprecated Please use {@see \FFI::addr()} method instead.
     */
    public static function addr(CData $type): CData
    {
        return \FFI::addr($type);
    }
}
