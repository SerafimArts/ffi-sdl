<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @noinspection PhpInconsistentReturnPointsInspection
 */

declare(strict_types=1);

namespace Serafim\SDL;

use FFI\CCharPtrPtr;
use Serafim\SDL\Image\ImageType;

/**
 * An example image loading library for use with SDL
 */
interface SDLImageMethods
{
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
    public function IMG_Linked_Version(): SDL_VersionPtr;

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
    public function IMG_Init(int $flags): int;

    /**
     * Unloads libraries loaded with IMG_Init
     *
     * <code>
     *  extern void IMG_Quit(void);
     * </code>
     *
     * @return void
     */
    public function IMG_Quit(): void;

    /**
     * Load an image from an SDL data source.
     * The 'type' may be one of: "BMP", "GIF", "PNG", etc (@see ImageType).
     *
     * If the image format supports a transparent pixel, SDL will set the
     * colorkey for the surface.  You can enable RLE acceleration on the
     * surface afterwards by calling:
     * SDL_SetColorKey(image, SDL_RLEACCEL, image->format->colorkey);
     *
     * <code>
     *  extern SDL_Surface * IMG_LoadTyped_RW(SDL_RWops *src, int freesrc, const char *type);
     * </code>
     *
     * @param SDL_RWopsPtr $src
     * @param int $freeSrc
     * @param string $type
     * @return SDL_SurfacePtr
     */
    public function IMG_LoadTyped_RW(SDL_RWopsPtr $src, int $freeSrc, string $type): SDL_SurfacePtr;

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
     *  extern SDL_Surface * IMG_Load(const char *file);
     * </code>
     *
     * @param string $file
     * @return SDL_SurfacePtr
     */
    public function IMG_Load(string $file): SDL_SurfacePtr;

    /**
     * Load src for use as a surface. This can load all supported image formats,
     * except TGA. Using SDL_RWops is not covered here, but they enable you
     * to load from almost any source.
     *
     * <code>
     *  extern SDL_Surface * IMG_Load_RW(SDL_RWops *src, int freesrc);
     * </code>
     *
     * @param SDL_RWopsPtr $src
     * @param int $freeSrc
     * @return SDL_SurfacePtr
     */
    public function IMG_Load_RW(SDL_RWopsPtr $src, int $freeSrc): SDL_SurfacePtr;

    /**
     * Load an image directly into a render texture.
     *
     * @see SDLImageMethods::IMG_Load()
     *
     * <code>
     *  extern SDL_Texture * IMG_LoadTexture(SDL_Renderer *renderer, const char *file);
     * </code>
     *
     * @param SDL_RendererPtr $renderer
     * @param string $file
     * @return SDL_TexturePtr
     */
    public function IMG_LoadTexture(SDL_RendererPtr $renderer, string $file): SDL_TexturePtr;

    /**
     * Load an image directly into a render texture.
     *
     * @see SDLImageMethods::IMG_Load_RW()
     *
     * <code>
     *  extern SDL_Texture * IMG_LoadTexture_RW(SDL_Renderer *renderer, SDL_RWops *src, int freesrc);
     * </code>
     *
     * @param SDL_RendererPtr $renderer
     * @param SDL_RWopsPtr $src
     * @param int $freeSrc
     * @return SDL_TexturePtr
     */
    public function IMG_LoadTexture_RW(SDL_RendererPtr $renderer, SDL_RWopsPtr $src, int $freeSrc): SDL_TexturePtr;

