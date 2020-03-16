<?php
namespace Serafim\SDL {
    /** @mixin \FFI\CPtr */
    class SDL_AssertDataPtr extends SDL_AssertData
    {
        private function __construct() {}
        private function offsetGet(int $i): SDL_AssertData {}
        private function offsetSet(int $i, SDL_AssertData $d): void {}
    }

    /** @mixin \FFI\CPtr */
    class SDL_AtomicTPtr extends SDL_AtomicT
    {
        private function __construct() {}
        private function offsetGet(int $i): SDL_AtomicT {}
        private function offsetSet(int $i, SDL_AtomicT $d): void {}
    }

    /** @mixin \FFI\CPtr */
    class SDL_MutexPtr extends SDL_Mutex
    {
        private function __construct() {}
        private function offsetGet(int $i): SDL_Mutex {}
        private function offsetSet(int $i, SDL_Mutex $d): void {}
    }

    /** @mixin \FFI\CPtr */
    class SDL_SemaphorePtr extends SDL_Semaphore
    {
        private function __construct() {}
        private function offsetGet(int $i): SDL_Semaphore {}
        private function offsetSet(int $i, SDL_Semaphore $d): void {}
    }

    /** @mixin \FFI\CPtr */
    class SDL_CondPtr extends SDL_Cond
    {
        private function __construct() {}
        private function offsetGet(int $i): SDL_Cond {}
        private function offsetSet(int $i, SDL_Cond $d): void {}
    }

    /** @mixin \FFI\CPtr */
    class SDL_ThreadPtr extends SDL_Thread
    {
        private function __construct() {}
        private function offsetGet(int $i): SDL_Thread {}
        private function offsetSet(int $i, SDL_Thread $d): void {}
    }

    /** @mixin \FFI\CPtr */
    class SDL_RWopsPtr extends SDL_RWops
    {
        private function __construct() {}
        private function offsetGet(int $i): SDL_RWops {}
        private function offsetSet(int $i, SDL_RWops $d): void {}
    }

    /** @mixin \FFI\CPtr */
    class SDL_AudioSpecPtr extends SDL_AudioSpec
    {
        private function __construct() {}
        private function offsetGet(int $i): SDL_AudioSpec {}
        private function offsetSet(int $i, SDL_AudioSpec $d): void {}
    }

    /** @mixin \FFI\CPtr */
    class SDL_AudioCVTPtr extends SDL_AudioCVT
    {
        private function __construct() {}
        private function offsetGet(int $i): SDL_AudioCVT {}
        private function offsetSet(int $i, SDL_AudioCVT $d): void {}
    }

    /** @mixin \FFI\CPtr */
    class SDL_AudioStreamPtr extends SDL_AudioStream
    {
        private function __construct() {}
        private function offsetGet(int $i): SDL_AudioStream {}
        private function offsetSet(int $i, SDL_AudioStream $d): void {}
    }

    /** @mixin \FFI\CPtr */
    class SDL_PixelFormatPtr extends SDL_PixelFormat
    {
        private function __construct() {}
        private function offsetGet(int $i): SDL_PixelFormat {}
        private function offsetSet(int $i, SDL_PixelFormat $d): void {}
    }

    /** @mixin \FFI\CPtr */
    class SDL_PalettePtr extends SDL_Palette
    {
        private function __construct() {}
        private function offsetGet(int $i): SDL_Palette {}
        private function offsetSet(int $i, SDL_Palette $d): void {}
    }

    /** @mixin \FFI\CPtr */
    class SDL_ColorPtr extends SDL_Color
    {
        private function __construct() {}
        private function offsetGet(int $i): SDL_Color {}
        private function offsetSet(int $i, SDL_Color $d): void {}
    }

    /** @mixin \FFI\CPtr */
    class SDL_RectPtr extends SDL_Rect
    {
        private function __construct() {}
        private function offsetGet(int $i): SDL_Rect {}
        private function offsetSet(int $i, SDL_Rect $d): void {}
    }

    /** @mixin \FFI\CPtr */
    class SDL_SurfacePtr extends SDL_Surface
    {
        private function __construct() {}
        private function offsetGet(int $i): SDL_Surface {}
        private function offsetSet(int $i, SDL_Surface $d): void {}
    }

    /** @mixin \FFI\CPtr */
    class SDL_DisplayModePtr extends SDL_DisplayMode
    {
        private function __construct() {}
        private function offsetGet(int $i): SDL_DisplayMode {}
        private function offsetSet(int $i, SDL_DisplayMode $d): void {}
    }

    /** @mixin \FFI\CPtr */
    class SDL_WindowPtr extends SDL_Window
    {
        private function __construct() {}
        private function offsetGet(int $i): SDL_Window {}
        private function offsetSet(int $i, SDL_Window $d): void {}
    }

    /** @mixin \FFI\CPtr */
    class SDL_WindowPtrPtr extends SDL_WindowPtr
    {
        private function __construct() {}
        private function offsetGet(int $i): SDL_WindowPtr {}
        private function offsetSet(int $i, SDL_WindowPtr $d): void {}
    }

    /** @mixin \FFI\CPtr */
    class SDL_CursorPtr extends SDL_Cursor
    {
        private function __construct() {}
        private function offsetGet(int $i): SDL_Cursor {}
        private function offsetSet(int $i, SDL_Cursor $d): void {}
    }

