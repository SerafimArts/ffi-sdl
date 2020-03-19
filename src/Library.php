<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL;

use FFI\CData;
use FFI\CPtr;
use FFI\CScalar;
use FFI\CType;
use FFI\Exception;
use Serafim\SDL\Compiler\PreProcessor;
use Serafim\SDL\Exception\SDLException;
use Serafim\SDL\Exception\VersionException;

/**
 * Class Library
 */
abstract class Library implements LibraryInterface
{
    /**
     * @var string|null
     */
    protected ?string $version = null;

    /**
     * @var string
     */
    protected const HEADERS_COMPILED_PATHNAME = __DIR__ . '/../out/%s-%s-%s-x%s.h';

    /**
     * @var string
     */
    protected const HEADERS_SOURCE_PATHNAME = __DIR__ . '/../resources/%s.h';

    /**
     * @var string
     */
    private const ERROR_VERSION_COMPAT = 'Method %s::%s() is available since %s >= %s, but %s is installed';

    /**
     * @var string
     */
    private const ERROR_LOADING = 'Please install the dependency using a "%s" command (or)';

    /**
     * @var \FFI
     */
    protected \FFI $ffi;

    /**
     * Library constructor.
     *
     * @param \FFI $ctx
     */
    protected function __construct(\FFI $ctx)
    {
        $this->ffi = $ctx;
    }

    /**
     * @return string
     */
    public function getWorkingDirectory(): string
    {
        return \dirname($this->getLibrary());
    }

    /**
     * @param string|CType $type
     * @param CData $pointer
     * @return CData
     */
    public function cast($type, CData $pointer): CData
    {
        /** @noinspection StaticInvocationViaThisInspection */
        return $this->ffi->cast($type, $pointer);
    }

    /**
     * @param string|CType $type
     * @param bool $owned
     * @param bool $persistent
     * @return CData
     */
    public function new($type, bool $owned = true, bool $persistent = false): CData
    {
        [$type, $depth] = \is_string($type)
            ? $this->getRealStructName($type)
            : [$type, 0];

        /** @noinspection StaticInvocationViaThisInspection */
        $result = $this->ffi->new($type, $owned, $persistent);

        while ($depth-- > 0) {
            $result = static::addr($result);
        }

        return $result;
    }

    /**
     * @param string $type
     * @return array
     */
    protected function getRealStructName(string $type): array
    {
        $depth = 0;
        $chunks = \explode('\\', $type);
        $type = \end($chunks);

        while (\substr($type, -3) === 'Ptr') {
            $type = \substr($type, 0, -3);
            $depth++;
        }

        return [$type, $depth];
    }

    /**
     * @param CData|CScalar|CPtr $type
     * @return CPtr|CData
     */
    public static function addr(CData $type): CData
    {
        return \FFI::addr($type);
    }

    /**
     * @param string $name
     * @param array $arguments
     * @return mixed
     */
    public function __call(string $name, array $arguments)
    {
        return $this->ffi->$name(...$arguments);
    }

    /**
     * @param string $name
     * @param array $arguments
     * @return mixed
     */
    public static function __callStatic(string $name, array $arguments)
    {
        return \FFI::$name(...$arguments);
    }

    /**
     * @return \FFI
     * @throws SDLException
     * @throws \RuntimeException
     */
    protected function ffi(): \FFI
    {
        try {
            return \FFI::cdef(\file_get_contents($this->getHeaders()), $this->getLibrary());
        } catch (Exception $e) {
            $message = $e->getMessage() . ': ' . $this->getInstallationCommand();

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
            case 'Windows':
                return 'Internal binary data error';

            case 'Linux':
                return \sprintf(self::ERROR_LOADING, $this->getLinuxInstallationCommand());

            case 'Darwin':
                return \sprintf(self::ERROR_LOADING, $this->getMacOSInstallationCommand());

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

    /**
     * @param string $version
     * @param string|null $method
     * @return void
     * @throws VersionException
     */
    protected function assertVersion(string $version, ?string $method = null): void
    {
        if (! $this->gteThan($version)) {
            $message = \vsprintf(self::ERROR_VERSION_COMPAT, [
                static::class,
                \debug_backtrace(\DEBUG_BACKTRACE_IGNORE_ARGS)[1]['function'] ?? '<unknown>',
                $this->getName(),
                $version,
                $this->getVersion(),
            ]);

            throw new VersionException($message);
        }
    }

    /**
     * @param string $version
     * @return bool
     */
    private function gteThan(string $version): bool
    {
        return \version_compare($this->getVersion(), $version) >= 0;
    }

    /**
     * @param string $directory
     * @param \Closure $then
     * @return mixed
     */
    protected function chdir(string $directory, \Closure $then)
    {
        $before = \getcwd();

        \chdir($directory);

        try {
            return $then();
        } finally {
            if ($before !== false) {
                \chdir($before);
            }
        }
    }
}
