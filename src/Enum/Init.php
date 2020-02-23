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
 * These are the flags which may be passed to SDL_Init().  You should
 * specify the subsystems which you will be using in your application.
 *
 * <code>
 *  #define SDL_INIT_TIMER          0x00000001u
 *  #define SDL_INIT_AUDIO          0x00000010u
 *  #define SDL_INIT_VIDEO          0x00000020u
 *  #define SDL_INIT_JOYSTICK       0x00000200u
 *  #define SDL_INIT_HAPTIC         0x00001000u
 *  #define SDL_INIT_GAMECONTROLLER 0x00002000u
 *  #define SDL_INIT_EVENTS         0x00004000u
 *  #define SDL_INIT_SENSOR         0x00008000u
 *  #define SDL_INIT_NOPARACHUTE    0x00100000u
 *  #define SDL_INIT_EVERYTHING ( \
 *      SDL_INIT_TIMER | SDL_INIT_AUDIO | SDL_INIT_VIDEO | SDL_INIT_EVENTS | \
 *      SDL_INIT_JOYSTICK | SDL_INIT_HAPTIC | SDL_INIT_GAMECONTROLLER | SDL_INIT_SENSOR \
 *  )
 * </code>
 */
final class Init extends Enum
{
    /**
     * Timer subsystem
     *
     * @var int
     */
    public const SDL_INIT_TIMER = 0x00000001;

    /**
     * Audio subsystem
     *
     * @var int
     */
    public const SDL_INIT_AUDIO = 0x00000010;

    /**
     * Video subsystem;
     * Note: Automatically initializes the events subsystem
     *
     * @var int
     */
    public const SDL_INIT_VIDEO = 0x00000020;

    /**
     * Joystick subsystem;
     * Note: automatically initializes the events subsystem
     *
     * @var int
     */
    public const SDL_INIT_JOYSTICK = 0x00000200;

    /**
     * Haptic (force feedback) subsystem
     *
     * @var int
     */
    public const SDL_INIT_HAPTIC = 0x00001000;

    /**
     * Controller subsystem;
     * Automatically initializes the joystick subsystem
     *
     * @var int
     */
    public const SDL_INIT_GAMECONTROLLER = 0x00002000;

    /**
     * Events subsystem
     *
     * @var int
     */
    public const SDL_INIT_EVENTS = 0x00004000;

    /**
     * @var int
     */
    public const SDL_INIT_SENSOR = 0x00008000;

    /**
     * Compatibility;
     * This flag is ignored
     *
     * @var int
     */
    public const SDL_INIT_NOPARACHUTE = 0x00100000;

    /**
     * All of the above subsystems
     *
     * @var int
     */
    public const SDL_INIT_EVERYTHING =
        self::SDL_INIT_TIMER | self::SDL_INIT_AUDIO | self::SDL_INIT_VIDEO |
        self::SDL_INIT_EVENTS | self::SDL_INIT_JOYSTICK | self::SDL_INIT_HAPTIC | self::SDL_INIT_GAMECONTROLLER |
        self::SDL_INIT_SENSOR;
}
