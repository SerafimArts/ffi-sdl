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
use FFI\CData;
use FFI\CIntPtr;
use FFI\CIntPtrPtr;
use FFI\CPtr;
use FFI\CPtrPtr;
use Serafim\SDL\Defines\InitFlagsInterface;
use Serafim\SDL\Enum\AssertStateInterface;

/**
 * @formatter:off
 * @method void SDL_SetAssertionHandler(\Closure|CData $handler, CPtr $userdata)
 * @method CData SDL_GetDefaultAssertionHandler()
 * @method CData SDL_GetAssertionHandler(CPtrPtr $puserdata)
 * @method \SDL_AssertDataPtr SDL_GetAssertionReport()
 * @method void SDL_ResetAssertionReport()
 * @method int SDL_AtomicTryLock(int|CIntPtr $lock)
 * @method void SDL_AtomicLock(int|CIntPtr $lock)
 * @method void SDL_AtomicUnlock(int|CIntPtr $lock)
 * @method void SDL_MemoryBarrierReleaseFunction()
 * @method void SDL_MemoryBarrierAcquireFunction()
 * @method int SDL_AtomicCAS(\SDL_atomic_tPtr|CPtr $a, int $oldval, int $newval)
 * @method int SDL_AtomicCASPtr(CPtrPtr $a, CPtr $oldval, CPtr $newval)
 * @method int SDL_AtomicSet(\SDL_atomic_tPtr $a, int $v)
 * @method int SDL_AtomicGet(\SDL_atomic_tPtr $a)
 * @method int SDL_AtomicAdd(\SDL_atomic_tPtr $a, int $v)
 * @method void SDL_AtomicSetPtr(CPtrPtr $a, CPtr $v)
 * @method void SDL_AtomicGetPtr(CPtrPtr $a)
 * @method int SDL_SetError(string|CCharPtr $fmt)
 * @method string|CCharPtr SDL_GetError()
 * @method void SDL_ClearError()
 * @method int SDL_Error(int|CIntPtr $code)
 * @method \SDL_mutexPtr SDL_CreateMutex()
 * @method int SDL_LockMutex(\SDL_mutexPtr $mutex)
 * @method int SDL_TryLockMutex(\SDL_mutexPtr $mutex)
 * @method int SDL_UnlockMutex(\SDL_mutexPtr $mutex)
 * @method void SDL_DestroyMutex(\SDL_mutexPtr $mutex)
 * @method \SDL_semPtr SDL_CreateSemaphore(int $initial_value)
 * @method void SDL_DestroySemaphore(\SDL_semPtr $sem)
 * @method int SDL_SemWait(\SDL_semPtr $sem)
 * @method int SDL_SemTryWait(\SDL_semPtr $sem)
 * @method int SDL_SemWaitTimeout(\SDL_semPtr $sem, int $ms)
 * @method int SDL_SemPost(\SDL_semPtr $sem)
 * @method int SDL_SemValue(\SDL_semPtr $sem)
 * @method \SDL_condPtr SDL_CreateCond()
 * @method void SDL_DestroyCond(\SDL_condPtr $cond)
 * @method int SDL_CondSignal(\SDL_condPtr $cond)
 * @method int SDL_CondBroadcast(\SDL_condPtr $cond)
 * @method int SDL_CondWait(\SDL_condPtr $cond, \SDL_mutexPtr $mutex)
 * @method int SDL_CondWaitTimeout(\SDL_condPtr $cond, \SDL_mutexPtr $mutex, int $ms)
 * @method \SDL_ThreadPtr SDL_CreateThread(\Closure $fn, string|CCharPtr $name, CPtr $data, \Closure $pfnBeginThread, \Closure $pfnEndThread)
 * @method \SDL_ThreadPtr SDL_CreateThreadWithStackSize(\Closure $fn, string|CCharPtr $name, int $stacksize, CPtr $data, \Closure $pfnBeginThread, \Closure $pfnEndThread)
 * @method string|CCharPtr SDL_GetThreadName(\SDL_ThreadPtr $thread)
 * @method int SDL_ThreadID()
 * @method int SDL_GetThreadID(\SDL_ThreadPtr $thread)
 * @method int SDL_SetThreadPriority(int $priority)
 * @method void SDL_WaitThread(\SDL_ThreadPtr $thread, int|CIntPtr $status)
 * @method void SDL_DetachThread(\SDL_ThreadPtr $thread)
 * @method int SDL_TLSCreate()
 * @method CPtr SDL_TLSGet(int $id)
 * @method int SDL_TLSSet(int $id, CPtr $value, \Closure $destructor)
 * @method \SDL_RWopsPtr SDL_RWFromFile(string|CCharPtr $file, string|CCharPtr $mode)
 * @method \SDL_RWopsPtr SDL_RWFromFP(CPtr $fp, int $autoclose)
 * @method \SDL_RWopsPtr SDL_RWFromMem(CPtr $mem, int $size)
 * @method \SDL_RWopsPtr SDL_RWFromConstMem(CPtr $mem, int $size)
 * @method \SDL_RWopsPtr SDL_AllocRW()
 * @method void SDL_FreeRW(\SDL_RWopsPtr $area)
 * @method int SDL_RWsize(\SDL_RWopsPtr $context)
 * @method int SDL_RWseek(\SDL_RWopsPtr $context, int $offset, int $whence)
 * @method int SDL_RWtell(\SDL_RWopsPtr $context)
 * @method int SDL_RWread(\SDL_RWopsPtr $context, CPtr $ptr, int $size, int $maxnum)
 * @method int SDL_RWwrite(\SDL_RWopsPtr $context, CPtr $ptr, int $size, int $num)
 * @method int SDL_RWclose(\SDL_RWopsPtr $context)
 * @method void SDL_LoadFile_RW(\SDL_RWopsPtr $src, int $datasize, int $freesrc)
 * @method void SDL_LoadFile(string $file, int $datasize)
 * @method int SDL_ReadU8(\SDL_RWopsPtr $src)
 * @method int SDL_ReadLE16(\SDL_RWopsPtr $src)
 * @method int SDL_ReadBE16(\SDL_RWopsPtr $src)
 * @method int SDL_ReadLE32(\SDL_RWopsPtr $src)
 * @method int SDL_ReadBE32(\SDL_RWopsPtr $src)
 * @method int SDL_ReadLE64(\SDL_RWopsPtr $src)
 * @method int SDL_ReadBE64(\SDL_RWopsPtr $src)
 * @method int SDL_WriteU8(\SDL_RWopsPtr $dst, int $value)
 * @method int SDL_WriteLE16(\SDL_RWopsPtr $dst, int $value)
 * @method int SDL_WriteBE16(\SDL_RWopsPtr $dst, int $value)
 * @method int SDL_WriteLE32(\SDL_RWopsPtr $dst, int $value)
 * @method int SDL_WriteBE32(\SDL_RWopsPtr $dst, int $value)
 * @method int SDL_WriteLE64(\SDL_RWopsPtr $dst, int $value)
 * @method int SDL_WriteBE64(\SDL_RWopsPtr $dst, int $value)
 * @method int SDL_GetNumAudioDrivers()
 * @method string SDL_GetAudioDriver(int $index)
 * @method int SDL_AudioInit(string $driver_name)
 * @method void SDL_AudioQuit()
 * @method string SDL_GetCurrentAudioDriver()
 * @method int SDL_OpenAudio(\SDL_AudioSpecPtr $desired, \SDL_AudioSpecPtr $obtained)
 * @method int SDL_GetNumAudioDevices(int $iscapture)
 * @method string SDL_GetAudioDeviceName(int $index, int $iscapture)
 * @method int|CIntPtr SDL_OpenAudioDevice(string $device, int $iscapture, \SDL_AudioSpecPtr $desired, \SDL_AudioSpecPtr $obtained, int $allowed_changes)
 * @method int|CIntPtr SDL_GetAudioStatus()
 * @method int|CIntPtr SDL_GetAudioDeviceStatus(int|CIntPtr $dev)
 * @method void SDL_PauseAudio(int $pause_on)
 * @method void SDL_PauseAudioDevice(int|CIntPtr $dev, int $pause_on)
 * @method \SDL_AudioSpecPtr SDL_LoadWAV_RW(\SDL_RWopsPtr $src, int $freesrc, \SDL_AudioSpecPtr $spec, int|CIntPtrPtr $audio_buf, int|CIntPtr $audio_len)
 * @method void SDL_FreeWAV(int $audio_buf)
 * @method int SDL_BuildAudioCVT(\SDL_AudioCVTPtr $cvt, int|int $src_format, int $src_channels, int $src_rate, int|int $dst_format, int $dst_channels, int $dst_rate)
 * @method int SDL_ConvertAudio(\SDL_AudioCVTPtr $cvt)
 * @method \SDL_AudioStreamPtr SDL_NewAudioStream(int|int $src_format, int $src_channels, int $src_rate, int|int $dst_format, int $dst_channels, int $dst_rate)
 * @method int SDL_AudioStreamPut(\SDL_AudioStreamPtr $stream, CPtr $buf, int $len)
 * @method int SDL_AudioStreamGet(\SDL_AudioStreamPtr $stream, CPtr $buf, int $len)
 * @method int SDL_AudioStreamAvailable(\SDL_AudioStreamPtr $stream)
 * @method int SDL_AudioStreamFlush(\SDL_AudioStreamPtr $stream)
 * @method void SDL_AudioStreamClear(\SDL_AudioStreamPtr $stream)
 * @method void SDL_FreeAudioStream(\SDL_AudioStreamPtr $stream)
 * @method void SDL_MixAudio(int $dst, int $src, int $len, int $volume)
 * @method void SDL_MixAudioFormat(int $dst, int $src, int|int $format, int $len, int $volume)
 * @method int SDL_QueueAudio(int|CIntPtr $dev, CPtr $data, int $len)
 * @method int SDL_DequeueAudio(int|CIntPtr $dev, CPtr $data, int $len)
 * @method int SDL_GetQueuedAudioSize(int|CIntPtr $dev)
 * @method void SDL_ClearQueuedAudio(int|CIntPtr $dev)
 * @method void SDL_LockAudio()
 * @method void SDL_LockAudioDevice(int|CIntPtr $dev)
 * @method void SDL_UnlockAudio()
 * @method void SDL_UnlockAudioDevice(int|CIntPtr $dev)
 * @method void SDL_CloseAudio()
 * @method void SDL_CloseAudioDevice(int|CIntPtr $dev)
 * @method int SDL_SetClipboardText(string $text)
 * @method string SDL_GetClipboardText()
 * @method int SDL_HasClipboardText()
 * @method int SDL_GetCPUCount()
 * @method int SDL_GetCPUCacheLineSize()
 * @method int SDL_HasRDTSC()
 * @method int SDL_HasAltiVec()
 * @method int SDL_HasMMX()
 * @method int SDL_Has3DNow()
 * @method int SDL_HasSSE()
 * @method int SDL_HasSSE2()
 * @method int SDL_HasSSE3()
 * @method int SDL_HasSSE41()
 * @method int SDL_HasSSE42()
 * @method int SDL_HasAVX()
 * @method int SDL_HasAVX2()
 * @method int SDL_HasAVX512F()
 * @method int SDL_HasNEON()
 * @method int SDL_GetSystemRAM()
 * @method int SDL_SIMDGetAlignment()
 * @method void SDL_SIMDAlloc(int $len)
 * @method void SDL_SIMDFree(CPtr $ptr)
 * @method string SDL_GetPixelFormatName(int $format)
 * @method int SDL_PixelFormatEnumToMasks(int $format, int $bpp, int $Rmask, int $Gmask, int $Bmask, int $Amask)
 * @method int SDL_MasksToPixelFormatEnum(int $bpp, int $Rmask, int $Gmask, int $Bmask, int $Amask)
 * @method \SDL_PixelFormatPtr SDL_AllocFormat(int $pixel_format)
 * @method void SDL_FreeFormat(\SDL_PixelFormatPtr $format)
 * @method \SDL_PalettePtr SDL_AllocPalette(int $ncolors)
 * @method int SDL_SetPixelFormatPalette(\SDL_PixelFormatPtr $format, \SDL_PalettePtr $palette)
 * @method int SDL_SetPaletteColors(\SDL_PalettePtr $palette, \SDL_ColorPtr $colors, int $firstcolor, int $ncolors)
 * @method void SDL_FreePalette(\SDL_PalettePtr $palette)
 * @method int SDL_MapRGB(\SDL_PixelFormatPtr $format, int $r, int $g, int $b)
 * @method int SDL_MapRGBA(\SDL_PixelFormatPtr $format, int $r, int $g, int $b, int $a)
 * @method void SDL_GetRGB(int $pixel, \SDL_PixelFormatPtr $format, int $r, int $g, int $b)
 * @method void SDL_GetRGBA(int $pixel, \SDL_PixelFormatPtr $format, int $r, int $g, int $b, int $a)
 * @method void SDL_CalculateGammaRamp(float $gamma, int $ramp)
 * @method int SDL_HasIntersection(\SDL_RectPtr $A, \SDL_RectPtr $B)
 * @method int SDL_IntersectRect(\SDL_RectPtr $A, \SDL_RectPtr $B, \SDL_RectPtr $result)
 * @method void SDL_UnionRect(\SDL_RectPtr $A, \SDL_RectPtr $B, \SDL_RectPtr $result)
 * @method int SDL_EnclosePoints(int $points, int $count, \SDL_RectPtr $clip, \SDL_RectPtr $result)
 * @method int SDL_IntersectRectAndLine(\SDL_RectPtr $rect, int $X1, int $Y1, int $X2, int $Y2)
 * @method int|CIntPtr SDL_ComposeCustomBlendMode(int|CIntPtr $srcColorFactor, int|CIntPtr $dstColorFactor, int|CIntPtr $colorOperation, int|CIntPtr $srcAlphaFactor, int|CIntPtr $dstAlphaFactor, int|CIntPtr $alphaOperation)
 * @method \SDL_SurfacePtr SDL_CreateRGBSurface(int $flags, int $width, int $height, int $depth, int $Rmask, int $Gmask, int $Bmask, int $Amask)
 * @method \SDL_SurfacePtr SDL_CreateRGBSurfaceWithFormat(int $flags, int $width, int $height, int $depth, int $format)
 * @method \SDL_SurfacePtr SDL_CreateRGBSurfaceFrom(CPtr $pixels, int $width, int $height, int $depth, int $pitch, int $Rmask, int $Gmask, int $Bmask, int $Amask)
 * @method \SDL_SurfacePtr SDL_CreateRGBSurfaceWithFormatFrom(CPtr $pixels, int $width, int $height, int $depth, int $pitch, int $format)
 * @method void SDL_FreeSurface(\SDL_SurfacePtr $surface)
 * @method int SDL_SetSurfacePalette(\SDL_SurfacePtr $surface, \SDL_PalettePtr $palette)
 * @method int SDL_LockSurface(\SDL_SurfacePtr $surface)
 * @method void SDL_UnlockSurface(\SDL_SurfacePtr $surface)
 * @method \SDL_SurfacePtr SDL_LoadBMP_RW(\SDL_RWopsPtr $src, int $freesrc)
 * @method int SDL_SaveBMP_RW(\SDL_SurfacePtr $surface, \SDL_RWopsPtr $dst, int $freedst)
 * @method int SDL_SetSurfaceRLE(\SDL_SurfacePtr $surface, int $flag)
 * @method int SDL_SetColorKey(\SDL_SurfacePtr $surface, int $flag, int $key)
 * @method int SDL_HasColorKey(\SDL_SurfacePtr $surface)
 * @method int SDL_GetColorKey(\SDL_SurfacePtr $surface, int $key)
 * @method int SDL_SetSurfaceColorMod(\SDL_SurfacePtr $surface, int $r, int $g, int $b)
 * @method int SDL_GetSurfaceColorMod(\SDL_SurfacePtr $surface, int $r, int $g, int $b)
 * @method int SDL_SetSurfaceAlphaMod(\SDL_SurfacePtr $surface, int $alpha)
 * @method int SDL_GetSurfaceAlphaMod(\SDL_SurfacePtr $surface, int $alpha)
 * @method int SDL_SetSurfaceBlendMode(\SDL_SurfacePtr $surface, int|CIntPtr $blendMode)
 * @method int SDL_GetSurfaceBlendMode(\SDL_SurfacePtr $surface, int|CIntPtr $blendMode)
 * @method int SDL_SetClipRect(\SDL_SurfacePtr $surface, \SDL_RectPtr $rect)
 * @method void SDL_GetClipRect(\SDL_SurfacePtr $surface, \SDL_RectPtr $rect)
 * @method \SDL_SurfacePtr SDL_DuplicateSurface(\SDL_SurfacePtr $surface)
 * @method \SDL_SurfacePtr SDL_ConvertSurface(\SDL_SurfacePtr $src, \SDL_PixelFormatPtr $fmt, ?int $flags)
 * @method \SDL_SurfacePtr SDL_ConvertSurfaceFormat(\SDL_SurfacePtr $src, int $pixel_format, int $flags)
 * @method int SDL_ConvertPixels(int $width, int $height, int $src_format, CPtr $src, int $src_pitch, int $dst_format, CPtr $dst, int $dst_pitch)
 * @method int SDL_FillRect(\SDL_SurfacePtr $dst, \SDL_RectPtr $rect, int $color)
 * @method int SDL_FillRects(\SDL_SurfacePtr $dst, \SDL_RectPtr $rects, int $count, int $color)
 * @method int SDL_UpperBlit(\SDL_SurfacePtr $src, \SDL_RectPtr $srcrect, \SDL_SurfacePtr $dst, \SDL_RectPtr $dstrect)
 * @method int SDL_LowerBlit(\SDL_SurfacePtr $src, \SDL_RectPtr $srcrect, \SDL_SurfacePtr $dst, \SDL_RectPtr $dstrect)
 * @method int SDL_SoftStretch(\SDL_SurfacePtr $src, \SDL_RectPtr $srcrect, \SDL_SurfacePtr $dst, \SDL_RectPtr $dstrect)
 * @method int SDL_UpperBlitScaled(\SDL_SurfacePtr $src, \SDL_RectPtr $srcrect, \SDL_SurfacePtr $dst, \SDL_RectPtr $dstrect)
 * @method int SDL_LowerBlitScaled(\SDL_SurfacePtr $src, \SDL_RectPtr $srcrect, \SDL_SurfacePtr $dst, \SDL_RectPtr $dstrect)
 * @method void SDL_SetYUVConversionMode(int|CIntPtr $mode)
 * @method int|CIntPtr SDL_GetYUVConversionMode()
 * @method int|CIntPtr SDL_GetYUVConversionModeForResolution(int $width, int $height)
 * @method int SDL_GetNumVideoDrivers()
 * @method string SDL_GetVideoDriver(int $index)
 * @method int SDL_VideoInit(string $driver_name)
 * @method void SDL_VideoQuit()
 * @method string SDL_GetCurrentVideoDriver()
 * @method int SDL_GetNumVideoDisplays()
 * @method string SDL_GetDisplayName(int $displayIndex)
 * @method int SDL_GetDisplayBounds(int $displayIndex, \SDL_RectPtr $rect)
 * @method int SDL_GetDisplayUsableBounds(int $displayIndex, \SDL_RectPtr $rect)
 * @method int SDL_GetDisplayDPI(int $displayIndex, float $ddpi, float $hdpi, float $vdpi)
 * @method int|CIntPtr SDL_GetDisplayOrientation(int $displayIndex)
 * @method int SDL_GetNumDisplayModes(int $displayIndex)
 * @method int SDL_GetDisplayMode(int $displayIndex, int $modeIndex, \SDL_DisplayModePtr $mode)
 * @method int SDL_GetDesktopDisplayMode(int $displayIndex, \SDL_DisplayModePtr $mode)
 * @method int SDL_GetCurrentDisplayMode(int $displayIndex, \SDL_DisplayModePtr $mode)
 * @method \SDL_DisplayModePtr|CData SDL_GetClosestDisplayMode(int $displayIndex, \SDL_DisplayModePtr $mode, \SDL_DisplayModePtr $closest)
 * @method int SDL_GetWindowDisplayIndex(\SDL_WindowPtr $window)
 * @method int SDL_SetWindowDisplayMode(\SDL_WindowPtr $window, \SDL_DisplayModePtr $mode)
 * @method int SDL_GetWindowDisplayMode(\SDL_WindowPtr $window, \SDL_DisplayModePtr $mode)
 * @method int SDL_GetWindowPixelFormat(\SDL_WindowPtr $window)
 * @method \SDL_WindowPtr SDL_CreateWindow(string $title, int $x, int $y, int $w, int $h, int $flags)
 * @method \SDL_WindowPtr SDL_CreateWindowFrom(CPtr $data)
 * @method int SDL_GetWindowID(\SDL_WindowPtr $window)
 * @method \SDL_WindowPtr SDL_GetWindowFromID(int $id)
 * @method int SDL_GetWindowFlags(\SDL_WindowPtr $window)
 * @method void SDL_SetWindowTitle(\SDL_WindowPtr $window, string $title)
 * @method string SDL_GetWindowTitle(\SDL_WindowPtr $window)
 * @method void SDL_SetWindowIcon(\SDL_WindowPtr $window, \SDL_SurfacePtr $icon)
 * @method void SDL_SetWindowData(\SDL_WindowPtr $window, string $name, CPtr $userdata)
 * @method void SDL_GetWindowData(\SDL_WindowPtr $window, string $name)
 * @method void SDL_SetWindowPosition(\SDL_WindowPtr $window, int $x, int $y)
 * @method void SDL_GetWindowPosition(\SDL_WindowPtr $window, int $x, int $y)
 * @method void SDL_SetWindowSize(\SDL_WindowPtr $window, int $w, int $h)
 * @method void SDL_GetWindowSize(\SDL_WindowPtr $window, int $w, int $h)
 * @method int SDL_GetWindowBordersSize(\SDL_WindowPtr $window, int $top, int $left, int $bottom, int $right)
 * @method void SDL_SetWindowMinimumSize(\SDL_WindowPtr $window, int $min_w, int $min_h)
 * @method void SDL_GetWindowMinimumSize(\SDL_WindowPtr $window, int $w, int $h)
 * @method void SDL_SetWindowMaximumSize(\SDL_WindowPtr $window, int $max_w, int $max_h)
 * @method void SDL_GetWindowMaximumSize(\SDL_WindowPtr $window, int $w, int $h)
 * @method void SDL_SetWindowBordered(\SDL_WindowPtr $window, int $bordered)
 * @method void SDL_SetWindowResizable(\SDL_WindowPtr $window, int $resizable)
 * @method void SDL_ShowWindow(\SDL_WindowPtr $window)
 * @method void SDL_HideWindow(\SDL_WindowPtr $window)
 * @method void SDL_RaiseWindow(\SDL_WindowPtr $window)
 * @method void SDL_MaximizeWindow(\SDL_WindowPtr $window)
 * @method void SDL_MinimizeWindow(\SDL_WindowPtr $window)
 * @method void SDL_RestoreWindow(\SDL_WindowPtr $window)
 * @method int SDL_SetWindowFullscreen(\SDL_WindowPtr $window, int $flags)
 * @method \SDL_SurfacePtr|\SDL_Surface[] SDL_GetWindowSurface(\SDL_WindowPtr $window)
 * @method int SDL_UpdateWindowSurface(\SDL_WindowPtr $window)
 * @method int SDL_UpdateWindowSurfaceRects(\SDL_WindowPtr $window, \SDL_RectPtr $rects, int $numrects)
 * @method void SDL_SetWindowGrab(\SDL_WindowPtr $window, int $grabbed)
 * @method int SDL_GetWindowGrab(\SDL_WindowPtr $window)
 * @method \SDL_WindowPtr SDL_GetGrabbedWindow()
 * @method int SDL_SetWindowBrightness(\SDL_WindowPtr $window, float $brightness)
 * @method float SDL_GetWindowBrightness(\SDL_WindowPtr $window)
 * @method int SDL_SetWindowOpacity(\SDL_WindowPtr $window, float $opacity)
 * @method int SDL_GetWindowOpacity(\SDL_WindowPtr $window, float $out_opacity)
 * @method int SDL_SetWindowModalFor(\SDL_WindowPtr $modal_window, \SDL_WindowPtr $parent_window)
 * @method int SDL_SetWindowInputFocus(\SDL_WindowPtr $window)
 * @method int SDL_SetWindowGammaRamp(\SDL_WindowPtr $window, int $red, int $green, int $blue)
 * @method int SDL_GetWindowGammaRamp(\SDL_WindowPtr $window, int $red, int $green, int $blue)
 * @method int SDL_SetWindowHitTest(\SDL_WindowPtr $window, \Closure|CData $callback, CPtr $callback_data)
 * @method void SDL_DestroyWindow(\SDL_WindowPtr $window)
 * @method int SDL_IsScreenSaverEnabled()
 * @method void SDL_EnableScreenSaver()
 * @method void SDL_DisableScreenSaver()
 * @method int SDL_GL_LoadLibrary(string $path)
 * @method void SDL_GL_GetProcAddress(string $proc)
 * @method void SDL_GL_UnloadLibrary()
 * @method int SDL_GL_ExtensionSupported(string $extension)
 * @method void SDL_GL_ResetAttributes()
 * @method int SDL_GL_SetAttribute(int $attr, int $value)
 * @method int SDL_GL_GetAttribute(int $attr, int $value)
 * @method \SDL_GLContext SDL_GL_CreateContext(\SDL_WindowPtr $window)
 * @method int SDL_GL_MakeCurrent(\SDL_WindowPtr $window, \SDL_GLContext $context)
 * @method \SDL_WindowPtr SDL_GL_GetCurrentWindow()
 * @method \SDL_GLContext SDL_GL_GetCurrentContext()
 * @method void SDL_GL_GetDrawableSize(\SDL_WindowPtr $window, int $w, int $h)
 * @method int SDL_GL_SetSwapInterval(int $interval)
 * @method int SDL_GL_GetSwapInterval()
 * @method void SDL_GL_SwapWindow(\SDL_WindowPtr $window)
 * @method void SDL_GL_DeleteContext(\SDL_GLContext $context)
 * @method \SDL_WindowPtr SDL_GetKeyboardFocus()
 * @method int SDL_GetKeyboardState(int $numkeys)
 * @method int|CIntPtr SDL_GetModState()
 * @method void SDL_SetModState(int|CIntPtr $modstate)
 * @method int|CIntPtr SDL_GetKeyFromScancode(int|CIntPtr $scancode)
 * @method int|CIntPtr SDL_GetScancodeFromKey(int|CIntPtr $key)
 * @method string SDL_GetScancodeName(int|CIntPtr $scancode)
 * @method int|CIntPtr SDL_GetScancodeFromName(string $name)
 * @method string SDL_GetKeyName(int|CIntPtr $key)
 * @method int|CIntPtr SDL_GetKeyFromName(string $name)
 * @method void SDL_StartTextInput()
 * @method int SDL_IsTextInputActive()
 * @method void SDL_StopTextInput()
 * @method void SDL_SetTextInputRect(\SDL_RectPtr $rect)
 * @method int SDL_HasScreenKeyboardSupport()
 * @method int SDL_IsScreenKeyboardShown(\SDL_WindowPtr $window)
 * @method \SDL_WindowPtr SDL_GetMouseFocus()
 * @method int SDL_GetMouseState(int $x, int $y)
 * @method int SDL_GetGlobalMouseState(int $x, int $y)
 * @method int SDL_GetRelativeMouseState(int $x, int $y)
 * @method void SDL_WarpMouseInWindow(\SDL_WindowPtr $window, int $x, int $y)
 * @method int SDL_WarpMouseGlobal(int $x, int $y)
 * @method int SDL_SetRelativeMouseMode(int $enabled)
 * @method int SDL_CaptureMouse(int $enabled)
 * @method int SDL_GetRelativeMouseMode()
 * @method \SDL_CursorPtr SDL_CreateCursor(int $data, int $mask, int $w, int $h, int $hot_x, int $hot_y)
 * @method \SDL_CursorPtr SDL_CreateColorCursor(\SDL_SurfacePtr $surface, int $hot_x, int $hot_y)
 * @method \SDL_CursorPtr SDL_CreateSystemCursor(int|CIntPtr $id)
 * @method void SDL_SetCursor(\SDL_CursorPtr $cursor)
 * @method \SDL_CursorPtr SDL_GetCursor()
 * @method \SDL_CursorPtr SDL_GetDefaultCursor()
 * @method void SDL_FreeCursor(\SDL_CursorPtr $cursor)
 * @method int SDL_ShowCursor(int $toggle)
 * @method void SDL_LockJoysticks()
 * @method void SDL_UnlockJoysticks()
 * @method int SDL_NumJoysticks()
 * @method string SDL_JoystickNameForIndex(int $device_index)
 * @method int SDL_JoystickGetDevicePlayerIndex(int $device_index)
 * @method \SDL_JoystickGUID SDL_JoystickGetDeviceGUID(int $device_index)
 * @method int SDL_JoystickGetDeviceVendor(int $device_index)
 * @method int SDL_JoystickGetDeviceProduct(int $device_index)
 * @method int SDL_JoystickGetDeviceProductVersion(int $device_index)
 * @method int|CIntPtr SDL_JoystickGetDeviceType(int $device_index)
 * @method int|CIntPtr SDL_JoystickGetDeviceInstanceID(int $device_index)
 * @method \SDL_JoystickPtr SDL_JoystickOpen(int $device_index)
 * @method \SDL_JoystickPtr SDL_JoystickFromInstanceID(int|CIntPtr $joyid)
 * @method string SDL_JoystickName(\SDL_JoystickPtr $joystick)
 * @method int SDL_JoystickGetPlayerIndex(\SDL_JoystickPtr $joystick)
 * @method \SDL_JoystickGUID SDL_JoystickGetGUID(\SDL_JoystickPtr $joystick)
 * @method int SDL_JoystickGetVendor(\SDL_JoystickPtr $joystick)
 * @method int SDL_JoystickGetProduct(\SDL_JoystickPtr $joystick)
 * @method int SDL_JoystickGetProductVersion(\SDL_JoystickPtr $joystick)
 * @method int|CIntPtr SDL_JoystickGetType(\SDL_JoystickPtr $joystick)
 * @method void SDL_JoystickGetGUIDString(\SDL_JoystickGUID $guid, string $pszGUID, int $cbGUID)
 * @method \SDL_JoystickGUID SDL_JoystickGetGUIDFromString(string $pchGUID)
 * @method int SDL_JoystickGetAttached(\SDL_JoystickPtr $joystick)
 * @method int|CIntPtr SDL_JoystickInstanceID(\SDL_JoystickPtr $joystick)
 * @method int SDL_JoystickNumAxes(\SDL_JoystickPtr $joystick)
 * @method int SDL_JoystickNumBalls(\SDL_JoystickPtr $joystick)
 * @method int SDL_JoystickNumHats(\SDL_JoystickPtr $joystick)
 * @method int SDL_JoystickNumButtons(\SDL_JoystickPtr $joystick)
 * @method void SDL_JoystickUpdate()
 * @method int SDL_JoystickEventState(int $state)
 * @method int SDL_JoystickGetAxis(\SDL_JoystickPtr $joystick, int $axis)
 * @method int SDL_JoystickGetAxisInitialState(\SDL_JoystickPtr $joystick, int $axis, int $state)
 * @method int SDL_JoystickGetHat(\SDL_JoystickPtr $joystick, int $hat)
 * @method int SDL_JoystickGetBall(\SDL_JoystickPtr $joystick, int $ball, int $dx, int $dy)
 * @method int SDL_JoystickGetButton(\SDL_JoystickPtr $joystick, int $button)
 * @method int SDL_JoystickRumble(\SDL_JoystickPtr $joystick, int $low_frequency_rumble, int $high_frequency_rumble, int $duration_ms)
 * @method void SDL_JoystickClose(\SDL_JoystickPtr $joystick)
 * @method int|CIntPtr SDL_JoystickCurrentPowerLevel(\SDL_JoystickPtr $joystick)
 * @method int SDL_GameControllerAddMappingsFromRW(\SDL_RWopsPtr $rw, int $freerw)
 * @method int SDL_GameControllerAddMapping(string $mappingString)
 * @method int SDL_GameControllerNumMappings()
 * @method string SDL_GameControllerMappingForIndex(int $mapping_index)
 * @method string SDL_GameControllerMappingForGUID(\SDL_JoystickGUID $guid)
 * @method string SDL_GameControllerMapping(\SDL_GameControllerPtr $gamecontroller)
 * @method int SDL_IsGameController(int $joystick_index)
 * @method string SDL_GameControllerNameForIndex(int $joystick_index)
 * @method string SDL_GameControllerMappingForDeviceIndex(int $joystick_index)
 * @method \SDL_GameControllerPtr SDL_GameControllerOpen(int $joystick_index)
 * @method \SDL_GameControllerPtr SDL_GameControllerFromInstanceID(int|CIntPtr $joyid)
 * @method string SDL_GameControllerName(\SDL_GameControllerPtr $gamecontroller)
 * @method int SDL_GameControllerGetPlayerIndex(\SDL_GameControllerPtr $gamecontroller)
 * @method int SDL_GameControllerGetVendor(\SDL_GameControllerPtr $gamecontroller)
 * @method int SDL_GameControllerGetProduct(\SDL_GameControllerPtr $gamecontroller)
 * @method int SDL_GameControllerGetProductVersion(\SDL_GameControllerPtr $gamecontroller)
 * @method int SDL_GameControllerGetAttached(\SDL_GameControllerPtr $gamecontroller)
 * @method \SDL_JoystickPtr SDL_GameControllerGetJoystick(\SDL_GameControllerPtr $gamecontroller)
 * @method int SDL_GameControllerEventState(int $state)
 * @method void SDL_GameControllerUpdate()
 * @method int|CIntPtr SDL_GameControllerGetAxisFromString(string $pchString)
 * @method string SDL_GameControllerGetStringForAxis(int|CIntPtr $axis)
 * @method \SDL_GameControllerButtonBind SDL_GameControllerGetBindForAxis(\SDL_GameControllerPtr $gamecontroller, int|CIntPtr $axis)
 * @method int SDL_GameControllerGetAxis(\SDL_GameControllerPtr $gamecontroller, int|CIntPtr $axis)
 * @method int|CIntPtr SDL_GameControllerGetButtonFromString(string $pchString)
 * @method string SDL_GameControllerGetStringForButton(int|CIntPtr $button)
 * @method \SDL_GameControllerButtonBind SDL_GameControllerGetBindForButton(\SDL_GameControllerPtr $gamecontroller, int|CIntPtr $button)
 * @method int SDL_GameControllerGetButton(\SDL_GameControllerPtr $gamecontroller, int|CIntPtr $button)
 * @method int SDL_GameControllerRumble(\SDL_GameControllerPtr $gamecontroller, int $low_frequency_rumble, int $high_frequency_rumble, int $duration_ms)
 * @method void SDL_GameControllerClose(\SDL_GameControllerPtr $gamecontroller)
 * @method int SDL_GetNumTouchDevices()
 * @method int|CIntPtr SDL_GetTouchDevice(int $index)
 * @method int|CIntPtr SDL_GetTouchDeviceType(int|CIntPtr $touchID)
 * @method int SDL_GetNumTouchFingers(int|CIntPtr $touchID)
 * @method \SDL_FingerPtr SDL_GetTouchFinger(int|CIntPtr $touchID, int $index)
 * @method int SDL_RecordGesture(int|CIntPtr $touchId)
 * @method int SDL_SaveAllDollarTemplates(\SDL_RWopsPtr $dst)
 * @method int SDL_SaveDollarTemplate(int|CIntPtr $gestureId, \SDL_RWopsPtr $dst)
 * @method int SDL_LoadDollarTemplates(int|CIntPtr $touchId, \SDL_RWopsPtr $src)
 * @method void SDL_PumpEvents()
 * @method int SDL_PeepEvents(\SDL_EventPtr $events, int $numevents, int $action, int $minType, int $maxType)
 * @method int SDL_HasEvent(int $type)
 * @method int SDL_HasEvents(int $minType, int $maxType)
 * @method void SDL_FlushEvent(int $type)
 * @method void SDL_FlushEvents(int $minType, int $maxType)
 * @method int SDL_PollEvent(\SDL_EventPtr $event)
 * @method int SDL_WaitEvent(\SDL_EventPtr $event)
 * @method int SDL_WaitEventTimeout(\SDL_EventPtr $event, int $timeout)
 * @method int SDL_PushEvent(\SDL_EventPtr $event)
 * @method void SDL_SetEventFilter(\SDL_EventFilterPtr $filter, CPtr $userdata)
 * @method int SDL_GetEventFilter(\SDL_EventFilterPtr $filter, CPtrPtr $userdata)
 * @method void SDL_AddEventWatch(\SDL_EventFilterPtr $filter, CPtr $userdata)
 * @method void SDL_DelEventWatch(\SDL_EventFilterPtr $filter, CPtr $userdata)
 * @method void SDL_FilterEvents(\SDL_EventFilterPtr $filter, CPtr $userdata)
 * @method int SDL_EventState(int $type, int $state)
 * @method int SDL_RegisterEvents(int $numevents)
 * @method string SDL_GetBasePath()
 * @method string SDL_GetPrefPath(string $org, string $app)
 * @method int SDL_NumHaptics()
 * @method string SDL_HapticName(int $device_index)
 * @method \SDL_HapticPtr SDL_HapticOpen(int $device_index)
 * @method int SDL_HapticOpened(int $device_index)
 * @method int SDL_HapticIndex(\SDL_HapticPtr $haptic)
 * @method int SDL_MouseIsHaptic()
 * @method \SDL_HapticPtr SDL_HapticOpenFromMouse()
 * @method int SDL_JoystickIsHaptic(\SDL_JoystickPtr $joystick)
 * @method \SDL_HapticPtr SDL_HapticOpenFromJoystick(\SDL_JoystickPtr $joystick)
 * @method void SDL_HapticClose(\SDL_HapticPtr $haptic)
 * @method int SDL_HapticNumEffects(\SDL_HapticPtr $haptic)
 * @method int SDL_HapticNumEffectsPlaying(\SDL_HapticPtr $haptic)
 * @method int SDL_HapticQuery(\SDL_HapticPtr $haptic)
 * @method int SDL_HapticNumAxes(\SDL_HapticPtr $haptic)
 * @method int SDL_HapticEffectSupported(\SDL_HapticPtr $haptic, \SDL_HapticEffectPtr $effect)
 * @method int SDL_HapticNewEffect(\SDL_HapticPtr $haptic, \SDL_HapticEffectPtr $effect)
 * @method int SDL_HapticUpdateEffect(\SDL_HapticPtr $haptic, int $effect, \SDL_HapticEffectPtr $data)
 * @method int SDL_HapticRunEffect(\SDL_HapticPtr $haptic, int $effect, int $iterations)
 * @method int SDL_HapticStopEffect(\SDL_HapticPtr $haptic, int $effect)
 * @method void SDL_HapticDestroyEffect(\SDL_HapticPtr $haptic, int $effect)
 * @method int SDL_HapticGetEffectStatus(\SDL_HapticPtr $haptic, int $effect)
 * @method int SDL_HapticSetGain(\SDL_HapticPtr $haptic, int $gain)
 * @method int SDL_HapticSetAutocenter(\SDL_HapticPtr $haptic, int $autocenter)
 * @method int SDL_HapticPause(\SDL_HapticPtr $haptic)
 * @method int SDL_HapticUnpause(\SDL_HapticPtr $haptic)
 * @method int SDL_HapticStopAll(\SDL_HapticPtr $haptic)
 * @method int SDL_HapticRumbleSupported(\SDL_HapticPtr $haptic)
 * @method int SDL_HapticRumbleInit(\SDL_HapticPtr $haptic)
 * @method int SDL_HapticRumblePlay(\SDL_HapticPtr $haptic, float $strength, int $length)
 * @method int SDL_HapticRumbleStop(\SDL_HapticPtr $haptic)
 * @method int SDL_SetHintWithPriority(string $name, string $value, int $priority)
 * @method int SDL_SetHint(string $name, string $value)
 * @method string SDL_GetHint(string $name)
 * @method int SDL_GetHintBoolean(string $name, int $default_value)
 * @method void SDL_AddHintCallback(string $name, int $callback, CPtr $userdata)
 * @method void SDL_DelHintCallback(string $name, int $callback, CPtr $userdata)
 * @method void SDL_ClearHints()
 * @method void SDL_LoadObject(string $sofile)
 * @method void SDL_LoadFunction(CPtr $handle, string $name)
 * @method void SDL_UnloadObject(CPtr $handle)
 * @method void SDL_LogSetAllPriority(\SDL_LogPriority $priority)
 * @method void SDL_LogSetPriority(int $category, \SDL_LogPriority $priority)
 * @method \SDL_LogPriority SDL_LogGetPriority(int $category)
 * @method void SDL_LogResetPriorities()
 * @method void SDL_Log(string $fmt)
 * @method void SDL_LogVerbose(int $category, string $fmt)
 * @method void SDL_LogDebug(int $category, string $fmt)
 * @method void SDL_LogInfo(int $category, string $fmt)
 * @method void SDL_LogWarn(int $category, string $fmt)
 * @method void SDL_LogError(int $category, string $fmt)
 * @method void SDL_LogCritical(int $category, string $fmt)
 * @method void SDL_LogMessage(int $category, \SDL_LogPriority $priority, string $fmt)
 * @method void SDL_LogMessageV(int $category, \SDL_LogPriority $priority, string $fmt, object $ap)
 * @method void SDL_LogGetOutputFunction(\SDL_LogOutputFunctionPtr $callback, CPtrPtr $userdata)
 * @method void SDL_LogSetOutputFunction(\SDL_LogOutputFunctionPtr $callback, CPtr $userdata)
 * @method int SDL_ShowMessageBox(\SDL_MessageBoxDataPtr $messageboxdata, int|CIntPtr $buttonid)
 * @method int SDL_ShowSimpleMessageBox(int $flags, string|CData $title, string|CData $message, ?\SDL_Window|?CData $window)
 * @method int SDL_GetPowerInfo(int $secs, int $pct)
 * @method int SDL_GetNumRenderDrivers()
 * @method int SDL_GetRenderDriverInfo(int $index, \SDL_RendererInfoPtr $info)
 * @method int SDL_CreateWindowAndRenderer(int $width, int $height, int $window_flags, \SDL_WindowPtrPtr $window, \SDL_RendererPtrPtr $renderer)
 * @method \SDL_RendererPtr SDL_CreateRenderer(\SDL_WindowPtr $window, int $index, int $flags)
 * @method \SDL_RendererPtr SDL_CreateSoftwareRenderer(\SDL_SurfacePtr $surface)
 * @method \SDL_RendererPtr SDL_GetRenderer(\SDL_WindowPtr $window)
 * @method int SDL_GetRendererInfo(\SDL_RendererPtr $renderer, \SDL_RendererInfoPtr $info)
 * @method int SDL_GetRendererOutputSize(\SDL_RendererPtr $renderer, int $w, int $h)
 * @method \SDL_TexturePtr SDL_CreateTexture(\SDL_RendererPtr $renderer, int $format, int $access, int $w, int $h)
 * @method \SDL_TexturePtr SDL_CreateTextureFromSurface(\SDL_RendererPtr $renderer, \SDL_SurfacePtr $surface)
 * @method int SDL_QueryTexture(\SDL_TexturePtr $texture, int $format, int $access, int $w, int $h)
 * @method int SDL_SetTextureColorMod(\SDL_TexturePtr $texture, int $r, int $g, int $b)
 * @method int SDL_GetTextureColorMod(\SDL_TexturePtr $texture, int $r, int $g, int $b)
 * @method int SDL_SetTextureAlphaMod(\SDL_TexturePtr $texture, int $alpha)
 * @method int SDL_GetTextureAlphaMod(\SDL_TexturePtr $texture, int $alpha)
 * @method int SDL_SetTextureBlendMode(\SDL_TexturePtr $texture, int|CIntPtr $blendMode)
 * @method int SDL_GetTextureBlendMode(\SDL_TexturePtr $texture, int|CIntPtr $blendMode)
 * @method int SDL_UpdateTexture(\SDL_TexturePtr $texture, \SDL_RectPtr $rect, CPtr $pixels, int $pitch)
 * @method int SDL_UpdateYUVTexture(\SDL_TexturePtr $texture, \SDL_RectPtr $rect, int $Yplane, int $Ypitch, int $Uplane, int $Upitch, int $Vplane, int $Vpitch)
 * @method int SDL_LockTexture(\SDL_TexturePtr $texture, \SDL_RectPtr $rect, CPtrPtr $pixels, int $pitch)
 * @method void SDL_UnlockTexture(\SDL_TexturePtr $texture)
 * @method int SDL_RenderTargetSupported(\SDL_RendererPtr $renderer)
 * @method int SDL_SetRenderTarget(\SDL_RendererPtr $renderer, \SDL_TexturePtr $texture)
 * @method \SDL_TexturePtr SDL_GetRenderTarget(\SDL_RendererPtr $renderer)
 * @method int SDL_RenderSetLogicalSize(\SDL_RendererPtr $renderer, int $w, int $h)
 * @method void SDL_RenderGetLogicalSize(\SDL_RendererPtr $renderer, int $w, int $h)
 * @method int SDL_RenderSetIntegerScale(\SDL_RendererPtr $renderer, int $enable)
 * @method int SDL_RenderGetIntegerScale(\SDL_RendererPtr $renderer)
 * @method int SDL_RenderSetViewport(\SDL_RendererPtr $renderer, \SDL_RectPtr $rect)
 * @method void SDL_RenderGetViewport(\SDL_RendererPtr $renderer, \SDL_RectPtr $rect)
 * @method int SDL_RenderSetClipRect(\SDL_RendererPtr $renderer, \SDL_RectPtr $rect)
 * @method void SDL_RenderGetClipRect(\SDL_RendererPtr $renderer, \SDL_RectPtr $rect)
 * @method int SDL_RenderIsClipEnabled(\SDL_RendererPtr $renderer)
 * @method int SDL_RenderSetScale(\SDL_RendererPtr $renderer, float $scaleX, float $scaleY)
 * @method void SDL_RenderGetScale(\SDL_RendererPtr $renderer, float $scaleX, float $scaleY)
 * @method int SDL_SetRenderDrawColor(\SDL_RendererPtr $renderer, int $r, int $g, int $b, int $a)
 * @method int SDL_GetRenderDrawColor(\SDL_RendererPtr $renderer, int $r, int $g, int $b, int $a)
 * @method int SDL_SetRenderDrawBlendMode(\SDL_RendererPtr $renderer, int|CIntPtr $blendMode)
 * @method int SDL_GetRenderDrawBlendMode(\SDL_RendererPtr $renderer, int|CIntPtr $blendMode)
 * @method int SDL_RenderClear(\SDL_RendererPtr $renderer)
 * @method int SDL_RenderDrawPoint(\SDL_RendererPtr $renderer, int $x, int $y)
 * @method int SDL_RenderDrawPoints(\SDL_RendererPtr $renderer, int $points, int $count)
 * @method int SDL_RenderDrawLine(\SDL_RendererPtr $renderer, int $x1, int $y1, int $x2, int $y2)
 * @method int SDL_RenderDrawLines(\SDL_RendererPtr $renderer, int $points, int $count)
 * @method int SDL_RenderDrawRect(\SDL_RendererPtr $renderer, \SDL_RectPtr $rect)
 * @method int SDL_RenderDrawRects(\SDL_RendererPtr $renderer, \SDL_RectPtr $rects, int $count)
 * @method int SDL_RenderFillRect(\SDL_RendererPtr $renderer, \SDL_RectPtr $rect)
 * @method int SDL_RenderFillRects(\SDL_RendererPtr $renderer, \SDL_RectPtr $rects, int $count)
 * @method int SDL_RenderCopy(\SDL_RendererPtr $renderer, \SDL_TexturePtr $texture, \SDL_RectPtr|null $srcrect, \SDL_RectPtr|null $dstrect)
 * @method int SDL_RenderCopyEx(\SDL_RendererPtr $renderer, \SDL_TexturePtr $texture, \SDL_RectPtr $srcrect, \SDL_RectPtr $dstrect, float $angle, int $center, int $flip)
 * @method int SDL_RenderDrawPointF(\SDL_RendererPtr $renderer, float $x, float $y)
 * @method int SDL_RenderDrawPointsF(\SDL_RendererPtr $renderer, int $points, int $count)
 * @method int SDL_RenderDrawLineF(\SDL_RendererPtr $renderer, float $x1, float $y1, float $x2, float $y2)
 * @method int SDL_RenderDrawLinesF(\SDL_RendererPtr $renderer, int $points, int $count)
 * @method int SDL_RenderDrawRectF(\SDL_RendererPtr $renderer, \SDL_FRectPtr $rect)
 * @method int SDL_RenderDrawRectsF(\SDL_RendererPtr $renderer, \SDL_FRectPtr $rects, int $count)
 * @method int SDL_RenderFillRectF(\SDL_RendererPtr $renderer, \SDL_FRectPtr $rect)
 * @method int SDL_RenderFillRectsF(\SDL_RendererPtr $renderer, \SDL_FRectPtr $rects, int $count)
 * @method int SDL_RenderCopyF(\SDL_RendererPtr $renderer, \SDL_TexturePtr $texture, \SDL_RectPtr $srcrect, \SDL_FRectPtr $dstrect)
 * @method int SDL_RenderCopyExF(\SDL_RendererPtr $renderer, \SDL_TexturePtr $texture, \SDL_RectPtr $srcrect, \SDL_FRectPtr $dstrect, float $angle, int $center, int $flip)
 * @method int SDL_RenderReadPixels(\SDL_RendererPtr $renderer, \SDL_RectPtr $rect, int $format, CPtr $pixels, int $pitch)
 * @method void SDL_RenderPresent(\SDL_RendererPtr $renderer)
 * @method void SDL_DestroyTexture(\SDL_TexturePtr $texture)
 * @method void SDL_DestroyRenderer(\SDL_RendererPtr $renderer)
 * @method int SDL_RenderFlush(\SDL_RendererPtr $renderer)
 * @method int SDL_GL_BindTexture(\SDL_TexturePtr $texture, float $texw, float $texh)
 * @method int SDL_GL_UnbindTexture(\SDL_TexturePtr $texture)
 * @method void SDL_RenderGetMetalLayer(\SDL_RendererPtr $renderer)
 * @method void SDL_RenderGetMetalCommandEncoder(\SDL_RendererPtr $renderer)
 * @method int SDL_NumSensors()
 * @method string SDL_SensorGetDeviceName(int $device_index)
 * @method int SDL_SensorGetDeviceType(int $device_index)
 * @method int SDL_SensorGetDeviceNonPortableType(int $device_index)
 * @method int SDL_SensorGetDeviceInstanceID(int $device_index)
 * @method \SDL_SensorPtr SDL_SensorOpen(int $device_index)
 * @method \SDL_SensorPtr SDL_SensorFromInstanceID(int $instance_id)
 * @method string SDL_SensorGetName(\SDL_SensorPtr $sensor)
 * @method int SDL_SensorGetType(\SDL_SensorPtr $sensor)
 * @method int SDL_SensorGetNonPortableType(\SDL_SensorPtr $sensor)
 * @method int SDL_SensorGetInstanceID(\SDL_SensorPtr $sensor)
 * @method int SDL_SensorGetData(\SDL_SensorPtr $sensor, float $data, int $num_values)
 * @method void SDL_SensorClose(\SDL_SensorPtr $sensor)
 * @method void SDL_SensorUpdate()
 * @method \SDL_WindowPtr SDL_CreateShapedWindow(string $title, int $x, int $y, int $w, int $h, int $flags)
 * @method int SDL_IsShapedWindow(\SDL_WindowPtr $window)
 * @method int SDL_SetWindowShape(\SDL_WindowPtr $window, \SDL_SurfacePtr $shape, \SDL_WindowShapeModePtr $shape_mode)
 * @method int SDL_GetShapedWindowMode(\SDL_WindowPtr $window, \SDL_WindowShapeModePtr $shape_mode)
 * @method void SDL_SetWindowsMessageHook(\Closure $callback, CPtr $userdata)
 * @method int SDL_Direct3D9GetAdapterIndex(int $displayIndex)
 * @method \IDirect3DDevice9 SDL_RenderGetD3D9Device(\SDL_RendererPtr $renderer)
 * @method int SDL_DXGIGetOutputInfo(int $displayIndex, int $adapterIndex, int $outputIndex)
 * @method int SDL_IsTablet()
 * @method int SDL_GetTicks()
 * @method int SDL_GetPerformanceCounter()
 * @method int SDL_GetPerformanceFrequency()
 * @method void SDL_Delay(int $ms)
 * @method int SDL_AddTimer(int $interval, \Closure $callback, CPtr $param)
 * @method int SDL_RemoveTimer(int $id)
 * @method void SDL_GetVersion(\SDL_versionPtr $ver)
 * @method string SDL_GetRevision()
 * @method int SDL_GetRevisionNumber()
 * @method int SDL_InitSubSystem(int $flags)
 * @method void SDL_QuitSubSystem(int $flags)
 * @method int SDL_WasInit(int $flags)
 *
 * @formatter:on
 */
