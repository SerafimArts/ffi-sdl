
#define FFI_SCOPE "sdl"

#include "sdl-types.h"

// =====================================================================================================================
//  Function Definitions
// =====================================================================================================================

extern const char* SDL_GetPlatform(void);
extern void SDL_SetMainReady(void);
extern SDL_AssertState SDL_ReportAssertion(SDL_AssertData* data, const char* func, const char* file, int line);
extern void SDL_SetAssertionHandler(SDL_AssertionHandler handler, void* userdata);
extern const SDL_AssertData* SDL_GetAssertionReport(void);
extern void SDL_ResetAssertionReport(void);
extern int SDL_AtomicTryLock(SDL_SpinLock* lock);
extern void SDL_AtomicLock(SDL_SpinLock* lock);
extern void SDL_AtomicUnlock(SDL_SpinLock* lock);
extern int SDL_AtomicCAS(SDL_AtomicT *a, int oldval, int newval);
extern int SDL_AtomicCASPtr(void **a, void* oldval, void* newval);
extern int SDL_SetError(const char* fmt, ...) __attribute__ (( format( __printf__, 1, 1 +1)));
extern const char* SDL_GetError(void);
extern void SDL_ClearError(void);
extern SDL_Mutex* SDL_CreateMutex(void);
extern int SDL_LockMutex(SDL_Mutex* mutex);
extern int SDL_TryLockMutex(SDL_Mutex* mutex);
extern int SDL_UnlockMutex(SDL_Mutex* mutex);
extern void SDL_DestroyMutex(SDL_Mutex* mutex);
extern SDL_Semaphore* SDL_CreateSemaphore(Uint32 initial_value);
extern void SDL_DestroySemaphore(SDL_Semaphore* sem);
extern int SDL_SemWait(SDL_Semaphore* sem);
extern int SDL_SemTryWait(SDL_Semaphore* sem);
extern int SDL_SemWaitTimeout(SDL_Semaphore* sem, Uint32 ms);
extern int SDL_SemPost(SDL_Semaphore* sem);
extern Uint32 SDL_SemValue(SDL_Semaphore* sem);
extern SDL_Cond* SDL_CreateCond(void);
extern void SDL_DestroyCond(SDL_Cond* cond);
extern int SDL_CondSignal(SDL_Cond* cond);
extern int SDL_CondBroadcast(SDL_Cond* cond);
extern int SDL_CondWait(SDL_Cond* cond, SDL_Mutex* mutex);
extern int SDL_CondWaitTimeout(SDL_Cond* cond, SDL_Mutex* mutex, Uint32 ms);
extern SDL_Thread* SDL_CreateThread(SDL_ThreadFunction fn, const char* name, void* data, pfnSDL_CurrentBeginThread pfnBeginThread, pfnSDL_CurrentEndThread pfnEndThread);
extern const char* SDL_GetThreadName(SDL_Thread* thread);
extern SDL_threadId SDL_ThreadID(void);
extern SDL_threadId SDL_GetThreadID(SDL_threadId* thread);
extern int SDL_SetThreadPriority(SDL_ThreadPriority priority);
extern void SDL_WaitThread(SDL_Thread* thread, int* status);
extern SDL_TLSID SDL_TLSCreate(void);
extern void* SDL_TLSGet(SDL_TLSID id);
extern int SDL_TLSSet(SDL_TLSID id, const void* value, void ( *destructor)(void *));
extern SDL_RWops* SDL_RWFromFile(const char* file, const char* mode);
extern SDL_RWops* SDL_RWFromFP(void* fp, int autoclose);
extern SDL_RWops* SDL_RWFromMem(void* mem, int size);
extern SDL_RWops* SDL_RWFromConstMem(const void* mem, int size);
extern SDL_RWops* SDL_AllocRW(void);
extern void SDL_FreeRW(SDL_RWops* area);
extern Uint8 SDL_ReadU8(SDL_RWops* src);
extern Uint16 SDL_ReadLE16(SDL_RWops* src);
extern Uint16 SDL_ReadBE16(SDL_RWops* src);
extern Uint32 SDL_ReadLE32(SDL_RWops* src);
extern Uint32 SDL_ReadBE32(SDL_RWops* src);
extern Uint64 SDL_ReadLE64(SDL_RWops* src);
extern Uint64 SDL_ReadBE64(SDL_RWops* src);
extern size_t SDL_WriteU8(SDL_RWops* dst, Uint8 value);
extern size_t SDL_WriteLE16(SDL_RWops* dst, Uint16 value);
extern size_t SDL_WriteBE16(SDL_RWops* dst, Uint16 value);
extern size_t SDL_WriteLE32(SDL_RWops* dst, Uint32 value);
extern size_t SDL_WriteBE32(SDL_RWops* dst, Uint32 value);
extern size_t SDL_WriteLE64(SDL_RWops* dst, Uint64 value);
extern size_t SDL_WriteBE64(SDL_RWops* dst, Uint64 value);
extern int SDL_GetNumAudioDrivers(void);
extern const char* SDL_GetAudioDriver(int index);
extern int SDL_AudioInit(const char* driver_name);
extern void SDL_AudioQuit(void);
extern const char* SDL_GetCurrentAudioDriver(void);
extern int SDL_OpenAudio(SDL_AudioSpec* desired, SDL_AudioSpec* obtained);
extern int SDL_GetNumAudioDevices(int iscapture);
extern const char* SDL_GetAudioDeviceName(int index, int iscapture);
extern SDL_AudioDeviceID SDL_OpenAudioDevice(const char* device, int iscapture, const SDL_AudioSpec* desired, SDL_AudioSpec* obtained, int allowed_changes);
extern SDL_AudioStatus SDL_GetAudioStatus(void);
extern SDL_AudioStatus SDL_GetAudioDeviceStatus(SDL_AudioDeviceID dev);
extern void SDL_PauseAudio(int pause_on);
extern void SDL_PauseAudioDevice(SDL_AudioDeviceID dev, int pause_on);
extern SDL_AudioSpec* SDL_LoadWAV_RW(SDL_RWops* src, int freesrc, SDL_AudioSpec* spec, Uint8 **audio_buf, Uint32 *audio_len);
extern void SDL_FreeWAV(Uint8 *audio_buf);
extern int SDL_BuildAudioCVT(SDL_AudioCVT *cvt, SDL_AudioFormat src_format, Uint8 src_channels, int src_rate, SDL_AudioFormat dst_format, Uint8 dst_channels, int dst_rate);
extern int SDL_ConvertAudio(SDL_AudioCVT *cvt);
extern void SDL_MixAudio(Uint8 *dst, const Uint8 *src, Uint32 len, int volume);
extern void SDL_MixAudioFormat(Uint8 *dst, const Uint8 *src, SDL_AudioFormat format, Uint32 len, int volume);
extern void SDL_LockAudio(void);
extern void SDL_LockAudioDevice(SDL_AudioDeviceID dev);
extern void SDL_UnlockAudio(void);
extern void SDL_UnlockAudioDevice(SDL_AudioDeviceID dev);
extern void SDL_CloseAudio(void);
extern void SDL_CloseAudioDevice(SDL_AudioDeviceID dev);
extern int SDL_SetClipboardText(const char* text);
extern char* SDL_GetClipboardText(void);
extern int SDL_HasClipboardText(void);
extern int SDL_GetCPUCount(void);
extern int SDL_GetCPUCacheLineSize(void);
extern int SDL_HasRDTSC(void);
extern int SDL_HasAltiVec(void);
extern int SDL_HasMMX(void);
extern int SDL_Has3DNow(void);
extern int SDL_HasSSE(void);
extern int SDL_HasSSE2(void);
extern int SDL_HasSSE3(void);
extern int SDL_HasSSE41(void);
extern int SDL_HasSSE42(void);
extern const char* SDL_GetPixelFormatName(Uint32 format);
extern int SDL_PixelFormatEnumToMasks(Uint32 format, int* bpp, Uint32* Rmask, Uint32* Gmask, Uint32* Bmask, Uint32* Amask);
extern Uint32 SDL_MasksToPixelFormatEnum(int bpp, Uint32 Rmask, Uint32 Gmask, Uint32 Bmask, Uint32 Amask);
extern SDL_PixelFormat* SDL_AllocFormat(Uint32 pixel_format);
extern void SDL_FreeFormat(SDL_PixelFormat* format);
extern SDL_Palette* SDL_AllocPalette(int ncolors);
extern int SDL_SetPixelFormatPalette(SDL_PixelFormat* format, SDL_Palette* palette);
extern int SDL_SetPaletteColors(SDL_Palette* palette, const SDL_Color* colors, int firstcolor, int ncolors);
extern void SDL_FreePalette(SDL_Palette* palette);
extern Uint32 SDL_MapRGB(const SDL_PixelFormat* format, Uint8 r, Uint8 g, Uint8 b);
extern Uint32 SDL_MapRGBA(const SDL_PixelFormat* format, Uint8 r, Uint8 g, Uint8 b, Uint8 a);
extern void SDL_GetRGB(Uint32 pixel, const SDL_PixelFormat* format, Uint8 *r, Uint8 *g, Uint8 *b);
extern void SDL_GetRGBA(Uint32 pixel, const SDL_PixelFormat* format, Uint8 *r, Uint8 *g, Uint8 *b, Uint8 *a);
extern void SDL_CalculateGammaRamp(float gamma, Uint16 *ramp);
extern int SDL_HasIntersection(const SDL_Rect* A, const SDL_Rect* B);
extern int SDL_IntersectRect(const SDL_Rect* A, const SDL_Rect* B, SDL_Rect* result);
extern void SDL_UnionRect(const SDL_Rect* A, const SDL_Rect* B, SDL_Rect* result);
extern int SDL_EnclosePoints(const SDL_Point* points, int count, const SDL_Rect* clip, SDL_Rect* result);
extern int SDL_IntersectRectAndLine(const SDL_Rect* rect, int* X1, int* Y1, int* X2, int* Y2);
extern SDL_Surface* SDL_CreateRGBSurface (Uint32 flags, int width, int height, int depth, Uint32 Rmask, Uint32 Gmask, Uint32 Bmask, Uint32 Amask);
extern SDL_Surface* SDL_CreateRGBSurfaceFrom(void* pixels, int width, int height, int depth, int pitch, Uint32 Rmask, Uint32 Gmask, Uint32 Bmask, Uint32 Amask);
extern void SDL_FreeSurface(SDL_Surface* surface);
extern int SDL_SetSurfacePalette(SDL_Surface* surface, SDL_Palette* palette);
extern int SDL_LockSurface(SDL_Surface* surface);
extern void SDL_UnlockSurface(SDL_Surface* surface);
extern SDL_Surface* SDL_LoadBMP_RW(SDL_RWops* src, int freesrc);
extern int SDL_SaveBMP_RW(SDL_Surface* surface, SDL_RWops* dst, int freedst);
extern int SDL_SetSurfaceRLE(SDL_Surface* surface, int flag);
extern int SDL_SetColorKey(SDL_Surface* surface, int flag, Uint32 key);
extern int SDL_GetColorKey(SDL_Surface* surface, Uint32 *key);
extern int SDL_SetSurfaceColorMod(SDL_Surface* surface, Uint8 r, Uint8 g, Uint8 b);
extern int SDL_GetSurfaceColorMod(SDL_Surface* surface, Uint8 *r, Uint8 *g, Uint8 *b);
extern int SDL_SetSurfaceAlphaMod(SDL_Surface* surface, Uint8 alpha);
extern int SDL_GetSurfaceAlphaMod(SDL_Surface* surface, Uint8 *alpha);
extern int SDL_SetSurfaceBlendMode(SDL_Surface* surface, SDL_BlendMode blendMode);
extern int SDL_GetSurfaceBlendMode(SDL_Surface* surface, SDL_BlendMode* blendMode);
extern int SDL_SetClipRect(SDL_Surface* surface, const SDL_Rect* rect);
extern void SDL_GetClipRect(SDL_Surface* surface, SDL_Rect* rect);
extern SDL_Surface* SDL_ConvertSurface (SDL_Surface* src, const SDL_PixelFormat* fmt, Uint32 flags);
extern SDL_Surface* SDL_ConvertSurfaceFormat (SDL_Surface* src, Uint32 pixel_format, Uint32 flags);
extern int SDL_ConvertPixels(int width, int height, Uint32 src_format, const void* src, int src_pitch, Uint32 dst_format, void* dst, int dst_pitch);
extern int SDL_FillRect(SDL_Surface* dst, const SDL_Rect* rect, Uint32 color);
extern int SDL_FillRects(SDL_Surface* dst, const SDL_Rect* rects, int count, Uint32 color);
extern int SDL_UpperBlit(SDL_Surface* src, const SDL_Rect* srcrect, SDL_Surface* dst, SDL_Rect* dstrect);
extern int SDL_LowerBlit(SDL_Surface* src, SDL_Rect* srcrect, SDL_Surface* dst, SDL_Rect* dstrect);
extern int SDL_SoftStretch(SDL_Surface* src, const SDL_Rect* srcrect, SDL_Surface* dst, const SDL_Rect* dstrect);
extern int SDL_UpperBlitScaled(SDL_Surface* src, const SDL_Rect* srcrect, SDL_Surface* dst, SDL_Rect* dstrect);
extern int SDL_LowerBlitScaled(SDL_Surface* src, SDL_Rect* srcrect, SDL_Surface* dst, SDL_Rect* dstrect);
extern int SDL_GetNumVideoDrivers(void);
extern const char* SDL_GetVideoDriver(int index);
extern int SDL_VideoInit(const char* driver_name);
extern void SDL_VideoQuit(void);
extern const char* SDL_GetCurrentVideoDriver(void);
extern int SDL_GetNumVideoDisplays(void);
extern const char* SDL_GetDisplayName(int displayIndex);
extern int SDL_GetDisplayBounds(int displayIndex, SDL_Rect* rect);
extern int SDL_GetNumDisplayModes(int displayIndex);
extern int SDL_GetDisplayMode(int displayIndex, int modeIndex, SDL_DisplayMode* mode);
extern int SDL_GetDesktopDisplayMode(int displayIndex, SDL_DisplayMode* mode);
extern int SDL_GetCurrentDisplayMode(int displayIndex, SDL_DisplayMode* mode);
extern SDL_DisplayMode* SDL_GetClosestDisplayMode(int displayIndex, const SDL_DisplayMode* mode, SDL_DisplayMode* closest);
extern int SDL_GetWindowDisplayIndex(SDL_Window* window);
extern int SDL_SetWindowDisplayMode(SDL_Window* window, const SDL_DisplayMode* mode);
extern int SDL_GetWindowDisplayMode(SDL_Window* window, SDL_DisplayMode* mode);
extern Uint32 SDL_GetWindowPixelFormat(SDL_Window* window);
extern SDL_Window* SDL_CreateWindow(const char* title, int x, int y, int w, int h, Uint32 flags);
extern SDL_Window* SDL_CreateWindowFrom(const void* data);
extern Uint32 SDL_GetWindowID(SDL_Window* window);
extern SDL_Window* SDL_GetWindowFromID(Uint32 id);
extern Uint32 SDL_GetWindowFlags(SDL_Window* window);
extern void SDL_SetWindowTitle(SDL_Window* window, const char* title);
extern const char* SDL_GetWindowTitle(SDL_Window* window);
extern void SDL_SetWindowIcon(SDL_Window* window, SDL_Surface* icon);
extern void* SDL_SetWindowData(SDL_Window* window, const char* name, void* userdata);
extern void* SDL_GetWindowData(SDL_Window* window, const char* name);
extern void SDL_SetWindowPosition(SDL_Window* window, int x, int y);
extern void SDL_GetWindowPosition(SDL_Window* window, int* x, int* y);
extern void SDL_SetWindowSize(SDL_Window* window, int w, int h);
extern void SDL_GetWindowSize(SDL_Window* window, int* w, int* h);
extern void SDL_SetWindowMinimumSize(SDL_Window* window, int min_w, int min_h);
extern void SDL_GetWindowMinimumSize(SDL_Window* window, int* w, int* h);
extern void SDL_SetWindowMaximumSize(SDL_Window* window, int max_w, int max_h);
extern void SDL_GetWindowMaximumSize(SDL_Window* window, int* w, int* h);
extern void SDL_SetWindowBordered(SDL_Window* window, int bordered);
extern void SDL_ShowWindow(SDL_Window* window);
extern void SDL_HideWindow(SDL_Window* window);
extern void SDL_RaiseWindow(SDL_Window* window);
extern void SDL_MaximizeWindow(SDL_Window* window);
extern void SDL_MinimizeWindow(SDL_Window* window);
extern void SDL_RestoreWindow(SDL_Window* window);
extern int SDL_SetWindowFullscreen(SDL_Window* window, Uint32 flags);
extern SDL_Surface* SDL_GetWindowSurface(SDL_Window* window);
extern int SDL_UpdateWindowSurface(SDL_Window* window);
extern int SDL_UpdateWindowSurfaceRects(SDL_Window* window, const SDL_Rect* rects, int numrects);
extern void SDL_SetWindowGrab(SDL_Window* window, int grabbed);
extern int SDL_GetWindowGrab(SDL_Window* window);
extern int SDL_SetWindowBrightness(SDL_Window* window, float brightness);
extern float SDL_GetWindowBrightness(SDL_Window* window);
extern int SDL_SetWindowGammaRamp(SDL_Window* window, const Uint16 *red, const Uint16 *green, const Uint16 *blue);
extern int SDL_GetWindowGammaRamp(SDL_Window* window, Uint16 *red, Uint16 *green, Uint16 *blue);
extern void SDL_DestroyWindow(SDL_Window* window);
extern int SDL_IsScreenSaverEnabled(void);
extern void SDL_EnableScreenSaver(void);
extern void SDL_DisableScreenSaver(void);
extern int SDL_GL_LoadLibrary(const char* path);
extern void* SDL_GL_GetProcAddress(const char* proc);
extern void SDL_GL_UnloadLibrary(void);
extern int SDL_GL_ExtensionSupported(const char* extension);
extern int SDL_GL_SetAttribute(SDL_GLattr attr, int value);
extern int SDL_GL_GetAttribute(SDL_GLattr attr, int* value);
extern SDL_GLContext SDL_GL_CreateContext(SDL_Window* window);
extern int SDL_GL_MakeCurrent(SDL_Window* window, SDL_GLContext context);
extern SDL_Window* SDL_GL_GetCurrentWindow(void);
extern SDL_GLContext SDL_GL_GetCurrentContext(void);
extern int SDL_GL_SetSwapInterval(int interval);
extern int SDL_GL_GetSwapInterval(void);
extern void SDL_GL_SwapWindow(SDL_Window* window);
extern void SDL_GL_DeleteContext(SDL_GLContext context);
extern SDL_Window* SDL_GetKeyboardFocus(void);
extern const Uint8* SDL_GetKeyboardState(int* numkeys);
extern SDL_Keymod SDL_GetModState(void);
extern void SDL_SetModState(SDL_Keymod modstate);
extern SDL_Keycode SDL_GetKeyFromScancode(SDL_Scancode scancode);
extern SDL_Scancode SDL_GetScancodeFromKey(SDL_Keycode key);
extern const char* SDL_GetScancodeName(SDL_Scancode scancode);
extern SDL_Scancode SDL_GetScancodeFromName(const char* name);
extern const char* SDL_GetKeyName(SDL_Keycode key);
extern SDL_Keycode SDL_GetKeyFromName(const char* name);
extern void SDL_StartTextInput(void);
extern int SDL_IsTextInputActive(void);
extern void SDL_StopTextInput(void);
extern void SDL_SetTextInputRect(SDL_Rect* rect);
extern int SDL_HasScreenKeyboardSupport(void);
extern int SDL_IsScreenKeyboardShown(SDL_Window* window);
extern SDL_Window* SDL_GetMouseFocus(void);
extern Uint32 SDL_GetMouseState(int* x, int* y);
extern Uint32 SDL_GetRelativeMouseState(int* x, int* y);
extern void SDL_WarpMouseInWindow(SDL_Window* window, int x, int y);
extern int SDL_SetRelativeMouseMode(int enabled);
extern int SDL_GetRelativeMouseMode(void);
extern SDL_Cursor* SDL_CreateCursor(const Uint8 *data, const Uint8 *mask, int w, int h, int hot_x, int hot_y);
extern SDL_Cursor* SDL_CreateColorCursor(SDL_Surface* surface, int hot_x, int hot_y);
extern SDL_Cursor* SDL_CreateSystemCursor(SDL_SystemCursor id);
extern void SDL_SetCursor(SDL_Cursor* cursor);
extern SDL_Cursor* SDL_GetCursor(void);
extern SDL_Cursor* SDL_GetDefaultCursor(void);
extern void SDL_FreeCursor(SDL_Cursor* cursor);
extern int SDL_ShowCursor(int toggle);
extern int SDL_NumJoysticks(void);
extern const char* SDL_JoystickNameForIndex(int device_index);
extern SDL_JoystickGUID SDL_JoystickGetDeviceGUID(int device_index);
extern SDL_Joystick* SDL_JoystickOpen(int device_index);
extern const char* SDL_JoystickName(SDL_Joystick* joystick);
extern SDL_JoystickGUID SDL_JoystickGetGUID(SDL_Joystick* joystick);
extern void SDL_JoystickGetGUIDString(SDL_JoystickGUID guid, char* pszGUID, int cbGUID);
extern SDL_JoystickGUID SDL_JoystickGetGUIDFromString(const char* pchGUID);
extern int SDL_JoystickGetAttached(SDL_Joystick* joystick);
extern SDL_JoystickID SDL_JoystickInstanceID(SDL_Joystick* joystick);
extern int SDL_JoystickNumAxes(SDL_Joystick* joystick);
extern int SDL_JoystickNumBalls(SDL_Joystick* joystick);
extern int SDL_JoystickNumHats(SDL_Joystick* joystick);
extern int SDL_JoystickNumButtons(SDL_Joystick* joystick);
extern void SDL_JoystickUpdate(void);
extern int SDL_JoystickEventState(int state);
extern Sint16 SDL_JoystickGetAxis(SDL_Joystick* joystick, int axis);
extern Uint8 SDL_JoystickGetHat(SDL_Joystick* joystick, int hat);
extern int SDL_JoystickGetBall(SDL_Joystick* joystick, int ball, int* dx, int* dy);
extern Uint8 SDL_JoystickGetButton(SDL_Joystick* joystick, int button);
extern void SDL_JoystickClose(SDL_Joystick* joystick);
extern int SDL_GameControllerAddMapping(const char* mappingString);
extern char* SDL_GameControllerMappingForGUID(SDL_JoystickGUID guid);
extern char* SDL_GameControllerMapping(SDL_GameController* gamecontroller);
extern int SDL_IsGameController(int joystick_index);
extern const char* SDL_GameControllerNameForIndex(int joystick_index);
extern SDL_GameController* SDL_GameControllerOpen(int joystick_index);
extern const char* SDL_GameControllerName(SDL_GameController* gamecontroller);
extern int SDL_GameControllerGetAttached(SDL_GameController* gamecontroller);
extern SDL_Joystick* SDL_GameControllerGetJoystick(SDL_GameController* gamecontroller);
extern int SDL_GameControllerEventState(int state);
extern void SDL_GameControllerUpdate(void);
extern SDL_GameControllerAxis SDL_GameControllerGetAxisFromString(const char* pchString);
extern const char* SDL_GameControllerGetStringForAxis(SDL_GameControllerAxis axis);
extern SDL_GameControllerButtonBind SDL_GameControllerGetBindForAxis(SDL_GameController* gamecontroller, SDL_GameControllerAxis axis);
extern Sint16 SDL_GameControllerGetAxis(SDL_GameController* gamecontroller, SDL_GameControllerAxis axis);
extern SDL_GameControllerButton SDL_GameControllerGetButtonFromString(const char* pchString);
extern const char* SDL_GameControllerGetStringForButton(SDL_GameControllerButton button);
extern SDL_GameControllerButtonBind SDL_GameControllerGetBindForButton(SDL_GameController* gamecontroller, SDL_GameControllerButton button);
extern Uint8 SDL_GameControllerGetButton(SDL_GameController* gamecontroller, SDL_GameControllerButton button);
extern void SDL_GameControllerClose(SDL_GameController* gamecontroller);
extern int SDL_GetNumTouchDevices(void);
extern SDL_TouchID SDL_GetTouchDevice(int index);
extern int SDL_GetNumTouchFingers(SDL_TouchID touchID);
extern SDL_Finger* SDL_GetTouchFinger(SDL_TouchID touchID, int index);
extern int SDL_RecordGesture(SDL_TouchID touchId);
extern int SDL_SaveAllDollarTemplates(SDL_RWops* dst);
extern int SDL_SaveDollarTemplate(SDL_GestureID gestureId, SDL_RWops* dst);
extern int SDL_LoadDollarTemplates(SDL_TouchID touchId, SDL_RWops* src);
extern void SDL_PumpEvents(void);
extern int SDL_PeepEvents(SDL_Event* events, int numevents, SDL_EventAction action, Uint32 minType, Uint32 maxType);
extern int SDL_HasEvent(Uint32 type);
extern int SDL_HasEvents(Uint32 minType, Uint32 maxType);
extern void SDL_FlushEvent(Uint32 type);
extern void SDL_FlushEvents(Uint32 minType, Uint32 maxType);
extern int SDL_PollEvent(SDL_Event* event);
extern int SDL_WaitEvent(SDL_Event* event);
extern int SDL_WaitEventTimeout(SDL_Event* event, int timeout);
extern int SDL_PushEvent(SDL_Event* event);
extern void SDL_SetEventFilter(SDL_EventFilter filter, void* userdata);
extern int SDL_GetEventFilter(SDL_EventFilter* filter, void **userdata);
extern void SDL_AddEventWatch(SDL_EventFilter filter, void* userdata);
extern void SDL_DelEventWatch(SDL_EventFilter filter, void* userdata);
extern void SDL_FilterEvents(SDL_EventFilter filter, void* userdata);
extern Uint8 SDL_EventState(Uint32 type, int state);
extern Uint32 SDL_RegisterEvents(int numevents);
extern int SDL_NumHaptics(void);
extern const char* SDL_HapticName(int device_index);
extern SDL_Haptic* SDL_HapticOpen(int device_index);
extern int SDL_HapticOpened(int device_index);
extern int SDL_HapticIndex(SDL_Haptic* haptic);
extern int SDL_MouseIsHaptic(void);
extern SDL_Haptic* SDL_HapticOpenFromMouse(void);
extern int SDL_JoystickIsHaptic(SDL_Joystick* joystick);
extern SDL_Haptic* SDL_HapticOpenFromJoystick(SDL_Joystick* joystick);
extern void SDL_HapticClose(SDL_Haptic* haptic);
extern int SDL_HapticNumEffects(SDL_Haptic* haptic);
extern int SDL_HapticNumEffectsPlaying(SDL_Haptic* haptic);
extern unsigned int SDL_HapticQuery(SDL_Haptic* haptic);
extern int SDL_HapticNumAxes(SDL_Haptic* haptic);
extern int SDL_HapticEffectSupported(SDL_Haptic* haptic, SDL_HapticEffect* effect);
extern int SDL_HapticNewEffect(SDL_Haptic* haptic, SDL_HapticEffect* effect);
extern int SDL_HapticUpdateEffect(SDL_Haptic* haptic, int effect, SDL_HapticEffect* data);
extern int SDL_HapticRunEffect(SDL_Haptic* haptic, int effect, Uint32 iterations);
extern int SDL_HapticStopEffect(SDL_Haptic* haptic, int effect);
extern void SDL_HapticDestroyEffect(SDL_Haptic* haptic, int effect);
extern int SDL_HapticGetEffectStatus(SDL_Haptic* haptic, int effect);
extern int SDL_HapticSetGain(SDL_Haptic* haptic, int gain);
extern int SDL_HapticSetAutocenter(SDL_Haptic* haptic, int autocenter);
extern int SDL_HapticPause(SDL_Haptic* haptic);
extern int SDL_HapticUnpause(SDL_Haptic* haptic);
extern int SDL_HapticStopAll(SDL_Haptic* haptic);
extern int SDL_HapticRumbleSupported(SDL_Haptic* haptic);
extern int SDL_HapticRumbleInit(SDL_Haptic* haptic);
extern int SDL_HapticRumblePlay(SDL_Haptic* haptic, float strength, Uint32 length);
extern int SDL_HapticRumbleStop(SDL_Haptic* haptic);
extern int SDL_SetHintWithPriority(const char* name, const char* value, SDL_HintPriority priority);
extern int SDL_SetHint(const char* name, const char* value);
extern const char* SDL_GetHint(const char* name);
extern void SDL_AddHintCallback(const char* name, SDL_HintCallback callback, void* userdata);
extern void SDL_DelHintCallback(const char* name, SDL_HintCallback callback, void* userdata);
extern void SDL_ClearHints(void);
extern void* SDL_LoadObject(const char* sofile);
extern void* SDL_LoadFunction(void* handle, const char* name);
extern void SDL_UnloadObject(void* handle);
extern void SDL_LogSetAllPriority(SDL_LogPriority priority);
extern void SDL_LogSetPriority(int category, SDL_LogPriority priority);
extern SDL_LogPriority SDL_LogGetPriority(int category);
extern void SDL_LogResetPriorities(void);
extern void SDL_Log(const char* fmt, ...) __attribute__ (( format( __printf__, 1, 1 +1)));
extern void SDL_LogVerbose(int category, const char* fmt, ...) __attribute__ (( format( __printf__, 2, 2 +1)));
extern void SDL_LogDebug(int category, const char* fmt, ...) __attribute__ (( format( __printf__, 2, 2 +1)));
extern void SDL_LogInfo(int category, const char* fmt, ...) __attribute__ (( format( __printf__, 2, 2 +1)));
extern void SDL_LogWarn(int category, const char* fmt, ...) __attribute__ (( format( __printf__, 2, 2 +1)));
extern void SDL_LogError(int category, const char* fmt, ...) __attribute__ (( format( __printf__, 2, 2 +1)));
extern void SDL_LogCritical(int category, const char* fmt, ...) __attribute__ (( format( __printf__, 2, 2 +1)));
extern void SDL_LogMessage(int category, SDL_LogPriority priority, const char* fmt, ...) __attribute__ (( format( __printf__, 3, 3 +1)));
extern void SDL_LogMessageV(int category, SDL_LogPriority priority, const char* fmt, va_list ap);
extern void SDL_LogGetOutputFunction(SDL_LogOutputFunction* callback, void **userdata);
extern void SDL_LogSetOutputFunction(SDL_LogOutputFunction callback, void* userdata);
extern int SDL_ShowMessageBox(const SDL_MessageBoxData* messageboxdata, int* buttonid);
extern int SDL_ShowSimpleMessageBox(Uint32 flags, const char* title, const char* message, SDL_Window* window);
extern SDL_PowerState SDL_GetPowerInfo(int* secs, int* pct);
extern int SDL_GetNumRenderDrivers(void);
extern int SDL_GetRenderDriverInfo(int index, SDL_RendererInfo* info);
extern int SDL_CreateWindowAndRenderer(int width, int height, Uint32 window_flags, SDL_Window **window, SDL_Renderer **renderer);
extern SDL_Renderer* SDL_CreateRenderer(SDL_Window* window, int index, Uint32 flags);
extern SDL_Renderer* SDL_CreateSoftwareRenderer(SDL_Surface* surface);
extern SDL_Renderer* SDL_GetRenderer(SDL_Window* window);
extern int SDL_GetRendererInfo(SDL_Renderer* renderer, SDL_RendererInfo* info);
extern int SDL_GetRendererOutputSize(SDL_Renderer* renderer, int* w, int* h);
extern SDL_Texture* SDL_CreateTexture(SDL_Renderer* renderer, Uint32 format, int access, int w, int h);
extern SDL_Texture* SDL_CreateTextureFromSurface(SDL_Renderer* renderer, SDL_Surface* surface);
extern int SDL_QueryTexture(SDL_Texture* texture, Uint32 *format, int* access, int* w, int* h);
extern int SDL_SetTextureColorMod(SDL_Texture* texture, Uint8 r, Uint8 g, Uint8 b);
extern int SDL_GetTextureColorMod(SDL_Texture* texture, Uint8 *r, Uint8 *g, Uint8 *b);
extern int SDL_SetTextureAlphaMod(SDL_Texture* texture, Uint8 alpha);
extern int SDL_GetTextureAlphaMod(SDL_Texture* texture, Uint8 *alpha);
extern int SDL_SetTextureBlendMode(SDL_Texture* texture, SDL_BlendMode blendMode);
extern int SDL_GetTextureBlendMode(SDL_Texture* texture, SDL_BlendMode* blendMode);
extern int SDL_UpdateTexture(SDL_Texture* texture, const SDL_Rect* rect, const void* pixels, int pitch);
extern int SDL_LockTexture(SDL_Texture* texture, const SDL_Rect* rect, void **pixels, int* pitch);
extern void SDL_UnlockTexture(SDL_Texture* texture);
extern int SDL_RenderTargetSupported(SDL_Renderer* renderer);
extern int SDL_SetRenderTarget(SDL_Renderer* renderer, SDL_Texture* texture);
extern SDL_Texture* SDL_GetRenderTarget(SDL_Renderer* renderer);
extern int SDL_RenderSetLogicalSize(SDL_Renderer* renderer, int w, int h);
extern void SDL_RenderGetLogicalSize(SDL_Renderer* renderer, int* w, int* h);
extern int SDL_RenderSetViewport(SDL_Renderer* renderer, const SDL_Rect* rect);
extern void SDL_RenderGetViewport(SDL_Renderer* renderer, SDL_Rect* rect);
extern int SDL_RenderSetClipRect(SDL_Renderer* renderer, const SDL_Rect* rect);
extern void SDL_RenderGetClipRect(SDL_Renderer* renderer, SDL_Rect* rect);
extern int SDL_RenderSetScale(SDL_Renderer* renderer, float scaleX, float scaleY);
extern void SDL_RenderGetScale(SDL_Renderer* renderer, float* scaleX, float* scaleY);
extern int SDL_SetRenderDrawColor(SDL_Renderer* renderer, Uint8 r, Uint8 g, Uint8 b, Uint8 a);
extern int SDL_GetRenderDrawColor(SDL_Renderer* renderer, Uint8 *r, Uint8 *g, Uint8 *b, Uint8 *a);
extern int SDL_SetRenderDrawBlendMode(SDL_Renderer* renderer, SDL_BlendMode blendMode);
extern int SDL_GetRenderDrawBlendMode(SDL_Renderer* renderer, SDL_BlendMode* blendMode);
extern int SDL_RenderClear(SDL_Renderer* renderer);
extern int SDL_RenderDrawPoint(SDL_Renderer* renderer, int x, int y);
extern int SDL_RenderDrawPoints(SDL_Renderer* renderer, const SDL_Point* points, int count);
extern int SDL_RenderDrawLine(SDL_Renderer* renderer, int x1, int y1, int x2, int y2);
extern int SDL_RenderDrawLines(SDL_Renderer* renderer, const SDL_Point* points, int count);
extern int SDL_RenderDrawRect(SDL_Renderer* renderer, const SDL_Rect* rect);
extern int SDL_RenderDrawRects(SDL_Renderer* renderer, const SDL_Rect* rects, int count);
extern int SDL_RenderFillRect(SDL_Renderer* renderer, const SDL_Rect* rect);
extern int SDL_RenderFillRects(SDL_Renderer* renderer, const SDL_Rect* rects, int count);
extern int SDL_RenderCopy(SDL_Renderer* renderer, SDL_Texture* texture, const SDL_Rect* srcrect, const SDL_Rect* dstrect);
extern int SDL_RenderCopyEx(SDL_Renderer* renderer, SDL_Texture* texture, const SDL_Rect* srcrect, const SDL_Rect* dstrect, const double angle, const SDL_Point* center, const SDL_RendererFlip flip);
extern int SDL_RenderReadPixels(SDL_Renderer* renderer, const SDL_Rect* rect, Uint32 format, void* pixels, int pitch);
extern void SDL_RenderPresent(SDL_Renderer* renderer);
extern void SDL_DestroyTexture(SDL_Texture* texture);
extern void SDL_DestroyRenderer(SDL_Renderer* renderer);
extern int SDL_GL_BindTexture(SDL_Texture* texture, float* texw, float* texh);
extern int SDL_GL_UnbindTexture(SDL_Texture* texture);
extern SDL_Window* SDL_CreateShapedWindow(const char* title, unsigned int x, unsigned int y, unsigned int w, unsigned int h, Uint32 flags);
extern int SDL_IsShapedWindow(const SDL_Window* window);
extern int SDL_SetWindowShape(SDL_Window* window, SDL_Surface* shape, SDL_WindowShapeMode* shape_mode);
extern int SDL_GetShapedWindowMode(SDL_Window* window, SDL_WindowShapeMode* shape_mode);
extern Uint32 SDL_GetTicks(void);
extern Uint64 SDL_GetPerformanceCounter(void);
extern Uint64 SDL_GetPerformanceFrequency(void);
extern void SDL_Delay(Uint32 ms);
extern SDL_TimerID SDL_AddTimer(Uint32 interval, SDL_TimerCallback callback, void* param);
extern int SDL_RemoveTimer(SDL_TimerID id);
extern void SDL_GetVersion(SDL_Version* ver);
extern const char* SDL_GetRevision(void);
extern int SDL_GetRevisionNumber(void);
extern int SDL_Init(Uint32 flags);
extern int SDL_InitSubSystem(Uint32 flags);
extern void SDL_QuitSubSystem(Uint32 flags);
extern Uint32 SDL_WasInit(Uint32 flags);
extern void SDL_Quit(void);

