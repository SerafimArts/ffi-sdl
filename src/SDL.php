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
use Serafim\SDL\Library\Library;
use Serafim\SDL\Library\PreProcessor;

/**
 * @mixin \FFI
 * @mixin SDLMethods
 */
final class SDL implements DefinesInterface, EnumsInterface
{
    /**
     * @var \FFI
     */
    private \FFI $ffi;

    /**
     * @var self|null
     */
    private static ?self $instance = null;

    /**
     * SDL constructor.
     *
     * @throws \RuntimeException
     */
    public function __construct()
    {
        $this->ffi = \FFI::cdef($this->getHeaders(), Library::getLibraryPathname());
    }

    /**
     * @return static
     * @throws \RuntimeException
     */
    public static function getInstance(): self
    {
        return self::$instance ??= new self();
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
        /** @noinspection StaticInvocationViaThisInspection */
        return $this->ffi->new($type, $owned, $persistent);
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
     * @return string
     * @throws \RuntimeException
     */
    private function getHeaders(): string
    {
        if (\is_file(Library::getHeadersCompiledPathname())) {
            return \file_get_contents(Library::getHeadersCompiledPathname());
        }

        @\trigger_error('Unable to find compiled headers. SDL compatibility mode enabled', \E_USER_WARNING);

        $processor = new PreProcessor(Library::getVersion());

        return $processor->file(Library::getHeadersOriginalPathname());
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
