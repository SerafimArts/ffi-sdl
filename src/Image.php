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
    protected const IMG_GET_VERSION = <<<'clang'
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
     * @var \FFI|SDLImageNativeApiAutocomplete
     */
    protected \FFI $ffi;

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

        parent::__construct($this->inSdlWorkingDirectory(fn() => $this->ffi()));
    }

    /**
     * @param \Closure $expr
     * @return mixed
     */
    private function inSdlWorkingDirectory(\Closure $expr)
    {
        return $this->inWorkingDirectory($this->sdl->getWorkingDirectory(), $expr);
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
     * @param int|InitFlags $flags
     * @return int
     */
    public function init(int $flags): int
    {
        return $this->inSdlImageWorkingDirectory(fn() => $this->ffi->IMG_Init($flags));
    }

    /**
     * @param \Closure $expr
     * @return mixed
     */
    private function inSdlImageWorkingDirectory(\Closure $expr)
    {
        return $this->inWorkingDirectory($this->getWorkingDirectory(), $expr);
    }

    /**
     * This function returns the version of the dynamically linked SDL_image
     * library.
     *
     * <code>
     *  extern const SDL_version *IMG_Linked_Version(void);
     * </code>
     *
     * @return VersionPtr
     */
    public function linkedVersion(): CData
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
    public function quit(): void
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
     * @param CData|RWopsPtr $src
     * @param int $freeSrc
     * @param string $type
     * @return SurfacePtr|null
     */
    public function loadTypedRw(CData $src, int $freeSrc, string $type): ?CData
    {
        /** @var RWopsPtr $src */
        $src = $this->cast('SDL_RWops*', $src);

        $result = $this->ffi->IMG_LoadTyped_RW($src, $freeSrc, $type);

        return $result !== null ? $this->sdl->cast('SDL_Surface*', $result) : null;
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
     * @noinspection PhpHierarchyChecksInspection
     * @noinspection PhpSignatureMismatchDuringInheritanceInspection
     *
     * @param string $file
     * @return SurfacePtr|null
     */
    public function load(string $file): ?CData
    {
        $result = $this->ffi->IMG_Load($file);

        return $result !== null ? $this->sdl->cast('SDL_Surface*', $result) : null;
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
     * @param CData|RWopsPtr $src
     * @param bool $freeSrc
     * @return SurfacePtr|null
     */
    public function loadRw(CData $src, bool $freeSrc = true): ?CData
    {
        /** @var RWopsPtr $src */
        $src = $this->cast('SDL_RWops*', $src);

        $result = $this->ffi->IMG_Load_RW($src, (int)$freeSrc);

        return $result !== null ? $this->sdl->cast('SDL_Surface*', $result) : null;
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
     * @param CData|RendererPtr $renderer
     * @param string $file
     * @return TexturePtr|null
     */
    public function loadTexture(CData $renderer, string $file): ?CData
    {
        /** @var RendererPtr $renderer */
        $renderer = $this->cast('SDL_Renderer*', $renderer);

        $result = $this->ffi->IMG_LoadTexture($renderer, $file);

        return $result !== null ? $this->sdl->cast('SDL_Texture*', $result) : null;
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
     * @param CData|RendererPtr $renderer
     * @param CData|RWopsPtr $src
     * @param bool $freeSrc
     * @return TexturePtr|null
     */
    public function loadTextureRw(CData $renderer, CData $src, bool $freeSrc = true): ?CData
    {
        /** @var RendererPtr $renderer */
        $renderer = $this->cast('SDL_Renderer*', $renderer);

        /** @var RWopsPtr $src */
        $src = $this->cast('SDL_RWops*', $src);

        $result = $this->ffi->IMG_LoadTexture_RW($renderer, $src, (int)$freeSrc);

        return $result !== null ? $this->sdl->cast('SDL_Texture*', $result) : null;
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
     * @param CData|RendererPtr $renderer
     * @param CData|RWopsPtr $src
     * @param string $type
     * @param bool $freeSrc
     * @return TexturePtr|null
     */
    public function loadTextureTypedRw(CData $renderer, CData $src, string $type, bool $freeSrc = true): ?CData
    {
        /** @var RendererPtr $renderer */
        $renderer = $this->cast('SDL_Renderer*', $renderer);

        /** @var RWopsPtr $src */
        $src = $this->cast('SDL_RWops*', $src);

        $result = $this->ffi->IMG_LoadTextureTyped_RW($renderer, $src, (int)$freeSrc, $type);

        return $result !== null ? $this->sdl->cast('SDL_Texture*', $result) : null;
    }

    /**
     * Functions to detect a file type, given a seekable source.
     *
     * <code>
     *  extern int IMG_isICO(SDL_RWops *src);
     * </code>
     *
     * @param CData|RWopsPtr $src
     * @return int
     */
    public function isIco(CData $src): int
    {
        /** @var RWopsPtr $src */
        $src = $this->cast('SDL_RWops*', $src);

        return $this->ffi->IMG_isICO($src);
    }

    /**
     * Functions to detect a file type, given a seekable source.
     *
     * <code>
     *  extern int IMG_isCUR(SDL_RWops *src);
     * </code>
     *
     * @param CData|RWopsPtr $src
     * @return int
     */
    public function isCur(CData $src): int
    {
        /** @var RWopsPtr $src */
        $src = $this->cast('SDL_RWops*', $src);

        return $this->ffi->IMG_isCUR($src);
    }

    /**
     * Functions to detect a file type, given a seekable source.
     *
     * <code>
     *  extern int IMG_isBMP(SDL_RWops *src);
     * </code>
     *
     * @param CData|RWopsPtr $src
     * @return int
     */
    public function isBmp(CData $src): int
    {
        /** @var RWopsPtr $src */
        $src = $this->cast('SDL_RWops*', $src);

        return $this->ffi->IMG_isBMP($src);
    }

    /**
     * Functions to detect a file type, given a seekable source.
     *
     * <code>
     *  extern int IMG_isGIF(SDL_RWops *src);
     * </code>
     *
     * @param CData|RWopsPtr $src
     * @return int
     */
    public function isGif(CData $src): int
    {
        /** @var RWopsPtr $src */
        $src = $this->cast('SDL_RWops*', $src);

        return $this->ffi->IMG_isGIF($src);
    }

    /**
     * Functions to detect a file type, given a seekable source.
     *
     * <code>
     *  extern int IMG_isJPG(SDL_RWops *src);
     * </code>
     *
     * @param CData|RWopsPtr $src
     * @return int
     */
    public function isJpg(CData $src): int
    {
        /** @var RWopsPtr $src */
        $src = $this->cast('SDL_RWops*', $src);

        return $this->ffi->IMG_isJPG($src);
    }

    /**
     * Functions to detect a file type, given a seekable source.
     *
     * <code>
     *  extern int IMG_isLBM(SDL_RWops *src);
     * </code>
     *
     * @param CData|RWopsPtr $src
     * @return int
     */
    public function isLbm(CData $src): int
    {
        /** @var RWopsPtr $src */
        $src = $this->cast('SDL_RWops*', $src);

        return $this->ffi->IMG_isLBM($src);
    }

    /**
     * Functions to detect a file type, given a seekable source.
     *
     * <code>
     *  extern int IMG_isPCX(SDL_RWops *src);
     * </code>
     *
     * @param CData|RWopsPtr $src
     * @return int
     */
    public function isPcx(CData $src): int
    {
        /** @var RWopsPtr $src */
        $src = $this->cast('SDL_RWops*', $src);

        return $this->ffi->IMG_isPCX($src);
    }

    /**
     * Functions to detect a file type, given a seekable source.
     *
     * <code>
     *  extern int IMG_isPNG(SDL_RWops *src);
     * </code>
     *
     * @param CData|RWopsPtr $src
     * @return int
     */
    public function isPng(CData $src): int
    {
        /** @var RWopsPtr $src */
        $src = $this->cast('SDL_RWops*', $src);

        return $this->ffi->IMG_isPNG($src);
    }

    /**
     * Functions to detect a file type, given a seekable source.
     *
     * <code>
     *  extern int IMG_isPNM(SDL_RWops *src);
     * </code>
     *
     * @param CData|RWopsPtr $src
     * @return int
     */
    public function isPnm(CData $src): int
    {
        /** @var RWopsPtr $src */
        $src = $this->cast('SDL_RWops*', $src);

        return $this->ffi->IMG_isPNM($src);
    }

    /**
     * Functions to detect a file type, given a seekable source.
     *
     * <code>
     *  extern int IMG_isSVG(SDL_RWops *src);
     * </code>
     *
     * @param CData|RWopsPtr $src
     * @return int
     */
    public function isSvg(CData $src): int
    {
        /** @var RWopsPtr $src */
        $src = $this->cast('SDL_RWops*', $src);

        return $this->ffi->IMG_isSVG($src);
    }

    /**
     * Functions to detect a file type, given a seekable source.
     *
     * <code>
     *  extern int IMG_isTIF(SDL_RWops *src);
     * </code>
     *
     * @param CData|RWopsPtr $src
     * @return int
     */
    public function isTif(CData $src): int
    {
        /** @var RWopsPtr $src */
        $src = $this->cast('SDL_RWops*', $src);

        return $this->ffi->IMG_isTIF($src);
    }

    /**
     * Functions to detect a file type, given a seekable source.
     *
     * <code>
     *  extern int IMG_isXCF(SDL_RWops *src);
     * </code>
     *
     * @param CData|RWopsPtr $src
     * @return int
     */
    public function isXcf(CData $src): int
    {
        /** @var RWopsPtr $src */
        $src = $this->cast('SDL_RWops*', $src);

        return $this->ffi->IMG_isXCF($src);
    }

    /**
     * Functions to detect a file type, given a seekable source.
     *
     * <code>
     *  extern int IMG_isXPM(SDL_RWops *src);
     * </code>
     *
     * @param CData|RWopsPtr $src
     * @return int
     */
    public function isXpm(CData $src): int
    {
        /** @var RWopsPtr $src */
        $src = $this->cast('SDL_RWops*', $src);

        return $this->ffi->IMG_isXPM($src);
    }

    /**
     * Functions to detect a file type, given a seekable source.
     *
     * <code>
     *  extern int IMG_isXV(SDL_RWops *src);
     * </code>
     *
     * @param CData|RWopsPtr $src
     * @return int
     */
    public function isXv(CData $src): int
    {
        /** @var RWopsPtr $src */
        $src = $this->cast('SDL_RWops*', $src);

        return $this->ffi->IMG_isXV($src);
    }

    /**
     * Functions to detect a file type, given a seekable source.
     *
     * <code>
     *  extern int IMG_isWEBP(SDL_RWops *src);
     * </code>
     *
     * @param CData|RWopsPtr $src
     * @return int
     */
    public function isWebp(CData $src): int
    {
        /** @var RWopsPtr $src */
        $src = $this->cast('SDL_RWops*', $src);

        return $this->ffi->IMG_isWEBP($src);
    }

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface* IMG_LoadICO_RW(SDL_RWops *src);
     * </code>
     *
     * @param CData|RWopsPtr $src
     * @return SurfacePtr|null
     */
    public function loadIcoRw(CData $src): ?CData
    {
        /** @var RWopsPtr $src */
        $src = $this->cast('SDL_RWops*', $src);

        $result = $this->ffi->IMG_LoadICO_RW($src);

        return $result !== null ? $this->sdl->cast('SDL_Surface*', $result) : null;
    }

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface* IMG_LoadCUR_RW(SDL_RWops *src);
     * </code>
     *
     * @param CData|RWopsPtr $src
     * @return SurfacePtr|null
     */
    public function loadCurRw(CData $src): ?CData
    {
        /** @var RWopsPtr $src */
        $src = $this->cast('SDL_RWops*', $src);

        $result = $this->ffi->IMG_LoadCUR_RW($src);

        return $result !== null ? $this->sdl->cast('SDL_Surface*', $result) : null;
    }

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface* IMG_LoadBMP_RW(SDL_RWops *src);
     * </code>
     *
     * @param CData|RWopsPtr $src
     * @return SurfacePtr|null
     */
    public function loadBmpRw(CData $src): ?CData
    {
        /** @var RWopsPtr $src */
        $src = $this->cast('SDL_RWops*', $src);

        $result = $this->ffi->IMG_LoadBMP_RW($src);

        return $result !== null ? $this->sdl->cast('SDL_Surface*', $result) : null;
    }

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface* IMG_LoadGIF_RW(SDL_RWops *src);
     * </code>
     *
     * @param CData|RWopsPtr $src
     * @return SurfacePtr|null
     */
    public function loadGifRw(CData $src): ?CData
    {
        /** @var RWopsPtr $src */
        $src = $this->cast('SDL_RWops*', $src);

        $result = $this->ffi->IMG_LoadGIF_RW($src);

        return $result !== null ? $this->sdl->cast('SDL_Surface*', $result) : null;
    }

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface* IMG_LoadJPG_RW(SDL_RWops *src);
     * </code>
     *
     * @param CData|RWopsPtr $src
     * @return SurfacePtr|null
     */
    public function loadJpgRw(CData $src): ?CData
    {
        /** @var RWopsPtr $src */
        $src = $this->cast('SDL_RWops*', $src);

        $result = $this->ffi->IMG_LoadJPG_RW($src);

        return $result !== null ? $this->sdl->cast('SDL_Surface*', $result) : null;
    }

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface* IMG_LoadLBM_RW(SDL_RWops *src);
     * </code>
     *
     * @param CData|RWopsPtr $src
     * @return SurfacePtr|null
     */
    public function loadLbmRw(CData $src): ?CData
    {
        /** @var RWopsPtr $src */
        $src = $this->cast('SDL_RWops*', $src);

        $result = $this->ffi->IMG_LoadLBM_RW($src);

        return $result !== null ? $this->sdl->cast('SDL_Surface*', $result) : null;
    }

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface* IMG_LoadPCX_RW(SDL_RWops *src);
     * </code>
     *
     * @param CData|RWopsPtr $src
     * @return SurfacePtr|null
     */
    public function loadPcxRw(CData $src): ?CData
    {
        /** @var RWopsPtr $src */
        $src = $this->cast('SDL_RWops*', $src);

        $result = $this->ffi->IMG_LoadPCX_RW($src);

        return $result !== null ? $this->sdl->cast('SDL_Surface*', $result) : null;
    }

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface* IMG_LoadPNG_RW(SDL_RWops *src);
     * </code>
     *
     * @param CData|RWopsPtr $src
     * @return SurfacePtr|null
     */
    public function loadPngRw(CData $src): ?CData
    {
        /** @var RWopsPtr $src */
        $src = $this->cast('SDL_RWops*', $src);

        $result = $this->ffi->IMG_LoadPNG_RW($src);

        return $result !== null ? $this->sdl->cast('SDL_Surface*', $result) : null;
    }

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface* IMG_LoadPNM_RW(SDL_RWops *src);
     * </code>
     *
     * @param CData|RWopsPtr $src
     * @return SurfacePtr|null
     */
    public function loadPnmRw(CData $src): ?CData
    {
        /** @var RWopsPtr $src */
        $src = $this->cast('SDL_RWops*', $src);

        $result = $this->ffi->IMG_LoadPNM_RW($src);

        return $result !== null ? $this->sdl->cast('SDL_Surface*', $result) : null;
    }

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface* IMG_LoadSVG_RW(SDL_RWops *src);
     * </code>
     *
     * @param CData|RWopsPtr $src
     * @return SurfacePtr|null
     */
    public function loadSvgRw(CData $src): ?CData
    {
        /** @var RWopsPtr $src */
        $src = $this->cast('SDL_RWops*', $src);

        $result = $this->ffi->IMG_LoadSVG_RW($src);

        return $result !== null ? $this->sdl->cast('SDL_Surface*', $result) : null;
    }

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface* IMG_LoadTGA_RW(SDL_RWops *src);
     * </code>
     *
     * @param CData|RWopsPtr $src
     * @return SurfacePtr|null
     */
    public function loadTgaRw(CData $src): ?CData
    {
        /** @var RWopsPtr $src */
        $src = $this->cast('SDL_RWops*', $src);

        $result = $this->ffi->IMG_LoadTGA_RW($src);

        return $result !== null ? $this->sdl->cast('SDL_Surface*', $result) : null;
    }

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface* IMG_LoadTIF_RW(SDL_RWops *src);
     * </code>
     *
     * @param CData|RWopsPtr $src
     * @return SurfacePtr|null
     */
    public function loadTifRw(CData $src): ?CData
    {
        /** @var RWopsPtr $src */
        $src = $this->cast('SDL_RWops*', $src);

        $result = $this->ffi->IMG_LoadTIF_RW($src);

        return $result !== null ? $this->sdl->cast('SDL_Surface*', $result) : null;
    }

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface* IMG_LoadXCF_RW(SDL_RWops *src);
     * </code>
     *
     * @param CData|RWopsPtr $src
     * @return SurfacePtr|null
     */
    public function loadXcfRw(CData $src): ?CData
    {
        /** @var RWopsPtr $src */
        $src = $this->cast('SDL_RWops*', $src);

        $result = $this->ffi->IMG_LoadXCF_RW($src);

        return $result !== null ? $this->sdl->cast('SDL_Surface*', $result) : null;
    }

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface* IMG_LoadXPM_RW(SDL_RWops *src);
     * </code>
     *
     * @param CData|RWopsPtr $src
     * @return SurfacePtr|null
     */
    public function loadXpmRw(CData $src): ?CData
    {
        /** @var RWopsPtr $src */
        $src = $this->cast('SDL_RWops*', $src);

        $result = $this->ffi->IMG_LoadXPM_RW($src);

        return $result !== null ? $this->sdl->cast('SDL_Surface*', $result) : null;
    }

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface* IMG_LoadXV_RW(SDL_RWops *src);
     * </code>
     *
     * @param CData|RWopsPtr $src
     * @return SurfacePtr|null
     */
    public function loadXvRw(CData $src): ?CData
    {
        /** @var RWopsPtr $src */
        $src = $this->cast('SDL_RWops*', $src);

        $result = $this->ffi->IMG_LoadXV_RW($src);

        return $result !== null ? $this->sdl->cast('SDL_Surface*', $result) : null;
    }

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface* IMG_LoadWEBP_RW(SDL_RWops *src);
     * </code>
     *
     * @param CData|RWopsPtr $src
     * @return SurfacePtr|null
     */
    public function loadWebpRw(CData $src): ?CData
    {
        /** @var RWopsPtr $src */
        $src = $this->cast('SDL_RWops*', $src);

        $result = $this->ffi->IMG_LoadWEBP_RW($src);

        return $result !== null ? $this->sdl->cast('SDL_Surface*', $result) : null;
    }

    /**
     * load xpm as a XPM image for use as a surface, if XPM support is compiled
     * into the SDL_image library.
     *
     * <code>
     *  extern SDL_Surface* IMG_ReadXPMFromArray(char **xpm);
     * </code>
     *
     * @param string|CData|CCharPtrPtr $xpm
     * @return SurfacePtr|null
     */
    public function readXpmFromArray(CData $xpm): ?CData
    {
        $result = $this->ffi->IMG_ReadXPMFromArray($xpm);

        return $result !== null ? $this->sdl->cast('SDL_Surface*', $result) : null;
    }

    /**
     * Individual saving function
     *
     * <code>
     *  extern int IMG_SavePNG(SDL_Surface *surface, const char *file);
     * </code>
     *
     * @param CData|SurfacePtr $surface
     * @param string $file
     * @return int
     */
    public function savePng(CData $surface, string $file): int
    {
        /** @var SurfacePtr $surface */
        $surface = $this->cast('SDL_Surface*', $surface);

        return $this->ffi->IMG_SavePNG($surface, $file);
    }

    /**
     * Individual saving function
     *
     * <code>
     *  extern int IMG_SavePNG_RW(SDL_Surface *surface, SDL_RWops *dst, int freedst);
     * </code>
     *
     * @param CData|SurfacePtr $surface
     * @param CData|RWopsPtr $dst
     * @param bool $freeDst
     * @return int
     */
    public function savePngRw(CData $surface, CData $dst, bool $freeDst = true): int
    {
        /** @var SurfacePtr $surface */
        $surface = $this->cast('SDL_Surface*', $surface);

        /** @var RWopsPtr $dst */
        $dst = $this->cast('SDL_RWops*', $dst);

        return $this->ffi->IMG_SavePNG_RW($surface, $dst, (int)$freeDst);
    }

    /**
     * Individual saving function
     *
     * <code>
     *  extern int IMG_SaveJPG(SDL_Surface *surface, const char *file);
     * </code>
     *
     * @param CData|SurfacePtr $surface
     * @param string $file
     * @param int $quality
     * @return int
     */
    public function saveJpg(CData $surface, string $file, int $quality = 100): int
    {
        /** @var SurfacePtr $surface */
        $surface = $this->cast('SDL_Surface*', $surface);

        return $this->ffi->IMG_SaveJPG($surface, $file, $quality);
    }

    /**
     * Individual saving function
     *
     * <code>
     *  extern int IMG_SaveJPG_RW(SDL_Surface *surface, SDL_RWops *dst, int freedst, int quality);
     * </code>
     *
     * @param CData|SurfacePtr $surface
     * @param CData|RWopsPtr $dst
     * @param int $freeDst
     * @param int $quality
     * @return int
     */
    public function saveJpgRw(CData $surface, CData $dst, bool $freeDst = true, int $quality = 100): int
    {
        /** @var SurfacePtr $surface */
        $surface = $this->cast('SDL_Surface*', $surface);

        /** @var RWopsPtr $dst */
        $dst = $this->cast('SDL_RWops*', $dst);

        return $this->ffi->IMG_SaveJPG_RW($surface, $dst, (int)$freeDst, $quality);
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
        if ($this->version === null) {
            $ctx = $this->inSdlWorkingDirectory(fn() => \FFI::cdef(static::IMG_GET_VERSION, $this->getLibrary()));

            $ver = $ctx->IMG_Linked_Version()[0];

            return $this->version = \sprintf('%d.%d.%d', $ver->major, $ver->minor, $ver->patch);
        }

        return $this->version;
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
