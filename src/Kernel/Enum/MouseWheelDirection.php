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
 * Interface MouseWheelDirectionInterface
 */
interface MouseWheelDirection
{
    public const SDL_MOUSEWHEEL_NORMAL  = 0;
    public const SDL_MOUSEWHEEL_FLIPPED = 1;
}
