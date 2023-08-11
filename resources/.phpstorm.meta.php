<?php

declare(strict_types=1);

namespace PHPSTORM_META {

    registerArgumentsSet('ffi_sdl_init_flags',
        \Serafim\SDL\InitFlags::SDL_INIT_TIMER,
        \Serafim\SDL\InitFlags::SDL_INIT_AUDIO,
        \Serafim\SDL\InitFlags::SDL_INIT_VIDEO,
        \Serafim\SDL\InitFlags::SDL_INIT_JOYSTICK,
        \Serafim\SDL\InitFlags::SDL_INIT_HAPTIC,
        \Serafim\SDL\InitFlags::SDL_INIT_GAMECONTROLLER,
        \Serafim\SDL\InitFlags::SDL_INIT_EVENTS,
        \Serafim\SDL\InitFlags::SDL_INIT_SENSOR,
        \Serafim\SDL\InitFlags::SDL_INIT_NOPARACHUTE,
        \Serafim\SDL\InitFlags::SDL_INIT_EVERYTHING
    );

    expectedArguments(\Serafim\SDL\SDL::SDL_Init(), 0, argumentsSet('ffi_sdl_init_flags'));

}
