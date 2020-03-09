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
 * Interface DisplayOrientationInterface
 */
interface DisplayOrientationInterface
{
    public const SDL_ORIENTATION_UNKNOWN           = 0;
    public const SDL_ORIENTATION_LANDSCAPE         = 1;
    public const SDL_ORIENTATION_LANDSCAPE_FLIPPED = 2;
    public const SDL_ORIENTATION_PORTRAIT          = 3;
    public const SDL_ORIENTATION_PORTRAIT_FLIPPED  = 4;
}
