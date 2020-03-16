<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Kernel\Enum;

/**
 * Interface PackedOrderInterface
 */
interface PackedOrder
{
    public const SDL_PACKEDORDER_NONE = 0;
    public const SDL_PACKEDORDER_XRGB = 1;
    public const SDL_PACKEDORDER_RGBX = 2;
    public const SDL_PACKEDORDER_ARGB = 3;
    public const SDL_PACKEDORDER_RGBA = 4;
    public const SDL_PACKEDORDER_XBGR = 5;
    public const SDL_PACKEDORDER_BGRX = 6;
    public const SDL_PACKEDORDER_ABGR = 7;
    public const SDL_PACKEDORDER_BGRA = 8;
}
