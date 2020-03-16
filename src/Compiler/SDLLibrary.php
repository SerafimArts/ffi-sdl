<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Compiler;

/**
 * Class SDLLibrary
 */
class SDLLibrary extends Library
{
    /**
     * @var string
     */
    protected const SDL_GET_VERSION = <<<'clang'
        typedef struct SDL_Version
        {
            uint8_t major;
            uint8_t minor;
            uint8_t patch;
        } SDL_Version;
        
        extern void SDL_GetVersion(SDL_Version * ver);
    clang;

    /**
     * @var string
     */
    private const LIBRARY_WIN64 = __DIR__ . '/../../bin/x64/SDL2.dll';

    /**
     * @var string
     */
    private const LIBRARY_WIN86 = __DIR__ . '/../../bin/x86/SDL2.dll';

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
    public function getName(): string
    {
        return 'SDL';
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        if (self::$version === null) {
            $ctx = \FFI::cdef(static::SDL_GET_VERSION, $this->getLibrary());

            $ctx->SDL_GetVersion(\FFI::addr($ver = $ctx->new('SDL_Version')));

            return \sprintf('%d.%d.%d', $ver->major, $ver->minor, $ver->patch);
        }

        return self::$version;
    }

    /**
     * @return string
     */
    public function getLibrary(): string
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

    /**
     * @return string
     */
    protected function getLinuxInstallationCommand(): string
    {
        return 'sudo apt install libsdl2-2.0-0 -y';
    }

    /**
     * @return string
     */
    protected function getMacOSInstallationCommand(): string
    {
        return 'brew install sdl2';
    }
}
