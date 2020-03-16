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

/**
 * Interface SDLImageMethods
 */
interface SDLImageMethods
{
    /**
     * TODO Finish the description of this method
     *
     * @return SDL_VersionPtr
     */
    public function IMG_Linked_Version(): SDL_VersionPtr;

    /**
     * TODO Finish the description of this method
     *
     * @param int $flags
     * @return int
     */
    public function IMG_Init(int $flags): int;

    /**
     * TODO Finish the description of this method
     *
     * @return void
     */
    public function IMG_Quit(): void;

    /**
     * TODO Finish the description of this method
     *
     * @param SDL_RWopsPtr $src
     * @param int $freeSrc
     * @param string $type
     * @return SDL_SurfacePtr
     */
    public function IMG_LoadTyped_RW(SDL_RWopsPtr $src, int $freeSrc, string $type): SDL_SurfacePtr;

    /**
     * TODO Finish the description of this method
     *
     * @param string $file
     * @return SDL_SurfacePtr
     */
    public function IMG_Load(string $file): SDL_SurfacePtr;

    /**
     * TODO Finish the description of this method
     *
     * @param SDL_RWopsPtr $src
     * @param int $freeSrc
     * @return SDL_SurfacePtr
     */
    public function IMG_Load_RW(SDL_RWopsPtr $src, int $freeSrc): SDL_SurfacePtr;

    /**
     * TODO Finish the description of this method
     *
     * @param SDL_RendererPtr $renderer
     * @param string $file
     * @return SDL_TexturePtr
     */
    public function IMG_LoadTexture(SDL_RendererPtr $renderer, string $file): SDL_TexturePtr;

    /**
     * TODO Finish the description of this method
     *
     * @param SDL_RendererPtr $renderer
     * @param SDL_RWopsPtr $src
     * @param int $freeSrc
     * @return SDL_TexturePtr
     */
    public function IMG_LoadTexture_RW(SDL_RendererPtr $renderer, SDL_RWopsPtr $src, int $freeSrc): SDL_TexturePtr;

    /**
     * TODO Finish the description of this method
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
     * TODO Finish the description of this method
     *
     * @param SDL_RWopsPtr $src
     * @return int
     */
    public function IMG_isICO(SDL_RWopsPtr $src): int;

    /**
     * TODO Finish the description of this method
     *
     * @param SDL_RWopsPtr $src
     * @return int
     */
    public function IMG_isCUR(SDL_RWopsPtr $src): int;

    /**
     * TODO Finish the description of this method
     *
     * @param SDL_RWopsPtr $src
     * @return int
     */
    public function IMG_isBMP(SDL_RWopsPtr $src): int;

    /**
     * TODO Finish the description of this method
     *
     * @param SDL_RWopsPtr $src
     * @return int
     */
    public function IMG_isGIF(SDL_RWopsPtr $src): int;

    /**
     * TODO Finish the description of this method
     *
     * @param SDL_RWopsPtr $src
     * @return int
     */
    public function IMG_isJPG(SDL_RWopsPtr $src): int;

    /**
     * TODO Finish the description of this method
     *
     * @param SDL_RWopsPtr $src
     * @return int
     */
    public function IMG_isLBM(SDL_RWopsPtr $src): int;

    /**
     * TODO Finish the description of this method
     *
     * @param SDL_RWopsPtr $src
     * @return int
     */
    public function IMG_isPCX(SDL_RWopsPtr $src): int;

    /**
     * TODO Finish the description of this method
     *
     * @param SDL_RWopsPtr $src
     * @return int
     */
    public function IMG_isPNG(SDL_RWopsPtr $src): int;

    /**
     * TODO Finish the description of this method
     *
     * @param SDL_RWopsPtr $src
     * @return int
     */
    public function IMG_isPNM(SDL_RWopsPtr $src): int;

    /**
     * TODO Finish the description of this method
     *
     * @param SDL_RWopsPtr $src
     * @return int
     */
    public function IMG_isSVG(SDL_RWopsPtr $src): int;

    /**
     * TODO Finish the description of this method
     *
     * @param SDL_RWopsPtr $src
     * @return int
     */
    public function IMG_isTIF(SDL_RWopsPtr $src): int;

    /**
     * TODO Finish the description of this method
     *
     * @param SDL_RWopsPtr $src
     * @return int
     */
    public function IMG_isXCF(SDL_RWopsPtr $src): int;

    /**
     * TODO Finish the description of this method
     *
     * @param SDL_RWopsPtr $src
     * @return int
     */
    public function IMG_isXPM(SDL_RWopsPtr $src): int;

    /**
     * TODO Finish the description of this method
     *
     * @param SDL_RWopsPtr $src
     * @return int
     */
    public function IMG_isXV(SDL_RWopsPtr $src): int;

    /**
     * TODO Finish the description of this method
     *
     * @param SDL_RWopsPtr $src
     * @return int
     */
    public function IMG_isWEBP(SDL_RWopsPtr $src): int;

    /**
     * TODO Finish the description of this method
     *
     * @param SDL_RWopsPtr $src
     * @return SDL_SurfacePtr
     */
    public function IMG_LoadICO_RW(SDL_RWopsPtr $src): SDL_SurfacePtr;