class SDLMethods extends \FFI
{
    /**
     * Use this function to get the name of the platform.
     *
     * Note: PHP contains a similar implementation @see \PHP_OS_FAMILY
     *
     * <code>
     *  extern const char *SDL_GetPlatform(void);
     * </code>
     *
     * @see https://wiki.libsdl.org/SDL_GetPlatform
     * @return string Returns the name of the platform. If the correct platform
     *                name is not available, returns a string beginning with the
     *                text "Unknown".
     */
    public function SDL_GetPlatform(): string
    {

    }

    /**
     * Get the number of outstanding (unfreed) allocations.
     *
     * <code>
     *  extern int SDL_GetNumAllocations(void);
     * </code>
     *
     * @since 2.0.7
     * @return int
     */
    public function SDL_GetNumAllocations(): int
    {
    }

    /**
     * Use this function to circumvent failure of SDL_Init() when not using
     * SDL_main() as an entry point.
     *
     * <code>
     *  extern void SDL_SetMainReady(void);
     * </code>
     *
     * @see https://wiki.libsdl.org/SDL_SetMainReady
     * @return void
     */
    public function SDL_SetMainReady(): void
    {
    }

    /**
     * <code>
     *  extern int SDL_RegisterApp(char *name, Uint32 style, void *hInst);
     * </code>
     *
     * @since 2.0.2
     * @param string|CCharPtr $name
     * @param int $style
     * @param mixed|CPtr $hInst
     * @return int
     */
    public function SDL_RegisterApp(string $name, int $style, $hInst): int
    {
    }