// =====================================================================================================================
//   SDL >= 2.0.1
//
//   https://discourse.libsdl.org/t/sdl-2-0-1-released/40
// =====================================================================================================================

#if version >= 2.0.1
    extern char* SDL_GetBasePath(void);
    extern char* SDL_GetPrefPath(const char* org, const char* app);
    extern int SDL_UpdateYUVTexture(SDL_Texture* texture, const SDL_Rect* rect, const Uint8* Yplane, int Ypitch, const Uint8* Uplane, int Upitch, const Uint8* Vplane, int Vpitch);
    extern int SDL_GetSystemRAM(void);
    extern void SDL_GL_GetDrawableSize(SDL_Window* window, int* w, int* h);

    #ifdef __WIN32__
        extern int SDL_Direct3D9GetAdapterIndex(int displayIndex);
        extern IDirect3DDevice9* SDL_RenderGetD3D9Device(SDL_Renderer* renderer);
    #endif
#endif

// =====================================================================================================================
//   SDL >= 2.0.2
//
//   https://discourse.libsdl.org/t/sdl-2-0-2-released/41
// =====================================================================================================================

#if version >= 2.0.2
    extern void SDL_GL_ResetAttributes(void);
    // mapped from SDL_GameControllerAddMappingsFromFile
    extern int SDL_GameControllerAddMappingsFromRW(SDL_RWops* rw, int freerw);
    extern SDL_AssertionHandler SDL_GetDefaultAssertionHandler(void);
    extern SDL_AssertionHandler SDL_GetAssertionHandler(void **puserdata);
    extern void SDL_DetachThread(SDL_Thread* thread);
    extern int SDL_HasAVX(void);

    // FIXME This information is not in the release notes
    // FIXME Possible errors line "C function not found"
    extern int SDL_AtomicSet(SDL_AtomicT *a, int v);
    extern int SDL_AtomicGet(SDL_AtomicT *a);
    extern int SDL_AtomicAdd(SDL_AtomicT *a, int v);
    extern void* SDL_AtomicSetPtr(void **a, void* v);
    extern void* SDL_AtomicGetPtr(void **a);

    #ifdef __WIN32__
        extern int SDL_RegisterApp(char* name, Uint32 style, void* hInst);
        extern void SDL_UnregisterApp(void);

        extern int SDL_DXGIGetOutputInfo(int displayIndex, int* adapterIndex, int* outputIndex);
    #endif
