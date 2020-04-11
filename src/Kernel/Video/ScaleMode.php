<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Kernel\Video;

/**
 * <code>
 * typedef enum {
 *      SDL_ScaleModeNearest,
 *      SDL_ScaleModeLinear,
 *      SDL_ScaleModeBest
 * } SDL_ScaleMode;
 * </code>
 * @since SDL 2.0.12
 */
interface ScaleMode
{
    /**
     * @var int
     * @deprecated Please use SDL_SCALE_MODE_NEAREST instead
     */
    public const SDL_ScaleModeNearest = 0;

    /**
     * @var int
     * @deprecated Please use SDL_SCALE_MODE_LINEAR instead
     */
    public const SDL_ScaleModeLinear = 1;

    /**
     * @var int
     * @deprecated Please use SDL_SCALE_MODE_BEST instead
     */
    public const SDL_ScaleModeBest = 2;

    /**
     * @var int
     */
    public const SDL_SCALE_MODE_NEAREST = 0;

    /**
     * @var int
     */
    public const SDL_SCALE_MODE_LINEAR = 1;

    /**
     * @var int
     */
    public const SDL_SCALE_MODE_BEST = 2;
}
