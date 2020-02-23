<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Enum;

/**
 * An enumeration of OpenGL profiles.
 */
final class GLProfile extends Enum
{
    /**
     * OpenGL core profile - deprecated functions are disabled.
     *
     * @var int
     */
    public const SDL_GL_CONTEXT_PROFILE_CORE = 0x0001;

    /**
     * OpenGL compatibility profile - deprecated functions are allowed.
     *
     * @var int
     */
    public const SDL_GL_CONTEXT_PROFILE_COMPATIBILITY = 0x0002;

    /**
     * OpenGL ES profile - only a subset of the base OpenGL functionality
     * is available.
     *
     * @var int
     */
    public const SDL_GL_CONTEXT_PROFILE_ES = 0x0004;
}
