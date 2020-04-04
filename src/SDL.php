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

namespace SDL;

use FFI\CCharPtr;
use FFI\CData;
use FFI\CFloat;
use FFI\CInt;
use FFI\CPtr;
use SDL\Exception\SDLException;
use SDL\Exception\VersionException;
use SDL\Kernel\Enums;
use SDL\Kernel\OpenGL\GLAttr;
use SDL\Kernel\OpenGL\GLSwapInterval;
use SDL\Kernel\RWops\SeekWhence;
use SDL\Loader\LibraryInformation;
use SDL\Loader\LibraryLoader;
use SDL\Support\ProxyTrait;
use SDL\Support\SingletonTrait;
use SDL\Support\VersionComparisonTrait;

/**
 * Class SDL
 */
class SDL implements Enums
{
    use ProxyTrait;
    use SingletonTrait;
    use VersionComparisonTrait;

    /**
     * @var LibraryInformation
     */
    public LibraryInformation $info;

    /**
     * @var \FFI|SDLNativeApiAutocomplete
     */
    protected \FFI $ffi;

    /**
     * SDL constructor.
     *
     * @throws SDLException
     * @throws \RuntimeException
     */
    public function __construct()
    {
        $loader = new LibraryLoader(__DIR__ . '/../out/');

        $this->info = $loader->load(new Library());
        $this->ffi = $this->info->ffi;

        self::setInstance($this);
    }

    /**
     * Use this function to get the version of SDL that is linked against your program.
     *
     * <code>
     *  extern void SDL_GetVersion(SDL_Version* ver);
     * </code>
     *
     * @return Version
     */
    public function getVersion(): CData
    {
        $version = $this->ffi->new('SDL_Version');

        /** @var VersionPtr $ptr */
        $ptr = self::addr($version);

        $this->ffi->SDL_GetVersion($ptr);

        return $version;
    }

    /**
     * Use this function to prepare a read-only memory buffer for use with RWops.
     *
     * <code>
     * SDL_RWops* SDL_RWFromConstMem(const void* mem, int size);
     * </code>
     *
     * @see https://wiki.libsdl.org/SDL_RWFromConstMem
     * @param CData|CPtr $memory
     * @param int $size
     * @return CData|RWopsPtr
     * @throws SDLException
     */
    public function rwFromConstMem(CData $memory, int $size): CData
    {
        if (($result = $this->ffi->SDL_RWFromConstMem($memory, $size)) === null) {
            throw new SDLException($this->ffi->SDL_GetError());
        }

        return $result;
    }

    /**
     * Creates an @see RWops::class structure from a standard I/O file pointer (stdio.h's FILE*).
     *
     * <code>
     * SDL_RWops* SDL_RWFromFP(void* fp, int autoclose);
     * </code>
     *
     * @see https://wiki.libsdl.org/SDL_RWFromFP
     * @param CData|CPtr $file
     * @param bool $autoClose
     * @return CData|RWopsPtr
     * @throws SDLException
     */
    public function rwFromFilePointer(CData $file, bool $autoClose = true): CData
    {
        $close = $autoClose ? self::SDL_TRUE : self::SDL_FALSE;

        if (($result = $this->ffi->SDL_RWFromFP($file, $close)) === null) {
            throw new SDLException($this->ffi->SDL_GetError());
        }

        return $result;
    }

    /**
     * Creates an @see RWops::class structure from SplFileInfo object.
     *
     * @see SDL::rwFromFile()
     * @param \SplFileInfo $file
     * @param string $mode
     * @return CData|RWopsPtr
     * @throws SDLException
     */
    public function rwFromSplFile(\SplFileInfo $file, string $mode = 'rb'): CData
    {
        return $this->rwFromFile($file->getPathname(), $mode);
    }

    /**
     * Use this function to create a new SDL_RWops structure for reading
     * from and/or writing to a named file.
     *
     * <code>
     * SDL_RWops* SDL_RWFromFile(const char* file, const char* mode);
     * </code>
     *
     * @see https://wiki.libsdl.org/SDL_RWFromFile
     * @param string|CCharPtr $file A UTF-8 string representing the filename to open.
     * @param string|CCharPtr $mode An ASCII string representing the mode to be used for opening the file. See
     *                              https://wiki.libsdl.org/SDL_RWFromFile#Remarks for details.
     * @return CData|RWopsPtr
     * @throws SDLException
     */
    public function rwFromFile(string $file, string $mode = 'rb'): CData
    {
        if (($result = $this->ffi->SDL_RWFromFile($file, $mode)) === null) {
            throw new SDLException($this->ffi->SDL_GetError());
        }

        return $result;
    }

