<?php

declare(strict_types=1);

namespace Serafim\SDL\Kernel\MessageBox;

/**
 * Interface Flags
 */
interface Flags
{
    public const SDL_MESSAGEBOX_ERROR       = 0x00000010;
    public const SDL_MESSAGEBOX_WARNING     = 0x00000020;
    public const SDL_MESSAGEBOX_INFORMATION = 0x00000040;
}
