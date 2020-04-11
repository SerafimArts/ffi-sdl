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
 * Interface ArrayOrderInterface
 */
interface ArrayOrder
{
    public const SDL_ARRAYORDER_NONE = 0;
    public const SDL_ARRAYORDER_RGB  = 1;
    public const SDL_ARRAYORDER_RGBA = 2;
    public const SDL_ARRAYORDER_ARGB = 3;
    public const SDL_ARRAYORDER_BGR  = 4;
    public const SDL_ARRAYORDER_BGRA = 5;
    public const SDL_ARRAYORDER_ABGR = 6;
}
