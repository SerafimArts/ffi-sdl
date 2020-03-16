<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Kernel\Defines;

/**
 * Interface Video
 */
interface VideoSubsystem
{
    public const SDL_WINDOWPOS_UNDEFINED_MASK = 0x1FFF0000;
    public const SDL_WINDOWPOS_UNDEFINED = self::SDL_WINDOWPOS_UNDEFINED_MASK | 0;
    public const SDL_WINDOWPOS_CENTERED_MASK = 0x2FFF0000;
    public const SDL_WINDOWPOS_CENTERED = self::SDL_WINDOWPOS_CENTERED_MASK | 0;
}
