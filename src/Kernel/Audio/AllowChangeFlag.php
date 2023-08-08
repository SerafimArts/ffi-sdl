<?php

declare(strict_types=1);

namespace Serafim\SDL\Kernel\Audio;

/**
 * Allow change flags
 *
 * Which audio format changes are allowed when opening a device.
 *
 * @see SDL::SDL_OpenAudioDevice()
 */
interface AllowChangeFlag
{

    public const SDL_AUDIO_ALLOW_FREQUENCY_CHANGE = 0x00000001;

    public const SDL_AUDIO_ALLOW_FORMAT_CHANGE = 0x00000002;

    public const SDL_AUDIO_ALLOW_CHANNELS_CHANGE = 0x00000004;

    public const SDL_AUDIO_ALLOW_SAMPLES_CHANGE = 0x00000008;

    public const SDL_AUDIO_ALLOW_ANY_CHANGE = (
        self::SDL_AUDIO_ALLOW_FREQUENCY_CHANGE |
        self::SDL_AUDIO_ALLOW_FORMAT_CHANGE |
        self::SDL_AUDIO_ALLOW_CHANNELS_CHANGE |
        self::SDL_AUDIO_ALLOW_SAMPLES_CHANGE
    );
}
