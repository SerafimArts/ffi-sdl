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
interface BoolImpl
{
    /**
     * @var int
     */
    public const SDL_FALSE = 0;

    /**
     * @var int
     */
    public const SDL_TRUE = 1;
}
