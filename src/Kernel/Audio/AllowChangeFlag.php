<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SDL\Kernel\Audio;

/**
 * Allow change flags
 *
 * Which audio format changes are allowed when opening a device.
 *
 * @see SDL::SDL_OpenAudioDevice()
 */
interface AllowChangeFlag
{
    /**
     * @var int
     */
    public const SDL_AUDIO_ALLOW_FREQUENCY_CHANGE = 0x00000001;

    /**
     * @var int
     */
    public const SDL_AUDIO_ALLOW_FORMAT_CHANGE = 0x00000002;

    /**
     * @var int
     */
    public const SDL_AUDIO_ALLOW_CHANNELS_CHANGE = 0x00000004;

    /**
     * @var int
     */
    public const SDL_AUDIO_ALLOW_SAMPLES_CHANGE = 0x00000008;

    /**
     * @var int
     */
    public const SDL_AUDIO_ALLOW_ANY_CHANGE = (
        self::SDL_AUDIO_ALLOW_FREQUENCY_CHANGE |
        self::SDL_AUDIO_ALLOW_FORMAT_CHANGE |
        self::SDL_AUDIO_ALLOW_CHANNELS_CHANGE |
        self::SDL_AUDIO_ALLOW_SAMPLES_CHANGE
    );
}
