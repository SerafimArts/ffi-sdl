<?php

namespace FFI {

    /**
     * @property-read mixed $cdata
     */
    class CData
    {

    }
}

namespace Serafim\SDL {

    use FFI\CData;
    use Serafim\SDL\Enum\AssertState;
    use Serafim\SDL\Enum\GLAttr;
    use Serafim\SDL\Enum\Init;
    use Serafim\SDL\Enum\ThreadPriority;

    /**
     * @method string SDL_GetPlatform()
     * @method int SDL_GetNumAllocations()
     * @method void SDL_SetMainReady()
     * @method int SDL_RegisterApp(string $name, int $style, void $hInst)
     * @method void SDL_UnregisterApp()
     * @method AssertState|int SDL_ReportAssertion()
     * @method void SDL_SetAssertionHandler(SDL_AssertionHandler $handler, void $userdata)
     * @method SDL_AssertionHandler SDL_GetDefaultAssertionHandler()
     * @method SDL_AssertionHandler SDL_GetAssertionHandler()
     * @method SDL_AssertData SDL_GetAssertionReport()
     * @method void SDL_ResetAssertionReport()
     * @method int SDL_AtomicTryLock(SDL_SpinLock $lock)
     * @method void SDL_AtomicLock(SDL_SpinLock $lock)
     * @method void SDL_AtomicUnlock(SDL_SpinLock $lock)
     * @method void SDL_MemoryBarrierReleaseFunction()
     * @method void SDL_MemoryBarrierAcquireFunction()
     * @method int SDL_AtomicCAS(SDL_atomic_t $a, int $oldval, int $newval)
     * @method int SDL_AtomicSet(SDL_atomic_t $a, int $v)
     * @method int SDL_AtomicGet(SDL_atomic_t $a)
     * @method int SDL_AtomicAdd(SDL_atomic_t $a, int $v)
     * @method int SDL_AtomicCASPtr(void $oldval, void $newval)
     * @method void SDL_AtomicSetPtr(void $v)
     * @method void SDL_AtomicGetPtr()
     * @method int SDL_SetError(string $fmt)
     * @method string SDL_GetError()
     * @method void SDL_ClearError()
     * @method int SDL_Error(SDL_errorcode $code)
     * @method SDL_mutex SDL_CreateMutex()
     * @method int SDL_LockMutex(SDL_mutex $mutex)
     * @method int SDL_TryLockMutex(SDL_mutex $mutex)
     * @method int SDL_UnlockMutex(SDL_mutex $mutex)
     * @method void SDL_DestroyMutex(SDL_mutex $mutex)
     * @method SDL_sem SDL_CreateSemaphore(int $initial_value)
     * @method void SDL_DestroySemaphore(SDL_sem $sem)
     * @method int SDL_SemWait(SDL_sem $sem)
     * @method int SDL_SemTryWait(SDL_sem $sem)
     * @method int SDL_SemWaitTimeout(SDL_sem $sem, int $ms)
     * @method int SDL_SemPost(SDL_sem $sem)
     * @method int SDL_SemValue(SDL_sem $sem)
     * @method SDL_cond SDL_CreateCond()
     * @method void SDL_DestroyCond(SDL_cond $cond)
     * @method int SDL_CondSignal(SDL_cond $cond)
     * @method int SDL_CondBroadcast(SDL_cond $cond)
     * @method int SDL_CondWait(SDL_cond $cond, SDL_mutex $mutex)
     * @method int SDL_CondWaitTimeout(SDL_cond $cond, SDL_mutex $mutex, int $ms)
     * @method SDL_Thread SDL_CreateThread(SDL_ThreadFunction $fn, string $name, void $data, pfnSDL_CurrentBeginThread $pfnBeginThread, pfnSDL_CurrentEndThread $pfnEndThread)
     * @method SDL_Thread SDL_CreateThreadWithStackSize(int $fn)
     * @method string SDL_GetThreadName(SDL_Thread $thread)
     * @method SDL_threadID SDL_ThreadID()
     * @method SDL_threadID SDL_GetThreadID(SDL_Thread $thread)
     * @method int SDL_SetThreadPriority(ThreadPriority|int $priority)
     * @method void SDL_WaitThread(SDL_Thread $thread, int $status)
     * @method void SDL_DetachThread(SDL_Thread $thread)
     * @method SDL_TLSID SDL_TLSCreate()
     * @method void SDL_TLSGet(SDL_TLSID $id)
     * @method int SDL_TLSSet(SDL_TLSID $id, void $value, void $destructor)
     * @method SDL_RWops SDL_RWFromFile(string $file, string $mode)
     * @method SDL_RWops SDL_RWFromFP(void $fp, int $autoclose)
     * @method SDL_RWops SDL_RWFromMem(void $mem, int $size)
     * @method SDL_RWops SDL_RWFromConstMem(void $mem, int $size)
     * @method SDL_RWops SDL_AllocRW()
     * @method void SDL_FreeRW(SDL_RWops $area)
     * @method int SDL_RWsize(SDL_RWops $context)
     * @method int SDL_RWseek(SDL_RWops $context, int $offset, int $whence)
     * @method int SDL_RWtell(SDL_RWops $context)
     * @method int SDL_RWread(SDL_RWops $context, void $ptr, int $size, int $maxnum)
     * @method int SDL_RWwrite(SDL_RWops $context, void $ptr, int $size, int $num)
     * @method int SDL_RWclose(SDL_RWops $context)
     * @method void SDL_LoadFile_RW(SDL_RWops $src, int $datasize, int $freesrc)
     * @method void SDL_LoadFile(string $file, int $datasize)
     * @method int SDL_ReadU8(SDL_RWops $src)
     * @method int SDL_ReadLE16(SDL_RWops $src)
     * @method int SDL_ReadBE16(SDL_RWops $src)
     * @method int SDL_ReadLE32(SDL_RWops $src)
     * @method int SDL_ReadBE32(SDL_RWops $src)
     * @method int SDL_ReadLE64(SDL_RWops $src)
     * @method int SDL_ReadBE64(SDL_RWops $src)
     * @method int SDL_WriteU8(SDL_RWops $dst, int $value)
     * @method int SDL_WriteLE16(SDL_RWops $dst, int $value)
     * @method int SDL_WriteBE16(SDL_RWops $dst, int $value)
     * @method int SDL_WriteLE32(SDL_RWops $dst, int $value)
     * @method int SDL_WriteBE32(SDL_RWops $dst, int $value)
     * @method int SDL_WriteLE64(SDL_RWops $dst, int $value)
     * @method int SDL_WriteBE64(SDL_RWops $dst, int $value)
     * @method int SDL_GetNumAudioDrivers()
     * @method string SDL_GetAudioDriver(int $index)
     * @method int SDL_AudioInit(string $driver_name)
     * @method void SDL_AudioQuit()
     * @method string SDL_GetCurrentAudioDriver()
     * @method int SDL_OpenAudio(SDL_AudioSpec $desired, SDL_AudioSpec $obtained)
     * @method int SDL_GetNumAudioDevices(int $iscapture)
     * @method string SDL_GetAudioDeviceName(int $index, int $iscapture)
     * @method SDL_AudioDeviceID SDL_OpenAudioDevice(string $device, int $iscapture, SDL_AudioSpec $desired, SDL_AudioSpec $obtained, int $allowed_changes)
     * @method SDL_AudioStatus SDL_GetAudioStatus()
     * @method SDL_AudioStatus SDL_GetAudioDeviceStatus(SDL_AudioDeviceID $dev)
     * @method void SDL_PauseAudio(int $pause_on)
     * @method void SDL_PauseAudioDevice(SDL_AudioDeviceID $dev, int $pause_on)
     * @method SDL_AudioSpec SDL_LoadWAV_RW(SDL_RWops $src, int $freesrc, SDL_AudioSpec $spec, int $audio_len)
     * @method void SDL_FreeWAV(int $audio_buf)
     * @method int SDL_BuildAudioCVT(SDL_AudioCVT $cvt, SDL_AudioFormat|int $src_format, int $src_channels, int $src_rate, SDL_AudioFormat|int $dst_format, int $dst_channels, int $dst_rate)
     * @method int SDL_ConvertAudio(SDL_AudioCVT $cvt)
     * @method SDL_AudioStream SDL_NewAudioStream(SDL_AudioFormat|int $src_format, int $src_channels, int $src_rate, SDL_AudioFormat|int $dst_format, int $dst_channels, int $dst_rate)
     * @method int SDL_AudioStreamPut(SDL_AudioStream $stream, void $buf, int $len)
     * @method int SDL_AudioStreamGet(SDL_AudioStream $stream, void $buf, int $len)
     * @method int SDL_AudioStreamAvailable(SDL_AudioStream $stream)
     * @method int SDL_AudioStreamFlush(SDL_AudioStream $stream)
     * @method void SDL_AudioStreamClear(SDL_AudioStream $stream)
     * @method void SDL_FreeAudioStream(SDL_AudioStream $stream)
     * @method void SDL_MixAudio(int $dst, int $src, int $len, int $volume)
     * @method void SDL_MixAudioFormat(int $dst, int $src, SDL_AudioFormat|int $format, int $len, int $volume)
     * @method int SDL_QueueAudio(SDL_AudioDeviceID $dev, void $data, int $len)
     * @method int SDL_DequeueAudio(SDL_AudioDeviceID $dev, void $data, int $len)
     * @method int SDL_GetQueuedAudioSize(SDL_AudioDeviceID $dev)
     * @method void SDL_ClearQueuedAudio(SDL_AudioDeviceID $dev)
     * @method void SDL_LockAudio()
     * @method void SDL_LockAudioDevice(SDL_AudioDeviceID $dev)
     * @method void SDL_UnlockAudio()
     * @method void SDL_UnlockAudioDevice(SDL_AudioDeviceID $dev)
     * @method void SDL_CloseAudio()
     * @method void SDL_CloseAudioDevice(SDL_AudioDeviceID $dev)
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
     * @method void SDL_SIMDFree(void $ptr)
     * @method string SDL_GetPixelFormatName(int $format)
     * @method int SDL_PixelFormatEnumToMasks(int $format, int $bpp, int $Rmask, int $Gmask, int $Bmask, int $Amask)
     * @method int SDL_MasksToPixelFormatEnum(int $bpp, int $Rmask, int $Gmask, int $Bmask, int $Amask)
     * @method SDL_PixelFormat SDL_AllocFormat(int $pixel_format)
     * @method void SDL_FreeFormat(SDL_PixelFormat $format)
     * @method SDL_Palette SDL_AllocPalette(int $ncolors)
     * @method int SDL_SetPixelFormatPalette(SDL_PixelFormat $format, SDL_Palette $palette)
     * @method int SDL_SetPaletteColors(SDL_Palette $palette, SDL_Color $colors, int $firstcolor, int $ncolors)
     * @method void SDL_FreePalette(SDL_Palette $palette)
     * @method int SDL_MapRGB(SDL_PixelFormat $format, int $r, int $g, int $b)
     * @method int SDL_MapRGBA(SDL_PixelFormat $format, int $r, int $g, int $b, int $a)
     * @method void SDL_GetRGB(int $pixel, SDL_PixelFormat $format, int $r, int $g, int $b)
     * @method void SDL_GetRGBA(int $pixel, SDL_PixelFormat $format, int $r, int $g, int $b, int $a)
     * @method void SDL_CalculateGammaRamp(float $gamma, int $ramp)
     * @method int SDL_HasIntersection(SDL_Rect $A, SDL_Rect $B)
     * @method int SDL_IntersectRect(SDL_Rect $A, SDL_Rect $B, SDL_Rect $result)
     * @method void SDL_UnionRect(SDL_Rect $A, SDL_Rect $B, SDL_Rect $result)
     * @method int SDL_EnclosePoints(int $points, int $count, SDL_Rect $clip, SDL_Rect $result)
     * @method int SDL_IntersectRectAndLine(SDL_Rect $rect, int $X1, int $Y1, int $X2, int $Y2)
     * @method SDL_BlendMode SDL_ComposeCustomBlendMode(SDL_BlendFactor $srcColorFactor, SDL_BlendFactor $dstColorFactor, SDL_BlendOperation $colorOperation, SDL_BlendFactor $srcAlphaFactor, SDL_BlendFactor $dstAlphaFactor, SDL_BlendOperation $alphaOperation)
     * @method SDL_Surface SDL_CreateRGBSurface(int $flags, int $width, int $height, int $depth, int $Rmask, int $Gmask, int $Bmask, int $Amask)
     * @method SDL_Surface SDL_CreateRGBSurfaceWithFormat(int $flags, int $width, int $height, int $depth, int $format)
     * @method SDL_Surface SDL_CreateRGBSurfaceFrom(void $pixels, int $width, int $height, int $depth, int $pitch, int $Rmask, int $Gmask, int $Bmask, int $Amask)
     * @method SDL_Surface SDL_CreateRGBSurfaceWithFormatFrom(void $pixels, int $width, int $height, int $depth, int $pitch, int $format)
     * @method void SDL_FreeSurface(SDL_Surface $surface)
     * @method int SDL_SetSurfacePalette(SDL_Surface $surface, SDL_Palette $palette)
     * @method int SDL_LockSurface(SDL_Surface $surface)
     * @method void SDL_UnlockSurface(SDL_Surface $surface)
     * @method SDL_Surface SDL_LoadBMP_RW(SDL_RWops $src, int $freesrc)
     * @method int SDL_SaveBMP_RW(SDL_Surface $surface, SDL_RWops $dst, int $freedst)
     * @method int SDL_SetSurfaceRLE(SDL_Surface $surface, int $flag)
     * @method int SDL_SetColorKey(SDL_Surface $surface, int $flag, int $key)
     * @method int SDL_HasColorKey(SDL_Surface $surface)
     * @method int SDL_GetColorKey(SDL_Surface $surface, int $key)
     * @method int SDL_SetSurfaceColorMod(SDL_Surface $surface, int $r, int $g, int $b)
     * @method int SDL_GetSurfaceColorMod(SDL_Surface $surface, int $r, int $g, int $b)
     * @method int SDL_SetSurfaceAlphaMod(SDL_Surface $surface, int $alpha)
     * @method int SDL_GetSurfaceAlphaMod(SDL_Surface $surface, int $alpha)
     * @method int SDL_SetSurfaceBlendMode(SDL_Surface $surface, SDL_BlendMode $blendMode)
     * @method int SDL_GetSurfaceBlendMode(SDL_Surface $surface, SDL_BlendMode $blendMode)
     * @method int SDL_SetClipRect(SDL_Surface $surface, SDL_Rect $rect)
     * @method void SDL_GetClipRect(SDL_Surface $surface, SDL_Rect $rect)
     * @method SDL_Surface SDL_DuplicateSurface(SDL_Surface $surface)
     * @method SDL_Surface SDL_ConvertSurface(SDL_Surface $src, SDL_PixelFormat $fmt, int $flags)
     * @method SDL_Surface SDL_ConvertSurfaceFormat(SDL_Surface $src, int $pixel_format, int $flags)
     * @method int SDL_ConvertPixels(int $width, int $height, int $src_format, void $src, int $src_pitch, int $dst_format, void $dst, int $dst_pitch)
     * @method int SDL_FillRect(SDL_Surface $dst, SDL_Rect $rect, int $color)
     * @method int SDL_FillRects(SDL_Surface $dst, SDL_Rect $rects, int $count, int $color)
     * @method int SDL_UpperBlit(SDL_Surface $src, SDL_Rect $srcrect, SDL_Surface $dst, SDL_Rect $dstrect)
     * @method int SDL_LowerBlit(SDL_Surface $src, SDL_Rect $srcrect, SDL_Surface $dst, SDL_Rect $dstrect)
     * @method int SDL_SoftStretch(SDL_Surface $src, SDL_Rect $srcrect, SDL_Surface $dst, SDL_Rect $dstrect)
     * @method int SDL_UpperBlitScaled(SDL_Surface $src, SDL_Rect $srcrect, SDL_Surface $dst, SDL_Rect $dstrect)
     * @method int SDL_LowerBlitScaled(SDL_Surface $src, SDL_Rect $srcrect, SDL_Surface $dst, SDL_Rect $dstrect)
     * @method void SDL_SetYUVConversionMode(SDL_YUV_CONVERSION_MODE $mode)
     * @method SDL_YUV_CONVERSION_MODE SDL_GetYUVConversionMode()
     * @method SDL_YUV_CONVERSION_MODE SDL_GetYUVConversionModeForResolution(int $width, int $height)
     * @method int SDL_GetNumVideoDrivers()
     * @method string SDL_GetVideoDriver(int $index)
     * @method int SDL_VideoInit(string $driver_name)
     * @method void SDL_VideoQuit()
     * @method string SDL_GetCurrentVideoDriver()
     * @method int SDL_GetNumVideoDisplays()
     * @method string SDL_GetDisplayName(int $displayIndex)
     * @method int SDL_GetDisplayBounds(int $displayIndex, SDL_Rect $rect)
     * @method int SDL_GetDisplayUsableBounds(int $displayIndex, SDL_Rect $rect)
     * @method int SDL_GetDisplayDPI(int $displayIndex, float $ddpi, float $hdpi, float $vdpi)
     * @method SDL_DisplayOrientation SDL_GetDisplayOrientation(int $displayIndex)
     * @method int SDL_GetNumDisplayModes(int $displayIndex)
     * @method int SDL_GetDisplayMode(int $displayIndex, int $modeIndex, SDL_DisplayMode|CData $mode)
     * @method int SDL_GetDesktopDisplayMode(int $displayIndex, SDL_DisplayMode|CData $mode)
     * @method int SDL_GetCurrentDisplayMode(int $displayIndex, SDL_DisplayMode|CData $mode)
     * @method SDL_DisplayMode|CData SDL_GetClosestDisplayMode(int $displayIndex, SDL_DisplayMode|CData $mode, SDL_DisplayMode|CData $closest)
     * @method int SDL_GetWindowDisplayIndex(SDL_Window $window)
     * @method int SDL_SetWindowDisplayMode(SDL_Window $window, SDL_DisplayMode|CData $mode)
     * @method int SDL_GetWindowDisplayMode(SDL_Window $window, SDL_DisplayMode|CData $mode)
     * @method int SDL_GetWindowPixelFormat(SDL_Window $window)
     * @method SDL_Window SDL_CreateWindow(string $title, int $x, int $y, int $w, int $h, int $flags)
     * @method SDL_Window SDL_CreateWindowFrom(void $data)
     * @method int SDL_GetWindowID(SDL_Window $window)
     * @method SDL_Window SDL_GetWindowFromID(int $id)
     * @method int SDL_GetWindowFlags(SDL_Window $window)
     * @method void SDL_SetWindowTitle(SDL_Window $window, string $title)
     * @method string SDL_GetWindowTitle(SDL_Window $window)
     * @method void SDL_SetWindowIcon(SDL_Window $window, SDL_Surface $icon)
     * @method void SDL_SetWindowData(SDL_Window $window, string $name, void $userdata)
     * @method void SDL_GetWindowData(SDL_Window $window, string $name)
     * @method void SDL_SetWindowPosition(SDL_Window $window, int $x, int $y)
     * @method void SDL_GetWindowPosition(SDL_Window $window, int $x, int $y)
     * @method void SDL_SetWindowSize(SDL_Window $window, int $w, int $h)
     * @method void SDL_GetWindowSize(SDL_Window $window, int $w, int $h)
     * @method int SDL_GetWindowBordersSize(SDL_Window $window, int $top, int $left, int $bottom, int $right)
     * @method void SDL_SetWindowMinimumSize(SDL_Window $window, int $min_w, int $min_h)
     * @method void SDL_GetWindowMinimumSize(SDL_Window $window, int $w, int $h)
     * @method void SDL_SetWindowMaximumSize(SDL_Window $window, int $max_w, int $max_h)
     * @method void SDL_GetWindowMaximumSize(SDL_Window $window, int $w, int $h)
     * @method void SDL_SetWindowBordered(SDL_Window $window, int $bordered)
     * @method void SDL_SetWindowResizable(SDL_Window $window, int $resizable)
     * @method void SDL_ShowWindow(SDL_Window $window)
     * @method void SDL_HideWindow(SDL_Window $window)
     * @method void SDL_RaiseWindow(SDL_Window $window)
     * @method void SDL_MaximizeWindow(SDL_Window $window)
     * @method void SDL_MinimizeWindow(SDL_Window $window)
     * @method void SDL_RestoreWindow(SDL_Window $window)
     * @method int SDL_SetWindowFullscreen(SDL_Window $window, int $flags)
     * @method SDL_Surface SDL_GetWindowSurface(SDL_Window $window)
     * @method int SDL_UpdateWindowSurface(SDL_Window $window)
     * @method int SDL_UpdateWindowSurfaceRects(SDL_Window $window, SDL_Rect $rects, int $numrects)
     * @method void SDL_SetWindowGrab(SDL_Window $window, int $grabbed)
     * @method int SDL_GetWindowGrab(SDL_Window $window)
     * @method SDL_Window SDL_GetGrabbedWindow()
     * @method int SDL_SetWindowBrightness(SDL_Window $window, float $brightness)
     * @method float SDL_GetWindowBrightness(SDL_Window $window)
     * @method int SDL_SetWindowOpacity(SDL_Window $window, float $opacity)
     * @method int SDL_GetWindowOpacity(SDL_Window $window, float $out_opacity)
     * @method int SDL_SetWindowModalFor(SDL_Window $modal_window, SDL_Window $parent_window)
     * @method int SDL_SetWindowInputFocus(SDL_Window $window)
     * @method int SDL_SetWindowGammaRamp(SDL_Window $window, int $red, int $green, int $blue)
     * @method int SDL_GetWindowGammaRamp(SDL_Window $window, int $red, int $green, int $blue)
     * @method int SDL_SetWindowHitTest(SDL_Window $window, SDL_HitTest $callback, void $callback_data)
     * @method void SDL_DestroyWindow(SDL_Window $window)
     * @method int SDL_IsScreenSaverEnabled()
     * @method void SDL_EnableScreenSaver()
     * @method void SDL_DisableScreenSaver()
     * @method int SDL_GL_LoadLibrary(string $path)
     * @method void SDL_GL_GetProcAddress(string $proc)
     * @method void SDL_GL_UnloadLibrary()
     * @method int SDL_GL_ExtensionSupported(string $extension)
     * @method void SDL_GL_ResetAttributes()
     * @method int SDL_GL_SetAttribute(GLAttr|int $attr, int $value)
     * @method int SDL_GL_GetAttribute(GLAttr|int $attr, int $value)
     * @method SDL_GLContext SDL_GL_CreateContext(SDL_Window $window)
     * @method int SDL_GL_MakeCurrent(SDL_Window $window, SDL_GLContext $context)
     * @method SDL_Window SDL_GL_GetCurrentWindow()
     * @method SDL_GLContext SDL_GL_GetCurrentContext()
     * @method void SDL_GL_GetDrawableSize(SDL_Window $window, int $w, int $h)
     * @method int SDL_GL_SetSwapInterval(int $interval)
     * @method int SDL_GL_GetSwapInterval()
     * @method void SDL_GL_SwapWindow(SDL_Window $window)
     * @method void SDL_GL_DeleteContext(SDL_GLContext $context)
     * @method SDL_Window SDL_GetKeyboardFocus()
     * @method int SDL_GetKeyboardState(int $numkeys)
     * @method SDL_Keymod SDL_GetModState()
     * @method void SDL_SetModState(SDL_Keymod $modstate)
     * @method SDL_Keycode SDL_GetKeyFromScancode(SDL_Scancode $scancode)
     * @method SDL_Scancode SDL_GetScancodeFromKey(SDL_Keycode $key)
     * @method string SDL_GetScancodeName(SDL_Scancode $scancode)
     * @method SDL_Scancode SDL_GetScancodeFromName(string $name)
     * @method string SDL_GetKeyName(SDL_Keycode $key)
     * @method SDL_Keycode SDL_GetKeyFromName(string $name)
     * @method void SDL_StartTextInput()
     * @method int SDL_IsTextInputActive()
     * @method void SDL_StopTextInput()
     * @method void SDL_SetTextInputRect(SDL_Rect $rect)
     * @method int SDL_HasScreenKeyboardSupport()
     * @method int SDL_IsScreenKeyboardShown(SDL_Window $window)
     * @method SDL_Window SDL_GetMouseFocus()
     * @method int SDL_GetMouseState(int $x, int $y)
     * @method int SDL_GetGlobalMouseState(int $x, int $y)
     * @method int SDL_GetRelativeMouseState(int $x, int $y)
     * @method void SDL_WarpMouseInWindow(SDL_Window $window, int $x, int $y)
     * @method int SDL_WarpMouseGlobal(int $x, int $y)
     * @method int SDL_SetRelativeMouseMode(int $enabled)
     * @method int SDL_CaptureMouse(int $enabled)
     * @method int SDL_GetRelativeMouseMode()
     * @method SDL_Cursor SDL_CreateCursor(int $data, int $mask, int $w, int $h, int $hot_x, int $hot_y)
     * @method SDL_Cursor SDL_CreateColorCursor(SDL_Surface $surface, int $hot_x, int $hot_y)
     * @method SDL_Cursor SDL_CreateSystemCursor(SDL_SystemCursor $id)
     * @method void SDL_SetCursor(SDL_Cursor $cursor)
     * @method SDL_Cursor SDL_GetCursor()
     * @method SDL_Cursor SDL_GetDefaultCursor()
     * @method void SDL_FreeCursor(SDL_Cursor $cursor)
     * @method int SDL_ShowCursor(int $toggle)
     * @method void SDL_LockJoysticks()
     * @method void SDL_UnlockJoysticks()
     * @method int SDL_NumJoysticks()
     * @method string SDL_JoystickNameForIndex(int $device_index)
     * @method int SDL_JoystickGetDevicePlayerIndex(int $device_index)
     * @method SDL_JoystickGUID SDL_JoystickGetDeviceGUID(int $device_index)
     * @method int SDL_JoystickGetDeviceVendor(int $device_index)
     * @method int SDL_JoystickGetDeviceProduct(int $device_index)
     * @method int SDL_JoystickGetDeviceProductVersion(int $device_index)
     * @method SDL_JoystickType SDL_JoystickGetDeviceType(int $device_index)
     * @method SDL_JoystickID SDL_JoystickGetDeviceInstanceID(int $device_index)
     * @method SDL_Joystick SDL_JoystickOpen(int $device_index)
     * @method SDL_Joystick SDL_JoystickFromInstanceID(SDL_JoystickID $joyid)
     * @method string SDL_JoystickName(SDL_Joystick $joystick)
     * @method int SDL_JoystickGetPlayerIndex(SDL_Joystick $joystick)
     * @method SDL_JoystickGUID SDL_JoystickGetGUID(SDL_Joystick $joystick)
     * @method int SDL_JoystickGetVendor(SDL_Joystick $joystick)
     * @method int SDL_JoystickGetProduct(SDL_Joystick $joystick)
     * @method int SDL_JoystickGetProductVersion(SDL_Joystick $joystick)
     * @method SDL_JoystickType SDL_JoystickGetType(SDL_Joystick $joystick)
     * @method void SDL_JoystickGetGUIDString(SDL_JoystickGUID $guid, string $pszGUID, int $cbGUID)
     * @method SDL_JoystickGUID SDL_JoystickGetGUIDFromString(string $pchGUID)
     * @method int SDL_JoystickGetAttached(SDL_Joystick $joystick)
     * @method SDL_JoystickID SDL_JoystickInstanceID(SDL_Joystick $joystick)
     * @method int SDL_JoystickNumAxes(SDL_Joystick $joystick)
     * @method int SDL_JoystickNumBalls(SDL_Joystick $joystick)
     * @method int SDL_JoystickNumHats(SDL_Joystick $joystick)
     * @method int SDL_JoystickNumButtons(SDL_Joystick $joystick)
     * @method void SDL_JoystickUpdate()
     * @method int SDL_JoystickEventState(int $state)
     * @method int SDL_JoystickGetAxis(SDL_Joystick $joystick, int $axis)
     * @method int SDL_JoystickGetAxisInitialState(SDL_Joystick $joystick, int $axis, int $state)
     * @method int SDL_JoystickGetHat(SDL_Joystick $joystick, int $hat)
     * @method int SDL_JoystickGetBall(SDL_Joystick $joystick, int $ball, int $dx, int $dy)
     * @method int SDL_JoystickGetButton(SDL_Joystick $joystick, int $button)
     * @method int SDL_JoystickRumble(SDL_Joystick $joystick, int $low_frequency_rumble, int $high_frequency_rumble, int $duration_ms)
     * @method void SDL_JoystickClose(SDL_Joystick $joystick)
     * @method SDL_JoystickPowerLevel SDL_JoystickCurrentPowerLevel(SDL_Joystick $joystick)
     * @method int SDL_GameControllerAddMappingsFromRW(SDL_RWops $rw, int $freerw)
     * @method int SDL_GameControllerAddMapping(string $mappingString)
     * @method int SDL_GameControllerNumMappings()
     * @method string SDL_GameControllerMappingForIndex(int $mapping_index)
     * @method string SDL_GameControllerMappingForGUID(SDL_JoystickGUID $guid)
     * @method string SDL_GameControllerMapping(SDL_GameController $gamecontroller)
     * @method int SDL_IsGameController(int $joystick_index)
     * @method string SDL_GameControllerNameForIndex(int $joystick_index)
     * @method string SDL_GameControllerMappingForDeviceIndex(int $joystick_index)
     * @method SDL_GameController SDL_GameControllerOpen(int $joystick_index)
     * @method SDL_GameController SDL_GameControllerFromInstanceID(SDL_JoystickID $joyid)
     * @method string SDL_GameControllerName(SDL_GameController $gamecontroller)
     * @method int SDL_GameControllerGetPlayerIndex(SDL_GameController $gamecontroller)
     * @method int SDL_GameControllerGetVendor(SDL_GameController $gamecontroller)
     * @method int SDL_GameControllerGetProduct(SDL_GameController $gamecontroller)
     * @method int SDL_GameControllerGetProductVersion(SDL_GameController $gamecontroller)
     * @method int SDL_GameControllerGetAttached(SDL_GameController $gamecontroller)
     * @method SDL_Joystick SDL_GameControllerGetJoystick(SDL_GameController $gamecontroller)
     * @method int SDL_GameControllerEventState(int $state)
     * @method void SDL_GameControllerUpdate()
     * @method SDL_GameControllerAxis SDL_GameControllerGetAxisFromString(string $pchString)
     * @method string SDL_GameControllerGetStringForAxis(SDL_GameControllerAxis $axis)
     * @method SDL_GameControllerButtonBind SDL_GameControllerGetBindForAxis(SDL_GameController $gamecontroller, SDL_GameControllerAxis $axis)
     * @method int SDL_GameControllerGetAxis(SDL_GameController $gamecontroller, SDL_GameControllerAxis $axis)
     * @method SDL_GameControllerButton SDL_GameControllerGetButtonFromString(string $pchString)
     * @method string SDL_GameControllerGetStringForButton(SDL_GameControllerButton $button)
     * @method SDL_GameControllerButtonBind SDL_GameControllerGetBindForButton(SDL_GameController $gamecontroller, SDL_GameControllerButton $button)
     * @method int SDL_GameControllerGetButton(SDL_GameController $gamecontroller, SDL_GameControllerButton $button)
     * @method int SDL_GameControllerRumble(SDL_GameController $gamecontroller, int $low_frequency_rumble, int $high_frequency_rumble, int $duration_ms)
     * @method void SDL_GameControllerClose(SDL_GameController $gamecontroller)
     * @method int SDL_GetNumTouchDevices()
     * @method SDL_TouchID SDL_GetTouchDevice(int $index)
     * @method SDL_TouchDeviceType SDL_GetTouchDeviceType(SDL_TouchID $touchID)
     * @method int SDL_GetNumTouchFingers(SDL_TouchID $touchID)
     * @method SDL_Finger SDL_GetTouchFinger(SDL_TouchID $touchID, int $index)
     * @method int SDL_RecordGesture(SDL_TouchID $touchId)
     * @method int SDL_SaveAllDollarTemplates(SDL_RWops $dst)
     * @method int SDL_SaveDollarTemplate(SDL_GestureID $gestureId, SDL_RWops $dst)
     * @method int SDL_LoadDollarTemplates(SDL_TouchID $touchId, SDL_RWops $src)
     * @method void SDL_PumpEvents()
     * @method int SDL_PeepEvents(SDL_Event|CData $events, int $numevents, SDL_eventaction $action, int $minType, int $maxType)
     * @method int SDL_HasEvent(int $type)
     * @method int SDL_HasEvents(int $minType, int $maxType)
     * @method void SDL_FlushEvent(int $type)
     * @method void SDL_FlushEvents(int $minType, int $maxType)
     * @method int SDL_PollEvent(SDL_Event|CData $event)
     * @method int SDL_WaitEvent(SDL_Event|CData $event)
     * @method int SDL_WaitEventTimeout(SDL_Event|CData $event, int $timeout)
     * @method int SDL_PushEvent(SDL_Event|CData $event)
     * @method void SDL_SetEventFilter(SDL_EventFilter $filter, void $userdata)
     * @method int SDL_GetEventFilter(SDL_EventFilter $filter)
     * @method void SDL_AddEventWatch(SDL_EventFilter $filter, void $userdata)
     * @method void SDL_DelEventWatch(SDL_EventFilter $filter, void $userdata)
     * @method void SDL_FilterEvents(SDL_EventFilter $filter, void $userdata)
     * @method int SDL_EventState(int $type, int $state)
     * @method int SDL_RegisterEvents(int $numevents)
     * @method string SDL_GetBasePath()
     * @method string SDL_GetPrefPath(string $org, string $app)
     * @method int SDL_NumHaptics()
     * @method string SDL_HapticName(int $device_index)
     * @method SDL_Haptic SDL_HapticOpen(int $device_index)
     * @method int SDL_HapticOpened(int $device_index)
     * @method int SDL_HapticIndex(SDL_Haptic $haptic)
     * @method int SDL_MouseIsHaptic()
     * @method SDL_Haptic SDL_HapticOpenFromMouse()
     * @method int SDL_JoystickIsHaptic(SDL_Joystick $joystick)
     * @method SDL_Haptic SDL_HapticOpenFromJoystick(SDL_Joystick $joystick)
     * @method void SDL_HapticClose(SDL_Haptic $haptic)
     * @method int SDL_HapticNumEffects(SDL_Haptic $haptic)
     * @method int SDL_HapticNumEffectsPlaying(SDL_Haptic $haptic)
     * @method int SDL_HapticQuery(SDL_Haptic $haptic)
     * @method int SDL_HapticNumAxes(SDL_Haptic $haptic)
     * @method int SDL_HapticEffectSupported(SDL_Haptic $haptic, SDL_HapticEffect $effect)
     * @method int SDL_HapticNewEffect(SDL_Haptic $haptic, SDL_HapticEffect $effect)
     * @method int SDL_HapticUpdateEffect(SDL_Haptic $haptic, int $effect, SDL_HapticEffect $data)
     * @method int SDL_HapticRunEffect(SDL_Haptic $haptic, int $effect, int $iterations)
     * @method int SDL_HapticStopEffect(SDL_Haptic $haptic, int $effect)
     * @method void SDL_HapticDestroyEffect(SDL_Haptic $haptic, int $effect)
     * @method int SDL_HapticGetEffectStatus(SDL_Haptic $haptic, int $effect)
     * @method int SDL_HapticSetGain(SDL_Haptic $haptic, int $gain)
     * @method int SDL_HapticSetAutocenter(SDL_Haptic $haptic, int $autocenter)
     * @method int SDL_HapticPause(SDL_Haptic $haptic)
     * @method int SDL_HapticUnpause(SDL_Haptic $haptic)
     * @method int SDL_HapticStopAll(SDL_Haptic $haptic)
     * @method int SDL_HapticRumbleSupported(SDL_Haptic $haptic)
     * @method int SDL_HapticRumbleInit(SDL_Haptic $haptic)
     * @method int SDL_HapticRumblePlay(SDL_Haptic $haptic, float $strength, int $length)
     * @method int SDL_HapticRumbleStop(SDL_Haptic $haptic)
     * @method int SDL_SetHintWithPriority(string $name, string $value, int $priority)
     * @method int SDL_SetHint(string $name, string $value)
     * @method string SDL_GetHint(string $name)
     * @method int SDL_GetHintBoolean(string $name, int $default_value)
     * @method void SDL_AddHintCallback(string $name, int $callback, void $userdata)
     * @method void SDL_DelHintCallback(string $name, int $callback, void $userdata)
     * @method void SDL_ClearHints()
     * @method void SDL_LoadObject(string $sofile)
     * @method void SDL_LoadFunction(void $handle, string $name)
     * @method void SDL_UnloadObject(void $handle)
     * @method void SDL_LogSetAllPriority(SDL_LogPriority $priority)
     * @method void SDL_LogSetPriority(int $category, SDL_LogPriority $priority)
     * @method SDL_LogPriority SDL_LogGetPriority(int $category)
     * @method void SDL_LogResetPriorities()
     * @method void SDL_Log(string $fmt)
     * @method void SDL_LogVerbose(int $category, string $fmt)
     * @method void SDL_LogDebug(int $category, string $fmt)
     * @method void SDL_LogInfo(int $category, string $fmt)
     * @method void SDL_LogWarn(int $category, string $fmt)
     * @method void SDL_LogError(int $category, string $fmt)
     * @method void SDL_LogCritical(int $category, string $fmt)
     * @method void SDL_LogMessage(int $category, SDL_LogPriority $priority, string $fmt)
     * @method void SDL_LogMessageV(int $category, SDL_LogPriority $priority, string $fmt, object $ap)
     * @method void SDL_LogGetOutputFunction(SDL_LogOutputFunction $callback)
     * @method void SDL_LogSetOutputFunction(SDL_LogOutputFunction $callback, void $userdata)
     * @method int SDL_ShowMessageBox(SDL_MessageBoxData|CData $messageboxdata, int|CData $buttonid)
     * @method int SDL_ShowSimpleMessageBox(int $flags, string|CData $title, string|CData $message, ?SDL_Window|?CData $window)
     * @method SDL_PowerState SDL_GetPowerInfo(int $secs, int $pct)
     * @method int SDL_GetNumRenderDrivers()
     * @method int SDL_GetRenderDriverInfo(int $index, SDL_RendererInfo $info)
     * @method int SDL_CreateWindowAndRenderer(int $width, int $height, int $window_flags)
     * @method SDL_Renderer SDL_CreateRenderer(SDL_Window $window, int $index, int $flags)
     * @method SDL_Renderer SDL_CreateSoftwareRenderer(SDL_Surface $surface)
     * @method SDL_Renderer SDL_GetRenderer(SDL_Window $window)
     * @method int SDL_GetRendererInfo(SDL_Renderer $renderer, SDL_RendererInfo $info)
     * @method int SDL_GetRendererOutputSize(SDL_Renderer $renderer, int $w, int $h)
     * @method SDL_Texture SDL_CreateTexture(SDL_Renderer $renderer, int $format, int $access, int $w, int $h)
     * @method SDL_Texture SDL_CreateTextureFromSurface(SDL_Renderer $renderer, SDL_Surface $surface)
     * @method int SDL_QueryTexture(SDL_Texture $texture, int $format, int $access, int $w, int $h)
     * @method int SDL_SetTextureColorMod(SDL_Texture $texture, int $r, int $g, int $b)
     * @method int SDL_GetTextureColorMod(SDL_Texture $texture, int $r, int $g, int $b)
     * @method int SDL_SetTextureAlphaMod(SDL_Texture $texture, int $alpha)
     * @method int SDL_GetTextureAlphaMod(SDL_Texture $texture, int $alpha)
     * @method int SDL_SetTextureBlendMode(SDL_Texture $texture, SDL_BlendMode $blendMode)
     * @method int SDL_GetTextureBlendMode(SDL_Texture $texture, SDL_BlendMode $blendMode)
     * @method int SDL_UpdateTexture(SDL_Texture $texture, SDL_Rect $rect, void $pixels, int $pitch)
     * @method int SDL_UpdateYUVTexture(SDL_Texture $texture, SDL_Rect $rect, int $Yplane, int $Ypitch, int $Uplane, int $Upitch, int $Vplane, int $Vpitch)
     * @method int SDL_LockTexture(SDL_Texture $texture, SDL_Rect $rect, int $pitch)
     * @method void SDL_UnlockTexture(SDL_Texture $texture)
     * @method int SDL_RenderTargetSupported(SDL_Renderer $renderer)
     * @method int SDL_SetRenderTarget(SDL_Renderer $renderer, SDL_Texture $texture)
     * @method SDL_Texture SDL_GetRenderTarget(SDL_Renderer $renderer)
     * @method int SDL_RenderSetLogicalSize(SDL_Renderer $renderer, int $w, int $h)
     * @method void SDL_RenderGetLogicalSize(SDL_Renderer $renderer, int $w, int $h)
     * @method int SDL_RenderSetIntegerScale(SDL_Renderer $renderer, int $enable)
     * @method int SDL_RenderGetIntegerScale(SDL_Renderer $renderer)
     * @method int SDL_RenderSetViewport(SDL_Renderer $renderer, SDL_Rect $rect)
     * @method void SDL_RenderGetViewport(SDL_Renderer $renderer, SDL_Rect $rect)
     * @method int SDL_RenderSetClipRect(SDL_Renderer $renderer, SDL_Rect $rect)
     * @method void SDL_RenderGetClipRect(SDL_Renderer $renderer, SDL_Rect $rect)
     * @method int SDL_RenderIsClipEnabled(SDL_Renderer $renderer)
     * @method int SDL_RenderSetScale(SDL_Renderer $renderer, float $scaleX, float $scaleY)
     * @method void SDL_RenderGetScale(SDL_Renderer $renderer, float $scaleX, float $scaleY)
     * @method int SDL_SetRenderDrawColor(SDL_Renderer $renderer, int $r, int $g, int $b, int $a)
     * @method int SDL_GetRenderDrawColor(SDL_Renderer $renderer, int $r, int $g, int $b, int $a)
     * @method int SDL_SetRenderDrawBlendMode(SDL_Renderer $renderer, SDL_BlendMode $blendMode)
     * @method int SDL_GetRenderDrawBlendMode(SDL_Renderer $renderer, SDL_BlendMode $blendMode)
     * @method int SDL_RenderClear(SDL_Renderer $renderer)
     * @method int SDL_RenderDrawPoint(SDL_Renderer $renderer, int $x, int $y)
     * @method int SDL_RenderDrawPoints(SDL_Renderer $renderer, int $points, int $count)
     * @method int SDL_RenderDrawLine(SDL_Renderer $renderer, int $x1, int $y1, int $x2, int $y2)
     * @method int SDL_RenderDrawLines(SDL_Renderer $renderer, int $points, int $count)
     * @method int SDL_RenderDrawRect(SDL_Renderer $renderer, SDL_Rect $rect)
     * @method int SDL_RenderDrawRects(SDL_Renderer $renderer, SDL_Rect $rects, int $count)
     * @method int SDL_RenderFillRect(SDL_Renderer $renderer, SDL_Rect $rect)
     * @method int SDL_RenderFillRects(SDL_Renderer $renderer, SDL_Rect $rects, int $count)
     * @method int SDL_RenderCopy(SDL_Renderer $renderer, SDL_Texture $texture, SDL_Rect $srcrect, SDL_Rect $dstrect)
     * @method int SDL_RenderCopyEx(SDL_Renderer $renderer, SDL_Texture $texture, SDL_Rect $srcrect, SDL_Rect $dstrect, float $angle, int $center, SDL_RendererFlip $flip)
     * @method int SDL_RenderDrawPointF(SDL_Renderer $renderer, float $x, float $y)
     * @method int SDL_RenderDrawPointsF(SDL_Renderer $renderer, int $points, int $count)
     * @method int SDL_RenderDrawLineF(SDL_Renderer $renderer, float $x1, float $y1, float $x2, float $y2)
     * @method int SDL_RenderDrawLinesF(SDL_Renderer $renderer, int $points, int $count)
     * @method int SDL_RenderDrawRectF(SDL_Renderer $renderer, SDL_FRect $rect)
     * @method int SDL_RenderDrawRectsF(SDL_Renderer $renderer, SDL_FRect $rects, int $count)
     * @method int SDL_RenderFillRectF(SDL_Renderer $renderer, SDL_FRect $rect)
     * @method int SDL_RenderFillRectsF(SDL_Renderer $renderer, SDL_FRect $rects, int $count)
     * @method int SDL_RenderCopyF(SDL_Renderer $renderer, SDL_Texture $texture, SDL_Rect $srcrect, SDL_FRect $dstrect)
     * @method int SDL_RenderCopyExF(SDL_Renderer $renderer, SDL_Texture $texture, SDL_Rect $srcrect, SDL_FRect $dstrect, float $angle, int $center, SDL_RendererFlip $flip)
     * @method int SDL_RenderReadPixels(SDL_Renderer $renderer, SDL_Rect $rect, int $format, void $pixels, int $pitch)
     * @method void SDL_RenderPresent(SDL_Renderer $renderer)
     * @method void SDL_DestroyTexture(SDL_Texture $texture)
     * @method void SDL_DestroyRenderer(SDL_Renderer $renderer)
     * @method int SDL_RenderFlush(SDL_Renderer $renderer)
     * @method int SDL_GL_BindTexture(SDL_Texture $texture, float $texw, float $texh)
     * @method int SDL_GL_UnbindTexture(SDL_Texture $texture)
     * @method void SDL_RenderGetMetalLayer(SDL_Renderer $renderer)
     * @method void SDL_RenderGetMetalCommandEncoder(SDL_Renderer $renderer)
     * @method int SDL_NumSensors()
     * @method string SDL_SensorGetDeviceName(int $device_index)
     * @method SDL_SensorType SDL_SensorGetDeviceType(int $device_index)
     * @method int SDL_SensorGetDeviceNonPortableType(int $device_index)
     * @method SDL_SensorID SDL_SensorGetDeviceInstanceID(int $device_index)
     * @method SDL_Sensor SDL_SensorOpen(int $device_index)
     * @method SDL_Sensor SDL_SensorFromInstanceID(SDL_SensorID $instance_id)
     * @method string SDL_SensorGetName(SDL_Sensor $sensor)
     * @method SDL_SensorType SDL_SensorGetType(SDL_Sensor $sensor)
     * @method int SDL_SensorGetNonPortableType(SDL_Sensor $sensor)
     * @method SDL_SensorID SDL_SensorGetInstanceID(SDL_Sensor $sensor)
     * @method int SDL_SensorGetData(SDL_Sensor $sensor, float $data, int $num_values)
     * @method void SDL_SensorClose(SDL_Sensor $sensor)
     * @method void SDL_SensorUpdate()
     * @method SDL_Window SDL_CreateShapedWindow(string $title, int $x, int $y, int $w, int $h, int $flags)
     * @method int SDL_IsShapedWindow(SDL_Window $window)
     * @method int SDL_SetWindowShape(SDL_Window $window, SDL_Surface $shape, SDL_WindowShapeMode $shape_mode)
     * @method int SDL_GetShapedWindowMode(SDL_Window $window, SDL_WindowShapeMode $shape_mode)
     * @method void SDL_SetWindowsMessageHook(SDL_WindowsMessageHook $callback, void $userdata)
     * @method int SDL_Direct3D9GetAdapterIndex(int $displayIndex)
     * @method IDirect3DDevice9 SDL_RenderGetD3D9Device(SDL_Renderer $renderer)
     * @method int SDL_DXGIGetOutputInfo(int $displayIndex, int $adapterIndex, int $outputIndex)
     * @method int SDL_IsTablet()
     * @method int SDL_GetTicks()
     * @method int SDL_GetPerformanceCounter()
     * @method int SDL_GetPerformanceFrequency()
     * @method void SDL_Delay(int $ms)
     * @method SDL_TimerID SDL_AddTimer(int $interval, SDL_TimerCallback $callback, void $param)
     * @method int SDL_RemoveTimer(SDL_TimerID $id)
     * @method void SDL_GetVersion(SDL_version|CData $ver)
     * @method string SDL_GetRevision()
     * @method int SDL_GetRevisionNumber()
     * @method int SDL_Init(int|Init $flags)
     * @method int SDL_InitSubSystem(int|Init $flags)
     * @method void SDL_QuitSubSystem(int|Init $flags)
     * @method int SDL_WasInit(int|Init $flags)
     * @method void SDL_Quit()
     */
    class SDLFunctions
    {
    }