    /**
     * Use this function to prepare a read-write memory buffer for use
     * with SDL_RWops.
     *
     * <code>
     * SDL_RWops* SDL_RWFromMem(void* mem, int size);
     * </code>
     *
     * @see https://wiki.libsdl.org/SDL_RWFromMem
     * @param CData|CPtr $memory A pointer to a buffer to feed an SDL_RWops stream.
     * @param int $size          The buffer size, in bytes.
     * @return CData|RWopsPtr
     * @throws SDLException
     */
    public function rwFromMemory(CData $memory, int $size): CData
    {
        if (($result = $this->ffi->SDL_RWFromMem($memory, $size)) === null) {
            throw new SDLException($this->ffi->SDL_GetError());
        }

        return $result;
    }

    /**
     * Use this function to close and free an allocated SDL_RWops structure.
     *
     * <code>
     * int SDL_RWclose(SDL_RWops* context);
     * </code>
     *
     * @see   https://wiki.libsdl.org/SDL_RWclose
     * @since 2.0.10
     * @param CData|RWopsPtr $context SDL_RWops structure to close.
     * @throws SDLException
     * @throws VersionException
     */
    public function rwClose(CData $context): void
    {
        $this->assertVersion('2.0.10');

        if ($this->ffi->SDL_RWclose($context) !== 0) {
            throw new SDLException($this->ffi->SDL_GetError());
        }
    }

    /**
     * Use this function to read from a data source.
     *
     * <code>
     * size_t SDL_RWread(SDL_RWops* context, void* ptr, size_t size, size_t maxnum);
     * </code>
     *
     * @see   https://wiki.libsdl.org/SDL_RWread
     * @since 2.0.10
     * @param CData|RWopsPtr $context A pointer to an SDL_RWops structure.
     * @param CData|CPtr $ptr         A pointer to a buffer to read data into.
     * @param int $size               The size of each object to read, in bytes.
     * @param int $maxNum             The maximum number of objects to be read.
     * @return void
     * @throws SDLException
     * @throws VersionException
     */
    public function rwRead(CData $context, CData $ptr, int $size, int $maxNum): void
    {
        $this->assertVersion('2.0.10');

        if ($this->ffi->SDL_RWRead($context, $ptr, $size, $maxNum) === 0) {
            throw new SDLException($this->ffi->SDL_GetError());
        }
    }

    /**
     * Use this function to seek within an SDL_RWops data stream.
     *
     * <code>
     * Sint64 SDL_RWseek(SDL_RWops* context, Sint64 offset, int whence);
     * </code>
     *
     * @see   https://wiki.libsdl.org/SDL_RWseek
     * @since 2.0.10
     * @param CData|RWopsPtr $context A pointer to an SDL_RWops structure.
     * @param int $offset             An offset in bytes, relative to whence location; can be negative.
     * @param int $whence             Any of RW_SEEK_SET, RW_SEEK_CUR, RW_SEEK_END; @see SeekWhence for details.
     * @return int
     * @throws SDLException
     * @throws VersionException
     */
    public function rwSeek(CData $context, int $offset = 0, int $whence = SeekWhence::RW_SEEK_SET): int
    {
        $this->assertVersion('2.0.10');

        if (($result = $this->ffi->SDL_RWseek($context, $offset, $whence)) <= -1) {
            throw new SDLException($this->ffi->SDL_GetError());
        }

        return $result;
    }

    /**
     * Use this macro to get the size of the data stream in an SDL_RWops.
     *
     * <code>
     * Sint64 SDL_RWsize(SDL_RWops* context);
     * </code>
     *
     * @see   https://wiki.libsdl.org/SDL_RWsize
     * @since 2.0.10
     * @param CData|RWopsPtr $context A pointer to an SDL_RWops structure.
     * @return int
     * @throws SDLException
     * @throws VersionException
     */
    public function rwSize(CData $context): int
    {
        $this->assertVersion('2.0.10');

        if (($result = $this->ffi->SDL_RWsize($context)) <= -1) {
            throw new SDLException($this->ffi->SDL_GetError());
        }

        return $result;
    }

