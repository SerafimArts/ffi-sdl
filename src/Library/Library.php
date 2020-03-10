<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Library;

/**
 * Class Library
 */
class Library
{
    /**
     * @var string
     */
    protected const SDL_GET_VERSION = <<<'clang'
        typedef struct SDL_version
        {
            uint8_t major;
            uint8_t minor;
            uint8_t patch;
        } SDL_version;
        
        extern void SDL_GetVersion(SDL_version * ver);
    clang;

    /**
     * @var string
     */
    private const LIBRARY_WIN64 = __DIR__ . '/../../bin/SDL2-2.0.10-x64.dll';

    /**
     * @var string
     */
    private const LIBRARY_WIN86 = __DIR__ . '/../../bin/SDL2-2.0.10-x86.dll';

    /**
     * @var string
     */
    private const LIBRARY_LINUX = 'libSDL2-2.0.so.0';

    /**
     * @var string
     */
    private const LIBRARY_MAC = 'libSDL2-2.0.0.dylib';

    /**
     * @var string|null
     */
    private static ?string $version = null;

    /**
     * @return string
     */
    public static function getHeadersOriginalPathname(): string
    {
        return __DIR__ . '/../../resources/sdl.h';
    }

    /**
     * @return string
     */
    public static function getHeadersCompiledPathname(): string
    {
        $name = \vsprintf('sdl-%s-%s-x%s.h', [
            static::getVersion(),
            \strtolower(\PHP_OS_FAMILY),
            \PHP_INT_SIZE === 8 ? '64' : '86',
        ]);

        return __DIR__ . '/../../out/' . $name;
    }

    /**
     * @return string
     */
    public static function getVersion(): string
    {
        if (self::$version === null) {
            $ctx = \FFI::cdef(static::SDL_GET_VERSION, static::getLibraryPathname());

            $ctx->SDL_GetVersion(\FFI::addr($ver = $ctx->new('SDL_version')));

            self::$version = \sprintf('%d.%d.%d', $ver->major, $ver->minor, $ver->patch);
        }

        return self::$version;
    }

    /**
     * @return string
     */
    public static function getLibraryPathname(): string
    {
        switch (\PHP_OS_FAMILY) {
            case 'Windows':
                return \PHP_INT_SIZE === 8 ? self::LIBRARY_WIN64 : self::LIBRARY_WIN86;

            case 'Linux':
                return self::LIBRARY_LINUX;

            case 'Darwin':
                return self::LIBRARY_MAC;

            default:
                throw new \LogicException('Unsupported OS');
        }
    }
}