    class SDL_AssertionHandler extends \FFI\CData
    {
    }

    /**
     * Class SDL_AssertData
     */
    class SDL_AssertData extends \FFI\CData
    {
        /**
         * @var int
         */
        public int $always_ignore;

        /**
         * @var int
         */
        public int $trigger_count;

        /**
         * @var string|CData
         */
        public string $condition;

        /**
         * @var string|CData
         */
        public string $filename;

        /**
         * @var int
         */
        public int $linenum;

        /**
         * @var string|CData
         */
        public string $function;

        /**
         * @var self|null
         */
        public ?self $next;
    }

    class SDL_SpinLock extends \FFI\CData
    {
    }

    /**
     * A structure representing an atomic integer value.
     */
    class SDL_atomic_t extends \FFI\CData
    {
        /**
         * The atomic integer value
         *
         * @var int
         */
        public int $value;
    }

    class SDL_errorcode extends \FFI\CData
    {
    }

    class SDL_mutex extends \FFI\CData
    {
    }

    class SDL_sem extends \FFI\CData
    {
    }

    class SDL_cond extends \FFI\CData
    {
    }

    class SDL_ThreadFunction extends \FFI\CData
    {
    }

    class pfnSDL_CurrentBeginThread extends \FFI\CData
    {
    }

