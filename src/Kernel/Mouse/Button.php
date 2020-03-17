<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Kernel\Mouse;

/**
 * Interface Button
 */
interface Button
{
    /**
     * @var int
     */
    public const SDL_BUTTON_LEFT = 1;

    /**
     * @var int
     */
    public const SDL_BUTTON_MIDDLE = 2;

    /**
     * @var int
     */
    public const SDL_BUTTON_RIGHT = 3;

    /**
     * @var int
     */
    public const SDL_BUTTON_X1 = 4;

    /**
     * @var int
     */
    public const SDL_BUTTON_X2 = 5;
}
