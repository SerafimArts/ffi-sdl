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

use FFI\CCharPtr;
use FFI\CCharPtrPtr;

/**
 * @formatter:off
 * @method int IMG_Init(int $flags)
 * @method void IMG_Quit()
 * @method VersionPtr IMG_Linked_Version()
 * @method SurfacePtr IMG_LoadTyped_RW(RWopsPtr $src, int $freeSrc, string|CCharPtr $type)
 * @method SurfacePtr IMG_Load(string|CCharPtr $file)
 * @method SurfacePtr IMG_Load_RW(RWopsPtr $src, int $freeSrc)
 * @method TexturePtr IMG_LoadTexture(RendererPtr $renderer, string|CCharPtr $file)
 * @method TexturePtr IMG_LoadTexture_RW(RendererPtr $renderer, RWopsPtr $src, int $freesrc)
 * @method TexturePtr IMG_LoadTextureTyped_RW(RendererPtr $renderer, RWopsPtr $src, int $freesrc, string|CCharPtr $type)
 * @method int IMG_isICO(RWopsPtr $src)
 * @method int IMG_isCUR(RWopsPtr $src)
 * @method int IMG_isBMP(RWopsPtr $src)
 * @method int IMG_isGIF(RWopsPtr $src)
 * @method int IMG_isJPG(RWopsPtr $src)
 * @method int IMG_isLBM(RWopsPtr $src)
 * @method int IMG_isPCX(RWopsPtr $src)
 * @method int IMG_isPNG(RWopsPtr $src)
 * @method int IMG_isPNM(RWopsPtr $src)
 * @method int IMG_isSVG(RWopsPtr $src)
 * @method int IMG_isTIF(RWopsPtr $src)
 * @method int IMG_isXCF(RWopsPtr $src)
 * @method int IMG_isXPM(RWopsPtr $src)
 * @method int IMG_isXV(RWopsPtr $src)
 * @method int IMG_isWEBP(RWopsPtr $src)
 * @method SurfacePtr IMG_LoadICO_RW(RWopsPtr $src)
 * @method SurfacePtr IMG_LoadCUR_RW(RWopsPtr $src)
 * @method SurfacePtr IMG_LoadBMP_RW(RWopsPtr $src)
 * @method SurfacePtr IMG_LoadGIF_RW(RWopsPtr $src)
 * @method SurfacePtr IMG_LoadJPG_RW(RWopsPtr $src)
 * @method SurfacePtr IMG_LoadLBM_RW(RWopsPtr $src)
 * @method SurfacePtr IMG_LoadPCX_RW(RWopsPtr $src)
 * @method SurfacePtr IMG_LoadPNG_RW(RWopsPtr $src)
 * @method SurfacePtr IMG_LoadPNM_RW(RWopsPtr $src)
 * @method SurfacePtr IMG_LoadSVG_RW(RWopsPtr $src)
 * @method SurfacePtr IMG_LoadTGA_RW(RWopsPtr $src)
 * @method SurfacePtr IMG_LoadTIF_RW(RWopsPtr $src)
 * @method SurfacePtr IMG_LoadXCF_RW(RWopsPtr $src)
 * @method SurfacePtr IMG_LoadXPM_RW(RWopsPtr $src)
 * @method SurfacePtr IMG_LoadXV_RW(RWopsPtr $src)
 * @method SurfacePtr IMG_LoadWEBP_RW(RWopsPtr $src)
 * @method SurfacePtr IMG_ReadXPMFromArray(CCharPtrPtr $xpm)
 * @method int IMG_SavePNG(SurfacePtr $surface, string|CCharPtr $file)
 * @method int IMG_SavePNG_RW(SurfacePtr $surface, RWopsPtr $dst, int $freedst)
 * @method int IMG_SaveJPG(SurfacePtr $surface, string|CCharPtr $file, int $quality)
 * @method int IMG_SaveJPG_RW(SurfacePtr $surface, RWopsPtr $dst, int $freedst, int $quality)
 * @formatter:on
 */
interface SDLImageNativeApiAutocomplete
{

}
