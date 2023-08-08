<?php

declare(strict_types=1);

namespace Serafim\SDL\Kernel\OpenGL;

/**
 * @see https://wiki.libsdl.org/SDL_GL_SetSwapInterval#Remarks
 * @see SDL::glSetSwapInterval()
 */
interface GLSwapInterval
{

    public const SDL_GL_SWAP_IMMEDIATE = 0;

    public const SDL_GL_SWAP_VERTICAL_SYNC = 1;

    public const SDL_GL_SWAP_ADAPTIVE_SYNC = -1;
}
