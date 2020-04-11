<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Kernel\GameController;

/**
 * @since SDL 2.0.12
 */
interface Type
{
    /**
     * @var int
     */
    public const SDL_CONTROLLER_TYPE_UNKNOWN = 0;

    /**
     * @var int
     */
    public const SDL_CONTROLLER_TYPE_XBOX360 = 1;

    /**
     * @var int
     */
    public const SDL_CONTROLLER_TYPE_XBOXONE = 2;

    /**
     * @var int
     */
    public const SDL_CONTROLLER_TYPE_PS3 = 3;

    /**
     * @var int
     */
    public const SDL_CONTROLLER_TYPE_PS4 = 4;

    /**
     * @var int
     */
    public const SDL_CONTROLLER_TYPE_NINTENDO_SWITCH_PRO = 5;
}
