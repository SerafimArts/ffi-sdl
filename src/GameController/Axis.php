<?php

declare(strict_types=1);

namespace Serafim\SDL\GameController;

interface Axis
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
