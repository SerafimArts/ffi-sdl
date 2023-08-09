<?php

namespace PHPSTORM_META {

    registerArgumentsSet('sdl_types',
        'void *',
        'bool',
        'float',
        'double',
        'long double',
        'char',
        'signed char',
        'unsigned char',
        'int',
        'signed int',
        'unsigned int',
        'long',
        'signed long',
        'unsigned long',
        'long long',
        'signed long long',
        'unsigned long long',
        'intptr_t',
        'uintptr_t',
        'size_t',
        'ssize_t',
        'ptrdiff_t',
        'off_t',
        'va_list',
        '__builtin_va_list',
        '__gnuc_va_list',
        'int8_t',
        'uint8_t',
        'int16_t',
        'uint16_t',
        'int32_t',
        'uint32_t',
        'int64_t',
        'uint64_t',
        'SDL_bool',
        'Sint8',
        'Uint8',
        'Sint16',
        'Uint16',
        'Sint32',
        'Uint32',
        'Sint64',
        'Uint64',
        'SDL_DUMMY_ENUM',
        'SDL_malloc_func',
        'SDL_calloc_func',
        'SDL_realloc_func',
        'SDL_free_func',
        'SDL_iconv_t',
        'SDL_main_func',
        'SDL_AssertState',
        'SDL_AssertData',
        'SDL_AssertionHandler',
        'SDL_SpinLock',
        'SDL_atomic_t',
        'SDL_errorcode',
        'SDL_mutex',
        'SDL_sem',
        'SDL_cond',
        'SDL_Thread',
        'SDL_threadID',
        'SDL_TLSID',
        'SDL_ThreadPriority',
        'SDL_ThreadFunction',
        'SDL_RWops',
        'SDL_AudioFormat',
        'SDL_AudioCallback',
        'SDL_AudioSpec',
        'SDL_AudioFilter',
        'SDL_AudioCVT',
        'SDL_AudioDeviceID',
        'SDL_AudioStatus',
        'SDL_AudioStream',
        'SDL_PixelType',
        'SDL_BitmapOrder',
        'SDL_PackedOrder',
        'SDL_ArrayOrder',
        'SDL_PackedLayout',
        'SDL_PixelFormatEnum',
        'SDL_Color',
        'SDL_Palette',
        'SDL_PixelFormat',
        'SDL_Point',
        'SDL_FPoint',
        'SDL_Rect',
        'SDL_FRect',
        'SDL_BlendMode',
        'SDL_BlendOperation',
        'SDL_BlendFactor',
        'SDL_BlitMap',
        'SDL_Surface',
        'SDL_blit',
        'SDL_YUV_CONVERSION_MODE',
        'SDL_DisplayMode',
        'SDL_Window',
        'SDL_WindowFlags',
        'SDL_WindowEventID',
        'SDL_DisplayEventID',
        'SDL_DisplayOrientation',
        'SDL_FlashOperation',
        'SDL_GLContext',
        'SDL_GLattr',
        'SDL_GLprofile',
        'SDL_GLcontextFlag',
        'SDL_GLcontextReleaseFlag',
        'SDL_GLContextResetNotification',
        'SDL_HitTestResult',
        'SDL_HitTest',
        'SDL_Scancode',
        'SDL_Keycode',
        'SDL_KeyCode',
        'SDL_Keymod',
        'SDL_Keysym',
        'SDL_Cursor',
        'SDL_SystemCursor',
        'SDL_MouseWheelDirection',
        'SDL_GUID',
        'SDL_Joystick',
        'SDL_JoystickGUID',
        'SDL_JoystickID',
        'SDL_JoystickType',
        'SDL_JoystickPowerLevel',
        'SDL_VirtualJoystickDesc',
        'SDL_Sensor',
        'SDL_SensorID',
        'SDL_SensorType',
        'SDL_GameController',
        'SDL_GameControllerType',
        'SDL_GameControllerBindType',
        'SDL_GameControllerButtonBind',
        'SDL_GameControllerAxis',
        'SDL_GameControllerButton',
        'SDL_TouchID',
        'SDL_FingerID',
        'SDL_TouchDeviceType',
        'SDL_Finger',
        'SDL_GestureID',
        'SDL_EventType',
        'SDL_CommonEvent',
        'SDL_DisplayEvent',
        'SDL_WindowEvent',
        'SDL_KeyboardEvent',
        'SDL_TextEditingEvent',
        'SDL_TextEditingExtEvent',
        'SDL_TextInputEvent',
        'SDL_MouseMotionEvent',
        'SDL_MouseButtonEvent',
        'SDL_MouseWheelEvent',
        'SDL_JoyAxisEvent',
        'SDL_JoyBallEvent',
        'SDL_JoyHatEvent',
        'SDL_JoyButtonEvent',
        'SDL_JoyDeviceEvent',
        'SDL_JoyBatteryEvent',
        'SDL_ControllerAxisEvent',
        'SDL_ControllerButtonEvent',
        'SDL_ControllerDeviceEvent',
        'SDL_ControllerTouchpadEvent',
        'SDL_ControllerSensorEvent',
        'SDL_AudioDeviceEvent',
        'SDL_TouchFingerEvent',
        'SDL_MultiGestureEvent',
        'SDL_DollarGestureEvent',
        'SDL_DropEvent',
        'SDL_SensorEvent',
        'SDL_QuitEvent',
        'SDL_OSEvent',
        'SDL_UserEvent',
        'SDL_SysWMmsg',
        'SDL_SysWMEvent',
        'SDL_Event',
        'SDL_eventaction',
        'SDL_EventFilter',
        'SDL_Haptic',
        'SDL_HapticDirection',
        'SDL_HapticConstant',
        'SDL_HapticPeriodic',
        'SDL_HapticCondition',
        'SDL_HapticRamp',
        'SDL_HapticLeftRight',
        'SDL_HapticCustom',
        'SDL_HapticEffect',
        'SDL_hid_device',
        'SDL_hid_device_info',
        'SDL_HintPriority',
        'SDL_HintCallback',
        'SDL_LogCategory',
        'SDL_LogPriority',
        'SDL_LogOutputFunction',
        'SDL_MessageBoxFlags',
        'SDL_MessageBoxButtonFlags',
        'SDL_MessageBoxButtonData',
        'SDL_MessageBoxColor',
        'SDL_MessageBoxColorType',
        'SDL_MessageBoxColorScheme',
        'SDL_MessageBoxData',
        'SDL_MetalView',
        'SDL_PowerState',
        'SDL_RendererFlags',
        'SDL_RendererInfo',
        'SDL_Vertex',
        'SDL_ScaleMode',
        'SDL_TextureAccess',
        'SDL_TextureModulate',
        'SDL_RendererFlip',
        'SDL_Renderer',
        'SDL_Texture',
        'WindowShapeMode',
        'SDL_WindowShapeParams',
        'SDL_WindowShapeMode',
        'SDL_TimerCallback',
        'SDL_TimerID',
        'SDL_version',
        'SDL_Locale',
    );

    expectedArguments(\Serafim\SDL\SDL::type(), 0, argumentsSet('sdl_types'));

    override(\Serafim\SDL\SDL::type(), map([
        '' => '@|\PHPSTORM_META\@|\FFI\CData',
    ]));

    expectedArguments(\Serafim\SDL\SDL::new(), 0, argumentsSet('sdl_types'));

    override(\Serafim\SDL\SDL::new(), map([
        '' => '@|\PHPSTORM_META\@|\FFI\CData',
    ]));

    expectedArguments(\Serafim\SDL\SDL::type(), 0, argumentsSet('sdl_types'));

