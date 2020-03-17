<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Compiler;

use FFI\Exception;
use Serafim\SDL\Exception\SDLException;

/**
 * Class Library
 */
abstract class Library implements LibraryInterface
{
    /**
     * @var string
     */
    protected const HEADERS_COMPILED_PATHNAME = __DIR__ . '/../../out/%s-%s-%s-x%s.h';

    /**
     * @var string
     */
    protected const HEADERS_SOURCE_PATHNAME = __DIR__ . '/../../resources/%s.h';

    /**
     * @var string
     */
    private const ERROR_LOADING = ': Please install the dependency using a "%s" command (or)';

    /**
     * SDLImageLibrary constructor.
     */
    public function __construct()
    {
        \chdir(\dirname($this->getLibrary()));
    }

    /**
     * @return \FFI
     */
    public function ffi(): \FFI
    {
        try {
            return \FFI::cdef(\file_get_contents($this->getHeaders()), $this->getLibrary());
        } catch (Exception $e) {
            $message = $e->getMessage() . \sprintf(self::ERROR_LOADING, $this->getInstallationCommand());

            throw new SDLException($message);
        }
    }

    /**
     * @return string
     * @throws \RuntimeException
     */
    public function getHeaders(): string
    {
        if (! \is_file($this->getCompiledHeaders())) {
            $result = (new PreProcessor($this->getVersion()))
                ->file($this->getOriginalHeaders());

            \file_put_contents($this->getCompiledHeaders(), $result);
        }

        return $this->getCompiledHeaders();
    }

    /**
     * @return string
     */
    private function getCompiledHeaders(): string
    {
        return \vsprintf(static::HEADERS_COMPILED_PATHNAME, [
            $this->getNormalizedName(),
            $this->getVersion(),
            \strtolower(\PHP_OS_FAMILY),
            \PHP_INT_SIZE === 8 ? '64' : '86',
        ]);
    }

    /**
     * @return string
     */
    private function getNormalizedName(): string
    {
        return \str_replace(' ', '-', \strtolower($this->getName()));
    }

    /**
     * @return string
     */
    private function getOriginalHeaders(): string
    {
        return \vsprintf(static::HEADERS_SOURCE_PATHNAME, [
            $this->getNormalizedName(),
        ]);
    }

    /**
     * @return string
     */
    private function getInstallationCommand(): string
    {
        switch (\PHP_OS_FAMILY) {
            case 'Linux':
                return $this->getLinuxInstallationCommand();

            case 'Darwin':
                return $this->getMacOSInstallationCommand();

            default:
                return '<unknown>';
        }
    }

    /**
     * @return string
     */
    abstract protected function getLinuxInstallationCommand(): string;

    /**
     * @return string
     */
    abstract protected function getMacOSInstallationCommand(): string;
}
