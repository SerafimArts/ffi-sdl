<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Kernel\Video;

/**
 * Interface BlendModeInterface
 */
interface BlendMode
{
    public const SDL_BLENDMODE_NONE    = 0x00000000;
    public const SDL_BLENDMODE_BLEND   = 0x00000001;
    public const SDL_BLENDMODE_ADD     = 0x00000002;
    public const SDL_BLENDMODE_MOD     = 0x00000004;
    public const SDL_BLENDMODE_INVALID = 0x7FFFFFFF;
}
