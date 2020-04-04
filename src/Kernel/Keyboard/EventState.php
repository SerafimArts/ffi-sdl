<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SDL\Kernel\Keyboard;

/**
 * Interface EventState
 */
interface EventState
{
    /**
     * @var int
     */
    public const SDL_RELEASED = 0;

    /**
     * @var int
     */
    public const SDL_PRESSED = 1;
}
