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
 * Interface TextureModulateInterface
 */
interface TextureModulate
{
    public const SDL_TEXTUREMODULATE_NONE  = 0x00000000;
    public const SDL_TEXTUREMODULATE_COLOR = 0x00000001;
    public const SDL_TEXTUREMODULATE_ALPHA = 0x00000002;
}
