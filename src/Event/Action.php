<?php

declare(strict_types=1);

namespace Serafim\SDL\Event;

interface Action
{
    public const SDL_ADDEVENT = 0;
    public const SDL_PEEKEVENT = 1;
    public const SDL_GETEVENT = 2;
}