    class pfnSDL_CurrentEndThread extends \FFI\CData
    {
    }

    class SDL_Thread extends \FFI\CData
    {
    }

    class SDL_threadID extends \FFI\CData
    {
    }

    class SDL_TLSID extends \FFI\CData
    {
    }

    /**
     * This is the read/write operation structure -- very basic.
     */
    class SDL_RWops extends \FFI\CData
    {
        /**
         * Contains the size of the file in this rwops, or -1 if unknown
         *
         * @var int|null
         */
        public ?int $size;

        /**
         * Seek to \c offset relative to \c whence, one of stdio's whence values:
         * RW_SEEK_SET, RW_SEEK_CUR, RW_SEEK_END
         *
         * Contains the final offset in the data stream, or -1 on error.
         *
         * @var int|null
         */
        public ?int $seek;

        /**
         * Read up to \c maxnum objects each of size \c size from the data
         * stream to the area pointed at by \c ptr.
         *
         * Contains the number of objects read, or 0 at error or end of file.
         *
         * @var int|null
         */
        public ?int $read;

        /**
         * Write exactly \c num objects each of size \c size from the area
         * pointed at by \c ptr to data stream.
         *
         * Contains the number of objects written, or 0 at error or end of file.
         *
         * @var int|null
         */
        public ?int $write;