    /**
     * Use this function to determine the current read/write offset in an
     * SDL_RWops data stream.
     *
     * <code>
     * Sint64 SDL_RWtell(SDL_RWops* context);
     * </code>
     *
     * @see   https://wiki.libsdl.org/SDL_RWtell
     * @since 2.0.10
     * @param CData|RWopsPtr $context A pointer to an SDL_RWops structure.
     * @return int
     * @throws SDLException
     * @throws VersionException
     */
    public function rwTell(CData $context): int
    {
        $this->assertVersion('2.0.10');

        if (($result = $this->ffi->SDL_RWtell($context)) <= -1) {
            throw new SDLException($this->ffi->SDL_GetError());
        }

        return $result;
    }

    /**
     * Use this function to write to an SDL_RWops data stream.
     *
     * <code>
     * size_t SDL_RWwrite(SDL_RWops* context, const void* ptr, size_t size, size_t num);
     * </code>
     *
     * @see   https://wiki.libsdl.org/SDL_RWwrite
     * @since 2.0.10
     * @param CData|RWopsPtr $context A pointer to an SDL_RWops structure
     * @param CData|Cptr $ptr         A pointer to a buffer containing data to write
     * @param int $size               The size of an object to write, in bytes
     * @param int $num                The number of objects to write
     * @return int
     * @throws SDLException
     * @throws VersionException
     */
    public function rwWrite(CData $context, CData $ptr, int $size, int $num): int
    {
        $this->assertVersion('2.0.10');

        if (($result = $this->ffi->SDL_RWwrite($context, $ptr, $size, $num)) < $num) {
            throw new SDLException($this->ffi->SDL_GetError());
        }

        return $result;
    }

    /**
     * Use this function to allocate an empty, unpopulated @see RWops::class structure.
     *
     * <code>
     * SDL_RWops* SDL_AllocRW(void)
     * </code>
     *
     * @return RWopsPtr
     */
    public function allocRw(): CData
    {
        if (($result = $this->ffi->SDL_AllocRW()) === null) {
            throw new SDLException($this->ffi->SDL_GetError());
        }

        return $result;
    }

    /**
     * Bind the texture to the current OpenGL/ES/ES2 context for use with OpenGL instructions.
     *
     * <code>
     * int SDL_GL_BindTexture(SDL_Texture *texture, float *texw, float *texh);
     * </code>
     *
     * @see https://wiki.libsdl.org/SDL_GL_BindTexture
     * @param CData|TexturePtr $texture The SDL texture to bind
     * @return array|float[]
     * @throws SDLException
     */
    public function glBindTexture(CData $texture): array
    {
        /**
         * @var CFloat $width
         * @var CFloat $height
         */
        [$width, $height] = [$this->ffi->new('float'), $this->ffi->new('float')];

        if ($this->ffi->SDL_GL_BindTexture($texture, self::addr($width), self::addr($height)) < 0) {
            throw new SDLException($this->ffi->SDL_GetError());
        }

        return [$width->cdata, $height->cdata];
    }

    /**
     * Create an OpenGL context for use with an OpenGL window, and make it current.
     *
     * <code>
     * SDL_GLContext SDL_GL_CreateContext(SDL_Window *window);
     * </code>
     *
     * @see https://wiki.libsdl.org/SDL_GL_CreateContext
     * @see SDL::glDeleteContext()
     * @param CData|WindowPtr $window
     * @return GLContext
     * @throws SDLException
     */
    public function glCreateContext(CData $window): CData
    {
        if (($result = $this->ffi->SDL_GL_CreateContext($window)) === null) {
            throw new SDLException($this->ffi->SDL_GetError());
        }

        return $result;
    }

    /**
     * Delete an OpenGL context.
     *
     * <code>
     * void SDL_GL_DeleteContext(SDL_GLContext context);
     * </code>
     *
     * @see https://wiki.libsdl.org/SDL_GL_DeleteContext
     * @param CData|GLContext $context
     * @return void
     */
    public function glDeleteContext(CData $context): void
    {
        $this->ffi->SDL_GL_DeleteContext($context);
    }

    /**
     * Use this function to check if an OpenGL extension is supported for the current context.
     *
     * <code>
     * int SDL_GL_ExtensionSupported(const char *extension);
     * </code>
     *
     * @see https://wiki.libsdl.org/SDL_GL_ExtensionSupported
     * @param string $extension The name of the extension to check
     * @return bool
     * @throws SDLException
     */
    public function glExtensionSupported(string $extension): bool
    {
        $result = $this->ffi->SDL_GL_ExtensionSupported($extension) > 0;

        if ($error = $this->ffi->SDL_GetError()) {
            throw new SDLException($error);
        }

        return $result;
    }

