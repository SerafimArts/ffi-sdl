<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SDL\Kernel\Keyboard;

/**
 * Interface KeyModeInterface
 */
interface KeyMode
{
    public const KMOD_NONE     = 0x0000;
    public const KMOD_LSHIFT   = 0x0001;
    public const KMOD_RSHIFT   = 0x0002;
    public const KMOD_LCTRL    = 0x0040;
    public const KMOD_RCTRL    = 0x0080;
    public const KMOD_LALT     = 0x0100;
    public const KMOD_RALT     = 0x0200;
    public const KMOD_LGUI     = 0x0400;
    public const KMOD_RGUI     = 0x0800;
    public const KMOD_NUM      = 0x1000;
    public const KMOD_CAPS     = 0x2000;
    public const KMOD_MODE     = 0x4000;
    public const KMOD_RESERVED = 0x8000;
}
