<?php

declare(strict_types=1);

namespace Serafim\SDL\Video;

/**
 * Note: Additional custom blend modes can be returned by SDL_ComposeCustomBlendMode()
 * @see https://wiki.libsdl.org/SDL_BlendMode
 */
interface BlendMode
{
    /**
     * No blending
     * <code>
     *  dstRGBA = srcRGBA
     * </code>
     */
    public const SDL_BLENDMODE_NONE    = 0x00000000;

    /**
     * Alpha blending
     * <code>
     *  dstRGB = (srcRGB * srcA) + (dstRGB * (1-srcA))
     *  dstA = srcA + (dstA * (1-srcA))
     * </code>
     */
    public const SDL_BLENDMODE_BLEND   = 0x00000001;

    /**
     * Additive blending
     * <code>
     *  dstRGB = (srcRGB * srcA) + (dstRGB * (1-srcA))
     *  dstA = srcA + (dstA * (1-srcA))
     * </code>
     */
    public const SDL_BLENDMODE_ADD     = 0x00000002;

    /**
     * Color modulate
     * <code>
     *  dstRGB = srcRGB * dstRGB
     *  dstA = dstA
     * </code>
     */
    public const SDL_BLENDMODE_MOD     = 0x00000004;

    /**
     * Color multiply
     * <code>
     *  dstRGB = (srcRGB * dstRGB) + (dstRGB * (1-srcA))
     *  dstA = (srcA * dstA) + (dstA * (1-srcA))
     * </code>
     * @since SDL 2.0.12
     */
    public const SDL_BLENDMODE_MUL     = 0x00000008;

    public const SDL_BLENDMODE_INVALID = 0x7FFFFFFF;
}
