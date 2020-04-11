<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Support;

use FFI\CData;
use FFI\CPtr;
use FFI\CType;
use FFI\ParserException;
use Serafim\FFILoader\LibraryInformation;
use Serafim\SDL\Exception\SDLException;

/**
 * @property-read LibraryInformation $info
 */
trait ProxyTrait
{
    /**
     * @var array|string[]
     */
    protected array $casts = [
        'Serafim\\SDL' => 'SDL'
    ];

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
    protected function namespaceToPrefix(string $type): string
    {
        $type = \trim($type, '\\');

        foreach ($this->casts as $from => $to) {
            if (\strpos($type, $from) !== 0) {
                continue;
            }

            $type = $to . \substr($type, \strlen($from));
        }

        return $type;
    }

    /**
     * @param string $type
     * @return string
     */
    protected function nameToInternal(string $type): string
    {
        $ptr = 0;

        $type = $this->namespaceToPrefix($type);

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
