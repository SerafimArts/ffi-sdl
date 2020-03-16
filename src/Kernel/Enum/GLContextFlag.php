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
 * Interface GLContextFlagInterface
 */
interface GLContextFlag
{
    public const SDL_GL_CONTEXT_DEBUG_FLAG              = 0x0001;
    public const SDL_GL_CONTEXT_FORWARD_COMPATIBLE_FLAG = 0x0002;
    public const SDL_GL_CONTEXT_ROBUST_ACCESS_FLAG      = 0x0004;
    public const SDL_GL_CONTEXT_RESET_ISOLATION_FLAG    = 0x0008;
}
