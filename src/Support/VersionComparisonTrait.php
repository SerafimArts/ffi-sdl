<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SDL\Support;

use SDL\Exception\VersionException;
use SDL\Loader\LibraryInformation;

/**
 * Trait VersionComparisonTrait
 */
trait VersionComparisonTrait
{
    /**
     * @var string|null
     */
    protected ?string $version = null;

    /**
     * @param string $version
     * @param string|null $method
     * @return void
     * @throws VersionException
     */
    protected function assertVersion(string $version, ?string $method = null): void
    {
        if (! $this->gteThan($version)) {
            $method ??= \debug_backtrace(\DEBUG_BACKTRACE_IGNORE_ARGS)[1]['function'] ?? '<unknown>';

            throw new VersionException($this->getVersionErrorMessage($version, $method));
        }
    }

    /**
     * @return LibraryInformation
     */
    abstract protected function getLibraryInformation(): LibraryInformation;

    /**
     * @param string $version
     * @return bool
     */
    private function gteThan(string $version): bool
    {
        return \version_compare($this->getLibraryInformation()->version, $version) >= 0;
    }

    /**
     * @param string $version
     * @param string $method
     * @return string
     */
    protected function getVersionErrorMessage(string $version, string $method): string
    {
        $info = $this->getLibraryInformation();

        return \vsprintf('Method %s::%s() is available since %s >= %s, but %s is installed', [
            static::class,
            $method,
            $info->name,
            $version,
            $info->version,
        ]);
    }
}
