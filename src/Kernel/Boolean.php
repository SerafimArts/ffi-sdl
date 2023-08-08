<?php

declare(strict_types=1);

namespace Serafim\SDL\Kernel;

/**
 * Basic bool data type
 *
 * <code>
 *  typedef enum
 *  {
 *      SDL_FALSE = 0,
 *      SDL_TRUE = 1
 *  } SDL_bool;
 * </code>
 */
interface Boolean
{
    public const SDL_FALSE = 0;
    public const SDL_TRUE = 1;
}
