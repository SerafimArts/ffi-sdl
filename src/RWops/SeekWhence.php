<?php

declare(strict_types=1);

namespace Serafim\SDL\RWops;

/**
 * @see https://wiki.libsdl.org/SDL_RWseek#whence
 *
 * @since SDL 2.0.10
 */
interface SeekWhence
{
    /**
     * Seek from the beginning of data
     */
    public const RW_SEEK_SET = \SEEK_SET;

    /**
     * Seek relative to current read point
     */
    public const RW_SEEK_CUR = \SEEK_CUR;

    /**
     * Seek relative to the end of data
     */
    public const RW_SEEK_END = \SEEK_END;
}