    /**
     * TODO Finish the description of this method
     *
     * @param SDL_RWopsPtr $src
     * @return SDL_SurfacePtr
     */
    public function IMG_LoadCUR_RW(SDL_RWopsPtr $src): SDL_SurfacePtr;

    /**
     * TODO Finish the description of this method
     *
     * @param SDL_RWopsPtr $src
     * @return SDL_SurfacePtr
     */
    public function IMG_LoadBMP_RW(SDL_RWopsPtr $src): SDL_SurfacePtr;

    /**
     * TODO Finish the description of this method
     *
     * @param SDL_RWopsPtr $src
     * @return SDL_SurfacePtr
     */
    public function IMG_LoadGIF_RW(SDL_RWopsPtr $src): SDL_SurfacePtr;

    /**
     * TODO Finish the description of this method
     *
     * @param SDL_RWopsPtr $src
     * @return SDL_SurfacePtr
     */
    public function IMG_LoadJPG_RW(SDL_RWopsPtr $src): SDL_SurfacePtr;

    /**
     * TODO Finish the description of this method
     *
     * @param SDL_RWopsPtr $src
     * @return SDL_SurfacePtr
     */
    public function IMG_LoadLBM_RW(SDL_RWopsPtr $src): SDL_SurfacePtr;

    /**
     * TODO Finish the description of this method
     *
     * @param SDL_RWopsPtr $src
     * @return SDL_SurfacePtr
     */
    public function IMG_LoadPCX_RW(SDL_RWopsPtr $src): SDL_SurfacePtr;

    /**
     * TODO Finish the description of this method
     *
     * @param SDL_RWopsPtr $src
     * @return SDL_SurfacePtr
     */
    public function IMG_LoadPNG_RW(SDL_RWopsPtr $src): SDL_SurfacePtr;

    /**
     * TODO Finish the description of this method
     *
     * @param SDL_RWopsPtr $src
     * @return SDL_SurfacePtr
     */
    public function IMG_LoadPNM_RW(SDL_RWopsPtr $src): SDL_SurfacePtr;

    /**
     * TODO Finish the description of this method
     *
     * @param SDL_RWopsPtr $src
     * @return SDL_SurfacePtr
     */
    public function IMG_LoadSVG_RW(SDL_RWopsPtr $src): SDL_SurfacePtr;

    /**
     * TODO Finish the description of this method
     *
     * @param SDL_RWopsPtr $src
     * @return SDL_SurfacePtr
     */
    public function IMG_LoadTGA_RW(SDL_RWopsPtr $src): SDL_SurfacePtr;

    /**
     * TODO Finish the description of this method
     *
     * @param SDL_RWopsPtr $src
     * @return SDL_SurfacePtr
     */
    public function IMG_LoadTIF_RW(SDL_RWopsPtr $src): SDL_SurfacePtr;

    /**
     * TODO Finish the description of this method
     *
     * @param SDL_RWopsPtr $src
     * @return SDL_SurfacePtr
     */
    public function IMG_LoadXCF_RW(SDL_RWopsPtr $src): SDL_SurfacePtr;

    /**
     * TODO Finish the description of this method
     *
     * @param SDL_RWopsPtr $src
     * @return SDL_SurfacePtr
     */
    public function IMG_LoadXPM_RW(SDL_RWopsPtr $src): SDL_SurfacePtr;

    /**
     * TODO Finish the description of this method
     *
     * @param SDL_RWopsPtr $src
     * @return SDL_SurfacePtr
     */
    public function IMG_LoadXV_RW(SDL_RWopsPtr $src): SDL_SurfacePtr;

    /**
     * TODO Finish the description of this method
     *
     * @param SDL_RWopsPtr $src
     * @return SDL_SurfacePtr
     */
    public function IMG_LoadWEBP_RW(SDL_RWopsPtr $src): SDL_SurfacePtr;

    /**
     * TODO Finish the description of this method
     *
     * @param string|CCharPtrPtr $xpm
     * @return SDL_SurfacePtr
     */
    public function IMG_ReadXPMFromArray(CCharPtrPtr $xpm): SDL_SurfacePtr;

    /**
     * TODO Finish the description of this method
     *
     * @param SDL_SurfacePtr $surface
     * @param string $file
     * @return int
     */
    public function IMG_SavePNG(SDL_SurfacePtr $surface, string $file): int;

    /**
     * TODO Finish the description of this method
     *
     * @param SDL_SurfacePtr $surface
     * @param SDL_RWopsPtr $dst
     * @param int $freedst
     * @return int
     */
    public function IMG_SavePNG_RW(SDL_SurfacePtr $surface, SDL_RWopsPtr $dst, int $freedst): int;

    /**
     * TODO Finish the description of this method
     *
     * @param SDL_SurfacePtr $surface
     * @param string $file
     * @param int $quality
     * @return int
     */
    public function IMG_SaveJPG(SDL_SurfacePtr $surface, string $file, int $quality): int;

    /**
     * TODO Finish the description of this method
     *
     * @param SDL_SurfacePtr $surface
     * @param SDL_RWopsPtr $dst
     * @param int $freedst
     * @param int $quality
     * @return int
     */
    public function IMG_SaveJPG_RW(SDL_SurfacePtr $surface, SDL_RWopsPtr $dst, int $freedst, int $quality): int;
}
