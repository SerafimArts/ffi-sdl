<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SDL\Kernel\RWops;

/**
 * @see https://wiki.libsdl.org/SDL_RWseek#whence
 * @since 2.0.10
 */
interface SeekWhence
{
    /**
     * Seek from the beginning of data
     *
     * @var int
     */
    public const RW_SEEK_SET = \SEEK_SET;

    /**
     * Seek relative to current read point
     *
     * @var int
     */
    public const RW_SEEK_CUR = \SEEK_CUR;

    /**
     * Seek relative to the end of data
     *
     * @var int
     */
    public const RW_SEEK_END = \SEEK_END;
}
