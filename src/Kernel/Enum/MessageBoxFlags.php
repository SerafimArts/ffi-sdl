<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Kernel\Enum;

/**
 * Interface MessageBoxFlagsInterface
 */
interface MessageBoxFlags
{
    public const SDL_MESSAGEBOX_ERROR       = 0x00000010;
    public const SDL_MESSAGEBOX_WARNING     = 0x00000020;
    public const SDL_MESSAGEBOX_INFORMATION = 0x00000040;
}