#endif

// =====================================================================================================================
//   SDL >= 2.0.4
//
//   FIXME There is no release of notes for this version
//   FIXME Possible errors line "C function not found"
// =====================================================================================================================

#if version >= 2.0.4
    extern int SDL_QueueAudio(SDL_AudioDeviceID dev, const void* data, Uint32 len);
    extern Uint32 SDL_GetQueuedAudioSize(SDL_AudioDeviceID dev);
    extern void SDL_ClearQueuedAudio(SDL_AudioDeviceID dev);
    extern int SDL_HasAVX2(void);
    extern int SDL_GetDisplayDPI(int displayIndex, float* ddpi, float* hdpi, float* vdpi);
    extern SDL_Window* SDL_GetGrabbedWindow(void);
    extern int SDL_SetWindowHitTest(SDL_Window* window, SDL_HitTest callback, void* callback_data);
    extern Uint32 SDL_GetGlobalMouseState(int* x, int* y);
    extern int SDL_WarpMouseGlobal(int x, int y);
    extern int SDL_CaptureMouse(int enabled);
    extern SDL_Joystick* SDL_JoystickFromInstanceID(SDL_JoystickID joyid);
    extern SDL_JoystickPowerLevel SDL_JoystickCurrentPowerLevel(SDL_Joystick* joystick);
    extern SDL_GameController* SDL_GameControllerFromInstanceID(SDL_JoystickID joyid);
    extern int SDL_RenderIsClipEnabled(SDL_Renderer* renderer);

    #ifdef __WIN32__
        extern void SDL_SetWindowsMessageHook(SDL_WindowsMessageHook callback, void* userdata);
    #endif
