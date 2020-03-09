<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL;

use Serafim\SDL\Defines\AudioSubsystemInterface;
use Serafim\SDL\Defines\EventsSubsystemInterface;
use Serafim\SDL\Defines\JoystickSubsystemInterface;
use Serafim\SDL\Defines\MouseSubsystemInterface;
use Serafim\SDL\Defines\VideoSubsystemInterface;

/**
 * Interface DefinesInterface
 */
interface DefinesInterface extends
    AudioSubsystemInterface,
    EventsSubsystemInterface,
    JoystickSubsystemInterface,
    MouseSubsystemInterface,
    VideoSubsystemInterface
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
     * Video subsystem.
     * Automatically initializes the events subsystem.
     *
     * @var int
     */
    public const SDL_INIT_VIDEO = 0x00000020;

    /**
     * Joystick subsystem.
     * Automatically initializes the events subsystem.
     *
     * @var int
     */
    public const SDL_INIT_JOYSTICK = 0x00000200;

    /**
     * Haptic (force feedback) subsystem.
     *
     * @var int
     */
    public const SDL_INIT_HAPTIC = 0x00001000;

    /**
     * Controller subsystem.
     * Automatically initializes the events subsystem.
     *
     * @var int
     */
    public const SDL_INIT_GAMECONTROLLER = 0x00002000;

    /**
     * Events subsystem.
     *
     * @var int
     */
    public const SDL_INIT_EVENTS = 0x00004000;

    /**
     * Sensor subsystem.
     *
     * @since 2.0.9
     * @var int
     */
    public const SDL_INIT_SENSOR = 0x00008000;

    /**
     * Compatibility.
     *
     * @deprecated this flag is ignored
     * @var int
     */
    public const SDL_INIT_NOPARACHUTE = 0x00100000;

    /**
     * All of the above subsystems.
     *
     * @var int
     */
    public const SDL_INIT_EVERYTHING = (
        self::SDL_INIT_TIMER |
        self::SDL_INIT_AUDIO |
        self::SDL_INIT_VIDEO |
        self::SDL_INIT_EVENTS |
        self::SDL_INIT_JOYSTICK |
        self::SDL_INIT_HAPTIC |
        self::SDL_INIT_GAMECONTROLLER |
        self::SDL_INIT_SENSOR
    );

    /**
     * @var int
     */
    public const SDL_FALSE = 0;

    /**
     * @var int
     */
    public const SDL_TRUE = 1;
}
