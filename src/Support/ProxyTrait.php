<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SDL\Support;

use FFI\CData;
use FFI\CPtr;
use FFI\CType;
use FFI\ParserException;
use SDL\Exception\SDLException;

/**
 * @property-read \FFI $ffi
 */
trait ProxyTrait
{
    /**
     * {@inheritDoc}
     */
    public function __call(string $name, array $arguments)
    {
        return $this->ffi->$name(...$arguments);
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
     * @return string
     */
    protected function nameToInternal(string $type): string
    {
        $ptr = 0;

        while (\substr($type, -3) === 'Ptr') {
            $type = \substr($type, 0, -3);
            $ptr++;
        }

        return \str_replace('\\', '_', $type) . \str_repeat('*', $ptr);
    }

    /**
     * @param string $type
     * @param bool $owned
     * @param bool $persistent
     * @return CData
     */
    public function new(string $type, bool $owned = true, bool $persistent = false): CData
    {
        return $this->proxyNew($type, $owned, $persistent);
    }

    /**
     * @param string $type
     * @param bool $owned
     * @param bool $persistent
     * @return CData
     */
    protected function proxyNew(string $type, bool $owned = true, bool $persistent = false): CData
    {
        try {
            /** @noinspection StaticInvocationViaThisInspection */
            return $this->ffi->new($this->nameToInternal($type), $owned, $persistent);
        } catch (ParserException $e) {
            $error = \sprintf('Structure "%s" not found. %s', $type, \ucfirst($e->getMessage()));

            throw new SDLException($error);
        }
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
            return $this->ffi->cast($type, $ptr);
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
            return $this->ffi->type($type);
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
        return $this->ffi->$name;
    }

    /**
     * @param string $name
     * @param mixed $value
     * @return mixed
     * @noinspection MagicMethodsValidityInspection
     */
    public function __set(string $name, $value): void
    {
        $this->ffi->$name = $value;
    }
}
