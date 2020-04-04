<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SDL\Kernel\Joystick;

/**
 * Interface Hat
 */
interface Hat
{
    /**
     * @var int
     */
    public const SDL_HAT_CENTERED = 0x00;

    /**
     * @var int
     */
    public const SDL_HAT_UP = 0x01;

    /**
     * @var int
     */
    public const SDL_HAT_RIGHT = 0x02;

    /**
     * @var int
     */
    public const SDL_HAT_DOWN = 0x04;

    /**
     * @var int
     */
    public const SDL_HAT_LEFT = 0x08;

    /**
     * @var int
     */
    public const SDL_HAT_RIGHTUP = (self::SDL_HAT_RIGHT | self::SDL_HAT_UP);

    /**
     * @var int
     */
    public const SDL_HAT_RIGHTDOWN = (self::SDL_HAT_RIGHT | self::SDL_HAT_DOWN);

    /**
     * @var int
     */
    public const SDL_HAT_LEFTUP = (self::SDL_HAT_LEFT | self::SDL_HAT_UP);

    /**
     * @var int
     */
    public const SDL_HAT_LEFTDOWN = (self::SDL_HAT_LEFT | self::SDL_HAT_DOWN);
}
