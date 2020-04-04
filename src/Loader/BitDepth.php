<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SDL\Loader;

/**
 * Class BitDepth
 */
final class BitDepth
{
    /**
     * @var int
     */
    public const BIT_DEPTH_X86 = 32;

    /**
     * @var int
     */
    public const BIT_DEPTH_X64 = 64;

    /**
     * @var int
     */
    private int $bits;

    /**
     * Bits constructor.
     *
     * @param int $intSize
     */
    public function __construct(int $intSize)
    {
        $this->bits = $intSize;
    }

    /**
     * @return static
     */
    public static function current(): self
    {
        return new static(\PHP_INT_SIZE === 8 ? 64 : 32);
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return 'x' . $this->bits;
    }

    /**
     * @return int
     */
    public function getBitDepth(): int
    {
        return $this->bits;
    }

    /**
     * @return bool
     */
    public function is64BitDepth(): bool
    {
        return $this->bits === self::BIT_DEPTH_X64;
    }

    /**
     * @return bool
     */
    public function is32BitDepth(): bool
    {
        return $this->bits === self::BIT_DEPTH_X86;
    }
}