#endif

// =====================================================================================================================
//   SDL >= 2.0.5
//
//   https://discourse.libsdl.org/t/sdl-2-0-5-released/42
// =====================================================================================================================

#if version >= 2.0.5
    extern Uint32 SDL_DequeueAudio(SDL_AudioDeviceID dev, void* data, Uint32 len);
    extern int SDL_GetHintBoolean(const char* name, int default_value);
    extern int SDL_RenderSetIntegerScale(SDL_Renderer* renderer, int enable);
    extern SDL_Surface* SDL_CreateRGBSurfaceWithFormat(Uint32 flags, int width, int height, int depth, Uint32 format);
    extern SDL_Surface* SDL_CreateRGBSurfaceWithFormatFrom(void* pixels, int width, int height, int depth, int pitch, Uint32 format);
    extern int SDL_GetDisplayUsableBounds(int displayIndex, SDL_Rect* rect);
    extern int SDL_GetWindowBordersSize(SDL_Window* window, int* top, int* left, int* bottom, int* right);
    extern void SDL_SetWindowResizable(SDL_Window* window, int resizable);
    extern int SDL_SetWindowOpacity(SDL_Window* window, float opacity);
    extern int SDL_GetWindowOpacity(SDL_Window* window, float* out_opacity);
    extern int SDL_SetWindowModalFor(SDL_Window* modal_window, SDL_Window* parent_window);

    // FIXME This information is not in the release notes
    // FIXME Possible errors line "C function not found"
    extern int SDL_SetWindowInputFocus(SDL_Window* window);
    extern int SDL_RenderGetIntegerScale(SDL_Renderer* renderer);