        /**
         * Close and free an allocated SDL_RWops structure.
         *
         * Contains 0 if successful or -1 on write error when flushing data.
         *
         * @var int|null
         */
        public ?int $close;

        /**
         * @var int
         */
        public int $type;

        /**
         * @var CData|CData[]
         */
        public CData $hidden;
    }

    /**
     *  The calculated values in this structure are calculated by SDL_OpenAudio().
     *
     *  For multi-channel audio, the default SDL channel mapping is:
     *  2:  FL FR                       (stereo)
     *  3:  FL FR LFE                   (2.1 surround)
     *  4:  FL FR BL BR                 (quad)
     *  5:  FL FR FC BL BR              (quad + center)
     *  6:  FL FR FC LFE SL SR          (5.1 surround - last two can also be BL BR)
     *  7:  FL FR FC LFE BC SL SR       (6.1 surround)
     *  8:  FL FR FC LFE BL BR SL SR    (7.1 surround)
     */
    class SDL_AudioSpec extends \FFI\CData
    {
        /**
         * DSP frequency -- samples per second
         *
         * @var int
         */
        public int $freq;

        /**
         * Audio data format
         *
         * @var int|SDL_AudioFormat
         */
        public int $format;

        /**
         * Number of channels: 1 mono, 2 stereo
         */
        public int $channels;

