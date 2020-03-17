<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL;

use FFI\CData;
use Serafim\SDL\Compiler\SDLImageLibrary;
use Serafim\SDL\Image\ImageType;
use Serafim\SDL\Image\InitFlags;

/**
 * @mixin \FFI
 * @mixin SDLImageMethods
 */
final class Image extends Library implements InitFlags, ImageType
{
    /**
     * @var string
     */
    private string $dir;

    /**
     * Note: PHPStorm meta bugfix
     *
     * {@inheritDoc}
     */
    public function new($type, bool $owned = true, bool $persistent = false): CData
    {
        return parent::new($type, $owned, $persistent);
    }

    /**
     * Note: PHPStorm meta bugfix
     *
     * {@inheritDoc}
     */
    public static function addr(CData $type): CData
    {
        return parent::addr($type);
    }

    /**
     * @return \FFI
     * @throws \RuntimeException
     */
    protected function create(): \FFI
    {
        return (new SDLImageLibrary())->ffi();
    }
}
