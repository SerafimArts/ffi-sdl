<?php

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
     * @deprecated Please use {@see ScaleMode::SDL_SCALE_MODE_NEAREST} instead
     */
    public const SDL_ScaleModeNearest = 0;

    /**
     * @deprecated Please use {@see ScaleMode::SDL_SCALE_MODE_LINEAR} instead
     */
    public const SDL_ScaleModeLinear = 1;

    /**
     * @deprecated Please use {@see ScaleMode::SDL_SCALE_MODE_BEST} instead
     */
    public const SDL_ScaleModeBest = 2;

    public const SDL_SCALE_MODE_NEAREST = 0;

    public const SDL_SCALE_MODE_LINEAR = 1;

    public const SDL_SCALE_MODE_BEST = 2;
}
