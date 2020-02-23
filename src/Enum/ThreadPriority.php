<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Enum;

/**
 * An enumeration of the available thread priorities.
 *
 * <code>
 *  typedef enum {
 *      SDL_THREAD_PRIORITY_LOW,
 *      SDL_THREAD_PRIORITY_NORMAL,
 *      SDL_THREAD_PRIORITY_HIGH,
 *      SDL_THREAD_PRIORITY_TIME_CRITICAL
 *  } SDL_ThreadPriority;
 * </code>
 */
final class ThreadPriority extends Enum
{
    /**
     * For non-urgent, background processing
     *
     * @var int
     */
    public const SDL_THREAD_PRIORITY_LOW = 0;

    /**
     * For general purpose processing (default)
     *
     * @var int
     */
    public const SDL_THREAD_PRIORITY_NORMAL = 1;

    /**
     * For timing-critical processing
     *
     * @var int
     */
    public const SDL_THREAD_PRIORITY_HIGH = 2;

    /**
     * @var int
     */
    public const SDL_THREAD_PRIORITY_TIME_CRITICAL = 3;
}
