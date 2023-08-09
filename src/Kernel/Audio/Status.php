<?php

declare(strict_types=1);

namespace Serafim\SDL\Kernel\Audio;

interface Status
{
    public const SDL_AUDIO_STOPPED = 0;
    public const SDL_AUDIO_PLAYING = 1;
    public const SDL_AUDIO_PAUSED = 2;
}
