<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Kernel\Log;

/**
 * Interface LogPriorityInterface
 */
interface Priority
{
    public const SDL_LOG_PRIORITY_VERBOSE  = 1;
    public const SDL_LOG_PRIORITY_DEBUG    = 2;
    public const SDL_LOG_PRIORITY_INFO     = 3;
    public const SDL_LOG_PRIORITY_WARN     = 4;
    public const SDL_LOG_PRIORITY_ERROR    = 5;
    public const SDL_LOG_PRIORITY_CRITICAL = 6;
    public const SDL_NUM_LOG_PRIORITIES    = 7;
}
