<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Kernel\Touch;

/**
 * Interface DeviceType
 */
interface DeviceType
{
    public const SDL_TOUCH_DEVICE_INVALID           = -1;
    public const SDL_TOUCH_DEVICE_DIRECT            = 0;
    public const SDL_TOUCH_DEVICE_INDIRECT_ABSOLUTE = 1;
    public const SDL_TOUCH_DEVICE_INDIRECT_RELATIVE = 2;
}
