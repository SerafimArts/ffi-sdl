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
use Serafim\SDL\Library\Library;
use Serafim\SDL\Library\PreProcessor;

/**
 * @mixin SDLFunctions
 * @mixin \FFI
 */
final class SDL implements DefinesInterface, EnumsInterface
{
    /**
     * @var \FFI
     */
    private \FFI $ffi;

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
     * @param string $type
     * @param bool $owned
     * @param bool $persistent
     * @return CData
     */
    public function new(string $type, bool $owned = true, bool $persistent = false): CData
    {
        /** @noinspection StaticInvocationViaThisInspection */
        return $this->ffi->new($type);
    }

    /**
     * @param CData $ptr
     * @return CData
     */
    public function ptr(CData $ptr): CData
    {
        return \FFI::addr($ptr);
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