#endif

// =====================================================================================================================
//   SDL >= 2.0.6
//
//   https://discourse.libsdl.org/t/sdl-2-0-6-prerelease/23024
// =====================================================================================================================

#if version >= 2.0.6
    // TODO SDL_Vulkan_XXX is the platform-specific code.
    // TODO Perhaps this can cause errors on Linux or MacOS.
    // TODO Need to check =)
    extern int SDL_Vulkan_LoadLibrary(const char* path);
    extern void* SDL_Vulkan_GetVkGetInstanceProcAddr(void);
    extern int SDL_Vulkan_GetInstanceExtensions(SDL_Window* window, unsigned int* pCount, const char **pNames);
    extern int SDL_Vulkan_CreateSurface(SDL_Window* window, VkInstance instance, VkSurfaceKHR *surface);
    extern void SDL_Vulkan_GetDrawableSize(SDL_Window* window, int* w, int* h);
    extern void SDL_Vulkan_UnloadLibrary(void);

    extern SDL_BlendMode SDL_ComposeCustomBlendMode(SDL_BlendFactor srcColorFactor, SDL_BlendFactor dstColorFactor, SDL_BlendOperation colorOperation, SDL_BlendFactor srcAlphaFactor, SDL_BlendFactor dstAlphaFactor, SDL_BlendOperation alphaOperation);
    extern int SDL_HasNEON(void);

    extern Uint16 SDL_JoystickGetDeviceVendor(int device_index);
    extern Uint16 SDL_JoystickGetDeviceProduct(int device_index);
    extern Uint16 SDL_JoystickGetDeviceProductVersion(int device_index);
    extern SDL_JoystickType SDL_JoystickGetDeviceType(int device_index);
    extern SDL_JoystickID SDL_JoystickGetDeviceInstanceID(int device_index);

    extern Uint16 SDL_JoystickGetVendor(SDL_Joystick* joystick);
    extern Uint16 SDL_JoystickGetProduct(SDL_Joystick* joystick);
    extern Uint16 SDL_JoystickGetProductVersion(SDL_Joystick* joystick);
    extern SDL_JoystickType SDL_JoystickGetType(SDL_Joystick* joystick);
    extern int SDL_JoystickGetAxisInitialState(SDL_Joystick* joystick, int axis, Sint16 *state);

    extern Uint16 SDL_GameControllerGetVendor(SDL_GameController* gamecontroller);
    extern Uint16 SDL_GameControllerGetProduct(SDL_GameController* gamecontroller);
    extern Uint16 SDL_GameControllerGetProductVersion(SDL_GameController* gamecontroller);
    extern int SDL_GameControllerNumMappings(void);
    extern char* SDL_GameControllerMappingForIndex(int mapping_index);

    // mapped to SDL_LoadFile
    extern void* SDL_LoadFile_RW(SDL_RWops* src, size_t* datasize, int freesrc);

    extern SDL_Surface* SDL_DuplicateSurface(SDL_Surface* surface);

    // FIXME This information is not in the release notes
    // FIXME Possible errors line "C function not found"
    extern void SDL_MemoryBarrierReleaseFunction(void);
    extern void SDL_MemoryBarrierAcquireFunction(void);
