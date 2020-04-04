<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SDL\Loader;

/**
 * Class LibraryInformation
 */
final class LibraryInformation
{
    /**
     * @var string
     */
    private const WARN_ZTS_CHDIR =
        'This functionality is not intended to work inside the PHP ZTS ' .
        'version and may cause errors when calling over multiple threads. ' .
        'Please use PHP NTS version instead';

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $headers;

    /**
     * @var string
     */
    public string $version;

    /**
     * @var string
     */
    public string $lib;

    /**
     * @var \FFI
     */
    public \FFI $ffi;

    /**
     * @var string
     */
    public string $workingDirectory;

    /**
     * LibraryInformation constructor.
     *
     * @param \FFI $ffi
     * @param string $name
     * @param string $headers
     * @param string $version
     * @param string $lib
     */
    public function __construct(\FFI $ffi, string $name, string $headers, string $version, string $lib)
    {
        $this->ffi = $ffi;
        $this->name = $name;
        $this->headers = $headers;
        $this->version = $version;
        $this->lib = $lib;
        $this->workingDirectory = \dirname($this->lib);
    }

    /**
     * @param \Closure $expr
     * @return mixed
     */
    public function chdir(\Closure $expr)
    {
        if (\PHP_OS_FAMILY !== 'Windows') {
            return $expr();
        }

        if (\ZEND_THREAD_SAFE) {
            @\trigger_error(self::WARN_ZTS_CHDIR);
            return $this->chdirThreadSafe($expr);
        }

        return $this->chdirNonThreadSafe($expr);
    }

    /**
     * @param \Closure $expr
     * @return mixed
     */
    private function chdirThreadSafe(\Closure $expr)
    {
        static $kernel32;

        if ($kernel32 === null) {
            $kernel32 = \FFI::cdef(<<<'c'
                typedef const char* LPCSTR;
                typedef enum { false, true } BOOL;
                
                extern BOOL SetDllDirectoryA(LPCSTR lpPathName);
            c, 'kernel32.dll');
        }

        $kernel32->SetDllDirectoryA($this->workingDirectory);

        return $expr();
    }

    /**
     * @param \Closure $expr
     * @return mixed
     */
    private function chdirNonThreadSafe(\Closure $expr)
    {
        /** @var string $before */
        $before = \getcwd();

        try {
            \chdir($this->workingDirectory);

            return $expr();
        } finally {
            \chdir($before);
        }
    }
}