        /**
         * Audio buffer silence value (calculated)
         */
        public int $silence;

        /**
         * Audio buffer size in sample FRAMES (total samples divided by channel count)
         */
        public int $samples;

        /**
         * Necessary for some compile environments
         */
        public int $padding;

        /**
         * Audio buffer size in bytes (calculated)
         */
        public int $size;

        /**
         * Callback that feeds the audio device (NULL to use SDL_QueueAudio()).
         */
        public SDL_AudioCallback $callback;

        /**
         * Userdata passed to callback (ignored for NULL callbacks).
         */
        public $userdata;
    }

    /**
     * TODO Not documented yet =)) Idk what is this means
     * @see https://wiki.libsdl.org/SDL_AudioSpec
     */
    class SDL_AudioCallback extends \FFI\CData
    {

    }

    class SDL_AudioDeviceID extends \FFI\CData
    {
    }

    class SDL_AudioStatus extends \FFI\CData
    {
    }

    /**
     * A structure that contains audio data conversion information.
     *
     * @see https://wiki.libsdl.org/SDL_AudioCVT
     */
    class SDL_AudioCVT extends \FFI\CData
    {
        /**
         * Set to 1 if conversion possible
         *
         * @var int
         */
        public int $needed;

        /**
         * Source audio format
         *
         * @var SDL_AudioFormat|int
         */
        public int $src_format;

