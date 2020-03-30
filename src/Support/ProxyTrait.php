<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Support;

use \FFI\CData;
use FFI\CType;

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
