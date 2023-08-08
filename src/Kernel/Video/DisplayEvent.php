<?php

declare(strict_types=1);

namespace Serafim\SDL\Kernel\Video;

/**
 * Interface DisplayEventInterface
 */
interface DisplayEvent
{
    public const SDL_DISPLAYEVENT_NONE        = 0;
    public const SDL_DISPLAYEVENT_ORIENTATION = 1;
}
