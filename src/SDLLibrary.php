<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL;

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
     * SDLLibrary constructor.
     *
     * @param string $library
     */
    public function __construct(string $library)
    {
        parent::__construct(self::SCOPE, $library, self::HEADERS_PATHNAME);
    }

    /**
     * @return Loader
     */
    private static function loader(): Loader
    {
        $loader = new Loader(static function (string $library): LibraryInterface {
            return new static($library);
        });

        return $loader
            ->onWindows64(__DIR__ . '/../bin/SDL2x64.dll')
            ->onWindows32(__DIR__ . '/../bin/SDL2x86.dll')
            ->onLinux('libSDL2-2.0.so.0');
    }

    /**
     * @return static|LibraryInterface
     */
    public static function resolve(): self
    {
        return self::loader()->resolve();
    }
}
