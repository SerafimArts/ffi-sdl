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
 * @see https://wiki.libsdl.org/SDL_GL_SetSwapInterval#Remarks
 * @see SDL::glSetSwapInterval()
 */
interface GLSwapInterval
{
    /**
     * @var int
     */
    public const SDL_GL_SWAP_IMMEDIATE = 0;

    /**
     * @var int
     */
    public const SDL_GL_SWAP_VERTICAL_SYNC = 1;

    /**
     * @var int
     */
    public const SDL_GL_SWAP_ADAPTIVE_SYNC = -1;
}