    /**
     * Load an image directly into a render texture.
     *
     * @see SDLImageMethods::IMG_LoadTyped_RW()
     *
     * <code>
     *  extern SDL_Texture * IMG_LoadTextureTyped_RW(SDL_Renderer *renderer, SDL_RWops *src, int freesrc, const char *type);
     * </code>
     *
     * @param SDL_RendererPtr $renderer
     * @param SDL_RWopsPtr $src
     * @param int $freeSrc
     * @param string $type
     * @return SDL_TexturePtr
     */
    public function IMG_LoadTextureTyped_RW(
        SDL_RendererPtr $renderer,
        SDL_RWopsPtr $src,
        int $freeSrc,
        string $type
    ): SDL_TexturePtr;


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
    public function IMG_isICO(SDL_RWopsPtr $src): int;

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
    public function IMG_isCUR(SDL_RWopsPtr $src): int;

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
    public function IMG_isBMP(SDL_RWopsPtr $src): int;

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
    public function IMG_isGIF(SDL_RWopsPtr $src): int;

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
    public function IMG_isJPG(SDL_RWopsPtr $src): int;

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
    public function IMG_isLBM(SDL_RWopsPtr $src): int;

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
    public function IMG_isPCX(SDL_RWopsPtr $src): int;

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
    public function IMG_isPNG(SDL_RWopsPtr $src): int;

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
    public function IMG_isPNM(SDL_RWopsPtr $src): int;

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
    public function IMG_isSVG(SDL_RWopsPtr $src): int;

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
    public function IMG_isTIF(SDL_RWopsPtr $src): int;

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
    public function IMG_isXCF(SDL_RWopsPtr $src): int;

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
    public function IMG_isXPM(SDL_RWopsPtr $src): int;

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
    public function IMG_isXV(SDL_RWopsPtr $src): int;

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
    public function IMG_isWEBP(SDL_RWopsPtr $src): int;

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface * IMG_LoadICO_RW(SDL_RWops *src);
     * </code>
     *
     * @param SDL_RWopsPtr $src
     * @return SDL_SurfacePtr
     */
    public function IMG_LoadICO_RW(SDL_RWopsPtr $src): SDL_SurfacePtr;

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface * IMG_LoadCUR_RW(SDL_RWops *src);
     * </code>
     *
     * @param SDL_RWopsPtr $src
     * @return SDL_SurfacePtr
     */
    public function IMG_LoadCUR_RW(SDL_RWopsPtr $src): SDL_SurfacePtr;

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface * IMG_LoadBMP_RW(SDL_RWops *src);
     * </code>
     *
     * @param SDL_RWopsPtr $src
     * @return SDL_SurfacePtr
     */
    public function IMG_LoadBMP_RW(SDL_RWopsPtr $src): SDL_SurfacePtr;

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface * IMG_LoadGIF_RW(SDL_RWops *src);
     * </code>
     *
     * @param SDL_RWopsPtr $src
     * @return SDL_SurfacePtr
     */
    public function IMG_LoadGIF_RW(SDL_RWopsPtr $src): SDL_SurfacePtr;

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface * IMG_LoadJPG_RW(SDL_RWops *src);
     * </code>
     *
     * @param SDL_RWopsPtr $src
     * @return SDL_SurfacePtr
     */
    public function IMG_LoadJPG_RW(SDL_RWopsPtr $src): SDL_SurfacePtr;

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface * IMG_LoadLBM_RW(SDL_RWops *src);
     * </code>
     *
     * @param SDL_RWopsPtr $src
     * @return SDL_SurfacePtr
     */
    public function IMG_LoadLBM_RW(SDL_RWopsPtr $src): SDL_SurfacePtr;

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface * IMG_LoadPCX_RW(SDL_RWops *src);
     * </code>
     *
     * @param SDL_RWopsPtr $src
     * @return SDL_SurfacePtr
     */
    public function IMG_LoadPCX_RW(SDL_RWopsPtr $src): SDL_SurfacePtr;

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface * IMG_LoadPNG_RW(SDL_RWops *src);
     * </code>
     *
     * @param SDL_RWopsPtr $src
     * @return SDL_SurfacePtr
     */
    public function IMG_LoadPNG_RW(SDL_RWopsPtr $src): SDL_SurfacePtr;

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface * IMG_LoadPNM_RW(SDL_RWops *src);
     * </code>
     *
     * @param SDL_RWopsPtr $src
     * @return SDL_SurfacePtr
     */
    public function IMG_LoadPNM_RW(SDL_RWopsPtr $src): SDL_SurfacePtr;

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface * IMG_LoadSVG_RW(SDL_RWops *src);
     * </code>
     *
     * @param SDL_RWopsPtr $src
     * @return SDL_SurfacePtr
     */
    public function IMG_LoadSVG_RW(SDL_RWopsPtr $src): SDL_SurfacePtr;

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface * IMG_LoadTGA_RW(SDL_RWops *src);
     * </code>
     *
     * @param SDL_RWopsPtr $src
     * @return SDL_SurfacePtr
     */
    public function IMG_LoadTGA_RW(SDL_RWopsPtr $src): SDL_SurfacePtr;

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface * IMG_LoadTIF_RW(SDL_RWops *src);
     * </code>
     *
     * @param SDL_RWopsPtr $src
     * @return SDL_SurfacePtr
     */
    public function IMG_LoadTIF_RW(SDL_RWopsPtr $src): SDL_SurfacePtr;

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface * IMG_LoadXCF_RW(SDL_RWops *src);
     * </code>
     *
     * @param SDL_RWopsPtr $src
     * @return SDL_SurfacePtr
     */
    public function IMG_LoadXCF_RW(SDL_RWopsPtr $src): SDL_SurfacePtr;

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface * IMG_LoadXPM_RW(SDL_RWops *src);
     * </code>
     *
     * @param SDL_RWopsPtr $src
     * @return SDL_SurfacePtr
     */
    public function IMG_LoadXPM_RW(SDL_RWopsPtr $src): SDL_SurfacePtr;

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface * IMG_LoadXV_RW(SDL_RWops *src);
     * </code>
     *
     * @param SDL_RWopsPtr $src
     * @return SDL_SurfacePtr
     */
    public function IMG_LoadXV_RW(SDL_RWopsPtr $src): SDL_SurfacePtr;

