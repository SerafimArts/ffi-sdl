<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Kernel\Enum;

/**
 * Interface RendererFlagsInterface
 */
interface RendererFlags
{
    public const SDL_RENDERER_SOFTWARE      = 0x00000001;
    public const SDL_RENDERER_ACCELERATED   = 0x00000002;
    public const SDL_RENDERER_PRESENTVSYNC  = 0x00000004;
    public const SDL_RENDERER_TARGETTEXTURE = 0x00000008;
}
