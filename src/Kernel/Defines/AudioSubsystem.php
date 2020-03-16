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
 * Interface Audio
 */
interface AudioSubsystem
{
    /**< Unsigned 8-bit samples */
    public const AUDIO_U8 = 0x0008;
    /**< Signed 8-bit samples */
    public const AUDIO_S8 = 0x8008;
    /**
     * Unsigned 16-bit samples
     * @since 2.0.5
     */
    public const AUDIO_U16LSB = 0x0010;
    /**< Signed 16-bit samples */
    public const AUDIO_S16LSB = 0x8010;
    /**
     * As above, but big-endian byte order
     * @since 2.0.5
     */
    public const AUDIO_U16MSB = 0x1010;
    /**< As above, but big-endian byte order */
    public const AUDIO_S16MSB = 0x9010;
    public const AUDIO_U16    = self::AUDIO_U16LSB;
    public const AUDIO_S16    = self::AUDIO_S16LSB;

    /**< 32-bit integer samples */
    public const AUDIO_S32LSB = 0x8020;
    /**< As above, but big-endian byte order */
    public const AUDIO_S32MSB = 0x9020;
    public const AUDIO_S32    = self::AUDIO_S32LSB;

    /**< 32-bit floating point samples */
    public const AUDIO_F32LSB = 0x8120;
    /**< As above, but big-endian byte order */
    public const AUDIO_F32MSB = 0x9120;
    public const AUDIO_F32    = self::AUDIO_F32LSB;

    public const SDL_AUDIO_ALLOW_FREQUENCY_CHANGE = 0x00000001;
    public const SDL_AUDIO_ALLOW_FORMAT_CHANGE    = 0x00000002;
    public const SDL_AUDIO_ALLOW_CHANNELS_CHANGE  = 0x00000004;
    public const SDL_AUDIO_ALLOW_SAMPLES_CHANGE   = 0x00000008;
    public const SDL_AUDIO_ALLOW_ANY_CHANGE       = (self::SDL_AUDIO_ALLOW_FREQUENCY_CHANGE | self::SDL_AUDIO_ALLOW_FORMAT_CHANGE | self::SDL_AUDIO_ALLOW_CHANNELS_CHANGE | self::SDL_AUDIO_ALLOW_SAMPLES_CHANGE);
    public const SDL_AUDIOCVT_MAX_FILTERS         = 9;
    public const SDL_MIX_MAXVOLUME                = 128;
}
