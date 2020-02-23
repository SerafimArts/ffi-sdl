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
use Serafim\SDL\Exception\InitializationException;
use Serafim\SDL\Exception\SDLException;

/**
 * @mixin SDLFunctions
 * @mixin \FFI
 */
final class SDL
{
    /**
     * @var string
     */
    private const ERROR_MESSAGE_INIT = 'Unable to initialize SDL: %s';

    /**
     * @var \FFI
     */
    private \FFI $ffi;

    /**
     * SDL constructor.
     *
     * @param SDLLibrary $lib
     * @param int $init
     */
    public function __construct(SDLLibrary $lib, int $init = 0)
    {
        $this->ffi = $lib->get();

        if ($this->SDL_Init($init) !== 0) {
            throw new InitializationException(\sprintf(self::ERROR_MESSAGE_INIT, $this->getErrorMessage()));
        }
    }

    /**
     * @return string
     */
    public function getErrorMessage(): string
    {
        return $this->SDL_GetError();
    }

    /**
     * @return \FFI
     */
    public function ffi(): \FFI
    {
        return $this->ffi;
    }

    /**
     * @return string
     */
    public function getVersionString(): string
    {
        $version = $this->getVersion();

        return \vsprintf('%d.%d.%d', [
            $version->major,
            $version->minor,
            $version->patch,
        ]);
    }

    /**
     * @return CData|SDL_version
     */
    public function getVersion(): CData
    {
        /**
         * @noinspection StaticInvocationViaThisInspection
         * @var CData|SDL_version $version
         */
        $version = $this->ffi->new('SDL_version');

        $this->SDL_GetVersion(\FFI::addr($version));

        return $version;
    }

    /**
     * @param string $message
     * @param int $code
     * @return SDLException
     */
    public function error(string $message, int $code = 0): SDLException
    {
        return new SDLException(\sprintf($message, $this->getErrorMessage()), $code);
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

    /**
     * @return void
     */
    public function __destruct()
    {
        $this->SDL_Quit();
    }
}
