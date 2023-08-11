<?php

declare(strict_types=1);

namespace Serafim\SDL\GameController;

/**
 * @since SDL 2.0.12
 */
interface Type
{
    public const SDL_CONTROLLER_TYPE_UNKNOWN = 0;

    public const SDL_CONTROLLER_TYPE_XBOX360 = 1;

    public const SDL_CONTROLLER_TYPE_XBOXONE = 2;

    public const SDL_CONTROLLER_TYPE_PS3 = 3;

    public const SDL_CONTROLLER_TYPE_PS4 = 4;

    public const SDL_CONTROLLER_TYPE_NINTENDO_SWITCH_PRO = 5;
}
