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
 * Interface JoystickPowerLevelInterface
 */
interface JoystickPowerLevelInterface
{
    public const SDL_JOYSTICK_POWER_UNKNOWN = -1;
    public const SDL_JOYSTICK_POWER_EMPTY   = 0;
    public const SDL_JOYSTICK_POWER_LOW     = 1;
    public const SDL_JOYSTICK_POWER_MEDIUM  = 2;
    public const SDL_JOYSTICK_POWER_FULL    = 3;
    public const SDL_JOYSTICK_POWER_WIRED   = 4;
    public const SDL_JOYSTICK_POWER_MAX     = 5;
}
