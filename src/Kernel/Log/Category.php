<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Kernel\Log;

/**
 * Interface Category
 */
interface Category
{
    public const SDL_LOG_CATEGORY_APPLICATION = 0;
    public const SDL_LOG_CATEGORY_ERROR       = 1;
    public const SDL_LOG_CATEGORY_ASSERT      = 2;
    public const SDL_LOG_CATEGORY_SYSTEM      = 3;
    public const SDL_LOG_CATEGORY_AUDIO       = 4;
    public const SDL_LOG_CATEGORY_VIDEO       = 5;
    public const SDL_LOG_CATEGORY_RENDER      = 6;
    public const SDL_LOG_CATEGORY_INPUT       = 7;
    public const SDL_LOG_CATEGORY_TEST        = 8;
    public const SDL_LOG_CATEGORY_RESERVED1   = 9;
    public const SDL_LOG_CATEGORY_RESERVED2   = 10;
    public const SDL_LOG_CATEGORY_RESERVED3   = 11;
    public const SDL_LOG_CATEGORY_RESERVED4   = 12;
    public const SDL_LOG_CATEGORY_RESERVED5   = 13;
    public const SDL_LOG_CATEGORY_RESERVED6   = 14;
    public const SDL_LOG_CATEGORY_RESERVED7   = 15;
    public const SDL_LOG_CATEGORY_RESERVED8   = 16;
    public const SDL_LOG_CATEGORY_RESERVED9   = 17;
    public const SDL_LOG_CATEGORY_RESERVED10  = 18;
    public const SDL_LOG_CATEGORY_CUSTOM      = 19;
}
