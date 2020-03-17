<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Kernel\MessageBox;

/**
 * Interface ColorType
 */
interface ColorType
{
    public const SDL_MESSAGEBOX_COLOR_BACKGROUND        = 0;
    public const SDL_MESSAGEBOX_COLOR_TEXT              = 1;
    public const SDL_MESSAGEBOX_COLOR_BUTTON_BORDER     = 2;
    public const SDL_MESSAGEBOX_COLOR_BUTTON_BACKGROUND = 3;
    public const SDL_MESSAGEBOX_COLOR_BUTTON_SELECTED   = 4;
    public const SDL_MESSAGEBOX_COLOR_MAX               = 5;
}
