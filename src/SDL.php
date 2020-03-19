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

use FFI\CCharPtr;
use FFI\CData;
use FFI\CFloat;
use FFI\CInt;
use FFI\CIntPtr;
use FFI\CIntPtrPtr;
use FFI\CPtr;
use FFI\CPtrPtr;
use Serafim\SDL\Exception\SDLException;
use Serafim\SDL\Exception\VersionException;
use Serafim\SDL\Kernel\Enums;
use Serafim\SDL\Kernel\OpenGL\GLAttr;
use Serafim\SDL\Kernel\OpenGL\GLSwapInterval;
use Serafim\SDL\Kernel\RWops\SeekWhence;

/**
 * @mixin \FFI
 *
 * @formatter:off
 * @method void addEventWatch(EventFilterPtr $filter, CPtr $userdata)
 * @method void addHintCallback(string $name, int $callback, CPtr $userdata)
 * @method int addTimer(int $interval, \Closure $callback, CPtr $param)
 * @method PixelFormatPtr allocFormat(int $pixel_format)
 * @method PalettePtr allocPalette(int $ncolors)
 * @method int atomicAdd(AtomicTPtr $a, int $v)
 * @method int atomicCAS(AtomicTPtr|CPtr $a, int $oldval, int $newval)
 * @method int atomicCASPtr(CPtrPtr $a, CPtr $oldval, CPtr $newval)
 * @method int atomicGet(AtomicTPtr $a)
 * @method void atomicGetPtr(CPtrPtr $a)
 * @method void atomicLock(int|CIntPtr $lock)
 * @method int atomicSet(AtomicTPtr $a, int $v)
 * @method void atomicSetPtr(CPtrPtr $a, CPtr $v)
 * @method int atomicTryLock(int|CIntPtr $lock)
 * @method void atomicUnlock(int|CIntPtr $lock)
 * @method int audioInit(string $driver_name)
 * @method void audioQuit()
 * @method int audioStreamAvailable(AudioStreamPtr $stream)
 * @method void audioStreamClear(AudioStreamPtr $stream)
 * @method int audioStreamFlush(AudioStreamPtr $stream)
 * @method int audioStreamGet(AudioStreamPtr $stream, CPtr $buf, int $len)
 * @method int audioStreamPut(AudioStreamPtr $stream, CPtr $buf, int $len)
 * @method int buildAudioCVT(AudioCVTPtr $cvt, int|int $src_format, int $src_channels, int $src_rate, int|int $dst_format, int $dst_channels, int $dst_rate)
 * @method void calculateGammaRamp(float $gamma, int $ramp)
 * @method int captureMouse(int $enabled)
 * @method void clearError()
 * @method void clearHints()
 * @method void clearQueuedAudio(int|CIntPtr $dev)
 * @method void closeAudio()
 * @method void closeAudioDevice(int|CIntPtr $dev)
 * @method int|CIntPtr composeCustomBlendMode(int|CIntPtr $srcColorFactor, int|CIntPtr $dstColorFactor, int|CIntPtr $colorOperation, int|CIntPtr $srcAlphaFactor, int|CIntPtr $dstAlphaFactor, int|CIntPtr $alphaOperation)
 * @method int condBroadcast(condPtr $cond)
 * @method int condSignal(condPtr $cond)
 * @method int condWait(condPtr $cond, MutexPtr $mutex)
 * @method int condWaitTimeout(condPtr $cond, MutexPtr $mutex, int $ms)
 * @method int convertAudio(AudioCVTPtr $cvt)
 * @method int convertPixels(int $width, int $height, int $src_format, CPtr $src, int $src_pitch, int $dst_format, CPtr $dst, int $dst_pitch)
 * @method SurfacePtr convertSurface(SurfacePtr $src, PixelFormatPtr $fmt, ?int $flags)
 * @method SurfacePtr convertSurfaceFormat(SurfacePtr $src, int $pixel_format, int $flags)
 * @method CursorPtr createColorCursor(SurfacePtr $surface, int $hot_x, int $hot_y)
 * @method CondPtr createCond()
 * @method CursorPtr createCursor(int $data, int $mask, int $w, int $h, int $hot_x, int $hot_y)
 * @method MutexPtr createMutex()
 * @method SurfacePtr createRGBSurface(int $flags, int $width, int $height, int $depth, int $Rmask, int $Gmask, int $Bmask, int $Amask)
 * @method SurfacePtr createRGBSurfaceFrom(CPtr $pixels, int $width, int $height, int $depth, int $pitch, int $Rmask, int $Gmask, int $Bmask, int $Amask)
 * @method SurfacePtr createRGBSurfaceWithFormat(int $flags, int $width, int $height, int $depth, int $format)
 * @method SurfacePtr createRGBSurfaceWithFormatFrom(CPtr $pixels, int $width, int $height, int $depth, int $pitch, int $format)
 * @method RendererPtr createRenderer(WindowPtr $window, int $index, int $flags)
 * @method SemaphorePtr createSemaphore(int $initial_value)
 * @method WindowPtr createShapedWindow(string $title, int $x, int $y, int $w, int $h, int $flags)
 * @method RendererPtr createSoftwareRenderer(SurfacePtr $surface)
 * @method CursorPtr createSystemCursor(int|CIntPtr $id)
 * @method TexturePtr createTexture(RendererPtr $renderer, int $format, int $access, int $w, int $h)
 * @method TexturePtr createTextureFromSurface(RendererPtr $renderer, SurfacePtr $surface)
 * @method ThreadPtr createThread(\Closure $fn, string|CCharPtr $name, CPtr $data, \Closure $pfnBeginThread, \Closure $pfnEndThread)
 * @method ThreadPtr createThreadWithStackSize(\Closure $fn, string|CCharPtr $name, int $stacksize, CPtr $data, \Closure $pfnBeginThread, \Closure $pfnEndThread)
 * @method WindowPtr createWindow(string $title, int $x, int $y, int $w, int $h, int $flags)
 * @method int createWindowAndRenderer(int $width, int $height, int $window_flags, WindowPtrPtr $window, RendererPtrPtr $renderer)
 * @method WindowPtr createWindowFrom(CPtr $data)
 * @method int dXGIGetOutputInfo(int $displayIndex, int $adapterIndex, int $outputIndex)
 * @method void delEventWatch(EventFilterPtr $filter, CPtr $userdata)
 * @method void delHintCallback(string $name, int $callback, CPtr $userdata)
 * @method void delay(int $ms)
 * @method int dequeueAudio(int|CIntPtr $dev, CPtr $data, int $len)
 * @method void destroyCond(condPtr $cond)
 * @method void destroyMutex(mutexPtr $mutex)
 * @method void destroyRenderer(RendererPtr $renderer)
 * @method void destroySemaphore(SemaphorePtr $sem)
 * @method void destroyTexture(TexturePtr $texture)
 * @method void destroyWindow(WindowPtr $window)
 * @method void detachThread(ThreadPtr $thread)
 * @method int direct3D9GetAdapterIndex(int $displayIndex)
 * @method void disableScreenSaver()
 * @method SurfacePtr duplicateSurface(SurfacePtr $surface)
 * @method void enableScreenSaver()
 * @method int enclosePoints(int $points, int $count, RectPtr $clip, RectPtr $result)
 * @method int error(int|CIntPtr $code)
 * @method int eventState(int $type, int $state)
 * @method int fillRect(SurfacePtr $dst, RectPtr $rect, int $color)
 * @method int fillRects(SurfacePtr $dst, RectPtr $rects, int $count, int $color)
 * @method void filterEvents(EventFilterPtr $filter, CPtr $userdata)
 * @method void flushEvent(int $type)
 * @method void flushEvents(int $minType, int $maxType)
 * @method void freeAudioStream(AudioStreamPtr $stream)
 * @method void freeCursor(CursorPtr $cursor)
 * @method void freeFormat(PixelFormatPtr $format)
 * @method void freePalette(PalettePtr $palette)
 * @method void freeRW(RWopsPtr $area)
 * @method void freeSurface(SurfacePtr $surface)
 * @method void freeWAV(int $audio_buf)
 * @method int gameControllerAddMapping(string $mappingString)
 * @method int gameControllerAddMappingsFromRW(RWopsPtr $rw, int $freerw)
 * @method void gameControllerClose(GameControllerPtr $gamecontroller)
 * @method int gameControllerEventState(int $state)
 * @method GameControllerPtr gameControllerFromInstanceID(int|CIntPtr $joyid)
 * @method int gameControllerGetAttached(GameControllerPtr $gamecontroller)
 * @method int gameControllerGetAxis(GameControllerPtr $gamecontroller, int|CIntPtr $axis)
 * @method int|CIntPtr gameControllerGetAxisFromString(string $pchString)
 * @method GameControllerButtonBind gameControllerGetBindForAxis(GameControllerPtr $gamecontroller, int|CIntPtr $axis)
 * @method GameControllerButtonBind gameControllerGetBindForButton(GameControllerPtr $gamecontroller, int|CIntPtr $button)
 * @method int gameControllerGetButton(GameControllerPtr $gamecontroller, int|CIntPtr $button)
 * @method int|CIntPtr gameControllerGetButtonFromString(string $pchString)
 * @method JoystickPtr gameControllerGetJoystick(GameControllerPtr $gamecontroller)
 * @method int gameControllerGetPlayerIndex(GameControllerPtr $gamecontroller)
 * @method int gameControllerGetProduct(GameControllerPtr $gamecontroller)
 * @method int gameControllerGetProductVersion(GameControllerPtr $gamecontroller)
 * @method string gameControllerGetStringForAxis(int|CIntPtr $axis)
 * @method string gameControllerGetStringForButton(int|CIntPtr $button)
 * @method int gameControllerGetVendor(GameControllerPtr $gamecontroller)
 * @method string gameControllerMapping(GameControllerPtr $gamecontroller)
 * @method string gameControllerMappingForDeviceIndex(int $joystick_index)
 * @method string gameControllerMappingForGUID(JoystickGUID $guid)
 * @method string gameControllerMappingForIndex(int $mapping_index)
 * @method string gameControllerName(GameControllerPtr $gamecontroller)
 * @method string gameControllerNameForIndex(int $joystick_index)
 * @method int gameControllerNumMappings()
 * @method GameControllerPtr gameControllerOpen(int $joystick_index)
 * @method int gameControllerRumble(GameControllerPtr $gamecontroller, int $low_frequency_rumble, int $high_frequency_rumble, int $duration_ms)
 * @method void gameControllerUpdate()
 * @method CData getAssertionHandler(CPtrPtr $puserdata)
 * @method AssertDataPtr getAssertionReport()
 * @method string getAudioDeviceName(int $index, int $iscapture)
 * @method int|CIntPtr getAudioDeviceStatus(int|CIntPtr $dev)
 * @method string getAudioDriver(int $index)
 * @method int|CIntPtr getAudioStatus()
 * @method string getBasePath()
 * @method int getCPUCacheLineSize()
 * @method int getCPUCount()
 * @method void getClipRect(SurfacePtr $surface, RectPtr $rect)
 * @method string getClipboardText()
 * @method DisplayModePtr|CData getClosestDisplayMode(int $displayIndex, DisplayModePtr $mode, DisplayModePtr $closest)
 * @method int getColorKey(SurfacePtr $surface, int $key)
 * @method string getCurrentAudioDriver()
 * @method int getCurrentDisplayMode(int $displayIndex, DisplayModePtr $mode)
 * @method string getCurrentVideoDriver()
 * @method CursorPtr getCursor()
 * @method CData getDefaultAssertionHandler()
 * @method CursorPtr getDefaultCursor()
 * @method int getDesktopDisplayMode(int $displayIndex, DisplayModePtr $mode)
 * @method int getDisplayBounds(int $displayIndex, RectPtr $rect)
 * @method int getDisplayDPI(int $displayIndex, float $ddpi, float $hdpi, float $vdpi)
 * @method int getDisplayMode(int $displayIndex, int $modeIndex, DisplayModePtr $mode)
 * @method string getDisplayName(int $displayIndex)
 * @method int|CIntPtr getDisplayOrientation(int $displayIndex)
 * @method int getDisplayUsableBounds(int $displayIndex, RectPtr $rect)
 * @method string|CCharPtr getError()
 * @method int getEventFilter(EventFilterPtr $filter, CPtrPtr $userdata)
 * @method int getGlobalMouseState(int $x, int $y)
 * @method WindowPtr getGrabbedWindow()
 * @method string getHint(string $name)
 * @method int getHintBoolean(string $name, int $default_value)
 * @method int|CIntPtr getKeyFromName(string $name)
 * @method int|CIntPtr getKeyFromScancode(int|CIntPtr $scancode)
 * @method string getKeyName(int|CIntPtr $key)
 * @method WindowPtr getKeyboardFocus()
 * @method int getKeyboardState(int $numkeys)
 * @method int|CIntPtr getModState()
 * @method WindowPtr getMouseFocus()
 * @method int getMouseState(int $x, int $y)
 * @method int getNumAllocations()
 * @method int getNumAudioDevices(int $iscapture)
 * @method int getNumAudioDrivers()
 * @method int getNumDisplayModes(int $displayIndex)
 * @method int getNumRenderDrivers()
 * @method int getNumTouchDevices()
 * @method int getNumTouchFingers(int|CIntPtr $touchID)
 * @method int getNumVideoDisplays()
 * @method int getNumVideoDrivers()
 * @method int getPerformanceCounter()
 * @method int getPerformanceFrequency()
 * @method string getPixelFormatName(int $format)
 * @method string getPlatform()
 * @method int getPowerInfo(int $secs, int $pct)
 * @method string getPrefPath(string $org, string $app)
 * @method int getQueuedAudioSize(int|CIntPtr $dev)
 * @method void getRGB(int $pixel, PixelFormatPtr $format, int $r, int $g, int $b)
 * @method void getRGBA(int $pixel, PixelFormatPtr $format, int $r, int $g, int $b, int $a)
 * @method int getRelativeMouseMode()
 * @method int getRelativeMouseState(int $x, int $y)
 * @method int getRenderDrawBlendMode(RendererPtr $renderer, int|CIntPtr $blendMode)
 * @method int getRenderDrawColor(RendererPtr $renderer, int $r, int $g, int $b, int $a)
 * @method int getRenderDriverInfo(int $index, RendererInfoPtr $info)
 * @method TexturePtr getRenderTarget(RendererPtr $renderer)
 * @method RendererPtr getRenderer(WindowPtr $window)
 * @method int getRendererInfo(RendererPtr $renderer, RendererInfoPtr $info)
 * @method int getRendererOutputSize(RendererPtr $renderer, int $w, int $h)
 * @method string getRevision()
 * @method int getRevisionNumber()
 * @method int|CIntPtr getScancodeFromKey(int|CIntPtr $key)
 * @method int|CIntPtr getScancodeFromName(string $name)
 * @method string getScancodeName(int|CIntPtr $scancode)
 * @method int getShapedWindowMode(WindowPtr $window, WindowShapeModePtr $shape_mode)
 * @method int getSurfaceAlphaMod(SurfacePtr $surface, int $alpha)
 * @method int getSurfaceBlendMode(SurfacePtr $surface, int|CIntPtr $blendMode)
 * @method int getSurfaceColorMod(SurfacePtr $surface, int $r, int $g, int $b)
 * @method int getSystemRAM()
 * @method int getTextureAlphaMod(TexturePtr $texture, int $alpha)
 * @method int getTextureBlendMode(TexturePtr $texture, int|CIntPtr $blendMode)
 * @method int getTextureColorMod(TexturePtr $texture, int $r, int $g, int $b)
 * @method int getThreadID(ThreadPtr $thread)
 * @method string|CCharPtr getThreadName(ThreadPtr $thread)
 * @method int getTicks()
 * @method int|CIntPtr getTouchDevice(int $index)
 * @method int|CIntPtr getTouchDeviceType(int|CIntPtr $touchID)
 * @method FingerPtr getTouchFinger(int|CIntPtr $touchID, int $index)
 * @method string getVideoDriver(int $index)
 * @method int getWindowBordersSize(WindowPtr $window, int $top, int $left, int $bottom, int $right)
 * @method float getWindowBrightness(WindowPtr $window)
 * @method void getWindowData(WindowPtr $window, string $name)
 * @method int getWindowDisplayIndex(WindowPtr $window)
 * @method int getWindowDisplayMode(WindowPtr $window, DisplayModePtr $mode)
 * @method int getWindowFlags(WindowPtr $window)
 * @method WindowPtr getWindowFromID(int $id)
 * @method int getWindowGammaRamp(WindowPtr $window, int $red, int $green, int $blue)
 * @method int getWindowGrab(WindowPtr $window)
 * @method int getWindowID(WindowPtr $window)
 * @method void getWindowMaximumSize(WindowPtr $window, int $w, int $h)
 * @method void getWindowMinimumSize(WindowPtr $window, int $w, int $h)
 * @method int getWindowOpacity(WindowPtr $window, float $out_opacity)
 * @method int getWindowPixelFormat(WindowPtr $window)
 * @method void getWindowPosition(WindowPtr $window, int $x, int $y)
 * @method void getWindowSize(WindowPtr $window, int $w, int $h)
 * @method SurfacePtr|Surface[] getWindowSurface(WindowPtr $window)
 * @method string getWindowTitle(WindowPtr $window)
 * @method int|CIntPtr getYUVConversionMode()
 * @method int|CIntPtr getYUVConversionModeForResolution(int $width, int $height)
 * @method void hapticClose(HapticPtr $haptic)
 * @method void hapticDestroyEffect(HapticPtr $haptic, int $effect)
 * @method int hapticEffectSupported(HapticPtr $haptic, HapticEffectPtr $effect)
 * @method int hapticGetEffectStatus(HapticPtr $haptic, int $effect)
 * @method int hapticIndex(HapticPtr $haptic)
 * @method string hapticName(int $device_index)
 * @method int hapticNewEffect(HapticPtr $haptic, HapticEffectPtr $effect)
 * @method int hapticNumAxes(HapticPtr $haptic)
 * @method int hapticNumEffects(HapticPtr $haptic)
 * @method int hapticNumEffectsPlaying(HapticPtr $haptic)
 * @method HapticPtr hapticOpen(int $device_index)
 * @method HapticPtr hapticOpenFromJoystick(JoystickPtr $joystick)
 * @method HapticPtr hapticOpenFromMouse()
 * @method int hapticOpened(int $device_index)
 * @method int hapticPause(HapticPtr $haptic)
 * @method int hapticQuery(HapticPtr $haptic)
 * @method int hapticRumbleInit(HapticPtr $haptic)
 * @method int hapticRumblePlay(HapticPtr $haptic, float $strength, int $length)
 * @method int hapticRumbleStop(HapticPtr $haptic)
 * @method int hapticRumbleSupported(HapticPtr $haptic)
 * @method int hapticRunEffect(HapticPtr $haptic, int $effect, int $iterations)
 * @method int hapticSetAutocenter(HapticPtr $haptic, int $autocenter)
 * @method int hapticSetGain(HapticPtr $haptic, int $gain)
 * @method int hapticStopAll(HapticPtr $haptic)
 * @method int hapticStopEffect(HapticPtr $haptic, int $effect)
 * @method int hapticUnpause(HapticPtr $haptic)
 * @method int hapticUpdateEffect(HapticPtr $haptic, int $effect, HapticEffectPtr $data)
 * @method int has3DNow()
 * @method int hasAVX()
 * @method int hasAVX2()
 * @method int hasAVX512F()
 * @method int hasAltiVec()
 * @method int hasClipboardText()
 * @method int hasColorKey(SurfacePtr $surface)
 * @method int hasEvent(int $type)
 * @method int hasEvents(int $minType, int $maxType)
 * @method int hasIntersection(RectPtr $A, RectPtr $B)
 * @method int hasMMX()
 * @method int hasNEON()
 * @method int hasRDTSC()
 * @method int hasSSE()
 * @method int hasSSE2()
 * @method int hasSSE3()
 * @method int hasSSE41()
 * @method int hasSSE42()
 * @method int hasScreenKeyboardSupport()
 * @method void hideWindow(WindowPtr $window)
 * @method int init(int $flags)
 * @method int initSubSystem(int $flags)
 * @method int intersectRect(RectPtr $A, RectPtr $B, RectPtr $result)
 * @method int intersectRectAndLine(RectPtr $rect, int $X1, int $Y1, int $X2, int $Y2)
 * @method int isGameController(int $joystick_index)
 * @method int isScreenKeyboardShown(WindowPtr $window)
 * @method int isScreenSaverEnabled()
 * @method int isShapedWindow(WindowPtr $window)
 * @method int isTablet()
 * @method int isTextInputActive()
 * @method void joystickClose(JoystickPtr $joystick)
 * @method int|CIntPtr joystickCurrentPowerLevel(JoystickPtr $joystick)
 * @method int joystickEventState(int $state)
 * @method JoystickPtr joystickFromInstanceID(int|CIntPtr $joyid)
 * @method int joystickGetAttached(JoystickPtr $joystick)
 * @method int joystickGetAxis(JoystickPtr $joystick, int $axis)
 * @method int joystickGetAxisInitialState(JoystickPtr $joystick, int $axis, int $state)
 * @method int joystickGetBall(JoystickPtr $joystick, int $ball, int $dx, int $dy)
 * @method int joystickGetButton(JoystickPtr $joystick, int $button)
 * @method JoystickGUID joystickGetDeviceGUID(int $device_index)
 * @method int|CIntPtr joystickGetDeviceInstanceID(int $device_index)
 * @method int joystickGetDevicePlayerIndex(int $device_index)
 * @method int joystickGetDeviceProduct(int $device_index)
 * @method int joystickGetDeviceProductVersion(int $device_index)
 * @method int|CIntPtr joystickGetDeviceType(int $device_index)
 * @method int joystickGetDeviceVendor(int $device_index)
 * @method JoystickGUID joystickGetGUID(JoystickPtr $joystick)
 * @method JoystickGUID joystickGetGUIDFromString(string $pchGUID)
 * @method void joystickGetGUIDString(JoystickGUID $guid, string $pszGUID, int $cbGUID)
 * @method int joystickGetHat(JoystickPtr $joystick, int $hat)
 * @method int joystickGetPlayerIndex(JoystickPtr $joystick)
 * @method int joystickGetProduct(JoystickPtr $joystick)
 * @method int joystickGetProductVersion(JoystickPtr $joystick)
 * @method int|CIntPtr joystickGetType(JoystickPtr $joystick)
 * @method int joystickGetVendor(JoystickPtr $joystick)
 * @method int|CIntPtr joystickInstanceID(JoystickPtr $joystick)
 * @method int joystickIsHaptic(JoystickPtr $joystick)
 * @method string joystickName(JoystickPtr $joystick)
 * @method string joystickNameForIndex(int $device_index)
 * @method int joystickNumAxes(JoystickPtr $joystick)
 * @method int joystickNumBalls(JoystickPtr $joystick)
 * @method int joystickNumButtons(JoystickPtr $joystick)
 * @method int joystickNumHats(JoystickPtr $joystick)
 * @method JoystickPtr joystickOpen(int $device_index)
 * @method int joystickRumble(JoystickPtr $joystick, int $low_frequency_rumble, int $high_frequency_rumble, int $duration_ms)
 * @method void joystickUpdate()
 * @method int loadDollarTemplates(int|CIntPtr $touchId, RWopsPtr $src)
 * @method void loadFile(string $file, int $datasize)
 * @method void loadFileRW(RWopsPtr $src, int $datasize, int $freesrc)
 * @method void loadFunction(CPtr $handle, string $name)
 * @method void loadObject(string $sofile)
 * @method AudioSpecPtr loadWAVRW(RWopsPtr $src, int $freesrc, AudioSpecPtr $spec, int|CIntPtrPtr $audio_buf, int|CIntPtr $audio_len)
 * @method void lockAudio()
 * @method void lockAudioDevice(int|CIntPtr $dev)
 * @method void lockJoysticks()
 * @method int lockMutex(mutexPtr $mutex)
 * @method int lockSurface(SurfacePtr $surface)
 * @method int lockTexture(TexturePtr $texture, RectPtr $rect, CPtrPtr $pixels, int $pitch)
 * @method void log(string $fmt)
 * @method void logCritical(int $category, string $fmt)
 * @method void logDebug(int $category, string $fmt)
 * @method void logError(int $category, string $fmt)
 * @method void logGetOutputFunction(LogOutputFunctionPtr $callback, CPtrPtr $userdata)
 * @method LogPriority logGetPriority(int $category)
 * @method void logInfo(int $category, string $fmt)
 * @method void logMessage(int $category, LogPriority $priority, string $fmt)
 * @method void logMessageV(int $category, LogPriority $priority, string $fmt, object $ap)
 * @method void logResetPriorities()
 * @method void logSetAllPriority(LogPriority $priority)
 * @method void logSetOutputFunction(LogOutputFunctionPtr $callback, CPtr $userdata)
 * @method void logSetPriority(int $category, LogPriority $priority)
 * @method void logVerbose(int $category, string $fmt)
 * @method void logWarn(int $category, string $fmt)
 * @method int lowerBlit(SurfacePtr $src, RectPtr $srcrect, SurfacePtr $dst, RectPtr $dstrect)
 * @method int lowerBlitScaled(SurfacePtr $src, RectPtr $srcrect, SurfacePtr $dst, RectPtr $dstrect)
 * @method int mapRGB(PixelFormatPtr $format, int $r, int $g, int $b)
 * @method int mapRGBA(PixelFormatPtr $format, int $r, int $g, int $b, int $a)
 * @method int masksToPixelFormatEnum(int $bpp, int $Rmask, int $Gmask, int $Bmask, int $Amask)
 * @method void maximizeWindow(WindowPtr $window)
 * @method void memoryBarrierAcquireFunction()
 * @method void memoryBarrierReleaseFunction()
 * @method void minimizeWindow(WindowPtr $window)
 * @method void mixAudio(int $dst, int $src, int $len, int $volume)
 * @method void mixAudioFormat(int $dst, int $src, int|int $format, int $len, int $volume)
 * @method int mouseIsHaptic()
 * @method AudioStreamPtr newAudioStream(int|int $src_format, int $src_channels, int $src_rate, int|int $dst_format, int $dst_channels, int $dst_rate)
 * @method int numHaptics()
 * @method int numJoysticks()
 * @method int numSensors()
 * @method int openAudio(AudioSpecPtr $desired, AudioSpecPtr $obtained)
 * @method int|CIntPtr openAudioDevice(string $device, int $iscapture, AudioSpecPtr $desired, AudioSpecPtr $obtained, int $allowed_changes)
 * @method void pauseAudio(int $pause_on)
 * @method void pauseAudioDevice(int|CIntPtr $dev, int $pause_on)
 * @method int peepEvents(EventPtr $events, int $numevents, int $action, int $minType, int $maxType)
 * @method int pixelFormatEnumToMasks(int $format, int $bpp, int $Rmask, int $Gmask, int $Bmask, int $Amask)
 * @method int pollEvent(EventPtr $event)
 * @method void pumpEvents()
 * @method int pushEvent(EventPtr $event)
 * @method int queryTexture(TexturePtr $texture, int $format, int $access, int $w, int $h)
 * @method int queueAudio(int|CIntPtr $dev, CPtr $data, int $len)
 * @method void quit()
 * @method void quitSubSystem(int $flags)
 * @method void raiseWindow(WindowPtr $window)
 * @method int readBE16(RWopsPtr $src)
 * @method int readBE32(RWopsPtr $src)
 * @method int readBE64(RWopsPtr $src)
 * @method int readLE16(RWopsPtr $src)
 * @method int readLE32(RWopsPtr $src)
 * @method int readLE64(RWopsPtr $src)
 * @method int readU8(RWopsPtr $src)
 * @method int recordGesture(int|CIntPtr $touchId)
 * @method int registerApp(string|CCharPtr $name, int $style, $hInst)
 * @method int registerEvents(int $numevents)
 * @method int removeTimer(int $id)
 * @method int renderClear(RendererPtr $renderer)
 * @method int renderCopy(RendererPtr $renderer, TexturePtr $texture, RectPtr|null $srcrect, RectPtr|null $dstrect)
 * @method int renderCopyEx(RendererPtr $renderer, TexturePtr $texture, RectPtr $srcrect, RectPtr $dstrect, float $angle, int $center, int $flip)
 * @method int renderCopyExF(RendererPtr $renderer, TexturePtr $texture, RectPtr $srcrect, FRectPtr $dstrect, float $angle, int $center, int $flip)
 * @method int renderCopyF(RendererPtr $renderer, TexturePtr $texture, RectPtr $srcrect, FRectPtr $dstrect)
 * @method int renderDrawLine(RendererPtr $renderer, int $x1, int $y1, int $x2, int $y2)
 * @method int renderDrawLineF(RendererPtr $renderer, float $x1, float $y1, float $x2, float $y2)
 * @method int renderDrawLines(RendererPtr $renderer, int $points, int $count)
 * @method int renderDrawLinesF(RendererPtr $renderer, int $points, int $count)
 * @method int renderDrawPoint(RendererPtr $renderer, int $x, int $y)
 * @method int renderDrawPointF(RendererPtr $renderer, float $x, float $y)
 * @method int renderDrawPoints(RendererPtr $renderer, int $points, int $count)
 * @method int renderDrawPointsF(RendererPtr $renderer, int $points, int $count)
 * @method int renderDrawRect(RendererPtr $renderer, RectPtr $rect)
 * @method int renderDrawRectF(RendererPtr $renderer, FRectPtr $rect)
 * @method int renderDrawRects(RendererPtr $renderer, RectPtr $rects, int $count)
 * @method int renderDrawRectsF(RendererPtr $renderer, FRectPtr $rects, int $count)
 * @method int renderFillRect(RendererPtr $renderer, RectPtr $rect)
 * @method int renderFillRectF(RendererPtr $renderer, FRectPtr $rect)
 * @method int renderFillRects(RendererPtr $renderer, RectPtr $rects, int $count)
 * @method int renderFillRectsF(RendererPtr $renderer, FRectPtr $rects, int $count)
 * @method int renderFlush(RendererPtr $renderer)
 * @method void renderGetClipRect(RendererPtr $renderer, RectPtr $rect)
 * @method IDirect3DDevice9 renderGetD3D9Device(RendererPtr $renderer)
 * @method int renderGetIntegerScale(RendererPtr $renderer)
 * @method void renderGetLogicalSize(RendererPtr $renderer, int $w, int $h)
 * @method void renderGetMetalCommandEncoder(RendererPtr $renderer)
 * @method void renderGetMetalLayer(RendererPtr $renderer)
 * @method void renderGetScale(RendererPtr $renderer, float $scaleX, float $scaleY)
 * @method void renderGetViewport(RendererPtr $renderer, RectPtr $rect)
 * @method int renderIsClipEnabled(RendererPtr $renderer)
 * @method void renderPresent(RendererPtr $renderer)
 * @method int renderReadPixels(RendererPtr $renderer, RectPtr $rect, int $format, CPtr $pixels, int $pitch)
 * @method int renderSetClipRect(RendererPtr $renderer, RectPtr $rect)
 * @method int renderSetIntegerScale(RendererPtr $renderer, int $enable)
 * @method int renderSetLogicalSize(RendererPtr $renderer, int $w, int $h)
 * @method int renderSetScale(RendererPtr $renderer, float $scaleX, float $scaleY)
 * @method int renderSetViewport(RendererPtr $renderer, RectPtr $rect)
 * @method int renderTargetSupported(RendererPtr $renderer)
 * @method int reportAssertion(AssertDataPtr|CPtr $data, string|CCharPtr $func, string|CCharPtr $file, int $line)
 * @method void resetAssertionReport()
 * @method void restoreWindow(WindowPtr $window)
 * @method void SIMDAlloc(int $len)
 * @method void SIMDFree(CPtr $ptr)
 * @method int SIMDGetAlignment()
 * @method int saveAllDollarTemplates(RWopsPtr $dst)
 * @method int saveDollarTemplate(int|CIntPtr $gestureId, RWopsPtr $dst)
 * @method int semPost(SemaphorePtr $sem)
 * @method int semTryWait(SemaphorePtr $sem)
 * @method int semValue(SemaphorePtr $sem)
 * @method int semWait(SemaphorePtr $sem)
 * @method int semWaitTimeout(SemaphorePtr $sem, int $ms)
 * @method void sensorClose(SensorPtr $sensor)
 * @method SensorPtr sensorFromInstanceID(int $instance_id)
 * @method int sensorGetData(SensorPtr $sensor, float $data, int $num_values)
 * @method int sensorGetDeviceInstanceID(int $device_index)
 * @method string sensorGetDeviceName(int $device_index)
 * @method int sensorGetDeviceNonPortableType(int $device_index)
 * @method int sensorGetDeviceType(int $device_index)
 * @method int sensorGetInstanceID(SensorPtr $sensor)
 * @method string sensorGetName(SensorPtr $sensor)
 * @method int sensorGetNonPortableType(SensorPtr $sensor)
 * @method int sensorGetType(SensorPtr $sensor)
 * @method SensorPtr sensorOpen(int $device_index)
 * @method void sensorUpdate()
 * @method void setAssertionHandler(\Closure|CData $handler, CPtr $userdata)
 * @method int setClipRect(SurfacePtr $surface, RectPtr $rect)
 * @method int setClipboardText(string $text)
 * @method int setColorKey(SurfacePtr $surface, int $flag, int $key)
 * @method void setCursor(CursorPtr $cursor)
 * @method int setError(string|CCharPtr $fmt)
 * @method void setEventFilter(EventFilterPtr $filter, CPtr $userdata)
 * @method int setHint(string $name, string $value)
 * @method int setHintWithPriority(string $name, string $value, int $priority)
 * @method void setMainReady()
 * @method void setModState(int|CIntPtr $modstate)
 * @method int setPaletteColors(PalettePtr $palette, ColorPtr $colors, int $firstcolor, int $ncolors)
 * @method int setPixelFormatPalette(PixelFormatPtr $format, PalettePtr $palette)
 * @method int setRelativeMouseMode(int $enabled)
 * @method int setRenderDrawBlendMode(RendererPtr $renderer, int|CIntPtr $blendMode)
 * @method int setRenderDrawColor(RendererPtr $renderer, int $r, int $g, int $b, int $a)
 * @method int setRenderTarget(RendererPtr $renderer, TexturePtr $texture)
 * @method int setSurfaceAlphaMod(SurfacePtr $surface, int $alpha)
 * @method int setSurfaceBlendMode(SurfacePtr $surface, int|CIntPtr $blendMode)
 * @method int setSurfaceColorMod(SurfacePtr $surface, int $r, int $g, int $b)
 * @method int setSurfacePalette(SurfacePtr $surface, PalettePtr $palette)
 * @method int setSurfaceRLE(SurfacePtr $surface, int $flag)
 * @method void setTextInputRect(RectPtr $rect)
 * @method int setTextureAlphaMod(TexturePtr $texture, int $alpha)
 * @method int setTextureBlendMode(TexturePtr $texture, int|CIntPtr $blendMode)
 * @method int setTextureColorMod(TexturePtr $texture, int $r, int $g, int $b)
 * @method int setThreadPriority(int $priority)
 * @method void setWindowBordered(WindowPtr $window, int $bordered)
 * @method int setWindowBrightness(WindowPtr $window, float $brightness)
 * @method void setWindowData(WindowPtr $window, string $name, CPtr $userdata)
 * @method int setWindowDisplayMode(WindowPtr $window, DisplayModePtr $mode)
 * @method int setWindowFullscreen(WindowPtr $window, int $flags)
 * @method int setWindowGammaRamp(WindowPtr $window, int $red, int $green, int $blue)
 * @method void setWindowGrab(WindowPtr $window, int $grabbed)
 * @method int setWindowHitTest(WindowPtr $window, \Closure|CData $callback, CPtr $callback_data)
 * @method void setWindowIcon(WindowPtr $window, SurfacePtr $icon)
 * @method int setWindowInputFocus(WindowPtr $window)
 * @method void setWindowMaximumSize(WindowPtr $window, int $max_w, int $max_h)
 * @method void setWindowMinimumSize(WindowPtr $window, int $min_w, int $min_h)
 * @method int setWindowModalFor(WindowPtr $modal_window, WindowPtr $parent_window)
 * @method int setWindowOpacity(WindowPtr $window, float $opacity)
 * @method void setWindowPosition(WindowPtr $window, int $x, int $y)
 * @method void setWindowResizable(WindowPtr $window, int $resizable)
 * @method int setWindowShape(WindowPtr $window, SurfacePtr $shape, WindowShapeModePtr $shape_mode)
 * @method void setWindowSize(WindowPtr $window, int $w, int $h)
 * @method void setWindowTitle(WindowPtr $window, string $title)
 * @method void setWindowsMessageHook(\Closure $callback, CPtr $userdata)
 * @method void setYUVConversionMode(int|CIntPtr $mode)
 * @method int showCursor(int $toggle)
 * @method int showMessageBox(MessageBoxDataPtr $messageboxdata, int|CIntPtr $buttonid)
 * @method int showSimpleMessageBox(int $flags, string|CData $title, string|CData $message, ?Window|?CData $window)
 * @method void showWindow(WindowPtr $window)
 * @method int softStretch(SurfacePtr $src, RectPtr $srcrect, SurfacePtr $dst, RectPtr $dstrect)
 * @method void startTextInput()
 * @method void stopTextInput()
 * @method int threadID()
 * @method int tryLockMutex(mutexPtr $mutex)
 * @method void unionRect(RectPtr $A, RectPtr $B, RectPtr $result)
 * @method void unloadObject(CPtr $handle)
 * @method void unlockAudio()
 * @method void unlockAudioDevice(int|CIntPtr $dev)
 * @method void unlockJoysticks()
 * @method int unlockMutex(mutexPtr $mutex)
 * @method void unlockSurface(SurfacePtr $surface)
 * @method void unlockTexture(TexturePtr $texture)
 * @method void unregisterApp()
 * @method int updateTexture(TexturePtr $texture, RectPtr $rect, CPtr $pixels, int $pitch)
 * @method int updateWindowSurface(WindowPtr $window)
 * @method int updateWindowSurfaceRects(WindowPtr $window, RectPtr $rects, int $numrects)
 * @method int updateYUVTexture(TexturePtr $texture, RectPtr $rect, int $Yplane, int $Ypitch, int $Uplane, int $Upitch, int $Vplane, int $Vpitch)
 * @method int upperBlit(SurfacePtr $src, RectPtr $srcrect, SurfacePtr $dst, RectPtr $dstrect)
 * @method int upperBlitScaled(SurfacePtr $src, RectPtr $srcrect, SurfacePtr $dst, RectPtr $dstrect)
 * @method int videoInit(string $driver_name)
 * @method void videoQuit()
 * @method int waitEvent(EventPtr $event)
 * @method int waitEventTimeout(EventPtr $event, int $timeout)
 * @method void waitThread(ThreadPtr $thread, int|CIntPtr $status)
 * @method int warpMouseGlobal(int $x, int $y)
 * @method void warpMouseInWindow(WindowPtr $window, int $x, int $y)
 * @method int wasInit(int $flags)
 * @method int writeBE16(RWopsPtr $dst, int $value)
 * @method int writeBE32(RWopsPtr $dst, int $value)
 * @method int writeBE64(RWopsPtr $dst, int $value)
 * @method int writeLE16(RWopsPtr $dst, int $value)
 * @method int writeLE32(RWopsPtr $dst, int $value)
 * @method int writeLE64(RWopsPtr $dst, int $value)
 * @method int writeU8(RWopsPtr $dst, int $value)
 * @formatter:on
 */
