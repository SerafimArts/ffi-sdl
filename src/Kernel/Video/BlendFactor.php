<?php

declare(strict_types=1);

namespace Serafim\SDL\Kernel\Video;

interface BlendFactor
{
    public const SDL_BLENDFACTOR_ZERO = 0x1;
    public const SDL_BLENDFACTOR_ONE = 0x2;
    public const SDL_BLENDFACTOR_SRC_COLOR = 0x3;
    public const SDL_BLENDFACTOR_ONE_MINUS_SRC_COLOR = 0x4;
    public const SDL_BLENDFACTOR_SRC_ALPHA = 0x5;
    public const SDL_BLENDFACTOR_ONE_MINUS_SRC_ALPHA = 0x6;
    public const SDL_BLENDFACTOR_DST_COLOR = 0x7;
    public const SDL_BLENDFACTOR_ONE_MINUS_DST_COLOR = 0x8;
    public const SDL_BLENDFACTOR_DST_ALPHA = 0x9;
    public const SDL_BLENDFACTOR_ONE_MINUS_DST_ALPHA = 0xA;
}