        /**
         * Target audio format
         *
         * @var SDL_AudioFormat|int
         */
        public int $dst_format;

        /**
         * Rate conversion increment
         *
         * @var float
         */
        public float $rate_incr;

        /**
         * Buffer to hold entire audio data
         *
         * @var int|CData
         */
        public int $buf;

        /**
         * Length of original audio buffer
         *
         * @var int
         */
        public int $len;

        /**
         * Length of converted audio buffer
         *
         * @var int
         */
        public int $len_cvt;

        /**
         * buffer must be len*len_mult big
         *
         * @var int
         */
        public int $len_mult;

        /**
         * Given len, final size is len*len_ratio
         */
        public float $len_ratio;

        /**
         * NULL-terminated list of filter functions
         *
         * @internal Internal usage
         * @var array|SDL_AudioFilter[]
         */
        public array $filters;

        /**
         * Current audio conversion function
         *
         * @internal Internal usage
         * @var int
         */
        public int $filter_index;
    }

    /**
     * TODO
     */
    class SDL_AudioFilter extends \FFI\CData
    {

    }

    /**
     * Audio format flags.
     *
     * These are what the 16 bits in SDL_AudioFormat currently mean...
     * (Unspecified bits are always zero).
     *
     * <code>
     *  ++-----------------------sample is signed if set
     *  ||
     *  ||       ++-----------sample is bigendian if set
     *  ||       ||
     *  ||       ||          ++---sample is float if set
     *  ||       ||          ||
     *  ||       ||          || +---sample bit size---+
     *  ||       ||          || |                     |
     *  15 14 13 12 11 10 09 08 07 06 05 04 03 02 01 00
     * </code>
     *
     * SDL_AudioFormat mapped to PHP int value
     *
     * <code>
     *  typedef Uint16 SDL_AudioFormat;
     * </code>
     */
    class SDL_AudioFormat extends \FFI\CData
    {
    }

