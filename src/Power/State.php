<?php

declare(strict_types=1);

namespace Serafim\SDL\Power;

interface State
{
    public const SDL_POWERSTATE_UNKNOWN = 0;
    public const SDL_POWERSTATE_ON_BATTERY = 1;
    public const SDL_POWERSTATE_NO_BATTERY = 2;
    public const SDL_POWERSTATE_CHARGING = 3;
    public const SDL_POWERSTATE_CHARGED = 4;
}
