<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Kernel\Assert;

use Serafim\SDL\NativeApi;

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
 * @see NativeApi::SDL_ReportAssertion
 */
interface State
{
    /**
     * Retry the assert immediately
     *
     * @var int
     */
    public const SDL_ASSERTION_RETRY = 0;

    /**
     * Trigger a breakpoint under the debugger
     *
     * @var int
     */
    public const SDL_ASSERTION_BREAK = 1;

    /**
     * Terminate the program
     *
     * @var int
     */
    public const SDL_ASSERTION_ABORT = 2;

    /**
     * Ignore the assert
     *
     * @var int
     */
    public const SDL_ASSERTION_IGNORE = 3;

    /**
     * Ignore the assert from now on
     *
     * @var int
     */
    public const SDL_ASSERTION_ALWAYS_IGNORE = 4;
}
