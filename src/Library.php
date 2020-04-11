<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL;

use Serafim\FFILoader\BitDepth;
use Serafim\FFILoader\Library as BaseLibrary;
use Serafim\FFILoader\OperatingSystem;

/**
 * Class Library
 */
class Library extends BaseLibrary
{
    /**
     * @var string
     */
    protected const SDL_GET_VERSION = <<<'C'
        typedef struct SDL_Version
        {
            uint8_t major;
            uint8_t minor;
            uint8_t patch;
        } SDL_Version;
        
        void SDL_GetVersion(SDL_Version * ver);
    C;

    /**
     * @var string
     */
    private const LIBRARY_WIN64 = __DIR__ . '/../bin/x64/SDL2.dll';

    /**
     * @var string
     */
    private const LIBRARY_WIN86 = __DIR__ . '/../bin/x86/SDL2.dll';

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
    private ?string $version = null;

    /**
     * {@inheritDoc}
     */
    public function getName(): string
    {
        return 'SDL';
    }

    /**
     * {@inheritDoc}
     */
    public function getHeaders(): string
    {
        return __DIR__ . '/../resources/sdl.h';
    }

    /**
     * {@inheritDoc}
     */
    public function getVersion(string $library): string
    {
        if ($this->version === null) {
            $ctx = \FFI::cdef(static::SDL_GET_VERSION, $library);

            $ctx->SDL_GetVersion(\FFI::addr($ver = $ctx->new('SDL_Version')));

            return $this->version = \sprintf('%d.%d.%d', $ver->major, $ver->minor, $ver->patch);
        }

        return $this->version;
    }

    /**
     * {@inheritDoc}
     */
    public function getLibrary(OperatingSystem $os, BitDepth $bits): ?string
    {
        switch (true) {
            case $os->isWindows() && $bits->is64BitDepth():
                return self::LIBRARY_WIN64;

            case $os->isWindows() && $bits->is32BitDepth():
                return self::LIBRARY_WIN86;

            case $os->isLinux():
                return self::LIBRARY_LINUX;

            case $os->isMac():
                return self::LIBRARY_MAC;
        }

        return null;
    }

    /**
     * @param OperatingSystem $os
     * @param BitDepth $bits
     * @return string|null
     */
    public function suggest(OperatingSystem $os, BitDepth $bits): ?string
    {
        switch (true) {
            case $os->isWindows();
                return 'Try to open issue on GitHub: https://github.com/SerafimArts/ffi-sdl/issues';

            case $os->isLinux():
                return 'Dependency installation required: "sudo apt install libsdl2-2.0-0 -y"';

            case $os->isMac():
                return 'Dependency installation required: "brew install sdl2"';
        }

        return null;
    }
}