    /**
     * <code>
     *  extern void SDL_UnregisterApp(void);
     * </code>
     *
     * @since 2.0.2
     * @return void
     */
    public function SDL_UnregisterApp(): void
    {
    }

    /**
     * These function are for internal use and not meant to be documented.
     *
     * TODO Is it worth it to remove from the API?
     *
     * <code>
     *  extern SDL_AssertState SDL_ReportAssertion(SDL_AssertData *data, const char *func, const char *file, int line);
     * </code>
     *
     * @param \SDL_AssertDataPtr|CPtr $data
     * @param string|CCharPtr $func
     * @param string|CCharPtr $file
     * @param int $line
     * @return int|int<AssertStateInterface>
     */
    public function SDL_ReportAssertion(\SDL_AssertDataPtr $data, string $func, string $file, int $line): int
    {
    }

    /**
     * Use this function to initialize the SDL library.
     * This must be called before using most other SDL functions.
     *
     * <code>
     *  extern int SDL_Init(Uint32 flags);
     * </code>
     *
     * @see https://wiki.libsdl.org/SDL_Init
     * @param int|int<InitFlagsInterface> $flags
     * @return int
     */
    public function SDL_Init(int $flags): int
    {
    }

    /**
     * Use this function to clean up all initialized subsystems.
     * You should call it upon all exit conditions.
     *
     * <code>
     *  extern void SDL_Quit(void);
     * </code>
     *
     * @see https://wiki.libsdl.org/SDL_Quit
     * @return void
     */
    public function SDL_Quit(): void
    {

    }
}