<?php

declare(strict_types=1);

namespace Serafim\SDL\Assert;

/**
 * An enumeration of assertion handling states.
 *
 * <code>
 *  typedef enum {
 *      SDL_ASSERTION_RETRY,
 *      SDL_ASSERTION_BREAK,
 *      SDL_ASSERTION_ABORT,
 *      SDL_ASSERTION_IGNORE,
 *      SDL_ASSERTION_ALWAYS_IGNORE
 *  } SDL_AssertState;
 * </code>
 *
 * @see https://wiki.libsdl.org/SDL_AssertState
 */
interface State
{
    /**
     * Retry the assert immediately
     */
    public const SDL_ASSERTION_RETRY = 0;

    /**
     * Trigger a breakpoint under the debugger
     */
    public const SDL_ASSERTION_BREAK = 1;

    /**
     * Terminate the program
     */
    public const SDL_ASSERTION_ABORT = 2;

    /**
     * Ignore the assert
     */
    public const SDL_ASSERTION_IGNORE = 3;

    /**
     * Ignore the assert from now on
     */
    public const SDL_ASSERTION_ALWAYS_IGNORE = 4;
}