#endif

// =====================================================================================================================
//   SDL >= 2.0.7
//
//   https://discourse.libsdl.org/t/sdl-2-0-7-released/23279
// =====================================================================================================================

#if version >= 2.0.7
    extern SDL_AudioStream* SDL_NewAudioStream(const SDL_AudioFormat src_format, const Uint8 src_channels, const int src_rate, const SDL_AudioFormat dst_format, const Uint8 dst_channels, const int dst_rate);
    extern int SDL_AudioStreamPut(SDL_AudioStream* stream, const void* buf, int len);
    extern int SDL_AudioStreamGet(SDL_AudioStream* stream, void* buf, int len);
    extern int SDL_AudioStreamAvailable(SDL_AudioStream* stream);
    extern int SDL_AudioStreamFlush(SDL_AudioStream* stream);
    extern void SDL_AudioStreamClear(SDL_AudioStream* stream);
    extern void SDL_FreeAudioStream(SDL_AudioStream* stream);

    extern void SDL_LockJoysticks(void);
    extern void SDL_UnlockJoysticks(void);

    extern int SDL_GetNumAllocations(void);
    extern void SDL_GetMemoryFunctions(SDL_MallocFunc* malloc_func, SDL_CallocFunc* calloc_func, SDL_ReallocFunc* realloc_func, SDL_FreeFunc* free_func);
    extern int SDL_SetMemoryFunctions(SDL_MallocFunc malloc_func, SDL_CallocFunc calloc_func, SDL_ReallocFunc realloc_func, SDL_FreeFunc free_func);
