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
 * Interface BlendOperationInterface
 */
interface BlendOperation
{
    public const SDL_BLENDOPERATION_ADD          = 0x1;
    public const SDL_BLENDOPERATION_SUBTRACT     = 0x2;
    public const SDL_BLENDOPERATION_REV_SUBTRACT = 0x3;
    public const SDL_BLENDOPERATION_MINIMUM      = 0x4;
    public const SDL_BLENDOPERATION_MAXIMUM      = 0x5;
}
