<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Support;

use Serafim\SDL\Exception\VersionException;
use Serafim\FFILoader\LibraryInformation;

/**
 * @property-read LibraryInformation $info
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
     * @param string $version
     * @return bool
     */
    private function gteThan(string $version): bool
    {
        return \version_compare($this->info->version, $version) >= 0;
    }

    /**
     * @param string $version
     * @param string $method
     * @return string
     */
    protected function getVersionErrorMessage(string $version, string $method): string
    {
        return \vsprintf('Method %s::%s() is available since %s >= %s, but %s is installed', [
            static::class,
            $method,
            $this->info->name,
            $version,
            $this->info->version,
        ]);
    }
}
