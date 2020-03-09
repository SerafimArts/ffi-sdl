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
 * Interface AssertStateInterface
 */
interface AssertStateInterface
{
    public const SDL_ASSERTION_RETRY = 0;
    public const SDL_ASSERTION_BREAK = 1;
    public const SDL_ASSERTION_ABORT = 2;
    public const SDL_ASSERTION_IGNORE = 3;
    public const SDL_ASSERTION_ALWAYS_IGNORE = 4;
}
