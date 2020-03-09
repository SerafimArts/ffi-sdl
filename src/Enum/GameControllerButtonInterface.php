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
 * Interface GameControllerButtonInterface
 */
interface GameControllerButtonInterface
{
    public const SDL_CONTROLLER_BUTTON_INVALID       = -1;
    public const SDL_CONTROLLER_BUTTON_A             = 0;
    public const SDL_CONTROLLER_BUTTON_B             = 1;
    public const SDL_CONTROLLER_BUTTON_X             = 2;
    public const SDL_CONTROLLER_BUTTON_Y             = 3;
    public const SDL_CONTROLLER_BUTTON_BACK          = 4;
    public const SDL_CONTROLLER_BUTTON_GUIDE         = 5;
    public const SDL_CONTROLLER_BUTTON_START         = 6;
    public const SDL_CONTROLLER_BUTTON_LEFTSTICK     = 7;
    public const SDL_CONTROLLER_BUTTON_RIGHTSTICK    = 8;
    public const SDL_CONTROLLER_BUTTON_LEFTSHOULDER  = 9;
    public const SDL_CONTROLLER_BUTTON_RIGHTSHOULDER = 10;
    public const SDL_CONTROLLER_BUTTON_DPAD_UP       = 11;
    public const SDL_CONTROLLER_BUTTON_DPAD_DOWN     = 12;
    public const SDL_CONTROLLER_BUTTON_DPAD_LEFT     = 13;
    public const SDL_CONTROLLER_BUTTON_DPAD_RIGHT    = 14;
    public const SDL_CONTROLLER_BUTTON_MAX           = 15;
}