#endif

// =====================================================================================================================
//   SDL >= 2.0.8
//
//   https://discourse.libsdl.org/t/sdl-2-0-8-released/23957
// =====================================================================================================================

#if version >= 2.0.8
    extern void SDL_SetYUVConversionMode(SDL_YUV_CONVERSION_MODE mode);
    extern SDL_YUV_CONVERSION_MODE SDL_GetYUVConversionMode(void);

    // TODO These are functions associated with MacOS and have not been tested for existence in Linux
    extern void* SDL_RenderGetMetalLayer(SDL_Renderer* renderer);
    extern void* SDL_RenderGetMetalCommandEncoder(SDL_Renderer* renderer);

    // FIXME This information is not in the release notes
    // FIXME Possible errors line "C function not found"
    extern SDL_YUV_CONVERSION_MODE SDL_GetYUVConversionModeForResolution(int width, int height);

    #ifdef __android__
        extern int SDL_IsAndroidTV(void);
    #endif
#endif

// =====================================================================================================================
//   SDL >= 2.0.9
//
//   https://discourse.libsdl.org/t/sdl-2-0-9-released/25228
// =====================================================================================================================

#if version >= 2.0.9
    // New Sensor API: Methods
    extern int SDL_NumSensors(void);
    extern const char* SDL_SensorGetDeviceName(int device_index);
    extern SDL_SensorType SDL_SensorGetDeviceType(int device_index);
    extern int SDL_SensorGetDeviceNonPortableType(int device_index);
    extern SDL_SensorID SDL_SensorGetDeviceInstanceID(int device_index);
    extern SDL_Sensor* SDL_SensorOpen(int device_index);
    extern SDL_Sensor* SDL_SensorFromInstanceID(SDL_SensorID instance_id);
    extern const char* SDL_SensorGetName(SDL_Sensor* sensor);
    extern SDL_SensorType SDL_SensorGetType(SDL_Sensor* sensor);
    extern int SDL_SensorGetNonPortableType(SDL_Sensor* sensor);
    extern SDL_SensorID SDL_SensorGetInstanceID(SDL_Sensor* sensor);
    extern int SDL_SensorGetData(SDL_Sensor* sensor, float* data, int num_values);
    extern void SDL_SensorClose(SDL_Sensor* sensor);
    extern void SDL_SensorUpdate(void);

    extern SDL_DisplayOrientation SDL_GetDisplayOrientation(int displayIndex);

    extern int SDL_JoystickGetDevicePlayerIndex(int device_index);
    extern int SDL_JoystickGetPlayerIndex(SDL_Joystick* joystick);
    extern int SDL_GameControllerGetPlayerIndex(SDL_GameController* gamecontroller);

    extern int SDL_GameControllerRumble(SDL_GameController* gamecontroller, Uint16 low_frequency_rumble, Uint16 high_frequency_rumble, Uint32 duration_ms);
    extern int SDL_JoystickRumble(SDL_Joystick* joystick, Uint16 low_frequency_rumble, Uint16 high_frequency_rumble, Uint32 duration_ms);

    extern char* SDL_GameControllerMappingForDeviceIndex(int joystick_index);

    extern int SDL_HasColorKey(SDL_Surface* surface);

    extern int SDL_HasAVX512F(void);
    extern int SDL_IsTablet(void);

    #ifdef __linux__
        extern int SDL_LinuxSetThreadPriority(Sint64 threadID, int priority);
    #endif

    // FIXME This information is not in the release notes
    // FIXME Possible errors line "C function not found"
    extern SDL_Thread* SDL_CreateThreadWithStackSize(int ( *fn)(void *), const char* name, const size_t stacksize, void* data, pfnSDL_CurrentBeginThread pfnBeginThread, pfnSDL_CurrentEndThread pfnEndThread);
