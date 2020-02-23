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
 * OpenGL configuration attributes
 */
final class GLAttr extends Enum
{
    /**
     * The minimum number of bits for the red channel of the color buffer.
     *
     * Defaults to 3
     *
     * @var int
     */
    public const SDL_GL_RED_SIZE = 0;

    /**
     * The minimum number of bits for the green channel of the color buffer.
     *
     * Defaults to 3
     *
     * @var int
     */
    public const SDL_GL_GREEN_SIZE = 1;

    /**
     * The minimum number of bits for the blue channel of the color buffer.
     *
     * Defaults to 3
     *
     * @var int
     */
    public const SDL_GL_BLUE_SIZE = 2;

    /**
     * The minimum number of bits for the alpha channel of the color buffer.
     *
     * Defaults to 3
     *
     * @var int
     */
    public const SDL_GL_ALPHA_SIZE = 3;

    /**
     * The minimum number of bits for frame buffer size.
     *
     * Defaults to 0
     *
     * @var int
     */
    public const SDL_GL_BUFFER_SIZE                = 4;

    /**
     * Whether the output is single or double buffered.
     *
     * Defaults to double buffering on
     *
     * @var int
     */
    public const SDL_GL_DOUBLEBUFFER               = 5;

    /**
     * Whether the output is single or double buffered.
     *
     * Defaults to double buffering on
     *
     * @var int
     */
    public const SDL_GL_DEPTH_SIZE                 = 6;

    /**
     * The minimum number of bits in the depth buffer.
     *
     * Defaults to 16
     *
     * @var int
     */
    public const SDL_GL_STENCIL_SIZE               = 7;

    /**
     * The minimum number of bits for the red channel of the accumulation
     * buffer.
     *
     * Defaults to 0
     *
     * @var int
     */
    public const SDL_GL_ACCUM_RED_SIZE             = 8;

    /**
     * The minimum number of bits for the green channel of the accumulation
     * buffer.
     *
     * Defaults to 0
     *
     * @var int
     */
    public const SDL_GL_ACCUM_GREEN_SIZE           = 9;

    /**
     * The minimum number of bits for the blue channel of the accumulation
     * buffer.
     *
     * Defaults to 0
     *
     * @var int
     */
    public const SDL_GL_ACCUM_BLUE_SIZE            = 10;

    /**
     * The minimum number of bits for the alpha channel of the accumulation
     * buffer.
     *
     * Defaults to 0
     *
     * @var int
     */
    public const SDL_GL_ACCUM_ALPHA_SIZE           = 11;

    /**
     * Whether the output is stereo 3D; defaults to off.
     *
     * Defaults to 0
     *
     * @var int
     */
    public const SDL_GL_STEREO                     = 12;

    /**
     * The number of buffers used for multisample anti-aliasing.
     *
     * Defaults to 0
     *
     * @see https://wiki.libsdl.org/SDL_GLattr#multisample
     * @var int
     */
    public const SDL_GL_MULTISAMPLEBUFFERS         = 13;

    /**
     * The number of samples used around the current pixel used for multisample
     * anti-aliasing.
     *
     * Defaults to 0
     *
     * @see https://wiki.libsdl.org/SDL_GLattr#multisample
     * @var int
     */
    public const SDL_GL_MULTISAMPLESAMPLES         = 14;

    /**
     * Set to 1 to require hardware acceleration, set to 0 to force
     * software rendering
     *
     * Defaults to allow either
     *
     * @var int
     */
    public const SDL_GL_ACCELERATED_VISUAL         = 15;

    /**
     * @deprecated Not used
     * @var int
     */
    public const SDL_GL_RETAINED_BACKING           = 16;

    /**
     * OpenGL context major version.
     *
     * @see https://wiki.libsdl.org/SDL_GLattr#OpenGL
     * @var int
     */
    public const SDL_GL_CONTEXT_MAJOR_VERSION      = 17;

    /**
     * OpenGL context minor version.
     *
     * @see https://wiki.libsdl.org/SDL_GLattr#OpenGL
     * @var int
     */
    public const SDL_GL_CONTEXT_MINOR_VERSION      = 18;

    /**
     * @deprecated Not used
     * @var int
     */
    public const SDL_GL_CONTEXT_EGL                = 19;

    /**
     * Some combination of 0 or more of elements of the
     * SDL_GLcontextFlag enumeration.
     *
     * Defaults to 0
     *
     * TODO Implement SDL_GLcontextFlag enum
     * @see https://wiki.libsdl.org/SDL_GLcontextFlag
     * @var int
     */
    public const SDL_GL_CONTEXT_FLAGS              = 20;

    /**
     * Type of GL context (Core, Compatibility, ES).
     *
     * Default value depends on platform
     *
     * @see GLProfile
     * @see https://wiki.libsdl.org/SDL_GLprofile
     * @var int
     */
    public const SDL_GL_CONTEXT_PROFILE_MASK       = 21;

    /**
     * OpenGL context sharing
     *
     * Defaults to 0
     *
     * @var int
     */
    public const SDL_GL_SHARE_WITH_CURRENT_CONTEXT = 22;

    /**
     * Requests sRGB capable visual.
     *
     * Defaults to 0
     *
     * @since SDL 2.0.1
     * @var int
     */
    public const SDL_GL_FRAMEBUFFER_SRGB_CAPABLE   = 23;

    /**
     * sets context the release behavior.
     *
     * Defaults to 1
     *
     * @since SDL 2.0.4
     * @var int
     */
    public const SDL_GL_CONTEXT_RELEASE_BEHAVIOR   = 24;

    /**
     * TODO Not documented yet
     *
     * @var int
     */
    public const SDL_GL_CONTEXT_RESET_NOTIFICATION = 25;

    /**
     * TODO Not documented yet
     *
     * @var int
     */
    public const SDL_GL_CONTEXT_NO_ERROR           = 26;
}
