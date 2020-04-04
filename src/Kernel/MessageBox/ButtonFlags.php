<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SDL\Kernel\MessageBox;

/**
 * Interface ButtonFlags
 */
interface ButtonFlags
{
    public const SDL_MESSAGEBOX_BUTTON_RETURNKEY_DEFAULT = 0x00000001;
    public const SDL_MESSAGEBOX_BUTTON_ESCAPEKEY_DEFAULT = 0x00000002;
}
