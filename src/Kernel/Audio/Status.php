<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Kernel\Audio;

/**
 * Interface AudioStatusInterface
 */
interface Status
{
    public const SDL_AUDIO_STOPPED = 0;
    public const SDL_AUDIO_PLAYING = 1;
    public const SDL_AUDIO_PAUSED = 2;
}
