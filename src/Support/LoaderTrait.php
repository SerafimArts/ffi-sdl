<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Support;

use Serafim\SDL\Loader\LibraryInformation;
use Serafim\SDL\Loader\LibraryInterface;
use Serafim\SDL\Loader\LibraryLoader;

/**
 * Trait LoaderTrait
 */
trait LoaderTrait
{
    /**
     * @var LibraryInformation|null
     */
    protected ?LibraryInformation $info = null;

    /**
     * @return LibraryInterface
     */
    abstract protected function getLibrary(): LibraryInterface;

    /**
     * @return string
     */
    abstract protected function getOutputPath(): string;

    /**
     * @return LibraryInformation
     */
    public function info(): LibraryInformation
    {
        if ($this->info === null) {
            $loader = new LibraryLoader($this->getOutputPath());

            $this->info = $loader->load($this->getLibrary());
        }

        return $this->info;
    }
}
