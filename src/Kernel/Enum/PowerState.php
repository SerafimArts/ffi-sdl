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
 * Interface PowerStateInterface
 */
interface PowerState
{
    public const SDL_POWERSTATE_UNKNOWN    = 0;
    public const SDL_POWERSTATE_ON_BATTERY = 1;
    public const SDL_POWERSTATE_NO_BATTERY = 2;
    public const SDL_POWERSTATE_CHARGING   = 3;
    public const SDL_POWERSTATE_CHARGED    = 4;
}
