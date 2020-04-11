<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @noinspection StaticInvocationViaThisInspection
 */

declare(strict_types=1);

namespace Serafim\SDL;

use FFI\CData;
use FFI\CPtr;
use FFI\CType;
use FFI\ParserException;
use Serafim\FFILoader\LibraryInformation;
use Serafim\FFILoader\LibraryInterface;
use Serafim\FFILoader\Loader;
use Serafim\SDL\Exception\SDLException;
use Serafim\SDL\Kernel\Enums;
use Serafim\SDL\Support\SingletonTrait;
use Serafim\SDL\Support\VersionComparisonTrait;

/**
 * @mixin SDLNativeApiAutocomplete
 */
final class SDL implements Enums
{
    use SingletonTrait;
    use VersionComparisonTrait;

    /**
     * @var LibraryInformation
     */
    public LibraryInformation $info;

    /**
     * @var Loader
     */
    private Loader $loader;

    /**
     * SDL constructor.
     *
     * @throws SDLException
     * @throws \RuntimeException
     */
    public function __construct()
    {
        $this->loader = $this->loader();

        $this->info = $this->loadLibrary(new Library());

        self::setInstance($this);
    }

    /**
     * @return Loader
     */
    private function loader(): Loader
    {
        $loader = new Loader();

        $pre = $loader->preprocessor();
        $pre->keepComments = false;
        $pre->minify = true;
        $pre->tolerant = false;

        $pre->includeFrom(__DIR__ . '/../resources');

        return $loader;
    }

    /**
     * @param LibraryInterface $library
     * @return LibraryInformation
     */
    public function loadLibrary(LibraryInterface $library): LibraryInformation
    {
        return $this->loader->load($library);
    }

    /**
     * {@inheritDoc}
     */
    public function __call(string $name, array $arguments)
    {
        return $this->info->ffi->$name(...$arguments);
    }

    /**
     * For PHPStorm autocomplete support
     *
     * @param CData|CPtr $type
     * @return CPtr|CData|mixed
     */
    public static function addr(CData $type): CData
    {
        return \FFI::addr($type);
    }

    /**
     * @param string $type
     * @param bool $owned
     * @param bool $persistent
     * @return CData
     */
    public function new(string $type, bool $owned = true, bool $persistent = false): CData
    {
        try {
            /** @noinspection StaticInvocationViaThisInspection */
            return $this->info->ffi->new($this->nameToInternal($type), $owned, $persistent);
        } catch (ParserException $e) {
            $error = \sprintf('Structure "%s" not found. %s', $type, \ucfirst($e->getMessage()));

            throw new SDLException($error);
        }
    }

    /**
     * @param string $type
     * @return string
     */
    protected function nameToInternal(string $type): string
    {
        $ptr = 0;

        $type = \str_replace(__NAMESPACE__, 'SDL', $type);

        while (\substr($type, -3) === 'Ptr') {
            $type = \substr($type, 0, -3);
            $ptr++;
        }

        return \str_replace('\\', '_', $type) . \str_repeat('*', $ptr);
    }

    /**
     * @param string|CType $type
     * @param CData $ptr
     * @return CData
     */
    public function cast($type, CData $ptr): CData
    {
        if (\is_string($type)) {
            $type = $this->nameToInternal($type);
        }

        try {
            /** @noinspection StaticInvocationViaThisInspection */
            return $this->info->ffi->cast($type, $ptr);
        } catch (ParserException $e) {
            $error = \sprintf('Structure "%s" not found. %s', $type, \ucfirst($e->getMessage()));

            throw new SDLException($error);
        }
    }

    /**
     * @param string|CType $type
     * @return CType
     */
    public function type($type): CType
    {
        if (\is_string($type)) {
            $type = $this->nameToInternal($type);
        }

        try {
            /** @noinspection StaticInvocationViaThisInspection */
            return $this->info->ffi->type($type);
        } catch (ParserException $e) {
            $error = \sprintf('Structure "%s" not found. %s', $type, \ucfirst($e->getMessage()));

            throw new SDLException($error);
        }
    }

    /**
     * {@inheritDoc}
     */
    public static function __callStatic(string $name, array $arguments)
    {
        return \FFI::$name(...$arguments);
    }

    /**
     * @param string $name
     * @return mixed
     */
    public function __get(string $name)
    {
        return $this->info->ffi->$name;
    }

    /**
     * @param string $name
     * @param mixed $value
     * @return mixed
     * @noinspection MagicMethodsValidityInspection
     */
    public function __set(string $name, $value): void
    {
        $this->info->ffi->$name = $value;
    }
}
