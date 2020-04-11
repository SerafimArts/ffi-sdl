<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @noinspection StaticInvocationViaThisInspection
 */

declare(strict_types=1);

namespace Serafim\SDL;

use FFI\CData;
use FFI\CPtr;
use FFI\CType;
use FFI\ParserException;
use Serafim\FFILoader\LibraryInformation;
use Serafim\FFILoader\LibraryInterface;
use Serafim\FFILoader\Loader;
use Serafim\SDL\Exception\SDLException;
use Serafim\SDL\Kernel\Enums;
use Serafim\SDL\Support\ProxyTrait;
use Serafim\SDL\Support\SingletonTrait;
use Serafim\SDL\Support\VersionComparisonTrait;

/**
 * @mixin SDLNativeApiAutocomplete
 */
final class SDL implements Enums
{
    use ProxyTrait;
    use SingletonTrait;
    use VersionComparisonTrait;

    /**
     * @var LibraryInformation
     */
    public LibraryInformation $info;

    /**
     * @var Loader
     */
    private Loader $loader;

    /**
     * SDL constructor.
     *
     * @throws SDLException
     * @throws \RuntimeException
     */
    public function __construct()
    {
        $this->loader = $this->loader();

        $this->info = $this->loadLibrary(new Library());

        self::setInstance($this);
    }

    /**
     * @return Loader
     */
    private function loader(): Loader
    {
        $loader = new Loader();

        $pre = $loader->preprocessor();
        $pre->keepComments = false;
        $pre->minify = true;
        $pre->tolerant = false;

        $pre->includeFrom(__DIR__ . '/../resources');

        return $loader;
    }

    /**
     * @param LibraryInterface $library
     * @return LibraryInformation
     */
    public function loadLibrary(LibraryInterface $library): LibraryInformation
    {
        return $this->loader->load($library);
    }
}
