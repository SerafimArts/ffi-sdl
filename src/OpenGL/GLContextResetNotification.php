<?php

declare(strict_types=1);

namespace Serafim\SDL\OpenGL;

interface GLContextResetNotification
{
    public const SDL_GL_CONTEXT_RESET_NO_NOTIFICATION = 0x0000;
    public const SDL_GL_CONTEXT_RESET_LOSE_CONTEXT = 0x0001;
}
