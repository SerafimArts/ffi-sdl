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
 * Interface TextureAccessInterface
 */
interface TextureAccess
{
    public const SDL_TEXTUREACCESS_STATIC    = 0;
    public const SDL_TEXTUREACCESS_STREAMING = 1;
    public const SDL_TEXTUREACCESS_TARGET    = 2;
}
