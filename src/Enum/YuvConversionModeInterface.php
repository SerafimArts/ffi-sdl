<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Enum;

/**
 * Interface YuvConversionModeInterface
 */
interface YuvConversionModeInterface
{
    public const SDL_YUV_CONVERSION_JPEG      = 0;
    public const SDL_YUV_CONVERSION_BT601     = 1;
    public const SDL_YUV_CONVERSION_BT709     = 2;
    public const SDL_YUV_CONVERSION_AUTOMATIC = 3;
}
