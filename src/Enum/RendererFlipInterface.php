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
 * Interface RendererFlipInterface
 */
interface RendererFlipInterface
{
    public const SDL_FLIP_NONE       = 0x00000000;
    public const SDL_FLIP_HORIZONTAL = 0x00000001;
    public const SDL_FLIP_VERTICAL   = 0x00000002;
}
