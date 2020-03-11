<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @formatter:off
 */

declare(strict_types=1);

namespace FFI;

class CPtr extends CData implements \ArrayAccess
{
    private function __construct() {}

    /**
     * {@inheritDoc}
     * @deprecated This method is virtual and is used only for autocomplete in IDE
     * @throws \Error Cannot use object of type FFI\CData as array
     */
    private function offsetExists($offset)
    {
        throw new \Error('Cannot use object of type FFI\CData as array');
    }

    /**
     * {@inheritDoc}
     * @deprecated This method is virtual and is used only for autocomplete in IDE
     * @throws \Error Cannot use object of type FFI\CData as array
     */
    private function offsetUnset($offset)
    {
        throw new \Error('Cannot use object of type FFI\CData as array');
    }

    /**
     * {@inheritDoc}
     * @deprecated This method is virtual and is used only for autocomplete in IDE
     * @return CData|CPtr
     */
    private function offsetGet($offset): CData {}

    /**
     * {@inheritDoc}
     * @deprecated This method is virtual and is used only for autocomplete in IDE
     * @param CData|CPtr $value
     * @param int $offset
     */
    private function offsetSet($offset, $value) {}
}

class CPtrPtr extends CPtr
{
    private function offsetGet(int $i): CPtr {}
    private function offsetSet(int $i, CPtr $d): void {}
}

/**
 * @property $cdata
 */
class CScalar extends CData
{
    private function __construct() {}
}

class CInt extends CScalar
{
    public int $cdata;
}

class CFloat extends CScalar
{
    public float $cdata;
}

class CChar extends CScalar
{
    public string $cdata;
}

class CBool extends CScalar
{
    public bool $cdata;
}

abstract class CStruct extends CData
{
    private function __construct() {}

    private function __clone() {}
}

/** @mixin \FFI\CPtr */
class CScalarPtr extends CScalar
{
    private function offsetGet(int $i): CScalar {}
    private function offsetSet(int $i, CScalar $d): void {}
}

/** @mixin \FFI\CPtr */
class CScalarPtrPtr extends CScalarPtr
{
    private function offsetGet(int $i): CScalarPtr {}
    private function offsetSet(int $i, CScalarPtr $d): void {}
}

/** @mixin \FFI\CPtr */
class CIntPtr extends CInt
{
    private function offsetGet(int $i): CInt {}
    private function offsetSet(int $i, CInt $d): void {}
}

/** @mixin \FFI\CPtr */
class CIntPtrPtr extends CIntPtr
{
    private function offsetGet(int $i): CIntPtr {}
    private function offsetSet(int $i, CIntPtr $d): void {}
}

/** @mixin \FFI\CPtr */
class CFloatPtr extends CFloat
{
    private function offsetGet(int $i): CFloat {}
    private function offsetSet(int $i, CFloat $d): void {}
}

/** @mixin \FFI\CPtr */
class CFloatPtrPtr extends CFloatPtr
{
    private function offsetGet(int $i): CFloatPtr {}
    private function offsetSet(int $i, CFloatPtr $d): void {}
}

/** @mixin \FFI\CPtr */
class CCharPtr extends CChar
{
    private function offsetGet(int $i): CChar {}
    private function offsetSet(int $i, CChar $d): void {}
}

/** @mixin \FFI\CPtr */
class CCharPtrPtr extends CCharPtr
{
    private function offsetGet(int $i): CCharPtr {}
    private function offsetSet(int $i, CCharPtr $d): void {}
}

/** @mixin \FFI\CPtr */
class CBoolPtr extends CBool
{
    private function offsetGet(int $i): CBool {}
    private function offsetSet(int $i, CBool $d): void {}
}

/** @mixin \FFI\CPtr */
class CBoolPtrPtr extends CBoolPtr
{
    private function offsetGet(int $i): CBoolPtr {}
    private function offsetSet(int $i, CBoolPtr $d): void {}
}
