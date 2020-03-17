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
 * Audio format flags.
 *
 * These are what the 16 bits in SDL_AudioFormat currently mean...
 * (Unspecified bits are always zero).
 *
 * ++-----------------------sample is signed if set
 * ||
 * ||       ++-----------sample is bigendian if set
 * ||       ||
 * ||       ||          ++---sample is float if set
 * ||       ||          ||
 * ||       ||          || +---sample bit size---+
 * ||       ||          || |                     |
 * 15 14 13 12 11 10 09 08 07 06 05 04 03 02 01 00
 *
 * @see SDL::SDL_BuildAudioCVT()
 * @see SDL::SDL_NewAudioStream()
 * @see SDL::SDL_MixAudioFormat()
 */
interface Format
{
    /**
     * Unsigned 8-bit samples
     *
     * @var int
     */
    public const AUDIO_U8 = 0x0008;

    /**
     * Signed 8-bit samples
     *
     * @var int
     */
    public const AUDIO_S8 = 0x8008;

    /**
     * Unsigned 16-bit samples
     *
     * @since 2.0.5
     * @var int
     */
    public const AUDIO_U16LSB = 0x0010;

    /**
     * Signed 16-bit samples
     *
     * @var int
     */
    public const AUDIO_S16LSB = 0x8010;

    /**
     * As above, but big-endian byte order
     *
     * @since 2.0.5
     * @var int
     */
    public const AUDIO_U16MSB = 0x1010;

    /**
     * As above, but big-endian byte order
     *
     * @var int
     */
    public const AUDIO_S16MSB = 0x9010;

    /**
     * Unsigned 16-bit samples (alias)
     *
     * @var int
     */
    public const AUDIO_U16 = self::AUDIO_U16LSB;

    /**
     * Signed 16-bit samples (alias)
     *
     * @var int
     */
    public const AUDIO_S16 = self::AUDIO_S16LSB;

    /**
     * 32-bit integer samples
     *
     * @var int
     */
    public const AUDIO_S32LSB = 0x8020;

    /**
     * As above, but big-endian byte order
     *
     * @var int
     */
    public const AUDIO_S32MSB = 0x9020;

    /**
     * 32-bit floating point samples
     *
     * @var int
     */
    public const AUDIO_F32LSB = 0x8120;

    /**
     * 32-bit integer samples (alias)
     *
     * @var int
     */
    public const AUDIO_S32 = self::AUDIO_S32LSB;

    /**
     * As above, but big-endian byte order
     *
     * @var int
     */
    public const AUDIO_F32MSB = 0x9120;

    /**
     * 32-bit floating point samples (alias)
     *
     * @var int
     */
    public const AUDIO_F32 = self::AUDIO_F32LSB;
}
