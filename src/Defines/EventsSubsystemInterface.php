<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Defines;

interface EventsSubsystemInterface
{
    public const SDL_RELEASED = 0;
    public const SDL_PRESSED = 1;

    public const SDL_QUERY = -1;
    public const SDL_IGNORE = 0;
    public const SDL_DISABLE = 0;
    public const SDL_ENABLE = 1;
}
