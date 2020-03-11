<?php

namespace PHPSTORM_META {

    registerArgumentsSet('sdl_bool', [
        \Serafim\SDL\SDL::SDL_TRUE,
        \Serafim\SDL\SDL::SDL_FALSE,
        1,
        0,
    ]);

    override(\Serafim\SDL\SDL::new(), map([
        ''         => type(0),

        // mixed
        "void *"   => \FFI\CScalar::class,

        // floats
        "float"    => \FFI\CFloat::class,
        "float *"  => \CFloatPtr::class,
        "float **" => \CFloatPtrPtr::class,

        "double"    => \FFI\CFloat::class,
        "double *"  => \CFloatPtr::class,
        "double **" => \CFloatPtrPtr::class,

        "long double"    => \FFI\CFloat::class,
        "long double *"  => \CFloatPtr::class,
        "long double **" => \CFloatPtrPtr::class,

        // integers
        "int"            => \FFI\CInt::class,
        "int *"          => \CIntPtr::class,
        "int **"         => \CIntPtrPtr::class,

        "uint8_t"    => \FFI\CInt::class,
        "uint8_t *"  => \CIntPtr::class,
        "uint8_t **" => \CIntPtrPtr::class,

        "int8_t"    => \FFI\CInt::class,
        "int8_t*"   => \CIntPtr::class,
        "int8_t *"  => \CIntPtr::class,
        "int8_t**"  => \CIntPtrPtr::class,
        "int8_t **" => \CIntPtrPtr::class,

        "uint16_t"    => \FFI\CInt::class,
        "uint16_t *"  => \CIntPtr::class,
        "uint16_t **" => \CIntPtrPtr::class,

        "int16_t"    => \FFI\CInt::class,
        "int16_t *"  => \CIntPtr::class,
        "int16_t **" => \CIntPtrPtr::class,

        "uint32_t"    => \FFI\CInt::class,
        "uint32_t *"  => \CIntPtr::class,
        "uint32_t **" => \CIntPtrPtr::class,

        "int32_t"    => \FFI\CInt::class,
        "int32_t *"  => \CIntPtr::class,
        "int32_t **" => \CIntPtrPtr::class,

        "uint64_t"    => \FFI\CInt::class,
        "uint64_t *"  => \CIntPtr::class,
        "uint64_t **" => \CIntPtrPtr::class,

        "int64_t"    => \FFI\CInt::class,
        "int64_t *"  => \CIntPtr::class,
        "int64_t **" => \CIntPtrPtr::class,

        // bool
        "bool"       => \FFI\CBool::class,
        "bool *"     => \CBoolPtr::class,
        "bool **"    => \CBoolPtrPtr::class,

        // string
        "char"       => \FFI\CChar::class,
        "char *"     => \CStringPtr::class,
        "char **"    => \CStringPtrPtr::class,
    ]));

    override(\Serafim\SDL\SDL::addr(), map([
        '' => '@Ptr',
    ]));

    expectedReturnValues(\Serafim\SDL\SDL::SDL_GetPlatform(),
        'Windows',
        'Mac OS X',
        'Linux',
        'iOS',
        'Android'
    );

    expectedReturnValues(\Serafim\SDL\SDL::SDL_ReportAssertion(),
        \Serafim\SDL\SDL::SDL_ASSERTION_RETRY,
        \Serafim\SDL\SDL::SDL_ASSERTION_BREAK,
        \Serafim\SDL\SDL::SDL_ASSERTION_ABORT,
        \Serafim\SDL\SDL::SDL_ASSERTION_IGNORE,
        \Serafim\SDL\SDL::SDL_ASSERTION_ALWAYS_IGNORE
    );

    expectedArguments(\Serafim\SDL\SDL::SDL_Init(), 0,
        \Serafim\SDL\SDL::SDL_INIT_TIMER |
        \Serafim\SDL\SDL::SDL_INIT_AUDIO |
        \Serafim\SDL\SDL::SDL_INIT_VIDEO |
        \Serafim\SDL\SDL::SDL_INIT_JOYSTICK |
        \Serafim\SDL\SDL::SDL_INIT_HAPTIC |
        \Serafim\SDL\SDL::SDL_INIT_GAMECONTROLLER |
        \Serafim\SDL\SDL::SDL_INIT_EVENTS |
        \Serafim\SDL\SDL::SDL_INIT_SENSOR |
        \Serafim\SDL\SDL::SDL_INIT_NOPARACHUTE |
        \Serafim\SDL\SDL::SDL_INIT_EVERYTHING
    );
}
