<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Kernel\Video;

/**
 * Interface PackedLayoutInterface
 */
interface PackedLayout
{
    public const SDL_PACKEDLAYOUT_NONE    = 0;
    public const SDL_PACKEDLAYOUT_332     = 1;
    public const SDL_PACKEDLAYOUT_4444    = 2;
    public const SDL_PACKEDLAYOUT_1555    = 3;
    public const SDL_PACKEDLAYOUT_5551    = 4;
    public const SDL_PACKEDLAYOUT_565     = 5;
    public const SDL_PACKEDLAYOUT_8888    = 6;
    public const SDL_PACKEDLAYOUT_2101010 = 7;
    public const SDL_PACKEDLAYOUT_1010102 = 8;
}
