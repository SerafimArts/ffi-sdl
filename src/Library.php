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

/**
 * Class Library
 */
abstract class Library
{
    /**
     * @var self|null
     */
    private static ?self $instance = null;

    /**
     * @var \FFI
     */
    protected \FFI $ffi;

    /**
     * Library constructor.
     */
    public function __construct()
    {
        $this->ffi = $this->create();
    }

    /**
     * @return \FFI
     */
    abstract protected function create(): \FFI;

    /**
     * @return static
     */
    public static function getInstance(): self
    {
        return self::$instance ??= new static();
    }

    /**
     * @param static|null $instance
     * @return void
     */
    public static function setInstance(?self $instance): void
    {
        self::$instance = $instance;
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
            ? $this->normalize($type)
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
    private function normalize(string $type): array
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
}
