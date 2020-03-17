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

use FFI\CCharPtrPtr;
use FFI\CData;
use Serafim\SDL\Image\ImageType;
use Serafim\SDL\Image\InitFlags;

/**
 * @mixin \FFI
 */
final class Image extends Library implements InitFlags, ImageType
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
        
        extern const SDL_Version* IMG_Linked_Version(void);
    clang;

    /**
     * @var string
     */
    private const LIBRARY_WIN64 = __DIR__ . '/../bin/x64/SDL2_image.dll';

    /**
     * @var string
     */
    private const LIBRARY_WIN86 = __DIR__ . '/../bin/x86/SDL2_image.dll';

    /**
     * @var string
     */
    private const LIBRARY_LINUX = 'libSDL2_image-2.0.so.0';

    /**
     * @var string
     */
    private const LIBRARY_MAC = 'libSDL2_image-2.0.0.dylib';

    /**
     * @var string|null
     */
    private static ?string $version = null;

    /**
     * @var SDL
     */
    private SDL $sdl;

    /**
     * Image constructor.
     *
     * @param SDL $sdl
     */
    public function __construct(SDL $sdl)
    {
        $this->sdl = $sdl;

        $ffi = $this->sdl(fn() => $this->ffi());

        parent::__construct($ffi);
    }

    /**
     * @param \Closure $then
     * @return mixed
     */
    protected function sdl(\Closure $then)
    {
        return $this->chdir($this->sdl->getWorkingDirectory(), $then);
    }

    /**
     * Loads dynamic libraries and prepares them for use.
     * Flags should be one or more flags from IMG_InitFlags OR'd together.
     *
     * It returns the flags successfully initialized, or 0 on failure.
     *
     * <code>
     *  extern int IMG_Init(int flags);
     * </code>
     *
     * @param int $flags
     * @return int
     */
    public function IMG_Init(int $flags): int
    {
        return $this->sdl(fn() => $this->ffi->IMG_Init($flags));
    }

    /**
     * This function returns the version of the dynamically linked SDL_image
     * library.
     *
     * <code>
     *  extern const SDL_version *IMG_Linked_Version(void);
     * </code>
     *
     * @return SDL_VersionPtr
     */
    public function IMG_Linked_Version(): CData
    {
        $result = $this->ffi->IMG_Linked_Version();

        return $this->sdl->cast('SDL_version*', $result);
    }

    /**
     * Unloads libraries loaded with IMG_Init
     *
     * <code>
     *  extern void IMG_Quit(void);
     * </code>
     *
     * @return void
     */
    public function IMG_Quit(): void
    {
        $this->ffi->IMG_Quit();
    }

    /**
     * Load an image from an SDL data source.
     * The 'type' may be one of: "BMP", "GIF", "PNG", etc
     *
     * @see ImageType
     *
     * If the image format supports a transparent pixel, SDL will set the
     * colorkey for the surface.  You can enable RLE acceleration on the
     * surface afterwards by calling:
     *
     * $image->SDL_SetColorKey($image, SDL::SDL_RLEACCEL, $image->format->colorkey);
     *
     * <code>
     *  extern SDL_Surface* IMG_LoadTyped_RW(SDL_RWops *src, int freesrc, const char *type);
     * </code>
     *
     * @param CData|SDL_RWopsPtr $src
     * @param int $freeSrc
     * @param string $type
     * @return SDL_SurfacePtr|null
     */
    public function IMG_LoadTyped_RW(CData $src, int $freeSrc, string $type): ?CData
    {
        $result = $this->ffi->IMG_LoadTyped_RW(
            $this->cast('SDL_RWops*', $src),
            $freeSrc,
            $type
        );

        return $result ? $this->sdl->cast('SDL_Surface*', $result) : null;
    }

    /**
     * Load file for use as an image in a new surface. This actually calls
     * IMG_LoadTyped_RW, with the file extension used as the type string.
     * This can load all supported image files, including TGA as long as the
     * filename ends with ".tga". It is best to call this outside of event
     * loops, and rather keep the loaded images around until you are really
     * done with them, as disk speed and image conversion to a surface is not
     * that speedy.
     *
     * Don't forget to SDL_FreeSurface the returned surface pointer when you
     * are through with it.
     *
     * <code>
     *  extern SDL_Surface* IMG_Load(const char *file);
     * </code>
     *
     * @param string $file
     * @return SDL_SurfacePtr|null
     */
    public function IMG_Load(string $file): ?CData
    {
        $result = $this->ffi->IMG_Load($file);

        return $result ? $this->sdl->cast('SDL_Surface*', $result) : null;
    }

    /**
     * Load src for use as a surface. This can load all supported image formats,
     * except TGA. Using SDL_RWops is not covered here, but they enable you
     * to load from almost any source.
     *
     * <code>
     *  extern SDL_Surface* IMG_Load_RW(SDL_RWops *src, int freesrc);
     * </code>
     *
     * @param CData|SDL_RWopsPtr $src
     * @param int $freeSrc
     * @return SDL_SurfacePtr|null
     */
    public function IMG_Load_RW(CData $src, int $freeSrc): ?CData
    {
        $result = $this->ffi->IMG_Load_RW(
            $this->cast('SDL_RWops*', $src),
            $freeSrc
        );

        return $result ? $this->sdl->cast('SDL_Surface*', $result) : null;
    }

    /**
     * Load an image directly into a render texture.
     *
     * @see Image::IMG_Load()
     *
     * <code>
     *  extern SDL_Texture* IMG_LoadTexture(SDL_Renderer *renderer, const char *file);
     * </code>
     *
     * @param CData|SDL_RendererPtr $renderer
     * @param string $file
     * @return SDL_TexturePtr|null
     */
    public function IMG_LoadTexture(CData $renderer, string $file): ?CData
    {
        $result = $this->ffi->IMG_LoadTexture(
            $this->cast('SDL_Renderer*', $renderer),
            $file
        );

        return $result ? $this->sdl->cast('SDL_Texture*', $result) : null;
    }

    /**
     * @param string $message
     * @param mixed ...$args
     * @return int
     */
    public function IMG_SetError(string $message, ...$args): int
    {
        return $this->ffi->SDL_SetError($message, ...$args);
    }

    /**
     * @return string
     */
    public function IMG_GetError(): string
    {
        return $this->ffi->SDL_GetError();
    }

    /**
     * @return void
     */
    public function IMG_ClearError(): void
    {
        $this->ffi->SDL_ClearError();
    }

    /**
     * Load an image directly into a render texture.
     *
     * @see Image::IMG_Load_RW()
     *
     * <code>
     *  extern SDL_Texture* IMG_LoadTexture_RW(SDL_Renderer *renderer, SDL_RWops *src, int freesrc);
     * </code>
     *
     * @param CData|SDL_RendererPtr $renderer
     * @param CData|SDL_RWopsPtr $src
     * @param int $freeSrc
     * @return SDL_TexturePtr|null
     */
    public function IMG_LoadTexture_RW(CData $renderer, CData $src, int $freeSrc): ?CData
    {
        $result = $this->ffi->IMG_LoadTexture_RW(
            $this->sdl->cast('SDL_Renderer*', $renderer),
            $this->sdl->cast('SDL_RWops*', $src),
            $freeSrc
        );

        return $result ? $this->sdl->cast('SDL_Texture*', $result) : null;
    }

    /**
     * Load an image directly into a render texture.
     *
     * @see Image::IMG_LoadTyped_RW()
     *
     * <code>
     *  extern SDL_Texture *IMG_LoadTextureTyped_RW(
     *      SDL_Renderer *renderer,
     *      SDL_RWops *src,
     *      int freesrc,
     *      const char *type
     *  );
     * </code>
     *
     * @param CData|SDL_RendererPtr $renderer
     * @param CData|SDL_RWopsPtr $src
     * @param int $freeSrc
     * @param string $type
     * @return SDL_TexturePtr|null
     */
    public function IMG_LoadTextureTyped_RW(CData $renderer, CData $src, int $freeSrc, string $type): ?CData
    {
        $result = $this->ffi->IMG_LoadTextureTyped_RW(
            $this->cast('SDL_Renderer*', $renderer),
            $this->cast('SDL_RWops*', $src),
            $freeSrc,
            $type
        );

        return $result ? $this->sdl->cast('SDL_Texture*', $result) : null;
    }

    /**
     * Functions to detect a file type, given a seekable source.
     *
     * <code>
     *  extern int IMG_isICO(SDL_RWops *src);
     * </code>
     *
     * @param SDL_RWopsPtr $src
     * @return int
     */
    public function IMG_isICO(SDL_RWopsPtr $src): int
    {
        return $this->ffi->IMG_isICO(
            $this->cast('SDL_RWops*', $src)
        );
    }

    /**
     * Functions to detect a file type, given a seekable source.
     *
     * <code>
     *  extern int IMG_isCUR(SDL_RWops *src);
     * </code>
     *
     * @param SDL_RWopsPtr $src
     * @return int
     */
    public function IMG_isCUR(SDL_RWopsPtr $src): int
    {
        return $this->ffi->IMG_isCUR(
            $this->cast('SDL_RWops*', $src)
        );
    }

    /**
     * Functions to detect a file type, given a seekable source.
     *
     * <code>
     *  extern int IMG_isBMP(SDL_RWops *src);
     * </code>
     *
     * @param SDL_RWopsPtr $src
     * @return int
     */
    public function IMG_isBMP(SDL_RWopsPtr $src): int
    {
        return $this->ffi->IMG_isBMP(
            $this->cast('SDL_RWops*', $src)
        );
    }

    /**
     * Functions to detect a file type, given a seekable source.
     *
     * <code>
     *  extern int IMG_isGIF(SDL_RWops *src);
     * </code>
     *
     * @param SDL_RWopsPtr $src
     * @return int
     */
    public function IMG_isGIF(SDL_RWopsPtr $src): int
    {
        return $this->ffi->IMG_isGIF(
            $this->cast('SDL_RWops*', $src)
        );
    }

    /**
     * Functions to detect a file type, given a seekable source.
     *
     * <code>
     *  extern int IMG_isJPG(SDL_RWops *src);
     * </code>
     *
     * @param SDL_RWopsPtr $src
     * @return int
     */
    public function IMG_isJPG(SDL_RWopsPtr $src): int
    {
        return $this->ffi->IMG_isJPG(
            $this->cast('SDL_RWops*', $src)
        );
    }

    /**
     * Functions to detect a file type, given a seekable source.
     *
     * <code>
     *  extern int IMG_isLBM(SDL_RWops *src);
     * </code>
     *
     * @param SDL_RWopsPtr $src
     * @return int
     */
    public function IMG_isLBM(SDL_RWopsPtr $src): int
    {
        return $this->ffi->IMG_isLBM(
            $this->cast('SDL_RWops*', $src)
        );
    }

    /**
     * Functions to detect a file type, given a seekable source.
     *
     * <code>
     *  extern int IMG_isPCX(SDL_RWops *src);
     * </code>
     *
     * @param SDL_RWopsPtr $src
     * @return int
     */
    public function IMG_isPCX(SDL_RWopsPtr $src): int
    {
        return $this->ffi->IMG_isPCX(
            $this->cast('SDL_RWops*', $src)
        );
    }

    /**
     * Functions to detect a file type, given a seekable source.
     *
     * <code>
     *  extern int IMG_isPNG(SDL_RWops *src);
     * </code>
     *
     * @param SDL_RWopsPtr $src
     * @return int
     */
    public function IMG_isPNG(SDL_RWopsPtr $src): int
    {
        return $this->ffi->IMG_isPNG(
            $this->cast('SDL_RWops*', $src)
        );
    }

    /**
     * Functions to detect a file type, given a seekable source.
     *
     * <code>
     *  extern int IMG_isPNM(SDL_RWops *src);
     * </code>
     *
     * @param SDL_RWopsPtr $src
     * @return int
     */
    public function IMG_isPNM(SDL_RWopsPtr $src): int
    {
        return $this->ffi->IMG_isPNM(
            $this->cast('SDL_RWops*', $src)
        );
    }

    /**
     * Functions to detect a file type, given a seekable source.
     *
     * <code>
     *  extern int IMG_isSVG(SDL_RWops *src);
     * </code>
     *
     * @param SDL_RWopsPtr $src
     * @return int
     */
    public function IMG_isSVG(SDL_RWopsPtr $src): int
    {
        return $this->ffi->IMG_isSVG(
            $this->cast('SDL_RWops*', $src)
        );
    }

    /**
     * Functions to detect a file type, given a seekable source.
     *
     * <code>
     *  extern int IMG_isTIF(SDL_RWops *src);
     * </code>
     *
     * @param SDL_RWopsPtr $src
     * @return int
     */
    public function IMG_isTIF(SDL_RWopsPtr $src): int
    {
        return $this->ffi->IMG_isTIF(
            $this->cast('SDL_RWops*', $src)
        );
    }

    /**
     * Functions to detect a file type, given a seekable source.
     *
     * <code>
     *  extern int IMG_isXCF(SDL_RWops *src);
     * </code>
     *
     * @param SDL_RWopsPtr $src
     * @return int
     */
    public function IMG_isXCF(SDL_RWopsPtr $src): int
    {
        return $this->ffi->IMG_isXCF(
            $this->cast('SDL_RWops*', $src)
        );
    }

    /**
     * Functions to detect a file type, given a seekable source.
     *
     * <code>
     *  extern int IMG_isXPM(SDL_RWops *src);
     * </code>
     *
     * @param SDL_RWopsPtr $src
     * @return int
     */
    public function IMG_isXPM(SDL_RWopsPtr $src): int
    {
        return $this->ffi->IMG_isXPM(
            $this->cast('SDL_RWops*', $src)
        );
    }

    /**
     * Functions to detect a file type, given a seekable source.
     *
     * <code>
     *  extern int IMG_isXV(SDL_RWops *src);
     * </code>
     *
     * @param SDL_RWopsPtr $src
     * @return int
     */
    public function IMG_isXV(SDL_RWopsPtr $src): int
    {
        return $this->ffi->IMG_isXV(
            $this->cast('SDL_RWops*', $src)
        );
    }

    /**
     * Functions to detect a file type, given a seekable source.
     *
     * <code>
     *  extern int IMG_isWEBP(SDL_RWops *src);
     * </code>
     *
     * @param SDL_RWopsPtr $src
     * @return int
     */
    public function IMG_isWEBP(SDL_RWopsPtr $src): int
    {
        return $this->ffi->IMG_isWEBP(
            $this->cast('SDL_RWops*', $src)
        );
    }

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface* IMG_LoadICO_RW(SDL_RWops *src);
     * </code>
     *
     * @param CData|SDL_RWopsPtr $src
     * @return SDL_SurfacePtr|null
     */
    public function IMG_LoadICO_RW(CData $src): ?CData
    {
        $result = $this->ffi->IMG_LoadICO_RW(
            $this->cast('SDL_RWops*', $src)
        );

        return $result ? $this->sdl->cast('SDL_Surface*', $result) : null;
    }

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface* IMG_LoadCUR_RW(SDL_RWops *src);
     * </code>
     *
     * @param CData|SDL_RWopsPtr $src
     * @return SDL_SurfacePtr|null
     */
    public function IMG_LoadCUR_RW(CData $src): ?CData
    {
        $result = $this->ffi->IMG_LoadCUR_RW(
            $this->cast('SDL_RWops*', $src)
        );

        return $result ? $this->sdl->cast('SDL_Surface*', $result) : null;
    }

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface* IMG_LoadBMP_RW(SDL_RWops *src);
     * </code>
     *
     * @param CData|SDL_RWopsPtr $src
     * @return SDL_SurfacePtr|null
     */
    public function IMG_LoadBMP_RW(CData $src): ?CData
    {
        $result = $this->ffi->IMG_LoadBMP_RW(
            $this->cast('SDL_RWops*', $src)
        );

        return $result ? $this->sdl->cast('SDL_Surface*', $result) : null;
    }

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface* IMG_LoadGIF_RW(SDL_RWops *src);
     * </code>
     *
     * @param CData|SDL_RWopsPtr $src
     * @return SDL_SurfacePtr|null
     */
    public function IMG_LoadGIF_RW(CData $src): ?CData
    {
        $result = $this->ffi->IMG_LoadGIF_RW(
            $this->cast('SDL_RWops*', $src)
        );

        return $result ? $this->sdl->cast('SDL_Surface*', $result) : null;
    }

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface* IMG_LoadJPG_RW(SDL_RWops *src);
     * </code>
     *
     * @param CData|SDL_RWopsPtr $src
     * @return SDL_SurfacePtr|null
     */
    public function IMG_LoadJPG_RW(CData $src): ?CData
    {
        $result = $this->ffi->IMG_LoadJPG_RW(
            $this->cast('SDL_RWops*', $src)
        );

        return $result ? $this->sdl->cast('SDL_Surface*', $result) : null;
    }

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface* IMG_LoadLBM_RW(SDL_RWops *src);
     * </code>
     *
     * @param CData|SDL_RWopsPtr $src
     * @return SDL_SurfacePtr|null
     */
    public function IMG_LoadLBM_RW(CData $src): ?CData
    {
        $result = $this->ffi->IMG_LoadLBM_RW(
            $this->cast('SDL_RWops*', $src)
        );

        return $result ? $this->sdl->cast('SDL_Surface*', $result) : null;
    }

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface* IMG_LoadPCX_RW(SDL_RWops *src);
     * </code>
     *
     * @param CData|SDL_RWopsPtr $src
     * @return SDL_SurfacePtr|null
     */
    public function IMG_LoadPCX_RW(CData $src): ?CData
    {
        $result = $this->ffi->IMG_LoadPCX_RW(
            $this->cast('SDL_RWops*', $src)
        );

        return $result ? $this->sdl->cast('SDL_Surface*', $result) : null;
    }

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface* IMG_LoadPNG_RW(SDL_RWops *src);
     * </code>
     *
     * @param CData|SDL_RWopsPtr $src
     * @return SDL_SurfacePtr|null
     */
    public function IMG_LoadPNG_RW(CData $src): ?CData
    {
        $result = $this->ffi->IMG_LoadPNG_RW(
            $this->cast('SDL_RWops*', $src)
        );

        return $result ? $this->sdl->cast('SDL_Surface*', $result) : null;
    }

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface* IMG_LoadPNM_RW(SDL_RWops *src);
     * </code>
     *
     * @param CData|SDL_RWopsPtr $src
     * @return SDL_SurfacePtr|null
     */
    public function IMG_LoadPNM_RW(CData $src): ?CData
    {
        $result = $this->ffi->IMG_LoadPNM_RW(
            $this->cast('SDL_RWops*', $src)
        );

        return $result ? $this->sdl->cast('SDL_Surface*', $result) : null;
    }

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface* IMG_LoadSVG_RW(SDL_RWops *src);
     * </code>
     *
     * @param CData|SDL_RWopsPtr $src
     * @return SDL_SurfacePtr|null
     */
    public function IMG_LoadSVG_RW(CData $src): ?CData
    {
        $result = $this->ffi->IMG_LoadSVG_RW(
            $this->cast('SDL_RWops*', $src)
        );

        return $result ? $this->sdl->cast('SDL_Surface*', $result) : null;
    }

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface* IMG_LoadTGA_RW(SDL_RWops *src);
     * </code>
     *
     * @param CData|SDL_RWopsPtr $src
     * @return SDL_SurfacePtr|null
     */
    public function IMG_LoadTGA_RW(CData $src): ?CData
    {
        $result = $this->ffi->IMG_LoadTGA_RW(
            $this->cast('SDL_RWops*', $src)
        );

        return $result ? $this->sdl->cast('SDL_Surface*', $result) : null;
    }

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface* IMG_LoadTIF_RW(SDL_RWops *src);
     * </code>
     *
     * @param CData|SDL_RWopsPtr $src
     * @return SDL_SurfacePtr|null
     */
    public function IMG_LoadTIF_RW(CData $src): ?CData
    {
        $result = $this->ffi->IMG_LoadTIF_RW(
            $this->cast('SDL_RWops*', $src)
        );

        return $result ? $this->sdl->cast('SDL_Surface*', $result) : null;
    }

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface* IMG_LoadXCF_RW(SDL_RWops *src);
     * </code>
     *
     * @param CData|SDL_RWopsPtr $src
     * @return SDL_SurfacePtr|null
     */
    public function IMG_LoadXCF_RW(CData $src): ?CData
    {
        $result = $this->ffi->IMG_LoadXCF_RW(
            $this->cast('SDL_RWops*', $src)
        );

        return $result ? $this->sdl->cast('SDL_Surface*', $result) : null;
    }

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface* IMG_LoadXPM_RW(SDL_RWops *src);
     * </code>
     *
     * @param CData|SDL_RWopsPtr $src
     * @return SDL_SurfacePtr|null
     */
    public function IMG_LoadXPM_RW(CData $src): ?CData
    {
        $result = $this->ffi->IMG_LoadXPM_RW(
            $this->cast('SDL_RWops*', $src)
        );

        return $result ? $this->sdl->cast('SDL_Surface*', $result) : null;
    }

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface* IMG_LoadXV_RW(SDL_RWops *src);
     * </code>
     *
     * @param CData|SDL_RWopsPtr $src
     * @return SDL_SurfacePtr|null
     */
    public function IMG_LoadXV_RW(CData $src): ?CData
    {
        $result = $this->ffi->IMG_LoadXV_RW(
            $this->cast('SDL_RWops*', $src)
        );

        return $result ? $this->sdl->cast('SDL_Surface*', $result) : null;
    }

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface* IMG_LoadWEBP_RW(SDL_RWops *src);
     * </code>
     *
     * @param CData|SDL_RWopsPtr $src
     * @return SDL_SurfacePtr|null
     */
    public function IMG_LoadWEBP_RW(CData $src): ?CData
    {
        $result = $this->ffi->IMG_LoadWEBP_RW(
            $this->cast('SDL_RWops*', $src)
        );

        return $result ? $this->sdl->cast('SDL_Surface*', $result) : null;
    }

    /**
     * Load xpm as a XPM image for use as a surface, if XPM support is compiled
     * into the SDL_image library.
     *
     * <code>
     *  extern SDL_Surface* IMG_ReadXPMFromArray(char **xpm);
     * </code>
     *
     * @param string|CData|CCharPtrPtr $xpm
     * @return SDL_SurfacePtr|null
     */
    public function IMG_ReadXPMFromArray(CData $xpm): ?CData
    {
        $result = $this->ffi->IMG_ReadXPMFromArray($xpm);

        return $result ? $this->sdl->cast('SDL_Surface*', $result) : null;
    }

    /**
     * Individual saving function
     *
     * <code>
     *  extern int IMG_SavePNG(SDL_Surface *surface, const char *file);
     * </code>
     *
     * @param CData|SDL_SurfacePtr $surface
     * @param string $file
     * @return int
     */
    public function IMG_SavePNG(CData $surface, string $file): int
    {
        return $this->ffi->IMG_SavePNG(
            $this->cast('SDL_Surface*', $surface),
            $file
        );
    }

    /**
     * Individual saving function
     *
     * <code>
     *  extern int IMG_SavePNG_RW(SDL_Surface *surface, SDL_RWops *dst, int freedst);
     * </code>
     *
     * @param CData|SDL_SurfacePtr $surface
     * @param CData|SDL_RWopsPtr $dst
     * @param int $freeDst
     * @return int
     */
    public function IMG_SavePNG_RW(CData $surface, CData $dst, int $freeDst): int
    {
        return $this->ffi->IMG_SavePNG_RW(
            $this->cast('SDL_Surface*', $surface),
            $this->cast('SDL_RWops*', $dst),
            $freeDst
        );
    }

    /**
     * Individual saving function
     *
     * <code>
     *  extern int IMG_SaveJPG(SDL_Surface *surface, const char *file);
     * </code>
     *
     * @param CData|SDL_SurfacePtr $surface
     * @param string $file
     * @return int
     */
    public function IMG_SaveJPG(CData $surface, string $file): int
    {
        return $this->ffi->IMG_SaveJPG(
            $this->cast('SDL_Surface*', $surface),
            $file
        );
    }

    /**
     * Individual saving function
     *
     * <code>
     *  extern int IMG_SaveJPG_RW(SDL_Surface *surface, SDL_RWops *dst, int freedst, int quality);
     * </code>
     *
     * @param CData|SDL_SurfacePtr $surface
     * @param CData|SDL_RWopsPtr $dst
     * @param int $freeDst
     * @param int $quality
     * @return int
     */
    public function IMG_SaveJPG_RW(CData $surface, CData $dst, int $freeDst, int $quality): int
    {
        return $this->ffi->IMG_SaveJPG_RW(
            $this->cast('SDL_Surface*', $surface),
            $this->cast('SDL_RWops*', $dst),
            $freeDst,
            $quality
        );
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'SDL Image';
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        if (self::$version === null) {
            return $this->sdl(function () {
                $ctx = \FFI::cdef(static::SDL_GET_VERSION, $this->getLibrary());

                $ver = $ctx->IMG_Linked_Version()[0];

                return self::$version = \sprintf('%d.%d.%d', $ver->major, $ver->minor, $ver->patch);
            });
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
                return \realpath(\PHP_INT_SIZE === 8 ? self::LIBRARY_WIN64 : self::LIBRARY_WIN86);

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
     * @return string
     */
    protected function getLinuxInstallationCommand(): string
    {
        return 'sudo apt install libsdl2-image-2.0-0 -y';
    }

    /**
     * @return string
     */
    protected function getMacOSInstallationCommand(): string
    {
        return 'brew install sdl2_image';
    }
}
