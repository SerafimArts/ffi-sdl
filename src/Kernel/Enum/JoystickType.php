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
 * Interface JoystickTypeInterface
 */
interface JoystickType
{
    public const SDL_JOYSTICK_TYPE_UNKNOWN        = 0;
    public const SDL_JOYSTICK_TYPE_GAMECONTROLLER = 1;
    public const SDL_JOYSTICK_TYPE_WHEEL          = 2;
    public const SDL_JOYSTICK_TYPE_ARCADE_STICK   = 3;
    public const SDL_JOYSTICK_TYPE_FLIGHT_STICK   = 4;
    public const SDL_JOYSTICK_TYPE_DANCE_PAD      = 5;
    public const SDL_JOYSTICK_TYPE_GUITAR         = 6;
    public const SDL_JOYSTICK_TYPE_DRUM_KIT       = 7;
    public const SDL_JOYSTICK_TYPE_ARCADE_PAD     = 8;
    public const SDL_JOYSTICK_TYPE_THROTTLE       = 9;
}
