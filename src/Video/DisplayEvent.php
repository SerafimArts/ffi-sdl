<?php

declare(strict_types=1);

namespace Serafim\SDL\Video;

interface DisplayEvent
{
    public const SDL_DISPLAYEVENT_NONE = 0;
    public const SDL_DISPLAYEVENT_ORIENTATION = 1;
    public const SDL_DISPLAYEVENT_CONNECTED = 2;
    public const SDL_DISPLAYEVENT_DISCONNECTED = 3;
    public const SDL_DISPLAYEVENT_MOVED = 4;
}
