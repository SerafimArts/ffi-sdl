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
 * Interface GameControllerBindTypeInterface
 */
interface GameControllerBindTypeInterface
{
    public const SDL_CONTROLLER_BINDTYPE_NONE   = 0;
    public const SDL_CONTROLLER_BINDTYPE_BUTTON = 1;
    public const SDL_CONTROLLER_BINDTYPE_AXIS   = 2;
    public const SDL_CONTROLLER_BINDTYPE_HAT    = 3;
}