#endif

// =====================================================================================================================
//   SDL >= 2.0.10
// =====================================================================================================================

#if version >= 2.0.10
    extern size_t SDL_SIMDGetAlignment(void);
    extern void* SDL_SIMDAlloc(const size_t len);
    extern void SDL_SIMDFree(void* ptr);

    extern int SDL_RenderDrawPointF(SDL_Renderer* renderer, float x, float y);
    extern int SDL_RenderDrawPointsF(SDL_Renderer* renderer, const SDL_FPoint* points, int count);
    extern int SDL_RenderDrawLineF(SDL_Renderer* renderer, float x1, float y1, float x2, float y2);
    extern int SDL_RenderDrawLinesF(SDL_Renderer* renderer, const SDL_FPoint* points, int count);
    extern int SDL_RenderDrawRectF(SDL_Renderer* renderer, const SDL_FRect* rect);
    extern int SDL_RenderDrawRectsF(SDL_Renderer* renderer, const SDL_FRect* rects, int count);
    extern int SDL_RenderFillRectF(SDL_Renderer* renderer, const SDL_FRect* rect);
    extern int SDL_RenderFillRectsF(SDL_Renderer* renderer, const SDL_FRect* rects, int count);
    extern int SDL_RenderCopyF(SDL_Renderer* renderer, SDL_Texture* texture, const SDL_Rect* srcrect, const SDL_FRect* dstrect);
    extern int SDL_RenderCopyExF(SDL_Renderer* renderer, SDL_Texture* texture, const SDL_Rect* srcrect, const SDL_FRect* dstrect, const double angle, const SDL_FPoint* center, const SDL_RendererFlip flip);

    extern SDL_TouchDeviceType SDL_GetTouchDeviceType(SDL_TouchID touchID);

    extern int SDL_RenderFlush(SDL_Renderer* renderer);

    // FIXME This information is not in the release notes
    // FIXME Possible errors line "C function not found"
    extern Sint64 SDL_RWsize(SDL_RWops* context);
    extern Sint64 SDL_RWseek(SDL_RWops* context, Sint64 offset, int whence);
    extern Sint64 SDL_RWtell(SDL_RWops* context);
    extern size_t SDL_RWread(SDL_RWops* context, void* ptr, size_t size, size_t maxnum);
    extern size_t SDL_RWwrite(SDL_RWops* context, const void* ptr, size_t size, size_t num);
    extern int SDL_RWclose(SDL_RWops* context);
    extern void* SDL_LoadFile(const char* file, size_t* datasize);
#endif