    /** @mixin \FFI\CPtr */
    class SDL_JoystickPtr extends SDL_Joystick
    {
        private function __construct() {}
        private function offsetGet(int $i): SDL_Joystick {}
        private function offsetSet(int $i, SDL_Joystick $d): void {}
    }

    /** @mixin \FFI\CPtr */
    class SDL_GameControllerPtr extends SDL_GameController
    {
        private function __construct() {}
        private function offsetGet(int $i): SDL_GameController {}
        private function offsetSet(int $i, SDL_GameController $d): void {}
    }

    /** @mixin \FFI\CPtr */
    class SDL_FingerPtr extends SDL_Finger
    {
        private function __construct() {}
        private function offsetGet(int $i): SDL_Finger {}
        private function offsetSet(int $i, SDL_Finger $d): void {}
    }

    /** @mixin \FFI\CPtr */
    class SDL_EventPtr extends SDL_Event
    {
        private function __construct() {}
        private function offsetGet(int $i): SDL_Event {}
        private function offsetSet(int $i, SDL_Event $d): void {}
    }

    /** @mixin \FFI\CPtr */
    class SDL_EventFilterPtr extends SDL_EventFilter
    {
        private function __construct() {}
        private function offsetGet(int $i): SDL_EventFilter {}
        private function offsetSet(int $i, SDL_EventFilter $d): void {}
    }

    /** @mixin \FFI\CPtr */
    class SDL_HapticPtr extends SDL_Haptic
    {
        private function __construct() {}
        private function offsetGet(int $i): SDL_Haptic {}
        private function offsetSet(int $i, SDL_Haptic $d): void {}
    }

    /** @mixin \FFI\CPtr */
    class SDL_HapticEffectPtr extends SDL_HapticEffect
    {
        private function __construct() {}
        private function offsetGet(int $i): SDL_HapticEffect {}
        private function offsetSet(int $i, SDL_HapticEffect $d): void {}
    }

    /** @mixin \FFI\CPtr */
    class SDL_LogOutputFunctionPtr extends SDL_LogOutputFunction
    {
        private function __construct() {}
        private function offsetGet(int $i): SDL_LogOutputFunction {}
        private function offsetSet(int $i, SDL_LogOutputFunction $d): void {}
    }

    /** @mixin \FFI\CPtr */
    class SDL_MessageBoxDataPtr extends SDL_MessageBoxData
    {
        private function __construct() {}
        private function offsetGet(int $i): SDL_MessageBoxData {}
        private function offsetSet(int $i, SDL_MessageBoxData $d): void {}
    }

    /** @mixin \FFI\CPtr */
    class SDL_RendererInfoPtr extends SDL_RendererInfo
    {
        private function __construct() {}
        private function offsetGet(int $i): SDL_RendererInfo {}
        private function offsetSet(int $i, SDL_RendererInfo $d): void {}
    }

    /** @mixin \FFI\CPtr */
    class SDL_RendererPtr extends SDL_Renderer
    {
        private function __construct() {}
        private function offsetGet(int $i): SDL_Renderer {}
        private function offsetSet(int $i, SDL_Renderer $d): void {}
    }

    /** @mixin \FFI\CPtr */
    class SDL_RendererPtrPtr extends SDL_RendererPtr
    {
        private function __construct() {}
        private function offsetGet(int $i): SDL_RendererPtr {}
        private function offsetSet(int $i, SDL_RendererPtr $d): void {}
    }

    /** @mixin \FFI\CPtr */
    class SDL_TexturePtr extends SDL_Texture
    {
        private function __construct() {}
        private function offsetGet(int $i): SDL_Texture {}
        private function offsetSet(int $i, SDL_Texture $d): void {}
    }

    /** @mixin \FFI\CPtr */
    class SDL_FRectPtr extends SDL_FRect
    {
        private function __construct() {}
        private function offsetGet(int $i): SDL_FRect {}
        private function offsetSet(int $i, SDL_FRect $d): void {}
    }

    /** @mixin \FFI\CPtr */
    class SDL_SensorPtr extends SDL_Sensor
    {
        private function __construct() {}
        private function offsetGet(int $i): SDL_Sensor {}
        private function offsetSet(int $i, SDL_Sensor $d): void {}
    }

    /** @mixin \FFI\CPtr */
    class SDL_WindowShapeModePtr extends SDL_WindowShapeMode
    {
        private function __construct() {}
        private function offsetGet(int $i): SDL_WindowShapeMode {}
        private function offsetSet(int $i, SDL_WindowShapeMode $d): void {}
    }

    /** @mixin \FFI\CPtr */
    class IDirect3DDevice9Ptr extends IDirect3DDevice9
    {
        private function __construct() {}
        private function offsetGet(int $i): IDirect3DDevice9 {}
        private function offsetSet(int $i, IDirect3DDevice9 $d): void {}
    }

    /** @mixin \FFI\CPtr */
    class SDL_VersionPtr extends SDL_Version
    {
        private function __construct() {}
        private function offsetGet(int $i): SDL_Version {}
        private function offsetSet(int $i, SDL_Version $d): void {}
    }

}