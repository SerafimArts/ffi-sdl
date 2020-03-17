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
 * @see https://www.libsdl.org/projects/SDL_image/docs/SDL_image_13.html#SEC13
 */
interface ImageType
{
    /**
     * @var string
     */
    public const IMAGE_TYPE_BMP = 'BMP';

    /**
     * @var string
     */
    public const IMAGE_TYPE_CUR = 'CUR';

    /**
     * @var string
     */
    public const IMAGE_TYPE_GIF = 'GIF';

    /**
     * @var string
     */
    public const IMAGE_TYPE_ICO = 'ICO';

    /**
     * @var string
     */
    public const IMAGE_TYPE_JPG = 'JPG';

    /**
     * @var string
     */
    public const IMAGE_TYPE_LBM = 'LBM';

    /**
     * @var string
     */
    public const IMAGE_TYPE_PCX = 'PCX';

    /**
     * @var string
     */
    public const IMAGE_TYPE_PNG = 'PNG';

    /**
     * @var string
     */
    public const IMAGE_TYPE_PNM = 'PNM';

    /**
     * @var string
     */
    public const IMAGE_TYPE_TGA = 'TGA';

    /**
     * @var string
     */
    public const IMAGE_TYPE_TIF = 'TIF';

    /**
     * @var string
     */
    public const IMAGE_TYPE_XCF = 'XCF';

    /**
     * @var string
     */
    public const IMAGE_TYPE_XPM = 'XPM';

    /**
     * @var string
     */
    public const IMAGE_TYPE_XV = 'XV';
}
