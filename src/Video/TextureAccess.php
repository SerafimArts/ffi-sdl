<?php

declare(strict_types=1);

namespace Serafim\SDL\Video;

interface TextureAccess
{
    public const SDL_TEXTUREACCESS_STATIC = 0;
    public const SDL_TEXTUREACCESS_STREAMING = 1;
    public const SDL_TEXTUREACCESS_TARGET = 2;
}
