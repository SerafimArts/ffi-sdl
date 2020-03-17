<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Kernel\OpenGL;

/**
 * Interface GLProfileInterface
 */
interface GLProfile
{
    public const SDL_GL_CONTEXT_PROFILE_CORE          = 0x0001;
    public const SDL_GL_CONTEXT_PROFILE_COMPATIBILITY = 0x0002;
    public const SDL_GL_CONTEXT_PROFILE_ES            = 0x0004;
}
