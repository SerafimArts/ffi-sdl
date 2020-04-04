<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SDL\Kernel\Hint;

/**
 * Interface Priority
 */
interface Priority
{
    public const SDL_HINT_DEFAULT  = 0;
    public const SDL_HINT_NORMAL   = 1;
    public const SDL_HINT_OVERRIDE = 2;
}