    /**
     * Individual loading function
     *
     * <code>
     *  extern SDL_Surface * IMG_LoadWEBP_RW(SDL_RWops *src);
     * </code>
     *
     * @param SDL_RWopsPtr $src
     * @return SDL_SurfacePtr
     */
    public function IMG_LoadWEBP_RW(SDL_RWopsPtr $src): SDL_SurfacePtr;

    /**
     * Load xpm as a XPM image for use as a surface, if XPM support is compiled
     * into the SDL_image library.
     *
     * <code>
     *  extern SDL_Surface * IMG_ReadXPMFromArray(char **xpm);
     * </code>
     *
     * @param string|CCharPtrPtr $xpm
     * @return SDL_SurfacePtr
     */
    public function IMG_ReadXPMFromArray(CCharPtrPtr $xpm): SDL_SurfacePtr;

    /**
     * Individual saving function
     *
     * <code>
     *  extern int IMG_SavePNG(SDL_Surface *surface, const char *file);
     * </code>
     *
     * @param SDL_SurfacePtr $surface
     * @param string $file
     * @return int
     */
    public function IMG_SavePNG(SDL_SurfacePtr $surface, string $file): int;

    /**
     * Individual saving function
     *
     * <code>
     *  extern int IMG_SavePNG_RW(SDL_Surface *surface, SDL_RWops *dst, int freedst);
     * </code>
     *
     * @param SDL_SurfacePtr $surface
     * @param SDL_RWopsPtr $dst
     * @param int $freedst
     * @return int
     */
    public function IMG_SavePNG_RW(SDL_SurfacePtr $surface, SDL_RWopsPtr $dst, int $freedst): int;

    /**
     * Individual saving function
     *
     * <code>
     *  extern int IMG_SaveJPG(SDL_Surface *surface, const char *file, int quality);
     * </code>
     *
     * @param SDL_SurfacePtr $surface
     * @param string $file
     * @param int $quality
     * @return int
     */
    public function IMG_SaveJPG(SDL_SurfacePtr $surface, string $file, int $quality): int;

    /**
     * Individual saving function
     *
     * <code>
     *  extern int IMG_SaveJPG_RW(SDL_Surface *surface, SDL_RWops *dst, int freedst, int quality);
     * </code>
     *
     * @param SDL_SurfacePtr $surface
     * @param SDL_RWopsPtr $dst
     * @param int $freedst
     * @param int $quality
     * @return int
     */
    public function IMG_SaveJPG_RW(SDL_SurfacePtr $surface, SDL_RWopsPtr $dst, int $freedst, int $quality): int;
}
