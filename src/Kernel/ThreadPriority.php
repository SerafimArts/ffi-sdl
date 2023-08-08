<?php

declare(strict_types=1);

namespace Serafim\SDL\Kernel;

/**
 * Interface ThreadPriorityInterface
 */
interface ThreadPriority
{
    public const SDL_THREAD_PRIORITY_LOW = 0;
    public const SDL_THREAD_PRIORITY_NORMAL = 1;
    public const SDL_THREAD_PRIORITY_HIGH = 2;

    /**
     * @since SDL 2.0.9
     */
    public const SDL_THREAD_PRIORITY_TIME_CRITICAL = 3;
}
