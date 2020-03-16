<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Kernel\Enum;

/**
 * Interface ThreadPriorityInterface
 */
interface ThreadPriority
{
    public const SDL_THREAD_PRIORITY_LOW = 0;
    public const SDL_THREAD_PRIORITY_NORMAL = 1;
    public const SDL_THREAD_PRIORITY_HIGH = 2;

    /**
     * @since 2.0.9
     */
    public const SDL_THREAD_PRIORITY_TIME_CRITICAL = 3;
}
