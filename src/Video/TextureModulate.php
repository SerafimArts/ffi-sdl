<?php

declare(strict_types=1);

namespace Serafim\SDL\Video;

interface TextureModulate
{
    public const SDL_TEXTUREMODULATE_NONE = 0x00000000;
    public const SDL_TEXTUREMODULATE_COLOR = 0x00000001;
    public const SDL_TEXTUREMODULATE_ALPHA = 0x00000002;
}
