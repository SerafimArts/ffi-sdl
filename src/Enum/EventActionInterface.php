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
 * Interface EventActionInterface
 */
interface EventActionInterface
{
    public const SDL_ADDEVENT  = 0;
    public const SDL_PEEKEVENT = 1;
    public const SDL_GETEVENT  = 2;
}
