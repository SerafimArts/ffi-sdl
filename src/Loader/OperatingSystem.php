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
 * Class OperatingSystem
 */
final class OperatingSystem
{
    /**
     * @var string
     */
    public const OS_WINDOWS = 'Windows';

    /**
     * @var string
     */
    public const OS_UNIX = 'BSD';

    /**
     * @var string
     */
    public const OS_MAC = 'Darwin';

    /**
     * @var string
     */
    public const OS_SOLARIS = 'Solaris';

    /**
     * @var string
     */
    public const OS_LINUX = 'Linux';

    /**
     * @var string
     */
    public const OS_UNKNOWN = 'unknown';

    /**
     * @var string
     */
    private string $family;

    /**
     * OperatingSystem constructor.
     *
     * @param string $family
     */
    public function __construct(string $family)
    {
        $this->family = $family;
    }

    /**
     * @return OperatingSystem
     */
    public static function current(): OperatingSystem
    {
        return new static(\PHP_OS_FAMILY);
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->getFamily();
    }

    /**
     * @return string
     */
    public function getFamily(): string
    {
        return $this->family;
    }

    /**
     * @return bool
     */
    public function isWindows(): bool
    {
        return $this->getFamily() === self::OS_WINDOWS;
    }

    /**
     * @return bool
     */
    public function isMac(): bool
    {
        return $this->getFamily() === self::OS_MAC;
    }

    /**
     * @return bool
     */
    public function isUnix(): bool
    {
        return $this->getFamily() === self::OS_UNIX;
    }

    /**
     * @return bool
     */
    public function isLinux(): bool
    {
        return $this->getFamily() === self::OS_LINUX;
    }

    /**
     * @return bool
     */
    public function isSolaris(): bool
    {
        return $this->getFamily() === self::OS_SOLARIS;
    }

    /**
     * @return bool
     */
    public function isKnown(): bool
    {
        return ! $this->isUnknown();
    }

    /**
     * @return bool
     */
    public function isUnknown(): bool
    {
        return $this->getFamily() === self::OS_UNKNOWN;
    }
}

