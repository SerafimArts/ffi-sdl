<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Enum;

/**
 * Interface BitMapOrderInterface
 */
interface BitMapOrderInterface
{
    public const SDL_BITMAPORDER_NONE = 0;
    public const SDL_BITMAPORDER_4321 = 1;
    public const SDL_BITMAPORDER_1234 = 2;
}