    /**
     * Get the actual value for an attribute from the current context.
     *
     * <code>
     * int SDL_GL_GetAttribute(SDL_GLattr attr, int *value);
     * </code>
     *
     * @see         https://wiki.libsdl.org/SDL_GL_GetAttribute
     * @param int|GLAttr $attr The GLAttr enum value
     * @psalm-param GLAttr::* $attr
     * @return int
     * @throws SDLException
     */
    public function glGetAttribute(int $attr): int
    {
        /** @var CInt $value */
        $value = $this->ffi->new('int');

        if ($this->ffi->SDL_GL_GetAttribute($attr, self::addr($value)) < 0) {
            throw new SDLException($this->ffi->SDL_GetError());
        }

        return $value->cdata;
    }

    /**
     * Returns the currently active OpenGL context or null if the context does not exist.
     *
     * <code>
     * SDL_GLContext SDL_GL_GetCurrentContext(void);
     * </code>
     *
     * @see https://wiki.libsdl.org/SDL_GL_GetCurrentContext
     * @return GLContext|null
     * @throws SDLException
     */
    public function glGetCurrentContext(): ?CData
    {
        try {
            return $this->ffi->SDL_GL_GetCurrentContext();
        } finally {
            if ($error = $this->ffi->SDL_GetError()) {
                throw new SDLException($error);
            }
        }
    }

    /**
     * Returns the currently active OpenGL window or null if the window does not exist.
     *
     * <code>
     * SDL_Window* SDL_GL_GetCurrentWindow(void);
     * </code>
     *
     * @see https://wiki.libsdl.org/SDL_GL_GetCurrentWindow
     * @return CData|WindowPtr|null
     * @throws SDLException
     */
    public function glGetCurrentWindow(): ?CData
    {
        try {
            return $this->ffi->SDL_GL_GetCurrentWindow();
        } finally {
            if ($error = $this->ffi->SDL_GetError()) {
                throw new SDLException($error);
            }
        }
    }

    /**
     * Use this function to get the size of a window's underlying drawable
     * in pixels (for use with glViewport).
     *
     * <code>
     * void SDL_GL_GetDrawableSize(SDL_Window* window, int* w, int* h);
     * </code>
     *
     * @see   https://wiki.libsdl.org/SDL_GL_GetDrawableSize
     * @param CData|WindowPtr $window The window from which the drawable size should be queried.
     * @return array|int[]
     * @throws VersionException
     * @since 2.0.1
     */
    public function glGetDrawableSize(CData $window): array
    {
        $this->assertVersion('2.0.1');

        /**
         * @var CInt $width
         * @var CInt $height
         */
        [$width, $height] = [$this->ffi->new('int'), $this->ffi->new('int')];

        $this->ffi->SDL_GL_GetDrawableSize($window, self::addr($width), self::addr($height));

        return [$width->cdata, $height->cdata];
    }

    /**
     * Returns a pointer to the named OpenGL function.
     * The returned pointer should be cast to the appropriate function signature.
     *
     * <code>
     * void* SDL_GL_GetProcAddress(const char* proc);
     * </code>
     *
     * @see https://wiki.libsdl.org/SDL_GL_GetProcAddress
     * @param string $proc The name of an OpenGL function
     * @return CPtr
     */
    public function glGetProcAddress(string $proc): CData
    {
        return $this->ffi->SDL_GL_GetProcAddress($proc);
    }

    /**
     * Use this function to get the swap interval for the current OpenGL context.
     *
     * <code>
     * int SDL_GL_GetSwapInterval(void);
     * </code>
     *
     * @see          https://wiki.libsdl.org/SDL_GL_GetSwapInterval
     * @return int|GLSwapInterval
     * @psalm-return GLSwapInterval::*
     * @throws SDLException
     */
    public function glGetSwapInterval(): int
    {
        try {
            return $this->ffi->SDL_GL_GetSwapInterval();
        } finally {
            if ($error = $this->ffi->SDL_GetError()) {
                throw new SDLException($error);
            }
        }
    }

