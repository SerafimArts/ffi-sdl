<?php

declare(strict_types=1);

namespace Serafim\SDL\Kernel\Joystick;

/**
 * Interface Hat
 */
interface Hat
{

    public const SDL_HAT_CENTERED = 0x00;

    public const SDL_HAT_UP = 0x01;

    public const SDL_HAT_RIGHT = 0x02;

    public const SDL_HAT_DOWN = 0x04;

    public const SDL_HAT_LEFT = 0x08;

    public const SDL_HAT_RIGHTUP = (self::SDL_HAT_RIGHT | self::SDL_HAT_UP);

    public const SDL_HAT_RIGHTDOWN = (self::SDL_HAT_RIGHT | self::SDL_HAT_DOWN);

    public const SDL_HAT_LEFTUP = (self::SDL_HAT_LEFT | self::SDL_HAT_UP);

    public const SDL_HAT_LEFTDOWN = (self::SDL_HAT_LEFT | self::SDL_HAT_DOWN);
}
