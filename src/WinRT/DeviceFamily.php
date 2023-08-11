<?php

declare(strict_types=1);

namespace Serafim\SDL\WinRT;

interface DeviceFamily
{
    /**
     * Unknown family
     */
    public const SDL_WINRT_DEVICEFAMILY_UNKNOWN = 0;

    /**
     * Desktop family
     */
    public const SDL_WINRT_DEVICEFAMILY_DESKTOP = 1;

    /**
     * Mobile family (for example smartphone)
     */
    public const SDL_WINRT_DEVICEFAMILY_MOBILE = 2;

    /**
     * XBox family
     */
    public const SDL_WINRT_DEVICEFAMILY_XBOX = 3;
}
