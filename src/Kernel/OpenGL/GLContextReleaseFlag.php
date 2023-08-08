<?php

declare(strict_types=1);

namespace Serafim\SDL\Kernel\OpenGL;

/**
 * Interface GLContextReleaseFlagInterface
 */
interface GLContextReleaseFlag
{
    public const SDL_GL_CONTEXT_RELEASE_BEHAVIOR_NONE  = 0x0000;
    public const SDL_GL_CONTEXT_RELEASE_BEHAVIOR_FLUSH = 0x0001;
}
