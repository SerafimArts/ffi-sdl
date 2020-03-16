<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Image;

/**
 * Interface InitFlags
 */
interface InitFlags
{
    /**
     * IMG_Init JPG image format support flag
     *
     * @var int
     */
    public const IMG_INIT_JPG  = 0x00000001;

    /**
     * IMG_Init PNG image format support flag
     *
     * @var int
     */
    public const IMG_INIT_PNG  = 0x00000002;

    /**
     * IMG_Init TIF image format support flag
     *
     * @var int
     */
    public const IMG_INIT_TIF  = 0x00000004;

    /**
     * IMG_Init WEBP image format support flag
     *
     * @var int
     */
    public const IMG_INIT_WEBP = 0x00000008;
}