class SDL extends Library implements Enums
{
    /**
     * @var string
     */
    protected const SDL_GET_VERSION = <<<'C'
        typedef struct SDL_Version
        {
            uint8_t major;
            uint8_t minor;
            uint8_t patch;
        } SDL_Version;
        
        void SDL_GetVersion(SDL_Version * ver);
    C;

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
        parent::__construct($this->ffi());
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
     * Overriding this method fixes the bug of PhpStorm .phpstorm.meta.php
     *
     * {@inheritDoc}
     */
    public static function addr(CData $type): CData
    {
        // Assert is needed to suppress the PhpStorm [EA] plugin's warnings
        \assert(true);

        return parent::addr($type);
    }

    /**
     * Overriding this method fixes the bug of PhpStorm .phpstorm.meta.php
     *
     * {@inheritDoc}
     */
    public function new($type, bool $owned = true, bool $persistent = false): CData
    {
        // Assert is needed to suppress the PhpStorm [EA] plugin's warnings
        \assert(true);

        return parent::new($type, $owned, $persistent);
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
     * @return string
     */
    public function getName(): string
    {
        return 'SDL';
    }

    /**
     * @return string
     * @throws \LogicException
     */
    public function getVersion(): string
    {
        if ($this->version === null) {
            $ctx = \FFI::cdef(static::SDL_GET_VERSION, $this->getLibrary());

            $ctx->SDL_GetVersion(\FFI::addr($ver = $ctx->new('SDL_Version')));

            return $this->version = \sprintf('%d.%d.%d', $ver->major, $ver->minor, $ver->patch);
        }

        return $this->version;
    }

    /**
     * @return string
     * @throws \LogicException
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
     * {@inheritDoc}
     */
    public function __call(string $name, array $arguments)
    {
        if (\strpos($name, 'SDL_') !== 0) {
            $name = 'SDL_' . \ucfirst($name);
        }

        return parent::__call($name, $arguments);
    }

    /**
     * @param string $type
     * @return array
     */
    protected function getRealStructName(string $type): array
    {
        [$name, $depth] = parent::getRealStructName($type);

        if (\strpos($name, 'SDL_') !== 0 && \ctype_upper($name[0] ?? '')) {
            $name = 'SDL_' . $name;
        }

        return [$name, $depth];
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
