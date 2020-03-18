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
use Serafim\SDL\Kernel\Enums;

/**
 * @mixin \FFI
 * @mixin SDLMethods
 */
final class SDL extends Library implements Enums
{
    /**
     * @var string
     */
    protected const SDL_GET_VERSION = <<<'clang'
        typedef struct SDL_Version
        {
            uint8_t major;
            uint8_t minor;
            uint8_t patch;
        } SDL_Version;
        
        extern void SDL_GetVersion(SDL_Version * ver);
    clang;

    /**
     * @var string[]
     */
    private const FUNCTION_MAPPINGS = [
        // TLS
        'tlsCreate'                   => 'TLSCreate',
        'tlsGet'                      => 'TLSCreate',
        'tlsSet'                      => 'TLSSet',
        // RW
        'rwFromFile'                  => 'RWFromFile',
        'rwFromFP'                    => 'RWFromFP',
        'rwFromMem'                   => 'RWFromMem',
        'rwFromConstMem'              => 'RWFromConstMem',
        'allocRw'                     => 'allocRW',
        'freeRw'                      => 'FreeRW',
        'rwSize'                      => 'RWSize',
        'rwSeek'                      => 'RWSeek',
        'rwTell'                      => 'RWTell',
        'rwRead'                      => 'RWRead',
        'rwWrite'                     => 'RWWrite',
        'rwClose'                     => 'RWClose',
        'loadFileRw'                  => 'loadFile_RW',
        // Audio: Wav
        'loadWavRw'                   => 'loadWAV_RW',
        'freeWav'                     => 'freeWAV',
        // BMP
        'loadBmpRw'                   => 'loadBMP_RW',
        'saveBmpRw'                   => 'saveBMP_RW',
        // OpenGL
        'glLoadLibrary'               => 'GL_LoadLibrary',
        'glGetProcAddress'            => 'GL_GetProcAddress',
        'glUnloadLibrary'             => 'GL_UnloadLibrary',
        'glExtensionSupported'        => 'GL_ExtensionSupported',
        'glResetAttributes'           => 'GL_ResetAttributes',
        'glSetAttribute'              => 'GL_SetAttribute',
        'glGetAttribute'              => 'GL_GetAttribute',
        'glCreateContext'             => 'GL_CreateContext',
        'glMakeCurrent'               => 'GL_MakeCurrent',
        'glGetCurrentWindow'          => 'GL_GetCurrentWindow',
        'glGetCurrentContext'         => 'GL_GetCurrentContext',
        'glGetDrawableSize'           => 'GL_GetDrawableSize',
        'glSetSwapInterval'           => 'GL_SetSwapInterval',
        'glGetSwapInterval'           => 'GL_GetSwapInterval',
        'glSwapWindow'                => 'GL_SwapWindow',
        'glDeleteContext'             => 'GL_DeleteContext',
        'glBindTexture'               => 'GL_BindTexture',
        'glUnbindTexture'             => 'GL_UnbindTexture',
        // ScanCode
        'getKeyFromScanCode'          => 'getKeyFromScancode',
        'getScanCodeFromKey'          => 'getScancodeFromKey',
        'getScanCodeName'             => 'getScancodeName',
        'getScanCodeFromName'         => 'getScancodeFromName',
        // Joystick
        'joystickGetDeviceInstanceId' => 'joystickGetDeviceInstanceID',
        'joystickFromInstanceId'      => 'joystickFromInstanceID',
        'joystickInstanceId'          => 'joystickInstanceID',
        // DX
        'getDXGIOutputInfo'           => 'DXGIGetOutputInfo',
        // SIMD
        'getSIMDAlignment'            => 'SIMDGetAlignment',
        'allocSIMD'                   => 'SIMDAlloc',
        'freeSIMD'                    => 'SIMDFree',
    ];

    /**
     * @var string
     */
    private const LIBRARY_WIN64 = __DIR__ . '/../bin/x64/SDL2.dll';

    /**
     * @var string
     */
    private const LIBRARY_WIN86 = __DIR__ . '/../bin/x86/SDL2.dll';

    /**
     * @var string
     */
    private const LIBRARY_LINUX = 'libSDL2-2.0.so.0';

    /**
     * @var string
     */
    private const LIBRARY_MAC = 'libSDL2-2.0.0.dylib';

    /**
     * @var string|null
     */
    private static ?string $version = null;

    /**
     * SDL constructor.
     */
    public function __construct()
    {
        parent::__construct($this->ffi());
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'SDL';
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        if (self::$version === null) {
            $ctx = \FFI::cdef(static::SDL_GET_VERSION, $this->getLibrary());

            $ctx->SDL_GetVersion(\FFI::addr($ver = $ctx->new('SDL_Version')));

            return \sprintf('%d.%d.%d', $ver->major, $ver->minor, $ver->patch);
        }

        return self::$version;
    }

    /**
     * @return string
     */
    public function getLibrary(): string
    {
        switch (\PHP_OS_FAMILY) {
            case 'Windows':
                return \PHP_INT_SIZE === 8 ? self::LIBRARY_WIN64 : self::LIBRARY_WIN86;

            case 'Linux':
                return self::LIBRARY_LINUX;

            case 'Darwin':
                return self::LIBRARY_MAC;

            default:
                throw new \LogicException('Unsupported OS');
        }
    }

    /**
     * Note: PHPStorm meta bugfix
     *
     * {@inheritDoc}
     */
    public function new($type, bool $owned = true, bool $persistent = false): CData
    {
        return parent::new($type, $owned, $persistent);
    }

    /**
     * Note: PHPStorm meta bugfix
     *
     * {@inheritDoc}
     */
    public static function addr(CData $type): CData
    {
        return parent::addr($type);
    }

    /**
     * @param string $name
     * @param array $arguments
     * @return mixed
     */
    public function __call(string $name, array $arguments)
    {
        if (isset(self::FUNCTION_MAPPINGS[$name])) {
            $name = self::FUNCTION_MAPPINGS[$name];
        }

        if (\strpos($name, 'SDL_') !== 0) {
            $name = 'SDL_' . \ucfirst($name);
        }

        return parent::__call($name, $arguments);
    }

    /**
     * @return string
     */
    protected function getLinuxInstallationCommand(): string
    {
        return 'sudo apt install libsdl2-2.0-0 -y';
    }

    /**
     * @return string
     */
    protected function getMacOSInstallationCommand(): string
    {
        return 'brew install sdl2';
    }
}
