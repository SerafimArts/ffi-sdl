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
use FFI\CType;

/**
 * @mixin \FFI
 * @property-read \FFI $ffi
 */
trait GracefulProxyTrait
{
    use ProxyTrait;

    /**
     * @var string
     */
    protected string $functionsPrefix = 'SDL_';

    /**
     * @var array
     */
    protected array $structureNamesCache = [];

    /**
     * {@inheritDoc}
     */
    public function __call(string $name, array $arguments)
    {
        if (\strpos($name, $this->functionsPrefix) !== 0) {
            $name = $this->functionsPrefix . \ucfirst($name);
        }

        return $this->ffi->$name(...$arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function new($type, bool $owned = true, bool $persistent = false): CData
    {
        if (\is_string($type)) {
            [$type, $depth] = $this->structureNamesCache[$type] ??= $this->getRealStructName($type);
        } else {
            $depth = 0;
        }

        /** @noinspection StaticInvocationViaThisInspection */
        $result = $this->ffi->new($type, $owned, $persistent);

        while ($depth-- > 0) {
            $result = static::addr($result);
        }

        return $result;
    }

    /**
     * {@inheritDoc}
     */
    public function cast($type, CData $pointer): CData
    {
        if (\is_string($type)) {
            [$type, $depth] = $this->structureNamesCache[$type] ??= $this->getRealStructName($type);

            $type .= \str_repeat('*', $depth);
        }

        /** @noinspection StaticInvocationViaThisInspection */
        return $this->ffi->cast($type, $pointer);
    }

    /**
     * {@inheritDoc}
     */
    public function type($type): CType
    {
        if (\is_string($type)) {
            [$type, $depth] = $this->structureNamesCache[$type] ??= $this->getRealStructName($type);

            $type .= \str_repeat('*', $depth);
        }

        /** @noinspection StaticInvocationViaThisInspection */
        return $this->ffi->type($type);
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

        if (\strpos($type, $this->functionsPrefix) !== 0 && \ctype_upper($type[0] ?? '')) {
            $type = $this->functionsPrefix . $type;
        }

        return [$type, $depth];
    }
}