    class SDL_AudioStream extends \FFI\CData
    {
    }

    class SDL_PixelFormat extends \FFI\CData
    {
    }

    class SDL_Palette extends \FFI\CData
    {
    }

    class SDL_Color extends \FFI\CData
    {
    }

    class SDL_Rect extends \FFI\CData
    {
    }

    class SDL_BlendFactor extends \FFI\CData
    {
    }

    class SDL_BlendOperation extends \FFI\CData
    {
    }

    class SDL_BlendMode extends \FFI\CData
    {
    }

    class SDL_Surface extends \FFI\CData
    {
    }

    class SDL_YUV_CONVERSION_MODE extends \FFI\CData
    {
    }

    class SDL_DisplayOrientation extends \FFI\CData
    {
    }

    /**
     * Class SDL_DisplayMode
     */
    class SDL_DisplayMode extends \FFI\CData
    {
        /**
         * Pixel format
         *
         * @var int
         */
        public int $format;

        /**
         * Width, in screen coordinates
         *
         * @var int
         */
        public int $w;

        /**
         * Height, in screen coordinates
         *
         * @var int
         */
        public int $h;

        /**
         * Refresh rate (or zero for unspecified)
         *
         * @var int
         */
        public int $refresh_rate;

        /**
         * Driver-specific data, initialize to 0
         *
         * @var CData|null
         */
        public ?CData $driverdata;
    }

