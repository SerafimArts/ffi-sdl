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
 * Interface HitTestResultInterface
 */
interface HitTestResult
{
    public const SDL_HITTEST_NORMAL             = 0;
    public const SDL_HITTEST_DRAGGABLE          = 1;
    public const SDL_HITTEST_RESIZE_TOPLEFT     = 2;
    public const SDL_HITTEST_RESIZE_TOP         = 3;
    public const SDL_HITTEST_RESIZE_TOPRIGHT    = 4;
    public const SDL_HITTEST_RESIZE_RIGHT       = 5;
    public const SDL_HITTEST_RESIZE_BOTTOMRIGHT = 6;
    public const SDL_HITTEST_RESIZE_BOTTOM      = 7;
    public const SDL_HITTEST_RESIZE_BOTTOMLEFT  = 8;
    public const SDL_HITTEST_RESIZE_LEFT        = 9;
}
