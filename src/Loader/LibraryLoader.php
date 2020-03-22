<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Loader;

use FFI\Exception;
use FFI\ParserException;
use Serafim\SDL\Exception\LibraryException;

/**
 * Class LibraryLoader
 */
final class LibraryLoader
{
    /**
     * @var string
     */
    private const ERROR_LOCAL_LIBRARY =
        'Unable to retrieve library information. ' . self::ERROR_SUGGEST;

    /**
     * @var string
     */
    private const ERROR_SUGGEST = 'Your operating system (%s %s) may not be supported.';

    /**
     * @var string
     */
    private const FILE_NAME_FORMAT = '%s-%s-%s-x%s.h';

    /**
     * @var OperatingSystem
     */
    private OperatingSystem $os;

    /**
     * @var BitDepth
     */
    private BitDepth $bits;

    /**
     * @var string
     */
    private string $output;

    /**
     * LibraryLoader constructor.
     *
     * @param string $output
     * @param OperatingSystem|null $os
     * @param BitDepth|null $bits
     */
    public function __construct(string $output, OperatingSystem $os = null, BitDepth $bits = null)
    {
        $this->output = $output;

        $this->os = $os ?? OperatingSystem::current();
        $this->bits = $bits ?? BitDepth::current();
    }

    /**
     * @param LibraryInterface $library
     * @return LibraryInformation
     */
    public function load(LibraryInterface $library): LibraryInformation
    {
        $from = $this->getRealLibrary($library);

        $version = $library->getVersion($from);

        $headers = $this->getRealHeaders($library, $version);

        try {
            $ffi = \FFI::cdef(\file_get_contents($headers), $from);
        } catch (ParserException $e) {
            \unlink($headers);

            throw new LibraryException($e->getMessage());
        }

        return new LibraryInformation($ffi, $library->getName(), $headers, $version, $from);
    }

    /**
     * @param LibraryInterface $library
     * @return string
     */
    private function getRealLibrary(LibraryInterface $library): string
    {
        $from = $library->getLibrary($this->os, $this->bits);

        if ($from === null) {
            throw new LibraryException(\sprintf(self::ERROR_LOCAL_LIBRARY, (string)$this->os, (string)$this->bits));
        }

        return $from;
    }

    /**
     * @param LibraryInterface $library
     * @param string $version
     * @return string
     */
    private function getRealHeaders(LibraryInterface $library, string $version): string
    {
        try {
            $headers = $this->getOutputPathname($library, $version);

            if (! \is_file($headers)) {
                return $this->compile($library, $headers, $version);
            }
        } catch (Exception $e) {
            throw new LibraryException($e->getMessage() . ': ' . $this->suggest($library));
        }

        return $headers;
    }

    /**
     * @param LibraryInterface $library
     * @param string $version
     * @return string
     */
    private function getOutputPathname(LibraryInterface $library, string $version): string
    {
        return $this->output . '/' . $this->getOutputName($library, $version);
    }

    /**
     * @param LibraryInterface $library
     * @param string $version
     * @return string
     */
    private function getOutputName(LibraryInterface $library, string $version): string
    {
        return \strtolower(\vsprintf(self::FILE_NAME_FORMAT, [
            $this->getNormalizedName($library),
            $version,
            $this->os->getFamily(),
            $this->bits->getBitDepth(),
        ]));
    }

    /**
     * @param LibraryInterface $library
     * @return string
     */
    private function getNormalizedName(LibraryInterface $library): string
    {
        return \str_replace(' ', '-', \strtolower($library->getName()));
    }

    /**
     * @param LibraryInterface $library
     * @param string $output
     * @param string $version
     * @return string
     */
    private function compile(LibraryInterface $library, string $output, string $version): string
    {
        $processor = new PreProcessor($version);
        $result = $processor->file($library->getHeaders());

        \file_put_contents($output, $result);

        return $output;
    }

    /**
     * @param LibraryInterface $library
     * @return string
     */
    private function suggest(LibraryInterface $library): string
    {
        $suggest = $library->suggest($this->os, $this->bits);

        return $suggest ?? \sprintf(self::ERROR_SUGGEST, (string)$this->os, (string)$this->bits);
    }
}