    /**
     * Use this function to dynamically load an OpenGL library.
     *
     * <code>
     * int SDL_GL_LoadLibrary(const char* path)
     * </code>
     *
     * @see https://wiki.libsdl.org/SDL_GL_LoadLibrary
     * @param string $path The platform dependent OpenGL library name, or NULL to open the default OpenGL library
     * @return void
     * @throws SDLException
     */
    public function glLoadLibrary(?string $path = null): void
    {
        if ($this->ffi->SDL_GL_LoadLibrary($path) !== 0) {
            throw new SDLException($this->ffi->SDL_GetError());
        }
    }

    /**
     * Use this function to set up an OpenGL context for rendering into an OpenGL window.
     *
     * <code>
     * int SDL_GL_MakeCurrent(SDL_Window* window, SDL_GLContext context);
     * </code>
     *
     * @see https://wiki.libsdl.org/SDL_GL_MakeCurrent
     * @param CData|WindowPtr $window  The window to associate with the context
     * @param CData|GLContext $context The OpenGL context to associate with the window
     * @return void
     * @throws SDLException
     */
    public function glMakeCurrent(CData $window, CData $context): void
    {
        if ($this->ffi->SDL_GL_MakeCurrent($window, $context) !== 0) {
            throw new SDLException($this->ffi->SDL_GetError());
        }
    }

    /**
     * Use this function to reset all previously set OpenGL context attributes to their default values.
     *
     * <code>
     * void SDL_GL_ResetAttributes(void);
     * </code>
     *
     * @see   https://wiki.libsdl.org/SDL_GL_ResetAttributes
     * @since 2.0.2
     * @return void
     * @throws VersionException
     */
    public function glResetAttributes(): void
    {
        $this->assertVersion('2.0.2');

        $this->ffi->SDL_GL_ResetAttributes();
    }

    /**
     * Use this function to set an OpenGL window attribute before window creation.
     *
     * <code>
     * int SDL_GL_SetAttribute(SDL_GLattr attr, int value);
     * </code>
     *
     * @see         https://wiki.libsdl.org/SDL_GL_SetAttribute
     * @param int|GLAttr $attr The OpenGL attribute to set.
     * @psalm-param GLAttr::* $attr
     * @param int $value       The desired value for the attribute.
     * @return void
     * @throws SDLException
     */
    public function glSetAttribute(int $attr, int $value): void
    {
        if ($this->ffi->SDL_GL_SetAttribute($attr, $value) < 0) {
            throw new SDLException($this->ffi->SDL_GetError());
        }
    }

    /**
     * Use this function to set the swap interval for the current OpenGL context.
     *
     * <code>
     * int SDL_GL_SetSwapInterval(int interval);
     * </code>
     *
     * @see         https://wiki.libsdl.org/SDL_GL_SetSwapInterval
     * @param int|GLSwapInterval $interval 0 for immediate updates, 1 for updates synchronized with the vertical
     *                                     retrace, -1 for adaptive vsync
     * @psalm-param GLSwapInterval::* $interval
     * @return void
     * @throws SDLException
     */
    public function glSetSwapInterval(int $interval): void
    {
        if ($this->ffi->SDL_GL_SetSwapInterval($interval) < 0) {
            throw new SDLException($this->ffi->SDL_GetError());
        }
    }

    /**
     * Use this function to update a window with OpenGL rendering.
     *
     * <code>
     * void SDL_GL_SwapWindow(SDL_Window* window);
     * </code>
     *
     * @see https://wiki.libsdl.org/SDL_GL_SwapWindow
     * @param CData|WindowPtr $window
     * @return void
     */
    public function glSwapWindow(CData $window): void
    {
        $this->ffi->SDL_GL_SwapWindow($window);
    }

    /**
     * Use this function to unbind an OpenGL/ES/ES2 texture from the current context.
     *
     * <code>
     * int SDL_GL_UnbindTexture(SDL_Texture* texture);
     * </code>
     *
     * @see https://wiki.libsdl.org/SDL_GL_UnbindTexture
     * @param CData|TexturePtr $texture The texture to unbind from the current OpenGL/ES/ES2 context
     * @return void
     * @throws SDLException
     */
    public function glUnbindTexture(CData $texture): void
    {
        if ($this->ffi->SDL_GL_UnbindTexture($texture) < 0) {
            throw new SDLException($this->ffi->SDL_GetError());
        }
    }

