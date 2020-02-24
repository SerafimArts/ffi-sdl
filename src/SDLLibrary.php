<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL;

use Serafim\FFILoader\Environment\BitDepth;
use Serafim\FFILoader\Environment\OperatingSystem;
use Serafim\FFILoader\Exception\LibraryLoaderException;
use Serafim\FFILoader\Library as BaseLibrary;
use Serafim\FFILoader\LibraryInterface;
use Serafim\FFILoader\Loader;

/**
 * Class SDLLibrary
 */
final class SDLLibrary extends BaseLibrary
{
    /**
     * @var string
     */
    public const SCOPE = 'sdl';

    /**
     * @var string
     */
    private const HEADERS_PATHNAME = __DIR__ . '/../resources/sdl.h';

    /**
     * @var string
     */
    private const HEADERS_WIN32_PATHNAME = __DIR__ . '/../resources/sdl.win32.h';

    /**
     * @var string
     */
    private const HEADERS_MACOS_PATHNAME = __DIR__ . '/../resources/sdl.macos.h';

    /**
     * @var string
     */
    private const ERROR_LOADING_LINUX_INFO =
        '%s. Please install SDL first using ' .
        'the following command: "sudo apt install libsdl2-2.0-0"';

    /**
     * @var string
     */
    private const ERROR_LOADING_INFO =
        "OS %s (%s) does not support yet by this library =(\n" .
        'Please create PR (https://github.com/SerafimArts/SDL/pulls) indicating which library to use in your OS';

    /**
     * @return static|LibraryInterface
     */
    public static function resolve(): self
    {
        $loader = new Loader(self::SCOPE, \file_get_contents(self::HEADERS_PATHNAME));

        return $loader
            ->onWindows64(__DIR__ . '/../bin/SDL2x64.dll')
            ->onWindows32(__DIR__ . '/../bin/SDL2x86.dll')
            ->onLinux('libSDL2-2.0.so.0', static function (LibraryLoaderException $e) {
                throw new LibraryLoaderException(\sprintf(self::ERROR_LOADING_LINUX_INFO, $e->getMessage()));
            })
            ->otherwise(static function (OperatingSystem $os, BitDepth $bits) {
                throw new LibraryLoaderException(\sprintf(self::ERROR_LOADING_INFO, $os, $bits));
            })
            ->resolve(static function (string $library, string $headers, OperatingSystem $os) {
                switch (true) {
                    case $os->isWindows():
                        $headers .= \file_get_contents(self::HEADERS_WIN32_PATHNAME);
                        break;

                    case $os->isMac():
                        $headers .= \file_get_contents(self::HEADERS_MACOS_PATHNAME);
                        break;
                }

                return new static(self::SCOPE, $library, $headers);
            })
        ;
    }
}
