<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Loader;

/**
 * Class LibraryInformation
 */
final class LibraryInformation
{
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
    }
}