    /**
     * Use this function to unload the OpenGL library previously loaded by @see SDL::glLoadLibrary()
     *
     * <code>
     * void SDL_GL_UnloadLibrary(void)
     * </code>
     *
     * @see https://wiki.libsdl.org/SDL_GL_UnloadLibrary
     * @return void
     */
    public function glUnloadLibrary(): void
    {
        $this->ffi->SDL_GL_UnloadLibrary();
    }

    /**
     * Use this function to load a BMP image from a seekable SDL data stream (memory or file).
     *
     * <code>
     * SDL_Surface* SDL_LoadBMP_RW(SDL_RWops* src, int freesrc);
     * </code>
     *
     * @see https://wiki.libsdl.org/SDL_LoadBMP_RW
     * @param CData|RWopsPtr $src The data stream for the surface
     * @param bool $autoClose     The bool true value to close the stream after being read.
     * @return SurfacePtr
     * @throws SDLException
     */
    public function loadBmpRw(CData $src, bool $autoClose = true): CData
    {
        if (($result = $this->ffi->SDL_LoadBMP_RW($src, (int)$autoClose)) === null) {
            throw new SDLException($this->ffi->SDL_GetError());
        }

        return $result;
    }

    /**
     * <code>
     * int SDL_SaveBMP_RW(SDL_Surface* surface, SDL_RWops* dst, int freedst);
     * </code>
     *
     * @see https://wiki.libsdl.org/SDL_SaveBMP_RW
     * @param CData|SurfacePtr $surface The @see Surface::class structure containing the image to be saved.
     * @param CData|RWopsPtr $dest      A data stream to save to.
     * @param bool $autoClose           The bool true value  to close the stream after being written.
     * @return void
     * @throws SDLException
     */
    public function saveBmpRw(CData $surface, CData $dest, bool $autoClose = true): void
    {
        if ($this->ffi->SDL_SaveBMP_RW($surface, $dest, (int)$autoClose) < 0) {
            throw new SDLException($this->ffi->SDL_GetError());
        }
    }

    /**
     * Use this function to create an identifier that is globally visible to all
     * threads but refers to data that is thread-specific.
     *
     * <code>
     * unsigned int SDL_TLSCreate(void);
     * </code>
     *
     * @see https://wiki.libsdl.org/SDL_TLSCreate
     * @return int
     */
    public function tlsCreate(): int
    {
        if (($result = $this->ffi->SDL_TLSCreate()) === 0) {
            throw new SDLException($this->ffi->SDL_GetError());
        }

        return $result;
    }

    /**
     * Use this function to get the value associated with a thread local storage ID for the current thread.
     *
     * <code>
     * void* SDL_TLSGet(unsigned int id);
     * </code>
     *
     * @param int $id The thread local storage ID
     * @return CPtr
     */
    public function tlsGet(int $id): CData
    {
        if (($result = $this->ffi->SDL_TLSGet($id)) === null) {
            throw new SDLException($this->ffi->SDL_GetError());
        }

        return $result;
    }

    /**
     * Use this function to set the value associated with a thread local storage ID for the current thread.
     *
     * <code>
     * int SDL_TLSSet(unsigned int id, const void* value, void ( *destructor)(void *));
     * </code>
     *
     * @see https://wiki.libsdl.org/SDL_TLSSet
     * @param int $id              The thread local storage ID
     * @param CData|CPtr $value    The value to associate with the ID for the current thread
     * @param \Closure $destructor A function called when the thread exits, to free the value
     * @return void
     */
    public function tlsSet(int $id, CData $value, \Closure $destructor): void
    {
        if ($this->ffi->SDL_TLSSet($id, $value, $destructor) !== 0) {
            throw new SDLException($this->ffi->SDL_GetError());
        }
    }

    /**
     * Use this function to get the size of a window's client area.
     *
     * <code>
     * </code>
     *
     * @param WindowPtr|CData $window
     * @return array|int[]
     */
    public function getWindowSize(CData $window): array
    {
        /**
         * @var CInt $width
         * @var CInt $height
         */
        [$width, $height] = [$this->ffi->new('int'), $this->ffi->new('int')];

        $this->ffi->SDL_GetWindowSize($window, self::addr($width), self::addr($height));

        return [$width->cdata, $height->cdata];
    }

    /**
     * @return LibraryInformation
     */
    protected function getLibraryInformation(): LibraryInformation
    {
        return $this->info;
    }
}
