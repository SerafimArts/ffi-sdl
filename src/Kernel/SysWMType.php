<?php

declare(strict_types=1);

namespace Serafim\SDL\Kernel;

interface SysWMType
{
    public const SDL_SYSWM_UNKNOWN = 0;
    public const SDL_SYSWM_WINDOWS = 1;
    public const SDL_SYSWM_X11 = 2;
    public const SDL_SYSWM_DIRECTFB = 3;
    public const SDL_SYSWM_COCOA = 4;
    public const SDL_SYSWM_UIKIT = 5;
    public const SDL_SYSWM_WAYLAND = 6;
    /**
     * @deprecated no longer available, left for API/ABI compatibility. Remove in 2.1!
     */
    public const SDL_SYSWM_MIR = 7;
    public const SDL_SYSWM_WINRT = 8;
    public const SDL_SYSWM_ANDROID = 9;
    public const SDL_SYSWM_VIVANTE = 10;
    public const SDL_SYSWM_OS2 = 11;
    public const SDL_SYSWM_HAIKU = 12;
    public const SDL_SYSWM_KMSDRM = 13;
    public const SDL_SYSWM_RISCOS = 14;
}