    class SDL_Window extends \FFI\CData
    {
    }

    class SDL_HitTest extends \FFI\CData
    {
    }

    class SDL_GLContext extends \FFI\CData
    {
    }

    class SDL_Keymod extends \FFI\CData
    {
    }

    class SDL_Scancode extends \FFI\CData
    {
    }

    class SDL_Keycode extends \FFI\CData
    {
    }

    class SDL_Cursor extends \FFI\CData
    {
    }

    class SDL_SystemCursor extends \FFI\CData
    {
    }

    class SDL_JoystickGUID extends \FFI\CData
    {
    }

    class SDL_JoystickType extends \FFI\CData
    {
    }

    class SDL_JoystickID extends \FFI\CData
    {
    }

    class SDL_Joystick extends \FFI\CData
    {
    }

    class SDL_JoystickPowerLevel extends \FFI\CData
    {
    }

    class SDL_GameController extends \FFI\CData
    {
    }

    class SDL_GameControllerAxis extends \FFI\CData
    {
    }

    class SDL_GameControllerButtonBind extends \FFI\CData
    {
    }

    class SDL_GameControllerButton extends \FFI\CData
    {
    }

    class SDL_TouchID extends \FFI\CData
    {
    }

    class SDL_TouchDeviceType extends \FFI\CData
    {
    }

    class SDL_Finger extends \FFI\CData
    {
    }

    class SDL_GestureID extends \FFI\CData
    {
    }

    /**
     * TODO
     */
    class SDL_Event extends \FFI\CData
    {
        public int $type;
        public SDL_CommonEvent $common;
        public SDL_DisplayEvent $display;
        public SDL_WindowEvent $window;
        public SDL_KeyboardEvent $key;
        public SDL_TextEditingEvent $edit;
        public SDL_TextInputEvent $text;
        public SDL_MouseMotionEvent $motion;
        public SDL_MouseButtonEvent $button;
        public SDL_MouseWheelEvent $wheel;
        public SDL_JoyAxisEvent $jaxis;
        public SDL_JoyBallEvent $jball;
        public SDL_JoyHatEvent $jhat;
        public SDL_JoyButtonEvent $jbutton;
        public SDL_JoyDeviceEvent $jdevice;
        public SDL_ControllerAxisEvent $caxis;
        public SDL_ControllerButtonEvent $cbutton;
        public SDL_ControllerDeviceEvent $cdevice;
        public SDL_AudioDeviceEvent $adevice;
        public SDL_SensorEvent $sensor;
        public SDL_QuitEvent $quit;
        public SDL_UserEvent $user;
        public SDL_SysWMEvent $syswm;
        public SDL_TouchFingerEvent $tfinger;
        public SDL_MultiGestureEvent $mgesture;
        public SDL_DollarGestureEvent $dgesture;
        public SDL_DropEvent $drop;

        /**
         * @var array|int[]
         */
        public array $padding;
    }

    class SDL_eventaction extends \FFI\CData
    {
    }

    class SDL_EventFilter extends \FFI\CData
    {
    }

    class SDL_Haptic extends \FFI\CData
    {
    }

    class SDL_HapticEffect extends \FFI\CData
    {
    }

    class SDL_LogPriority extends \FFI\CData
    {
    }

    class SDL_LogOutputFunction extends \FFI\CData
    {
    }

    class SDL_MessageBoxData extends \FFI\CData
    {
        /**
         * SDL_MessageBoxFlags
         *
         * @var int
         */
        public int $flags;

        /**
         * Parent window, can be NULL
         *
         * @var SDL_Window|CData
         */
        public CData $window;

        /**
         * UTF-8 title
         *
         * @var string|CData
         */
        public string $title;

        /**
         * UTF-8 message text
         *
         * @var string|CData
         */
        public string $message;

        /**
         * @var int
         */
        public int $numbuttons;

        /**
         * @var SDL_MessageBoxButtonData[]|CData[]
         */
        public array $buttons;

        /**
         * SDL_MessageBoxColorScheme, can be NULL to use system settings
         *
         * @var SDL_MessageBoxColorScheme|CData
         */
        public CData $colorScheme;
    }

    /**
     * Individual button data.
     */
    class SDL_MessageBoxButtonData extends \FFI\CData
    {
        /**
         * SDL_MessageBoxButtonFlags
         *
         * @var int
         */
        public int $flags;

        /**
         * User defined button id (value returned via SDL_ShowMessageBox)
         *
         * @var int
         */
        public int $buttonid;

        /**
         * The UTF-8 button text
         *
         * @var CData|string
         */
        public string $text;
    }

    class SDL_PowerState extends \FFI\CData
    {
    }

    class SDL_RendererInfo extends \FFI\CData
    {
    }

    class SDL_Renderer extends \FFI\CData
    {
    }

    class SDL_Texture extends \FFI\CData
    {
    }

    class SDL_RendererFlip extends \FFI\CData
    {
    }

    class SDL_FRect extends \FFI\CData
    {
    }

    class SDL_SensorType extends \FFI\CData
    {
    }

    class SDL_SensorID extends \FFI\CData
    {
    }

    class SDL_Sensor extends \FFI\CData
    {
    }

    class SDL_WindowShapeMode extends \FFI\CData
    {
    }

    class SDL_WindowsMessageHook extends \FFI\CData
    {
    }

    class IDirect3DDevice9 extends \FFI\CData
    {
    }

    class SDL_TimerCallback extends \FFI\CData
    {
    }

    class SDL_TimerID extends \FFI\CData
    {
    }

    /**
     * Class SDL_version
     */
    class SDL_version extends \FFI\CData
    {
        /**
         * @var int
         */
        public int $major;

        /**
         * @var int
         */
        public int $minor;

        /**
         * @var int
         */
        public int $patch;
    }
}