    override(\Serafim\SDL\SDL::type(), map([
        '' => '@|\PHPSTORM_META\@|\FFI\CData',
    ]));


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class max_align_t
    {
        /**
         * @var int<-9223372036854775808, 9223372036854775807>
         */
        public int $__clang_max_align_nonce1;

        /**
         * @var int
         */
        public int $__clang_max_align_nonce2;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_iconv_t
    {
    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_AssertData
    {
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $always_ignore;

        /**
         * @var int<0, 4294967295>
         */
        public int $trigger_count;

        /**
         * @var int<-128, 127>
         */
        public int $condition;

        /**
         * @var int<-128, 127>
         */
        public int $filename;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $linenum;

        /**
         * @var int<-128, 127>
         */
        public int $function;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_AssertData
         */
        public ?\FFI\CData $next;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_atomic_t
    {
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $value;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_mutex
    {
    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_sem
    {
    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_cond
    {
    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_Thread
    {
    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_RWops
    {
        /**
         * @var callable|null
         */
        public \FFI\CData|\Closure|null $size;

        /**
         * @var callable|null
         */
        public \FFI\CData|\Closure|null $seek;

        /**
         * @var callable|null
         */
        public \FFI\CData|\Closure|null $read;

        /**
         * @var callable|null
         */
        public \FFI\CData|\Closure|null $write;

        /**
         * @var callable|null
         */
        public \FFI\CData|\Closure|null $close;

        /**
         * @var int<0, 4294967295>
         */
        public int $type;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\
         */
        public ?\FFI\CData $hidden;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_AudioSpec
    {
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $freq;

        /**
         * @var int<0, 65535>
         */
        public int $format;

        /**
         * @var int<0, 255>
         */
        public int $channels;

        /**
         * @var int<0, 255>
         */
        public int $silence;

        /**
         * @var int<0, 65535>
         */
        public int $samples;

        /**
         * @var int<0, 65535>
         */
        public int $padding;

        /**
         * @var int<0, 4294967295>
         */
        public int $size;

        /**
         * @var callable|null
         */
        public \FFI\CData|\Closure|null $callback;

        /**
         * @var \FFI\CData|null
         */
        public \FFI\CData|null $userdata;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_AudioCVT
    {
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $needed;

        /**
         * @var int<0, 65535>
         */
        public int $src_format;

        /**
         * @var int<0, 65535>
         */
        public int $dst_format;

        /**
         * @var float
         */
        public float $rate_incr;

        /**
         * @var int<0, 255>
         */
        public int $buf;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $len;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $len_cvt;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $len_mult;

        /**
         * @var float
         */
        public float $len_ratio;

        /**
         * @var list<callable|null>
         */
        public array $filters;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $filter_index;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_AudioStream
    {
    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class div_t
    {
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $quot;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $rem;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class ldiv_t
    {
        /**
         * @var int<-9223372036854775808, 9223372036854775807>
         */
        public int $quot;

        /**
         * @var int<-9223372036854775808, 9223372036854775807>
         */
        public int $rem;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class lldiv_t
    {
        /**
         * @var int<-9223372036854775808, 9223372036854775807>
         */
        public int $quot;

        /**
         * @var int<-9223372036854775808, 9223372036854775807>
         */
        public int $rem;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class fsid_t
    {
        /**
         * @var list<int<-2147483648, 2147483647>>
         */
        public array $__val;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class sigset_t
    {
        /**
         * @var list<int<0, 18446744073709551615>>
         */
        public array $__val;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class fd_set
    {
        /**
         * @var list<int<-9223372036854775808, 9223372036854775807>>
         */
        public array $__fds_bits;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class pthread_mutexattr_t
    {
        /**
         * @var list<int<-128, 127>>
         */
        public array $__size;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $__align;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class pthread_condattr_t
    {
        /**
         * @var list<int<-128, 127>>
         */
        public array $__size;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $__align;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class pthread_attr_t
    {
        /**
         * @var list<int<-128, 127>>
         */
        public array $__size;

        /**
         * @var int<-9223372036854775808, 9223372036854775807>
         */
        public int $__align;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class pthread_mutex_t
    {
        /**
         * @var \FFI\CData|null|\PHPSTORM_META\__pthread_mutex_s
         */
        public ?\FFI\CData $__data;

        /**
         * @var list<int<-128, 127>>
         */
        public array $__size;

        /**
         * @var int<-9223372036854775808, 9223372036854775807>
         */
        public int $__align;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class pthread_cond_t
    {
        /**
         * @var \FFI\CData|null|\PHPSTORM_META\__pthread_cond_s
         */
        public ?\FFI\CData $__data;

        /**
         * @var list<int<-128, 127>>
         */
        public array $__size;

        /**
         * @var int<-9223372036854775808, 9223372036854775807>
         */
        public int $__align;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class pthread_rwlock_t
    {
        /**
         * @var \FFI\CData|null|\PHPSTORM_META\__pthread_rwlock_arch_t
         */
        public ?\FFI\CData $__data;

        /**
         * @var list<int<-128, 127>>
         */
        public array $__size;

        /**
         * @var int<-9223372036854775808, 9223372036854775807>
         */
        public int $__align;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class pthread_rwlockattr_t
    {
        /**
         * @var list<int<-128, 127>>
         */
        public array $__size;

        /**
         * @var int<-9223372036854775808, 9223372036854775807>
         */
        public int $__align;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class pthread_barrier_t
    {
        /**
         * @var list<int<-128, 127>>
         */
        public array $__size;

        /**
         * @var int<-9223372036854775808, 9223372036854775807>
         */
        public int $__align;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class pthread_barrierattr_t
    {
        /**
         * @var list<int<-128, 127>>
         */
        public array $__size;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $__align;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_Color
    {
        /**
         * @var int<0, 255>
         */
        public int $r;

        /**
         * @var int<0, 255>
         */
        public int $g;

        /**
         * @var int<0, 255>
         */
        public int $b;

        /**
         * @var int<0, 255>
         */
        public int $a;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_Palette
    {
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $ncolors;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_Color
         */
        public ?\FFI\CData $colors;

        /**
         * @var int<0, 4294967295>
         */
        public int $version;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $refcount;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_PixelFormat
    {
        /**
         * @var int<0, 4294967295>
         */
        public int $format;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_Palette
         */
        public ?\FFI\CData $palette;

        /**
         * @var int<0, 255>
         */
        public int $BitsPerPixel;

        /**
         * @var int<0, 255>
         */
        public int $BytesPerPixel;

        /**
         * @var list<int<0, 255>>
         */
        public array $padding;

        /**
         * @var int<0, 4294967295>
         */
        public int $Rmask;

        /**
         * @var int<0, 4294967295>
         */
        public int $Gmask;

        /**
         * @var int<0, 4294967295>
         */
        public int $Bmask;

        /**
         * @var int<0, 4294967295>
         */
        public int $Amask;

        /**
         * @var int<0, 255>
         */
        public int $Rloss;

        /**
         * @var int<0, 255>
         */
        public int $Gloss;

        /**
         * @var int<0, 255>
         */
        public int $Bloss;

        /**
         * @var int<0, 255>
         */
        public int $Aloss;

        /**
         * @var int<0, 255>
         */
        public int $Rshift;

        /**
         * @var int<0, 255>
         */
        public int $Gshift;

        /**
         * @var int<0, 255>
         */
        public int $Bshift;

        /**
         * @var int<0, 255>
         */
        public int $Ashift;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $refcount;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_PixelFormat
         */
        public ?\FFI\CData $next;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_Point
    {
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $x;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $y;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_FPoint
    {
        /**
         * @var float
         */
        public float $x;

        /**
         * @var float
         */
        public float $y;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_Rect
    {
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $x;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $y;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $w;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $h;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_FRect
    {
        /**
         * @var float
         */
        public float $x;

        /**
         * @var float
         */
        public float $y;

        /**
         * @var float
         */
        public float $w;

        /**
         * @var float
         */
        public float $h;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_BlitMap
    {
    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_Surface
    {
        /**
         * @var int<0, 4294967295>
         */
        public int $flags;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_PixelFormat
         */
        public ?\FFI\CData $format;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $w;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $h;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $pitch;

        /**
         * @var \FFI\CData|null
         */
        public \FFI\CData|null $pixels;

        /**
         * @var \FFI\CData|null
         */
        public \FFI\CData|null $userdata;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $locked;

        /**
         * @var \FFI\CData|null
         */
        public \FFI\CData|null $list_blitmap;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_Rect
         */
        public ?\FFI\CData $clip_rect;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_BlitMap
         */
        public ?\FFI\CData $map;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $refcount;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_DisplayMode
    {
        /**
         * @var int<0, 4294967295>
         */
        public int $format;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $w;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $h;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $refresh_rate;

        /**
         * @var \FFI\CData|null
         */
        public \FFI\CData|null $driverdata;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_Window
    {
    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_Keysym
    {
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $scancode;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $sym;

        /**
         * @var int<0, 65535>
         */
        public int $mod;

        /**
         * @var int<0, 4294967295>
         */
        public int $unused;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_Cursor
    {
    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_GUID
    {
        /**
         * @var list<int<0, 255>>
         */
        public array $data;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_Joystick
    {
    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_JoystickGUID
    {
        /**
         * @var list<int<0, 255>>
         */
        public array $data;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_VirtualJoystickDesc
    {
        /**
         * @var int<0, 65535>
         */
        public int $version;

        /**
         * @var int<0, 65535>
         */
        public int $type;

        /**
         * @var int<0, 65535>
         */
        public int $naxes;

        /**
         * @var int<0, 65535>
         */
        public int $nbuttons;

        /**
         * @var int<0, 65535>
         */
        public int $nhats;

        /**
         * @var int<0, 65535>
         */
        public int $vendor_id;

        /**
         * @var int<0, 65535>
         */
        public int $product_id;

        /**
         * @var int<0, 65535>
         */
        public int $padding;

        /**
         * @var int<0, 4294967295>
         */
        public int $button_mask;

        /**
         * @var int<0, 4294967295>
         */
        public int $axis_mask;

        /**
         * @var int<-128, 127>
         */
        public int $name;

        /**
         * @var \FFI\CData|null
         */
        public \FFI\CData|null $userdata;

        /**
         * @var callable|null
         */
        public \FFI\CData|\Closure|null $Update;

        /**
         * @var callable|null
         */
        public \FFI\CData|\Closure|null $SetPlayerIndex;

        /**
         * @var callable|null
         */
        public \FFI\CData|\Closure|null $Rumble;

        /**
         * @var callable|null
         */
        public \FFI\CData|\Closure|null $RumbleTriggers;

        /**
         * @var callable|null
         */
        public \FFI\CData|\Closure|null $SetLED;

        /**
         * @var callable|null
         */
        public \FFI\CData|\Closure|null $SendEffect;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_Sensor
    {
    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_GameController
    {
    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_GameControllerButtonBind
    {
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $bindType;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\
         */
        public ?\FFI\CData $value;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_Finger
    {
        /**
         * @var int<-9223372036854775808, 9223372036854775807>
         */
        public int $id;

        /**
         * @var float
         */
        public float $x;

        /**
         * @var float
         */
        public float $y;

        /**
         * @var float
         */
        public float $pressure;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_CommonEvent
    {
        /**
         * @var int<0, 4294967295>
         */
        public int $type;

        /**
         * @var int<0, 4294967295>
         */
        public int $timestamp;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_DisplayEvent
    {
        /**
         * @var int<0, 4294967295>
         */
        public int $type;

        /**
         * @var int<0, 4294967295>
         */
        public int $timestamp;

        /**
         * @var int<0, 4294967295>
         */
        public int $display;

        /**
         * @var int<0, 255>
         */
        public int $event;

        /**
         * @var int<0, 255>
         */
        public int $padding1;

        /**
         * @var int<0, 255>
         */
        public int $padding2;

        /**
         * @var int<0, 255>
         */
        public int $padding3;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $data1;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_WindowEvent
    {
        /**
         * @var int<0, 4294967295>
         */
        public int $type;

        /**
         * @var int<0, 4294967295>
         */
        public int $timestamp;

        /**
         * @var int<0, 4294967295>
         */
        public int $windowID;

        /**
         * @var int<0, 255>
         */
        public int $event;

        /**
         * @var int<0, 255>
         */
        public int $padding1;

        /**
         * @var int<0, 255>
         */
        public int $padding2;

        /**
         * @var int<0, 255>
         */
        public int $padding3;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $data1;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $data2;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_KeyboardEvent
    {
        /**
         * @var int<0, 4294967295>
         */
        public int $type;

        /**
         * @var int<0, 4294967295>
         */
        public int $timestamp;

        /**
         * @var int<0, 4294967295>
         */
        public int $windowID;

        /**
         * @var int<0, 255>
         */
        public int $state;

        /**
         * @var int<0, 255>
         */
        public int $repeat;

        /**
         * @var int<0, 255>
         */
        public int $padding2;

        /**
         * @var int<0, 255>
         */
        public int $padding3;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_Keysym
         */
        public ?\FFI\CData $keysym;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_TextEditingEvent
    {
        /**
         * @var int<0, 4294967295>
         */
        public int $type;

        /**
         * @var int<0, 4294967295>
         */
        public int $timestamp;

        /**
         * @var int<0, 4294967295>
         */
        public int $windowID;

        /**
         * @var list<int<-128, 127>>
         */
        public array $text;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $start;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $length;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_TextEditingExtEvent
    {
        /**
         * @var int<0, 4294967295>
         */
        public int $type;

        /**
         * @var int<0, 4294967295>
         */
        public int $timestamp;

        /**
         * @var int<0, 4294967295>
         */
        public int $windowID;

        /**
         * @var int<-128, 127>
         */
        public int $text;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $start;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $length;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_TextInputEvent
    {
        /**
         * @var int<0, 4294967295>
         */
        public int $type;

        /**
         * @var int<0, 4294967295>
         */
        public int $timestamp;

        /**
         * @var int<0, 4294967295>
         */
        public int $windowID;

        /**
         * @var list<int<-128, 127>>
         */
        public array $text;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_MouseMotionEvent
    {
        /**
         * @var int<0, 4294967295>
         */
        public int $type;

        /**
         * @var int<0, 4294967295>
         */
        public int $timestamp;

        /**
         * @var int<0, 4294967295>
         */
        public int $windowID;

        /**
         * @var int<0, 4294967295>
         */
        public int $which;

        /**
         * @var int<0, 4294967295>
         */
        public int $state;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $x;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $y;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $xrel;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $yrel;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_MouseButtonEvent
    {
        /**
         * @var int<0, 4294967295>
         */
        public int $type;

        /**
         * @var int<0, 4294967295>
         */
        public int $timestamp;

        /**
         * @var int<0, 4294967295>
         */
        public int $windowID;

        /**
         * @var int<0, 4294967295>
         */
        public int $which;

        /**
         * @var int<0, 255>
         */
        public int $button;

        /**
         * @var int<0, 255>
         */
        public int $state;

        /**
         * @var int<0, 255>
         */
        public int $clicks;

        /**
         * @var int<0, 255>
         */
        public int $padding1;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $x;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $y;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_MouseWheelEvent
    {
        /**
         * @var int<0, 4294967295>
         */
        public int $type;

        /**
         * @var int<0, 4294967295>
         */
        public int $timestamp;

        /**
         * @var int<0, 4294967295>
         */
        public int $windowID;

        /**
         * @var int<0, 4294967295>
         */
        public int $which;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $x;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $y;

        /**
         * @var int<0, 4294967295>
         */
        public int $direction;

        /**
         * @var float
         */
        public float $preciseX;

        /**
         * @var float
         */
        public float $preciseY;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $mouseX;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $mouseY;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_JoyAxisEvent
    {
        /**
         * @var int<0, 4294967295>
         */
        public int $type;

        /**
         * @var int<0, 4294967295>
         */
        public int $timestamp;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $which;

        /**
         * @var int<0, 255>
         */
        public int $axis;

        /**
         * @var int<0, 255>
         */
        public int $padding1;

        /**
         * @var int<0, 255>
         */
        public int $padding2;

        /**
         * @var int<0, 255>
         */
        public int $padding3;

        /**
         * @var int<-32768, 32767>
         */
        public int $value;

        /**
         * @var int<0, 65535>
         */
        public int $padding4;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_JoyBallEvent
    {
        /**
         * @var int<0, 4294967295>
         */
        public int $type;

        /**
         * @var int<0, 4294967295>
         */
        public int $timestamp;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $which;

        /**
         * @var int<0, 255>
         */
        public int $ball;

        /**
         * @var int<0, 255>
         */
        public int $padding1;

        /**
         * @var int<0, 255>
         */
        public int $padding2;

        /**
         * @var int<0, 255>
         */
        public int $padding3;

        /**
         * @var int<-32768, 32767>
         */
        public int $xrel;

        /**
         * @var int<-32768, 32767>
         */
        public int $yrel;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_JoyHatEvent
    {
        /**
         * @var int<0, 4294967295>
         */
        public int $type;

        /**
         * @var int<0, 4294967295>
         */
        public int $timestamp;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $which;

        /**
         * @var int<0, 255>
         */
        public int $hat;

        /**
         * @var int<0, 255>
         */
        public int $value;

        /**
         * @var int<0, 255>
         */
        public int $padding1;

        /**
         * @var int<0, 255>
         */
        public int $padding2;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_JoyButtonEvent
    {
        /**
         * @var int<0, 4294967295>
         */
        public int $type;

        /**
         * @var int<0, 4294967295>
         */
        public int $timestamp;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $which;

        /**
         * @var int<0, 255>
         */
        public int $button;

        /**
         * @var int<0, 255>
         */
        public int $state;

        /**
         * @var int<0, 255>
         */
        public int $padding1;

        /**
         * @var int<0, 255>
         */
        public int $padding2;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_JoyDeviceEvent
    {
        /**
         * @var int<0, 4294967295>
         */
        public int $type;

        /**
         * @var int<0, 4294967295>
         */
        public int $timestamp;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $which;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_JoyBatteryEvent
    {
        /**
         * @var int<0, 4294967295>
         */
        public int $type;

        /**
         * @var int<0, 4294967295>
         */
        public int $timestamp;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $which;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $level;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_ControllerAxisEvent
    {
        /**
         * @var int<0, 4294967295>
         */
        public int $type;

        /**
         * @var int<0, 4294967295>
         */
        public int $timestamp;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $which;

        /**
         * @var int<0, 255>
         */
        public int $axis;

        /**
         * @var int<0, 255>
         */
        public int $padding1;

        /**
         * @var int<0, 255>
         */
        public int $padding2;

        /**
         * @var int<0, 255>
         */
        public int $padding3;

        /**
         * @var int<-32768, 32767>
         */
        public int $value;

        /**
         * @var int<0, 65535>
         */
        public int $padding4;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_ControllerButtonEvent
    {
        /**
         * @var int<0, 4294967295>
         */
        public int $type;

        /**
         * @var int<0, 4294967295>
         */
        public int $timestamp;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $which;

        /**
         * @var int<0, 255>
         */
        public int $button;

        /**
         * @var int<0, 255>
         */
        public int $state;

        /**
         * @var int<0, 255>
         */
        public int $padding1;

        /**
         * @var int<0, 255>
         */
        public int $padding2;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_ControllerDeviceEvent
    {
        /**
         * @var int<0, 4294967295>
         */
        public int $type;

        /**
         * @var int<0, 4294967295>
         */
        public int $timestamp;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $which;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_ControllerTouchpadEvent
    {
        /**
         * @var int<0, 4294967295>
         */
        public int $type;

        /**
         * @var int<0, 4294967295>
         */
        public int $timestamp;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $which;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $touchpad;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $finger;

        /**
         * @var float
         */
        public float $x;

        /**
         * @var float
         */
        public float $y;

        /**
         * @var float
         */
        public float $pressure;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_ControllerSensorEvent
    {
        /**
         * @var int<0, 4294967295>
         */
        public int $type;

        /**
         * @var int<0, 4294967295>
         */
        public int $timestamp;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $which;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $sensor;

        /**
         * @var list<float>
         */
        public array $data;

        /**
         * @var int<0, 18446744073709551615>
         */
        public int $timestamp_us;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_AudioDeviceEvent
    {
        /**
         * @var int<0, 4294967295>
         */
        public int $type;

        /**
         * @var int<0, 4294967295>
         */
        public int $timestamp;

        /**
         * @var int<0, 4294967295>
         */
        public int $which;

        /**
         * @var int<0, 255>
         */
        public int $iscapture;

        /**
         * @var int<0, 255>
         */
        public int $padding1;

        /**
         * @var int<0, 255>
         */
        public int $padding2;

        /**
         * @var int<0, 255>
         */
        public int $padding3;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_TouchFingerEvent
    {
        /**
         * @var int<0, 4294967295>
         */
        public int $type;

        /**
         * @var int<0, 4294967295>
         */
        public int $timestamp;

        /**
         * @var int<-9223372036854775808, 9223372036854775807>
         */
        public int $touchId;

        /**
         * @var int<-9223372036854775808, 9223372036854775807>
         */
        public int $fingerId;

        /**
         * @var float
         */
        public float $x;

        /**
         * @var float
         */
        public float $y;

        /**
         * @var float
         */
        public float $dx;

        /**
         * @var float
         */
        public float $dy;

        /**
         * @var float
         */
        public float $pressure;

        /**
         * @var int<0, 4294967295>
         */
        public int $windowID;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_MultiGestureEvent
    {
        /**
         * @var int<0, 4294967295>
         */
        public int $type;

        /**
         * @var int<0, 4294967295>
         */
        public int $timestamp;

        /**
         * @var int<-9223372036854775808, 9223372036854775807>
         */
        public int $touchId;

        /**
         * @var float
         */
        public float $dTheta;

        /**
         * @var float
         */
        public float $dDist;

        /**
         * @var float
         */
        public float $x;

        /**
         * @var float
         */
        public float $y;

        /**
         * @var int<0, 65535>
         */
        public int $numFingers;

        /**
         * @var int<0, 65535>
         */
        public int $padding;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_DollarGestureEvent
    {
        /**
         * @var int<0, 4294967295>
         */
        public int $type;

        /**
         * @var int<0, 4294967295>
         */
        public int $timestamp;

        /**
         * @var int<-9223372036854775808, 9223372036854775807>
         */
        public int $touchId;

        /**
         * @var int<-9223372036854775808, 9223372036854775807>
         */
        public int $gestureId;

        /**
         * @var int<0, 4294967295>
         */
        public int $numFingers;

        /**
         * @var float
         */
        public float $error;

        /**
         * @var float
         */
        public float $x;

        /**
         * @var float
         */
        public float $y;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_DropEvent
    {
        /**
         * @var int<0, 4294967295>
         */
        public int $type;

        /**
         * @var int<0, 4294967295>
         */
        public int $timestamp;

        /**
         * @var int<-128, 127>
         */
        public int $file;

        /**
         * @var int<0, 4294967295>
         */
        public int $windowID;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_SensorEvent
    {
        /**
         * @var int<0, 4294967295>
         */
        public int $type;

        /**
         * @var int<0, 4294967295>
         */
        public int $timestamp;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $which;

        /**
         * @var list<float>
         */
        public array $data;

        /**
         * @var int<0, 18446744073709551615>
         */
        public int $timestamp_us;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_QuitEvent
    {
        /**
         * @var int<0, 4294967295>
         */
        public int $type;

        /**
         * @var int<0, 4294967295>
         */
        public int $timestamp;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_OSEvent
    {
        /**
         * @var int<0, 4294967295>
         */
        public int $type;

        /**
         * @var int<0, 4294967295>
         */
        public int $timestamp;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_UserEvent
    {
        /**
         * @var int<0, 4294967295>
         */
        public int $type;

        /**
         * @var int<0, 4294967295>
         */
        public int $timestamp;

        /**
         * @var int<0, 4294967295>
         */
        public int $windowID;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $code;

        /**
         * @var \FFI\CData|null
         */
        public \FFI\CData|null $data1;

        /**
         * @var \FFI\CData|null
         */
        public \FFI\CData|null $data2;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_SysWMmsg
    {
    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_SysWMEvent
    {
        /**
         * @var int<0, 4294967295>
         */
        public int $type;

        /**
         * @var int<0, 4294967295>
         */
        public int $timestamp;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_SysWMmsg
         */
        public ?\FFI\CData $msg;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_Event
    {
        /**
         * @var int<0, 4294967295>
         */
        public int $type;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_CommonEvent
         */
        public ?\FFI\CData $common;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_DisplayEvent
         */
        public ?\FFI\CData $display;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_WindowEvent
         */
        public ?\FFI\CData $window;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_KeyboardEvent
         */
        public ?\FFI\CData $key;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_TextEditingEvent
         */
        public ?\FFI\CData $edit;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_TextEditingExtEvent
         */
        public ?\FFI\CData $editExt;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_TextInputEvent
         */
        public ?\FFI\CData $text;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_MouseMotionEvent
         */
        public ?\FFI\CData $motion;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_MouseButtonEvent
         */
        public ?\FFI\CData $button;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_MouseWheelEvent
         */
        public ?\FFI\CData $wheel;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_JoyAxisEvent
         */
        public ?\FFI\CData $jaxis;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_JoyBallEvent
         */
        public ?\FFI\CData $jball;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_JoyHatEvent
         */
        public ?\FFI\CData $jhat;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_JoyButtonEvent
         */
        public ?\FFI\CData $jbutton;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_JoyDeviceEvent
         */
        public ?\FFI\CData $jdevice;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_JoyBatteryEvent
         */
        public ?\FFI\CData $jbattery;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_ControllerAxisEvent
         */
        public ?\FFI\CData $caxis;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_ControllerButtonEvent
         */
        public ?\FFI\CData $cbutton;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_ControllerDeviceEvent
         */
        public ?\FFI\CData $cdevice;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_ControllerTouchpadEvent
         */
        public ?\FFI\CData $ctouchpad;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_ControllerSensorEvent
         */
        public ?\FFI\CData $csensor;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_AudioDeviceEvent
         */
        public ?\FFI\CData $adevice;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_SensorEvent
         */
        public ?\FFI\CData $sensor;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_QuitEvent
         */
        public ?\FFI\CData $quit;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_UserEvent
         */
        public ?\FFI\CData $user;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_SysWMEvent
         */
        public ?\FFI\CData $syswm;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_TouchFingerEvent
         */
        public ?\FFI\CData $tfinger;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_MultiGestureEvent
         */
        public ?\FFI\CData $mgesture;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_DollarGestureEvent
         */
        public ?\FFI\CData $dgesture;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_DropEvent
         */
        public ?\FFI\CData $drop;

        /**
         * @var list<int<0, 255>>
         */
        public array $padding;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_Haptic
    {
    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_HapticDirection
    {
        /**
         * @var int<0, 255>
         */
        public int $type;

        /**
         * @var list<int<-2147483648, 2147483647>>
         */
        public array $dir;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_HapticConstant
    {
        /**
         * @var int<0, 65535>
         */
        public int $type;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_HapticDirection
         */
        public ?\FFI\CData $direction;

        /**
         * @var int<0, 4294967295>
         */
        public int $length;

        /**
         * @var int<0, 65535>
         */
        public int $delay;

        /**
         * @var int<0, 65535>
         */
        public int $button;

        /**
         * @var int<0, 65535>
         */
        public int $interval;

        /**
         * @var int<-32768, 32767>
         */
        public int $level;

        /**
         * @var int<0, 65535>
         */
        public int $attack_length;

        /**
         * @var int<0, 65535>
         */
        public int $attack_level;

        /**
         * @var int<0, 65535>
         */
        public int $fade_length;

        /**
         * @var int<0, 65535>
         */
        public int $fade_level;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_HapticPeriodic
    {
        /**
         * @var int<0, 65535>
         */
        public int $type;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_HapticDirection
         */
        public ?\FFI\CData $direction;

        /**
         * @var int<0, 4294967295>
         */
        public int $length;

        /**
         * @var int<0, 65535>
         */
        public int $delay;

        /**
         * @var int<0, 65535>
         */
        public int $button;

        /**
         * @var int<0, 65535>
         */
        public int $interval;

        /**
         * @var int<0, 65535>
         */
        public int $period;

        /**
         * @var int<-32768, 32767>
         */
        public int $magnitude;

        /**
         * @var int<-32768, 32767>
         */
        public int $offset;

        /**
         * @var int<0, 65535>
         */
        public int $phase;

        /**
         * @var int<0, 65535>
         */
        public int $attack_length;

        /**
         * @var int<0, 65535>
         */
        public int $attack_level;

        /**
         * @var int<0, 65535>
         */
        public int $fade_length;

        /**
         * @var int<0, 65535>
         */
        public int $fade_level;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_HapticCondition
    {
        /**
         * @var int<0, 65535>
         */
        public int $type;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_HapticDirection
         */
        public ?\FFI\CData $direction;

        /**
         * @var int<0, 4294967295>
         */
        public int $length;

        /**
         * @var int<0, 65535>
         */
        public int $delay;

        /**
         * @var int<0, 65535>
         */
        public int $button;

        /**
         * @var int<0, 65535>
         */
        public int $interval;

        /**
         * @var list<int<0, 65535>>
         */
        public array $right_sat;

        /**
         * @var list<int<0, 65535>>
         */
        public array $left_sat;

        /**
         * @var list<int<-32768, 32767>>
         */
        public array $right_coeff;

        /**
         * @var list<int<-32768, 32767>>
         */
        public array $left_coeff;

        /**
         * @var list<int<0, 65535>>
         */
        public array $deadband;

        /**
         * @var list<int<-32768, 32767>>
         */
        public array $center;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_HapticRamp
    {
        /**
         * @var int<0, 65535>
         */
        public int $type;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_HapticDirection
         */
        public ?\FFI\CData $direction;

        /**
         * @var int<0, 4294967295>
         */
        public int $length;

        /**
         * @var int<0, 65535>
         */
        public int $delay;

        /**
         * @var int<0, 65535>
         */
        public int $button;

        /**
         * @var int<0, 65535>
         */
        public int $interval;

        /**
         * @var int<-32768, 32767>
         */
        public int $start;

        /**
         * @var int<-32768, 32767>
         */
        public int $end;

        /**
         * @var int<0, 65535>
         */
        public int $attack_length;

        /**
         * @var int<0, 65535>
         */
        public int $attack_level;

        /**
         * @var int<0, 65535>
         */
        public int $fade_length;

        /**
         * @var int<0, 65535>
         */
        public int $fade_level;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_HapticLeftRight
    {
        /**
         * @var int<0, 65535>
         */
        public int $type;

        /**
         * @var int<0, 4294967295>
         */
        public int $length;

        /**
         * @var int<0, 65535>
         */
        public int $large_magnitude;

        /**
         * @var int<0, 65535>
         */
        public int $small_magnitude;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_HapticCustom
    {
        /**
         * @var int<0, 65535>
         */
        public int $type;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_HapticDirection
         */
        public ?\FFI\CData $direction;

        /**
         * @var int<0, 4294967295>
         */
        public int $length;

        /**
         * @var int<0, 65535>
         */
        public int $delay;

        /**
         * @var int<0, 65535>
         */
        public int $button;

        /**
         * @var int<0, 65535>
         */
        public int $interval;

        /**
         * @var int<0, 255>
         */
        public int $channels;

        /**
         * @var int<0, 65535>
         */
        public int $period;

        /**
         * @var int<0, 65535>
         */
        public int $samples;

        /**
         * @var int<0, 65535>
         */
        public int $data;

        /**
         * @var int<0, 65535>
         */
        public int $attack_length;

        /**
         * @var int<0, 65535>
         */
        public int $attack_level;

        /**
         * @var int<0, 65535>
         */
        public int $fade_length;

        /**
         * @var int<0, 65535>
         */
        public int $fade_level;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_HapticEffect
    {
        /**
         * @var int<0, 65535>
         */
        public int $type;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_HapticConstant
         */
        public ?\FFI\CData $constant;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_HapticPeriodic
         */
        public ?\FFI\CData $periodic;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_HapticCondition
         */
        public ?\FFI\CData $condition;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_HapticRamp
         */
        public ?\FFI\CData $ramp;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_HapticLeftRight
         */
        public ?\FFI\CData $leftright;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_HapticCustom
         */
        public ?\FFI\CData $custom;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_hid_device
    {
    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_hid_device_info
    {
        /**
         * @var int<-128, 127>
         */
        public int $path;

        /**
         * @var int<0, 65535>
         */
        public int $vendor_id;

        /**
         * @var int<0, 65535>
         */
        public int $product_id;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $serial_number;

        /**
         * @var int<0, 65535>
         */
        public int $release_number;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $manufacturer_string;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $product_string;

        /**
         * @var int<0, 65535>
         */
        public int $usage_page;

        /**
         * @var int<0, 65535>
         */
        public int $usage;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $interface_number;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $interface_class;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $interface_subclass;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $interface_protocol;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_hid_device_info
         */
        public ?\FFI\CData $next;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_MessageBoxButtonData
    {
        /**
         * @var int<0, 4294967295>
         */
        public int $flags;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $buttonid;

        /**
         * @var int<-128, 127>
         */
        public int $text;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_MessageBoxColor
    {
        /**
         * @var int<0, 255>
         */
        public int $r;

        /**
         * @var int<0, 255>
         */
        public int $g;

        /**
         * @var int<0, 255>
         */
        public int $b;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_MessageBoxColorScheme
    {
        /**
         * @var list<\FFI\CData|null|\PHPSTORM_META\>
         */
        public array $colors;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_MessageBoxData
    {
        /**
         * @var int<0, 4294967295>
         */
        public int $flags;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_Window
         */
        public ?\FFI\CData $window;

        /**
         * @var int<-128, 127>
         */
        public int $title;

        /**
         * @var int<-128, 127>
         */
        public int $message;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $numbuttons;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\
         */
        public ?\FFI\CData $buttons;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\
         */
        public ?\FFI\CData $colorScheme;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_RendererInfo
    {
        /**
         * @var int<-128, 127>
         */
        public int $name;

        /**
         * @var int<0, 4294967295>
         */
        public int $flags;

        /**
         * @var int<0, 4294967295>
         */
        public int $num_texture_formats;

        /**
         * @var list<int<0, 4294967295>>
         */
        public array $texture_formats;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $max_texture_width;

        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $max_texture_height;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_Vertex
    {
        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_FPoint
         */
        public ?\FFI\CData $position;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_Color
         */
        public ?\FFI\CData $color;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_FPoint
         */
        public ?\FFI\CData $tex_coord;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_Renderer
    {
    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_Texture
    {
    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_WindowShapeParams
    {
        /**
         * @var int<0, 255>
         */
        public int $binarizationCutoff;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\SDL_Color
         */
        public ?\FFI\CData $colorKey;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_WindowShapeMode
    {
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $mode;

        /**
         * @var \FFI\CData|null|\PHPSTORM_META\
         */
        public ?\FFI\CData $parameters;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_version
    {
        /**
         * @var int<0, 255>
         */
        public int $major;

        /**
         * @var int<0, 255>
         */
        public int $minor;

        /**
         * @var int<0, 255>
         */
        public int $patch;

    }


    /**
     * @internal Internal interface to ensure precise type inference
     * @deprecated Internal interface to ensure precise type inference
     * @mixin \FFI\CData
     */
    final class SDL_Locale
    {
        /**
         * @var int<-128, 127>
         */
        public int $language;

        /**
         * @var int<-128, 127>
         */
        public int $country;

    }

}

namespace Serafim\SDL {


    interface SDL
    {
        /**
         * @return int<-128, 127>
         */
        public function SDL_GetPlatform(): int;

        /**
         * @param int<0, 18446744073709551615> $size
         * @return \FFI\CData|null
         */
        public function SDL_malloc(int $size,): \FFI\CData|null;

        /**
         * @param int<0, 18446744073709551615> $nmemb
         * @param int<0, 18446744073709551615> $size
         * @return \FFI\CData|null
         */
        public function SDL_calloc(int $nmemb,int $size,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null $mem
         * @param int<0, 18446744073709551615> $size
         * @return \FFI\CData|null
         */
        public function SDL_realloc(\FFI\CData|null $mem,int $size,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null $mem
         * @return \FFI\CData|null
         */
        public function SDL_free(\FFI\CData|null $mem,): \FFI\CData|null;

        /**
         * @param callable|null $malloc_func
         * @param callable|null $calloc_func
         * @param callable|null $realloc_func
         * @param callable|null $free_func
         * @return \FFI\CData|null
         */
        public function SDL_GetOriginalMemoryFunctions(\FFI\CData|\Closure|null $malloc_func,\FFI\CData|\Closure|null $calloc_func,\FFI\CData|\Closure|null $realloc_func,\FFI\CData|\Closure|null $free_func,): \FFI\CData|null;

        /**
         * @param callable|null $malloc_func
         * @param callable|null $calloc_func
         * @param callable|null $realloc_func
         * @param callable|null $free_func
         * @return \FFI\CData|null
         */
        public function SDL_GetMemoryFunctions(\FFI\CData|\Closure|null $malloc_func,\FFI\CData|\Closure|null $calloc_func,\FFI\CData|\Closure|null $realloc_func,\FFI\CData|\Closure|null $free_func,): \FFI\CData|null;

        /**
         * @param callable|null $malloc_func
         * @param callable|null $calloc_func
         * @param callable|null $realloc_func
         * @param callable|null $free_func
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetMemoryFunctions(\FFI\CData|\Closure|null $malloc_func,\FFI\CData|\Closure|null $calloc_func,\FFI\CData|\Closure|null $realloc_func,\FFI\CData|\Closure|null $free_func,): int;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetNumAllocations(): int;

        /**
         * @param int<-128, 127> $name
         * @return int<-128, 127>
         */
        public function SDL_getenv(int $name,): int;

        /**
         * @param int<-128, 127> $name
         * @param int<-128, 127> $value
         * @param int<-2147483648, 2147483647> $overwrite
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_setenv(int $name,int $value,int $overwrite,): int;

        /**
         * @param \FFI\CData|null $base
         * @param int<0, 18446744073709551615> $nmemb
         * @param int<0, 18446744073709551615> $size
         * @param callable|null $compare
         * @return \FFI\CData|null
         */
        public function SDL_qsort(\FFI\CData|null $base,int $nmemb,int $size,\FFI\CData|\Closure|null $compare,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null $key
         * @param \FFI\CData|null $base
         * @param int<0, 18446744073709551615> $nmemb
         * @param int<0, 18446744073709551615> $size
         * @param callable|null $compare
         * @return \FFI\CData|null
         */
        public function SDL_bsearch(\FFI\CData|null $key,\FFI\CData|null $base,int $nmemb,int $size,\FFI\CData|\Closure|null $compare,): \FFI\CData|null;

        /**
         * @param int<-2147483648, 2147483647> $x
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_abs(int $x,): int;

        /**
         * @param int<-2147483648, 2147483647> $x
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_isalpha(int $x,): int;

        /**
         * @param int<-2147483648, 2147483647> $x
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_isalnum(int $x,): int;

        /**
         * @param int<-2147483648, 2147483647> $x
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_isblank(int $x,): int;

        /**
         * @param int<-2147483648, 2147483647> $x
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_iscntrl(int $x,): int;

        /**
         * @param int<-2147483648, 2147483647> $x
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_isdigit(int $x,): int;

        /**
         * @param int<-2147483648, 2147483647> $x
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_isxdigit(int $x,): int;

        /**
         * @param int<-2147483648, 2147483647> $x
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_ispunct(int $x,): int;

        /**
         * @param int<-2147483648, 2147483647> $x
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_isspace(int $x,): int;

        /**
         * @param int<-2147483648, 2147483647> $x
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_isupper(int $x,): int;

        /**
         * @param int<-2147483648, 2147483647> $x
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_islower(int $x,): int;

        /**
         * @param int<-2147483648, 2147483647> $x
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_isprint(int $x,): int;

        /**
         * @param int<-2147483648, 2147483647> $x
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_isgraph(int $x,): int;

        /**
         * @param int<-2147483648, 2147483647> $x
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_toupper(int $x,): int;

        /**
         * @param int<-2147483648, 2147483647> $x
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_tolower(int $x,): int;

        /**
         * @param int<0, 65535> $crc
         * @param \FFI\CData|null $data
         * @param int<0, 18446744073709551615> $len
         * @return int<0, 65535>
         */
        public function SDL_crc16(int $crc,\FFI\CData|null $data,int $len,): int;

        /**
         * @param int<0, 4294967295> $crc
         * @param \FFI\CData|null $data
         * @param int<0, 18446744073709551615> $len
         * @return int<0, 4294967295>
         */
        public function SDL_crc32(int $crc,\FFI\CData|null $data,int $len,): int;

        /**
         * @param \FFI\CData|null $dst
         * @param int<-2147483648, 2147483647> $c
         * @param int<0, 18446744073709551615> $len
         * @return \FFI\CData|null
         */
        public function SDL_memset(\FFI\CData|null $dst,int $c,int $len,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null $dst
         * @param int<0, 4294967295> $val
         * @param int<0, 18446744073709551615> $dwords
         * @return \FFI\CData|null
         */
        public function SDL_memset4(\FFI\CData|null $dst,int $val,int $dwords,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null $dst
         * @param \FFI\CData|null $src
         * @param int<0, 18446744073709551615> $len
         * @return \FFI\CData|null
         */
        public function SDL_memcpy(\FFI\CData|null $dst,\FFI\CData|null $src,int $len,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null $dst
         * @param \FFI\CData|null $src
         * @param int<0, 18446744073709551615> $len
         * @return \FFI\CData|null
         */
        public function SDL_memmove(\FFI\CData|null $dst,\FFI\CData|null $src,int $len,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null $s1
         * @param \FFI\CData|null $s2
         * @param int<0, 18446744073709551615> $len
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_memcmp(\FFI\CData|null $s1,\FFI\CData|null $s2,int $len,): int;

        /**
         * @param int<-2147483648, 2147483647> $wstr
         * @return int<0, 18446744073709551615>
         */
        public function SDL_wcslen(int $wstr,): int;

        /**
         * @param int<-2147483648, 2147483647> $dst
         * @param int<-2147483648, 2147483647> $src
         * @param int<0, 18446744073709551615> $maxlen
         * @return int<0, 18446744073709551615>
         */
        public function SDL_wcslcpy(int $dst,int $src,int $maxlen,): int;

        /**
         * @param int<-2147483648, 2147483647> $dst
         * @param int<-2147483648, 2147483647> $src
         * @param int<0, 18446744073709551615> $maxlen
         * @return int<0, 18446744073709551615>
         */
        public function SDL_wcslcat(int $dst,int $src,int $maxlen,): int;

        /**
         * @param int<-2147483648, 2147483647> $wstr
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_wcsdup(int $wstr,): int;

        /**
         * @param int<-2147483648, 2147483647> $haystack
         * @param int<-2147483648, 2147483647> $needle
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_wcsstr(int $haystack,int $needle,): int;

        /**
         * @param int<-2147483648, 2147483647> $str1
         * @param int<-2147483648, 2147483647> $str2
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_wcscmp(int $str1,int $str2,): int;

        /**
         * @param int<-2147483648, 2147483647> $str1
         * @param int<-2147483648, 2147483647> $str2
         * @param int<0, 18446744073709551615> $maxlen
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_wcsncmp(int $str1,int $str2,int $maxlen,): int;

        /**
         * @param int<-2147483648, 2147483647> $str1
         * @param int<-2147483648, 2147483647> $str2
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_wcscasecmp(int $str1,int $str2,): int;

        /**
         * @param int<-2147483648, 2147483647> $str1
         * @param int<-2147483648, 2147483647> $str2
         * @param int<0, 18446744073709551615> $len
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_wcsncasecmp(int $str1,int $str2,int $len,): int;

        /**
         * @param int<-128, 127> $str
         * @return int<0, 18446744073709551615>
         */
        public function SDL_strlen(int $str,): int;

        /**
         * @param int<-128, 127> $dst
         * @param int<-128, 127> $src
         * @param int<0, 18446744073709551615> $maxlen
         * @return int<0, 18446744073709551615>
         */
        public function SDL_strlcpy(int $dst,int $src,int $maxlen,): int;

        /**
         * @param int<-128, 127> $dst
         * @param int<-128, 127> $src
         * @param int<0, 18446744073709551615> $dst_bytes
         * @return int<0, 18446744073709551615>
         */
        public function SDL_utf8strlcpy(int $dst,int $src,int $dst_bytes,): int;

        /**
         * @param int<-128, 127> $dst
         * @param int<-128, 127> $src
         * @param int<0, 18446744073709551615> $maxlen
         * @return int<0, 18446744073709551615>
         */
        public function SDL_strlcat(int $dst,int $src,int $maxlen,): int;

        /**
         * @param int<-128, 127> $str
         * @return int<-128, 127>
         */
        public function SDL_strdup(int $str,): int;

        /**
         * @param int<-128, 127> $str
         * @return int<-128, 127>
         */
        public function SDL_strrev(int $str,): int;

        /**
         * @param int<-128, 127> $str
         * @return int<-128, 127>
         */
        public function SDL_strupr(int $str,): int;

        /**
         * @param int<-128, 127> $str
         * @return int<-128, 127>
         */
        public function SDL_strlwr(int $str,): int;

        /**
         * @param int<-128, 127> $str
         * @param int<-2147483648, 2147483647> $c
         * @return int<-128, 127>
         */
        public function SDL_strchr(int $str,int $c,): int;

        /**
         * @param int<-128, 127> $str
         * @param int<-2147483648, 2147483647> $c
         * @return int<-128, 127>
         */
        public function SDL_strrchr(int $str,int $c,): int;

        /**
         * @param int<-128, 127> $haystack
         * @param int<-128, 127> $needle
         * @return int<-128, 127>
         */
        public function SDL_strstr(int $haystack,int $needle,): int;

        /**
         * @param int<-128, 127> $haystack
         * @param int<-128, 127> $needle
         * @return int<-128, 127>
         */
        public function SDL_strcasestr(int $haystack,int $needle,): int;

        /**
         * @param int<-128, 127> $s1
         * @param int<-128, 127> $s2
         * @param int<-128, 127> $saveptr
         * @return int<-128, 127>
         */
        public function SDL_strtokr(int $s1,int $s2,int $saveptr,): int;

        /**
         * @param int<-128, 127> $str
         * @return int<0, 18446744073709551615>
         */
        public function SDL_utf8strlen(int $str,): int;

        /**
         * @param int<-128, 127> $str
         * @param int<0, 18446744073709551615> $bytes
         * @return int<0, 18446744073709551615>
         */
        public function SDL_utf8strnlen(int $str,int $bytes,): int;

        /**
         * @param int<-2147483648, 2147483647> $value
         * @param int<-128, 127> $str
         * @param int<-2147483648, 2147483647> $radix
         * @return int<-128, 127>
         */
        public function SDL_itoa(int $value,int $str,int $radix,): int;

        /**
         * @param int<0, 4294967295> $value
         * @param int<-128, 127> $str
         * @param int<-2147483648, 2147483647> $radix
         * @return int<-128, 127>
         */
        public function SDL_uitoa(int $value,int $str,int $radix,): int;

        /**
         * @param int<-9223372036854775808, 9223372036854775807> $value
         * @param int<-128, 127> $str
         * @param int<-2147483648, 2147483647> $radix
         * @return int<-128, 127>
         */
        public function SDL_ltoa(int $value,int $str,int $radix,): int;

        /**
         * @param int<0, 18446744073709551615> $value
         * @param int<-128, 127> $str
         * @param int<-2147483648, 2147483647> $radix
         * @return int<-128, 127>
         */
        public function SDL_ultoa(int $value,int $str,int $radix,): int;

        /**
         * @param int<-9223372036854775808, 9223372036854775807> $value
         * @param int<-128, 127> $str
         * @param int<-2147483648, 2147483647> $radix
         * @return int<-128, 127>
         */
        public function SDL_lltoa(int $value,int $str,int $radix,): int;

        /**
         * @param int<0, 18446744073709551615> $value
         * @param int<-128, 127> $str
         * @param int<-2147483648, 2147483647> $radix
         * @return int<-128, 127>
         */
        public function SDL_ulltoa(int $value,int $str,int $radix,): int;

        /**
         * @param int<-128, 127> $str
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_atoi(int $str,): int;

        /**
         * @param int<-128, 127> $str
         * @return float
         */
        public function SDL_atof(int $str,): float;

        /**
         * @param int<-128, 127> $str
         * @param int<-128, 127> $endp
         * @param int<-2147483648, 2147483647> $base
         * @return int<-9223372036854775808, 9223372036854775807>
         */
        public function SDL_strtol(int $str,int $endp,int $base,): int;

        /**
         * @param int<-128, 127> $str
         * @param int<-128, 127> $endp
         * @param int<-2147483648, 2147483647> $base
         * @return int<0, 18446744073709551615>
         */
        public function SDL_strtoul(int $str,int $endp,int $base,): int;

        /**
         * @param int<-128, 127> $str
         * @param int<-128, 127> $endp
         * @param int<-2147483648, 2147483647> $base
         * @return int<-9223372036854775808, 9223372036854775807>
         */
        public function SDL_strtoll(int $str,int $endp,int $base,): int;

        /**
         * @param int<-128, 127> $str
         * @param int<-128, 127> $endp
         * @param int<-2147483648, 2147483647> $base
         * @return int<0, 18446744073709551615>
         */
        public function SDL_strtoull(int $str,int $endp,int $base,): int;

        /**
         * @param int<-128, 127> $str
         * @param int<-128, 127> $endp
         * @return float
         */
        public function SDL_strtod(int $str,int $endp,): float;

        /**
         * @param int<-128, 127> $str1
         * @param int<-128, 127> $str2
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_strcmp(int $str1,int $str2,): int;

        /**
         * @param int<-128, 127> $str1
         * @param int<-128, 127> $str2
         * @param int<0, 18446744073709551615> $maxlen
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_strncmp(int $str1,int $str2,int $maxlen,): int;

        /**
         * @param int<-128, 127> $str1
         * @param int<-128, 127> $str2
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_strcasecmp(int $str1,int $str2,): int;

        /**
         * @param int<-128, 127> $str1
         * @param int<-128, 127> $str2
         * @param int<0, 18446744073709551615> $len
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_strncasecmp(int $str1,int $str2,int $len,): int;

        /**
         * @param int<-128, 127> $text
         * @param int<-128, 127> $fmt
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_sscanf(int $text,int $fmt,): int;

        /**
         * @param int<-128, 127> $text
         * @param int<-128, 127> $fmt
         * @param \FFI\CData|null|\PHPSTORM_META\__va_list_tag $ap
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_vsscanf(int $text,int $fmt,?\FFI\CData $ap,): int;

        /**
         * @param int<-128, 127> $text
         * @param int<0, 18446744073709551615> $maxlen
         * @param int<-128, 127> $fmt
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_snprintf(int $text,int $maxlen,int $fmt,): int;

        /**
         * @param int<-128, 127> $text
         * @param int<0, 18446744073709551615> $maxlen
         * @param int<-128, 127> $fmt
         * @param \FFI\CData|null|\PHPSTORM_META\__va_list_tag $ap
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_vsnprintf(int $text,int $maxlen,int $fmt,?\FFI\CData $ap,): int;

        /**
         * @param int<-128, 127> $strp
         * @param int<-128, 127> $fmt
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_asprintf(int $strp,int $fmt,): int;

        /**
         * @param int<-128, 127> $strp
         * @param int<-128, 127> $fmt
         * @param \FFI\CData|null|\PHPSTORM_META\__va_list_tag $ap
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_vasprintf(int $strp,int $fmt,?\FFI\CData $ap,): int;

        /**
         * @param float $x
         * @return float
         */
        public function SDL_acos(float $x,): float;

        /**
         * @param float $x
         * @return float
         */
        public function SDL_acosf(float $x,): float;

        /**
         * @param float $x
         * @return float
         */
        public function SDL_asin(float $x,): float;

        /**
         * @param float $x
         * @return float
         */
        public function SDL_asinf(float $x,): float;

        /**
         * @param float $x
         * @return float
         */
        public function SDL_atan(float $x,): float;

        /**
         * @param float $x
         * @return float
         */
        public function SDL_atanf(float $x,): float;

        /**
         * @param float $y
         * @param float $x
         * @return float
         */
        public function SDL_atan2(float $y,float $x,): float;

        /**
         * @param float $y
         * @param float $x
         * @return float
         */
        public function SDL_atan2f(float $y,float $x,): float;

        /**
         * @param float $x
         * @return float
         */
        public function SDL_ceil(float $x,): float;

        /**
         * @param float $x
         * @return float
         */
        public function SDL_ceilf(float $x,): float;

        /**
         * @param float $x
         * @param float $y
         * @return float
         */
        public function SDL_copysign(float $x,float $y,): float;

        /**
         * @param float $x
         * @param float $y
         * @return float
         */
        public function SDL_copysignf(float $x,float $y,): float;

        /**
         * @param float $x
         * @return float
         */
        public function SDL_cos(float $x,): float;

        /**
         * @param float $x
         * @return float
         */
        public function SDL_cosf(float $x,): float;

        /**
         * @param float $x
         * @return float
         */
        public function SDL_exp(float $x,): float;

        /**
         * @param float $x
         * @return float
         */
        public function SDL_expf(float $x,): float;

        /**
         * @param float $x
         * @return float
         */
        public function SDL_fabs(float $x,): float;

        /**
         * @param float $x
         * @return float
         */
        public function SDL_fabsf(float $x,): float;

        /**
         * @param float $x
         * @return float
         */
        public function SDL_floor(float $x,): float;

        /**
         * @param float $x
         * @return float
         */
        public function SDL_floorf(float $x,): float;

        /**
         * @param float $x
         * @return float
         */
        public function SDL_trunc(float $x,): float;

        /**
         * @param float $x
         * @return float
         */
        public function SDL_truncf(float $x,): float;

        /**
         * @param float $x
         * @param float $y
         * @return float
         */
        public function SDL_fmod(float $x,float $y,): float;

        /**
         * @param float $x
         * @param float $y
         * @return float
         */
        public function SDL_fmodf(float $x,float $y,): float;

        /**
         * @param float $x
         * @return float
         */
        public function SDL_log(float $x,): float;

        /**
         * @param float $x
         * @return float
         */
        public function SDL_logf(float $x,): float;

        /**
         * @param float $x
         * @return float
         */
        public function SDL_log10(float $x,): float;

        /**
         * @param float $x
         * @return float
         */
        public function SDL_log10f(float $x,): float;

        /**
         * @param float $x
         * @param float $y
         * @return float
         */
        public function SDL_pow(float $x,float $y,): float;

        /**
         * @param float $x
         * @param float $y
         * @return float
         */
        public function SDL_powf(float $x,float $y,): float;

        /**
         * @param float $x
         * @return float
         */
        public function SDL_round(float $x,): float;

        /**
         * @param float $x
         * @return float
         */
        public function SDL_roundf(float $x,): float;

        /**
         * @param float $x
         * @return int<-9223372036854775808, 9223372036854775807>
         */
        public function SDL_lround(float $x,): int;

        /**
         * @param float $x
         * @return int<-9223372036854775808, 9223372036854775807>
         */
        public function SDL_lroundf(float $x,): int;

        /**
         * @param float $x
         * @param int<-2147483648, 2147483647> $n
         * @return float
         */
        public function SDL_scalbn(float $x,int $n,): float;

        /**
         * @param float $x
         * @param int<-2147483648, 2147483647> $n
         * @return float
         */
        public function SDL_scalbnf(float $x,int $n,): float;

        /**
         * @param float $x
         * @return float
         */
        public function SDL_sin(float $x,): float;

        /**
         * @param float $x
         * @return float
         */
        public function SDL_sinf(float $x,): float;

        /**
         * @param float $x
         * @return float
         */
        public function SDL_sqrt(float $x,): float;

        /**
         * @param float $x
         * @return float
         */
        public function SDL_sqrtf(float $x,): float;

        /**
         * @param float $x
         * @return float
         */
        public function SDL_tan(float $x,): float;

        /**
         * @param float $x
         * @return float
         */
        public function SDL_tanf(float $x,): float;

        /**
         * @param int<-128, 127> $tocode
         * @param int<-128, 127> $fromcode
         * @return \FFI\CData|null|\PHPSTORM_META\_SDL_iconv_t
         */
        public function SDL_iconv_open(int $tocode,int $fromcode,): ?\FFI\CData;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_iconv_t $cd
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_iconv_close(?\FFI\CData $cd,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_iconv_t $cd
         * @param int<-128, 127> $inbuf
         * @param int<0, 18446744073709551615> $inbytesleft
         * @param int<-128, 127> $outbuf
         * @param int<0, 18446744073709551615> $outbytesleft
         * @return int<0, 18446744073709551615>
         */
        public function SDL_iconv(?\FFI\CData $cd,int $inbuf,int $inbytesleft,int $outbuf,int $outbytesleft,): int;

        /**
         * @param int<-128, 127> $tocode
         * @param int<-128, 127> $fromcode
         * @param int<-128, 127> $inbuf
         * @param int<0, 18446744073709551615> $inbytesleft
         * @return int<-128, 127>
         */
        public function SDL_iconv_string(int $tocode,int $fromcode,int $inbuf,int $inbytesleft,): int;

        /**
         * @param \FFI\CData|null $dst
         * @param \FFI\CData|null $src
         * @param int<0, 18446744073709551615> $dwords
         * @return \FFI\CData|null
         */
        public function SDL_memcpy4(\FFI\CData|null $dst,\FFI\CData|null $src,int $dwords,): \FFI\CData|null;

        /**
         * @param int<0, 18446744073709551615> $a
         * @param int<0, 18446744073709551615> $b
         * @param int<0, 18446744073709551615> $ret
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_size_mul_overflow(int $a,int $b,int $ret,): int;

        /**
         * @param int<0, 18446744073709551615> $a
         * @param int<0, 18446744073709551615> $b
         * @param int<0, 18446744073709551615> $ret
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_size_add_overflow(int $a,int $b,int $ret,): int;

        /**
         * @param int<-2147483648, 2147483647> $argc
         * @param int<-128, 127> $argv
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_main(int $argc,int $argv,): int;

        /**
         * @return \FFI\CData|null
         */
        public function SDL_SetMainReady(): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_AssertData $_0
         * @param int<-128, 127> $_1
         * @param int<-128, 127> $_2
         * @param int<-2147483648, 2147483647> $_3
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_ReportAssertion(?\FFI\CData $_0,int $_1,int $_2,int $_3,): int;

        /**
         * @param callable|null $handler
         * @param \FFI\CData|null $userdata
         * @return \FFI\CData|null
         */
        public function SDL_SetAssertionHandler(\FFI\CData|\Closure|null $handler,\FFI\CData|null $userdata,): \FFI\CData|null;

        /**
         * @return callable|null
         */
        public function SDL_GetDefaultAssertionHandler(): \FFI\CData|\Closure|null;

        /**
         * @param \FFI\CData|null $puserdata
         * @return callable|null
         */
        public function SDL_GetAssertionHandler(\FFI\CData|null $puserdata,): \FFI\CData|\Closure|null;

        /**
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_AssertData
         */
        public function SDL_GetAssertionReport(): ?\FFI\CData;

        /**
         * @return \FFI\CData|null
         */
        public function SDL_ResetAssertionReport(): \FFI\CData|null;

        /**
         * @param int<-2147483648, 2147483647> $lock
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_AtomicTryLock(int $lock,): int;

        /**
         * @param int<-2147483648, 2147483647> $lock
         * @return \FFI\CData|null
         */
        public function SDL_AtomicLock(int $lock,): \FFI\CData|null;

        /**
         * @param int<-2147483648, 2147483647> $lock
         * @return \FFI\CData|null
         */
        public function SDL_AtomicUnlock(int $lock,): \FFI\CData|null;

        /**
         * @return \FFI\CData|null
         */
        public function SDL_MemoryBarrierReleaseFunction(): \FFI\CData|null;

        /**
         * @return \FFI\CData|null
         */
        public function SDL_MemoryBarrierAcquireFunction(): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\ $a
         * @param int<-2147483648, 2147483647> $oldval
         * @param int<-2147483648, 2147483647> $newval
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_AtomicCAS(?\FFI\CData $a,int $oldval,int $newval,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\ $a
         * @param int<-2147483648, 2147483647> $v
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_AtomicSet(?\FFI\CData $a,int $v,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\ $a
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_AtomicGet(?\FFI\CData $a,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\ $a
         * @param int<-2147483648, 2147483647> $v
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_AtomicAdd(?\FFI\CData $a,int $v,): int;

        /**
         * @param \FFI\CData|null $a
         * @param \FFI\CData|null $oldval
         * @param \FFI\CData|null $newval
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_AtomicCASPtr(\FFI\CData|null $a,\FFI\CData|null $oldval,\FFI\CData|null $newval,): int;

        /**
         * @param \FFI\CData|null $a
         * @param \FFI\CData|null $v
         * @return \FFI\CData|null
         */
        public function SDL_AtomicSetPtr(\FFI\CData|null $a,\FFI\CData|null $v,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null $a
         * @return \FFI\CData|null
         */
        public function SDL_AtomicGetPtr(\FFI\CData|null $a,): \FFI\CData|null;

        /**
         * @param int<-128, 127> $fmt
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetError(int $fmt,): int;

        /**
         * @return int<-128, 127>
         */
        public function SDL_GetError(): int;

        /**
         * @param int<-128, 127> $errstr
         * @param int<-2147483648, 2147483647> $maxlen
         * @return int<-128, 127>
         */
        public function SDL_GetErrorMsg(int $errstr,int $maxlen,): int;

        /**
         * @return \FFI\CData|null
         */
        public function SDL_ClearError(): \FFI\CData|null;

        /**
         * @param int<-2147483648, 2147483647> $code
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_Error(int $code,): int;

        /**
         * @param float $x
         * @return float
         */
        public function SDL_SwapFloat(float $x,): float;

        /**
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_mutex
         */
        public function SDL_CreateMutex(): ?\FFI\CData;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_mutex $mutex
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_LockMutex(?\FFI\CData $mutex,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_mutex $mutex
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_TryLockMutex(?\FFI\CData $mutex,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_mutex $mutex
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_UnlockMutex(?\FFI\CData $mutex,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_mutex $mutex
         * @return \FFI\CData|null
         */
        public function SDL_DestroyMutex(?\FFI\CData $mutex,): \FFI\CData|null;

        /**
         * @param int<0, 4294967295> $initial_value
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_semaphore
         */
        public function SDL_CreateSemaphore(int $initial_value,): ?\FFI\CData;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_semaphore $sem
         * @return \FFI\CData|null
         */
        public function SDL_DestroySemaphore(?\FFI\CData $sem,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_semaphore $sem
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SemWait(?\FFI\CData $sem,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_semaphore $sem
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SemTryWait(?\FFI\CData $sem,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_semaphore $sem
         * @param int<0, 4294967295> $timeout
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SemWaitTimeout(?\FFI\CData $sem,int $timeout,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_semaphore $sem
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SemPost(?\FFI\CData $sem,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_semaphore $sem
         * @return int<0, 4294967295>
         */
        public function SDL_SemValue(?\FFI\CData $sem,): int;

        /**
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_cond
         */
        public function SDL_CreateCond(): ?\FFI\CData;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_cond $cond
         * @return \FFI\CData|null
         */
        public function SDL_DestroyCond(?\FFI\CData $cond,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_cond $cond
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_CondSignal(?\FFI\CData $cond,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_cond $cond
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_CondBroadcast(?\FFI\CData $cond,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_cond $cond
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_mutex $mutex
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_CondWait(?\FFI\CData $cond,?\FFI\CData $mutex,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_cond $cond
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_mutex $mutex
         * @param int<0, 4294967295> $ms
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_CondWaitTimeout(?\FFI\CData $cond,?\FFI\CData $mutex,int $ms,): int;

        /**
         * @param callable|null $fn
         * @param int<-128, 127> $name
         * @param \FFI\CData|null $data
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_Thread
         */
        public function SDL_CreateThread(\FFI\CData|\Closure|null $fn,int $name,\FFI\CData|null $data,): ?\FFI\CData;

        /**
         * @param callable|null $fn
         * @param int<-128, 127> $name
         * @param int<0, 18446744073709551615> $stacksize
         * @param \FFI\CData|null $data
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_Thread
         */
        public function SDL_CreateThreadWithStackSize(\FFI\CData|\Closure|null $fn,int $name,int $stacksize,\FFI\CData|null $data,): ?\FFI\CData;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Thread $thread
         * @return int<-128, 127>
         */
        public function SDL_GetThreadName(?\FFI\CData $thread,): int;

        /**
         * @return int<0, 18446744073709551615>
         */
        public function SDL_ThreadID(): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Thread $thread
         * @return int<0, 18446744073709551615>
         */
        public function SDL_GetThreadID(?\FFI\CData $thread,): int;

        /**
         * @param int<-2147483648, 2147483647> $priority
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetThreadPriority(int $priority,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Thread $thread
         * @param int<-2147483648, 2147483647> $status
         * @return \FFI\CData|null
         */
        public function SDL_WaitThread(?\FFI\CData $thread,int $status,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Thread $thread
         * @return \FFI\CData|null
         */
        public function SDL_DetachThread(?\FFI\CData $thread,): \FFI\CData|null;

        /**
         * @return int<0, 4294967295>
         */
        public function SDL_TLSCreate(): int;

        /**
         * @param int<0, 4294967295> $id
         * @return \FFI\CData|null
         */
        public function SDL_TLSGet(int $id,): \FFI\CData|null;

        /**
         * @param int<0, 4294967295> $id
         * @param \FFI\CData|null $value
         * @param callable|null $destructor
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_TLSSet(int $id,\FFI\CData|null $value,\FFI\CData|\Closure|null $destructor,): int;

        /**
         * @return \FFI\CData|null
         */
        public function SDL_TLSCleanup(): \FFI\CData|null;

        /**
         * @param int<-128, 127> $file
         * @param int<-128, 127> $mode
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_RWops
         */
        public function SDL_RWFromFile(int $file,int $mode,): ?\FFI\CData;

        /**
         * @param \FFI\CData|null $fp
         * @param int<-2147483648, 2147483647> $autoclose
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_RWops
         */
        public function SDL_RWFromFP(\FFI\CData|null $fp,int $autoclose,): ?\FFI\CData;

        /**
         * @param \FFI\CData|null $mem
         * @param int<-2147483648, 2147483647> $size
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_RWops
         */
        public function SDL_RWFromMem(\FFI\CData|null $mem,int $size,): ?\FFI\CData;

        /**
         * @param \FFI\CData|null $mem
         * @param int<-2147483648, 2147483647> $size
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_RWops
         */
        public function SDL_RWFromConstMem(\FFI\CData|null $mem,int $size,): ?\FFI\CData;

        /**
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_RWops
         */
        public function SDL_AllocRW(): ?\FFI\CData;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_RWops $area
         * @return \FFI\CData|null
         */
        public function SDL_FreeRW(?\FFI\CData $area,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_RWops $context
         * @return int<-9223372036854775808, 9223372036854775807>
         */
        public function SDL_RWsize(?\FFI\CData $context,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_RWops $context
         * @param int<-9223372036854775808, 9223372036854775807> $offset
         * @param int<-2147483648, 2147483647> $whence
         * @return int<-9223372036854775808, 9223372036854775807>
         */
        public function SDL_RWseek(?\FFI\CData $context,int $offset,int $whence,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_RWops $context
         * @return int<-9223372036854775808, 9223372036854775807>
         */
        public function SDL_RWtell(?\FFI\CData $context,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_RWops $context
         * @param \FFI\CData|null $ptr
         * @param int<0, 18446744073709551615> $size
         * @param int<0, 18446744073709551615> $maxnum
         * @return int<0, 18446744073709551615>
         */
        public function SDL_RWread(?\FFI\CData $context,\FFI\CData|null $ptr,int $size,int $maxnum,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_RWops $context
         * @param \FFI\CData|null $ptr
         * @param int<0, 18446744073709551615> $size
         * @param int<0, 18446744073709551615> $num
         * @return int<0, 18446744073709551615>
         */
        public function SDL_RWwrite(?\FFI\CData $context,\FFI\CData|null $ptr,int $size,int $num,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_RWops $context
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RWclose(?\FFI\CData $context,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_RWops $src
         * @param int<0, 18446744073709551615> $datasize
         * @param int<-2147483648, 2147483647> $freesrc
         * @return \FFI\CData|null
         */
        public function SDL_LoadFile_RW(?\FFI\CData $src,int $datasize,int $freesrc,): \FFI\CData|null;

        /**
         * @param int<-128, 127> $file
         * @param int<0, 18446744073709551615> $datasize
         * @return \FFI\CData|null
         */
        public function SDL_LoadFile(int $file,int $datasize,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_RWops $src
         * @return int<0, 255>
         */
        public function SDL_ReadU8(?\FFI\CData $src,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_RWops $src
         * @return int<0, 65535>
         */
        public function SDL_ReadLE16(?\FFI\CData $src,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_RWops $src
         * @return int<0, 65535>
         */
        public function SDL_ReadBE16(?\FFI\CData $src,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_RWops $src
         * @return int<0, 4294967295>
         */
        public function SDL_ReadLE32(?\FFI\CData $src,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_RWops $src
         * @return int<0, 4294967295>
         */
        public function SDL_ReadBE32(?\FFI\CData $src,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_RWops $src
         * @return int<0, 18446744073709551615>
         */
        public function SDL_ReadLE64(?\FFI\CData $src,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_RWops $src
         * @return int<0, 18446744073709551615>
         */
        public function SDL_ReadBE64(?\FFI\CData $src,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_RWops $dst
         * @param int<0, 255> $value
         * @return int<0, 18446744073709551615>
         */
        public function SDL_WriteU8(?\FFI\CData $dst,int $value,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_RWops $dst
         * @param int<0, 65535> $value
         * @return int<0, 18446744073709551615>
         */
        public function SDL_WriteLE16(?\FFI\CData $dst,int $value,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_RWops $dst
         * @param int<0, 65535> $value
         * @return int<0, 18446744073709551615>
         */
        public function SDL_WriteBE16(?\FFI\CData $dst,int $value,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_RWops $dst
         * @param int<0, 4294967295> $value
         * @return int<0, 18446744073709551615>
         */
        public function SDL_WriteLE32(?\FFI\CData $dst,int $value,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_RWops $dst
         * @param int<0, 4294967295> $value
         * @return int<0, 18446744073709551615>
         */
        public function SDL_WriteBE32(?\FFI\CData $dst,int $value,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_RWops $dst
         * @param int<0, 18446744073709551615> $value
         * @return int<0, 18446744073709551615>
         */
        public function SDL_WriteLE64(?\FFI\CData $dst,int $value,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_RWops $dst
         * @param int<0, 18446744073709551615> $value
         * @return int<0, 18446744073709551615>
         */
        public function SDL_WriteBE64(?\FFI\CData $dst,int $value,): int;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetNumAudioDrivers(): int;

        /**
         * @param int<-2147483648, 2147483647> $index
         * @return int<-128, 127>
         */
        public function SDL_GetAudioDriver(int $index,): int;

        /**
         * @param int<-128, 127> $driver_name
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_AudioInit(int $driver_name,): int;

        /**
         * @return \FFI\CData|null
         */
        public function SDL_AudioQuit(): \FFI\CData|null;

        /**
         * @return int<-128, 127>
         */
        public function SDL_GetCurrentAudioDriver(): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_AudioSpec $desired
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_AudioSpec $obtained
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_OpenAudio(?\FFI\CData $desired,?\FFI\CData $obtained,): int;

        /**
         * @param int<-2147483648, 2147483647> $iscapture
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetNumAudioDevices(int $iscapture,): int;

        /**
         * @param int<-2147483648, 2147483647> $index
         * @param int<-2147483648, 2147483647> $iscapture
         * @return int<-128, 127>
         */
        public function SDL_GetAudioDeviceName(int $index,int $iscapture,): int;

        /**
         * @param int<-2147483648, 2147483647> $index
         * @param int<-2147483648, 2147483647> $iscapture
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_AudioSpec $spec
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetAudioDeviceSpec(int $index,int $iscapture,?\FFI\CData $spec,): int;

        /**
         * @param int<-128, 127> $name
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_AudioSpec $spec
         * @param int<-2147483648, 2147483647> $iscapture
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetDefaultAudioInfo(int $name,?\FFI\CData $spec,int $iscapture,): int;

        /**
         * @param int<-128, 127> $device
         * @param int<-2147483648, 2147483647> $iscapture
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_AudioSpec $desired
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_AudioSpec $obtained
         * @param int<-2147483648, 2147483647> $allowed_changes
         * @return int<0, 4294967295>
         */
        public function SDL_OpenAudioDevice(int $device,int $iscapture,?\FFI\CData $desired,?\FFI\CData $obtained,int $allowed_changes,): int;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetAudioStatus(): int;

        /**
         * @param int<0, 4294967295> $dev
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetAudioDeviceStatus(int $dev,): int;

        /**
         * @param int<-2147483648, 2147483647> $pause_on
         * @return \FFI\CData|null
         */
        public function SDL_PauseAudio(int $pause_on,): \FFI\CData|null;

        /**
         * @param int<0, 4294967295> $dev
         * @param int<-2147483648, 2147483647> $pause_on
         * @return \FFI\CData|null
         */
        public function SDL_PauseAudioDevice(int $dev,int $pause_on,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_RWops $src
         * @param int<-2147483648, 2147483647> $freesrc
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_AudioSpec $spec
         * @param int<0, 255> $audio_buf
         * @param int<0, 4294967295> $audio_len
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_AudioSpec
         */
        public function SDL_LoadWAV_RW(?\FFI\CData $src,int $freesrc,?\FFI\CData $spec,int $audio_buf,int $audio_len,): ?\FFI\CData;

        /**
         * @param int<0, 255> $audio_buf
         * @return \FFI\CData|null
         */
        public function SDL_FreeWAV(int $audio_buf,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_AudioCVT $cvt
         * @param int<0, 65535> $src_format
         * @param int<0, 255> $src_channels
         * @param int<-2147483648, 2147483647> $src_rate
         * @param int<0, 65535> $dst_format
         * @param int<0, 255> $dst_channels
         * @param int<-2147483648, 2147483647> $dst_rate
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_BuildAudioCVT(?\FFI\CData $cvt,int $src_format,int $src_channels,int $src_rate,int $dst_format,int $dst_channels,int $dst_rate,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_AudioCVT $cvt
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_ConvertAudio(?\FFI\CData $cvt,): int;

        /**
         * @param int<0, 65535> $src_format
         * @param int<0, 255> $src_channels
         * @param int<-2147483648, 2147483647> $src_rate
         * @param int<0, 65535> $dst_format
         * @param int<0, 255> $dst_channels
         * @param int<-2147483648, 2147483647> $dst_rate
         * @return \FFI\CData|null|\PHPSTORM_META\_SDL_AudioStream
         */
        public function SDL_NewAudioStream(int $src_format,int $src_channels,int $src_rate,int $dst_format,int $dst_channels,int $dst_rate,): ?\FFI\CData;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_AudioStream $stream
         * @param \FFI\CData|null $buf
         * @param int<-2147483648, 2147483647> $len
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_AudioStreamPut(?\FFI\CData $stream,\FFI\CData|null $buf,int $len,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_AudioStream $stream
         * @param \FFI\CData|null $buf
         * @param int<-2147483648, 2147483647> $len
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_AudioStreamGet(?\FFI\CData $stream,\FFI\CData|null $buf,int $len,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_AudioStream $stream
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_AudioStreamAvailable(?\FFI\CData $stream,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_AudioStream $stream
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_AudioStreamFlush(?\FFI\CData $stream,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_AudioStream $stream
         * @return \FFI\CData|null
         */
        public function SDL_AudioStreamClear(?\FFI\CData $stream,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_AudioStream $stream
         * @return \FFI\CData|null
         */
        public function SDL_FreeAudioStream(?\FFI\CData $stream,): \FFI\CData|null;

        /**
         * @param int<0, 255> $dst
         * @param int<0, 255> $src
         * @param int<0, 4294967295> $len
         * @param int<-2147483648, 2147483647> $volume
         * @return \FFI\CData|null
         */
        public function SDL_MixAudio(int $dst,int $src,int $len,int $volume,): \FFI\CData|null;

        /**
         * @param int<0, 255> $dst
         * @param int<0, 255> $src
         * @param int<0, 65535> $format
         * @param int<0, 4294967295> $len
         * @param int<-2147483648, 2147483647> $volume
         * @return \FFI\CData|null
         */
        public function SDL_MixAudioFormat(int $dst,int $src,int $format,int $len,int $volume,): \FFI\CData|null;

        /**
         * @param int<0, 4294967295> $dev
         * @param \FFI\CData|null $data
         * @param int<0, 4294967295> $len
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_QueueAudio(int $dev,\FFI\CData|null $data,int $len,): int;

        /**
         * @param int<0, 4294967295> $dev
         * @param \FFI\CData|null $data
         * @param int<0, 4294967295> $len
         * @return int<0, 4294967295>
         */
        public function SDL_DequeueAudio(int $dev,\FFI\CData|null $data,int $len,): int;

        /**
         * @param int<0, 4294967295> $dev
         * @return int<0, 4294967295>
         */
        public function SDL_GetQueuedAudioSize(int $dev,): int;

        /**
         * @param int<0, 4294967295> $dev
         * @return \FFI\CData|null
         */
        public function SDL_ClearQueuedAudio(int $dev,): \FFI\CData|null;

        /**
         * @return \FFI\CData|null
         */
        public function SDL_LockAudio(): \FFI\CData|null;

        /**
         * @param int<0, 4294967295> $dev
         * @return \FFI\CData|null
         */
        public function SDL_LockAudioDevice(int $dev,): \FFI\CData|null;

        /**
         * @return \FFI\CData|null
         */
        public function SDL_UnlockAudio(): \FFI\CData|null;

        /**
         * @param int<0, 4294967295> $dev
         * @return \FFI\CData|null
         */
        public function SDL_UnlockAudioDevice(int $dev,): \FFI\CData|null;

        /**
         * @return \FFI\CData|null
         */
        public function SDL_CloseAudio(): \FFI\CData|null;

        /**
         * @param int<0, 4294967295> $dev
         * @return \FFI\CData|null
         */
        public function SDL_CloseAudioDevice(int $dev,): \FFI\CData|null;

        /**
         * @param int<-128, 127> $text
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetClipboardText(int $text,): int;

        /**
         * @return int<-128, 127>
         */
        public function SDL_GetClipboardText(): int;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HasClipboardText(): int;

        /**
         * @param int<-128, 127> $text
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetPrimarySelectionText(int $text,): int;

        /**
         * @return int<-128, 127>
         */
        public function SDL_GetPrimarySelectionText(): int;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HasPrimarySelectionText(): int;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetCPUCount(): int;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetCPUCacheLineSize(): int;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HasRDTSC(): int;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HasAltiVec(): int;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HasMMX(): int;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_Has3DNow(): int;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HasSSE(): int;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HasSSE2(): int;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HasSSE3(): int;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HasSSE41(): int;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HasSSE42(): int;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HasAVX(): int;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HasAVX2(): int;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HasAVX512F(): int;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HasARMSIMD(): int;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HasNEON(): int;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HasLSX(): int;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HasLASX(): int;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetSystemRAM(): int;

        /**
         * @return int<0, 18446744073709551615>
         */
        public function SDL_SIMDGetAlignment(): int;

        /**
         * @param int<0, 18446744073709551615> $len
         * @return \FFI\CData|null
         */
        public function SDL_SIMDAlloc(int $len,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null $mem
         * @param int<0, 18446744073709551615> $len
         * @return \FFI\CData|null
         */
        public function SDL_SIMDRealloc(\FFI\CData|null $mem,int $len,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null $ptr
         * @return \FFI\CData|null
         */
        public function SDL_SIMDFree(\FFI\CData|null $ptr,): \FFI\CData|null;

        /**
         * @param int<0, 4294967295> $format
         * @return int<-128, 127>
         */
        public function SDL_GetPixelFormatName(int $format,): int;

        /**
         * @param int<0, 4294967295> $format
         * @param int<-2147483648, 2147483647> $bpp
         * @param int<0, 4294967295> $Rmask
         * @param int<0, 4294967295> $Gmask
         * @param int<0, 4294967295> $Bmask
         * @param int<0, 4294967295> $Amask
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_PixelFormatEnumToMasks(int $format,int $bpp,int $Rmask,int $Gmask,int $Bmask,int $Amask,): int;

        /**
         * @param int<-2147483648, 2147483647> $bpp
         * @param int<0, 4294967295> $Rmask
         * @param int<0, 4294967295> $Gmask
         * @param int<0, 4294967295> $Bmask
         * @param int<0, 4294967295> $Amask
         * @return int<0, 4294967295>
         */
        public function SDL_MasksToPixelFormatEnum(int $bpp,int $Rmask,int $Gmask,int $Bmask,int $Amask,): int;

        /**
         * @param int<0, 4294967295> $pixel_format
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_PixelFormat
         */
        public function SDL_AllocFormat(int $pixel_format,): ?\FFI\CData;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_PixelFormat $format
         * @return \FFI\CData|null
         */
        public function SDL_FreeFormat(?\FFI\CData $format,): \FFI\CData|null;

        /**
         * @param int<-2147483648, 2147483647> $ncolors
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_Palette
         */
        public function SDL_AllocPalette(int $ncolors,): ?\FFI\CData;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_PixelFormat $format
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Palette $palette
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetPixelFormatPalette(?\FFI\CData $format,?\FFI\CData $palette,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Palette $palette
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Color $colors
         * @param int<-2147483648, 2147483647> $firstcolor
         * @param int<-2147483648, 2147483647> $ncolors
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetPaletteColors(?\FFI\CData $palette,?\FFI\CData $colors,int $firstcolor,int $ncolors,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Palette $palette
         * @return \FFI\CData|null
         */
        public function SDL_FreePalette(?\FFI\CData $palette,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_PixelFormat $format
         * @param int<0, 255> $r
         * @param int<0, 255> $g
         * @param int<0, 255> $b
         * @return int<0, 4294967295>
         */
        public function SDL_MapRGB(?\FFI\CData $format,int $r,int $g,int $b,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_PixelFormat $format
         * @param int<0, 255> $r
         * @param int<0, 255> $g
         * @param int<0, 255> $b
         * @param int<0, 255> $a
         * @return int<0, 4294967295>
         */
        public function SDL_MapRGBA(?\FFI\CData $format,int $r,int $g,int $b,int $a,): int;

        /**
         * @param int<0, 4294967295> $pixel
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_PixelFormat $format
         * @param int<0, 255> $r
         * @param int<0, 255> $g
         * @param int<0, 255> $b
         * @return \FFI\CData|null
         */
        public function SDL_GetRGB(int $pixel,?\FFI\CData $format,int $r,int $g,int $b,): \FFI\CData|null;

        /**
         * @param int<0, 4294967295> $pixel
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_PixelFormat $format
         * @param int<0, 255> $r
         * @param int<0, 255> $g
         * @param int<0, 255> $b
         * @param int<0, 255> $a
         * @return \FFI\CData|null
         */
        public function SDL_GetRGBA(int $pixel,?\FFI\CData $format,int $r,int $g,int $b,int $a,): \FFI\CData|null;

        /**
         * @param float $gamma
         * @param int<0, 65535> $ramp
         * @return \FFI\CData|null
         */
        public function SDL_CalculateGammaRamp(float $gamma,int $ramp,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Point $p
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $r
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_PointInRect(?\FFI\CData $p,?\FFI\CData $r,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $r
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RectEmpty(?\FFI\CData $r,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $a
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $b
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RectEquals(?\FFI\CData $a,?\FFI\CData $b,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $A
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $B
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HasIntersection(?\FFI\CData $A,?\FFI\CData $B,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $A
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $B
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $result
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_IntersectRect(?\FFI\CData $A,?\FFI\CData $B,?\FFI\CData $result,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $A
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $B
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $result
         * @return \FFI\CData|null
         */
        public function SDL_UnionRect(?\FFI\CData $A,?\FFI\CData $B,?\FFI\CData $result,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Point $points
         * @param int<-2147483648, 2147483647> $count
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $clip
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $result
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_EnclosePoints(?\FFI\CData $points,int $count,?\FFI\CData $clip,?\FFI\CData $result,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $rect
         * @param int<-2147483648, 2147483647> $X1
         * @param int<-2147483648, 2147483647> $Y1
         * @param int<-2147483648, 2147483647> $X2
         * @param int<-2147483648, 2147483647> $Y2
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_IntersectRectAndLine(?\FFI\CData $rect,int $X1,int $Y1,int $X2,int $Y2,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_FPoint $p
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_FRect $r
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_PointInFRect(?\FFI\CData $p,?\FFI\CData $r,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_FRect $r
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_FRectEmpty(?\FFI\CData $r,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_FRect $a
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_FRect $b
         * @param float $epsilon
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_FRectEqualsEpsilon(?\FFI\CData $a,?\FFI\CData $b,float $epsilon,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_FRect $a
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_FRect $b
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_FRectEquals(?\FFI\CData $a,?\FFI\CData $b,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_FRect $A
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_FRect $B
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HasIntersectionF(?\FFI\CData $A,?\FFI\CData $B,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_FRect $A
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_FRect $B
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_FRect $result
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_IntersectFRect(?\FFI\CData $A,?\FFI\CData $B,?\FFI\CData $result,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_FRect $A
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_FRect $B
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_FRect $result
         * @return \FFI\CData|null
         */
        public function SDL_UnionFRect(?\FFI\CData $A,?\FFI\CData $B,?\FFI\CData $result,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_FPoint $points
         * @param int<-2147483648, 2147483647> $count
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_FRect $clip
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_FRect $result
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_EncloseFPoints(?\FFI\CData $points,int $count,?\FFI\CData $clip,?\FFI\CData $result,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_FRect $rect
         * @param float $X1
         * @param float $Y1
         * @param float $X2
         * @param float $Y2
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_IntersectFRectAndLine(?\FFI\CData $rect,float $X1,float $Y1,float $X2,float $Y2,): int;

        /**
         * @param int<-2147483648, 2147483647> $srcColorFactor
         * @param int<-2147483648, 2147483647> $dstColorFactor
         * @param int<-2147483648, 2147483647> $colorOperation
         * @param int<-2147483648, 2147483647> $srcAlphaFactor
         * @param int<-2147483648, 2147483647> $dstAlphaFactor
         * @param int<-2147483648, 2147483647> $alphaOperation
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_ComposeCustomBlendMode(int $srcColorFactor,int $dstColorFactor,int $colorOperation,int $srcAlphaFactor,int $dstAlphaFactor,int $alphaOperation,): int;

        /**
         * @param int<0, 4294967295> $flags
         * @param int<-2147483648, 2147483647> $width
         * @param int<-2147483648, 2147483647> $height
         * @param int<-2147483648, 2147483647> $depth
         * @param int<0, 4294967295> $Rmask
         * @param int<0, 4294967295> $Gmask
         * @param int<0, 4294967295> $Bmask
         * @param int<0, 4294967295> $Amask
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_Surface
         */
        public function SDL_CreateRGBSurface(int $flags,int $width,int $height,int $depth,int $Rmask,int $Gmask,int $Bmask,int $Amask,): ?\FFI\CData;

        /**
         * @param int<0, 4294967295> $flags
         * @param int<-2147483648, 2147483647> $width
         * @param int<-2147483648, 2147483647> $height
         * @param int<-2147483648, 2147483647> $depth
         * @param int<0, 4294967295> $format
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_Surface
         */
        public function SDL_CreateRGBSurfaceWithFormat(int $flags,int $width,int $height,int $depth,int $format,): ?\FFI\CData;

        /**
         * @param \FFI\CData|null $pixels
         * @param int<-2147483648, 2147483647> $width
         * @param int<-2147483648, 2147483647> $height
         * @param int<-2147483648, 2147483647> $depth
         * @param int<-2147483648, 2147483647> $pitch
         * @param int<0, 4294967295> $Rmask
         * @param int<0, 4294967295> $Gmask
         * @param int<0, 4294967295> $Bmask
         * @param int<0, 4294967295> $Amask
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_Surface
         */
        public function SDL_CreateRGBSurfaceFrom(\FFI\CData|null $pixels,int $width,int $height,int $depth,int $pitch,int $Rmask,int $Gmask,int $Bmask,int $Amask,): ?\FFI\CData;

        /**
         * @param \FFI\CData|null $pixels
         * @param int<-2147483648, 2147483647> $width
         * @param int<-2147483648, 2147483647> $height
         * @param int<-2147483648, 2147483647> $depth
         * @param int<-2147483648, 2147483647> $pitch
         * @param int<0, 4294967295> $format
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_Surface
         */
        public function SDL_CreateRGBSurfaceWithFormatFrom(\FFI\CData|null $pixels,int $width,int $height,int $depth,int $pitch,int $format,): ?\FFI\CData;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $surface
         * @return \FFI\CData|null
         */
        public function SDL_FreeSurface(?\FFI\CData $surface,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $surface
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Palette $palette
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetSurfacePalette(?\FFI\CData $surface,?\FFI\CData $palette,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $surface
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_LockSurface(?\FFI\CData $surface,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $surface
         * @return \FFI\CData|null
         */
        public function SDL_UnlockSurface(?\FFI\CData $surface,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_RWops $src
         * @param int<-2147483648, 2147483647> $freesrc
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_Surface
         */
        public function SDL_LoadBMP_RW(?\FFI\CData $src,int $freesrc,): ?\FFI\CData;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $surface
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_RWops $dst
         * @param int<-2147483648, 2147483647> $freedst
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SaveBMP_RW(?\FFI\CData $surface,?\FFI\CData $dst,int $freedst,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $surface
         * @param int<-2147483648, 2147483647> $flag
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetSurfaceRLE(?\FFI\CData $surface,int $flag,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $surface
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HasSurfaceRLE(?\FFI\CData $surface,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $surface
         * @param int<-2147483648, 2147483647> $flag
         * @param int<0, 4294967295> $key
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetColorKey(?\FFI\CData $surface,int $flag,int $key,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $surface
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HasColorKey(?\FFI\CData $surface,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $surface
         * @param int<0, 4294967295> $key
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetColorKey(?\FFI\CData $surface,int $key,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $surface
         * @param int<0, 255> $r
         * @param int<0, 255> $g
         * @param int<0, 255> $b
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetSurfaceColorMod(?\FFI\CData $surface,int $r,int $g,int $b,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $surface
         * @param int<0, 255> $r
         * @param int<0, 255> $g
         * @param int<0, 255> $b
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetSurfaceColorMod(?\FFI\CData $surface,int $r,int $g,int $b,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $surface
         * @param int<0, 255> $alpha
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetSurfaceAlphaMod(?\FFI\CData $surface,int $alpha,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $surface
         * @param int<0, 255> $alpha
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetSurfaceAlphaMod(?\FFI\CData $surface,int $alpha,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $surface
         * @param int<-2147483648, 2147483647> $blendMode
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetSurfaceBlendMode(?\FFI\CData $surface,int $blendMode,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $surface
         * @param int<-2147483648, 2147483647> $blendMode
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetSurfaceBlendMode(?\FFI\CData $surface,int $blendMode,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $surface
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $rect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetClipRect(?\FFI\CData $surface,?\FFI\CData $rect,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $surface
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $rect
         * @return \FFI\CData|null
         */
        public function SDL_GetClipRect(?\FFI\CData $surface,?\FFI\CData $rect,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $surface
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_Surface
         */
        public function SDL_DuplicateSurface(?\FFI\CData $surface,): ?\FFI\CData;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $src
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_PixelFormat $fmt
         * @param int<0, 4294967295> $flags
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_Surface
         */
        public function SDL_ConvertSurface(?\FFI\CData $src,?\FFI\CData $fmt,int $flags,): ?\FFI\CData;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $src
         * @param int<0, 4294967295> $pixel_format
         * @param int<0, 4294967295> $flags
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_Surface
         */
        public function SDL_ConvertSurfaceFormat(?\FFI\CData $src,int $pixel_format,int $flags,): ?\FFI\CData;

        /**
         * @param int<-2147483648, 2147483647> $width
         * @param int<-2147483648, 2147483647> $height
         * @param int<0, 4294967295> $src_format
         * @param \FFI\CData|null $src
         * @param int<-2147483648, 2147483647> $src_pitch
         * @param int<0, 4294967295> $dst_format
         * @param \FFI\CData|null $dst
         * @param int<-2147483648, 2147483647> $dst_pitch
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_ConvertPixels(int $width,int $height,int $src_format,\FFI\CData|null $src,int $src_pitch,int $dst_format,\FFI\CData|null $dst,int $dst_pitch,): int;

        /**
         * @param int<-2147483648, 2147483647> $width
         * @param int<-2147483648, 2147483647> $height
         * @param int<0, 4294967295> $src_format
         * @param \FFI\CData|null $src
         * @param int<-2147483648, 2147483647> $src_pitch
         * @param int<0, 4294967295> $dst_format
         * @param \FFI\CData|null $dst
         * @param int<-2147483648, 2147483647> $dst_pitch
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_PremultiplyAlpha(int $width,int $height,int $src_format,\FFI\CData|null $src,int $src_pitch,int $dst_format,\FFI\CData|null $dst,int $dst_pitch,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $dst
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $rect
         * @param int<0, 4294967295> $color
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_FillRect(?\FFI\CData $dst,?\FFI\CData $rect,int $color,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $dst
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $rects
         * @param int<-2147483648, 2147483647> $count
         * @param int<0, 4294967295> $color
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_FillRects(?\FFI\CData $dst,?\FFI\CData $rects,int $count,int $color,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $src
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $srcrect
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $dst
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $dstrect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_UpperBlit(?\FFI\CData $src,?\FFI\CData $srcrect,?\FFI\CData $dst,?\FFI\CData $dstrect,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $src
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $srcrect
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $dst
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $dstrect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_LowerBlit(?\FFI\CData $src,?\FFI\CData $srcrect,?\FFI\CData $dst,?\FFI\CData $dstrect,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $src
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $srcrect
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $dst
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $dstrect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SoftStretch(?\FFI\CData $src,?\FFI\CData $srcrect,?\FFI\CData $dst,?\FFI\CData $dstrect,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $src
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $srcrect
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $dst
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $dstrect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SoftStretchLinear(?\FFI\CData $src,?\FFI\CData $srcrect,?\FFI\CData $dst,?\FFI\CData $dstrect,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $src
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $srcrect
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $dst
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $dstrect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_UpperBlitScaled(?\FFI\CData $src,?\FFI\CData $srcrect,?\FFI\CData $dst,?\FFI\CData $dstrect,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $src
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $srcrect
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $dst
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $dstrect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_LowerBlitScaled(?\FFI\CData $src,?\FFI\CData $srcrect,?\FFI\CData $dst,?\FFI\CData $dstrect,): int;

        /**
         * @param int<-2147483648, 2147483647> $mode
         * @return \FFI\CData|null
         */
        public function SDL_SetYUVConversionMode(int $mode,): \FFI\CData|null;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetYUVConversionMode(): int;

        /**
         * @param int<-2147483648, 2147483647> $width
         * @param int<-2147483648, 2147483647> $height
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetYUVConversionModeForResolution(int $width,int $height,): int;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetNumVideoDrivers(): int;

        /**
         * @param int<-2147483648, 2147483647> $index
         * @return int<-128, 127>
         */
        public function SDL_GetVideoDriver(int $index,): int;

        /**
         * @param int<-128, 127> $driver_name
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_VideoInit(int $driver_name,): int;

        /**
         * @return \FFI\CData|null
         */
        public function SDL_VideoQuit(): \FFI\CData|null;

        /**
         * @return int<-128, 127>
         */
        public function SDL_GetCurrentVideoDriver(): int;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetNumVideoDisplays(): int;

        /**
         * @param int<-2147483648, 2147483647> $displayIndex
         * @return int<-128, 127>
         */
        public function SDL_GetDisplayName(int $displayIndex,): int;

        /**
         * @param int<-2147483648, 2147483647> $displayIndex
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $rect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetDisplayBounds(int $displayIndex,?\FFI\CData $rect,): int;

        /**
         * @param int<-2147483648, 2147483647> $displayIndex
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $rect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetDisplayUsableBounds(int $displayIndex,?\FFI\CData $rect,): int;

        /**
         * @param int<-2147483648, 2147483647> $displayIndex
         * @param float $ddpi
         * @param float $hdpi
         * @param float $vdpi
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetDisplayDPI(int $displayIndex,float $ddpi,float $hdpi,float $vdpi,): int;

        /**
         * @param int<-2147483648, 2147483647> $displayIndex
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetDisplayOrientation(int $displayIndex,): int;

        /**
         * @param int<-2147483648, 2147483647> $displayIndex
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetNumDisplayModes(int $displayIndex,): int;

        /**
         * @param int<-2147483648, 2147483647> $displayIndex
         * @param int<-2147483648, 2147483647> $modeIndex
         * @param \FFI\CData|null|\PHPSTORM_META\ $mode
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetDisplayMode(int $displayIndex,int $modeIndex,?\FFI\CData $mode,): int;

        /**
         * @param int<-2147483648, 2147483647> $displayIndex
         * @param \FFI\CData|null|\PHPSTORM_META\ $mode
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetDesktopDisplayMode(int $displayIndex,?\FFI\CData $mode,): int;

        /**
         * @param int<-2147483648, 2147483647> $displayIndex
         * @param \FFI\CData|null|\PHPSTORM_META\ $mode
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetCurrentDisplayMode(int $displayIndex,?\FFI\CData $mode,): int;

        /**
         * @param int<-2147483648, 2147483647> $displayIndex
         * @param \FFI\CData|null|\PHPSTORM_META\ $mode
         * @param \FFI\CData|null|\PHPSTORM_META\ $closest
         * @return \FFI\CData|null|\PHPSTORM_META\
         */
        public function SDL_GetClosestDisplayMode(int $displayIndex,?\FFI\CData $mode,?\FFI\CData $closest,): ?\FFI\CData;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Point $point
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetPointDisplayIndex(?\FFI\CData $point,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $rect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetRectDisplayIndex(?\FFI\CData $rect,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetWindowDisplayIndex(?\FFI\CData $window,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param \FFI\CData|null|\PHPSTORM_META\ $mode
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetWindowDisplayMode(?\FFI\CData $window,?\FFI\CData $mode,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param \FFI\CData|null|\PHPSTORM_META\ $mode
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetWindowDisplayMode(?\FFI\CData $window,?\FFI\CData $mode,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param int<0, 18446744073709551615> $size
         * @return \FFI\CData|null
         */
        public function SDL_GetWindowICCProfile(?\FFI\CData $window,int $size,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @return int<0, 4294967295>
         */
        public function SDL_GetWindowPixelFormat(?\FFI\CData $window,): int;

        /**
         * @param int<-128, 127> $title
         * @param int<-2147483648, 2147483647> $x
         * @param int<-2147483648, 2147483647> $y
         * @param int<-2147483648, 2147483647> $w
         * @param int<-2147483648, 2147483647> $h
         * @param int<0, 4294967295> $flags
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_Window
         */
        public function SDL_CreateWindow(int $title,int $x,int $y,int $w,int $h,int $flags,): ?\FFI\CData;

        /**
         * @param \FFI\CData|null $data
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_Window
         */
        public function SDL_CreateWindowFrom(\FFI\CData|null $data,): ?\FFI\CData;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @return int<0, 4294967295>
         */
        public function SDL_GetWindowID(?\FFI\CData $window,): int;

        /**
         * @param int<0, 4294967295> $id
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_Window
         */
        public function SDL_GetWindowFromID(int $id,): ?\FFI\CData;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @return int<0, 4294967295>
         */
        public function SDL_GetWindowFlags(?\FFI\CData $window,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param int<-128, 127> $title
         * @return \FFI\CData|null
         */
        public function SDL_SetWindowTitle(?\FFI\CData $window,int $title,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @return int<-128, 127>
         */
        public function SDL_GetWindowTitle(?\FFI\CData $window,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $icon
         * @return \FFI\CData|null
         */
        public function SDL_SetWindowIcon(?\FFI\CData $window,?\FFI\CData $icon,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param int<-128, 127> $name
         * @param \FFI\CData|null $userdata
         * @return \FFI\CData|null
         */
        public function SDL_SetWindowData(?\FFI\CData $window,int $name,\FFI\CData|null $userdata,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param int<-128, 127> $name
         * @return \FFI\CData|null
         */
        public function SDL_GetWindowData(?\FFI\CData $window,int $name,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param int<-2147483648, 2147483647> $x
         * @param int<-2147483648, 2147483647> $y
         * @return \FFI\CData|null
         */
        public function SDL_SetWindowPosition(?\FFI\CData $window,int $x,int $y,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param int<-2147483648, 2147483647> $x
         * @param int<-2147483648, 2147483647> $y
         * @return \FFI\CData|null
         */
        public function SDL_GetWindowPosition(?\FFI\CData $window,int $x,int $y,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param int<-2147483648, 2147483647> $w
         * @param int<-2147483648, 2147483647> $h
         * @return \FFI\CData|null
         */
        public function SDL_SetWindowSize(?\FFI\CData $window,int $w,int $h,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param int<-2147483648, 2147483647> $w
         * @param int<-2147483648, 2147483647> $h
         * @return \FFI\CData|null
         */
        public function SDL_GetWindowSize(?\FFI\CData $window,int $w,int $h,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param int<-2147483648, 2147483647> $top
         * @param int<-2147483648, 2147483647> $left
         * @param int<-2147483648, 2147483647> $bottom
         * @param int<-2147483648, 2147483647> $right
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetWindowBordersSize(?\FFI\CData $window,int $top,int $left,int $bottom,int $right,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param int<-2147483648, 2147483647> $w
         * @param int<-2147483648, 2147483647> $h
         * @return \FFI\CData|null
         */
        public function SDL_GetWindowSizeInPixels(?\FFI\CData $window,int $w,int $h,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param int<-2147483648, 2147483647> $min_w
         * @param int<-2147483648, 2147483647> $min_h
         * @return \FFI\CData|null
         */
        public function SDL_SetWindowMinimumSize(?\FFI\CData $window,int $min_w,int $min_h,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param int<-2147483648, 2147483647> $w
         * @param int<-2147483648, 2147483647> $h
         * @return \FFI\CData|null
         */
        public function SDL_GetWindowMinimumSize(?\FFI\CData $window,int $w,int $h,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param int<-2147483648, 2147483647> $max_w
         * @param int<-2147483648, 2147483647> $max_h
         * @return \FFI\CData|null
         */
        public function SDL_SetWindowMaximumSize(?\FFI\CData $window,int $max_w,int $max_h,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param int<-2147483648, 2147483647> $w
         * @param int<-2147483648, 2147483647> $h
         * @return \FFI\CData|null
         */
        public function SDL_GetWindowMaximumSize(?\FFI\CData $window,int $w,int $h,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param int<-2147483648, 2147483647> $bordered
         * @return \FFI\CData|null
         */
        public function SDL_SetWindowBordered(?\FFI\CData $window,int $bordered,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param int<-2147483648, 2147483647> $resizable
         * @return \FFI\CData|null
         */
        public function SDL_SetWindowResizable(?\FFI\CData $window,int $resizable,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param int<-2147483648, 2147483647> $on_top
         * @return \FFI\CData|null
         */
        public function SDL_SetWindowAlwaysOnTop(?\FFI\CData $window,int $on_top,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @return \FFI\CData|null
         */
        public function SDL_ShowWindow(?\FFI\CData $window,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @return \FFI\CData|null
         */
        public function SDL_HideWindow(?\FFI\CData $window,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @return \FFI\CData|null
         */
        public function SDL_RaiseWindow(?\FFI\CData $window,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @return \FFI\CData|null
         */
        public function SDL_MaximizeWindow(?\FFI\CData $window,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @return \FFI\CData|null
         */
        public function SDL_MinimizeWindow(?\FFI\CData $window,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @return \FFI\CData|null
         */
        public function SDL_RestoreWindow(?\FFI\CData $window,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param int<0, 4294967295> $flags
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetWindowFullscreen(?\FFI\CData $window,int $flags,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HasWindowSurface(?\FFI\CData $window,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_Surface
         */
        public function SDL_GetWindowSurface(?\FFI\CData $window,): ?\FFI\CData;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_UpdateWindowSurface(?\FFI\CData $window,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $rects
         * @param int<-2147483648, 2147483647> $numrects
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_UpdateWindowSurfaceRects(?\FFI\CData $window,?\FFI\CData $rects,int $numrects,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_DestroyWindowSurface(?\FFI\CData $window,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param int<-2147483648, 2147483647> $grabbed
         * @return \FFI\CData|null
         */
        public function SDL_SetWindowGrab(?\FFI\CData $window,int $grabbed,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param int<-2147483648, 2147483647> $grabbed
         * @return \FFI\CData|null
         */
        public function SDL_SetWindowKeyboardGrab(?\FFI\CData $window,int $grabbed,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param int<-2147483648, 2147483647> $grabbed
         * @return \FFI\CData|null
         */
        public function SDL_SetWindowMouseGrab(?\FFI\CData $window,int $grabbed,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetWindowGrab(?\FFI\CData $window,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetWindowKeyboardGrab(?\FFI\CData $window,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetWindowMouseGrab(?\FFI\CData $window,): int;

        /**
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_Window
         */
        public function SDL_GetGrabbedWindow(): ?\FFI\CData;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $rect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetWindowMouseRect(?\FFI\CData $window,?\FFI\CData $rect,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_Rect
         */
        public function SDL_GetWindowMouseRect(?\FFI\CData $window,): ?\FFI\CData;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param float $brightness
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetWindowBrightness(?\FFI\CData $window,float $brightness,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @return float
         */
        public function SDL_GetWindowBrightness(?\FFI\CData $window,): float;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param float $opacity
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetWindowOpacity(?\FFI\CData $window,float $opacity,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param float $out_opacity
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetWindowOpacity(?\FFI\CData $window,float $out_opacity,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $modal_window
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $parent_window
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetWindowModalFor(?\FFI\CData $modal_window,?\FFI\CData $parent_window,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetWindowInputFocus(?\FFI\CData $window,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param int<0, 65535> $red
         * @param int<0, 65535> $green
         * @param int<0, 65535> $blue
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetWindowGammaRamp(?\FFI\CData $window,int $red,int $green,int $blue,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param int<0, 65535> $red
         * @param int<0, 65535> $green
         * @param int<0, 65535> $blue
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetWindowGammaRamp(?\FFI\CData $window,int $red,int $green,int $blue,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param callable|null $callback
         * @param \FFI\CData|null $callback_data
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetWindowHitTest(?\FFI\CData $window,\FFI\CData|\Closure|null $callback,\FFI\CData|null $callback_data,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param int<-2147483648, 2147483647> $operation
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_FlashWindow(?\FFI\CData $window,int $operation,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @return \FFI\CData|null
         */
        public function SDL_DestroyWindow(?\FFI\CData $window,): \FFI\CData|null;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_IsScreenSaverEnabled(): int;

        /**
         * @return \FFI\CData|null
         */
        public function SDL_EnableScreenSaver(): \FFI\CData|null;

        /**
         * @return \FFI\CData|null
         */
        public function SDL_DisableScreenSaver(): \FFI\CData|null;

        /**
         * @param int<-128, 127> $path
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GL_LoadLibrary(int $path,): int;

        /**
         * @param int<-128, 127> $proc
         * @return \FFI\CData|null
         */
        public function SDL_GL_GetProcAddress(int $proc,): \FFI\CData|null;

        /**
         * @return \FFI\CData|null
         */
        public function SDL_GL_UnloadLibrary(): \FFI\CData|null;

        /**
         * @param int<-128, 127> $extension
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GL_ExtensionSupported(int $extension,): int;

        /**
         * @return \FFI\CData|null
         */
        public function SDL_GL_ResetAttributes(): \FFI\CData|null;

        /**
         * @param int<-2147483648, 2147483647> $attr
         * @param int<-2147483648, 2147483647> $value
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GL_SetAttribute(int $attr,int $value,): int;

        /**
         * @param int<-2147483648, 2147483647> $attr
         * @param int<-2147483648, 2147483647> $value
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GL_GetAttribute(int $attr,int $value,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @return \FFI\CData|null
         */
        public function SDL_GL_CreateContext(?\FFI\CData $window,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param \FFI\CData|null $context
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GL_MakeCurrent(?\FFI\CData $window,\FFI\CData|null $context,): int;

        /**
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_Window
         */
        public function SDL_GL_GetCurrentWindow(): ?\FFI\CData;

        /**
         * @return \FFI\CData|null
         */
        public function SDL_GL_GetCurrentContext(): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param int<-2147483648, 2147483647> $w
         * @param int<-2147483648, 2147483647> $h
         * @return \FFI\CData|null
         */
        public function SDL_GL_GetDrawableSize(?\FFI\CData $window,int $w,int $h,): \FFI\CData|null;

        /**
         * @param int<-2147483648, 2147483647> $interval
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GL_SetSwapInterval(int $interval,): int;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GL_GetSwapInterval(): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @return \FFI\CData|null
         */
        public function SDL_GL_SwapWindow(?\FFI\CData $window,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null $context
         * @return \FFI\CData|null
         */
        public function SDL_GL_DeleteContext(\FFI\CData|null $context,): \FFI\CData|null;

        /**
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_Window
         */
        public function SDL_GetKeyboardFocus(): ?\FFI\CData;

        /**
         * @param int<-2147483648, 2147483647> $numkeys
         * @return int<0, 255>
         */
        public function SDL_GetKeyboardState(int $numkeys,): int;

        /**
         * @return \FFI\CData|null
         */
        public function SDL_ResetKeyboard(): \FFI\CData|null;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetModState(): int;

        /**
         * @param int<-2147483648, 2147483647> $modstate
         * @return \FFI\CData|null
         */
        public function SDL_SetModState(int $modstate,): \FFI\CData|null;

        /**
         * @param int<-2147483648, 2147483647> $scancode
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetKeyFromScancode(int $scancode,): int;

        /**
         * @param int<-2147483648, 2147483647> $key
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetScancodeFromKey(int $key,): int;

        /**
         * @param int<-2147483648, 2147483647> $scancode
         * @return int<-128, 127>
         */
        public function SDL_GetScancodeName(int $scancode,): int;

        /**
         * @param int<-128, 127> $name
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetScancodeFromName(int $name,): int;

        /**
         * @param int<-2147483648, 2147483647> $key
         * @return int<-128, 127>
         */
        public function SDL_GetKeyName(int $key,): int;

        /**
         * @param int<-128, 127> $name
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetKeyFromName(int $name,): int;

        /**
         * @return \FFI\CData|null
         */
        public function SDL_StartTextInput(): \FFI\CData|null;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_IsTextInputActive(): int;

        /**
         * @return \FFI\CData|null
         */
        public function SDL_StopTextInput(): \FFI\CData|null;

        /**
         * @return \FFI\CData|null
         */
        public function SDL_ClearComposition(): \FFI\CData|null;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_IsTextInputShown(): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $rect
         * @return \FFI\CData|null
         */
        public function SDL_SetTextInputRect(?\FFI\CData $rect,): \FFI\CData|null;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HasScreenKeyboardSupport(): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_IsScreenKeyboardShown(?\FFI\CData $window,): int;

        /**
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_Window
         */
        public function SDL_GetMouseFocus(): ?\FFI\CData;

        /**
         * @param int<-2147483648, 2147483647> $x
         * @param int<-2147483648, 2147483647> $y
         * @return int<0, 4294967295>
         */
        public function SDL_GetMouseState(int $x,int $y,): int;

        /**
         * @param int<-2147483648, 2147483647> $x
         * @param int<-2147483648, 2147483647> $y
         * @return int<0, 4294967295>
         */
        public function SDL_GetGlobalMouseState(int $x,int $y,): int;

        /**
         * @param int<-2147483648, 2147483647> $x
         * @param int<-2147483648, 2147483647> $y
         * @return int<0, 4294967295>
         */
        public function SDL_GetRelativeMouseState(int $x,int $y,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param int<-2147483648, 2147483647> $x
         * @param int<-2147483648, 2147483647> $y
         * @return \FFI\CData|null
         */
        public function SDL_WarpMouseInWindow(?\FFI\CData $window,int $x,int $y,): \FFI\CData|null;

        /**
         * @param int<-2147483648, 2147483647> $x
         * @param int<-2147483648, 2147483647> $y
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_WarpMouseGlobal(int $x,int $y,): int;

        /**
         * @param int<-2147483648, 2147483647> $enabled
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetRelativeMouseMode(int $enabled,): int;

        /**
         * @param int<-2147483648, 2147483647> $enabled
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_CaptureMouse(int $enabled,): int;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetRelativeMouseMode(): int;

        /**
         * @param int<0, 255> $data
         * @param int<0, 255> $mask
         * @param int<-2147483648, 2147483647> $w
         * @param int<-2147483648, 2147483647> $h
         * @param int<-2147483648, 2147483647> $hot_x
         * @param int<-2147483648, 2147483647> $hot_y
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_Cursor
         */
        public function SDL_CreateCursor(int $data,int $mask,int $w,int $h,int $hot_x,int $hot_y,): ?\FFI\CData;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $surface
         * @param int<-2147483648, 2147483647> $hot_x
         * @param int<-2147483648, 2147483647> $hot_y
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_Cursor
         */
        public function SDL_CreateColorCursor(?\FFI\CData $surface,int $hot_x,int $hot_y,): ?\FFI\CData;

        /**
         * @param int<-2147483648, 2147483647> $id
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_Cursor
         */
        public function SDL_CreateSystemCursor(int $id,): ?\FFI\CData;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Cursor $cursor
         * @return \FFI\CData|null
         */
        public function SDL_SetCursor(?\FFI\CData $cursor,): \FFI\CData|null;

        /**
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_Cursor
         */
        public function SDL_GetCursor(): ?\FFI\CData;

        /**
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_Cursor
         */
        public function SDL_GetDefaultCursor(): ?\FFI\CData;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Cursor $cursor
         * @return \FFI\CData|null
         */
        public function SDL_FreeCursor(?\FFI\CData $cursor,): \FFI\CData|null;

        /**
         * @param int<-2147483648, 2147483647> $toggle
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_ShowCursor(int $toggle,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\ $guid
         * @param int<-128, 127> $pszGUID
         * @param int<-2147483648, 2147483647> $cbGUID
         * @return \FFI\CData|null
         */
        public function SDL_GUIDToString(?\FFI\CData $guid,int $pszGUID,int $cbGUID,): \FFI\CData|null;

        /**
         * @param int<-128, 127> $pchGUID
         * @return \FFI\CData|null|\PHPSTORM_META\
         */
        public function SDL_GUIDFromString(int $pchGUID,): ?\FFI\CData;

        /**
         * @return \FFI\CData|null
         */
        public function SDL_LockJoysticks(): \FFI\CData|null;

        /**
         * @return \FFI\CData|null
         */
        public function SDL_UnlockJoysticks(): \FFI\CData|null;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_NumJoysticks(): int;

        /**
         * @param int<-2147483648, 2147483647> $device_index
         * @return int<-128, 127>
         */
        public function SDL_JoystickNameForIndex(int $device_index,): int;

        /**
         * @param int<-2147483648, 2147483647> $device_index
         * @return int<-128, 127>
         */
        public function SDL_JoystickPathForIndex(int $device_index,): int;

        /**
         * @param int<-2147483648, 2147483647> $device_index
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickGetDevicePlayerIndex(int $device_index,): int;

        /**
         * @param int<-2147483648, 2147483647> $device_index
         * @return \FFI\CData|null|\PHPSTORM_META\
         */
        public function SDL_JoystickGetDeviceGUID(int $device_index,): ?\FFI\CData;

        /**
         * @param int<-2147483648, 2147483647> $device_index
         * @return int<0, 65535>
         */
        public function SDL_JoystickGetDeviceVendor(int $device_index,): int;

        /**
         * @param int<-2147483648, 2147483647> $device_index
         * @return int<0, 65535>
         */
        public function SDL_JoystickGetDeviceProduct(int $device_index,): int;

        /**
         * @param int<-2147483648, 2147483647> $device_index
         * @return int<0, 65535>
         */
        public function SDL_JoystickGetDeviceProductVersion(int $device_index,): int;

        /**
         * @param int<-2147483648, 2147483647> $device_index
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickGetDeviceType(int $device_index,): int;

        /**
         * @param int<-2147483648, 2147483647> $device_index
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickGetDeviceInstanceID(int $device_index,): int;

        /**
         * @param int<-2147483648, 2147483647> $device_index
         * @return \FFI\CData|null|\PHPSTORM_META\_SDL_Joystick
         */
        public function SDL_JoystickOpen(int $device_index,): ?\FFI\CData;

        /**
         * @param int<-2147483648, 2147483647> $instance_id
         * @return \FFI\CData|null|\PHPSTORM_META\_SDL_Joystick
         */
        public function SDL_JoystickFromInstanceID(int $instance_id,): ?\FFI\CData;

        /**
         * @param int<-2147483648, 2147483647> $player_index
         * @return \FFI\CData|null|\PHPSTORM_META\_SDL_Joystick
         */
        public function SDL_JoystickFromPlayerIndex(int $player_index,): ?\FFI\CData;

        /**
         * @param int<-2147483648, 2147483647> $type
         * @param int<-2147483648, 2147483647> $naxes
         * @param int<-2147483648, 2147483647> $nbuttons
         * @param int<-2147483648, 2147483647> $nhats
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickAttachVirtual(int $type,int $naxes,int $nbuttons,int $nhats,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_VirtualJoystickDesc $desc
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickAttachVirtualEx(?\FFI\CData $desc,): int;

        /**
         * @param int<-2147483648, 2147483647> $device_index
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickDetachVirtual(int $device_index,): int;

        /**
         * @param int<-2147483648, 2147483647> $device_index
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickIsVirtual(int $device_index,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Joystick $joystick
         * @param int<-2147483648, 2147483647> $axis
         * @param int<-32768, 32767> $value
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickSetVirtualAxis(?\FFI\CData $joystick,int $axis,int $value,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Joystick $joystick
         * @param int<-2147483648, 2147483647> $button
         * @param int<0, 255> $value
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickSetVirtualButton(?\FFI\CData $joystick,int $button,int $value,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Joystick $joystick
         * @param int<-2147483648, 2147483647> $hat
         * @param int<0, 255> $value
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickSetVirtualHat(?\FFI\CData $joystick,int $hat,int $value,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Joystick $joystick
         * @return int<-128, 127>
         */
        public function SDL_JoystickName(?\FFI\CData $joystick,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Joystick $joystick
         * @return int<-128, 127>
         */
        public function SDL_JoystickPath(?\FFI\CData $joystick,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Joystick $joystick
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickGetPlayerIndex(?\FFI\CData $joystick,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Joystick $joystick
         * @param int<-2147483648, 2147483647> $player_index
         * @return \FFI\CData|null
         */
        public function SDL_JoystickSetPlayerIndex(?\FFI\CData $joystick,int $player_index,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Joystick $joystick
         * @return \FFI\CData|null|\PHPSTORM_META\
         */
        public function SDL_JoystickGetGUID(?\FFI\CData $joystick,): ?\FFI\CData;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Joystick $joystick
         * @return int<0, 65535>
         */
        public function SDL_JoystickGetVendor(?\FFI\CData $joystick,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Joystick $joystick
         * @return int<0, 65535>
         */
        public function SDL_JoystickGetProduct(?\FFI\CData $joystick,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Joystick $joystick
         * @return int<0, 65535>
         */
        public function SDL_JoystickGetProductVersion(?\FFI\CData $joystick,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Joystick $joystick
         * @return int<0, 65535>
         */
        public function SDL_JoystickGetFirmwareVersion(?\FFI\CData $joystick,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Joystick $joystick
         * @return int<-128, 127>
         */
        public function SDL_JoystickGetSerial(?\FFI\CData $joystick,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Joystick $joystick
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickGetType(?\FFI\CData $joystick,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\ $guid
         * @param int<-128, 127> $pszGUID
         * @param int<-2147483648, 2147483647> $cbGUID
         * @return \FFI\CData|null
         */
        public function SDL_JoystickGetGUIDString(?\FFI\CData $guid,int $pszGUID,int $cbGUID,): \FFI\CData|null;

        /**
         * @param int<-128, 127> $pchGUID
         * @return \FFI\CData|null|\PHPSTORM_META\
         */
        public function SDL_JoystickGetGUIDFromString(int $pchGUID,): ?\FFI\CData;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\ $guid
         * @param int<0, 65535> $vendor
         * @param int<0, 65535> $product
         * @param int<0, 65535> $version
         * @param int<0, 65535> $crc16
         * @return \FFI\CData|null
         */
        public function SDL_GetJoystickGUIDInfo(?\FFI\CData $guid,int $vendor,int $product,int $version,int $crc16,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Joystick $joystick
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickGetAttached(?\FFI\CData $joystick,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Joystick $joystick
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickInstanceID(?\FFI\CData $joystick,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Joystick $joystick
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickNumAxes(?\FFI\CData $joystick,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Joystick $joystick
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickNumBalls(?\FFI\CData $joystick,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Joystick $joystick
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickNumHats(?\FFI\CData $joystick,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Joystick $joystick
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickNumButtons(?\FFI\CData $joystick,): int;

        /**
         * @return \FFI\CData|null
         */
        public function SDL_JoystickUpdate(): \FFI\CData|null;

        /**
         * @param int<-2147483648, 2147483647> $state
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickEventState(int $state,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Joystick $joystick
         * @param int<-2147483648, 2147483647> $axis
         * @return int<-32768, 32767>
         */
        public function SDL_JoystickGetAxis(?\FFI\CData $joystick,int $axis,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Joystick $joystick
         * @param int<-2147483648, 2147483647> $axis
         * @param int<-32768, 32767> $state
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickGetAxisInitialState(?\FFI\CData $joystick,int $axis,int $state,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Joystick $joystick
         * @param int<-2147483648, 2147483647> $hat
         * @return int<0, 255>
         */
        public function SDL_JoystickGetHat(?\FFI\CData $joystick,int $hat,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Joystick $joystick
         * @param int<-2147483648, 2147483647> $ball
         * @param int<-2147483648, 2147483647> $dx
         * @param int<-2147483648, 2147483647> $dy
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickGetBall(?\FFI\CData $joystick,int $ball,int $dx,int $dy,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Joystick $joystick
         * @param int<-2147483648, 2147483647> $button
         * @return int<0, 255>
         */
        public function SDL_JoystickGetButton(?\FFI\CData $joystick,int $button,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Joystick $joystick
         * @param int<0, 65535> $low_frequency_rumble
         * @param int<0, 65535> $high_frequency_rumble
         * @param int<0, 4294967295> $duration_ms
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickRumble(?\FFI\CData $joystick,int $low_frequency_rumble,int $high_frequency_rumble,int $duration_ms,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Joystick $joystick
         * @param int<0, 65535> $left_rumble
         * @param int<0, 65535> $right_rumble
         * @param int<0, 4294967295> $duration_ms
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickRumbleTriggers(?\FFI\CData $joystick,int $left_rumble,int $right_rumble,int $duration_ms,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Joystick $joystick
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickHasLED(?\FFI\CData $joystick,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Joystick $joystick
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickHasRumble(?\FFI\CData $joystick,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Joystick $joystick
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickHasRumbleTriggers(?\FFI\CData $joystick,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Joystick $joystick
         * @param int<0, 255> $red
         * @param int<0, 255> $green
         * @param int<0, 255> $blue
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickSetLED(?\FFI\CData $joystick,int $red,int $green,int $blue,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Joystick $joystick
         * @param \FFI\CData|null $data
         * @param int<-2147483648, 2147483647> $size
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickSendEffect(?\FFI\CData $joystick,\FFI\CData|null $data,int $size,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Joystick $joystick
         * @return \FFI\CData|null
         */
        public function SDL_JoystickClose(?\FFI\CData $joystick,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Joystick $joystick
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickCurrentPowerLevel(?\FFI\CData $joystick,): int;

        /**
         * @return \FFI\CData|null
         */
        public function SDL_LockSensors(): \FFI\CData|null;

        /**
         * @return \FFI\CData|null
         */
        public function SDL_UnlockSensors(): \FFI\CData|null;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_NumSensors(): int;

        /**
         * @param int<-2147483648, 2147483647> $device_index
         * @return int<-128, 127>
         */
        public function SDL_SensorGetDeviceName(int $device_index,): int;

        /**
         * @param int<-2147483648, 2147483647> $device_index
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SensorGetDeviceType(int $device_index,): int;

        /**
         * @param int<-2147483648, 2147483647> $device_index
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SensorGetDeviceNonPortableType(int $device_index,): int;

        /**
         * @param int<-2147483648, 2147483647> $device_index
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SensorGetDeviceInstanceID(int $device_index,): int;

        /**
         * @param int<-2147483648, 2147483647> $device_index
         * @return \FFI\CData|null|\PHPSTORM_META\_SDL_Sensor
         */
        public function SDL_SensorOpen(int $device_index,): ?\FFI\CData;

        /**
         * @param int<-2147483648, 2147483647> $instance_id
         * @return \FFI\CData|null|\PHPSTORM_META\_SDL_Sensor
         */
        public function SDL_SensorFromInstanceID(int $instance_id,): ?\FFI\CData;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Sensor $sensor
         * @return int<-128, 127>
         */
        public function SDL_SensorGetName(?\FFI\CData $sensor,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Sensor $sensor
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SensorGetType(?\FFI\CData $sensor,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Sensor $sensor
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SensorGetNonPortableType(?\FFI\CData $sensor,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Sensor $sensor
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SensorGetInstanceID(?\FFI\CData $sensor,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Sensor $sensor
         * @param float $data
         * @param int<-2147483648, 2147483647> $num_values
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SensorGetData(?\FFI\CData $sensor,float $data,int $num_values,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Sensor $sensor
         * @param int<0, 18446744073709551615> $timestamp
         * @param float $data
         * @param int<-2147483648, 2147483647> $num_values
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SensorGetDataWithTimestamp(?\FFI\CData $sensor,int $timestamp,float $data,int $num_values,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Sensor $sensor
         * @return \FFI\CData|null
         */
        public function SDL_SensorClose(?\FFI\CData $sensor,): \FFI\CData|null;

        /**
         * @return \FFI\CData|null
         */
        public function SDL_SensorUpdate(): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_RWops $rw
         * @param int<-2147483648, 2147483647> $freerw
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerAddMappingsFromRW(?\FFI\CData $rw,int $freerw,): int;

        /**
         * @param int<-128, 127> $mappingString
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerAddMapping(int $mappingString,): int;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerNumMappings(): int;

        /**
         * @param int<-2147483648, 2147483647> $mapping_index
         * @return int<-128, 127>
         */
        public function SDL_GameControllerMappingForIndex(int $mapping_index,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\ $guid
         * @return int<-128, 127>
         */
        public function SDL_GameControllerMappingForGUID(?\FFI\CData $guid,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_GameController $gamecontroller
         * @return int<-128, 127>
         */
        public function SDL_GameControllerMapping(?\FFI\CData $gamecontroller,): int;

        /**
         * @param int<-2147483648, 2147483647> $joystick_index
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_IsGameController(int $joystick_index,): int;

        /**
         * @param int<-2147483648, 2147483647> $joystick_index
         * @return int<-128, 127>
         */
        public function SDL_GameControllerNameForIndex(int $joystick_index,): int;

        /**
         * @param int<-2147483648, 2147483647> $joystick_index
         * @return int<-128, 127>
         */
        public function SDL_GameControllerPathForIndex(int $joystick_index,): int;

        /**
         * @param int<-2147483648, 2147483647> $joystick_index
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerTypeForIndex(int $joystick_index,): int;

        /**
         * @param int<-2147483648, 2147483647> $joystick_index
         * @return int<-128, 127>
         */
        public function SDL_GameControllerMappingForDeviceIndex(int $joystick_index,): int;

        /**
         * @param int<-2147483648, 2147483647> $joystick_index
         * @return \FFI\CData|null|\PHPSTORM_META\_SDL_GameController
         */
        public function SDL_GameControllerOpen(int $joystick_index,): ?\FFI\CData;

        /**
         * @param int<-2147483648, 2147483647> $joyid
         * @return \FFI\CData|null|\PHPSTORM_META\_SDL_GameController
         */
        public function SDL_GameControllerFromInstanceID(int $joyid,): ?\FFI\CData;

        /**
         * @param int<-2147483648, 2147483647> $player_index
         * @return \FFI\CData|null|\PHPSTORM_META\_SDL_GameController
         */
        public function SDL_GameControllerFromPlayerIndex(int $player_index,): ?\FFI\CData;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_GameController $gamecontroller
         * @return int<-128, 127>
         */
        public function SDL_GameControllerName(?\FFI\CData $gamecontroller,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_GameController $gamecontroller
         * @return int<-128, 127>
         */
        public function SDL_GameControllerPath(?\FFI\CData $gamecontroller,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_GameController $gamecontroller
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerGetType(?\FFI\CData $gamecontroller,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_GameController $gamecontroller
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerGetPlayerIndex(?\FFI\CData $gamecontroller,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_GameController $gamecontroller
         * @param int<-2147483648, 2147483647> $player_index
         * @return \FFI\CData|null
         */
        public function SDL_GameControllerSetPlayerIndex(?\FFI\CData $gamecontroller,int $player_index,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_GameController $gamecontroller
         * @return int<0, 65535>
         */
        public function SDL_GameControllerGetVendor(?\FFI\CData $gamecontroller,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_GameController $gamecontroller
         * @return int<0, 65535>
         */
        public function SDL_GameControllerGetProduct(?\FFI\CData $gamecontroller,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_GameController $gamecontroller
         * @return int<0, 65535>
         */
        public function SDL_GameControllerGetProductVersion(?\FFI\CData $gamecontroller,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_GameController $gamecontroller
         * @return int<0, 65535>
         */
        public function SDL_GameControllerGetFirmwareVersion(?\FFI\CData $gamecontroller,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_GameController $gamecontroller
         * @return int<-128, 127>
         */
        public function SDL_GameControllerGetSerial(?\FFI\CData $gamecontroller,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_GameController $gamecontroller
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerGetAttached(?\FFI\CData $gamecontroller,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_GameController $gamecontroller
         * @return \FFI\CData|null|\PHPSTORM_META\_SDL_Joystick
         */
        public function SDL_GameControllerGetJoystick(?\FFI\CData $gamecontroller,): ?\FFI\CData;

        /**
         * @param int<-2147483648, 2147483647> $state
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerEventState(int $state,): int;

        /**
         * @return \FFI\CData|null
         */
        public function SDL_GameControllerUpdate(): \FFI\CData|null;

        /**
         * @param int<-128, 127> $str
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerGetAxisFromString(int $str,): int;

        /**
         * @param int<-2147483648, 2147483647> $axis
         * @return int<-128, 127>
         */
        public function SDL_GameControllerGetStringForAxis(int $axis,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_GameController $gamecontroller
         * @param int<-2147483648, 2147483647> $axis
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_GameControllerButtonBind
         */
        public function SDL_GameControllerGetBindForAxis(?\FFI\CData $gamecontroller,int $axis,): ?\FFI\CData;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_GameController $gamecontroller
         * @param int<-2147483648, 2147483647> $axis
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerHasAxis(?\FFI\CData $gamecontroller,int $axis,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_GameController $gamecontroller
         * @param int<-2147483648, 2147483647> $axis
         * @return int<-32768, 32767>
         */
        public function SDL_GameControllerGetAxis(?\FFI\CData $gamecontroller,int $axis,): int;

        /**
         * @param int<-128, 127> $str
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerGetButtonFromString(int $str,): int;

        /**
         * @param int<-2147483648, 2147483647> $button
         * @return int<-128, 127>
         */
        public function SDL_GameControllerGetStringForButton(int $button,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_GameController $gamecontroller
         * @param int<-2147483648, 2147483647> $button
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_GameControllerButtonBind
         */
        public function SDL_GameControllerGetBindForButton(?\FFI\CData $gamecontroller,int $button,): ?\FFI\CData;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_GameController $gamecontroller
         * @param int<-2147483648, 2147483647> $button
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerHasButton(?\FFI\CData $gamecontroller,int $button,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_GameController $gamecontroller
         * @param int<-2147483648, 2147483647> $button
         * @return int<0, 255>
         */
        public function SDL_GameControllerGetButton(?\FFI\CData $gamecontroller,int $button,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_GameController $gamecontroller
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerGetNumTouchpads(?\FFI\CData $gamecontroller,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_GameController $gamecontroller
         * @param int<-2147483648, 2147483647> $touchpad
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerGetNumTouchpadFingers(?\FFI\CData $gamecontroller,int $touchpad,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_GameController $gamecontroller
         * @param int<-2147483648, 2147483647> $touchpad
         * @param int<-2147483648, 2147483647> $finger
         * @param int<0, 255> $state
         * @param float $x
         * @param float $y
         * @param float $pressure
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerGetTouchpadFinger(?\FFI\CData $gamecontroller,int $touchpad,int $finger,int $state,float $x,float $y,float $pressure,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_GameController $gamecontroller
         * @param int<-2147483648, 2147483647> $type
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerHasSensor(?\FFI\CData $gamecontroller,int $type,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_GameController $gamecontroller
         * @param int<-2147483648, 2147483647> $type
         * @param int<-2147483648, 2147483647> $enabled
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerSetSensorEnabled(?\FFI\CData $gamecontroller,int $type,int $enabled,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_GameController $gamecontroller
         * @param int<-2147483648, 2147483647> $type
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerIsSensorEnabled(?\FFI\CData $gamecontroller,int $type,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_GameController $gamecontroller
         * @param int<-2147483648, 2147483647> $type
         * @return float
         */
        public function SDL_GameControllerGetSensorDataRate(?\FFI\CData $gamecontroller,int $type,): float;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_GameController $gamecontroller
         * @param int<-2147483648, 2147483647> $type
         * @param float $data
         * @param int<-2147483648, 2147483647> $num_values
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerGetSensorData(?\FFI\CData $gamecontroller,int $type,float $data,int $num_values,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_GameController $gamecontroller
         * @param int<-2147483648, 2147483647> $type
         * @param int<0, 18446744073709551615> $timestamp
         * @param float $data
         * @param int<-2147483648, 2147483647> $num_values
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerGetSensorDataWithTimestamp(?\FFI\CData $gamecontroller,int $type,int $timestamp,float $data,int $num_values,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_GameController $gamecontroller
         * @param int<0, 65535> $low_frequency_rumble
         * @param int<0, 65535> $high_frequency_rumble
         * @param int<0, 4294967295> $duration_ms
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerRumble(?\FFI\CData $gamecontroller,int $low_frequency_rumble,int $high_frequency_rumble,int $duration_ms,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_GameController $gamecontroller
         * @param int<0, 65535> $left_rumble
         * @param int<0, 65535> $right_rumble
         * @param int<0, 4294967295> $duration_ms
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerRumbleTriggers(?\FFI\CData $gamecontroller,int $left_rumble,int $right_rumble,int $duration_ms,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_GameController $gamecontroller
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerHasLED(?\FFI\CData $gamecontroller,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_GameController $gamecontroller
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerHasRumble(?\FFI\CData $gamecontroller,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_GameController $gamecontroller
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerHasRumbleTriggers(?\FFI\CData $gamecontroller,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_GameController $gamecontroller
         * @param int<0, 255> $red
         * @param int<0, 255> $green
         * @param int<0, 255> $blue
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerSetLED(?\FFI\CData $gamecontroller,int $red,int $green,int $blue,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_GameController $gamecontroller
         * @param \FFI\CData|null $data
         * @param int<-2147483648, 2147483647> $size
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerSendEffect(?\FFI\CData $gamecontroller,\FFI\CData|null $data,int $size,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_GameController $gamecontroller
         * @return \FFI\CData|null
         */
        public function SDL_GameControllerClose(?\FFI\CData $gamecontroller,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_GameController $gamecontroller
         * @param int<-2147483648, 2147483647> $button
         * @return int<-128, 127>
         */
        public function SDL_GameControllerGetAppleSFSymbolsNameForButton(?\FFI\CData $gamecontroller,int $button,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_GameController $gamecontroller
         * @param int<-2147483648, 2147483647> $axis
         * @return int<-128, 127>
         */
        public function SDL_GameControllerGetAppleSFSymbolsNameForAxis(?\FFI\CData $gamecontroller,int $axis,): int;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetNumTouchDevices(): int;

        /**
         * @param int<-2147483648, 2147483647> $index
         * @return int<-9223372036854775808, 9223372036854775807>
         */
        public function SDL_GetTouchDevice(int $index,): int;

        /**
         * @param int<-2147483648, 2147483647> $index
         * @return int<-128, 127>
         */
        public function SDL_GetTouchName(int $index,): int;

        /**
         * @param int<-9223372036854775808, 9223372036854775807> $touchID
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetTouchDeviceType(int $touchID,): int;

        /**
         * @param int<-9223372036854775808, 9223372036854775807> $touchID
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetNumTouchFingers(int $touchID,): int;

        /**
         * @param int<-9223372036854775808, 9223372036854775807> $touchID
         * @param int<-2147483648, 2147483647> $index
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_Finger
         */
        public function SDL_GetTouchFinger(int $touchID,int $index,): ?\FFI\CData;

        /**
         * @param int<-9223372036854775808, 9223372036854775807> $touchId
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RecordGesture(int $touchId,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_RWops $dst
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SaveAllDollarTemplates(?\FFI\CData $dst,): int;

        /**
         * @param int<-9223372036854775808, 9223372036854775807> $gestureId
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_RWops $dst
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SaveDollarTemplate(int $gestureId,?\FFI\CData $dst,): int;

        /**
         * @param int<-9223372036854775808, 9223372036854775807> $touchId
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_RWops $src
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_LoadDollarTemplates(int $touchId,?\FFI\CData $src,): int;

        /**
         * @return \FFI\CData|null
         */
        public function SDL_PumpEvents(): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Event $events
         * @param int<-2147483648, 2147483647> $numevents
         * @param int<-2147483648, 2147483647> $action
         * @param int<0, 4294967295> $minType
         * @param int<0, 4294967295> $maxType
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_PeepEvents(?\FFI\CData $events,int $numevents,int $action,int $minType,int $maxType,): int;

        /**
         * @param int<0, 4294967295> $type
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HasEvent(int $type,): int;

        /**
         * @param int<0, 4294967295> $minType
         * @param int<0, 4294967295> $maxType
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HasEvents(int $minType,int $maxType,): int;

        /**
         * @param int<0, 4294967295> $type
         * @return \FFI\CData|null
         */
        public function SDL_FlushEvent(int $type,): \FFI\CData|null;

        /**
         * @param int<0, 4294967295> $minType
         * @param int<0, 4294967295> $maxType
         * @return \FFI\CData|null
         */
        public function SDL_FlushEvents(int $minType,int $maxType,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Event $event
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_PollEvent(?\FFI\CData $event,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Event $event
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_WaitEvent(?\FFI\CData $event,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Event $event
         * @param int<-2147483648, 2147483647> $timeout
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_WaitEventTimeout(?\FFI\CData $event,int $timeout,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Event $event
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_PushEvent(?\FFI\CData $event,): int;

        /**
         * @param callable|null $filter
         * @param \FFI\CData|null $userdata
         * @return \FFI\CData|null
         */
        public function SDL_SetEventFilter(\FFI\CData|\Closure|null $filter,\FFI\CData|null $userdata,): \FFI\CData|null;

        /**
         * @param callable|null $filter
         * @param \FFI\CData|null $userdata
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetEventFilter(\FFI\CData|\Closure|null $filter,\FFI\CData|null $userdata,): int;

        /**
         * @param callable|null $filter
         * @param \FFI\CData|null $userdata
         * @return \FFI\CData|null
         */
        public function SDL_AddEventWatch(\FFI\CData|\Closure|null $filter,\FFI\CData|null $userdata,): \FFI\CData|null;

        /**
         * @param callable|null $filter
         * @param \FFI\CData|null $userdata
         * @return \FFI\CData|null
         */
        public function SDL_DelEventWatch(\FFI\CData|\Closure|null $filter,\FFI\CData|null $userdata,): \FFI\CData|null;

        /**
         * @param callable|null $filter
         * @param \FFI\CData|null $userdata
         * @return \FFI\CData|null
         */
        public function SDL_FilterEvents(\FFI\CData|\Closure|null $filter,\FFI\CData|null $userdata,): \FFI\CData|null;

        /**
         * @param int<0, 4294967295> $type
         * @param int<-2147483648, 2147483647> $state
         * @return int<0, 255>
         */
        public function SDL_EventState(int $type,int $state,): int;

        /**
         * @param int<-2147483648, 2147483647> $numevents
         * @return int<0, 4294967295>
         */
        public function SDL_RegisterEvents(int $numevents,): int;

        /**
         * @return int<-128, 127>
         */
        public function SDL_GetBasePath(): int;

        /**
         * @param int<-128, 127> $org
         * @param int<-128, 127> $app
         * @return int<-128, 127>
         */
        public function SDL_GetPrefPath(int $org,int $app,): int;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_NumHaptics(): int;

        /**
         * @param int<-2147483648, 2147483647> $device_index
         * @return int<-128, 127>
         */
        public function SDL_HapticName(int $device_index,): int;

        /**
         * @param int<-2147483648, 2147483647> $device_index
         * @return \FFI\CData|null|\PHPSTORM_META\_SDL_Haptic
         */
        public function SDL_HapticOpen(int $device_index,): ?\FFI\CData;

        /**
         * @param int<-2147483648, 2147483647> $device_index
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HapticOpened(int $device_index,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Haptic $haptic
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HapticIndex(?\FFI\CData $haptic,): int;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_MouseIsHaptic(): int;

        /**
         * @return \FFI\CData|null|\PHPSTORM_META\_SDL_Haptic
         */
        public function SDL_HapticOpenFromMouse(): ?\FFI\CData;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Joystick $joystick
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickIsHaptic(?\FFI\CData $joystick,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Joystick $joystick
         * @return \FFI\CData|null|\PHPSTORM_META\_SDL_Haptic
         */
        public function SDL_HapticOpenFromJoystick(?\FFI\CData $joystick,): ?\FFI\CData;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Haptic $haptic
         * @return \FFI\CData|null
         */
        public function SDL_HapticClose(?\FFI\CData $haptic,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Haptic $haptic
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HapticNumEffects(?\FFI\CData $haptic,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Haptic $haptic
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HapticNumEffectsPlaying(?\FFI\CData $haptic,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Haptic $haptic
         * @return int<0, 4294967295>
         */
        public function SDL_HapticQuery(?\FFI\CData $haptic,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Haptic $haptic
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HapticNumAxes(?\FFI\CData $haptic,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Haptic $haptic
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_HapticEffect $effect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HapticEffectSupported(?\FFI\CData $haptic,?\FFI\CData $effect,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Haptic $haptic
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_HapticEffect $effect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HapticNewEffect(?\FFI\CData $haptic,?\FFI\CData $effect,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Haptic $haptic
         * @param int<-2147483648, 2147483647> $effect
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_HapticEffect $data
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HapticUpdateEffect(?\FFI\CData $haptic,int $effect,?\FFI\CData $data,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Haptic $haptic
         * @param int<-2147483648, 2147483647> $effect
         * @param int<0, 4294967295> $iterations
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HapticRunEffect(?\FFI\CData $haptic,int $effect,int $iterations,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Haptic $haptic
         * @param int<-2147483648, 2147483647> $effect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HapticStopEffect(?\FFI\CData $haptic,int $effect,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Haptic $haptic
         * @param int<-2147483648, 2147483647> $effect
         * @return \FFI\CData|null
         */
        public function SDL_HapticDestroyEffect(?\FFI\CData $haptic,int $effect,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Haptic $haptic
         * @param int<-2147483648, 2147483647> $effect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HapticGetEffectStatus(?\FFI\CData $haptic,int $effect,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Haptic $haptic
         * @param int<-2147483648, 2147483647> $gain
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HapticSetGain(?\FFI\CData $haptic,int $gain,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Haptic $haptic
         * @param int<-2147483648, 2147483647> $autocenter
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HapticSetAutocenter(?\FFI\CData $haptic,int $autocenter,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Haptic $haptic
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HapticPause(?\FFI\CData $haptic,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Haptic $haptic
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HapticUnpause(?\FFI\CData $haptic,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Haptic $haptic
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HapticStopAll(?\FFI\CData $haptic,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Haptic $haptic
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HapticRumbleSupported(?\FFI\CData $haptic,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Haptic $haptic
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HapticRumbleInit(?\FFI\CData $haptic,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Haptic $haptic
         * @param float $strength
         * @param int<0, 4294967295> $length
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HapticRumblePlay(?\FFI\CData $haptic,float $strength,int $length,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\_SDL_Haptic $haptic
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HapticRumbleStop(?\FFI\CData $haptic,): int;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_hid_init(): int;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_hid_exit(): int;

        /**
         * @return int<0, 4294967295>
         */
        public function SDL_hid_device_change_count(): int;

        /**
         * @param int<0, 65535> $vendor_id
         * @param int<0, 65535> $product_id
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_hid_device_info
         */
        public function SDL_hid_enumerate(int $vendor_id,int $product_id,): ?\FFI\CData;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_hid_device_info $devs
         * @return \FFI\CData|null
         */
        public function SDL_hid_free_enumeration(?\FFI\CData $devs,): \FFI\CData|null;

        /**
         * @param int<0, 65535> $vendor_id
         * @param int<0, 65535> $product_id
         * @param int<-2147483648, 2147483647> $serial_number
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_hid_device_
         */
        public function SDL_hid_open(int $vendor_id,int $product_id,int $serial_number,): ?\FFI\CData;

        /**
         * @param int<-128, 127> $path
         * @param int<-2147483648, 2147483647> $bExclusive
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_hid_device_
         */
        public function SDL_hid_open_path(int $path,int $bExclusive,): ?\FFI\CData;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_hid_device_ $dev
         * @param int<0, 255> $data
         * @param int<0, 18446744073709551615> $length
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_hid_write(?\FFI\CData $dev,int $data,int $length,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_hid_device_ $dev
         * @param int<0, 255> $data
         * @param int<0, 18446744073709551615> $length
         * @param int<-2147483648, 2147483647> $milliseconds
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_hid_read_timeout(?\FFI\CData $dev,int $data,int $length,int $milliseconds,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_hid_device_ $dev
         * @param int<0, 255> $data
         * @param int<0, 18446744073709551615> $length
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_hid_read(?\FFI\CData $dev,int $data,int $length,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_hid_device_ $dev
         * @param int<-2147483648, 2147483647> $nonblock
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_hid_set_nonblocking(?\FFI\CData $dev,int $nonblock,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_hid_device_ $dev
         * @param int<0, 255> $data
         * @param int<0, 18446744073709551615> $length
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_hid_send_feature_report(?\FFI\CData $dev,int $data,int $length,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_hid_device_ $dev
         * @param int<0, 255> $data
         * @param int<0, 18446744073709551615> $length
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_hid_get_feature_report(?\FFI\CData $dev,int $data,int $length,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_hid_device_ $dev
         * @return \FFI\CData|null
         */
        public function SDL_hid_close(?\FFI\CData $dev,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_hid_device_ $dev
         * @param int<-2147483648, 2147483647> $string
         * @param int<0, 18446744073709551615> $maxlen
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_hid_get_manufacturer_string(?\FFI\CData $dev,int $string,int $maxlen,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_hid_device_ $dev
         * @param int<-2147483648, 2147483647> $string
         * @param int<0, 18446744073709551615> $maxlen
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_hid_get_product_string(?\FFI\CData $dev,int $string,int $maxlen,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_hid_device_ $dev
         * @param int<-2147483648, 2147483647> $string
         * @param int<0, 18446744073709551615> $maxlen
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_hid_get_serial_number_string(?\FFI\CData $dev,int $string,int $maxlen,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_hid_device_ $dev
         * @param int<-2147483648, 2147483647> $string_index
         * @param int<-2147483648, 2147483647> $string
         * @param int<0, 18446744073709551615> $maxlen
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_hid_get_indexed_string(?\FFI\CData $dev,int $string_index,int $string,int $maxlen,): int;

        /**
         * @param int<-2147483648, 2147483647> $active
         * @return \FFI\CData|null
         */
        public function SDL_hid_ble_scan(int $active,): \FFI\CData|null;

        /**
         * @param int<-128, 127> $name
         * @param int<-128, 127> $value
         * @param int<-2147483648, 2147483647> $priority
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetHintWithPriority(int $name,int $value,int $priority,): int;

        /**
         * @param int<-128, 127> $name
         * @param int<-128, 127> $value
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetHint(int $name,int $value,): int;

        /**
         * @param int<-128, 127> $name
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_ResetHint(int $name,): int;

        /**
         * @return \FFI\CData|null
         */
        public function SDL_ResetHints(): \FFI\CData|null;

        /**
         * @param int<-128, 127> $name
         * @return int<-128, 127>
         */
        public function SDL_GetHint(int $name,): int;

        /**
         * @param int<-128, 127> $name
         * @param int<-2147483648, 2147483647> $default_value
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetHintBoolean(int $name,int $default_value,): int;

        /**
         * @param int<-128, 127> $name
         * @param callable|null $callback
         * @param \FFI\CData|null $userdata
         * @return \FFI\CData|null
         */
        public function SDL_AddHintCallback(int $name,\FFI\CData|\Closure|null $callback,\FFI\CData|null $userdata,): \FFI\CData|null;

        /**
         * @param int<-128, 127> $name
         * @param callable|null $callback
         * @param \FFI\CData|null $userdata
         * @return \FFI\CData|null
         */
        public function SDL_DelHintCallback(int $name,\FFI\CData|\Closure|null $callback,\FFI\CData|null $userdata,): \FFI\CData|null;

        /**
         * @return \FFI\CData|null
         */
        public function SDL_ClearHints(): \FFI\CData|null;

        /**
         * @param int<-128, 127> $sofile
         * @return \FFI\CData|null
         */
        public function SDL_LoadObject(int $sofile,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null $handle
         * @param int<-128, 127> $name
         * @return \FFI\CData|null
         */
        public function SDL_LoadFunction(\FFI\CData|null $handle,int $name,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null $handle
         * @return \FFI\CData|null
         */
        public function SDL_UnloadObject(\FFI\CData|null $handle,): \FFI\CData|null;

        /**
         * @param int<-2147483648, 2147483647> $priority
         * @return \FFI\CData|null
         */
        public function SDL_LogSetAllPriority(int $priority,): \FFI\CData|null;

        /**
         * @param int<-2147483648, 2147483647> $category
         * @param int<-2147483648, 2147483647> $priority
         * @return \FFI\CData|null
         */
        public function SDL_LogSetPriority(int $category,int $priority,): \FFI\CData|null;

        /**
         * @param int<-2147483648, 2147483647> $category
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_LogGetPriority(int $category,): int;

        /**
         * @return \FFI\CData|null
         */
        public function SDL_LogResetPriorities(): \FFI\CData|null;

        /**
         * @param int<-128, 127> $fmt
         * @return \FFI\CData|null
         */
        public function SDL_Log(int $fmt,): \FFI\CData|null;

        /**
         * @param int<-2147483648, 2147483647> $category
         * @param int<-128, 127> $fmt
         * @return \FFI\CData|null
         */
        public function SDL_LogVerbose(int $category,int $fmt,): \FFI\CData|null;

        /**
         * @param int<-2147483648, 2147483647> $category
         * @param int<-128, 127> $fmt
         * @return \FFI\CData|null
         */
        public function SDL_LogDebug(int $category,int $fmt,): \FFI\CData|null;

        /**
         * @param int<-2147483648, 2147483647> $category
         * @param int<-128, 127> $fmt
         * @return \FFI\CData|null
         */
        public function SDL_LogInfo(int $category,int $fmt,): \FFI\CData|null;

        /**
         * @param int<-2147483648, 2147483647> $category
         * @param int<-128, 127> $fmt
         * @return \FFI\CData|null
         */
        public function SDL_LogWarn(int $category,int $fmt,): \FFI\CData|null;

        /**
         * @param int<-2147483648, 2147483647> $category
         * @param int<-128, 127> $fmt
         * @return \FFI\CData|null
         */
        public function SDL_LogError(int $category,int $fmt,): \FFI\CData|null;

        /**
         * @param int<-2147483648, 2147483647> $category
         * @param int<-128, 127> $fmt
         * @return \FFI\CData|null
         */
        public function SDL_LogCritical(int $category,int $fmt,): \FFI\CData|null;

        /**
         * @param int<-2147483648, 2147483647> $category
         * @param int<-2147483648, 2147483647> $priority
         * @param int<-128, 127> $fmt
         * @return \FFI\CData|null
         */
        public function SDL_LogMessage(int $category,int $priority,int $fmt,): \FFI\CData|null;

        /**
         * @param int<-2147483648, 2147483647> $category
         * @param int<-2147483648, 2147483647> $priority
         * @param int<-128, 127> $fmt
         * @param \FFI\CData|null|\PHPSTORM_META\__va_list_tag $ap
         * @return \FFI\CData|null
         */
        public function SDL_LogMessageV(int $category,int $priority,int $fmt,?\FFI\CData $ap,): \FFI\CData|null;

        /**
         * @param callable|null $callback
         * @param \FFI\CData|null $userdata
         * @return \FFI\CData|null
         */
        public function SDL_LogGetOutputFunction(\FFI\CData|\Closure|null $callback,\FFI\CData|null $userdata,): \FFI\CData|null;

        /**
         * @param callable|null $callback
         * @param \FFI\CData|null $userdata
         * @return \FFI\CData|null
         */
        public function SDL_LogSetOutputFunction(\FFI\CData|\Closure|null $callback,\FFI\CData|null $userdata,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\ $messageboxdata
         * @param int<-2147483648, 2147483647> $buttonid
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_ShowMessageBox(?\FFI\CData $messageboxdata,int $buttonid,): int;

        /**
         * @param int<0, 4294967295> $flags
         * @param int<-128, 127> $title
         * @param int<-128, 127> $message
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_ShowSimpleMessageBox(int $flags,int $title,int $message,?\FFI\CData $window,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @return \FFI\CData|null
         */
        public function SDL_Metal_CreateView(?\FFI\CData $window,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null $view
         * @return \FFI\CData|null
         */
        public function SDL_Metal_DestroyView(\FFI\CData|null $view,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null $view
         * @return \FFI\CData|null
         */
        public function SDL_Metal_GetLayer(\FFI\CData|null $view,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param int<-2147483648, 2147483647> $w
         * @param int<-2147483648, 2147483647> $h
         * @return \FFI\CData|null
         */
        public function SDL_Metal_GetDrawableSize(?\FFI\CData $window,int $w,int $h,): \FFI\CData|null;

        /**
         * @param int<-2147483648, 2147483647> $seconds
         * @param int<-2147483648, 2147483647> $percent
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetPowerInfo(int $seconds,int $percent,): int;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetNumRenderDrivers(): int;

        /**
         * @param int<-2147483648, 2147483647> $index
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_RendererInfo $info
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetRenderDriverInfo(int $index,?\FFI\CData $info,): int;

        /**
         * @param int<-2147483648, 2147483647> $width
         * @param int<-2147483648, 2147483647> $height
         * @param int<0, 4294967295> $window_flags
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_CreateWindowAndRenderer(int $width,int $height,int $window_flags,?\FFI\CData $window,?\FFI\CData $renderer,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param int<-2147483648, 2147483647> $index
         * @param int<0, 4294967295> $flags
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_Renderer
         */
        public function SDL_CreateRenderer(?\FFI\CData $window,int $index,int $flags,): ?\FFI\CData;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $surface
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_Renderer
         */
        public function SDL_CreateSoftwareRenderer(?\FFI\CData $surface,): ?\FFI\CData;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_Renderer
         */
        public function SDL_GetRenderer(?\FFI\CData $window,): ?\FFI\CData;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_Window
         */
        public function SDL_RenderGetWindow(?\FFI\CData $renderer,): ?\FFI\CData;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_RendererInfo $info
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetRendererInfo(?\FFI\CData $renderer,?\FFI\CData $info,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param int<-2147483648, 2147483647> $w
         * @param int<-2147483648, 2147483647> $h
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetRendererOutputSize(?\FFI\CData $renderer,int $w,int $h,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param int<0, 4294967295> $format
         * @param int<-2147483648, 2147483647> $access
         * @param int<-2147483648, 2147483647> $w
         * @param int<-2147483648, 2147483647> $h
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_Texture
         */
        public function SDL_CreateTexture(?\FFI\CData $renderer,int $format,int $access,int $w,int $h,): ?\FFI\CData;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $surface
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_Texture
         */
        public function SDL_CreateTextureFromSurface(?\FFI\CData $renderer,?\FFI\CData $surface,): ?\FFI\CData;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Texture $texture
         * @param int<0, 4294967295> $format
         * @param int<-2147483648, 2147483647> $access
         * @param int<-2147483648, 2147483647> $w
         * @param int<-2147483648, 2147483647> $h
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_QueryTexture(?\FFI\CData $texture,int $format,int $access,int $w,int $h,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Texture $texture
         * @param int<0, 255> $r
         * @param int<0, 255> $g
         * @param int<0, 255> $b
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetTextureColorMod(?\FFI\CData $texture,int $r,int $g,int $b,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Texture $texture
         * @param int<0, 255> $r
         * @param int<0, 255> $g
         * @param int<0, 255> $b
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetTextureColorMod(?\FFI\CData $texture,int $r,int $g,int $b,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Texture $texture
         * @param int<0, 255> $alpha
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetTextureAlphaMod(?\FFI\CData $texture,int $alpha,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Texture $texture
         * @param int<0, 255> $alpha
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetTextureAlphaMod(?\FFI\CData $texture,int $alpha,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Texture $texture
         * @param int<-2147483648, 2147483647> $blendMode
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetTextureBlendMode(?\FFI\CData $texture,int $blendMode,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Texture $texture
         * @param int<-2147483648, 2147483647> $blendMode
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetTextureBlendMode(?\FFI\CData $texture,int $blendMode,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Texture $texture
         * @param int<-2147483648, 2147483647> $scaleMode
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetTextureScaleMode(?\FFI\CData $texture,int $scaleMode,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Texture $texture
         * @param int<-2147483648, 2147483647> $scaleMode
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetTextureScaleMode(?\FFI\CData $texture,int $scaleMode,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Texture $texture
         * @param \FFI\CData|null $userdata
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetTextureUserData(?\FFI\CData $texture,\FFI\CData|null $userdata,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Texture $texture
         * @return \FFI\CData|null
         */
        public function SDL_GetTextureUserData(?\FFI\CData $texture,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Texture $texture
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $rect
         * @param \FFI\CData|null $pixels
         * @param int<-2147483648, 2147483647> $pitch
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_UpdateTexture(?\FFI\CData $texture,?\FFI\CData $rect,\FFI\CData|null $pixels,int $pitch,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Texture $texture
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $rect
         * @param int<0, 255> $Yplane
         * @param int<-2147483648, 2147483647> $Ypitch
         * @param int<0, 255> $Uplane
         * @param int<-2147483648, 2147483647> $Upitch
         * @param int<0, 255> $Vplane
         * @param int<-2147483648, 2147483647> $Vpitch
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_UpdateYUVTexture(?\FFI\CData $texture,?\FFI\CData $rect,int $Yplane,int $Ypitch,int $Uplane,int $Upitch,int $Vplane,int $Vpitch,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Texture $texture
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $rect
         * @param int<0, 255> $Yplane
         * @param int<-2147483648, 2147483647> $Ypitch
         * @param int<0, 255> $UVplane
         * @param int<-2147483648, 2147483647> $UVpitch
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_UpdateNVTexture(?\FFI\CData $texture,?\FFI\CData $rect,int $Yplane,int $Ypitch,int $UVplane,int $UVpitch,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Texture $texture
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $rect
         * @param \FFI\CData|null $pixels
         * @param int<-2147483648, 2147483647> $pitch
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_LockTexture(?\FFI\CData $texture,?\FFI\CData $rect,\FFI\CData|null $pixels,int $pitch,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Texture $texture
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $rect
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $surface
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_LockTextureToSurface(?\FFI\CData $texture,?\FFI\CData $rect,?\FFI\CData $surface,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Texture $texture
         * @return \FFI\CData|null
         */
        public function SDL_UnlockTexture(?\FFI\CData $texture,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderTargetSupported(?\FFI\CData $renderer,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Texture $texture
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetRenderTarget(?\FFI\CData $renderer,?\FFI\CData $texture,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_Texture
         */
        public function SDL_GetRenderTarget(?\FFI\CData $renderer,): ?\FFI\CData;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param int<-2147483648, 2147483647> $w
         * @param int<-2147483648, 2147483647> $h
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderSetLogicalSize(?\FFI\CData $renderer,int $w,int $h,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param int<-2147483648, 2147483647> $w
         * @param int<-2147483648, 2147483647> $h
         * @return \FFI\CData|null
         */
        public function SDL_RenderGetLogicalSize(?\FFI\CData $renderer,int $w,int $h,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param int<-2147483648, 2147483647> $enable
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderSetIntegerScale(?\FFI\CData $renderer,int $enable,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderGetIntegerScale(?\FFI\CData $renderer,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $rect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderSetViewport(?\FFI\CData $renderer,?\FFI\CData $rect,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $rect
         * @return \FFI\CData|null
         */
        public function SDL_RenderGetViewport(?\FFI\CData $renderer,?\FFI\CData $rect,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $rect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderSetClipRect(?\FFI\CData $renderer,?\FFI\CData $rect,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $rect
         * @return \FFI\CData|null
         */
        public function SDL_RenderGetClipRect(?\FFI\CData $renderer,?\FFI\CData $rect,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderIsClipEnabled(?\FFI\CData $renderer,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param float $scaleX
         * @param float $scaleY
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderSetScale(?\FFI\CData $renderer,float $scaleX,float $scaleY,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param float $scaleX
         * @param float $scaleY
         * @return \FFI\CData|null
         */
        public function SDL_RenderGetScale(?\FFI\CData $renderer,float $scaleX,float $scaleY,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param int<-2147483648, 2147483647> $windowX
         * @param int<-2147483648, 2147483647> $windowY
         * @param float $logicalX
         * @param float $logicalY
         * @return \FFI\CData|null
         */
        public function SDL_RenderWindowToLogical(?\FFI\CData $renderer,int $windowX,int $windowY,float $logicalX,float $logicalY,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param float $logicalX
         * @param float $logicalY
         * @param int<-2147483648, 2147483647> $windowX
         * @param int<-2147483648, 2147483647> $windowY
         * @return \FFI\CData|null
         */
        public function SDL_RenderLogicalToWindow(?\FFI\CData $renderer,float $logicalX,float $logicalY,int $windowX,int $windowY,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param int<0, 255> $r
         * @param int<0, 255> $g
         * @param int<0, 255> $b
         * @param int<0, 255> $a
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetRenderDrawColor(?\FFI\CData $renderer,int $r,int $g,int $b,int $a,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param int<0, 255> $r
         * @param int<0, 255> $g
         * @param int<0, 255> $b
         * @param int<0, 255> $a
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetRenderDrawColor(?\FFI\CData $renderer,int $r,int $g,int $b,int $a,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param int<-2147483648, 2147483647> $blendMode
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetRenderDrawBlendMode(?\FFI\CData $renderer,int $blendMode,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param int<-2147483648, 2147483647> $blendMode
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetRenderDrawBlendMode(?\FFI\CData $renderer,int $blendMode,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderClear(?\FFI\CData $renderer,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param int<-2147483648, 2147483647> $x
         * @param int<-2147483648, 2147483647> $y
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderDrawPoint(?\FFI\CData $renderer,int $x,int $y,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Point $points
         * @param int<-2147483648, 2147483647> $count
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderDrawPoints(?\FFI\CData $renderer,?\FFI\CData $points,int $count,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param int<-2147483648, 2147483647> $x1
         * @param int<-2147483648, 2147483647> $y1
         * @param int<-2147483648, 2147483647> $x2
         * @param int<-2147483648, 2147483647> $y2
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderDrawLine(?\FFI\CData $renderer,int $x1,int $y1,int $x2,int $y2,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Point $points
         * @param int<-2147483648, 2147483647> $count
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderDrawLines(?\FFI\CData $renderer,?\FFI\CData $points,int $count,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $rect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderDrawRect(?\FFI\CData $renderer,?\FFI\CData $rect,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $rects
         * @param int<-2147483648, 2147483647> $count
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderDrawRects(?\FFI\CData $renderer,?\FFI\CData $rects,int $count,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $rect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderFillRect(?\FFI\CData $renderer,?\FFI\CData $rect,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $rects
         * @param int<-2147483648, 2147483647> $count
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderFillRects(?\FFI\CData $renderer,?\FFI\CData $rects,int $count,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Texture $texture
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $srcrect
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $dstrect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderCopy(?\FFI\CData $renderer,?\FFI\CData $texture,?\FFI\CData $srcrect,?\FFI\CData $dstrect,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Texture $texture
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $srcrect
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $dstrect
         * @param float $angle
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Point $center
         * @param int<-2147483648, 2147483647> $flip
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderCopyEx(?\FFI\CData $renderer,?\FFI\CData $texture,?\FFI\CData $srcrect,?\FFI\CData $dstrect,float $angle,?\FFI\CData $center,int $flip,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param float $x
         * @param float $y
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderDrawPointF(?\FFI\CData $renderer,float $x,float $y,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_FPoint $points
         * @param int<-2147483648, 2147483647> $count
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderDrawPointsF(?\FFI\CData $renderer,?\FFI\CData $points,int $count,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param float $x1
         * @param float $y1
         * @param float $x2
         * @param float $y2
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderDrawLineF(?\FFI\CData $renderer,float $x1,float $y1,float $x2,float $y2,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_FPoint $points
         * @param int<-2147483648, 2147483647> $count
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderDrawLinesF(?\FFI\CData $renderer,?\FFI\CData $points,int $count,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_FRect $rect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderDrawRectF(?\FFI\CData $renderer,?\FFI\CData $rect,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_FRect $rects
         * @param int<-2147483648, 2147483647> $count
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderDrawRectsF(?\FFI\CData $renderer,?\FFI\CData $rects,int $count,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_FRect $rect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderFillRectF(?\FFI\CData $renderer,?\FFI\CData $rect,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_FRect $rects
         * @param int<-2147483648, 2147483647> $count
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderFillRectsF(?\FFI\CData $renderer,?\FFI\CData $rects,int $count,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Texture $texture
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $srcrect
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_FRect $dstrect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderCopyF(?\FFI\CData $renderer,?\FFI\CData $texture,?\FFI\CData $srcrect,?\FFI\CData $dstrect,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Texture $texture
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $srcrect
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_FRect $dstrect
         * @param float $angle
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_FPoint $center
         * @param int<-2147483648, 2147483647> $flip
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderCopyExF(?\FFI\CData $renderer,?\FFI\CData $texture,?\FFI\CData $srcrect,?\FFI\CData $dstrect,float $angle,?\FFI\CData $center,int $flip,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Texture $texture
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Vertex $vertices
         * @param int<-2147483648, 2147483647> $num_vertices
         * @param int<-2147483648, 2147483647> $indices
         * @param int<-2147483648, 2147483647> $num_indices
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderGeometry(?\FFI\CData $renderer,?\FFI\CData $texture,?\FFI\CData $vertices,int $num_vertices,int $indices,int $num_indices,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Texture $texture
         * @param float $xy
         * @param int<-2147483648, 2147483647> $xy_stride
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Color $color
         * @param int<-2147483648, 2147483647> $color_stride
         * @param float $uv
         * @param int<-2147483648, 2147483647> $uv_stride
         * @param int<-2147483648, 2147483647> $num_vertices
         * @param \FFI\CData|null $indices
         * @param int<-2147483648, 2147483647> $num_indices
         * @param int<-2147483648, 2147483647> $size_indices
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderGeometryRaw(?\FFI\CData $renderer,?\FFI\CData $texture,float $xy,int $xy_stride,?\FFI\CData $color,int $color_stride,float $uv,int $uv_stride,int $num_vertices,\FFI\CData|null $indices,int $num_indices,int $size_indices,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Rect $rect
         * @param int<0, 4294967295> $format
         * @param \FFI\CData|null $pixels
         * @param int<-2147483648, 2147483647> $pitch
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderReadPixels(?\FFI\CData $renderer,?\FFI\CData $rect,int $format,\FFI\CData|null $pixels,int $pitch,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @return \FFI\CData|null
         */
        public function SDL_RenderPresent(?\FFI\CData $renderer,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Texture $texture
         * @return \FFI\CData|null
         */
        public function SDL_DestroyTexture(?\FFI\CData $texture,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @return \FFI\CData|null
         */
        public function SDL_DestroyRenderer(?\FFI\CData $renderer,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderFlush(?\FFI\CData $renderer,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Texture $texture
         * @param float $texw
         * @param float $texh
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GL_BindTexture(?\FFI\CData $texture,float $texw,float $texh,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Texture $texture
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GL_UnbindTexture(?\FFI\CData $texture,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @return \FFI\CData|null
         */
        public function SDL_RenderGetMetalLayer(?\FFI\CData $renderer,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @return \FFI\CData|null
         */
        public function SDL_RenderGetMetalCommandEncoder(?\FFI\CData $renderer,): \FFI\CData|null;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Renderer $renderer
         * @param int<-2147483648, 2147483647> $vsync
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderSetVSync(?\FFI\CData $renderer,int $vsync,): int;

        /**
         * @param int<-128, 127> $title
         * @param int<0, 4294967295> $x
         * @param int<0, 4294967295> $y
         * @param int<0, 4294967295> $w
         * @param int<0, 4294967295> $h
         * @param int<0, 4294967295> $flags
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_Window
         */
        public function SDL_CreateShapedWindow(int $title,int $x,int $y,int $w,int $h,int $flags,): ?\FFI\CData;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_IsShapedWindow(?\FFI\CData $window,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Surface $shape
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_WindowShapeMode $shape_mode
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetWindowShape(?\FFI\CData $window,?\FFI\CData $shape,?\FFI\CData $shape_mode,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_Window $window
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_WindowShapeMode $shape_mode
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetShapedWindowMode(?\FFI\CData $window,?\FFI\CData $shape_mode,): int;

        /**
         * @param int<-9223372036854775808, 9223372036854775807> $threadID
         * @param int<-2147483648, 2147483647> $priority
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_LinuxSetThreadPriority(int $threadID,int $priority,): int;

        /**
         * @param int<-9223372036854775808, 9223372036854775807> $threadID
         * @param int<-2147483648, 2147483647> $sdlPriority
         * @param int<-2147483648, 2147483647> $schedPolicy
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_LinuxSetThreadPriorityAndPolicy(int $threadID,int $sdlPriority,int $schedPolicy,): int;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_IsTablet(): int;

        /**
         * @return \FFI\CData|null
         */
        public function SDL_OnApplicationWillTerminate(): \FFI\CData|null;

        /**
         * @return \FFI\CData|null
         */
        public function SDL_OnApplicationDidReceiveMemoryWarning(): \FFI\CData|null;

        /**
         * @return \FFI\CData|null
         */
        public function SDL_OnApplicationWillResignActive(): \FFI\CData|null;

        /**
         * @return \FFI\CData|null
         */
        public function SDL_OnApplicationDidEnterBackground(): \FFI\CData|null;

        /**
         * @return \FFI\CData|null
         */
        public function SDL_OnApplicationWillEnterForeground(): \FFI\CData|null;

        /**
         * @return \FFI\CData|null
         */
        public function SDL_OnApplicationDidBecomeActive(): \FFI\CData|null;

        /**
         * @return int<0, 4294967295>
         */
        public function SDL_GetTicks(): int;

        /**
         * @return int<0, 18446744073709551615>
         */
        public function SDL_GetTicks64(): int;

        /**
         * @return int<0, 18446744073709551615>
         */
        public function SDL_GetPerformanceCounter(): int;

        /**
         * @return int<0, 18446744073709551615>
         */
        public function SDL_GetPerformanceFrequency(): int;

        /**
         * @param int<0, 4294967295> $ms
         * @return \FFI\CData|null
         */
        public function SDL_Delay(int $ms,): \FFI\CData|null;

        /**
         * @param int<0, 4294967295> $interval
         * @param callable|null $callback
         * @param \FFI\CData|null $param
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_AddTimer(int $interval,\FFI\CData|\Closure|null $callback,\FFI\CData|null $param,): int;

        /**
         * @param int<-2147483648, 2147483647> $id
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RemoveTimer(int $id,): int;

        /**
         * @param \FFI\CData|null|\PHPSTORM_META\SDL_version $ver
         * @return \FFI\CData|null
         */
        public function SDL_GetVersion(?\FFI\CData $ver,): \FFI\CData|null;

        /**
         * @return int<-128, 127>
         */
        public function SDL_GetRevision(): int;

        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetRevisionNumber(): int;

        /**
         * @return \FFI\CData|null|\PHPSTORM_META\SDL_Locale
         */
        public function SDL_GetPreferredLocales(): ?\FFI\CData;

        /**
         * @param int<-128, 127> $url
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_OpenURL(int $url,): int;

        /**
         * @param int<0, 4294967295> $flags
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_Init(int $flags,): int;

        /**
         * @param int<0, 4294967295> $flags
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_InitSubSystem(int $flags,): int;

        /**
         * @param int<0, 4294967295> $flags
         * @return \FFI\CData|null
         */
        public function SDL_QuitSubSystem(int $flags,): \FFI\CData|null;

        /**
         * @param int<0, 4294967295> $flags
         * @return int<0, 4294967295>
         */
        public function SDL_WasInit(int $flags,): int;

        /**
         * @return \FFI\CData|null
         */
        public function SDL_Quit(): \FFI\CData|null;


    }

}
