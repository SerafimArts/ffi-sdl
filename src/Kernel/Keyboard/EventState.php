<?php

declare(strict_types=1);

namespace Serafim\SDL\Kernel\Keyboard;

interface EventState
{
    public const SDL_RELEASED = 0;

    public const SDL_PRESSED = 1;
}
