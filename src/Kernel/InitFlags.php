<?php

declare(strict_types=1);

namespace Serafim\SDL\Kernel;

/**
 * @see https://wiki.libsdl.org/SDL_Init
 */
interface InitFlags
{
    /**
     * Timer subsystem
     */
    public const SDL_INIT_TIMER = 0x00000001;

    /**
     * Audio subsystem
     */
    public const SDL_INIT_AUDIO = 0x00000010;

    /**
     * Video subsystem.
     * Automatically initializes the events subsystem.
     */
    public const SDL_INIT_VIDEO = 0x00000020;

    /**
     * Joystick subsystem.
     * Automatically initializes the events subsystem.
     */
    public const SDL_INIT_JOYSTICK = 0x00000200;

    /**
     * Haptic (force feedback) subsystem.
     */
    public const SDL_INIT_HAPTIC = 0x00001000;

    /**
     * Controller subsystem.
     * Automatically initializes the events subsystem.
     */
    public const SDL_INIT_GAMECONTROLLER = 0x00002000;

    /**
     * Events subsystem.
     */
    public const SDL_INIT_EVENTS = 0x00004000;

    /**
     * Sensor subsystem.
     *
     * @since SDL 2.0.9
     */
    public const SDL_INIT_SENSOR = 0x00008000;

    /**
     * Compatibility.
     *
     * @deprecated this flag is ignored
     */
    public const SDL_INIT_NOPARACHUTE = 0x00100000;

    /**
     * All of the above subsystems.
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
}
