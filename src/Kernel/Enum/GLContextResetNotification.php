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
 * Interface GLContextResetNotificationInterface
 */
interface GLContextResetNotification
{
    public const SDL_GL_CONTEXT_RESET_NO_NOTIFICATION = 0x0000;
    public const SDL_GL_CONTEXT_RESET_LOSE_CONTEXT    = 0x0001;
}
