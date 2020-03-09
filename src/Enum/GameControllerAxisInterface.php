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
 * Interface GameControllerAxisInterface
 */
interface GameControllerAxisInterface
{
    public const SDL_CONTROLLER_AXIS_INVALID      = -1;
    public const SDL_CONTROLLER_AXIS_LEFTX        = 0;
    public const SDL_CONTROLLER_AXIS_LEFTY        = 1;
    public const SDL_CONTROLLER_AXIS_RIGHTX       = 2;
    public const SDL_CONTROLLER_AXIS_RIGHTY       = 3;
    public const SDL_CONTROLLER_AXIS_TRIGGERLEFT  = 4;
    public const SDL_CONTROLLER_AXIS_TRIGGERRIGHT = 5;
    public const SDL_CONTROLLER_AXIS_MAX          = 6;
}
