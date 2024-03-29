<?php

declare(strict_types=1);

namespace Serafim\SDL\Video;

interface RendererFlip
{
    public const SDL_FLIP_NONE = 0x00000000;
    public const SDL_FLIP_HORIZONTAL = 0x00000001;
    public const SDL_FLIP_VERTICAL = 0x00000002;
}
