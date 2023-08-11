<?php

// @formatter:off
// phpcs:ignoreFile

/**
 * A helper file for FFI, to provide autocomplete information to your IDE
 * Generated for FFI {@see Serafim\SDL\SDL}.
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author Nesmeyanov Kirill <nesk@xakep.ru>
 * @see https://github.com/php-ffi/ide-helper-generator
 *
 * @psalm-suppress all
 */

declare (strict_types=1);
namespace PHPSTORM_META {
    registerArgumentsSet(
        // List of "SDL_bool" enum cases
        'ffi_sdl_sdl_bool',
        \Serafim\SDL\Boolean::SDL_FALSE,
        \Serafim\SDL\Boolean::SDL_TRUE
    );
    registerArgumentsSet(
        // List of "SDL_DUMMY_ENUM" enum cases
        'ffi_sdl_sdl_dummy_enum',
        \Serafim\SDL\SDLDUMMYENUM::DUMMY_ENUM_VALUE
    );
    registerArgumentsSet(
        // List of "SDL_AssertState" enum cases
        'ffi_sdl_sdl_assertstate',
        \Serafim\SDL\Assert\State::SDL_ASSERTION_RETRY,
        \Serafim\SDL\Assert\State::SDL_ASSERTION_BREAK,
        \Serafim\SDL\Assert\State::SDL_ASSERTION_ABORT,
        \Serafim\SDL\Assert\State::SDL_ASSERTION_IGNORE,
        \Serafim\SDL\Assert\State::SDL_ASSERTION_ALWAYS_IGNORE
    );
    registerArgumentsSet(
        // List of "SDL_errorcode" enum cases
        'ffi_sdl_sdl_errorcode',
        \Serafim\SDL\ErrorCode::SDL_ENOMEM,
        \Serafim\SDL\ErrorCode::SDL_EFREAD,
        \Serafim\SDL\ErrorCode::SDL_EFWRITE,
        \Serafim\SDL\ErrorCode::SDL_EFSEEK,
        \Serafim\SDL\ErrorCode::SDL_UNSUPPORTED,
        \Serafim\SDL\ErrorCode::SDL_LASTERROR
    );
    registerArgumentsSet(
        // List of "SDL_ThreadPriority" enum cases
        'ffi_sdl_sdl_threadpriority',
        \Serafim\SDL\ThreadPriority::SDL_THREAD_PRIORITY_LOW,
        \Serafim\SDL\ThreadPriority::SDL_THREAD_PRIORITY_NORMAL,
        \Serafim\SDL\ThreadPriority::SDL_THREAD_PRIORITY_HIGH,
        \Serafim\SDL\ThreadPriority::SDL_THREAD_PRIORITY_TIME_CRITICAL
    );
    registerArgumentsSet(
        // List of "SDL_AudioStatus" enum cases
        'ffi_sdl_sdl_audiostatus',
        \Serafim\SDL\Audio\Status::SDL_AUDIO_STOPPED,
        \Serafim\SDL\Audio\Status::SDL_AUDIO_PLAYING,
        \Serafim\SDL\Audio\Status::SDL_AUDIO_PAUSED
    );
    registerArgumentsSet(
        // List of "SDL_PixelType" enum cases
        'ffi_sdl_sdl_pixeltype',
        \Serafim\SDL\Video\PixelType::SDL_PIXELTYPE_UNKNOWN,
        \Serafim\SDL\Video\PixelType::SDL_PIXELTYPE_INDEX1,
        \Serafim\SDL\Video\PixelType::SDL_PIXELTYPE_INDEX4,
        \Serafim\SDL\Video\PixelType::SDL_PIXELTYPE_INDEX8,
        \Serafim\SDL\Video\PixelType::SDL_PIXELTYPE_PACKED8,
        \Serafim\SDL\Video\PixelType::SDL_PIXELTYPE_PACKED16,
        \Serafim\SDL\Video\PixelType::SDL_PIXELTYPE_PACKED32,
        \Serafim\SDL\Video\PixelType::SDL_PIXELTYPE_ARRAYU8,
        \Serafim\SDL\Video\PixelType::SDL_PIXELTYPE_ARRAYU16,
        \Serafim\SDL\Video\PixelType::SDL_PIXELTYPE_ARRAYU32,
        \Serafim\SDL\Video\PixelType::SDL_PIXELTYPE_ARRAYF16,
        \Serafim\SDL\Video\PixelType::SDL_PIXELTYPE_ARRAYF32
    );
    registerArgumentsSet(
        // List of "SDL_BitmapOrder" enum cases
        'ffi_sdl_sdl_bitmaporder',
        \Serafim\SDL\Video\BitMapOrder::SDL_BITMAPORDER_NONE,
        \Serafim\SDL\Video\BitMapOrder::SDL_BITMAPORDER_4321,
        \Serafim\SDL\Video\BitMapOrder::SDL_BITMAPORDER_1234
    );
    registerArgumentsSet(
        // List of "SDL_PackedOrder" enum cases
        'ffi_sdl_sdl_packedorder',
        \Serafim\SDL\Video\PackedOrder::SDL_PACKEDORDER_NONE,
        \Serafim\SDL\Video\PackedOrder::SDL_PACKEDORDER_XRGB,
        \Serafim\SDL\Video\PackedOrder::SDL_PACKEDORDER_RGBX,
        \Serafim\SDL\Video\PackedOrder::SDL_PACKEDORDER_ARGB,
        \Serafim\SDL\Video\PackedOrder::SDL_PACKEDORDER_RGBA,
        \Serafim\SDL\Video\PackedOrder::SDL_PACKEDORDER_XBGR,
        \Serafim\SDL\Video\PackedOrder::SDL_PACKEDORDER_BGRX,
        \Serafim\SDL\Video\PackedOrder::SDL_PACKEDORDER_ABGR,
        \Serafim\SDL\Video\PackedOrder::SDL_PACKEDORDER_BGRA
    );
    registerArgumentsSet(
        // List of "SDL_ArrayOrder" enum cases
        'ffi_sdl_sdl_arrayorder',
        \Serafim\SDL\Video\ArrayOrder::SDL_ARRAYORDER_NONE,
        \Serafim\SDL\Video\ArrayOrder::SDL_ARRAYORDER_RGB,
        \Serafim\SDL\Video\ArrayOrder::SDL_ARRAYORDER_RGBA,
        \Serafim\SDL\Video\ArrayOrder::SDL_ARRAYORDER_ARGB,
        \Serafim\SDL\Video\ArrayOrder::SDL_ARRAYORDER_BGR,
        \Serafim\SDL\Video\ArrayOrder::SDL_ARRAYORDER_BGRA,
        \Serafim\SDL\Video\ArrayOrder::SDL_ARRAYORDER_ABGR
    );
    registerArgumentsSet(
        // List of "SDL_PackedLayout" enum cases
        'ffi_sdl_sdl_packedlayout',
        \Serafim\SDL\Video\PackedLayout::SDL_PACKEDLAYOUT_NONE,
        \Serafim\SDL\Video\PackedLayout::SDL_PACKEDLAYOUT_332,
        \Serafim\SDL\Video\PackedLayout::SDL_PACKEDLAYOUT_4444,
        \Serafim\SDL\Video\PackedLayout::SDL_PACKEDLAYOUT_1555,
        \Serafim\SDL\Video\PackedLayout::SDL_PACKEDLAYOUT_5551,
        \Serafim\SDL\Video\PackedLayout::SDL_PACKEDLAYOUT_565,
        \Serafim\SDL\Video\PackedLayout::SDL_PACKEDLAYOUT_8888,
        \Serafim\SDL\Video\PackedLayout::SDL_PACKEDLAYOUT_2101010,
        \Serafim\SDL\Video\PackedLayout::SDL_PACKEDLAYOUT_1010102
    );
    registerArgumentsSet(
        // List of "SDL_PixelFormatEnum" enum cases
        'ffi_sdl_sdl_pixelformatenum',
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_UNKNOWN,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_INDEX1LSB,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_INDEX1MSB,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_INDEX4LSB,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_INDEX4MSB,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_INDEX8,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_RGB332,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_XRGB4444,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_RGB444,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_XBGR4444,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_BGR444,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_XRGB1555,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_RGB555,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_XBGR1555,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_BGR555,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_ARGB4444,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_RGBA4444,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_ABGR4444,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_BGRA4444,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_ARGB1555,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_RGBA5551,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_ABGR1555,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_BGRA5551,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_RGB565,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_BGR565,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_RGB24,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_BGR24,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_XRGB8888,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_RGB888,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_RGBX8888,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_XBGR8888,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_BGR888,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_BGRX8888,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_ARGB8888,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_RGBA8888,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_ABGR8888,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_BGRA8888,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_ARGB2101010,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_RGBA32,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_ARGB32,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_BGRA32,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_ABGR32,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_YV12,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_IYUV,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_YUY2,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_UYVY,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_YVYU,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_NV12,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_NV21,
        \Serafim\SDL\Video\PixelFormat::SDL_PIXELFORMAT_EXTERNAL_OES
    );
    registerArgumentsSet(
        // List of "SDL_BlendMode" enum cases
        'ffi_sdl_sdl_blendmode',
        \Serafim\SDL\Video\BlendMode::SDL_BLENDMODE_NONE,
        \Serafim\SDL\Video\BlendMode::SDL_BLENDMODE_BLEND,
        \Serafim\SDL\Video\BlendMode::SDL_BLENDMODE_ADD,
        \Serafim\SDL\Video\BlendMode::SDL_BLENDMODE_MOD,
        \Serafim\SDL\Video\BlendMode::SDL_BLENDMODE_MUL,
        \Serafim\SDL\Video\BlendMode::SDL_BLENDMODE_INVALID
    );
    registerArgumentsSet(
        // List of "SDL_BlendOperation" enum cases
        'ffi_sdl_sdl_blendoperation',
        \Serafim\SDL\Video\BlendOperation::SDL_BLENDOPERATION_ADD,
        \Serafim\SDL\Video\BlendOperation::SDL_BLENDOPERATION_SUBTRACT,
        \Serafim\SDL\Video\BlendOperation::SDL_BLENDOPERATION_REV_SUBTRACT,
        \Serafim\SDL\Video\BlendOperation::SDL_BLENDOPERATION_MINIMUM,
        \Serafim\SDL\Video\BlendOperation::SDL_BLENDOPERATION_MAXIMUM
    );
    registerArgumentsSet(
        // List of "SDL_BlendFactor" enum cases
        'ffi_sdl_sdl_blendfactor',
        \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_ZERO,
        \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_ONE,
        \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_SRC_COLOR,
        \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_ONE_MINUS_SRC_COLOR,
        \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_SRC_ALPHA,
        \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_ONE_MINUS_SRC_ALPHA,
        \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_DST_COLOR,
        \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_ONE_MINUS_DST_COLOR,
        \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_DST_ALPHA,
        \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_ONE_MINUS_DST_ALPHA
    );
    registerArgumentsSet(
        // List of "SDL_YUV_CONVERSION_MODE" enum cases
        'ffi_sdl_sdl_yuv_conversion_mode',
        \Serafim\SDL\Video\YuvConversionMode::SDL_YUV_CONVERSION_JPEG,
        \Serafim\SDL\Video\YuvConversionMode::SDL_YUV_CONVERSION_BT601,
        \Serafim\SDL\Video\YuvConversionMode::SDL_YUV_CONVERSION_BT709,
        \Serafim\SDL\Video\YuvConversionMode::SDL_YUV_CONVERSION_AUTOMATIC
    );
    registerArgumentsSet(
        // List of "SDL_WindowFlags" enum cases
        'ffi_sdl_sdl_windowflags',
        \Serafim\SDL\Video\WindowFlags::SDL_WINDOW_FULLSCREEN,
        \Serafim\SDL\Video\WindowFlags::SDL_WINDOW_OPENGL,
        \Serafim\SDL\Video\WindowFlags::SDL_WINDOW_SHOWN,
        \Serafim\SDL\Video\WindowFlags::SDL_WINDOW_HIDDEN,
        \Serafim\SDL\Video\WindowFlags::SDL_WINDOW_BORDERLESS,
        \Serafim\SDL\Video\WindowFlags::SDL_WINDOW_RESIZABLE,
        \Serafim\SDL\Video\WindowFlags::SDL_WINDOW_MINIMIZED,
        \Serafim\SDL\Video\WindowFlags::SDL_WINDOW_MAXIMIZED,
        \Serafim\SDL\Video\WindowFlags::SDL_WINDOW_MOUSE_GRABBED,
        \Serafim\SDL\Video\WindowFlags::SDL_WINDOW_INPUT_FOCUS,
        \Serafim\SDL\Video\WindowFlags::SDL_WINDOW_MOUSE_FOCUS,
        \Serafim\SDL\Video\WindowFlags::SDL_WINDOW_FULLSCREEN_DESKTOP,
        \Serafim\SDL\Video\WindowFlags::SDL_WINDOW_FOREIGN,
        \Serafim\SDL\Video\WindowFlags::SDL_WINDOW_ALLOW_HIGHDPI,
        \Serafim\SDL\Video\WindowFlags::SDL_WINDOW_MOUSE_CAPTURE,
        \Serafim\SDL\Video\WindowFlags::SDL_WINDOW_ALWAYS_ON_TOP,
        \Serafim\SDL\Video\WindowFlags::SDL_WINDOW_SKIP_TASKBAR,
        \Serafim\SDL\Video\WindowFlags::SDL_WINDOW_UTILITY,
        \Serafim\SDL\Video\WindowFlags::SDL_WINDOW_TOOLTIP,
        \Serafim\SDL\Video\WindowFlags::SDL_WINDOW_POPUP_MENU,
        \Serafim\SDL\Video\WindowFlags::SDL_WINDOW_KEYBOARD_GRABBED,
        \Serafim\SDL\Video\WindowFlags::SDL_WINDOW_VULKAN,
        \Serafim\SDL\Video\WindowFlags::SDL_WINDOW_METAL,
        \Serafim\SDL\Video\WindowFlags::SDL_WINDOW_INPUT_GRABBED
    );
    registerArgumentsSet(
        // List of "SDL_WindowEventID" enum cases
        'ffi_sdl_sdl_windoweventid',
        \Serafim\SDL\Video\WindowEvent::SDL_WINDOWEVENT_NONE,
        \Serafim\SDL\Video\WindowEvent::SDL_WINDOWEVENT_SHOWN,
        \Serafim\SDL\Video\WindowEvent::SDL_WINDOWEVENT_HIDDEN,
        \Serafim\SDL\Video\WindowEvent::SDL_WINDOWEVENT_EXPOSED,
        \Serafim\SDL\Video\WindowEvent::SDL_WINDOWEVENT_MOVED,
        \Serafim\SDL\Video\WindowEvent::SDL_WINDOWEVENT_RESIZED,
        \Serafim\SDL\Video\WindowEvent::SDL_WINDOWEVENT_SIZE_CHANGED,
        \Serafim\SDL\Video\WindowEvent::SDL_WINDOWEVENT_MINIMIZED,
        \Serafim\SDL\Video\WindowEvent::SDL_WINDOWEVENT_MAXIMIZED,
        \Serafim\SDL\Video\WindowEvent::SDL_WINDOWEVENT_RESTORED,
        \Serafim\SDL\Video\WindowEvent::SDL_WINDOWEVENT_ENTER,
        \Serafim\SDL\Video\WindowEvent::SDL_WINDOWEVENT_LEAVE,
        \Serafim\SDL\Video\WindowEvent::SDL_WINDOWEVENT_FOCUS_GAINED,
        \Serafim\SDL\Video\WindowEvent::SDL_WINDOWEVENT_FOCUS_LOST,
        \Serafim\SDL\Video\WindowEvent::SDL_WINDOWEVENT_CLOSE,
        \Serafim\SDL\Video\WindowEvent::SDL_WINDOWEVENT_TAKE_FOCUS,
        \Serafim\SDL\Video\WindowEvent::SDL_WINDOWEVENT_HIT_TEST,
        \Serafim\SDL\Video\WindowEvent::SDL_WINDOWEVENT_ICCPROF_CHANGED,
        \Serafim\SDL\Video\WindowEvent::SDL_WINDOWEVENT_DISPLAY_CHANGED
    );
    registerArgumentsSet(
        // List of "SDL_DisplayEventID" enum cases
        'ffi_sdl_sdl_displayeventid',
        \Serafim\SDL\Video\DisplayEvent::SDL_DISPLAYEVENT_NONE,
        \Serafim\SDL\Video\DisplayEvent::SDL_DISPLAYEVENT_ORIENTATION,
        \Serafim\SDL\Video\DisplayEvent::SDL_DISPLAYEVENT_CONNECTED,
        \Serafim\SDL\Video\DisplayEvent::SDL_DISPLAYEVENT_DISCONNECTED,
        \Serafim\SDL\Video\DisplayEvent::SDL_DISPLAYEVENT_MOVED
    );
    registerArgumentsSet(
        // List of "SDL_DisplayOrientation" enum cases
        'ffi_sdl_sdl_displayorientation',
        \Serafim\SDL\Video\DisplayOrientation::SDL_ORIENTATION_UNKNOWN,
        \Serafim\SDL\Video\DisplayOrientation::SDL_ORIENTATION_LANDSCAPE,
        \Serafim\SDL\Video\DisplayOrientation::SDL_ORIENTATION_LANDSCAPE_FLIPPED,
        \Serafim\SDL\Video\DisplayOrientation::SDL_ORIENTATION_PORTRAIT,
        \Serafim\SDL\Video\DisplayOrientation::SDL_ORIENTATION_PORTRAIT_FLIPPED
    );
    registerArgumentsSet(
        // List of "SDL_FlashOperation" enum cases
        'ffi_sdl_sdl_flashoperation',
        \Serafim\SDL\Video\FlashOperation::SDL_FLASH_CANCEL,
        \Serafim\SDL\Video\FlashOperation::SDL_FLASH_BRIEFLY,
        \Serafim\SDL\Video\FlashOperation::SDL_FLASH_UNTIL_FOCUSED
    );
    registerArgumentsSet(
        // List of "SDL_GLattr" enum cases
        'ffi_sdl_sdl_glattr',
        \Serafim\SDL\OpenGL\GLAttr::SDL_GL_RED_SIZE,
        \Serafim\SDL\OpenGL\GLAttr::SDL_GL_GREEN_SIZE,
        \Serafim\SDL\OpenGL\GLAttr::SDL_GL_BLUE_SIZE,
        \Serafim\SDL\OpenGL\GLAttr::SDL_GL_ALPHA_SIZE,
        \Serafim\SDL\OpenGL\GLAttr::SDL_GL_BUFFER_SIZE,
        \Serafim\SDL\OpenGL\GLAttr::SDL_GL_DOUBLEBUFFER,
        \Serafim\SDL\OpenGL\GLAttr::SDL_GL_DEPTH_SIZE,
        \Serafim\SDL\OpenGL\GLAttr::SDL_GL_STENCIL_SIZE,
        \Serafim\SDL\OpenGL\GLAttr::SDL_GL_ACCUM_RED_SIZE,
        \Serafim\SDL\OpenGL\GLAttr::SDL_GL_ACCUM_GREEN_SIZE,
        \Serafim\SDL\OpenGL\GLAttr::SDL_GL_ACCUM_BLUE_SIZE,
        \Serafim\SDL\OpenGL\GLAttr::SDL_GL_ACCUM_ALPHA_SIZE,
        \Serafim\SDL\OpenGL\GLAttr::SDL_GL_STEREO,
        \Serafim\SDL\OpenGL\GLAttr::SDL_GL_MULTISAMPLEBUFFERS,
        \Serafim\SDL\OpenGL\GLAttr::SDL_GL_MULTISAMPLESAMPLES,
        \Serafim\SDL\OpenGL\GLAttr::SDL_GL_ACCELERATED_VISUAL,
        \Serafim\SDL\OpenGL\GLAttr::SDL_GL_RETAINED_BACKING,
        \Serafim\SDL\OpenGL\GLAttr::SDL_GL_CONTEXT_MAJOR_VERSION,
        \Serafim\SDL\OpenGL\GLAttr::SDL_GL_CONTEXT_MINOR_VERSION,
        \Serafim\SDL\OpenGL\GLAttr::SDL_GL_CONTEXT_EGL,
        \Serafim\SDL\OpenGL\GLAttr::SDL_GL_CONTEXT_FLAGS,
        \Serafim\SDL\OpenGL\GLAttr::SDL_GL_CONTEXT_PROFILE_MASK,
        \Serafim\SDL\OpenGL\GLAttr::SDL_GL_SHARE_WITH_CURRENT_CONTEXT,
        \Serafim\SDL\OpenGL\GLAttr::SDL_GL_FRAMEBUFFER_SRGB_CAPABLE,
        \Serafim\SDL\OpenGL\GLAttr::SDL_GL_CONTEXT_RELEASE_BEHAVIOR,
        \Serafim\SDL\OpenGL\GLAttr::SDL_GL_CONTEXT_RESET_NOTIFICATION,
        \Serafim\SDL\OpenGL\GLAttr::SDL_GL_CONTEXT_NO_ERROR,
        \Serafim\SDL\OpenGL\GLAttr::SDL_GL_FLOATBUFFERS
    );
    registerArgumentsSet(
        // List of "SDL_GLprofile" enum cases
        'ffi_sdl_sdl_glprofile',
        \Serafim\SDL\OpenGL\GLProfile::SDL_GL_CONTEXT_PROFILE_CORE,
        \Serafim\SDL\OpenGL\GLProfile::SDL_GL_CONTEXT_PROFILE_COMPATIBILITY,
        \Serafim\SDL\OpenGL\GLProfile::SDL_GL_CONTEXT_PROFILE_ES
    );
    registerArgumentsSet(
        // List of "SDL_GLcontextFlag" enum cases
        'ffi_sdl_sdl_glcontextflag',
        \Serafim\SDL\OpenGL\GLContextFlag::SDL_GL_CONTEXT_DEBUG_FLAG,
        \Serafim\SDL\OpenGL\GLContextFlag::SDL_GL_CONTEXT_FORWARD_COMPATIBLE_FLAG,
        \Serafim\SDL\OpenGL\GLContextFlag::SDL_GL_CONTEXT_ROBUST_ACCESS_FLAG,
        \Serafim\SDL\OpenGL\GLContextFlag::SDL_GL_CONTEXT_RESET_ISOLATION_FLAG
    );
    registerArgumentsSet(
        // List of "SDL_GLcontextReleaseFlag" enum cases
        'ffi_sdl_sdl_glcontextreleaseflag',
        \Serafim\SDL\OpenGL\GLContextReleaseFlag::SDL_GL_CONTEXT_RELEASE_BEHAVIOR_NONE,
        \Serafim\SDL\OpenGL\GLContextReleaseFlag::SDL_GL_CONTEXT_RELEASE_BEHAVIOR_FLUSH
    );
    registerArgumentsSet(
        // List of "SDL_GLContextResetNotification" enum cases
        'ffi_sdl_sdl_glcontextresetnotification',
        \Serafim\SDL\OpenGL\GLContextResetNotification::SDL_GL_CONTEXT_RESET_NO_NOTIFICATION,
        \Serafim\SDL\OpenGL\GLContextResetNotification::SDL_GL_CONTEXT_RESET_LOSE_CONTEXT
    );
    registerArgumentsSet(
        // List of "SDL_HitTestResult" enum cases
        'ffi_sdl_sdl_hittestresult',
        \Serafim\SDL\Video\HitTestResult::SDL_HITTEST_NORMAL,
        \Serafim\SDL\Video\HitTestResult::SDL_HITTEST_DRAGGABLE,
        \Serafim\SDL\Video\HitTestResult::SDL_HITTEST_RESIZE_TOPLEFT,
        \Serafim\SDL\Video\HitTestResult::SDL_HITTEST_RESIZE_TOP,
        \Serafim\SDL\Video\HitTestResult::SDL_HITTEST_RESIZE_TOPRIGHT,
        \Serafim\SDL\Video\HitTestResult::SDL_HITTEST_RESIZE_RIGHT,
        \Serafim\SDL\Video\HitTestResult::SDL_HITTEST_RESIZE_BOTTOMRIGHT,
        \Serafim\SDL\Video\HitTestResult::SDL_HITTEST_RESIZE_BOTTOM,
        \Serafim\SDL\Video\HitTestResult::SDL_HITTEST_RESIZE_BOTTOMLEFT,
        \Serafim\SDL\Video\HitTestResult::SDL_HITTEST_RESIZE_LEFT
    );
    registerArgumentsSet(
        // List of "SDL_Scancode" enum cases
        'ffi_sdl_sdl_scancode',
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_UNKNOWN,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_A,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_B,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_C,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_D,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_E,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_G,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_H,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_I,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_J,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_K,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_L,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_M,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_N,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_O,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_P,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_Q,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_R,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_S,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_T,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_U,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_V,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_W,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_X,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_Y,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_Z,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_1,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_2,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_3,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_4,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_5,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_6,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_7,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_8,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_9,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_0,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_RETURN,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_ESCAPE,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_BACKSPACE,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_TAB,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SPACE,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_MINUS,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_EQUALS,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LEFTBRACKET,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_RIGHTBRACKET,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_BACKSLASH,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_NONUSHASH,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SEMICOLON,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_APOSTROPHE,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_GRAVE,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_COMMA,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_PERIOD,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SLASH,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CAPSLOCK,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F1,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F2,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F3,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F4,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F5,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F6,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F7,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F8,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F9,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F10,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F11,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F12,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_PRINTSCREEN,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SCROLLLOCK,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_PAUSE,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INSERT,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_HOME,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_PAGEUP,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_DELETE,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_END,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_PAGEDOWN,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_RIGHT,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LEFT,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_DOWN,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_UP,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_NUMLOCKCLEAR,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_DIVIDE,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MULTIPLY,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MINUS,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_PLUS,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_ENTER,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_1,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_2,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_3,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_4,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_5,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_6,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_7,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_8,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_9,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_0,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_PERIOD,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_NONUSBACKSLASH,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_APPLICATION,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_POWER,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_EQUALS,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F13,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F14,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F15,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F16,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F17,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F18,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F19,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F20,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F21,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F22,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F23,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F24,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_EXECUTE,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_HELP,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_MENU,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SELECT,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_STOP,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AGAIN,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_UNDO,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CUT,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_COPY,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_PASTE,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_FIND,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_MUTE,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_VOLUMEUP,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_VOLUMEDOWN,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_COMMA,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_EQUALSAS400,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL1,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL2,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL3,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL4,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL5,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL6,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL7,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL8,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL9,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG1,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG2,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG3,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG4,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG5,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG6,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG7,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG8,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG9,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_ALTERASE,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SYSREQ,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CANCEL,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CLEAR,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_PRIOR,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_RETURN2,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SEPARATOR,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_OUT,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_OPER,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CLEARAGAIN,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CRSEL,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_EXSEL,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_00,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_000,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_THOUSANDSSEPARATOR,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_DECIMALSEPARATOR,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CURRENCYUNIT,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CURRENCYSUBUNIT,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_LEFTPAREN,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_RIGHTPAREN,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_LEFTBRACE,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_RIGHTBRACE,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_TAB,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_BACKSPACE,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_A,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_B,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_C,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_D,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_E,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_F,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_XOR,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_POWER,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_PERCENT,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_LESS,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_GREATER,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_AMPERSAND,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_DBLAMPERSAND,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_VERTICALBAR,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_DBLVERTICALBAR,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_COLON,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_HASH,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_SPACE,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_AT,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_EXCLAM,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MEMSTORE,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MEMRECALL,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MEMCLEAR,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MEMADD,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MEMSUBTRACT,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MEMMULTIPLY,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MEMDIVIDE,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_PLUSMINUS,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_CLEAR,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_CLEARENTRY,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_BINARY,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_OCTAL,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_DECIMAL,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_HEXADECIMAL,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LCTRL,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LSHIFT,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LALT,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LGUI,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_RCTRL,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_RSHIFT,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_RALT,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_RGUI,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_MODE,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AUDIONEXT,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AUDIOPREV,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AUDIOSTOP,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AUDIOPLAY,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AUDIOMUTE,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_MEDIASELECT,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_WWW,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_MAIL,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CALCULATOR,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_COMPUTER,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AC_SEARCH,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AC_HOME,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AC_BACK,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AC_FORWARD,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AC_STOP,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AC_REFRESH,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AC_BOOKMARKS,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_BRIGHTNESSDOWN,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_BRIGHTNESSUP,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_DISPLAYSWITCH,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KBDILLUMTOGGLE,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KBDILLUMDOWN,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KBDILLUMUP,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_EJECT,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SLEEP,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_APP1,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_APP2,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AUDIOREWIND,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AUDIOFASTFORWARD,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SOFTLEFT,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SOFTRIGHT,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CALL,
        \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_ENDCALL,
        \Serafim\SDL\Keyboard\ScanCode::SDL_NUM_SCANCODES
    );
    registerArgumentsSet(
        // List of "SDL_KeyCode" enum cases
        'ffi_sdl_sdl_keycode',
        \Serafim\SDL\Keyboard\Key::SDLK_UNKNOWN,
        \Serafim\SDL\Keyboard\Key::SDLK_RETURN,
        \Serafim\SDL\Keyboard\Key::SDLK_ESCAPE,
        \Serafim\SDL\Keyboard\Key::SDLK_BACKSPACE,
        \Serafim\SDL\Keyboard\Key::SDLK_TAB,
        \Serafim\SDL\Keyboard\Key::SDLK_SPACE,
        \Serafim\SDL\Keyboard\Key::SDLK_EXCLAIM,
        \Serafim\SDL\Keyboard\Key::SDLK_QUOTEDBL,
        \Serafim\SDL\Keyboard\Key::SDLK_HASH,
        \Serafim\SDL\Keyboard\Key::SDLK_PERCENT,
        \Serafim\SDL\Keyboard\Key::SDLK_DOLLAR,
        \Serafim\SDL\Keyboard\Key::SDLK_AMPERSAND,
        \Serafim\SDL\Keyboard\Key::SDLK_QUOTE,
        \Serafim\SDL\Keyboard\Key::SDLK_LEFTPAREN,
        \Serafim\SDL\Keyboard\Key::SDLK_RIGHTPAREN,
        \Serafim\SDL\Keyboard\Key::SDLK_ASTERISK,
        \Serafim\SDL\Keyboard\Key::SDLK_PLUS,
        \Serafim\SDL\Keyboard\Key::SDLK_COMMA,
        \Serafim\SDL\Keyboard\Key::SDLK_MINUS,
        \Serafim\SDL\Keyboard\Key::SDLK_PERIOD,
        \Serafim\SDL\Keyboard\Key::SDLK_SLASH,
        \Serafim\SDL\Keyboard\Key::SDLK_0,
        \Serafim\SDL\Keyboard\Key::SDLK_1,
        \Serafim\SDL\Keyboard\Key::SDLK_2,
        \Serafim\SDL\Keyboard\Key::SDLK_3,
        \Serafim\SDL\Keyboard\Key::SDLK_4,
        \Serafim\SDL\Keyboard\Key::SDLK_5,
        \Serafim\SDL\Keyboard\Key::SDLK_6,
        \Serafim\SDL\Keyboard\Key::SDLK_7,
        \Serafim\SDL\Keyboard\Key::SDLK_8,
        \Serafim\SDL\Keyboard\Key::SDLK_9,
        \Serafim\SDL\Keyboard\Key::SDLK_COLON,
        \Serafim\SDL\Keyboard\Key::SDLK_SEMICOLON,
        \Serafim\SDL\Keyboard\Key::SDLK_LESS,
        \Serafim\SDL\Keyboard\Key::SDLK_EQUALS,
        \Serafim\SDL\Keyboard\Key::SDLK_GREATER,
        \Serafim\SDL\Keyboard\Key::SDLK_QUESTION,
        \Serafim\SDL\Keyboard\Key::SDLK_AT,
        \Serafim\SDL\Keyboard\Key::SDLK_LEFTBRACKET,
        \Serafim\SDL\Keyboard\Key::SDLK_BACKSLASH,
        \Serafim\SDL\Keyboard\Key::SDLK_RIGHTBRACKET,
        \Serafim\SDL\Keyboard\Key::SDLK_CARET,
        \Serafim\SDL\Keyboard\Key::SDLK_UNDERSCORE,
        \Serafim\SDL\Keyboard\Key::SDLK_BACKQUOTE,
        \Serafim\SDL\Keyboard\Key::SDLK_A,
        \Serafim\SDL\Keyboard\Key::SDLK_B,
        \Serafim\SDL\Keyboard\Key::SDLK_C,
        \Serafim\SDL\Keyboard\Key::SDLK_D,
        \Serafim\SDL\Keyboard\Key::SDLK_E,
        \Serafim\SDL\Keyboard\Key::SDLK_F,
        \Serafim\SDL\Keyboard\Key::SDLK_G,
        \Serafim\SDL\Keyboard\Key::SDLK_H,
        \Serafim\SDL\Keyboard\Key::SDLK_I,
        \Serafim\SDL\Keyboard\Key::SDLK_J,
        \Serafim\SDL\Keyboard\Key::SDLK_K,
        \Serafim\SDL\Keyboard\Key::SDLK_L,
        \Serafim\SDL\Keyboard\Key::SDLK_M,
        \Serafim\SDL\Keyboard\Key::SDLK_N,
        \Serafim\SDL\Keyboard\Key::SDLK_O,
        \Serafim\SDL\Keyboard\Key::SDLK_P,
        \Serafim\SDL\Keyboard\Key::SDLK_Q,
        \Serafim\SDL\Keyboard\Key::SDLK_R,
        \Serafim\SDL\Keyboard\Key::SDLK_S,
        \Serafim\SDL\Keyboard\Key::SDLK_T,
        \Serafim\SDL\Keyboard\Key::SDLK_U,
        \Serafim\SDL\Keyboard\Key::SDLK_V,
        \Serafim\SDL\Keyboard\Key::SDLK_W,
        \Serafim\SDL\Keyboard\Key::SDLK_X,
        \Serafim\SDL\Keyboard\Key::SDLK_Y,
        \Serafim\SDL\Keyboard\Key::SDLK_Z,
        \Serafim\SDL\Keyboard\Key::SDLK_CAPSLOCK,
        \Serafim\SDL\Keyboard\Key::SDLK_F1,
        \Serafim\SDL\Keyboard\Key::SDLK_F2,
        \Serafim\SDL\Keyboard\Key::SDLK_F3,
        \Serafim\SDL\Keyboard\Key::SDLK_F4,
        \Serafim\SDL\Keyboard\Key::SDLK_F5,
        \Serafim\SDL\Keyboard\Key::SDLK_F6,
        \Serafim\SDL\Keyboard\Key::SDLK_F7,
        \Serafim\SDL\Keyboard\Key::SDLK_F8,
        \Serafim\SDL\Keyboard\Key::SDLK_F9,
        \Serafim\SDL\Keyboard\Key::SDLK_F10,
        \Serafim\SDL\Keyboard\Key::SDLK_F11,
        \Serafim\SDL\Keyboard\Key::SDLK_F12,
        \Serafim\SDL\Keyboard\Key::SDLK_PRINTSCREEN,
        \Serafim\SDL\Keyboard\Key::SDLK_SCROLLLOCK,
        \Serafim\SDL\Keyboard\Key::SDLK_PAUSE,
        \Serafim\SDL\Keyboard\Key::SDLK_INSERT,
        \Serafim\SDL\Keyboard\Key::SDLK_HOME,
        \Serafim\SDL\Keyboard\Key::SDLK_PAGEUP,
        \Serafim\SDL\Keyboard\Key::SDLK_DELETE,
        \Serafim\SDL\Keyboard\Key::SDLK_END,
        \Serafim\SDL\Keyboard\Key::SDLK_PAGEDOWN,
        \Serafim\SDL\Keyboard\Key::SDLK_RIGHT,
        \Serafim\SDL\Keyboard\Key::SDLK_LEFT,
        \Serafim\SDL\Keyboard\Key::SDLK_DOWN,
        \Serafim\SDL\Keyboard\Key::SDLK_UP,
        \Serafim\SDL\Keyboard\Key::SDLK_NUMLOCKCLEAR,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_DIVIDE,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_MULTIPLY,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_MINUS,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_PLUS,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_ENTER,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_1,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_2,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_3,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_4,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_5,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_6,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_7,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_8,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_9,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_0,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_PERIOD,
        \Serafim\SDL\Keyboard\Key::SDLK_APPLICATION,
        \Serafim\SDL\Keyboard\Key::SDLK_POWER,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_EQUALS,
        \Serafim\SDL\Keyboard\Key::SDLK_F13,
        \Serafim\SDL\Keyboard\Key::SDLK_F14,
        \Serafim\SDL\Keyboard\Key::SDLK_F15,
        \Serafim\SDL\Keyboard\Key::SDLK_F16,
        \Serafim\SDL\Keyboard\Key::SDLK_F17,
        \Serafim\SDL\Keyboard\Key::SDLK_F18,
        \Serafim\SDL\Keyboard\Key::SDLK_F19,
        \Serafim\SDL\Keyboard\Key::SDLK_F20,
        \Serafim\SDL\Keyboard\Key::SDLK_F21,
        \Serafim\SDL\Keyboard\Key::SDLK_F22,
        \Serafim\SDL\Keyboard\Key::SDLK_F23,
        \Serafim\SDL\Keyboard\Key::SDLK_F24,
        \Serafim\SDL\Keyboard\Key::SDLK_EXECUTE,
        \Serafim\SDL\Keyboard\Key::SDLK_HELP,
        \Serafim\SDL\Keyboard\Key::SDLK_MENU,
        \Serafim\SDL\Keyboard\Key::SDLK_SELECT,
        \Serafim\SDL\Keyboard\Key::SDLK_STOP,
        \Serafim\SDL\Keyboard\Key::SDLK_AGAIN,
        \Serafim\SDL\Keyboard\Key::SDLK_UNDO,
        \Serafim\SDL\Keyboard\Key::SDLK_CUT,
        \Serafim\SDL\Keyboard\Key::SDLK_COPY,
        \Serafim\SDL\Keyboard\Key::SDLK_PASTE,
        \Serafim\SDL\Keyboard\Key::SDLK_FIND,
        \Serafim\SDL\Keyboard\Key::SDLK_MUTE,
        \Serafim\SDL\Keyboard\Key::SDLK_VOLUMEUP,
        \Serafim\SDL\Keyboard\Key::SDLK_VOLUMEDOWN,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_COMMA,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_EQUALSAS400,
        \Serafim\SDL\Keyboard\Key::SDLK_ALTERASE,
        \Serafim\SDL\Keyboard\Key::SDLK_SYSREQ,
        \Serafim\SDL\Keyboard\Key::SDLK_CANCEL,
        \Serafim\SDL\Keyboard\Key::SDLK_CLEAR,
        \Serafim\SDL\Keyboard\Key::SDLK_PRIOR,
        \Serafim\SDL\Keyboard\Key::SDLK_RETURN2,
        \Serafim\SDL\Keyboard\Key::SDLK_SEPARATOR,
        \Serafim\SDL\Keyboard\Key::SDLK_OUT,
        \Serafim\SDL\Keyboard\Key::SDLK_OPER,
        \Serafim\SDL\Keyboard\Key::SDLK_CLEARAGAIN,
        \Serafim\SDL\Keyboard\Key::SDLK_CRSEL,
        \Serafim\SDL\Keyboard\Key::SDLK_EXSEL,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_00,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_000,
        \Serafim\SDL\Keyboard\Key::SDLK_THOUSANDSSEPARATOR,
        \Serafim\SDL\Keyboard\Key::SDLK_DECIMALSEPARATOR,
        \Serafim\SDL\Keyboard\Key::SDLK_CURRENCYUNIT,
        \Serafim\SDL\Keyboard\Key::SDLK_CURRENCYSUBUNIT,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_LEFTPAREN,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_RIGHTPAREN,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_LEFTBRACE,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_RIGHTBRACE,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_TAB,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_BACKSPACE,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_A,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_B,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_C,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_D,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_E,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_F,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_XOR,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_POWER,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_PERCENT,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_LESS,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_GREATER,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_AMPERSAND,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_DBLAMPERSAND,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_VERTICALBAR,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_DBLVERTICALBAR,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_COLON,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_HASH,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_SPACE,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_AT,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_EXCLAM,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_MEMSTORE,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_MEMRECALL,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_MEMCLEAR,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_MEMADD,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_MEMSUBTRACT,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_MEMMULTIPLY,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_MEMDIVIDE,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_PLUSMINUS,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_CLEAR,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_CLEARENTRY,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_BINARY,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_OCTAL,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_DECIMAL,
        \Serafim\SDL\Keyboard\Key::SDLK_KP_HEXADECIMAL,
        \Serafim\SDL\Keyboard\Key::SDLK_LCTRL,
        \Serafim\SDL\Keyboard\Key::SDLK_LSHIFT,
        \Serafim\SDL\Keyboard\Key::SDLK_LALT,
        \Serafim\SDL\Keyboard\Key::SDLK_LGUI,
        \Serafim\SDL\Keyboard\Key::SDLK_RCTRL,
        \Serafim\SDL\Keyboard\Key::SDLK_RSHIFT,
        \Serafim\SDL\Keyboard\Key::SDLK_RALT,
        \Serafim\SDL\Keyboard\Key::SDLK_RGUI,
        \Serafim\SDL\Keyboard\Key::SDLK_MODE,
        \Serafim\SDL\Keyboard\Key::SDLK_AUDIONEXT,
        \Serafim\SDL\Keyboard\Key::SDLK_AUDIOPREV,
        \Serafim\SDL\Keyboard\Key::SDLK_AUDIOSTOP,
        \Serafim\SDL\Keyboard\Key::SDLK_AUDIOPLAY,
        \Serafim\SDL\Keyboard\Key::SDLK_AUDIOMUTE,
        \Serafim\SDL\Keyboard\Key::SDLK_MEDIASELECT,
        \Serafim\SDL\Keyboard\Key::SDLK_WWW,
        \Serafim\SDL\Keyboard\Key::SDLK_MAIL,
        \Serafim\SDL\Keyboard\Key::SDLK_CALCULATOR,
        \Serafim\SDL\Keyboard\Key::SDLK_COMPUTER,
        \Serafim\SDL\Keyboard\Key::SDLK_AC_SEARCH,
        \Serafim\SDL\Keyboard\Key::SDLK_AC_HOME,
        \Serafim\SDL\Keyboard\Key::SDLK_AC_BACK,
        \Serafim\SDL\Keyboard\Key::SDLK_AC_FORWARD,
        \Serafim\SDL\Keyboard\Key::SDLK_AC_STOP,
        \Serafim\SDL\Keyboard\Key::SDLK_AC_REFRESH,
        \Serafim\SDL\Keyboard\Key::SDLK_AC_BOOKMARKS,
        \Serafim\SDL\Keyboard\Key::SDLK_BRIGHTNESSDOWN,
        \Serafim\SDL\Keyboard\Key::SDLK_BRIGHTNESSUP,
        \Serafim\SDL\Keyboard\Key::SDLK_DISPLAYSWITCH,
        \Serafim\SDL\Keyboard\Key::SDLK_KBDILLUMTOGGLE,
        \Serafim\SDL\Keyboard\Key::SDLK_KBDILLUMDOWN,
        \Serafim\SDL\Keyboard\Key::SDLK_KBDILLUMUP,
        \Serafim\SDL\Keyboard\Key::SDLK_EJECT,
        \Serafim\SDL\Keyboard\Key::SDLK_SLEEP,
        \Serafim\SDL\Keyboard\Key::SDLK_APP1,
        \Serafim\SDL\Keyboard\Key::SDLK_APP2,
        \Serafim\SDL\Keyboard\Key::SDLK_AUDIOREWIND,
        \Serafim\SDL\Keyboard\Key::SDLK_AUDIOFASTFORWARD,
        \Serafim\SDL\Keyboard\Key::SDLK_SOFTLEFT,
        \Serafim\SDL\Keyboard\Key::SDLK_SOFTRIGHT,
        \Serafim\SDL\Keyboard\Key::SDLK_CALL,
        \Serafim\SDL\Keyboard\Key::SDLK_ENDCALL
    );
    registerArgumentsSet(
        // List of "SDL_Keymod" enum cases
        'ffi_sdl_sdl_keymod',
        \Serafim\SDL\Keyboard\KeyMode::KMOD_NONE,
        \Serafim\SDL\Keyboard\KeyMode::KMOD_LSHIFT,
        \Serafim\SDL\Keyboard\KeyMode::KMOD_RSHIFT,
        \Serafim\SDL\Keyboard\KeyMode::KMOD_LCTRL,
        \Serafim\SDL\Keyboard\KeyMode::KMOD_RCTRL,
        \Serafim\SDL\Keyboard\KeyMode::KMOD_LALT,
        \Serafim\SDL\Keyboard\KeyMode::KMOD_RALT,
        \Serafim\SDL\Keyboard\KeyMode::KMOD_LGUI,
        \Serafim\SDL\Keyboard\KeyMode::KMOD_RGUI,
        \Serafim\SDL\Keyboard\KeyMode::KMOD_NUM,
        \Serafim\SDL\Keyboard\KeyMode::KMOD_CAPS,
        \Serafim\SDL\Keyboard\KeyMode::KMOD_MODE,
        \Serafim\SDL\Keyboard\KeyMode::KMOD_SCROLL,
        \Serafim\SDL\Keyboard\KeyMode::KMOD_CTRL,
        \Serafim\SDL\Keyboard\KeyMode::KMOD_SHIFT,
        \Serafim\SDL\Keyboard\KeyMode::KMOD_ALT,
        \Serafim\SDL\Keyboard\KeyMode::KMOD_GUI,
        \Serafim\SDL\Keyboard\KeyMode::KMOD_RESERVED
    );
    registerArgumentsSet(
        // List of "SDL_SystemCursor" enum cases
        'ffi_sdl_sdl_systemcursor',
        \Serafim\SDL\Mouse\SystemCursor::SDL_SYSTEM_CURSOR_ARROW,
        \Serafim\SDL\Mouse\SystemCursor::SDL_SYSTEM_CURSOR_IBEAM,
        \Serafim\SDL\Mouse\SystemCursor::SDL_SYSTEM_CURSOR_WAIT,
        \Serafim\SDL\Mouse\SystemCursor::SDL_SYSTEM_CURSOR_CROSSHAIR,
        \Serafim\SDL\Mouse\SystemCursor::SDL_SYSTEM_CURSOR_WAITARROW,
        \Serafim\SDL\Mouse\SystemCursor::SDL_SYSTEM_CURSOR_SIZENWSE,
        \Serafim\SDL\Mouse\SystemCursor::SDL_SYSTEM_CURSOR_SIZENESW,
        \Serafim\SDL\Mouse\SystemCursor::SDL_SYSTEM_CURSOR_SIZEWE,
        \Serafim\SDL\Mouse\SystemCursor::SDL_SYSTEM_CURSOR_SIZENS,
        \Serafim\SDL\Mouse\SystemCursor::SDL_SYSTEM_CURSOR_SIZEALL,
        \Serafim\SDL\Mouse\SystemCursor::SDL_SYSTEM_CURSOR_NO,
        \Serafim\SDL\Mouse\SystemCursor::SDL_SYSTEM_CURSOR_HAND,
        \Serafim\SDL\Mouse\SystemCursor::SDL_NUM_SYSTEM_CURSORS
    );
    registerArgumentsSet(
        // List of "SDL_MouseWheelDirection" enum cases
        'ffi_sdl_sdl_mousewheeldirection',
        \Serafim\SDL\Mouse\WheelDirection::SDL_MOUSEWHEEL_NORMAL,
        \Serafim\SDL\Mouse\WheelDirection::SDL_MOUSEWHEEL_FLIPPED
    );
    registerArgumentsSet(
        // List of "SDL_JoystickType" enum cases
        'ffi_sdl_sdl_joysticktype',
        \Serafim\SDL\Joystick\Type::SDL_JOYSTICK_TYPE_UNKNOWN,
        \Serafim\SDL\Joystick\Type::SDL_JOYSTICK_TYPE_GAMECONTROLLER,
        \Serafim\SDL\Joystick\Type::SDL_JOYSTICK_TYPE_WHEEL,
        \Serafim\SDL\Joystick\Type::SDL_JOYSTICK_TYPE_ARCADE_STICK,
        \Serafim\SDL\Joystick\Type::SDL_JOYSTICK_TYPE_FLIGHT_STICK,
        \Serafim\SDL\Joystick\Type::SDL_JOYSTICK_TYPE_DANCE_PAD,
        \Serafim\SDL\Joystick\Type::SDL_JOYSTICK_TYPE_GUITAR,
        \Serafim\SDL\Joystick\Type::SDL_JOYSTICK_TYPE_DRUM_KIT,
        \Serafim\SDL\Joystick\Type::SDL_JOYSTICK_TYPE_ARCADE_PAD,
        \Serafim\SDL\Joystick\Type::SDL_JOYSTICK_TYPE_THROTTLE
    );
    registerArgumentsSet(
        // List of "SDL_JoystickPowerLevel" enum cases
        'ffi_sdl_sdl_joystickpowerlevel',
        \Serafim\SDL\Joystick\PowerLevel::SDL_JOYSTICK_POWER_UNKNOWN,
        \Serafim\SDL\Joystick\PowerLevel::SDL_JOYSTICK_POWER_EMPTY,
        \Serafim\SDL\Joystick\PowerLevel::SDL_JOYSTICK_POWER_LOW,
        \Serafim\SDL\Joystick\PowerLevel::SDL_JOYSTICK_POWER_MEDIUM,
        \Serafim\SDL\Joystick\PowerLevel::SDL_JOYSTICK_POWER_FULL,
        \Serafim\SDL\Joystick\PowerLevel::SDL_JOYSTICK_POWER_WIRED,
        \Serafim\SDL\Joystick\PowerLevel::SDL_JOYSTICK_POWER_MAX
    );
    registerArgumentsSet(
        // List of "SDL_SensorType" enum cases
        'ffi_sdl_sdl_sensortype',
        \Serafim\SDL\Sensor\Type::SDL_SENSOR_INVALID,
        \Serafim\SDL\Sensor\Type::SDL_SENSOR_UNKNOWN,
        \Serafim\SDL\Sensor\Type::SDL_SENSOR_ACCEL,
        \Serafim\SDL\Sensor\Type::SDL_SENSOR_GYRO,
        \Serafim\SDL\Sensor\Type::SDL_SENSOR_ACCEL_L,
        \Serafim\SDL\Sensor\Type::SDL_SENSOR_GYRO_L,
        \Serafim\SDL\Sensor\Type::SDL_SENSOR_ACCEL_R,
        \Serafim\SDL\Sensor\Type::SDL_SENSOR_GYRO_R
    );
    registerArgumentsSet(
        // List of "SDL_GameControllerType" enum cases
        'ffi_sdl_sdl_gamecontrollertype',
        \Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_UNKNOWN,
        \Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_XBOX360,
        \Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_XBOXONE,
        \Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_PS3,
        \Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_PS4,
        \Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_NINTENDO_SWITCH_PRO,
        \Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_VIRTUAL,
        \Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_PS5,
        \Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_AMAZON_LUNA,
        \Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_GOOGLE_STADIA,
        \Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_NVIDIA_SHIELD,
        \Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_NINTENDO_SWITCH_JOYCON_LEFT,
        \Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_NINTENDO_SWITCH_JOYCON_RIGHT,
        \Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_NINTENDO_SWITCH_JOYCON_PAIR
    );
    registerArgumentsSet(
        // List of "SDL_GameControllerBindType" enum cases
        'ffi_sdl_sdl_gamecontrollerbindtype',
        \Serafim\SDL\GameController\BindType::SDL_CONTROLLER_BINDTYPE_NONE,
        \Serafim\SDL\GameController\BindType::SDL_CONTROLLER_BINDTYPE_BUTTON,
        \Serafim\SDL\GameController\BindType::SDL_CONTROLLER_BINDTYPE_AXIS,
        \Serafim\SDL\GameController\BindType::SDL_CONTROLLER_BINDTYPE_HAT
    );
    registerArgumentsSet(
        // List of "SDL_GameControllerAxis" enum cases
        'ffi_sdl_sdl_gamecontrolleraxis',
        \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_INVALID,
        \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_LEFTX,
        \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_LEFTY,
        \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_RIGHTX,
        \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_RIGHTY,
        \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_TRIGGERLEFT,
        \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_TRIGGERRIGHT,
        \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_MAX
    );
    registerArgumentsSet(
        // List of "SDL_GameControllerButton" enum cases
        'ffi_sdl_sdl_gamecontrollerbutton',
        \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_INVALID,
        \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_A,
        \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_B,
        \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_X,
        \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_Y,
        \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_BACK,
        \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_GUIDE,
        \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_START,
        \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_LEFTSTICK,
        \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_RIGHTSTICK,
        \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_LEFTSHOULDER,
        \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_RIGHTSHOULDER,
        \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_DPAD_UP,
        \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_DPAD_DOWN,
        \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_DPAD_LEFT,
        \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_DPAD_RIGHT,
        \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_MISC1,
        \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_PADDLE1,
        \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_PADDLE2,
        \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_PADDLE3,
        \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_PADDLE4,
        \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_TOUCHPAD,
        \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_MAX
    );
    registerArgumentsSet(
        // List of "SDL_TouchDeviceType" enum cases
        'ffi_sdl_sdl_touchdevicetype',
        \Serafim\SDL\Touch\DeviceType::SDL_TOUCH_DEVICE_INVALID,
        \Serafim\SDL\Touch\DeviceType::SDL_TOUCH_DEVICE_DIRECT,
        \Serafim\SDL\Touch\DeviceType::SDL_TOUCH_DEVICE_INDIRECT_ABSOLUTE,
        \Serafim\SDL\Touch\DeviceType::SDL_TOUCH_DEVICE_INDIRECT_RELATIVE
    );
    registerArgumentsSet(
        // List of "SDL_EventType" enum cases
        'ffi_sdl_sdl_eventtype',
        \Serafim\SDL\Event\Type::SDL_FIRSTEVENT,
        \Serafim\SDL\Event\Type::SDL_QUIT,
        \Serafim\SDL\Event\Type::SDL_APP_TERMINATING,
        \Serafim\SDL\Event\Type::SDL_APP_LOWMEMORY,
        \Serafim\SDL\Event\Type::SDL_APP_WILLENTERBACKGROUND,
        \Serafim\SDL\Event\Type::SDL_APP_DIDENTERBACKGROUND,
        \Serafim\SDL\Event\Type::SDL_APP_WILLENTERFOREGROUND,
        \Serafim\SDL\Event\Type::SDL_APP_DIDENTERFOREGROUND,
        \Serafim\SDL\Event\Type::SDL_LOCALECHANGED,
        \Serafim\SDL\Event\Type::SDL_DISPLAYEVENT,
        \Serafim\SDL\Event\Type::SDL_WINDOWEVENT,
        \Serafim\SDL\Event\Type::SDL_SYSWMEVENT,
        \Serafim\SDL\Event\Type::SDL_KEYDOWN,
        \Serafim\SDL\Event\Type::SDL_KEYUP,
        \Serafim\SDL\Event\Type::SDL_TEXTEDITING,
        \Serafim\SDL\Event\Type::SDL_TEXTINPUT,
        \Serafim\SDL\Event\Type::SDL_KEYMAPCHANGED,
        \Serafim\SDL\Event\Type::SDL_TEXTEDITING_EXT,
        \Serafim\SDL\Event\Type::SDL_MOUSEMOTION,
        \Serafim\SDL\Event\Type::SDL_MOUSEBUTTONDOWN,
        \Serafim\SDL\Event\Type::SDL_MOUSEBUTTONUP,
        \Serafim\SDL\Event\Type::SDL_MOUSEWHEEL,
        \Serafim\SDL\Event\Type::SDL_JOYAXISMOTION,
        \Serafim\SDL\Event\Type::SDL_JOYBALLMOTION,
        \Serafim\SDL\Event\Type::SDL_JOYHATMOTION,
        \Serafim\SDL\Event\Type::SDL_JOYBUTTONDOWN,
        \Serafim\SDL\Event\Type::SDL_JOYBUTTONUP,
        \Serafim\SDL\Event\Type::SDL_JOYDEVICEADDED,
        \Serafim\SDL\Event\Type::SDL_JOYDEVICEREMOVED,
        \Serafim\SDL\Event\Type::SDL_JOYBATTERYUPDATED,
        \Serafim\SDL\Event\Type::SDL_CONTROLLERAXISMOTION,
        \Serafim\SDL\Event\Type::SDL_CONTROLLERBUTTONDOWN,
        \Serafim\SDL\Event\Type::SDL_CONTROLLERBUTTONUP,
        \Serafim\SDL\Event\Type::SDL_CONTROLLERDEVICEADDED,
        \Serafim\SDL\Event\Type::SDL_CONTROLLERDEVICEREMOVED,
        \Serafim\SDL\Event\Type::SDL_CONTROLLERDEVICEREMAPPED,
        \Serafim\SDL\Event\Type::SDL_CONTROLLERTOUCHPADDOWN,
        \Serafim\SDL\Event\Type::SDL_CONTROLLERTOUCHPADMOTION,
        \Serafim\SDL\Event\Type::SDL_CONTROLLERTOUCHPADUP,
        \Serafim\SDL\Event\Type::SDL_CONTROLLERSENSORUPDATE,
        \Serafim\SDL\Event\Type::SDL_FINGERDOWN,
        \Serafim\SDL\Event\Type::SDL_FINGERUP,
        \Serafim\SDL\Event\Type::SDL_FINGERMOTION,
        \Serafim\SDL\Event\Type::SDL_DOLLARGESTURE,
        \Serafim\SDL\Event\Type::SDL_DOLLARRECORD,
        \Serafim\SDL\Event\Type::SDL_MULTIGESTURE,
        \Serafim\SDL\Event\Type::SDL_CLIPBOARDUPDATE,
        \Serafim\SDL\Event\Type::SDL_DROPFILE,
        \Serafim\SDL\Event\Type::SDL_DROPTEXT,
        \Serafim\SDL\Event\Type::SDL_DROPBEGIN,
        \Serafim\SDL\Event\Type::SDL_DROPCOMPLETE,
        \Serafim\SDL\Event\Type::SDL_AUDIODEVICEADDED,
        \Serafim\SDL\Event\Type::SDL_AUDIODEVICEREMOVED,
        \Serafim\SDL\Event\Type::SDL_SENSORUPDATE,
        \Serafim\SDL\Event\Type::SDL_RENDER_TARGETS_RESET,
        \Serafim\SDL\Event\Type::SDL_RENDER_DEVICE_RESET,
        \Serafim\SDL\Event\Type::SDL_POLLSENTINEL,
        \Serafim\SDL\Event\Type::SDL_USEREVENT,
        \Serafim\SDL\Event\Type::SDL_LASTEVENT
    );
    registerArgumentsSet(
        // List of "SDL_eventaction" enum cases
        'ffi_sdl_sdl_eventaction',
        \Serafim\SDL\Event\Action::SDL_ADDEVENT,
        \Serafim\SDL\Event\Action::SDL_PEEKEVENT,
        \Serafim\SDL\Event\Action::SDL_GETEVENT
    );
    registerArgumentsSet(
        // List of "SDL_HintPriority" enum cases
        'ffi_sdl_sdl_hintpriority',
        \Serafim\SDL\Hint\Priority::SDL_HINT_DEFAULT,
        \Serafim\SDL\Hint\Priority::SDL_HINT_NORMAL,
        \Serafim\SDL\Hint\Priority::SDL_HINT_OVERRIDE
    );
    registerArgumentsSet(
        // List of "SDL_LogCategory" enum cases
        'ffi_sdl_sdl_logcategory',
        \Serafim\SDL\Log\Category::SDL_LOG_CATEGORY_APPLICATION,
        \Serafim\SDL\Log\Category::SDL_LOG_CATEGORY_ERROR,
        \Serafim\SDL\Log\Category::SDL_LOG_CATEGORY_ASSERT,
        \Serafim\SDL\Log\Category::SDL_LOG_CATEGORY_SYSTEM,
        \Serafim\SDL\Log\Category::SDL_LOG_CATEGORY_AUDIO,
        \Serafim\SDL\Log\Category::SDL_LOG_CATEGORY_VIDEO,
        \Serafim\SDL\Log\Category::SDL_LOG_CATEGORY_RENDER,
        \Serafim\SDL\Log\Category::SDL_LOG_CATEGORY_INPUT,
        \Serafim\SDL\Log\Category::SDL_LOG_CATEGORY_TEST,
        \Serafim\SDL\Log\Category::SDL_LOG_CATEGORY_RESERVED1,
        \Serafim\SDL\Log\Category::SDL_LOG_CATEGORY_RESERVED2,
        \Serafim\SDL\Log\Category::SDL_LOG_CATEGORY_RESERVED3,
        \Serafim\SDL\Log\Category::SDL_LOG_CATEGORY_RESERVED4,
        \Serafim\SDL\Log\Category::SDL_LOG_CATEGORY_RESERVED5,
        \Serafim\SDL\Log\Category::SDL_LOG_CATEGORY_RESERVED6,
        \Serafim\SDL\Log\Category::SDL_LOG_CATEGORY_RESERVED7,
        \Serafim\SDL\Log\Category::SDL_LOG_CATEGORY_RESERVED8,
        \Serafim\SDL\Log\Category::SDL_LOG_CATEGORY_RESERVED9,
        \Serafim\SDL\Log\Category::SDL_LOG_CATEGORY_RESERVED10,
        \Serafim\SDL\Log\Category::SDL_LOG_CATEGORY_CUSTOM
    );
    registerArgumentsSet(
        // List of "SDL_LogPriority" enum cases
        'ffi_sdl_sdl_logpriority',
        \Serafim\SDL\Log\Priority::SDL_LOG_PRIORITY_VERBOSE,
        \Serafim\SDL\Log\Priority::SDL_LOG_PRIORITY_DEBUG,
        \Serafim\SDL\Log\Priority::SDL_LOG_PRIORITY_INFO,
        \Serafim\SDL\Log\Priority::SDL_LOG_PRIORITY_WARN,
        \Serafim\SDL\Log\Priority::SDL_LOG_PRIORITY_ERROR,
        \Serafim\SDL\Log\Priority::SDL_LOG_PRIORITY_CRITICAL,
        \Serafim\SDL\Log\Priority::SDL_NUM_LOG_PRIORITIES
    );
    registerArgumentsSet(
        // List of "SDL_MessageBoxFlags" enum cases
        'ffi_sdl_sdl_messageboxflags',
        \Serafim\SDL\MessageBox\Flags::SDL_MESSAGEBOX_ERROR,
        \Serafim\SDL\MessageBox\Flags::SDL_MESSAGEBOX_WARNING,
        \Serafim\SDL\MessageBox\Flags::SDL_MESSAGEBOX_INFORMATION,
        \Serafim\SDL\MessageBox\Flags::SDL_MESSAGEBOX_BUTTONS_LEFT_TO_RIGHT,
        \Serafim\SDL\MessageBox\Flags::SDL_MESSAGEBOX_BUTTONS_RIGHT_TO_LEFT
    );
    registerArgumentsSet(
        // List of "SDL_MessageBoxButtonFlags" enum cases
        'ffi_sdl_sdl_messageboxbuttonflags',
        \Serafim\SDL\MessageBox\ButtonFlags::SDL_MESSAGEBOX_BUTTON_RETURNKEY_DEFAULT,
        \Serafim\SDL\MessageBox\ButtonFlags::SDL_MESSAGEBOX_BUTTON_ESCAPEKEY_DEFAULT
    );
    registerArgumentsSet(
        // List of "SDL_MessageBoxColorType" enum cases
        'ffi_sdl_sdl_messageboxcolortype',
        \Serafim\SDL\MessageBox\ColorType::SDL_MESSAGEBOX_COLOR_BACKGROUND,
        \Serafim\SDL\MessageBox\ColorType::SDL_MESSAGEBOX_COLOR_TEXT,
        \Serafim\SDL\MessageBox\ColorType::SDL_MESSAGEBOX_COLOR_BUTTON_BORDER,
        \Serafim\SDL\MessageBox\ColorType::SDL_MESSAGEBOX_COLOR_BUTTON_BACKGROUND,
        \Serafim\SDL\MessageBox\ColorType::SDL_MESSAGEBOX_COLOR_BUTTON_SELECTED,
        \Serafim\SDL\MessageBox\ColorType::SDL_MESSAGEBOX_COLOR_MAX
    );
    registerArgumentsSet(
        // List of "SDL_PowerState" enum cases
        'ffi_sdl_sdl_powerstate',
        \Serafim\SDL\Power\State::SDL_POWERSTATE_UNKNOWN,
        \Serafim\SDL\Power\State::SDL_POWERSTATE_ON_BATTERY,
        \Serafim\SDL\Power\State::SDL_POWERSTATE_NO_BATTERY,
        \Serafim\SDL\Power\State::SDL_POWERSTATE_CHARGING,
        \Serafim\SDL\Power\State::SDL_POWERSTATE_CHARGED
    );
    registerArgumentsSet(
        // List of "SDL_RendererFlags" enum cases
        'ffi_sdl_sdl_rendererflags',
        \Serafim\SDL\Video\RendererFlags::SDL_RENDERER_SOFTWARE,
        \Serafim\SDL\Video\RendererFlags::SDL_RENDERER_ACCELERATED,
        \Serafim\SDL\Video\RendererFlags::SDL_RENDERER_PRESENTVSYNC,
        \Serafim\SDL\Video\RendererFlags::SDL_RENDERER_TARGETTEXTURE
    );
    registerArgumentsSet(
        // List of "SDL_ScaleMode" enum cases
        'ffi_sdl_sdl_scalemode',
        \Serafim\SDL\Video\ScaleMode::SDL_SCALE_MODE_NEAREST,
        \Serafim\SDL\Video\ScaleMode::SDL_SCALE_MODE_LINEAR,
        \Serafim\SDL\Video\ScaleMode::SDL_SCALE_MODE_BEST
    );
    registerArgumentsSet(
        // List of "SDL_TextureAccess" enum cases
        'ffi_sdl_sdl_textureaccess',
        \Serafim\SDL\Video\TextureAccess::SDL_TEXTUREACCESS_STATIC,
        \Serafim\SDL\Video\TextureAccess::SDL_TEXTUREACCESS_STREAMING,
        \Serafim\SDL\Video\TextureAccess::SDL_TEXTUREACCESS_TARGET
    );
    registerArgumentsSet(
        // List of "SDL_TextureModulate" enum cases
        'ffi_sdl_sdl_texturemodulate',
        \Serafim\SDL\Video\TextureModulate::SDL_TEXTUREMODULATE_NONE,
        \Serafim\SDL\Video\TextureModulate::SDL_TEXTUREMODULATE_COLOR,
        \Serafim\SDL\Video\TextureModulate::SDL_TEXTUREMODULATE_ALPHA
    );
    registerArgumentsSet(
        // List of "SDL_RendererFlip" enum cases
        'ffi_sdl_sdl_rendererflip',
        \Serafim\SDL\Video\RendererFlip::SDL_FLIP_NONE,
        \Serafim\SDL\Video\RendererFlip::SDL_FLIP_HORIZONTAL,
        \Serafim\SDL\Video\RendererFlip::SDL_FLIP_VERTICAL
    );
    registerArgumentsSet(
        // List of "WindowShapeMode" enum cases
        'ffi_sdl_windowshapemode',
        \Serafim\SDL\Video\WindowShapeMode::SHAPE_MODE_DEFAULT,
        \Serafim\SDL\Video\WindowShapeMode::SHAPE_MODE_BINARIZE_ALPHA,
        \Serafim\SDL\Video\WindowShapeMode::SHAPE_MODE_REVERSE_BINARIZE_ALPHA,
        \Serafim\SDL\Video\WindowShapeMode::SHAPE_MODE_COLOR_KEY
    );
    registerArgumentsSet(
        // List of "SDL_WinRT_Path" enum cases
        'ffi_sdl_sdl_winrt_path',
        \Serafim\SDL\WinRT\Path::SDL_WINRT_PATH_INSTALLED_LOCATION,
        \Serafim\SDL\WinRT\Path::SDL_WINRT_PATH_LOCAL_FOLDER,
        \Serafim\SDL\WinRT\Path::SDL_WINRT_PATH_ROAMING_FOLDER,
        \Serafim\SDL\WinRT\Path::SDL_WINRT_PATH_TEMP_FOLDER
    );
    registerArgumentsSet(
        // List of "SDL_WinRT_DeviceFamily" enum cases
        'ffi_sdl_sdl_winrt_devicefamily',
        \Serafim\SDL\WinRT\DeviceFamily::SDL_WINRT_DEVICEFAMILY_UNKNOWN,
        \Serafim\SDL\WinRT\DeviceFamily::SDL_WINRT_DEVICEFAMILY_DESKTOP,
        \Serafim\SDL\WinRT\DeviceFamily::SDL_WINRT_DEVICEFAMILY_MOBILE,
        \Serafim\SDL\WinRT\DeviceFamily::SDL_WINRT_DEVICEFAMILY_XBOX
    );
    expectedArguments(\Serafim\SDL\SDL::SDL_Error(), 0, argumentsSet('ffi_sdl_sdl_errorcode'));
    expectedArguments(\Serafim\SDL\SDL::SDL_SetThreadPriority(), 0, argumentsSet('ffi_sdl_sdl_threadpriority'));
    expectedArguments(\Serafim\SDL\SDL::SDL_RWFromFP(), 1, argumentsSet('ffi_sdl_sdl_bool'));
    expectedArguments(\Serafim\SDL\SDL::SDL_ComposeCustomBlendMode(), 0, argumentsSet('ffi_sdl_sdl_blendfactor'));
    expectedArguments(\Serafim\SDL\SDL::SDL_ComposeCustomBlendMode(), 1, argumentsSet('ffi_sdl_sdl_blendfactor'));
    expectedArguments(\Serafim\SDL\SDL::SDL_ComposeCustomBlendMode(), 2, argumentsSet('ffi_sdl_sdl_blendoperation'));
    expectedArguments(\Serafim\SDL\SDL::SDL_ComposeCustomBlendMode(), 3, argumentsSet('ffi_sdl_sdl_blendfactor'));
    expectedArguments(\Serafim\SDL\SDL::SDL_ComposeCustomBlendMode(), 4, argumentsSet('ffi_sdl_sdl_blendfactor'));
    expectedArguments(\Serafim\SDL\SDL::SDL_ComposeCustomBlendMode(), 5, argumentsSet('ffi_sdl_sdl_blendoperation'));
    expectedArguments(\Serafim\SDL\SDL::SDL_SetSurfaceBlendMode(), 1, argumentsSet('ffi_sdl_sdl_blendmode'));
    expectedArguments(\Serafim\SDL\SDL::SDL_SetYUVConversionMode(), 0, argumentsSet('ffi_sdl_sdl_yuv_conversion_mode'));
    expectedArguments(\Serafim\SDL\SDL::SDL_SetWindowBordered(), 1, argumentsSet('ffi_sdl_sdl_bool'));
    expectedArguments(\Serafim\SDL\SDL::SDL_SetWindowResizable(), 1, argumentsSet('ffi_sdl_sdl_bool'));
    expectedArguments(\Serafim\SDL\SDL::SDL_SetWindowAlwaysOnTop(), 1, argumentsSet('ffi_sdl_sdl_bool'));
    expectedArguments(\Serafim\SDL\SDL::SDL_SetWindowGrab(), 1, argumentsSet('ffi_sdl_sdl_bool'));
    expectedArguments(\Serafim\SDL\SDL::SDL_SetWindowKeyboardGrab(), 1, argumentsSet('ffi_sdl_sdl_bool'));
    expectedArguments(\Serafim\SDL\SDL::SDL_SetWindowMouseGrab(), 1, argumentsSet('ffi_sdl_sdl_bool'));
    expectedArguments(\Serafim\SDL\SDL::SDL_FlashWindow(), 1, argumentsSet('ffi_sdl_sdl_flashoperation'));
    expectedArguments(\Serafim\SDL\SDL::SDL_GL_SetAttribute(), 0, argumentsSet('ffi_sdl_sdl_glattr'));
    expectedArguments(\Serafim\SDL\SDL::SDL_GL_GetAttribute(), 0, argumentsSet('ffi_sdl_sdl_glattr'));
    expectedArguments(\Serafim\SDL\SDL::SDL_SetModState(), 0, argumentsSet('ffi_sdl_sdl_keymod'));
    expectedArguments(\Serafim\SDL\SDL::SDL_GetKeyFromScancode(), 0, argumentsSet('ffi_sdl_sdl_scancode'));
    expectedArguments(\Serafim\SDL\SDL::SDL_GetScancodeName(), 0, argumentsSet('ffi_sdl_sdl_scancode'));
    expectedArguments(\Serafim\SDL\SDL::SDL_SetRelativeMouseMode(), 0, argumentsSet('ffi_sdl_sdl_bool'));
    expectedArguments(\Serafim\SDL\SDL::SDL_CaptureMouse(), 0, argumentsSet('ffi_sdl_sdl_bool'));
    expectedArguments(\Serafim\SDL\SDL::SDL_CreateSystemCursor(), 0, argumentsSet('ffi_sdl_sdl_systemcursor'));
    expectedArguments(\Serafim\SDL\SDL::SDL_JoystickAttachVirtual(), 0, argumentsSet('ffi_sdl_sdl_joysticktype'));
    expectedArguments(\Serafim\SDL\SDL::SDL_GameControllerGetStringForAxis(), 0, argumentsSet('ffi_sdl_sdl_gamecontrolleraxis'));
    expectedArguments(\Serafim\SDL\SDL::SDL_GameControllerGetBindForAxis(), 1, argumentsSet('ffi_sdl_sdl_gamecontrolleraxis'));
    expectedArguments(\Serafim\SDL\SDL::SDL_GameControllerHasAxis(), 1, argumentsSet('ffi_sdl_sdl_gamecontrolleraxis'));
    expectedArguments(\Serafim\SDL\SDL::SDL_GameControllerGetAxis(), 1, argumentsSet('ffi_sdl_sdl_gamecontrolleraxis'));
    expectedArguments(\Serafim\SDL\SDL::SDL_GameControllerGetStringForButton(), 0, argumentsSet('ffi_sdl_sdl_gamecontrollerbutton'));
    expectedArguments(\Serafim\SDL\SDL::SDL_GameControllerGetBindForButton(), 1, argumentsSet('ffi_sdl_sdl_gamecontrollerbutton'));
    expectedArguments(\Serafim\SDL\SDL::SDL_GameControllerHasButton(), 1, argumentsSet('ffi_sdl_sdl_gamecontrollerbutton'));
    expectedArguments(\Serafim\SDL\SDL::SDL_GameControllerGetButton(), 1, argumentsSet('ffi_sdl_sdl_gamecontrollerbutton'));
    expectedArguments(\Serafim\SDL\SDL::SDL_GameControllerHasSensor(), 1, argumentsSet('ffi_sdl_sdl_sensortype'));
    expectedArguments(\Serafim\SDL\SDL::SDL_GameControllerSetSensorEnabled(), 1, argumentsSet('ffi_sdl_sdl_sensortype'));
    expectedArguments(\Serafim\SDL\SDL::SDL_GameControllerSetSensorEnabled(), 2, argumentsSet('ffi_sdl_sdl_bool'));
    expectedArguments(\Serafim\SDL\SDL::SDL_GameControllerIsSensorEnabled(), 1, argumentsSet('ffi_sdl_sdl_sensortype'));
    expectedArguments(\Serafim\SDL\SDL::SDL_GameControllerGetSensorDataRate(), 1, argumentsSet('ffi_sdl_sdl_sensortype'));
    expectedArguments(\Serafim\SDL\SDL::SDL_GameControllerGetSensorData(), 1, argumentsSet('ffi_sdl_sdl_sensortype'));
    expectedArguments(\Serafim\SDL\SDL::SDL_GameControllerGetSensorDataWithTimestamp(), 1, argumentsSet('ffi_sdl_sdl_sensortype'));
    expectedArguments(\Serafim\SDL\SDL::SDL_GameControllerGetAppleSFSymbolsNameForButton(), 1, argumentsSet('ffi_sdl_sdl_gamecontrollerbutton'));
    expectedArguments(\Serafim\SDL\SDL::SDL_GameControllerGetAppleSFSymbolsNameForAxis(), 1, argumentsSet('ffi_sdl_sdl_gamecontrolleraxis'));
    expectedArguments(\Serafim\SDL\SDL::SDL_PeepEvents(), 2, argumentsSet('ffi_sdl_sdl_eventaction'));
    expectedArguments(\Serafim\SDL\SDL::SDL_hid_ble_scan(), 0, argumentsSet('ffi_sdl_sdl_bool'));
    expectedArguments(\Serafim\SDL\SDL::SDL_SetHintWithPriority(), 2, argumentsSet('ffi_sdl_sdl_hintpriority'));
    expectedArguments(\Serafim\SDL\SDL::SDL_GetHintBoolean(), 1, argumentsSet('ffi_sdl_sdl_bool'));
    expectedArguments(\Serafim\SDL\SDL::SDL_LogSetAllPriority(), 0, argumentsSet('ffi_sdl_sdl_logpriority'));
    expectedArguments(\Serafim\SDL\SDL::SDL_LogSetPriority(), 1, argumentsSet('ffi_sdl_sdl_logpriority'));
    expectedArguments(\Serafim\SDL\SDL::SDL_LogMessage(), 1, argumentsSet('ffi_sdl_sdl_logpriority'));
    expectedArguments(\Serafim\SDL\SDL::SDL_LogMessageV(), 1, argumentsSet('ffi_sdl_sdl_logpriority'));
    expectedArguments(\Serafim\SDL\SDL::SDL_SetTextureBlendMode(), 1, argumentsSet('ffi_sdl_sdl_blendmode'));
    expectedArguments(\Serafim\SDL\SDL::SDL_SetTextureScaleMode(), 1, argumentsSet('ffi_sdl_sdl_scalemode'));
    expectedArguments(\Serafim\SDL\SDL::SDL_RenderSetIntegerScale(), 1, argumentsSet('ffi_sdl_sdl_bool'));
    expectedArguments(\Serafim\SDL\SDL::SDL_SetRenderDrawBlendMode(), 1, argumentsSet('ffi_sdl_sdl_blendmode'));
    expectedArguments(\Serafim\SDL\SDL::SDL_WinRTGetFSPathUNICODE(), 0, argumentsSet('ffi_sdl_sdl_winrt_path'));
    expectedArguments(\Serafim\SDL\SDL::SDL_WinRTGetFSPathUTF8(), 0, argumentsSet('ffi_sdl_sdl_winrt_path'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_ReportAssertion(), argumentsSet('ffi_sdl_sdl_assertstate'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_AtomicTryLock(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_AtomicCAS(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_AtomicCASPtr(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_GetAudioStatus(), argumentsSet('ffi_sdl_sdl_audiostatus'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_GetAudioDeviceStatus(), argumentsSet('ffi_sdl_sdl_audiostatus'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_HasClipboardText(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_HasPrimarySelectionText(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_HasRDTSC(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_HasAltiVec(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_HasMMX(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_Has3DNow(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_HasSSE(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_HasSSE2(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_HasSSE3(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_HasSSE41(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_HasSSE42(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_HasAVX(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_HasAVX2(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_HasAVX512F(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_HasARMSIMD(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_HasNEON(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_HasLSX(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_HasLASX(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_PixelFormatEnumToMasks(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_PointInRect(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_RectEmpty(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_RectEquals(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_HasIntersection(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_IntersectRect(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_EnclosePoints(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_IntersectRectAndLine(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_PointInFRect(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_FRectEmpty(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_FRectEqualsEpsilon(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_FRectEquals(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_HasIntersectionF(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_IntersectFRect(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_EncloseFPoints(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_IntersectFRectAndLine(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_ComposeCustomBlendMode(), argumentsSet('ffi_sdl_sdl_blendmode'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_HasSurfaceRLE(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_HasColorKey(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_SetClipRect(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_GetYUVConversionMode(), argumentsSet('ffi_sdl_sdl_yuv_conversion_mode'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_GetYUVConversionModeForResolution(), argumentsSet('ffi_sdl_sdl_yuv_conversion_mode'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_GetDisplayOrientation(), argumentsSet('ffi_sdl_sdl_displayorientation'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_HasWindowSurface(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_GetWindowGrab(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_GetWindowKeyboardGrab(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_GetWindowMouseGrab(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_IsScreenSaverEnabled(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_GL_ExtensionSupported(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_GetModState(), argumentsSet('ffi_sdl_sdl_keymod'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_GetScancodeFromKey(), argumentsSet('ffi_sdl_sdl_scancode'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_GetScancodeFromName(), argumentsSet('ffi_sdl_sdl_scancode'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_IsTextInputActive(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_IsTextInputShown(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_HasScreenKeyboardSupport(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_IsScreenKeyboardShown(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_GetRelativeMouseMode(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_JoystickGetDeviceType(), argumentsSet('ffi_sdl_sdl_joysticktype'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_JoystickIsVirtual(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_JoystickGetType(), argumentsSet('ffi_sdl_sdl_joysticktype'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_JoystickGetAttached(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_JoystickGetAxisInitialState(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_JoystickHasLED(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_JoystickHasRumble(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_JoystickHasRumbleTriggers(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_JoystickCurrentPowerLevel(), argumentsSet('ffi_sdl_sdl_joystickpowerlevel'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_SensorGetDeviceType(), argumentsSet('ffi_sdl_sdl_sensortype'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_SensorGetType(), argumentsSet('ffi_sdl_sdl_sensortype'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_IsGameController(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_GameControllerTypeForIndex(), argumentsSet('ffi_sdl_sdl_gamecontrollertype'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_GameControllerGetType(), argumentsSet('ffi_sdl_sdl_gamecontrollertype'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_GameControllerGetAttached(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_GameControllerGetAxisFromString(), argumentsSet('ffi_sdl_sdl_gamecontrolleraxis'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_GameControllerHasAxis(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_GameControllerGetButtonFromString(), argumentsSet('ffi_sdl_sdl_gamecontrollerbutton'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_GameControllerHasButton(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_GameControllerHasSensor(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_GameControllerIsSensorEnabled(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_GameControllerHasLED(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_GameControllerHasRumble(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_GameControllerHasRumbleTriggers(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_GetTouchDeviceType(), argumentsSet('ffi_sdl_sdl_touchdevicetype'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_HasEvent(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_HasEvents(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_GetEventFilter(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_SetHintWithPriority(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_SetHint(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_ResetHint(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_GetHintBoolean(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_LogGetPriority(), argumentsSet('ffi_sdl_sdl_logpriority'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_GetPowerInfo(), argumentsSet('ffi_sdl_sdl_powerstate'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_RenderTargetSupported(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_RenderGetIntegerScale(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_RenderIsClipEnabled(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_IsShapedWindow(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_DXGIGetOutputInfo(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_WinRTGetDeviceFamily(), argumentsSet('ffi_sdl_sdl_winrt_devicefamily'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_IsTablet(), argumentsSet('ffi_sdl_sdl_bool'));
    expectedReturnValues(\Serafim\SDL\SDL::SDL_RemoveTimer(), argumentsSet('ffi_sdl_sdl_bool'));
    registerArgumentsSet(
        // List of available FFI type names
        'ffi_sdl_types_list',
        'void *',
        'bool',
        'float',
        'double',
        'long double',
        'char',
        'signed char',
        'unsigned char',
        'short',
        'short int',
        'signed short',
        'signed short int',
        'unsigned short',
        'unsigned short int',
        'int',
        'signed int',
        'unsigned int',
        'long',
        'long int',
        'signed long',
        'signed long int',
        'unsigned long',
        'unsigned long int',
        'long long',
        'long long int',
        'signed long long',
        'signed long long int',
        'unsigned long long',
        'unsigned long long int',
        'intptr_t',
        'uintptr_t',
        'size_t',
        'ssize_t',
        'ptrdiff_t',
        'off_t',
        'va_list',
        '__builtin_va_list',
        '__gnuc_va_list',
        'int8_t',
        'uint8_t',
        'int16_t',
        'uint16_t',
        'int32_t',
        'uint32_t',
        'int64_t',
        'uint64_t',
        '__NSConstantString',
        '__NSConstantString_tag',
        'SDL_AssertData',
        'SDL_mutex',
        'SDL_sem',
        'SDL_semaphore',
        'SDL_cond',
        'SDL_Thread',
        'SDL_RWops',
        'SDL_AudioSpec',
        'SDL_AudioCVT',
        'SDL_AudioStream',
        '_SDL_AudioStream',
        'SDL_Color',
        'SDL_Palette',
        'SDL_PixelFormat',
        'SDL_Point',
        'SDL_FPoint',
        'SDL_Rect',
        'SDL_FRect',
        'SDL_BlitMap',
        'SDL_Surface',
        'SDL_Window',
        'SDL_Keysym',
        'SDL_Cursor',
        'SDL_Joystick',
        '_SDL_Joystick',
        'SDL_VirtualJoystickDesc',
        'SDL_Sensor',
        '_SDL_Sensor',
        'SDL_GameController',
        '_SDL_GameController',
        'SDL_GameControllerButtonBind',
        'SDL_Finger',
        'SDL_CommonEvent',
        'SDL_DisplayEvent',
        'SDL_WindowEvent',
        'SDL_KeyboardEvent',
        'SDL_TextEditingEvent',
        'SDL_TextEditingExtEvent',
        'SDL_TextInputEvent',
        'SDL_MouseMotionEvent',
        'SDL_MouseButtonEvent',
        'SDL_MouseWheelEvent',
        'SDL_JoyAxisEvent',
        'SDL_JoyBallEvent',
        'SDL_JoyHatEvent',
        'SDL_JoyButtonEvent',
        'SDL_JoyDeviceEvent',
        'SDL_JoyBatteryEvent',
        'SDL_ControllerAxisEvent',
        'SDL_ControllerButtonEvent',
        'SDL_ControllerDeviceEvent',
        'SDL_ControllerTouchpadEvent',
        'SDL_ControllerSensorEvent',
        'SDL_AudioDeviceEvent',
        'SDL_TouchFingerEvent',
        'SDL_MultiGestureEvent',
        'SDL_DollarGestureEvent',
        'SDL_DropEvent',
        'SDL_SensorEvent',
        'SDL_QuitEvent',
        'SDL_OSEvent',
        'SDL_UserEvent',
        'SDL_SysWMmsg',
        'SDL_SysWMEvent',
        'SDL_Event',
        'SDL_Haptic',
        '_SDL_Haptic',
        'SDL_HapticDirection',
        'SDL_HapticConstant',
        'SDL_HapticPeriodic',
        'SDL_HapticCondition',
        'SDL_HapticRamp',
        'SDL_HapticLeftRight',
        'SDL_HapticCustom',
        'SDL_HapticEffect',
        'SDL_hid_device',
        'SDL_hid_device_',
        'SDL_hid_device_info',
        'SDL_RendererInfo',
        'SDL_Vertex',
        'SDL_Renderer',
        'SDL_Texture',
        'SDL_WindowShapeMode',
        'IDirect3DDevice9',
        'ID3D11Device',
        'ID3D12Device',
        'SDL_version',
        'SDL_Locale'
    );
    expectedArguments(\Serafim\SDL\SDL::new(), 0, argumentsSet('ffi_sdl_types_list'));
    expectedArguments(\Serafim\SDL\SDL::type(), 0, argumentsSet('ffi_sdl_types_list'));
    override(\Serafim\SDL\SDL::new(), map([
        // structures autocompletion
        '' => '\PHPSTORM_META\@',
        '__NSConstantString' => '\PHPSTORM_META\NSConstantString',
        'max_align_t' => '\PHPSTORM_META\MaxAlignT',
        '__fsid_t' => '\PHPSTORM_META\FsidT',
        'SDL_AssertData' => '\PHPSTORM_META\SDLAssertData',
        'SDL_atomic_t' => '\PHPSTORM_META\SDLAtomicT',
        'SDL_mutex' => '\PHPSTORM_META\SDLMutex',
        'SDL_sem' => '\PHPSTORM_META\SDLSem',
        'SDL_cond' => '\PHPSTORM_META\SDLCond',
        'SDL_Thread' => '\PHPSTORM_META\SDLThread',
        'SDL_RWops' => '\PHPSTORM_META\SDLRWops',
        'SDL_AudioSpec' => '\PHPSTORM_META\SDLAudioSpec',
        'SDL_AudioCVT' => '\PHPSTORM_META\SDLAudioCVT',
        'SDL_AudioStream' => '\PHPSTORM_META\SDLAudioStream',
        'SDL_Color' => '\PHPSTORM_META\SDLColor',
        'SDL_Palette' => '\PHPSTORM_META\SDLPalette',
        'SDL_PixelFormat' => '\PHPSTORM_META\SDLPixelFormat',
        'SDL_Point' => '\PHPSTORM_META\SDLPoint',
        'SDL_FPoint' => '\PHPSTORM_META\SDLFPoint',
        'SDL_Rect' => '\PHPSTORM_META\SDLRect',
        'SDL_FRect' => '\PHPSTORM_META\SDLFRect',
        'SDL_BlitMap' => '\PHPSTORM_META\SDLBlitMap',
        'SDL_Surface' => '\PHPSTORM_META\SDLSurface',
        'SDL_DisplayMode' => '\PHPSTORM_META\SDLDisplayMode',
        'SDL_Window' => '\PHPSTORM_META\SDLWindow',
        'SDL_Keysym' => '\PHPSTORM_META\SDLKeysym',
        'SDL_Cursor' => '\PHPSTORM_META\SDLCursor',
        'SDL_GUID' => '\PHPSTORM_META\SDLGUID',
        'SDL_Joystick' => '\PHPSTORM_META\SDLJoystick',
        'SDL_VirtualJoystickDesc' => '\PHPSTORM_META\SDLVirtualJoystickDesc',
        'SDL_Sensor' => '\PHPSTORM_META\SDLSensor',
        'SDL_GameController' => '\PHPSTORM_META\SDLGameController',
        'SDL_GameControllerButtonBind' => '\PHPSTORM_META\SDLGameControllerButtonBind',
        'SDL_Finger' => '\PHPSTORM_META\SDLFinger',
        'SDL_CommonEvent' => '\PHPSTORM_META\SDLCommonEvent',
        'SDL_DisplayEvent' => '\PHPSTORM_META\SDLDisplayEvent',
        'SDL_WindowEvent' => '\PHPSTORM_META\SDLWindowEvent',
        'SDL_KeyboardEvent' => '\PHPSTORM_META\SDLKeyboardEvent',
        'SDL_TextEditingEvent' => '\PHPSTORM_META\SDLTextEditingEvent',
        'SDL_TextEditingExtEvent' => '\PHPSTORM_META\SDLTextEditingExtEvent',
        'SDL_TextInputEvent' => '\PHPSTORM_META\SDLTextInputEvent',
        'SDL_MouseMotionEvent' => '\PHPSTORM_META\SDLMouseMotionEvent',
        'SDL_MouseButtonEvent' => '\PHPSTORM_META\SDLMouseButtonEvent',
        'SDL_MouseWheelEvent' => '\PHPSTORM_META\SDLMouseWheelEvent',
        'SDL_JoyAxisEvent' => '\PHPSTORM_META\SDLJoyAxisEvent',
        'SDL_JoyBallEvent' => '\PHPSTORM_META\SDLJoyBallEvent',
        'SDL_JoyHatEvent' => '\PHPSTORM_META\SDLJoyHatEvent',
        'SDL_JoyButtonEvent' => '\PHPSTORM_META\SDLJoyButtonEvent',
        'SDL_JoyDeviceEvent' => '\PHPSTORM_META\SDLJoyDeviceEvent',
        'SDL_JoyBatteryEvent' => '\PHPSTORM_META\SDLJoyBatteryEvent',
        'SDL_ControllerAxisEvent' => '\PHPSTORM_META\SDLControllerAxisEvent',
        'SDL_ControllerButtonEvent' => '\PHPSTORM_META\SDLControllerButtonEvent',
        'SDL_ControllerDeviceEvent' => '\PHPSTORM_META\SDLControllerDeviceEvent',
        'SDL_ControllerTouchpadEvent' => '\PHPSTORM_META\SDLControllerTouchpadEvent',
        'SDL_ControllerSensorEvent' => '\PHPSTORM_META\SDLControllerSensorEvent',
        'SDL_AudioDeviceEvent' => '\PHPSTORM_META\SDLAudioDeviceEvent',
        'SDL_TouchFingerEvent' => '\PHPSTORM_META\SDLTouchFingerEvent',
        'SDL_MultiGestureEvent' => '\PHPSTORM_META\SDLMultiGestureEvent',
        'SDL_DollarGestureEvent' => '\PHPSTORM_META\SDLDollarGestureEvent',
        'SDL_DropEvent' => '\PHPSTORM_META\SDLDropEvent',
        'SDL_SensorEvent' => '\PHPSTORM_META\SDLSensorEvent',
        'SDL_QuitEvent' => '\PHPSTORM_META\SDLQuitEvent',
        'SDL_OSEvent' => '\PHPSTORM_META\SDLOSEvent',
        'SDL_UserEvent' => '\PHPSTORM_META\SDLUserEvent',
        'SDL_SysWMmsg' => '\PHPSTORM_META\SDLSysWMmsg',
        'SDL_SysWMEvent' => '\PHPSTORM_META\SDLSysWMEvent',
        'SDL_Event' => '\PHPSTORM_META\SDLEvent',
        'SDL_Haptic' => '\PHPSTORM_META\SDLHaptic',
        'SDL_HapticDirection' => '\PHPSTORM_META\SDLHapticDirection',
        'SDL_HapticConstant' => '\PHPSTORM_META\SDLHapticConstant',
        'SDL_HapticPeriodic' => '\PHPSTORM_META\SDLHapticPeriodic',
        'SDL_HapticCondition' => '\PHPSTORM_META\SDLHapticCondition',
        'SDL_HapticRamp' => '\PHPSTORM_META\SDLHapticRamp',
        'SDL_HapticLeftRight' => '\PHPSTORM_META\SDLHapticLeftRight',
        'SDL_HapticCustom' => '\PHPSTORM_META\SDLHapticCustom',
        'SDL_HapticEffect' => '\PHPSTORM_META\SDLHapticEffect',
        'SDL_hid_device' => '\PHPSTORM_META\SDLHidDevice',
        'SDL_hid_device_info' => '\PHPSTORM_META\SDLHidDeviceInfo',
        'SDL_MessageBoxButtonData' => '\PHPSTORM_META\SDLMessageBoxButtonData',
        'SDL_MessageBoxColor' => '\PHPSTORM_META\SDLMessageBoxColor',
        'SDL_MessageBoxColorScheme' => '\PHPSTORM_META\SDLMessageBoxColorScheme',
        'SDL_MessageBoxData' => '\PHPSTORM_META\SDLMessageBoxData',
        'SDL_RendererInfo' => '\PHPSTORM_META\SDLRendererInfo',
        'SDL_Vertex' => '\PHPSTORM_META\SDLVertex',
        'SDL_Renderer' => '\PHPSTORM_META\SDLRenderer',
        'SDL_Texture' => '\PHPSTORM_META\SDLTexture',
        'SDL_WindowShapeParams' => '\PHPSTORM_META\SDLWindowShapeParams',
        'SDL_WindowShapeMode' => '\PHPSTORM_META\SDLWindowShapeMode',
        'IDirect3DDevice9' => '\PHPSTORM_META\IDirect3DDevice9',
        'ID3D11Device' => '\PHPSTORM_META\ID3D11Device',
        'ID3D12Device' => '\PHPSTORM_META\ID3D12Device',
        'SDL_version' => '\PHPSTORM_META\SDLVersion',
        'SDL_Locale' => '\PHPSTORM_META\SDLLocale',
    ]));
    /**
     * Generated "__NSConstantString" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class NSConstantString extends \FFI\CData
    {
        /**
         * @var null|\FFI\CData<int<-2147483648, 2147483647>>
         */
        public ?\FFI\CData $isa;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $flags;
        public string|\FFI\CData $str;
        /**
         * @var int<min, max>
         */
        public int $length;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with '__NSConstantString' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "max_align_t" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class MaxAlignT extends \FFI\CData
    {
        /**
         * @var int<min, max>
         */
        public int $__clang_max_align_nonce1;
        public float $__clang_max_align_nonce2;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'max_align_t' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "__fsid_t" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class FsidT extends \FFI\CData
    {
        /**
         * @var list<int<-2147483648, 2147483647>>
         */
        public array $__val;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with '__fsid_t' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_AssertData" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLAssertData extends \FFI\CData
    {
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $always_ignore;
        /**
         * @var int<0, 4294967296>
         */
        public int $trigger_count;
        public string|\FFI\CData $condition;
        public string|\FFI\CData $filename;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $linenum;
        public string|\FFI\CData $function;
        public ?\FFI\CData $next;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_AssertData' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_atomic_t" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLAtomicT extends \FFI\CData
    {
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $value;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_atomic_t' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_mutex" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLMutex extends \FFI\CData
    {
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_mutex' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_sem" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLSem extends \FFI\CData
    {
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_sem' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_cond" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLCond extends \FFI\CData
    {
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_cond' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_Thread" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLThread extends \FFI\CData
    {
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_Thread' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_RWops" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLRWops extends \FFI\CData
    {
        /**
         * @var null|\FFI\CData<callable(mixed):(int<min, max>)>
         */
        public ?\FFI\CData $size;
        /**
         * @var null|\FFI\CData<callable(mixed, int<min, max>, int<-2147483648, 2147483647>):(int<min, max>)>
         */
        public ?\FFI\CData $seek;
        /**
         * @var null|\FFI\CData<callable(mixed, mixed, int<0, max>, int<0, max>):(int<0, max>)>
         */
        public ?\FFI\CData $read;
        /**
         * @var null|\FFI\CData<callable(mixed, mixed, int<0, max>, int<0, max>):(int<0, max>)>
         */
        public ?\FFI\CData $write;
        /**
         * @var null|\FFI\CData<callable(mixed):(int<-2147483648, 2147483647>)>
         */
        public ?\FFI\CData $close;
        /**
         * @var int<0, 4294967296>
         */
        public int $type;
        /**
         * @var null|object{windowsio:null|object{append:int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*, h:mixed, buffer:null|object{data:mixed, size:int<0, max>, left:int<0, max>}}, mem:null|object{base:null|\FFI\CData<int<0, 255>>, here:null|\FFI\CData<int<0, 255>>, stop:null|\FFI\CData<int<0, 255>>}, unknown:null|object{data1:mixed, data2:mixed}}
         */
        public ?\FFI\CData $hidden;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_RWops' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_AudioSpec" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLAudioSpec extends \FFI\CData
    {
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $freq;
        /**
         * @var int<0, 65536>
         */
        public int $format;
        /**
         * @var int<0, 255>
         */
        public int $channels;
        /**
         * @var int<0, 255>
         */
        public int $silence;
        /**
         * @var int<0, 65536>
         */
        public int $samples;
        /**
         * @var int<0, 65536>
         */
        public int $padding;
        /**
         * @var int<0, 4294967296>
         */
        public int $size;
        /**
         * @var null|\FFI\CData<callable(mixed, null|\FFI\CData<int<0, 255>>, int<-2147483648, 2147483647>):(mixed)>
         */
        public ?\FFI\CData $callback;
        public ?\FFI\CData $userdata;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_AudioSpec' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_AudioCVT" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLAudioCVT extends \FFI\CData
    {
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $needed;
        /**
         * @var int<0, 65536>
         */
        public int $src_format;
        /**
         * @var int<0, 65536>
         */
        public int $dst_format;
        public float $rate_incr;
        /**
         * @var null|\FFI\CData<int<0, 255>>
         */
        public ?\FFI\CData $buf;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $len;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $len_cvt;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $len_mult;
        public float $len_ratio;
        /**
         * @var list<null|\FFI\CData<callable(mixed, int<0, 65536>):(mixed)>>
         */
        public array $filters;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $filter_index;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_AudioCVT' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_AudioStream" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLAudioStream extends \FFI\CData
    {
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_AudioStream' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_Color" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLColor extends \FFI\CData
    {
        /**
         * @var int<0, 255>
         */
        public int $r;
        /**
         * @var int<0, 255>
         */
        public int $g;
        /**
         * @var int<0, 255>
         */
        public int $b;
        /**
         * @var int<0, 255>
         */
        public int $a;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_Color' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_Palette" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLPalette extends \FFI\CData
    {
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $ncolors;
        /**
         * @var null|\FFI\CData<\PHPSTORM_META\SDLColor>
         */
        public ?\FFI\CData $colors;
        /**
         * @var int<0, 4294967296>
         */
        public int $version;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $refcount;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_Palette' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_PixelFormat" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLPixelFormat extends \FFI\CData
    {
        /**
         * @var int<0, 4294967296>
         */
        public int $format;
        /**
         * @var null|\FFI\CData<\PHPSTORM_META\SDLPalette>
         */
        public ?\FFI\CData $palette;
        /**
         * @var int<0, 255>
         */
        public int $BitsPerPixel;
        /**
         * @var int<0, 255>
         */
        public int $BytesPerPixel;
        /**
         * @var list<int<0, 255>>
         */
        public array $padding;
        /**
         * @var int<0, 4294967296>
         */
        public int $Rmask;
        /**
         * @var int<0, 4294967296>
         */
        public int $Gmask;
        /**
         * @var int<0, 4294967296>
         */
        public int $Bmask;
        /**
         * @var int<0, 4294967296>
         */
        public int $Amask;
        /**
         * @var int<0, 255>
         */
        public int $Rloss;
        /**
         * @var int<0, 255>
         */
        public int $Gloss;
        /**
         * @var int<0, 255>
         */
        public int $Bloss;
        /**
         * @var int<0, 255>
         */
        public int $Aloss;
        /**
         * @var int<0, 255>
         */
        public int $Rshift;
        /**
         * @var int<0, 255>
         */
        public int $Gshift;
        /**
         * @var int<0, 255>
         */
        public int $Bshift;
        /**
         * @var int<0, 255>
         */
        public int $Ashift;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $refcount;
        public ?\FFI\CData $next;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_PixelFormat' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_Point" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLPoint extends \FFI\CData
    {
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $x;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $y;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_Point' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_FPoint" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLFPoint extends \FFI\CData
    {
        public float $x;
        public float $y;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_FPoint' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_Rect" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLRect extends \FFI\CData
    {
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $x;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $y;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $w;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $h;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_Rect' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_FRect" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLFRect extends \FFI\CData
    {
        public float $x;
        public float $y;
        public float $w;
        public float $h;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_FRect' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_BlitMap" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLBlitMap extends \FFI\CData
    {
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_BlitMap' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_Surface" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLSurface extends \FFI\CData
    {
        /**
         * @var int<0, 4294967296>
         */
        public int $flags;
        /**
         * @var null|\FFI\CData<\PHPSTORM_META\SDLPixelFormat>
         */
        public ?\FFI\CData $format;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $w;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $h;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $pitch;
        public ?\FFI\CData $pixels;
        public ?\FFI\CData $userdata;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $locked;
        public ?\FFI\CData $list_blitmap;
        /**
         * @var \PHPSTORM_META\SDLRect
         */
        public ?\FFI\CData $clip_rect;
        /**
         * @var null|\FFI\CData<\PHPSTORM_META\SDLBlitMap>
         */
        public ?\FFI\CData $map;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $refcount;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_Surface' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_DisplayMode" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLDisplayMode extends \FFI\CData
    {
        /**
         * @var int<0, 4294967296>
         */
        public int $format;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $w;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $h;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $refresh_rate;
        public ?\FFI\CData $driverdata;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_DisplayMode' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_Window" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLWindow extends \FFI\CData
    {
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_Window' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_Keysym" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLKeysym extends \FFI\CData
    {
        /**
         * @var int<-2147483648, 2147483647>|\Serafim\SDL\Keyboard\ScanCode::*
         */
        public int $scancode;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $sym;
        /**
         * @var int<0, 65536>
         */
        public int $mod;
        /**
         * @var int<0, 4294967296>
         */
        public int $unused;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_Keysym' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_Cursor" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLCursor extends \FFI\CData
    {
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_Cursor' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_GUID" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLGUID extends \FFI\CData
    {
        /**
         * @var list<int<0, 255>>
         */
        public array $data;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_GUID' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_Joystick" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLJoystick extends \FFI\CData
    {
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_Joystick' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_VirtualJoystickDesc" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLVirtualJoystickDesc extends \FFI\CData
    {
        /**
         * @var int<0, 65536>
         */
        public int $version;
        /**
         * @var int<0, 65536>
         */
        public int $type;
        /**
         * @var int<0, 65536>
         */
        public int $naxes;
        /**
         * @var int<0, 65536>
         */
        public int $nbuttons;
        /**
         * @var int<0, 65536>
         */
        public int $nhats;
        /**
         * @var int<0, 65536>
         */
        public int $vendor_id;
        /**
         * @var int<0, 65536>
         */
        public int $product_id;
        /**
         * @var int<0, 65536>
         */
        public int $padding;
        /**
         * @var int<0, 4294967296>
         */
        public int $button_mask;
        /**
         * @var int<0, 4294967296>
         */
        public int $axis_mask;
        public string|\FFI\CData $name;
        public ?\FFI\CData $userdata;
        /**
         * @var null|\FFI\CData<callable(mixed):(mixed)>
         */
        public ?\FFI\CData $Update;
        /**
         * @var null|\FFI\CData<callable(mixed, int<-2147483648, 2147483647>):(mixed)>
         */
        public ?\FFI\CData $SetPlayerIndex;
        /**
         * @var null|\FFI\CData<callable(mixed, int<0, 65536>, int<0, 65536>):(int<-2147483648, 2147483647>)>
         */
        public ?\FFI\CData $Rumble;
        /**
         * @var null|\FFI\CData<callable(mixed, int<0, 65536>, int<0, 65536>):(int<-2147483648, 2147483647>)>
         */
        public ?\FFI\CData $RumbleTriggers;
        /**
         * @var null|\FFI\CData<callable(mixed, int<0, 255>, int<0, 255>, int<0, 255>):(int<-2147483648, 2147483647>)>
         */
        public ?\FFI\CData $SetLED;
        /**
         * @var null|\FFI\CData<callable(mixed, mixed, int<-2147483648, 2147483647>):(int<-2147483648, 2147483647>)>
         */
        public ?\FFI\CData $SendEffect;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_VirtualJoystickDesc' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_Sensor" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLSensor extends \FFI\CData
    {
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_Sensor' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_GameController" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLGameController extends \FFI\CData
    {
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_GameController' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_GameControllerButtonBind" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLGameControllerButtonBind extends \FFI\CData
    {
        /**
         * @var int<-2147483648, 2147483647>|\Serafim\SDL\GameController\BindType::*
         */
        public int $bindType;
        /**
         * @var null|object{button:int<-2147483648, 2147483647>, axis:int<-2147483648, 2147483647>, hat:null|object{hat:int<-2147483648, 2147483647>, hat_mask:int<-2147483648, 2147483647>}}
         */
        public ?\FFI\CData $value;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_GameControllerButtonBind' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_Finger" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLFinger extends \FFI\CData
    {
        /**
         * @var int<min, max>
         */
        public int $id;
        public float $x;
        public float $y;
        public float $pressure;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_Finger' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_CommonEvent" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLCommonEvent extends \FFI\CData
    {
        /**
         * @var int<0, 4294967296>
         */
        public int $type;
        /**
         * @var int<0, 4294967296>
         */
        public int $timestamp;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_CommonEvent' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_DisplayEvent" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLDisplayEvent extends \FFI\CData
    {
        /**
         * @var int<0, 4294967296>
         */
        public int $type;
        /**
         * @var int<0, 4294967296>
         */
        public int $timestamp;
        /**
         * @var int<0, 4294967296>
         */
        public int $display;
        /**
         * @var int<0, 255>
         */
        public int $event;
        /**
         * @var int<0, 255>
         */
        public int $padding1;
        /**
         * @var int<0, 255>
         */
        public int $padding2;
        /**
         * @var int<0, 255>
         */
        public int $padding3;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $data1;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_DisplayEvent' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_WindowEvent" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLWindowEvent extends \FFI\CData
    {
        /**
         * @var int<0, 4294967296>
         */
        public int $type;
        /**
         * @var int<0, 4294967296>
         */
        public int $timestamp;
        /**
         * @var int<0, 4294967296>
         */
        public int $windowID;
        /**
         * @var int<0, 255>
         */
        public int $event;
        /**
         * @var int<0, 255>
         */
        public int $padding1;
        /**
         * @var int<0, 255>
         */
        public int $padding2;
        /**
         * @var int<0, 255>
         */
        public int $padding3;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $data1;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $data2;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_WindowEvent' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_KeyboardEvent" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLKeyboardEvent extends \FFI\CData
    {
        /**
         * @var int<0, 4294967296>
         */
        public int $type;
        /**
         * @var int<0, 4294967296>
         */
        public int $timestamp;
        /**
         * @var int<0, 4294967296>
         */
        public int $windowID;
        /**
         * @var int<0, 255>
         */
        public int $state;
        /**
         * @var int<0, 255>
         */
        public int $repeat;
        /**
         * @var int<0, 255>
         */
        public int $padding2;
        /**
         * @var int<0, 255>
         */
        public int $padding3;
        /**
         * @var \PHPSTORM_META\SDLKeysym
         */
        public ?\FFI\CData $keysym;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_KeyboardEvent' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_TextEditingEvent" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLTextEditingEvent extends \FFI\CData
    {
        /**
         * @var int<0, 4294967296>
         */
        public int $type;
        /**
         * @var int<0, 4294967296>
         */
        public int $timestamp;
        /**
         * @var int<0, 4294967296>
         */
        public int $windowID;
        /**
         * @var list<mixed>
         */
        public array $text;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $start;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $length;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_TextEditingEvent' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_TextEditingExtEvent" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLTextEditingExtEvent extends \FFI\CData
    {
        /**
         * @var int<0, 4294967296>
         */
        public int $type;
        /**
         * @var int<0, 4294967296>
         */
        public int $timestamp;
        /**
         * @var int<0, 4294967296>
         */
        public int $windowID;
        public string|\FFI\CData $text;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $start;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $length;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_TextEditingExtEvent' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_TextInputEvent" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLTextInputEvent extends \FFI\CData
    {
        /**
         * @var int<0, 4294967296>
         */
        public int $type;
        /**
         * @var int<0, 4294967296>
         */
        public int $timestamp;
        /**
         * @var int<0, 4294967296>
         */
        public int $windowID;
        /**
         * @var list<mixed>
         */
        public array $text;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_TextInputEvent' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_MouseMotionEvent" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLMouseMotionEvent extends \FFI\CData
    {
        /**
         * @var int<0, 4294967296>
         */
        public int $type;
        /**
         * @var int<0, 4294967296>
         */
        public int $timestamp;
        /**
         * @var int<0, 4294967296>
         */
        public int $windowID;
        /**
         * @var int<0, 4294967296>
         */
        public int $which;
        /**
         * @var int<0, 4294967296>
         */
        public int $state;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $x;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $y;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $xrel;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $yrel;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_MouseMotionEvent' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_MouseButtonEvent" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLMouseButtonEvent extends \FFI\CData
    {
        /**
         * @var int<0, 4294967296>
         */
        public int $type;
        /**
         * @var int<0, 4294967296>
         */
        public int $timestamp;
        /**
         * @var int<0, 4294967296>
         */
        public int $windowID;
        /**
         * @var int<0, 4294967296>
         */
        public int $which;
        /**
         * @var int<0, 255>
         */
        public int $button;
        /**
         * @var int<0, 255>
         */
        public int $state;
        /**
         * @var int<0, 255>
         */
        public int $clicks;
        /**
         * @var int<0, 255>
         */
        public int $padding1;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $x;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $y;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_MouseButtonEvent' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_MouseWheelEvent" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLMouseWheelEvent extends \FFI\CData
    {
        /**
         * @var int<0, 4294967296>
         */
        public int $type;
        /**
         * @var int<0, 4294967296>
         */
        public int $timestamp;
        /**
         * @var int<0, 4294967296>
         */
        public int $windowID;
        /**
         * @var int<0, 4294967296>
         */
        public int $which;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $x;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $y;
        /**
         * @var int<0, 4294967296>
         */
        public int $direction;
        public float $preciseX;
        public float $preciseY;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $mouseX;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $mouseY;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_MouseWheelEvent' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_JoyAxisEvent" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLJoyAxisEvent extends \FFI\CData
    {
        /**
         * @var int<0, 4294967296>
         */
        public int $type;
        /**
         * @var int<0, 4294967296>
         */
        public int $timestamp;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $which;
        /**
         * @var int<0, 255>
         */
        public int $axis;
        /**
         * @var int<0, 255>
         */
        public int $padding1;
        /**
         * @var int<0, 255>
         */
        public int $padding2;
        /**
         * @var int<0, 255>
         */
        public int $padding3;
        /**
         * @var int<-32768, 32767>
         */
        public int $value;
        /**
         * @var int<0, 65536>
         */
        public int $padding4;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_JoyAxisEvent' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_JoyBallEvent" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLJoyBallEvent extends \FFI\CData
    {
        /**
         * @var int<0, 4294967296>
         */
        public int $type;
        /**
         * @var int<0, 4294967296>
         */
        public int $timestamp;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $which;
        /**
         * @var int<0, 255>
         */
        public int $ball;
        /**
         * @var int<0, 255>
         */
        public int $padding1;
        /**
         * @var int<0, 255>
         */
        public int $padding2;
        /**
         * @var int<0, 255>
         */
        public int $padding3;
        /**
         * @var int<-32768, 32767>
         */
        public int $xrel;
        /**
         * @var int<-32768, 32767>
         */
        public int $yrel;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_JoyBallEvent' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_JoyHatEvent" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLJoyHatEvent extends \FFI\CData
    {
        /**
         * @var int<0, 4294967296>
         */
        public int $type;
        /**
         * @var int<0, 4294967296>
         */
        public int $timestamp;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $which;
        /**
         * @var int<0, 255>
         */
        public int $hat;
        /**
         * @var int<0, 255>
         */
        public int $value;
        /**
         * @var int<0, 255>
         */
        public int $padding1;
        /**
         * @var int<0, 255>
         */
        public int $padding2;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_JoyHatEvent' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_JoyButtonEvent" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLJoyButtonEvent extends \FFI\CData
    {
        /**
         * @var int<0, 4294967296>
         */
        public int $type;
        /**
         * @var int<0, 4294967296>
         */
        public int $timestamp;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $which;
        /**
         * @var int<0, 255>
         */
        public int $button;
        /**
         * @var int<0, 255>
         */
        public int $state;
        /**
         * @var int<0, 255>
         */
        public int $padding1;
        /**
         * @var int<0, 255>
         */
        public int $padding2;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_JoyButtonEvent' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_JoyDeviceEvent" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLJoyDeviceEvent extends \FFI\CData
    {
        /**
         * @var int<0, 4294967296>
         */
        public int $type;
        /**
         * @var int<0, 4294967296>
         */
        public int $timestamp;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $which;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_JoyDeviceEvent' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_JoyBatteryEvent" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLJoyBatteryEvent extends \FFI\CData
    {
        /**
         * @var int<0, 4294967296>
         */
        public int $type;
        /**
         * @var int<0, 4294967296>
         */
        public int $timestamp;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $which;
        /**
         * @var int<-2147483648, 2147483647>|\Serafim\SDL\Joystick\PowerLevel::*
         */
        public int $level;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_JoyBatteryEvent' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_ControllerAxisEvent" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLControllerAxisEvent extends \FFI\CData
    {
        /**
         * @var int<0, 4294967296>
         */
        public int $type;
        /**
         * @var int<0, 4294967296>
         */
        public int $timestamp;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $which;
        /**
         * @var int<0, 255>
         */
        public int $axis;
        /**
         * @var int<0, 255>
         */
        public int $padding1;
        /**
         * @var int<0, 255>
         */
        public int $padding2;
        /**
         * @var int<0, 255>
         */
        public int $padding3;
        /**
         * @var int<-32768, 32767>
         */
        public int $value;
        /**
         * @var int<0, 65536>
         */
        public int $padding4;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_ControllerAxisEvent' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_ControllerButtonEvent" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLControllerButtonEvent extends \FFI\CData
    {
        /**
         * @var int<0, 4294967296>
         */
        public int $type;
        /**
         * @var int<0, 4294967296>
         */
        public int $timestamp;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $which;
        /**
         * @var int<0, 255>
         */
        public int $button;
        /**
         * @var int<0, 255>
         */
        public int $state;
        /**
         * @var int<0, 255>
         */
        public int $padding1;
        /**
         * @var int<0, 255>
         */
        public int $padding2;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_ControllerButtonEvent' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_ControllerDeviceEvent" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLControllerDeviceEvent extends \FFI\CData
    {
        /**
         * @var int<0, 4294967296>
         */
        public int $type;
        /**
         * @var int<0, 4294967296>
         */
        public int $timestamp;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $which;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_ControllerDeviceEvent' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_ControllerTouchpadEvent" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLControllerTouchpadEvent extends \FFI\CData
    {
        /**
         * @var int<0, 4294967296>
         */
        public int $type;
        /**
         * @var int<0, 4294967296>
         */
        public int $timestamp;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $which;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $touchpad;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $finger;
        public float $x;
        public float $y;
        public float $pressure;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_ControllerTouchpadEvent' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_ControllerSensorEvent" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLControllerSensorEvent extends \FFI\CData
    {
        /**
         * @var int<0, 4294967296>
         */
        public int $type;
        /**
         * @var int<0, 4294967296>
         */
        public int $timestamp;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $which;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $sensor;
        /**
         * @var list<mixed>
         */
        public array $data;
        /**
         * @var int<0, max>
         */
        public int $timestamp_us;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_ControllerSensorEvent' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_AudioDeviceEvent" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLAudioDeviceEvent extends \FFI\CData
    {
        /**
         * @var int<0, 4294967296>
         */
        public int $type;
        /**
         * @var int<0, 4294967296>
         */
        public int $timestamp;
        /**
         * @var int<0, 4294967296>
         */
        public int $which;
        /**
         * @var int<0, 255>
         */
        public int $iscapture;
        /**
         * @var int<0, 255>
         */
        public int $padding1;
        /**
         * @var int<0, 255>
         */
        public int $padding2;
        /**
         * @var int<0, 255>
         */
        public int $padding3;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_AudioDeviceEvent' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_TouchFingerEvent" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLTouchFingerEvent extends \FFI\CData
    {
        /**
         * @var int<0, 4294967296>
         */
        public int $type;
        /**
         * @var int<0, 4294967296>
         */
        public int $timestamp;
        /**
         * @var int<min, max>
         */
        public int $touchId;
        /**
         * @var int<min, max>
         */
        public int $fingerId;
        public float $x;
        public float $y;
        public float $dx;
        public float $dy;
        public float $pressure;
        /**
         * @var int<0, 4294967296>
         */
        public int $windowID;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_TouchFingerEvent' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_MultiGestureEvent" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLMultiGestureEvent extends \FFI\CData
    {
        /**
         * @var int<0, 4294967296>
         */
        public int $type;
        /**
         * @var int<0, 4294967296>
         */
        public int $timestamp;
        /**
         * @var int<min, max>
         */
        public int $touchId;
        public float $dTheta;
        public float $dDist;
        public float $x;
        public float $y;
        /**
         * @var int<0, 65536>
         */
        public int $numFingers;
        /**
         * @var int<0, 65536>
         */
        public int $padding;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_MultiGestureEvent' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_DollarGestureEvent" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLDollarGestureEvent extends \FFI\CData
    {
        /**
         * @var int<0, 4294967296>
         */
        public int $type;
        /**
         * @var int<0, 4294967296>
         */
        public int $timestamp;
        /**
         * @var int<min, max>
         */
        public int $touchId;
        /**
         * @var int<min, max>
         */
        public int $gestureId;
        /**
         * @var int<0, 4294967296>
         */
        public int $numFingers;
        public float $error;
        public float $x;
        public float $y;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_DollarGestureEvent' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_DropEvent" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLDropEvent extends \FFI\CData
    {
        /**
         * @var int<0, 4294967296>
         */
        public int $type;
        /**
         * @var int<0, 4294967296>
         */
        public int $timestamp;
        public string|\FFI\CData $file;
        /**
         * @var int<0, 4294967296>
         */
        public int $windowID;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_DropEvent' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_SensorEvent" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLSensorEvent extends \FFI\CData
    {
        /**
         * @var int<0, 4294967296>
         */
        public int $type;
        /**
         * @var int<0, 4294967296>
         */
        public int $timestamp;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $which;
        /**
         * @var list<mixed>
         */
        public array $data;
        /**
         * @var int<0, max>
         */
        public int $timestamp_us;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_SensorEvent' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_QuitEvent" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLQuitEvent extends \FFI\CData
    {
        /**
         * @var int<0, 4294967296>
         */
        public int $type;
        /**
         * @var int<0, 4294967296>
         */
        public int $timestamp;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_QuitEvent' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_OSEvent" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLOSEvent extends \FFI\CData
    {
        /**
         * @var int<0, 4294967296>
         */
        public int $type;
        /**
         * @var int<0, 4294967296>
         */
        public int $timestamp;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_OSEvent' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_UserEvent" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLUserEvent extends \FFI\CData
    {
        /**
         * @var int<0, 4294967296>
         */
        public int $type;
        /**
         * @var int<0, 4294967296>
         */
        public int $timestamp;
        /**
         * @var int<0, 4294967296>
         */
        public int $windowID;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $code;
        public ?\FFI\CData $data1;
        public ?\FFI\CData $data2;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_UserEvent' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_SysWMmsg" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLSysWMmsg extends \FFI\CData
    {
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_SysWMmsg' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_SysWMEvent" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLSysWMEvent extends \FFI\CData
    {
        /**
         * @var int<0, 4294967296>
         */
        public int $type;
        /**
         * @var int<0, 4294967296>
         */
        public int $timestamp;
        /**
         * @var null|\FFI\CData<\PHPSTORM_META\SDLSysWMmsg>
         */
        public ?\FFI\CData $msg;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_SysWMEvent' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_Event" union layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLEvent extends \FFI\CData
    {
        /**
         * @var int<0, 4294967296>
         */
        public int $type;
        /**
         * @var \PHPSTORM_META\SDLCommonEvent
         */
        public ?\FFI\CData $common;
        /**
         * @var \PHPSTORM_META\SDLDisplayEvent
         */
        public ?\FFI\CData $display;
        /**
         * @var \PHPSTORM_META\SDLWindowEvent
         */
        public ?\FFI\CData $window;
        /**
         * @var \PHPSTORM_META\SDLKeyboardEvent
         */
        public ?\FFI\CData $key;
        /**
         * @var \PHPSTORM_META\SDLTextEditingEvent
         */
        public ?\FFI\CData $edit;
        /**
         * @var \PHPSTORM_META\SDLTextEditingExtEvent
         */
        public ?\FFI\CData $editExt;
        /**
         * @var \PHPSTORM_META\SDLTextInputEvent
         */
        public ?\FFI\CData $text;
        /**
         * @var \PHPSTORM_META\SDLMouseMotionEvent
         */
        public ?\FFI\CData $motion;
        /**
         * @var \PHPSTORM_META\SDLMouseButtonEvent
         */
        public ?\FFI\CData $button;
        /**
         * @var \PHPSTORM_META\SDLMouseWheelEvent
         */
        public ?\FFI\CData $wheel;
        /**
         * @var \PHPSTORM_META\SDLJoyAxisEvent
         */
        public ?\FFI\CData $jaxis;
        /**
         * @var \PHPSTORM_META\SDLJoyBallEvent
         */
        public ?\FFI\CData $jball;
        /**
         * @var \PHPSTORM_META\SDLJoyHatEvent
         */
        public ?\FFI\CData $jhat;
        /**
         * @var \PHPSTORM_META\SDLJoyButtonEvent
         */
        public ?\FFI\CData $jbutton;
        /**
         * @var \PHPSTORM_META\SDLJoyDeviceEvent
         */
        public ?\FFI\CData $jdevice;
        /**
         * @var \PHPSTORM_META\SDLJoyBatteryEvent
         */
        public ?\FFI\CData $jbattery;
        /**
         * @var \PHPSTORM_META\SDLControllerAxisEvent
         */
        public ?\FFI\CData $caxis;
        /**
         * @var \PHPSTORM_META\SDLControllerButtonEvent
         */
        public ?\FFI\CData $cbutton;
        /**
         * @var \PHPSTORM_META\SDLControllerDeviceEvent
         */
        public ?\FFI\CData $cdevice;
        /**
         * @var \PHPSTORM_META\SDLControllerTouchpadEvent
         */
        public ?\FFI\CData $ctouchpad;
        /**
         * @var \PHPSTORM_META\SDLControllerSensorEvent
         */
        public ?\FFI\CData $csensor;
        /**
         * @var \PHPSTORM_META\SDLAudioDeviceEvent
         */
        public ?\FFI\CData $adevice;
        /**
         * @var \PHPSTORM_META\SDLSensorEvent
         */
        public ?\FFI\CData $sensor;
        /**
         * @var \PHPSTORM_META\SDLQuitEvent
         */
        public ?\FFI\CData $quit;
        /**
         * @var \PHPSTORM_META\SDLUserEvent
         */
        public ?\FFI\CData $user;
        /**
         * @var \PHPSTORM_META\SDLSysWMEvent
         */
        public ?\FFI\CData $syswm;
        /**
         * @var \PHPSTORM_META\SDLTouchFingerEvent
         */
        public ?\FFI\CData $tfinger;
        /**
         * @var \PHPSTORM_META\SDLMultiGestureEvent
         */
        public ?\FFI\CData $mgesture;
        /**
         * @var \PHPSTORM_META\SDLDollarGestureEvent
         */
        public ?\FFI\CData $dgesture;
        /**
         * @var \PHPSTORM_META\SDLDropEvent
         */
        public ?\FFI\CData $drop;
        /**
         * @var list<int<0, 255>>
         */
        public array $padding;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_Event' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_Haptic" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLHaptic extends \FFI\CData
    {
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_Haptic' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_HapticDirection" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLHapticDirection extends \FFI\CData
    {
        /**
         * @var int<0, 255>
         */
        public int $type;
        /**
         * @var list<int<-2147483648, 2147483647>>
         */
        public array $dir;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_HapticDirection' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_HapticConstant" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLHapticConstant extends \FFI\CData
    {
        /**
         * @var int<0, 65536>
         */
        public int $type;
        /**
         * @var \PHPSTORM_META\SDLHapticDirection
         */
        public ?\FFI\CData $direction;
        /**
         * @var int<0, 4294967296>
         */
        public int $length;
        /**
         * @var int<0, 65536>
         */
        public int $delay;
        /**
         * @var int<0, 65536>
         */
        public int $button;
        /**
         * @var int<0, 65536>
         */
        public int $interval;
        /**
         * @var int<-32768, 32767>
         */
        public int $level;
        /**
         * @var int<0, 65536>
         */
        public int $attack_length;
        /**
         * @var int<0, 65536>
         */
        public int $attack_level;
        /**
         * @var int<0, 65536>
         */
        public int $fade_length;
        /**
         * @var int<0, 65536>
         */
        public int $fade_level;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_HapticConstant' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_HapticPeriodic" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLHapticPeriodic extends \FFI\CData
    {
        /**
         * @var int<0, 65536>
         */
        public int $type;
        /**
         * @var \PHPSTORM_META\SDLHapticDirection
         */
        public ?\FFI\CData $direction;
        /**
         * @var int<0, 4294967296>
         */
        public int $length;
        /**
         * @var int<0, 65536>
         */
        public int $delay;
        /**
         * @var int<0, 65536>
         */
        public int $button;
        /**
         * @var int<0, 65536>
         */
        public int $interval;
        /**
         * @var int<0, 65536>
         */
        public int $period;
        /**
         * @var int<-32768, 32767>
         */
        public int $magnitude;
        /**
         * @var int<-32768, 32767>
         */
        public int $offset;
        /**
         * @var int<0, 65536>
         */
        public int $phase;
        /**
         * @var int<0, 65536>
         */
        public int $attack_length;
        /**
         * @var int<0, 65536>
         */
        public int $attack_level;
        /**
         * @var int<0, 65536>
         */
        public int $fade_length;
        /**
         * @var int<0, 65536>
         */
        public int $fade_level;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_HapticPeriodic' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_HapticCondition" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLHapticCondition extends \FFI\CData
    {
        /**
         * @var int<0, 65536>
         */
        public int $type;
        /**
         * @var \PHPSTORM_META\SDLHapticDirection
         */
        public ?\FFI\CData $direction;
        /**
         * @var int<0, 4294967296>
         */
        public int $length;
        /**
         * @var int<0, 65536>
         */
        public int $delay;
        /**
         * @var int<0, 65536>
         */
        public int $button;
        /**
         * @var int<0, 65536>
         */
        public int $interval;
        /**
         * @var list<int<0, 65536>>
         */
        public array $right_sat;
        /**
         * @var list<int<0, 65536>>
         */
        public array $left_sat;
        /**
         * @var list<int<-32768, 32767>>
         */
        public array $right_coeff;
        /**
         * @var list<int<-32768, 32767>>
         */
        public array $left_coeff;
        /**
         * @var list<int<0, 65536>>
         */
        public array $deadband;
        /**
         * @var list<int<-32768, 32767>>
         */
        public array $center;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_HapticCondition' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_HapticRamp" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLHapticRamp extends \FFI\CData
    {
        /**
         * @var int<0, 65536>
         */
        public int $type;
        /**
         * @var \PHPSTORM_META\SDLHapticDirection
         */
        public ?\FFI\CData $direction;
        /**
         * @var int<0, 4294967296>
         */
        public int $length;
        /**
         * @var int<0, 65536>
         */
        public int $delay;
        /**
         * @var int<0, 65536>
         */
        public int $button;
        /**
         * @var int<0, 65536>
         */
        public int $interval;
        /**
         * @var int<-32768, 32767>
         */
        public int $start;
        /**
         * @var int<-32768, 32767>
         */
        public int $end;
        /**
         * @var int<0, 65536>
         */
        public int $attack_length;
        /**
         * @var int<0, 65536>
         */
        public int $attack_level;
        /**
         * @var int<0, 65536>
         */
        public int $fade_length;
        /**
         * @var int<0, 65536>
         */
        public int $fade_level;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_HapticRamp' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_HapticLeftRight" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLHapticLeftRight extends \FFI\CData
    {
        /**
         * @var int<0, 65536>
         */
        public int $type;
        /**
         * @var int<0, 4294967296>
         */
        public int $length;
        /**
         * @var int<0, 65536>
         */
        public int $large_magnitude;
        /**
         * @var int<0, 65536>
         */
        public int $small_magnitude;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_HapticLeftRight' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_HapticCustom" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLHapticCustom extends \FFI\CData
    {
        /**
         * @var int<0, 65536>
         */
        public int $type;
        /**
         * @var \PHPSTORM_META\SDLHapticDirection
         */
        public ?\FFI\CData $direction;
        /**
         * @var int<0, 4294967296>
         */
        public int $length;
        /**
         * @var int<0, 65536>
         */
        public int $delay;
        /**
         * @var int<0, 65536>
         */
        public int $button;
        /**
         * @var int<0, 65536>
         */
        public int $interval;
        /**
         * @var int<0, 255>
         */
        public int $channels;
        /**
         * @var int<0, 65536>
         */
        public int $period;
        /**
         * @var int<0, 65536>
         */
        public int $samples;
        /**
         * @var null|\FFI\CData<int<0, 65536>>
         */
        public ?\FFI\CData $data;
        /**
         * @var int<0, 65536>
         */
        public int $attack_length;
        /**
         * @var int<0, 65536>
         */
        public int $attack_level;
        /**
         * @var int<0, 65536>
         */
        public int $fade_length;
        /**
         * @var int<0, 65536>
         */
        public int $fade_level;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_HapticCustom' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_HapticEffect" union layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLHapticEffect extends \FFI\CData
    {
        /**
         * @var int<0, 65536>
         */
        public int $type;
        /**
         * @var \PHPSTORM_META\SDLHapticConstant
         */
        public ?\FFI\CData $constant;
        /**
         * @var \PHPSTORM_META\SDLHapticPeriodic
         */
        public ?\FFI\CData $periodic;
        /**
         * @var \PHPSTORM_META\SDLHapticCondition
         */
        public ?\FFI\CData $condition;
        /**
         * @var \PHPSTORM_META\SDLHapticRamp
         */
        public ?\FFI\CData $ramp;
        /**
         * @var \PHPSTORM_META\SDLHapticLeftRight
         */
        public ?\FFI\CData $leftright;
        /**
         * @var \PHPSTORM_META\SDLHapticCustom
         */
        public ?\FFI\CData $custom;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_HapticEffect' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_hid_device" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLHidDevice extends \FFI\CData
    {
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_hid_device' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_hid_device_info" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLHidDeviceInfo extends \FFI\CData
    {
        public string|\FFI\CData $path;
        /**
         * @var int<0, 65536>
         */
        public int $vendor_id;
        /**
         * @var int<0, 65536>
         */
        public int $product_id;
        /**
         * @var null|\FFI\CData<int<-2147483648, 2147483647>>
         */
        public ?\FFI\CData $serial_number;
        /**
         * @var int<0, 65536>
         */
        public int $release_number;
        /**
         * @var null|\FFI\CData<int<-2147483648, 2147483647>>
         */
        public ?\FFI\CData $manufacturer_string;
        /**
         * @var null|\FFI\CData<int<-2147483648, 2147483647>>
         */
        public ?\FFI\CData $product_string;
        /**
         * @var int<0, 65536>
         */
        public int $usage_page;
        /**
         * @var int<0, 65536>
         */
        public int $usage;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $interface_number;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $interface_class;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $interface_subclass;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $interface_protocol;
        public ?\FFI\CData $next;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_hid_device_info' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_MessageBoxButtonData" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLMessageBoxButtonData extends \FFI\CData
    {
        /**
         * @var int<0, 4294967296>
         */
        public int $flags;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $buttonid;
        public string|\FFI\CData $text;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_MessageBoxButtonData' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_MessageBoxColor" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLMessageBoxColor extends \FFI\CData
    {
        /**
         * @var int<0, 255>
         */
        public int $r;
        /**
         * @var int<0, 255>
         */
        public int $g;
        /**
         * @var int<0, 255>
         */
        public int $b;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_MessageBoxColor' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_MessageBoxColorScheme" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLMessageBoxColorScheme extends \FFI\CData
    {
        /**
         * @var list<\PHPSTORM_META\SDLMessageBoxColor|null|object{r:int<0, 255>, g:int<0, 255>, b:int<0, 255>}>
         */
        public array $colors;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_MessageBoxColorScheme' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_MessageBoxData" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLMessageBoxData extends \FFI\CData
    {
        /**
         * @var int<0, 4294967296>
         */
        public int $flags;
        /**
         * @var null|\FFI\CData<\PHPSTORM_META\SDLWindow>
         */
        public ?\FFI\CData $window;
        public string|\FFI\CData $title;
        public string|\FFI\CData $message;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $numbuttons;
        /**
         * @var null|\FFI\CData<\PHPSTORM_META\SDLMessageBoxButtonData|null|object{flags:int<0, 4294967296>, buttonid:int<-2147483648, 2147483647>, text:mixed}>
         */
        public ?\FFI\CData $buttons;
        /**
         * @var null|\FFI\CData<\PHPSTORM_META\SDLMessageBoxColorScheme|null|object{colors:list<\PHPSTORM_META\SDLMessageBoxColor|null|object{r:int<0, 255>, g:int<0, 255>, b:int<0, 255>}>}>
         */
        public ?\FFI\CData $colorScheme;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_MessageBoxData' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_RendererInfo" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLRendererInfo extends \FFI\CData
    {
        public string|\FFI\CData $name;
        /**
         * @var int<0, 4294967296>
         */
        public int $flags;
        /**
         * @var int<0, 4294967296>
         */
        public int $num_texture_formats;
        /**
         * @var list<int<0, 4294967296>>
         */
        public array $texture_formats;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $max_texture_width;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $max_texture_height;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_RendererInfo' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_Vertex" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLVertex extends \FFI\CData
    {
        /**
         * @var \PHPSTORM_META\SDLFPoint
         */
        public ?\FFI\CData $position;
        /**
         * @var \PHPSTORM_META\SDLColor
         */
        public ?\FFI\CData $color;
        /**
         * @var \PHPSTORM_META\SDLFPoint
         */
        public ?\FFI\CData $tex_coord;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_Vertex' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_Renderer" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLRenderer extends \FFI\CData
    {
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_Renderer' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_Texture" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLTexture extends \FFI\CData
    {
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_Texture' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_WindowShapeParams" union layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLWindowShapeParams extends \FFI\CData
    {
        /**
         * @var int<0, 255>
         */
        public int $binarizationCutoff;
        /**
         * @var \PHPSTORM_META\SDLColor
         */
        public ?\FFI\CData $colorKey;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_WindowShapeParams' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_WindowShapeMode" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLWindowShapeMode extends \FFI\CData
    {
        /**
         * @var int<-2147483648, 2147483647>|\Serafim\SDL\Video\WindowShapeMode::*
         */
        public int $mode;
        /**
         * @var \PHPSTORM_META\SDLWindowShapeParams|null|object{binarizationCutoff:int<0, 255>, colorKey:\PHPSTORM_META\SDLColor}
         */
        public ?\FFI\CData $parameters;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_WindowShapeMode' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "IDirect3DDevice9" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class IDirect3DDevice9 extends \FFI\CData
    {
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'IDirect3DDevice9' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "ID3D11Device" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class ID3D11Device extends \FFI\CData
    {
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'ID3D11Device' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "ID3D12Device" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class ID3D12Device extends \FFI\CData
    {
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'ID3D12Device' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_version" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLVersion extends \FFI\CData
    {
        /**
         * @var int<0, 255>
         */
        public int $major;
        /**
         * @var int<0, 255>
         */
        public int $minor;
        /**
         * @var int<0, 255>
         */
        public int $patch;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_version' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_Locale" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLLocale extends \FFI\CData
    {
        public string|\FFI\CData $language;
        public string|\FFI\CData $country;
        /**
         * @internal Please use {@see \Serafim\SDL\SDL::new()} with 'SDL_Locale' argument instead.
         */
        private function __construct()
        {
        }
    }
}
namespace Serafim\SDL {
    interface SDL
    {
        public function SDL_GetPlatform(): string|\FFI\CData;
        /**
         * @param int<0, max> $size
         */
        public function SDL_malloc(int $size): ?\FFI\CData;
        /**
         * @param int<0, max> $nmemb
         * @param int<0, max> $size
         */
        public function SDL_calloc(int $nmemb, int $size): ?\FFI\CData;
        /**
         * @param int<0, max> $size
         */
        public function SDL_realloc(?\FFI\CData $mem, int $size): ?\FFI\CData;
        public function SDL_free(?\FFI\CData $mem): void;
        /**
         * @param null|\FFI\CData<null|\FFI\CData<callable(int<0, max>):(mixed)>> $malloc_func
         * @param null|\FFI\CData<null|\FFI\CData<callable(int<0, max>, int<0, max>):(mixed)>> $calloc_func
         * @param null|\FFI\CData<null|\FFI\CData<callable(mixed, int<0, max>):(mixed)>> $realloc_func
         * @param null|\FFI\CData<null|\FFI\CData<callable(mixed):(mixed)>> $free_func
         */
        public function SDL_GetOriginalMemoryFunctions(?\FFI\CData $malloc_func, ?\FFI\CData $calloc_func, ?\FFI\CData $realloc_func, ?\FFI\CData $free_func): void;
        /**
         * @param null|\FFI\CData<null|\FFI\CData<callable(int<0, max>):(mixed)>> $malloc_func
         * @param null|\FFI\CData<null|\FFI\CData<callable(int<0, max>, int<0, max>):(mixed)>> $calloc_func
         * @param null|\FFI\CData<null|\FFI\CData<callable(mixed, int<0, max>):(mixed)>> $realloc_func
         * @param null|\FFI\CData<null|\FFI\CData<callable(mixed):(mixed)>> $free_func
         */
        public function SDL_GetMemoryFunctions(?\FFI\CData $malloc_func, ?\FFI\CData $calloc_func, ?\FFI\CData $realloc_func, ?\FFI\CData $free_func): void;
        /**
         * @param null|\FFI\CData<callable(int<0, max>):(mixed)> $malloc_func
         * @param null|\FFI\CData<callable(int<0, max>, int<0, max>):(mixed)> $calloc_func
         * @param null|\FFI\CData<callable(mixed, int<0, max>):(mixed)> $realloc_func
         * @param null|\FFI\CData<callable(mixed):(mixed)> $free_func
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetMemoryFunctions(?\FFI\CData $malloc_func, ?\FFI\CData $calloc_func, ?\FFI\CData $realloc_func, ?\FFI\CData $free_func): int;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetNumAllocations(): int;
        public function SDL_getenv(string|\FFI\CData $name): string|\FFI\CData;
        /**
         * @param int<-2147483648, 2147483647> $overwrite
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_setenv(string|\FFI\CData $name, string|\FFI\CData $value, int $overwrite): int;
        /**
         * @param int<0, max> $nmemb
         * @param int<0, max> $size
         * @param null|\FFI\CData<callable(mixed, mixed):(int<-2147483648, 2147483647>)> $compare
         */
        public function SDL_qsort(?\FFI\CData $base, int $nmemb, int $size, ?\FFI\CData $compare): void;
        /**
         * @param int<0, max> $nmemb
         * @param int<0, max> $size
         * @param null|\FFI\CData<callable(mixed, mixed):(int<-2147483648, 2147483647>)> $compare
         */
        public function SDL_bsearch(?\FFI\CData $key, ?\FFI\CData $base, int $nmemb, int $size, ?\FFI\CData $compare): ?\FFI\CData;
        /**
         * @param int<-2147483648, 2147483647> $x
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_abs(int $x): int;
        /**
         * @param int<-2147483648, 2147483647> $x
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_isalpha(int $x): int;
        /**
         * @param int<-2147483648, 2147483647> $x
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_isalnum(int $x): int;
        /**
         * @param int<-2147483648, 2147483647> $x
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_isblank(int $x): int;
        /**
         * @param int<-2147483648, 2147483647> $x
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_iscntrl(int $x): int;
        /**
         * @param int<-2147483648, 2147483647> $x
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_isdigit(int $x): int;
        /**
         * @param int<-2147483648, 2147483647> $x
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_isxdigit(int $x): int;
        /**
         * @param int<-2147483648, 2147483647> $x
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_ispunct(int $x): int;
        /**
         * @param int<-2147483648, 2147483647> $x
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_isspace(int $x): int;
        /**
         * @param int<-2147483648, 2147483647> $x
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_isupper(int $x): int;
        /**
         * @param int<-2147483648, 2147483647> $x
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_islower(int $x): int;
        /**
         * @param int<-2147483648, 2147483647> $x
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_isprint(int $x): int;
        /**
         * @param int<-2147483648, 2147483647> $x
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_isgraph(int $x): int;
        /**
         * @param int<-2147483648, 2147483647> $x
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_toupper(int $x): int;
        /**
         * @param int<-2147483648, 2147483647> $x
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_tolower(int $x): int;
        /**
         * @param int<0, 65536> $crc
         * @param int<0, max> $len
         * @return int<0, 65536>
         */
        public function SDL_crc16(int $crc, ?\FFI\CData $data, int $len): int;
        /**
         * @param int<0, 4294967296> $crc
         * @param int<0, max> $len
         * @return int<0, 4294967296>
         */
        public function SDL_crc32(int $crc, ?\FFI\CData $data, int $len): int;
        /**
         * @param int<-2147483648, 2147483647> $c
         * @param int<0, max> $len
         */
        public function SDL_memset(?\FFI\CData $dst, int $c, int $len): ?\FFI\CData;
        /**
         * @param int<0, 4294967296> $val
         * @param int<0, max> $dwords
         */
        public function SDL_memset4(?\FFI\CData $dst, int $val, int $dwords): void;
        /**
         * @param int<0, max> $len
         */
        public function SDL_memcpy(?\FFI\CData $dst, ?\FFI\CData $src, int $len): ?\FFI\CData;
        /**
         * @param int<0, max> $len
         */
        public function SDL_memmove(?\FFI\CData $dst, ?\FFI\CData $src, int $len): ?\FFI\CData;
        /**
         * @param int<0, max> $len
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_memcmp(?\FFI\CData $s1, ?\FFI\CData $s2, int $len): int;
        /**
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $wstr
         * @return int<0, max>
         */
        public function SDL_wcslen(?\FFI\CData $wstr): int;
        /**
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $dst
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $src
         * @param int<0, max> $maxlen
         * @return int<0, max>
         */
        public function SDL_wcslcpy(?\FFI\CData $dst, ?\FFI\CData $src, int $maxlen): int;
        /**
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $dst
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $src
         * @param int<0, max> $maxlen
         * @return int<0, max>
         */
        public function SDL_wcslcat(?\FFI\CData $dst, ?\FFI\CData $src, int $maxlen): int;
        /**
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $wstr
         * @return null|\FFI\CData<int<-2147483648, 2147483647>>
         */
        public function SDL_wcsdup(?\FFI\CData $wstr): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $haystack
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $needle
         * @return null|\FFI\CData<int<-2147483648, 2147483647>>
         */
        public function SDL_wcsstr(?\FFI\CData $haystack, ?\FFI\CData $needle): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $str1
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $str2
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_wcscmp(?\FFI\CData $str1, ?\FFI\CData $str2): int;
        /**
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $str1
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $str2
         * @param int<0, max> $maxlen
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_wcsncmp(?\FFI\CData $str1, ?\FFI\CData $str2, int $maxlen): int;
        /**
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $str1
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $str2
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_wcscasecmp(?\FFI\CData $str1, ?\FFI\CData $str2): int;
        /**
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $str1
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $str2
         * @param int<0, max> $len
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_wcsncasecmp(?\FFI\CData $str1, ?\FFI\CData $str2, int $len): int;
        /**
         * @return int<0, max>
         */
        public function SDL_strlen(string|\FFI\CData $str): int;
        /**
         * @param int<0, max> $maxlen
         * @return int<0, max>
         */
        public function SDL_strlcpy(string|\FFI\CData $dst, string|\FFI\CData $src, int $maxlen): int;
        /**
         * @param int<0, max> $dst_bytes
         * @return int<0, max>
         */
        public function SDL_utf8strlcpy(string|\FFI\CData $dst, string|\FFI\CData $src, int $dst_bytes): int;
        /**
         * @param int<0, max> $maxlen
         * @return int<0, max>
         */
        public function SDL_strlcat(string|\FFI\CData $dst, string|\FFI\CData $src, int $maxlen): int;
        public function SDL_strdup(string|\FFI\CData $str): string|\FFI\CData;
        public function SDL_strrev(string|\FFI\CData $str): string|\FFI\CData;
        public function SDL_strupr(string|\FFI\CData $str): string|\FFI\CData;
        public function SDL_strlwr(string|\FFI\CData $str): string|\FFI\CData;
        /**
         * @param int<-2147483648, 2147483647> $c
         */
        public function SDL_strchr(string|\FFI\CData $str, int $c): string|\FFI\CData;
        /**
         * @param int<-2147483648, 2147483647> $c
         */
        public function SDL_strrchr(string|\FFI\CData $str, int $c): string|\FFI\CData;
        public function SDL_strstr(string|\FFI\CData $haystack, string|\FFI\CData $needle): string|\FFI\CData;
        public function SDL_strcasestr(string|\FFI\CData $haystack, string|\FFI\CData $needle): string|\FFI\CData;
        public function SDL_strtokr(string|\FFI\CData $s1, string|\FFI\CData $s2, ?\FFI\CData $saveptr): string|\FFI\CData;
        /**
         * @return int<0, max>
         */
        public function SDL_utf8strlen(string|\FFI\CData $str): int;
        /**
         * @param int<0, max> $bytes
         * @return int<0, max>
         */
        public function SDL_utf8strnlen(string|\FFI\CData $str, int $bytes): int;
        /**
         * @param int<-2147483648, 2147483647> $value
         * @param int<-2147483648, 2147483647> $radix
         */
        public function SDL_itoa(int $value, string|\FFI\CData $str, int $radix): string|\FFI\CData;
        /**
         * @param int<0, 4294967296> $value
         * @param int<-2147483648, 2147483647> $radix
         */
        public function SDL_uitoa(int $value, string|\FFI\CData $str, int $radix): string|\FFI\CData;
        /**
         * @param int<min, max> $value
         * @param int<-2147483648, 2147483647> $radix
         */
        public function SDL_ltoa(int $value, string|\FFI\CData $str, int $radix): string|\FFI\CData;
        /**
         * @param int<0, max> $value
         * @param int<-2147483648, 2147483647> $radix
         */
        public function SDL_ultoa(int $value, string|\FFI\CData $str, int $radix): string|\FFI\CData;
        /**
         * @param int<min, max> $value
         * @param int<-2147483648, 2147483647> $radix
         */
        public function SDL_lltoa(int $value, string|\FFI\CData $str, int $radix): string|\FFI\CData;
        /**
         * @param int<0, max> $value
         * @param int<-2147483648, 2147483647> $radix
         */
        public function SDL_ulltoa(int $value, string|\FFI\CData $str, int $radix): string|\FFI\CData;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_atoi(string|\FFI\CData $str): int;
        public function SDL_atof(string|\FFI\CData $str): float;
        /**
         * @param int<-2147483648, 2147483647> $base
         * @return int<min, max>
         */
        public function SDL_strtol(string|\FFI\CData $str, ?\FFI\CData $endp, int $base): int;
        /**
         * @param int<-2147483648, 2147483647> $base
         * @return int<0, max>
         */
        public function SDL_strtoul(string|\FFI\CData $str, ?\FFI\CData $endp, int $base): int;
        /**
         * @param int<-2147483648, 2147483647> $base
         * @return int<min, max>
         */
        public function SDL_strtoll(string|\FFI\CData $str, ?\FFI\CData $endp, int $base): int;
        /**
         * @param int<-2147483648, 2147483647> $base
         * @return int<0, max>
         */
        public function SDL_strtoull(string|\FFI\CData $str, ?\FFI\CData $endp, int $base): int;
        public function SDL_strtod(string|\FFI\CData $str, ?\FFI\CData $endp): float;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_strcmp(string|\FFI\CData $str1, string|\FFI\CData $str2): int;
        /**
         * @param int<0, max> $maxlen
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_strncmp(string|\FFI\CData $str1, string|\FFI\CData $str2, int $maxlen): int;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_strcasecmp(string|\FFI\CData $str1, string|\FFI\CData $str2): int;
        /**
         * @param int<0, max> $len
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_strncasecmp(string|\FFI\CData $str1, string|\FFI\CData $str2, int $len): int;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_sscanf(string|\FFI\CData $text, string|\FFI\CData ...$fmt): int;
        /**
         * @param list<mixed> $ap
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_vsscanf(string|\FFI\CData $text, string|\FFI\CData $fmt, array $ap): int;
        /**
         * @param int<0, max> $maxlen
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_snprintf(string|\FFI\CData $text, int $maxlen, string|\FFI\CData ...$fmt): int;
        /**
         * @param int<0, max> $maxlen
         * @param list<mixed> $ap
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_vsnprintf(string|\FFI\CData $text, int $maxlen, string|\FFI\CData $fmt, array $ap): int;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_asprintf(?\FFI\CData $strp, string|\FFI\CData ...$fmt): int;
        /**
         * @param list<mixed> $ap
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_vasprintf(?\FFI\CData $strp, string|\FFI\CData $fmt, array $ap): int;
        public function SDL_acos(float $x): float;
        public function SDL_acosf(float $x): float;
        public function SDL_asin(float $x): float;
        public function SDL_asinf(float $x): float;
        public function SDL_atan(float $x): float;
        public function SDL_atanf(float $x): float;
        public function SDL_atan2(float $y, float $x): float;
        public function SDL_atan2f(float $y, float $x): float;
        public function SDL_ceil(float $x): float;
        public function SDL_ceilf(float $x): float;
        public function SDL_copysign(float $x, float $y): float;
        public function SDL_copysignf(float $x, float $y): float;
        public function SDL_cos(float $x): float;
        public function SDL_cosf(float $x): float;
        public function SDL_exp(float $x): float;
        public function SDL_expf(float $x): float;
        public function SDL_fabs(float $x): float;
        public function SDL_fabsf(float $x): float;
        public function SDL_floor(float $x): float;
        public function SDL_floorf(float $x): float;
        public function SDL_trunc(float $x): float;
        public function SDL_truncf(float $x): float;
        public function SDL_fmod(float $x, float $y): float;
        public function SDL_fmodf(float $x, float $y): float;
        public function SDL_log(float $x): float;
        public function SDL_logf(float $x): float;
        public function SDL_log10(float $x): float;
        public function SDL_log10f(float $x): float;
        public function SDL_pow(float $x, float $y): float;
        public function SDL_powf(float $x, float $y): float;
        public function SDL_round(float $x): float;
        public function SDL_roundf(float $x): float;
        /**
         * @return int<min, max>
         */
        public function SDL_lround(float $x): int;
        /**
         * @return int<min, max>
         */
        public function SDL_lroundf(float $x): int;
        /**
         * @param int<-2147483648, 2147483647> $n
         */
        public function SDL_scalbn(float $x, int $n): float;
        /**
         * @param int<-2147483648, 2147483647> $n
         */
        public function SDL_scalbnf(float $x, int $n): float;
        public function SDL_sin(float $x): float;
        public function SDL_sinf(float $x): float;
        public function SDL_sqrt(float $x): float;
        public function SDL_sqrtf(float $x): float;
        public function SDL_tan(float $x): float;
        public function SDL_tanf(float $x): float;
        public function SDL_iconv_open(string|\FFI\CData $tocode, string|\FFI\CData $fromcode): ?\FFI\CData;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_iconv_close(?\FFI\CData $cd): int;
        /**
         * @param null|\FFI\CData<int<0, max>> $inbytesleft
         * @param null|\FFI\CData<int<0, max>> $outbytesleft
         * @return int<0, max>
         */
        public function SDL_iconv(?\FFI\CData $cd, ?\FFI\CData $inbuf, ?\FFI\CData $inbytesleft, ?\FFI\CData $outbuf, ?\FFI\CData $outbytesleft): int;
        /**
         * @param int<0, max> $inbytesleft
         */
        public function SDL_iconv_string(string|\FFI\CData $tocode, string|\FFI\CData $fromcode, string|\FFI\CData $inbuf, int $inbytesleft): string|\FFI\CData;
        /**
         * @param int<0, max> $dwords
         */
        public function SDL_memcpy4(?\FFI\CData $dst, ?\FFI\CData $src, int $dwords): ?\FFI\CData;
        /**
         * @param int<0, max> $a
         * @param int<0, max> $b
         * @param null|\FFI\CData<int<0, max>> $ret
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_size_mul_overflow(int $a, int $b, ?\FFI\CData $ret): int;
        /**
         * @param int<0, max> $a
         * @param int<0, max> $b
         * @param null|\FFI\CData<int<0, max>> $ret
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_size_add_overflow(int $a, int $b, ?\FFI\CData $ret): int;
        /**
         * @param int<-2147483648, 2147483647> $argc
         * @param list<mixed> $argv
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_main(int $argc, array $argv): int;
        public function SDL_SetMainReady(): void;
        /**
         * @param int<0, 4294967296> $style
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RegisterApp(string|\FFI\CData $name, int $style, ?\FFI\CData $hInst): int;
        public function SDL_UnregisterApp(): void;
        /**
         * @param null|\FFI\CData<callable(int<-2147483648, 2147483647>, mixed):(int<-2147483648, 2147483647>)> $mainFunction
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_WinRTRunApp(?\FFI\CData $mainFunction, ?\FFI\CData $reserved): int;
        /**
         * @param null|\FFI\CData<callable(int<-2147483648, 2147483647>, mixed):(int<-2147483648, 2147483647>)> $mainFunction
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GDKRunApp(?\FFI\CData $mainFunction, ?\FFI\CData $reserved): int;
        public function SDL_GDKSuspendComplete(): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLAssertData> $_0
         * @param int<-2147483648, 2147483647> $_3
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Assert\State::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Assert\State::SDL_ASSERTION_RETRY, \Serafim\SDL\Assert\State::SDL_ASSERTION_BREAK, \Serafim\SDL\Assert\State::SDL_ASSERTION_ABORT, \Serafim\SDL\Assert\State::SDL_ASSERTION_IGNORE, \Serafim\SDL\Assert\State::SDL_ASSERTION_ALWAYS_IGNORE])]
        public function SDL_ReportAssertion(?\FFI\CData $_0, string|\FFI\CData $_1, string|\FFI\CData $_2, int $_3): int;
        /**
         * @param null|\FFI\CData<callable(null|\FFI\CData<\PHPSTORM_META\SDLAssertData>, mixed):(int<-2147483648, 2147483647>|\Serafim\SDL\Assert\State::*)> $handler
         */
        public function SDL_SetAssertionHandler(?\FFI\CData $handler, ?\FFI\CData $userdata): void;
        /**
         * @return null|\FFI\CData<callable(null|\FFI\CData<\PHPSTORM_META\SDLAssertData>, mixed):(int<-2147483648, 2147483647>|\Serafim\SDL\Assert\State::*)>
         */
        public function SDL_GetDefaultAssertionHandler(): ?\FFI\CData;
        /**
         * @return null|\FFI\CData<callable(null|\FFI\CData<\PHPSTORM_META\SDLAssertData>, mixed):(int<-2147483648, 2147483647>|\Serafim\SDL\Assert\State::*)>
         */
        public function SDL_GetAssertionHandler(?\FFI\CData $puserdata): ?\FFI\CData;
        /**
         * @return null|\FFI\CData<\PHPSTORM_META\SDLAssertData>
         */
        public function SDL_GetAssertionReport(): ?\FFI\CData;
        public function SDL_ResetAssertionReport(): void;
        /**
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $lock
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_AtomicTryLock(?\FFI\CData $lock): int;
        /**
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $lock
         */
        public function SDL_AtomicLock(?\FFI\CData $lock): void;
        /**
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $lock
         */
        public function SDL_AtomicUnlock(?\FFI\CData $lock): void;
        public function SDL_MemoryBarrierReleaseFunction(): void;
        public function SDL_MemoryBarrierAcquireFunction(): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLAtomicT|null|object{value:int<-2147483648, 2147483647>}> $a
         * @param int<-2147483648, 2147483647> $oldval
         * @param int<-2147483648, 2147483647> $newval
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_AtomicCAS(?\FFI\CData $a, int $oldval, int $newval): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLAtomicT|null|object{value:int<-2147483648, 2147483647>}> $a
         * @param int<-2147483648, 2147483647> $v
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_AtomicSet(?\FFI\CData $a, int $v): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLAtomicT|null|object{value:int<-2147483648, 2147483647>}> $a
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_AtomicGet(?\FFI\CData $a): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLAtomicT|null|object{value:int<-2147483648, 2147483647>}> $a
         * @param int<-2147483648, 2147483647> $v
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_AtomicAdd(?\FFI\CData $a, int $v): int;
        /**
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_AtomicCASPtr(?\FFI\CData $a, ?\FFI\CData $oldval, ?\FFI\CData $newval): int;
        public function SDL_AtomicSetPtr(?\FFI\CData $a, ?\FFI\CData $v): ?\FFI\CData;
        public function SDL_AtomicGetPtr(?\FFI\CData $a): ?\FFI\CData;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetError(string|\FFI\CData ...$fmt): int;
        public function SDL_GetError(): string|\FFI\CData;
        /**
         * @param int<-2147483648, 2147483647> $maxlen
         */
        public function SDL_GetErrorMsg(string|\FFI\CData $errstr, int $maxlen): string|\FFI\CData;
        public function SDL_ClearError(): void;
        /**
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\ErrorCode::* $code
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_Error(#[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\ErrorCode::SDL_ENOMEM, \Serafim\SDL\ErrorCode::SDL_EFREAD, \Serafim\SDL\ErrorCode::SDL_EFWRITE, \Serafim\SDL\ErrorCode::SDL_EFSEEK, \Serafim\SDL\ErrorCode::SDL_UNSUPPORTED, \Serafim\SDL\ErrorCode::SDL_LASTERROR])] int $code): int;
        /**
         * @param int<0, 65536> $x
         * @return int<0, 65536>
         */
        public function SDL_Swap16(int $x): int;
        /**
         * @param int<0, 4294967296> $x
         * @return int<0, 4294967296>
         */
        public function SDL_Swap32(int $x): int;
        /**
         * @param int<0, max> $x
         * @return int<0, max>
         */
        public function SDL_Swap64(int $x): int;
        public function SDL_SwapFloat(float $x): float;
        /**
         * @return null|\FFI\CData<\PHPSTORM_META\SDLMutex>
         */
        public function SDL_CreateMutex(): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLMutex> $mutex
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_LockMutex(?\FFI\CData $mutex): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLMutex> $mutex
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_TryLockMutex(?\FFI\CData $mutex): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLMutex> $mutex
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_UnlockMutex(?\FFI\CData $mutex): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLMutex> $mutex
         */
        public function SDL_DestroyMutex(?\FFI\CData $mutex): void;
        /**
         * @param int<0, 4294967296> $initial_value
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSem>
         */
        public function SDL_CreateSemaphore(int $initial_value): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSem> $sem
         */
        public function SDL_DestroySemaphore(?\FFI\CData $sem): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSem> $sem
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SemWait(?\FFI\CData $sem): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSem> $sem
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SemTryWait(?\FFI\CData $sem): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSem> $sem
         * @param int<0, 4294967296> $timeout
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SemWaitTimeout(?\FFI\CData $sem, int $timeout): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSem> $sem
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SemPost(?\FFI\CData $sem): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSem> $sem
         * @return int<0, 4294967296>
         */
        public function SDL_SemValue(?\FFI\CData $sem): int;
        /**
         * @return null|\FFI\CData<\PHPSTORM_META\SDLCond>
         */
        public function SDL_CreateCond(): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLCond> $cond
         */
        public function SDL_DestroyCond(?\FFI\CData $cond): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLCond> $cond
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_CondSignal(?\FFI\CData $cond): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLCond> $cond
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_CondBroadcast(?\FFI\CData $cond): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLCond> $cond
         * @param null|\FFI\CData<\PHPSTORM_META\SDLMutex> $mutex
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_CondWait(?\FFI\CData $cond, ?\FFI\CData $mutex): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLCond> $cond
         * @param null|\FFI\CData<\PHPSTORM_META\SDLMutex> $mutex
         * @param int<0, 4294967296> $ms
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_CondWaitTimeout(?\FFI\CData $cond, ?\FFI\CData $mutex, int $ms): int;
        /**
         * @param null|\FFI\CData<callable(mixed):(int<-2147483648, 2147483647>)> $fn
         * @return null|\FFI\CData<\PHPSTORM_META\SDLThread>
         */
        public function SDL_CreateThread(?\FFI\CData $fn, string|\FFI\CData $name, ?\FFI\CData $data): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<callable(mixed):(int<-2147483648, 2147483647>)> $fn
         * @param int<0, max> $stacksize
         * @return null|\FFI\CData<\PHPSTORM_META\SDLThread>
         */
        public function SDL_CreateThreadWithStackSize(?\FFI\CData $fn, string|\FFI\CData $name, int $stacksize, ?\FFI\CData $data): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLThread> $thread
         */
        public function SDL_GetThreadName(?\FFI\CData $thread): string|\FFI\CData;
        /**
         * @return int<0, max>
         */
        public function SDL_ThreadID(): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLThread> $thread
         * @return int<0, max>
         */
        public function SDL_GetThreadID(?\FFI\CData $thread): int;
        /**
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\ThreadPriority::* $priority
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetThreadPriority(#[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\ThreadPriority::SDL_THREAD_PRIORITY_LOW, \Serafim\SDL\ThreadPriority::SDL_THREAD_PRIORITY_NORMAL, \Serafim\SDL\ThreadPriority::SDL_THREAD_PRIORITY_HIGH, \Serafim\SDL\ThreadPriority::SDL_THREAD_PRIORITY_TIME_CRITICAL])] int $priority): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLThread> $thread
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $status
         */
        public function SDL_WaitThread(?\FFI\CData $thread, ?\FFI\CData $status): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLThread> $thread
         */
        public function SDL_DetachThread(?\FFI\CData $thread): void;
        /**
         * @return int<0, 4294967296>
         */
        public function SDL_TLSCreate(): int;
        /**
         * @param int<0, 4294967296> $id
         */
        public function SDL_TLSGet(int $id): ?\FFI\CData;
        /**
         * @param int<0, 4294967296> $id
         * @param null|\FFI\CData<callable(mixed):(mixed)> $destructor
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_TLSSet(int $id, ?\FFI\CData $value, ?\FFI\CData $destructor): int;
        public function SDL_TLSCleanup(): void;
        /**
         * @return null|\FFI\CData<\PHPSTORM_META\SDLRWops>
         */
        public function SDL_RWFromFile(string|\FFI\CData $file, string|\FFI\CData $mode): ?\FFI\CData;
        /**
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::* $autoclose
         * @return null|\FFI\CData<\PHPSTORM_META\SDLRWops>
         */
        public function SDL_RWFromFP(?\FFI\CData $fp, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])] int $autoclose): ?\FFI\CData;
        /**
         * @param int<-2147483648, 2147483647> $size
         * @return null|\FFI\CData<\PHPSTORM_META\SDLRWops>
         */
        public function SDL_RWFromMem(?\FFI\CData $mem, int $size): ?\FFI\CData;
        /**
         * @param int<-2147483648, 2147483647> $size
         * @return null|\FFI\CData<\PHPSTORM_META\SDLRWops>
         */
        public function SDL_RWFromConstMem(?\FFI\CData $mem, int $size): ?\FFI\CData;
        /**
         * @return null|\FFI\CData<\PHPSTORM_META\SDLRWops>
         */
        public function SDL_AllocRW(): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRWops> $area
         */
        public function SDL_FreeRW(?\FFI\CData $area): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRWops> $context
         * @return int<min, max>
         */
        public function SDL_RWsize(?\FFI\CData $context): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRWops> $context
         * @param int<min, max> $offset
         * @param int<-2147483648, 2147483647> $whence
         * @return int<min, max>
         */
        public function SDL_RWseek(?\FFI\CData $context, int $offset, int $whence): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRWops> $context
         * @return int<min, max>
         */
        public function SDL_RWtell(?\FFI\CData $context): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRWops> $context
         * @param int<0, max> $size
         * @param int<0, max> $maxnum
         * @return int<0, max>
         */
        public function SDL_RWread(?\FFI\CData $context, ?\FFI\CData $ptr, int $size, int $maxnum): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRWops> $context
         * @param int<0, max> $size
         * @param int<0, max> $num
         * @return int<0, max>
         */
        public function SDL_RWwrite(?\FFI\CData $context, ?\FFI\CData $ptr, int $size, int $num): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRWops> $context
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RWclose(?\FFI\CData $context): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRWops> $src
         * @param null|\FFI\CData<int<0, max>> $datasize
         * @param int<-2147483648, 2147483647> $freesrc
         */
        public function SDL_LoadFile_RW(?\FFI\CData $src, ?\FFI\CData $datasize, int $freesrc): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<int<0, max>> $datasize
         */
        public function SDL_LoadFile(string|\FFI\CData $file, ?\FFI\CData $datasize): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRWops> $src
         * @return int<0, 255>
         */
        public function SDL_ReadU8(?\FFI\CData $src): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRWops> $src
         * @return int<0, 65536>
         */
        public function SDL_ReadLE16(?\FFI\CData $src): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRWops> $src
         * @return int<0, 65536>
         */
        public function SDL_ReadBE16(?\FFI\CData $src): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRWops> $src
         * @return int<0, 4294967296>
         */
        public function SDL_ReadLE32(?\FFI\CData $src): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRWops> $src
         * @return int<0, 4294967296>
         */
        public function SDL_ReadBE32(?\FFI\CData $src): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRWops> $src
         * @return int<0, max>
         */
        public function SDL_ReadLE64(?\FFI\CData $src): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRWops> $src
         * @return int<0, max>
         */
        public function SDL_ReadBE64(?\FFI\CData $src): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRWops> $dst
         * @param int<0, 255> $value
         * @return int<0, max>
         */
        public function SDL_WriteU8(?\FFI\CData $dst, int $value): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRWops> $dst
         * @param int<0, 65536> $value
         * @return int<0, max>
         */
        public function SDL_WriteLE16(?\FFI\CData $dst, int $value): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRWops> $dst
         * @param int<0, 65536> $value
         * @return int<0, max>
         */
        public function SDL_WriteBE16(?\FFI\CData $dst, int $value): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRWops> $dst
         * @param int<0, 4294967296> $value
         * @return int<0, max>
         */
        public function SDL_WriteLE32(?\FFI\CData $dst, int $value): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRWops> $dst
         * @param int<0, 4294967296> $value
         * @return int<0, max>
         */
        public function SDL_WriteBE32(?\FFI\CData $dst, int $value): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRWops> $dst
         * @param int<0, max> $value
         * @return int<0, max>
         */
        public function SDL_WriteLE64(?\FFI\CData $dst, int $value): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRWops> $dst
         * @param int<0, max> $value
         * @return int<0, max>
         */
        public function SDL_WriteBE64(?\FFI\CData $dst, int $value): int;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetNumAudioDrivers(): int;
        /**
         * @param int<-2147483648, 2147483647> $index
         */
        public function SDL_GetAudioDriver(int $index): string|\FFI\CData;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_AudioInit(string|\FFI\CData $driver_name): int;
        public function SDL_AudioQuit(): void;
        public function SDL_GetCurrentAudioDriver(): string|\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLAudioSpec> $desired
         * @param null|\FFI\CData<\PHPSTORM_META\SDLAudioSpec> $obtained
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_OpenAudio(?\FFI\CData $desired, ?\FFI\CData $obtained): int;
        /**
         * @param int<-2147483648, 2147483647> $iscapture
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetNumAudioDevices(int $iscapture): int;
        /**
         * @param int<-2147483648, 2147483647> $index
         * @param int<-2147483648, 2147483647> $iscapture
         */
        public function SDL_GetAudioDeviceName(int $index, int $iscapture): string|\FFI\CData;
        /**
         * @param int<-2147483648, 2147483647> $index
         * @param int<-2147483648, 2147483647> $iscapture
         * @param null|\FFI\CData<\PHPSTORM_META\SDLAudioSpec> $spec
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetAudioDeviceSpec(int $index, int $iscapture, ?\FFI\CData $spec): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLAudioSpec> $spec
         * @param int<-2147483648, 2147483647> $iscapture
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetDefaultAudioInfo(?\FFI\CData $name, ?\FFI\CData $spec, int $iscapture): int;
        /**
         * @param int<-2147483648, 2147483647> $iscapture
         * @param null|\FFI\CData<\PHPSTORM_META\SDLAudioSpec> $desired
         * @param null|\FFI\CData<\PHPSTORM_META\SDLAudioSpec> $obtained
         * @param int<-2147483648, 2147483647> $allowed_changes
         * @return int<0, 4294967296>
         */
        public function SDL_OpenAudioDevice(string|\FFI\CData $device, int $iscapture, ?\FFI\CData $desired, ?\FFI\CData $obtained, int $allowed_changes): int;
        /**
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Audio\Status::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Audio\Status::SDL_AUDIO_STOPPED, \Serafim\SDL\Audio\Status::SDL_AUDIO_PLAYING, \Serafim\SDL\Audio\Status::SDL_AUDIO_PAUSED])]
        public function SDL_GetAudioStatus(): int;
        /**
         * @param int<0, 4294967296> $dev
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Audio\Status::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Audio\Status::SDL_AUDIO_STOPPED, \Serafim\SDL\Audio\Status::SDL_AUDIO_PLAYING, \Serafim\SDL\Audio\Status::SDL_AUDIO_PAUSED])]
        public function SDL_GetAudioDeviceStatus(int $dev): int;
        /**
         * @param int<-2147483648, 2147483647> $pause_on
         */
        public function SDL_PauseAudio(int $pause_on): void;
        /**
         * @param int<0, 4294967296> $dev
         * @param int<-2147483648, 2147483647> $pause_on
         */
        public function SDL_PauseAudioDevice(int $dev, int $pause_on): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRWops> $src
         * @param int<-2147483648, 2147483647> $freesrc
         * @param null|\FFI\CData<\PHPSTORM_META\SDLAudioSpec> $spec
         * @param null|\FFI\CData<null|\FFI\CData<int<0, 255>>> $audio_buf
         * @param null|\FFI\CData<int<0, 4294967296>> $audio_len
         * @return null|\FFI\CData<\PHPSTORM_META\SDLAudioSpec>
         */
        public function SDL_LoadWAV_RW(?\FFI\CData $src, int $freesrc, ?\FFI\CData $spec, ?\FFI\CData $audio_buf, ?\FFI\CData $audio_len): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<int<0, 255>> $audio_buf
         */
        public function SDL_FreeWAV(?\FFI\CData $audio_buf): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLAudioCVT> $cvt
         * @param int<0, 65536> $src_format
         * @param int<0, 255> $src_channels
         * @param int<-2147483648, 2147483647> $src_rate
         * @param int<0, 65536> $dst_format
         * @param int<0, 255> $dst_channels
         * @param int<-2147483648, 2147483647> $dst_rate
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_BuildAudioCVT(?\FFI\CData $cvt, int $src_format, int $src_channels, int $src_rate, int $dst_format, int $dst_channels, int $dst_rate): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLAudioCVT> $cvt
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_ConvertAudio(?\FFI\CData $cvt): int;
        /**
         * @param int<0, 65536> $src_format
         * @param int<0, 255> $src_channels
         * @param int<-2147483648, 2147483647> $src_rate
         * @param int<0, 65536> $dst_format
         * @param int<0, 255> $dst_channels
         * @param int<-2147483648, 2147483647> $dst_rate
         * @return null|\FFI\CData<\PHPSTORM_META\SDLAudioStream>
         */
        public function SDL_NewAudioStream(int $src_format, int $src_channels, int $src_rate, int $dst_format, int $dst_channels, int $dst_rate): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLAudioStream> $stream
         * @param int<-2147483648, 2147483647> $len
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_AudioStreamPut(?\FFI\CData $stream, ?\FFI\CData $buf, int $len): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLAudioStream> $stream
         * @param int<-2147483648, 2147483647> $len
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_AudioStreamGet(?\FFI\CData $stream, ?\FFI\CData $buf, int $len): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLAudioStream> $stream
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_AudioStreamAvailable(?\FFI\CData $stream): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLAudioStream> $stream
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_AudioStreamFlush(?\FFI\CData $stream): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLAudioStream> $stream
         */
        public function SDL_AudioStreamClear(?\FFI\CData $stream): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLAudioStream> $stream
         */
        public function SDL_FreeAudioStream(?\FFI\CData $stream): void;
        /**
         * @param null|\FFI\CData<int<0, 255>> $dst
         * @param null|\FFI\CData<int<0, 255>> $src
         * @param int<0, 4294967296> $len
         * @param int<-2147483648, 2147483647> $volume
         */
        public function SDL_MixAudio(?\FFI\CData $dst, ?\FFI\CData $src, int $len, int $volume): void;
        /**
         * @param null|\FFI\CData<int<0, 255>> $dst
         * @param null|\FFI\CData<int<0, 255>> $src
         * @param int<0, 65536> $format
         * @param int<0, 4294967296> $len
         * @param int<-2147483648, 2147483647> $volume
         */
        public function SDL_MixAudioFormat(?\FFI\CData $dst, ?\FFI\CData $src, int $format, int $len, int $volume): void;
        /**
         * @param int<0, 4294967296> $dev
         * @param int<0, 4294967296> $len
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_QueueAudio(int $dev, ?\FFI\CData $data, int $len): int;
        /**
         * @param int<0, 4294967296> $dev
         * @param int<0, 4294967296> $len
         * @return int<0, 4294967296>
         */
        public function SDL_DequeueAudio(int $dev, ?\FFI\CData $data, int $len): int;
        /**
         * @param int<0, 4294967296> $dev
         * @return int<0, 4294967296>
         */
        public function SDL_GetQueuedAudioSize(int $dev): int;
        /**
         * @param int<0, 4294967296> $dev
         */
        public function SDL_ClearQueuedAudio(int $dev): void;
        public function SDL_LockAudio(): void;
        /**
         * @param int<0, 4294967296> $dev
         */
        public function SDL_LockAudioDevice(int $dev): void;
        public function SDL_UnlockAudio(): void;
        /**
         * @param int<0, 4294967296> $dev
         */
        public function SDL_UnlockAudioDevice(int $dev): void;
        public function SDL_CloseAudio(): void;
        /**
         * @param int<0, 4294967296> $dev
         */
        public function SDL_CloseAudioDevice(int $dev): void;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetClipboardText(string|\FFI\CData $text): int;
        public function SDL_GetClipboardText(): string|\FFI\CData;
        /**
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_HasClipboardText(): int;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetPrimarySelectionText(string|\FFI\CData $text): int;
        public function SDL_GetPrimarySelectionText(): string|\FFI\CData;
        /**
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_HasPrimarySelectionText(): int;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetCPUCount(): int;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetCPUCacheLineSize(): int;
        /**
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_HasRDTSC(): int;
        /**
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_HasAltiVec(): int;
        /**
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_HasMMX(): int;
        /**
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_Has3DNow(): int;
        /**
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_HasSSE(): int;
        /**
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_HasSSE2(): int;
        /**
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_HasSSE3(): int;
        /**
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_HasSSE41(): int;
        /**
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_HasSSE42(): int;
        /**
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_HasAVX(): int;
        /**
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_HasAVX2(): int;
        /**
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_HasAVX512F(): int;
        /**
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_HasARMSIMD(): int;
        /**
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_HasNEON(): int;
        /**
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_HasLSX(): int;
        /**
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_HasLASX(): int;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetSystemRAM(): int;
        /**
         * @return int<0, max>
         */
        public function SDL_SIMDGetAlignment(): int;
        /**
         * @param int<0, max> $len
         */
        public function SDL_SIMDAlloc(int $len): ?\FFI\CData;
        /**
         * @param int<0, max> $len
         */
        public function SDL_SIMDRealloc(?\FFI\CData $mem, int $len): ?\FFI\CData;
        public function SDL_SIMDFree(?\FFI\CData $ptr): void;
        /**
         * @param int<0, 4294967296> $format
         */
        public function SDL_GetPixelFormatName(int $format): string|\FFI\CData;
        /**
         * @param int<0, 4294967296> $format
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $bpp
         * @param null|\FFI\CData<int<0, 4294967296>> $Rmask
         * @param null|\FFI\CData<int<0, 4294967296>> $Gmask
         * @param null|\FFI\CData<int<0, 4294967296>> $Bmask
         * @param null|\FFI\CData<int<0, 4294967296>> $Amask
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_PixelFormatEnumToMasks(int $format, ?\FFI\CData $bpp, ?\FFI\CData $Rmask, ?\FFI\CData $Gmask, ?\FFI\CData $Bmask, ?\FFI\CData $Amask): int;
        /**
         * @param int<-2147483648, 2147483647> $bpp
         * @param int<0, 4294967296> $Rmask
         * @param int<0, 4294967296> $Gmask
         * @param int<0, 4294967296> $Bmask
         * @param int<0, 4294967296> $Amask
         * @return int<0, 4294967296>
         */
        public function SDL_MasksToPixelFormatEnum(int $bpp, int $Rmask, int $Gmask, int $Bmask, int $Amask): int;
        /**
         * @param int<0, 4294967296> $pixel_format
         * @return null|\FFI\CData<\PHPSTORM_META\SDLPixelFormat>
         */
        public function SDL_AllocFormat(int $pixel_format): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLPixelFormat> $format
         */
        public function SDL_FreeFormat(?\FFI\CData $format): void;
        /**
         * @param int<-2147483648, 2147483647> $ncolors
         * @return null|\FFI\CData<\PHPSTORM_META\SDLPalette>
         */
        public function SDL_AllocPalette(int $ncolors): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLPixelFormat> $format
         * @param null|\FFI\CData<\PHPSTORM_META\SDLPalette> $palette
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetPixelFormatPalette(?\FFI\CData $format, ?\FFI\CData $palette): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLPalette> $palette
         * @param null|\FFI\CData<\PHPSTORM_META\SDLColor> $colors
         * @param int<-2147483648, 2147483647> $firstcolor
         * @param int<-2147483648, 2147483647> $ncolors
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetPaletteColors(?\FFI\CData $palette, ?\FFI\CData $colors, int $firstcolor, int $ncolors): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLPalette> $palette
         */
        public function SDL_FreePalette(?\FFI\CData $palette): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLPixelFormat> $format
         * @param int<0, 255> $r
         * @param int<0, 255> $g
         * @param int<0, 255> $b
         * @return int<0, 4294967296>
         */
        public function SDL_MapRGB(?\FFI\CData $format, int $r, int $g, int $b): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLPixelFormat> $format
         * @param int<0, 255> $r
         * @param int<0, 255> $g
         * @param int<0, 255> $b
         * @param int<0, 255> $a
         * @return int<0, 4294967296>
         */
        public function SDL_MapRGBA(?\FFI\CData $format, int $r, int $g, int $b, int $a): int;
        /**
         * @param int<0, 4294967296> $pixel
         * @param null|\FFI\CData<\PHPSTORM_META\SDLPixelFormat> $format
         * @param null|\FFI\CData<int<0, 255>> $r
         * @param null|\FFI\CData<int<0, 255>> $g
         * @param null|\FFI\CData<int<0, 255>> $b
         */
        public function SDL_GetRGB(int $pixel, ?\FFI\CData $format, ?\FFI\CData $r, ?\FFI\CData $g, ?\FFI\CData $b): void;
        /**
         * @param int<0, 4294967296> $pixel
         * @param null|\FFI\CData<\PHPSTORM_META\SDLPixelFormat> $format
         * @param null|\FFI\CData<int<0, 255>> $r
         * @param null|\FFI\CData<int<0, 255>> $g
         * @param null|\FFI\CData<int<0, 255>> $b
         * @param null|\FFI\CData<int<0, 255>> $a
         */
        public function SDL_GetRGBA(int $pixel, ?\FFI\CData $format, ?\FFI\CData $r, ?\FFI\CData $g, ?\FFI\CData $b, ?\FFI\CData $a): void;
        /**
         * @param null|\FFI\CData<int<0, 65536>> $ramp
         */
        public function SDL_CalculateGammaRamp(float $gamma, ?\FFI\CData $ramp): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLPoint> $p
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $r
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_PointInRect(?\FFI\CData $p, ?\FFI\CData $r): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $r
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_RectEmpty(?\FFI\CData $r): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $a
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $b
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_RectEquals(?\FFI\CData $a, ?\FFI\CData $b): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $A
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $B
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_HasIntersection(?\FFI\CData $A, ?\FFI\CData $B): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $A
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $B
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $result
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_IntersectRect(?\FFI\CData $A, ?\FFI\CData $B, ?\FFI\CData $result): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $A
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $B
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $result
         */
        public function SDL_UnionRect(?\FFI\CData $A, ?\FFI\CData $B, ?\FFI\CData $result): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLPoint> $points
         * @param int<-2147483648, 2147483647> $count
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $clip
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $result
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_EnclosePoints(?\FFI\CData $points, int $count, ?\FFI\CData $clip, ?\FFI\CData $result): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $rect
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $X1
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $Y1
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $X2
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $Y2
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_IntersectRectAndLine(?\FFI\CData $rect, ?\FFI\CData $X1, ?\FFI\CData $Y1, ?\FFI\CData $X2, ?\FFI\CData $Y2): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLFPoint> $p
         * @param null|\FFI\CData<\PHPSTORM_META\SDLFRect> $r
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_PointInFRect(?\FFI\CData $p, ?\FFI\CData $r): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLFRect> $r
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_FRectEmpty(?\FFI\CData $r): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLFRect> $a
         * @param null|\FFI\CData<\PHPSTORM_META\SDLFRect> $b
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_FRectEqualsEpsilon(?\FFI\CData $a, ?\FFI\CData $b, float $epsilon): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLFRect> $a
         * @param null|\FFI\CData<\PHPSTORM_META\SDLFRect> $b
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_FRectEquals(?\FFI\CData $a, ?\FFI\CData $b): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLFRect> $A
         * @param null|\FFI\CData<\PHPSTORM_META\SDLFRect> $B
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_HasIntersectionF(?\FFI\CData $A, ?\FFI\CData $B): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLFRect> $A
         * @param null|\FFI\CData<\PHPSTORM_META\SDLFRect> $B
         * @param null|\FFI\CData<\PHPSTORM_META\SDLFRect> $result
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_IntersectFRect(?\FFI\CData $A, ?\FFI\CData $B, ?\FFI\CData $result): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLFRect> $A
         * @param null|\FFI\CData<\PHPSTORM_META\SDLFRect> $B
         * @param null|\FFI\CData<\PHPSTORM_META\SDLFRect> $result
         */
        public function SDL_UnionFRect(?\FFI\CData $A, ?\FFI\CData $B, ?\FFI\CData $result): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLFPoint> $points
         * @param int<-2147483648, 2147483647> $count
         * @param null|\FFI\CData<\PHPSTORM_META\SDLFRect> $clip
         * @param null|\FFI\CData<\PHPSTORM_META\SDLFRect> $result
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_EncloseFPoints(?\FFI\CData $points, int $count, ?\FFI\CData $clip, ?\FFI\CData $result): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLFRect> $rect
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_IntersectFRectAndLine(?\FFI\CData $rect, ?\FFI\CData $X1, ?\FFI\CData $Y1, ?\FFI\CData $X2, ?\FFI\CData $Y2): int;
        /**
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Video\BlendFactor::* $srcColorFactor
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Video\BlendFactor::* $dstColorFactor
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Video\BlendOperation::* $colorOperation
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Video\BlendFactor::* $srcAlphaFactor
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Video\BlendFactor::* $dstAlphaFactor
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Video\BlendOperation::* $alphaOperation
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Video\BlendMode::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Video\BlendMode::SDL_BLENDMODE_NONE, \Serafim\SDL\Video\BlendMode::SDL_BLENDMODE_BLEND, \Serafim\SDL\Video\BlendMode::SDL_BLENDMODE_ADD, \Serafim\SDL\Video\BlendMode::SDL_BLENDMODE_MOD, \Serafim\SDL\Video\BlendMode::SDL_BLENDMODE_MUL, \Serafim\SDL\Video\BlendMode::SDL_BLENDMODE_INVALID])]
        public function SDL_ComposeCustomBlendMode(#[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_ZERO, \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_ONE, \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_SRC_COLOR, \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_ONE_MINUS_SRC_COLOR, \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_SRC_ALPHA, \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_ONE_MINUS_SRC_ALPHA, \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_DST_COLOR, \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_ONE_MINUS_DST_COLOR, \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_DST_ALPHA, \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_ONE_MINUS_DST_ALPHA])] int $srcColorFactor, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_ZERO, \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_ONE, \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_SRC_COLOR, \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_ONE_MINUS_SRC_COLOR, \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_SRC_ALPHA, \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_ONE_MINUS_SRC_ALPHA, \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_DST_COLOR, \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_ONE_MINUS_DST_COLOR, \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_DST_ALPHA, \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_ONE_MINUS_DST_ALPHA])] int $dstColorFactor, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Video\BlendOperation::SDL_BLENDOPERATION_ADD, \Serafim\SDL\Video\BlendOperation::SDL_BLENDOPERATION_SUBTRACT, \Serafim\SDL\Video\BlendOperation::SDL_BLENDOPERATION_REV_SUBTRACT, \Serafim\SDL\Video\BlendOperation::SDL_BLENDOPERATION_MINIMUM, \Serafim\SDL\Video\BlendOperation::SDL_BLENDOPERATION_MAXIMUM])] int $colorOperation, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_ZERO, \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_ONE, \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_SRC_COLOR, \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_ONE_MINUS_SRC_COLOR, \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_SRC_ALPHA, \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_ONE_MINUS_SRC_ALPHA, \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_DST_COLOR, \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_ONE_MINUS_DST_COLOR, \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_DST_ALPHA, \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_ONE_MINUS_DST_ALPHA])] int $srcAlphaFactor, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_ZERO, \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_ONE, \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_SRC_COLOR, \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_ONE_MINUS_SRC_COLOR, \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_SRC_ALPHA, \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_ONE_MINUS_SRC_ALPHA, \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_DST_COLOR, \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_ONE_MINUS_DST_COLOR, \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_DST_ALPHA, \Serafim\SDL\Video\BlendFactor::SDL_BLENDFACTOR_ONE_MINUS_DST_ALPHA])] int $dstAlphaFactor, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Video\BlendOperation::SDL_BLENDOPERATION_ADD, \Serafim\SDL\Video\BlendOperation::SDL_BLENDOPERATION_SUBTRACT, \Serafim\SDL\Video\BlendOperation::SDL_BLENDOPERATION_REV_SUBTRACT, \Serafim\SDL\Video\BlendOperation::SDL_BLENDOPERATION_MINIMUM, \Serafim\SDL\Video\BlendOperation::SDL_BLENDOPERATION_MAXIMUM])] int $alphaOperation): int;
        /**
         * @param int<0, 4294967296> $flags
         * @param int<-2147483648, 2147483647> $width
         * @param int<-2147483648, 2147483647> $height
         * @param int<-2147483648, 2147483647> $depth
         * @param int<0, 4294967296> $Rmask
         * @param int<0, 4294967296> $Gmask
         * @param int<0, 4294967296> $Bmask
         * @param int<0, 4294967296> $Amask
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function SDL_CreateRGBSurface(int $flags, int $width, int $height, int $depth, int $Rmask, int $Gmask, int $Bmask, int $Amask): ?\FFI\CData;
        /**
         * @param int<0, 4294967296> $flags
         * @param int<-2147483648, 2147483647> $width
         * @param int<-2147483648, 2147483647> $height
         * @param int<-2147483648, 2147483647> $depth
         * @param int<0, 4294967296> $format
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function SDL_CreateRGBSurfaceWithFormat(int $flags, int $width, int $height, int $depth, int $format): ?\FFI\CData;
        /**
         * @param int<-2147483648, 2147483647> $width
         * @param int<-2147483648, 2147483647> $height
         * @param int<-2147483648, 2147483647> $depth
         * @param int<-2147483648, 2147483647> $pitch
         * @param int<0, 4294967296> $Rmask
         * @param int<0, 4294967296> $Gmask
         * @param int<0, 4294967296> $Bmask
         * @param int<0, 4294967296> $Amask
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function SDL_CreateRGBSurfaceFrom(?\FFI\CData $pixels, int $width, int $height, int $depth, int $pitch, int $Rmask, int $Gmask, int $Bmask, int $Amask): ?\FFI\CData;
        /**
         * @param int<-2147483648, 2147483647> $width
         * @param int<-2147483648, 2147483647> $height
         * @param int<-2147483648, 2147483647> $depth
         * @param int<-2147483648, 2147483647> $pitch
         * @param int<0, 4294967296> $format
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function SDL_CreateRGBSurfaceWithFormatFrom(?\FFI\CData $pixels, int $width, int $height, int $depth, int $pitch, int $format): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSurface> $surface
         */
        public function SDL_FreeSurface(?\FFI\CData $surface): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSurface> $surface
         * @param null|\FFI\CData<\PHPSTORM_META\SDLPalette> $palette
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetSurfacePalette(?\FFI\CData $surface, ?\FFI\CData $palette): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSurface> $surface
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_LockSurface(?\FFI\CData $surface): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSurface> $surface
         */
        public function SDL_UnlockSurface(?\FFI\CData $surface): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRWops> $src
         * @param int<-2147483648, 2147483647> $freesrc
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function SDL_LoadBMP_RW(?\FFI\CData $src, int $freesrc): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSurface> $surface
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRWops> $dst
         * @param int<-2147483648, 2147483647> $freedst
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SaveBMP_RW(?\FFI\CData $surface, ?\FFI\CData $dst, int $freedst): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSurface> $surface
         * @param int<-2147483648, 2147483647> $flag
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetSurfaceRLE(?\FFI\CData $surface, int $flag): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSurface> $surface
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_HasSurfaceRLE(?\FFI\CData $surface): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSurface> $surface
         * @param int<-2147483648, 2147483647> $flag
         * @param int<0, 4294967296> $key
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetColorKey(?\FFI\CData $surface, int $flag, int $key): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSurface> $surface
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_HasColorKey(?\FFI\CData $surface): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSurface> $surface
         * @param null|\FFI\CData<int<0, 4294967296>> $key
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetColorKey(?\FFI\CData $surface, ?\FFI\CData $key): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSurface> $surface
         * @param int<0, 255> $r
         * @param int<0, 255> $g
         * @param int<0, 255> $b
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetSurfaceColorMod(?\FFI\CData $surface, int $r, int $g, int $b): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSurface> $surface
         * @param null|\FFI\CData<int<0, 255>> $r
         * @param null|\FFI\CData<int<0, 255>> $g
         * @param null|\FFI\CData<int<0, 255>> $b
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetSurfaceColorMod(?\FFI\CData $surface, ?\FFI\CData $r, ?\FFI\CData $g, ?\FFI\CData $b): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSurface> $surface
         * @param int<0, 255> $alpha
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetSurfaceAlphaMod(?\FFI\CData $surface, int $alpha): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSurface> $surface
         * @param null|\FFI\CData<int<0, 255>> $alpha
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetSurfaceAlphaMod(?\FFI\CData $surface, ?\FFI\CData $alpha): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSurface> $surface
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Video\BlendMode::* $blendMode
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetSurfaceBlendMode(?\FFI\CData $surface, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Video\BlendMode::SDL_BLENDMODE_NONE, \Serafim\SDL\Video\BlendMode::SDL_BLENDMODE_BLEND, \Serafim\SDL\Video\BlendMode::SDL_BLENDMODE_ADD, \Serafim\SDL\Video\BlendMode::SDL_BLENDMODE_MOD, \Serafim\SDL\Video\BlendMode::SDL_BLENDMODE_MUL, \Serafim\SDL\Video\BlendMode::SDL_BLENDMODE_INVALID])] int $blendMode): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSurface> $surface
         * @param null|\FFI\CData<int<-2147483648, 2147483647>|\Serafim\SDL\Video\BlendMode::*> $blendMode
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetSurfaceBlendMode(?\FFI\CData $surface, ?\FFI\CData $blendMode): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSurface> $surface
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $rect
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_SetClipRect(?\FFI\CData $surface, ?\FFI\CData $rect): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSurface> $surface
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $rect
         */
        public function SDL_GetClipRect(?\FFI\CData $surface, ?\FFI\CData $rect): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSurface> $surface
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function SDL_DuplicateSurface(?\FFI\CData $surface): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSurface> $src
         * @param null|\FFI\CData<\PHPSTORM_META\SDLPixelFormat> $fmt
         * @param int<0, 4294967296> $flags
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function SDL_ConvertSurface(?\FFI\CData $src, ?\FFI\CData $fmt, int $flags): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSurface> $src
         * @param int<0, 4294967296> $pixel_format
         * @param int<0, 4294967296> $flags
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function SDL_ConvertSurfaceFormat(?\FFI\CData $src, int $pixel_format, int $flags): ?\FFI\CData;
        /**
         * @param int<-2147483648, 2147483647> $width
         * @param int<-2147483648, 2147483647> $height
         * @param int<0, 4294967296> $src_format
         * @param int<-2147483648, 2147483647> $src_pitch
         * @param int<0, 4294967296> $dst_format
         * @param int<-2147483648, 2147483647> $dst_pitch
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_ConvertPixels(int $width, int $height, int $src_format, ?\FFI\CData $src, int $src_pitch, int $dst_format, ?\FFI\CData $dst, int $dst_pitch): int;
        /**
         * @param int<-2147483648, 2147483647> $width
         * @param int<-2147483648, 2147483647> $height
         * @param int<0, 4294967296> $src_format
         * @param int<-2147483648, 2147483647> $src_pitch
         * @param int<0, 4294967296> $dst_format
         * @param int<-2147483648, 2147483647> $dst_pitch
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_PremultiplyAlpha(int $width, int $height, int $src_format, ?\FFI\CData $src, int $src_pitch, int $dst_format, ?\FFI\CData $dst, int $dst_pitch): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSurface> $dst
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $rect
         * @param int<0, 4294967296> $color
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_FillRect(?\FFI\CData $dst, ?\FFI\CData $rect, int $color): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSurface> $dst
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $rects
         * @param int<-2147483648, 2147483647> $count
         * @param int<0, 4294967296> $color
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_FillRects(?\FFI\CData $dst, ?\FFI\CData $rects, int $count, int $color): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSurface> $src
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $srcrect
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSurface> $dst
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $dstrect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_UpperBlit(?\FFI\CData $src, ?\FFI\CData $srcrect, ?\FFI\CData $dst, ?\FFI\CData $dstrect): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSurface> $src
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $srcrect
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSurface> $dst
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $dstrect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_LowerBlit(?\FFI\CData $src, ?\FFI\CData $srcrect, ?\FFI\CData $dst, ?\FFI\CData $dstrect): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSurface> $src
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $srcrect
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSurface> $dst
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $dstrect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SoftStretch(?\FFI\CData $src, ?\FFI\CData $srcrect, ?\FFI\CData $dst, ?\FFI\CData $dstrect): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSurface> $src
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $srcrect
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSurface> $dst
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $dstrect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SoftStretchLinear(?\FFI\CData $src, ?\FFI\CData $srcrect, ?\FFI\CData $dst, ?\FFI\CData $dstrect): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSurface> $src
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $srcrect
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSurface> $dst
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $dstrect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_UpperBlitScaled(?\FFI\CData $src, ?\FFI\CData $srcrect, ?\FFI\CData $dst, ?\FFI\CData $dstrect): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSurface> $src
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $srcrect
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSurface> $dst
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $dstrect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_LowerBlitScaled(?\FFI\CData $src, ?\FFI\CData $srcrect, ?\FFI\CData $dst, ?\FFI\CData $dstrect): int;
        /**
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Video\YuvConversionMode::* $mode
         */
        public function SDL_SetYUVConversionMode(#[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Video\YuvConversionMode::SDL_YUV_CONVERSION_JPEG, \Serafim\SDL\Video\YuvConversionMode::SDL_YUV_CONVERSION_BT601, \Serafim\SDL\Video\YuvConversionMode::SDL_YUV_CONVERSION_BT709, \Serafim\SDL\Video\YuvConversionMode::SDL_YUV_CONVERSION_AUTOMATIC])] int $mode): void;
        /**
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Video\YuvConversionMode::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Video\YuvConversionMode::SDL_YUV_CONVERSION_JPEG, \Serafim\SDL\Video\YuvConversionMode::SDL_YUV_CONVERSION_BT601, \Serafim\SDL\Video\YuvConversionMode::SDL_YUV_CONVERSION_BT709, \Serafim\SDL\Video\YuvConversionMode::SDL_YUV_CONVERSION_AUTOMATIC])]
        public function SDL_GetYUVConversionMode(): int;
        /**
         * @param int<-2147483648, 2147483647> $width
         * @param int<-2147483648, 2147483647> $height
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Video\YuvConversionMode::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Video\YuvConversionMode::SDL_YUV_CONVERSION_JPEG, \Serafim\SDL\Video\YuvConversionMode::SDL_YUV_CONVERSION_BT601, \Serafim\SDL\Video\YuvConversionMode::SDL_YUV_CONVERSION_BT709, \Serafim\SDL\Video\YuvConversionMode::SDL_YUV_CONVERSION_AUTOMATIC])]
        public function SDL_GetYUVConversionModeForResolution(int $width, int $height): int;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetNumVideoDrivers(): int;
        /**
         * @param int<-2147483648, 2147483647> $index
         */
        public function SDL_GetVideoDriver(int $index): string|\FFI\CData;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_VideoInit(string|\FFI\CData $driver_name): int;
        public function SDL_VideoQuit(): void;
        public function SDL_GetCurrentVideoDriver(): string|\FFI\CData;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetNumVideoDisplays(): int;
        /**
         * @param int<-2147483648, 2147483647> $displayIndex
         */
        public function SDL_GetDisplayName(int $displayIndex): string|\FFI\CData;
        /**
         * @param int<-2147483648, 2147483647> $displayIndex
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $rect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetDisplayBounds(int $displayIndex, ?\FFI\CData $rect): int;
        /**
         * @param int<-2147483648, 2147483647> $displayIndex
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $rect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetDisplayUsableBounds(int $displayIndex, ?\FFI\CData $rect): int;
        /**
         * @param int<-2147483648, 2147483647> $displayIndex
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetDisplayDPI(int $displayIndex, ?\FFI\CData $ddpi, ?\FFI\CData $hdpi, ?\FFI\CData $vdpi): int;
        /**
         * @param int<-2147483648, 2147483647> $displayIndex
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Video\DisplayOrientation::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Video\DisplayOrientation::SDL_ORIENTATION_UNKNOWN, \Serafim\SDL\Video\DisplayOrientation::SDL_ORIENTATION_LANDSCAPE, \Serafim\SDL\Video\DisplayOrientation::SDL_ORIENTATION_LANDSCAPE_FLIPPED, \Serafim\SDL\Video\DisplayOrientation::SDL_ORIENTATION_PORTRAIT, \Serafim\SDL\Video\DisplayOrientation::SDL_ORIENTATION_PORTRAIT_FLIPPED])]
        public function SDL_GetDisplayOrientation(int $displayIndex): int;
        /**
         * @param int<-2147483648, 2147483647> $displayIndex
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetNumDisplayModes(int $displayIndex): int;
        /**
         * @param int<-2147483648, 2147483647> $displayIndex
         * @param int<-2147483648, 2147483647> $modeIndex
         * @param null|\FFI\CData<\PHPSTORM_META\SDLDisplayMode|null|object{format:int<0, 4294967296>, w:int<-2147483648, 2147483647>, h:int<-2147483648, 2147483647>, refresh_rate:int<-2147483648, 2147483647>, driverdata:mixed}> $mode
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetDisplayMode(int $displayIndex, int $modeIndex, ?\FFI\CData $mode): int;
        /**
         * @param int<-2147483648, 2147483647> $displayIndex
         * @param null|\FFI\CData<\PHPSTORM_META\SDLDisplayMode|null|object{format:int<0, 4294967296>, w:int<-2147483648, 2147483647>, h:int<-2147483648, 2147483647>, refresh_rate:int<-2147483648, 2147483647>, driverdata:mixed}> $mode
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetDesktopDisplayMode(int $displayIndex, ?\FFI\CData $mode): int;
        /**
         * @param int<-2147483648, 2147483647> $displayIndex
         * @param null|\FFI\CData<\PHPSTORM_META\SDLDisplayMode|null|object{format:int<0, 4294967296>, w:int<-2147483648, 2147483647>, h:int<-2147483648, 2147483647>, refresh_rate:int<-2147483648, 2147483647>, driverdata:mixed}> $mode
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetCurrentDisplayMode(int $displayIndex, ?\FFI\CData $mode): int;
        /**
         * @param int<-2147483648, 2147483647> $displayIndex
         * @param null|\FFI\CData<\PHPSTORM_META\SDLDisplayMode|null|object{format:int<0, 4294967296>, w:int<-2147483648, 2147483647>, h:int<-2147483648, 2147483647>, refresh_rate:int<-2147483648, 2147483647>, driverdata:mixed}> $mode
         * @param null|\FFI\CData<\PHPSTORM_META\SDLDisplayMode|null|object{format:int<0, 4294967296>, w:int<-2147483648, 2147483647>, h:int<-2147483648, 2147483647>, refresh_rate:int<-2147483648, 2147483647>, driverdata:mixed}> $closest
         * @return null|\FFI\CData<\PHPSTORM_META\SDLDisplayMode|null|object{format:int<0, 4294967296>, w:int<-2147483648, 2147483647>, h:int<-2147483648, 2147483647>, refresh_rate:int<-2147483648, 2147483647>, driverdata:mixed}>
         */
        public function SDL_GetClosestDisplayMode(int $displayIndex, ?\FFI\CData $mode, ?\FFI\CData $closest): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLPoint> $point
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetPointDisplayIndex(?\FFI\CData $point): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $rect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetRectDisplayIndex(?\FFI\CData $rect): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetWindowDisplayIndex(?\FFI\CData $window): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @param null|\FFI\CData<\PHPSTORM_META\SDLDisplayMode|null|object{format:int<0, 4294967296>, w:int<-2147483648, 2147483647>, h:int<-2147483648, 2147483647>, refresh_rate:int<-2147483648, 2147483647>, driverdata:mixed}> $mode
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetWindowDisplayMode(?\FFI\CData $window, ?\FFI\CData $mode): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @param null|\FFI\CData<\PHPSTORM_META\SDLDisplayMode|null|object{format:int<0, 4294967296>, w:int<-2147483648, 2147483647>, h:int<-2147483648, 2147483647>, refresh_rate:int<-2147483648, 2147483647>, driverdata:mixed}> $mode
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetWindowDisplayMode(?\FFI\CData $window, ?\FFI\CData $mode): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @param null|\FFI\CData<int<0, max>> $size
         */
        public function SDL_GetWindowICCProfile(?\FFI\CData $window, ?\FFI\CData $size): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @return int<0, 4294967296>
         */
        public function SDL_GetWindowPixelFormat(?\FFI\CData $window): int;
        /**
         * @param int<-2147483648, 2147483647> $x
         * @param int<-2147483648, 2147483647> $y
         * @param int<-2147483648, 2147483647> $w
         * @param int<-2147483648, 2147483647> $h
         * @param int<0, 4294967296> $flags
         * @return null|\FFI\CData<\PHPSTORM_META\SDLWindow>
         */
        public function SDL_CreateWindow(string|\FFI\CData $title, int $x, int $y, int $w, int $h, int $flags): ?\FFI\CData;
        /**
         * @return null|\FFI\CData<\PHPSTORM_META\SDLWindow>
         */
        public function SDL_CreateWindowFrom(?\FFI\CData $data): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @return int<0, 4294967296>
         */
        public function SDL_GetWindowID(?\FFI\CData $window): int;
        /**
         * @param int<0, 4294967296> $id
         * @return null|\FFI\CData<\PHPSTORM_META\SDLWindow>
         */
        public function SDL_GetWindowFromID(int $id): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @return int<0, 4294967296>
         */
        public function SDL_GetWindowFlags(?\FFI\CData $window): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         */
        public function SDL_SetWindowTitle(?\FFI\CData $window, string|\FFI\CData $title): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         */
        public function SDL_GetWindowTitle(?\FFI\CData $window): string|\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSurface> $icon
         */
        public function SDL_SetWindowIcon(?\FFI\CData $window, ?\FFI\CData $icon): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         */
        public function SDL_SetWindowData(?\FFI\CData $window, string|\FFI\CData $name, ?\FFI\CData $userdata): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         */
        public function SDL_GetWindowData(?\FFI\CData $window, string|\FFI\CData $name): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @param int<-2147483648, 2147483647> $x
         * @param int<-2147483648, 2147483647> $y
         */
        public function SDL_SetWindowPosition(?\FFI\CData $window, int $x, int $y): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $x
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $y
         */
        public function SDL_GetWindowPosition(?\FFI\CData $window, ?\FFI\CData $x, ?\FFI\CData $y): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @param int<-2147483648, 2147483647> $w
         * @param int<-2147483648, 2147483647> $h
         */
        public function SDL_SetWindowSize(?\FFI\CData $window, int $w, int $h): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $w
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $h
         */
        public function SDL_GetWindowSize(?\FFI\CData $window, ?\FFI\CData $w, ?\FFI\CData $h): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $top
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $left
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $bottom
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $right
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetWindowBordersSize(?\FFI\CData $window, ?\FFI\CData $top, ?\FFI\CData $left, ?\FFI\CData $bottom, ?\FFI\CData $right): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $w
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $h
         */
        public function SDL_GetWindowSizeInPixels(?\FFI\CData $window, ?\FFI\CData $w, ?\FFI\CData $h): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @param int<-2147483648, 2147483647> $min_w
         * @param int<-2147483648, 2147483647> $min_h
         */
        public function SDL_SetWindowMinimumSize(?\FFI\CData $window, int $min_w, int $min_h): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $w
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $h
         */
        public function SDL_GetWindowMinimumSize(?\FFI\CData $window, ?\FFI\CData $w, ?\FFI\CData $h): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @param int<-2147483648, 2147483647> $max_w
         * @param int<-2147483648, 2147483647> $max_h
         */
        public function SDL_SetWindowMaximumSize(?\FFI\CData $window, int $max_w, int $max_h): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $w
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $h
         */
        public function SDL_GetWindowMaximumSize(?\FFI\CData $window, ?\FFI\CData $w, ?\FFI\CData $h): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::* $bordered
         */
        public function SDL_SetWindowBordered(?\FFI\CData $window, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])] int $bordered): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::* $resizable
         */
        public function SDL_SetWindowResizable(?\FFI\CData $window, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])] int $resizable): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::* $on_top
         */
        public function SDL_SetWindowAlwaysOnTop(?\FFI\CData $window, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])] int $on_top): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         */
        public function SDL_ShowWindow(?\FFI\CData $window): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         */
        public function SDL_HideWindow(?\FFI\CData $window): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         */
        public function SDL_RaiseWindow(?\FFI\CData $window): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         */
        public function SDL_MaximizeWindow(?\FFI\CData $window): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         */
        public function SDL_MinimizeWindow(?\FFI\CData $window): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         */
        public function SDL_RestoreWindow(?\FFI\CData $window): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @param int<0, 4294967296> $flags
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetWindowFullscreen(?\FFI\CData $window, int $flags): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_HasWindowSurface(?\FFI\CData $window): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function SDL_GetWindowSurface(?\FFI\CData $window): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_UpdateWindowSurface(?\FFI\CData $window): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $rects
         * @param int<-2147483648, 2147483647> $numrects
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_UpdateWindowSurfaceRects(?\FFI\CData $window, ?\FFI\CData $rects, int $numrects): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_DestroyWindowSurface(?\FFI\CData $window): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::* $grabbed
         */
        public function SDL_SetWindowGrab(?\FFI\CData $window, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])] int $grabbed): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::* $grabbed
         */
        public function SDL_SetWindowKeyboardGrab(?\FFI\CData $window, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])] int $grabbed): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::* $grabbed
         */
        public function SDL_SetWindowMouseGrab(?\FFI\CData $window, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])] int $grabbed): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_GetWindowGrab(?\FFI\CData $window): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_GetWindowKeyboardGrab(?\FFI\CData $window): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_GetWindowMouseGrab(?\FFI\CData $window): int;
        /**
         * @return null|\FFI\CData<\PHPSTORM_META\SDLWindow>
         */
        public function SDL_GetGrabbedWindow(): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $rect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetWindowMouseRect(?\FFI\CData $window, ?\FFI\CData $rect): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @return null|\FFI\CData<\PHPSTORM_META\SDLRect>
         */
        public function SDL_GetWindowMouseRect(?\FFI\CData $window): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetWindowBrightness(?\FFI\CData $window, float $brightness): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         */
        public function SDL_GetWindowBrightness(?\FFI\CData $window): float;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetWindowOpacity(?\FFI\CData $window, float $opacity): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetWindowOpacity(?\FFI\CData $window, ?\FFI\CData $out_opacity): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $modal_window
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $parent_window
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetWindowModalFor(?\FFI\CData $modal_window, ?\FFI\CData $parent_window): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetWindowInputFocus(?\FFI\CData $window): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @param null|\FFI\CData<int<0, 65536>> $red
         * @param null|\FFI\CData<int<0, 65536>> $green
         * @param null|\FFI\CData<int<0, 65536>> $blue
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetWindowGammaRamp(?\FFI\CData $window, ?\FFI\CData $red, ?\FFI\CData $green, ?\FFI\CData $blue): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @param null|\FFI\CData<int<0, 65536>> $red
         * @param null|\FFI\CData<int<0, 65536>> $green
         * @param null|\FFI\CData<int<0, 65536>> $blue
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetWindowGammaRamp(?\FFI\CData $window, ?\FFI\CData $red, ?\FFI\CData $green, ?\FFI\CData $blue): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @param null|\FFI\CData<callable(null|\FFI\CData<\PHPSTORM_META\SDLWindow>, null|\FFI\CData<\PHPSTORM_META\SDLPoint>, mixed):(int<-2147483648, 2147483647>|\Serafim\SDL\Video\HitTestResult::*)> $callback
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetWindowHitTest(?\FFI\CData $window, ?\FFI\CData $callback, ?\FFI\CData $callback_data): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Video\FlashOperation::* $operation
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_FlashWindow(?\FFI\CData $window, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Video\FlashOperation::SDL_FLASH_CANCEL, \Serafim\SDL\Video\FlashOperation::SDL_FLASH_BRIEFLY, \Serafim\SDL\Video\FlashOperation::SDL_FLASH_UNTIL_FOCUSED])] int $operation): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         */
        public function SDL_DestroyWindow(?\FFI\CData $window): void;
        /**
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_IsScreenSaverEnabled(): int;
        public function SDL_EnableScreenSaver(): void;
        public function SDL_DisableScreenSaver(): void;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GL_LoadLibrary(string|\FFI\CData $path): int;
        public function SDL_GL_GetProcAddress(string|\FFI\CData $proc): ?\FFI\CData;
        public function SDL_GL_UnloadLibrary(): void;
        /**
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_GL_ExtensionSupported(string|\FFI\CData $extension): int;
        public function SDL_GL_ResetAttributes(): void;
        /**
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\OpenGL\GLAttr::* $attr
         * @param int<-2147483648, 2147483647> $value
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GL_SetAttribute(#[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\OpenGL\GLAttr::SDL_GL_RED_SIZE, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_GREEN_SIZE, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_BLUE_SIZE, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_ALPHA_SIZE, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_BUFFER_SIZE, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_DOUBLEBUFFER, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_DEPTH_SIZE, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_STENCIL_SIZE, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_ACCUM_RED_SIZE, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_ACCUM_GREEN_SIZE, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_ACCUM_BLUE_SIZE, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_ACCUM_ALPHA_SIZE, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_STEREO, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_MULTISAMPLEBUFFERS, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_MULTISAMPLESAMPLES, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_ACCELERATED_VISUAL, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_RETAINED_BACKING, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_CONTEXT_MAJOR_VERSION, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_CONTEXT_MINOR_VERSION, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_CONTEXT_EGL, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_CONTEXT_FLAGS, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_CONTEXT_PROFILE_MASK, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_SHARE_WITH_CURRENT_CONTEXT, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_FRAMEBUFFER_SRGB_CAPABLE, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_CONTEXT_RELEASE_BEHAVIOR, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_CONTEXT_RESET_NOTIFICATION, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_CONTEXT_NO_ERROR, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_FLOATBUFFERS])] int $attr, int $value): int;
        /**
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\OpenGL\GLAttr::* $attr
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $value
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GL_GetAttribute(#[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\OpenGL\GLAttr::SDL_GL_RED_SIZE, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_GREEN_SIZE, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_BLUE_SIZE, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_ALPHA_SIZE, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_BUFFER_SIZE, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_DOUBLEBUFFER, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_DEPTH_SIZE, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_STENCIL_SIZE, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_ACCUM_RED_SIZE, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_ACCUM_GREEN_SIZE, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_ACCUM_BLUE_SIZE, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_ACCUM_ALPHA_SIZE, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_STEREO, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_MULTISAMPLEBUFFERS, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_MULTISAMPLESAMPLES, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_ACCELERATED_VISUAL, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_RETAINED_BACKING, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_CONTEXT_MAJOR_VERSION, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_CONTEXT_MINOR_VERSION, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_CONTEXT_EGL, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_CONTEXT_FLAGS, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_CONTEXT_PROFILE_MASK, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_SHARE_WITH_CURRENT_CONTEXT, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_FRAMEBUFFER_SRGB_CAPABLE, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_CONTEXT_RELEASE_BEHAVIOR, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_CONTEXT_RESET_NOTIFICATION, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_CONTEXT_NO_ERROR, \Serafim\SDL\OpenGL\GLAttr::SDL_GL_FLOATBUFFERS])] int $attr, ?\FFI\CData $value): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         */
        public function SDL_GL_CreateContext(?\FFI\CData $window): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GL_MakeCurrent(?\FFI\CData $window, ?\FFI\CData $context): int;
        /**
         * @return null|\FFI\CData<\PHPSTORM_META\SDLWindow>
         */
        public function SDL_GL_GetCurrentWindow(): ?\FFI\CData;
        public function SDL_GL_GetCurrentContext(): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $w
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $h
         */
        public function SDL_GL_GetDrawableSize(?\FFI\CData $window, ?\FFI\CData $w, ?\FFI\CData $h): void;
        /**
         * @param int<-2147483648, 2147483647> $interval
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GL_SetSwapInterval(int $interval): int;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GL_GetSwapInterval(): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         */
        public function SDL_GL_SwapWindow(?\FFI\CData $window): void;
        public function SDL_GL_DeleteContext(?\FFI\CData $context): void;
        /**
         * @return null|\FFI\CData<\PHPSTORM_META\SDLWindow>
         */
        public function SDL_GetKeyboardFocus(): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $numkeys
         * @return null|\FFI\CData<int<0, 255>>
         */
        public function SDL_GetKeyboardState(?\FFI\CData $numkeys): ?\FFI\CData;
        public function SDL_ResetKeyboard(): void;
        /**
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Keyboard\KeyMode::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Keyboard\KeyMode::KMOD_NONE, \Serafim\SDL\Keyboard\KeyMode::KMOD_LSHIFT, \Serafim\SDL\Keyboard\KeyMode::KMOD_RSHIFT, \Serafim\SDL\Keyboard\KeyMode::KMOD_LCTRL, \Serafim\SDL\Keyboard\KeyMode::KMOD_RCTRL, \Serafim\SDL\Keyboard\KeyMode::KMOD_LALT, \Serafim\SDL\Keyboard\KeyMode::KMOD_RALT, \Serafim\SDL\Keyboard\KeyMode::KMOD_LGUI, \Serafim\SDL\Keyboard\KeyMode::KMOD_RGUI, \Serafim\SDL\Keyboard\KeyMode::KMOD_NUM, \Serafim\SDL\Keyboard\KeyMode::KMOD_CAPS, \Serafim\SDL\Keyboard\KeyMode::KMOD_MODE, \Serafim\SDL\Keyboard\KeyMode::KMOD_SCROLL, \Serafim\SDL\Keyboard\KeyMode::KMOD_CTRL, \Serafim\SDL\Keyboard\KeyMode::KMOD_SHIFT, \Serafim\SDL\Keyboard\KeyMode::KMOD_ALT, \Serafim\SDL\Keyboard\KeyMode::KMOD_GUI, \Serafim\SDL\Keyboard\KeyMode::KMOD_RESERVED])]
        public function SDL_GetModState(): int;
        /**
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Keyboard\KeyMode::* $modstate
         */
        public function SDL_SetModState(#[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Keyboard\KeyMode::KMOD_NONE, \Serafim\SDL\Keyboard\KeyMode::KMOD_LSHIFT, \Serafim\SDL\Keyboard\KeyMode::KMOD_RSHIFT, \Serafim\SDL\Keyboard\KeyMode::KMOD_LCTRL, \Serafim\SDL\Keyboard\KeyMode::KMOD_RCTRL, \Serafim\SDL\Keyboard\KeyMode::KMOD_LALT, \Serafim\SDL\Keyboard\KeyMode::KMOD_RALT, \Serafim\SDL\Keyboard\KeyMode::KMOD_LGUI, \Serafim\SDL\Keyboard\KeyMode::KMOD_RGUI, \Serafim\SDL\Keyboard\KeyMode::KMOD_NUM, \Serafim\SDL\Keyboard\KeyMode::KMOD_CAPS, \Serafim\SDL\Keyboard\KeyMode::KMOD_MODE, \Serafim\SDL\Keyboard\KeyMode::KMOD_SCROLL, \Serafim\SDL\Keyboard\KeyMode::KMOD_CTRL, \Serafim\SDL\Keyboard\KeyMode::KMOD_SHIFT, \Serafim\SDL\Keyboard\KeyMode::KMOD_ALT, \Serafim\SDL\Keyboard\KeyMode::KMOD_GUI, \Serafim\SDL\Keyboard\KeyMode::KMOD_RESERVED])] int $modstate): void;
        /**
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Keyboard\ScanCode::* $scancode
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetKeyFromScancode(#[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_UNKNOWN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_A, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_B, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_C, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_D, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_E, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_G, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_H, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_I, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_J, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_K, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_L, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_M, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_N, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_O, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_P, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_Q, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_R, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_S, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_T, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_U, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_V, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_W, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_X, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_Y, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_Z, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_1, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_2, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_3, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_4, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_5, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_6, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_7, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_8, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_9, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_0, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_RETURN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_ESCAPE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_BACKSPACE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_TAB, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SPACE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_MINUS, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_EQUALS, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LEFTBRACKET, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_RIGHTBRACKET, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_BACKSLASH, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_NONUSHASH, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SEMICOLON, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_APOSTROPHE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_GRAVE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_COMMA, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_PERIOD, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SLASH, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CAPSLOCK, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F1, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F2, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F3, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F4, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F5, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F6, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F7, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F8, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F9, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F10, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F11, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F12, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_PRINTSCREEN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SCROLLLOCK, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_PAUSE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INSERT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_HOME, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_PAGEUP, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_DELETE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_END, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_PAGEDOWN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_RIGHT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LEFT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_DOWN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_UP, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_NUMLOCKCLEAR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_DIVIDE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MULTIPLY, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MINUS, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_PLUS, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_ENTER, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_1, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_2, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_3, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_4, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_5, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_6, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_7, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_8, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_9, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_0, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_PERIOD, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_NONUSBACKSLASH, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_APPLICATION, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_POWER, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_EQUALS, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F13, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F14, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F15, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F16, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F17, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F18, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F19, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F20, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F21, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F22, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F23, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F24, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_EXECUTE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_HELP, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_MENU, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SELECT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_STOP, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AGAIN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_UNDO, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CUT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_COPY, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_PASTE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_FIND, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_MUTE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_VOLUMEUP, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_VOLUMEDOWN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_COMMA, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_EQUALSAS400, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL1, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL2, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL3, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL4, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL5, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL6, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL7, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL8, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL9, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG1, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG2, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG3, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG4, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG5, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG6, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG7, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG8, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG9, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_ALTERASE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SYSREQ, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CANCEL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CLEAR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_PRIOR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_RETURN2, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SEPARATOR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_OUT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_OPER, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CLEARAGAIN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CRSEL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_EXSEL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_00, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_000, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_THOUSANDSSEPARATOR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_DECIMALSEPARATOR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CURRENCYUNIT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CURRENCYSUBUNIT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_LEFTPAREN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_RIGHTPAREN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_LEFTBRACE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_RIGHTBRACE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_TAB, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_BACKSPACE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_A, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_B, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_C, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_D, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_E, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_F, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_XOR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_POWER, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_PERCENT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_LESS, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_GREATER, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_AMPERSAND, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_DBLAMPERSAND, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_VERTICALBAR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_DBLVERTICALBAR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_COLON, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_HASH, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_SPACE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_AT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_EXCLAM, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MEMSTORE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MEMRECALL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MEMCLEAR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MEMADD, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MEMSUBTRACT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MEMMULTIPLY, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MEMDIVIDE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_PLUSMINUS, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_CLEAR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_CLEARENTRY, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_BINARY, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_OCTAL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_DECIMAL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_HEXADECIMAL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LCTRL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LSHIFT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LALT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LGUI, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_RCTRL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_RSHIFT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_RALT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_RGUI, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_MODE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AUDIONEXT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AUDIOPREV, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AUDIOSTOP, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AUDIOPLAY, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AUDIOMUTE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_MEDIASELECT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_WWW, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_MAIL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CALCULATOR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_COMPUTER, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AC_SEARCH, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AC_HOME, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AC_BACK, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AC_FORWARD, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AC_STOP, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AC_REFRESH, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AC_BOOKMARKS, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_BRIGHTNESSDOWN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_BRIGHTNESSUP, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_DISPLAYSWITCH, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KBDILLUMTOGGLE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KBDILLUMDOWN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KBDILLUMUP, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_EJECT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SLEEP, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_APP1, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_APP2, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AUDIOREWIND, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AUDIOFASTFORWARD, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SOFTLEFT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SOFTRIGHT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CALL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_ENDCALL, \Serafim\SDL\Keyboard\ScanCode::SDL_NUM_SCANCODES])] int $scancode): int;
        /**
         * @param int<-2147483648, 2147483647> $key
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Keyboard\ScanCode::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_UNKNOWN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_A, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_B, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_C, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_D, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_E, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_G, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_H, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_I, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_J, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_K, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_L, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_M, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_N, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_O, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_P, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_Q, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_R, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_S, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_T, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_U, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_V, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_W, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_X, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_Y, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_Z, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_1, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_2, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_3, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_4, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_5, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_6, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_7, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_8, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_9, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_0, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_RETURN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_ESCAPE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_BACKSPACE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_TAB, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SPACE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_MINUS, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_EQUALS, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LEFTBRACKET, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_RIGHTBRACKET, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_BACKSLASH, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_NONUSHASH, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SEMICOLON, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_APOSTROPHE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_GRAVE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_COMMA, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_PERIOD, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SLASH, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CAPSLOCK, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F1, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F2, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F3, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F4, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F5, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F6, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F7, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F8, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F9, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F10, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F11, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F12, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_PRINTSCREEN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SCROLLLOCK, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_PAUSE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INSERT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_HOME, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_PAGEUP, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_DELETE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_END, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_PAGEDOWN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_RIGHT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LEFT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_DOWN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_UP, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_NUMLOCKCLEAR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_DIVIDE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MULTIPLY, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MINUS, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_PLUS, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_ENTER, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_1, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_2, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_3, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_4, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_5, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_6, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_7, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_8, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_9, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_0, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_PERIOD, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_NONUSBACKSLASH, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_APPLICATION, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_POWER, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_EQUALS, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F13, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F14, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F15, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F16, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F17, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F18, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F19, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F20, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F21, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F22, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F23, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F24, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_EXECUTE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_HELP, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_MENU, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SELECT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_STOP, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AGAIN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_UNDO, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CUT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_COPY, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_PASTE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_FIND, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_MUTE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_VOLUMEUP, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_VOLUMEDOWN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_COMMA, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_EQUALSAS400, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL1, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL2, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL3, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL4, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL5, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL6, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL7, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL8, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL9, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG1, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG2, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG3, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG4, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG5, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG6, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG7, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG8, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG9, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_ALTERASE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SYSREQ, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CANCEL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CLEAR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_PRIOR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_RETURN2, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SEPARATOR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_OUT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_OPER, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CLEARAGAIN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CRSEL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_EXSEL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_00, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_000, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_THOUSANDSSEPARATOR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_DECIMALSEPARATOR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CURRENCYUNIT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CURRENCYSUBUNIT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_LEFTPAREN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_RIGHTPAREN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_LEFTBRACE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_RIGHTBRACE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_TAB, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_BACKSPACE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_A, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_B, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_C, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_D, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_E, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_F, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_XOR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_POWER, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_PERCENT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_LESS, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_GREATER, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_AMPERSAND, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_DBLAMPERSAND, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_VERTICALBAR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_DBLVERTICALBAR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_COLON, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_HASH, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_SPACE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_AT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_EXCLAM, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MEMSTORE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MEMRECALL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MEMCLEAR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MEMADD, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MEMSUBTRACT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MEMMULTIPLY, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MEMDIVIDE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_PLUSMINUS, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_CLEAR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_CLEARENTRY, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_BINARY, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_OCTAL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_DECIMAL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_HEXADECIMAL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LCTRL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LSHIFT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LALT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LGUI, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_RCTRL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_RSHIFT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_RALT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_RGUI, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_MODE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AUDIONEXT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AUDIOPREV, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AUDIOSTOP, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AUDIOPLAY, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AUDIOMUTE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_MEDIASELECT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_WWW, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_MAIL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CALCULATOR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_COMPUTER, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AC_SEARCH, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AC_HOME, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AC_BACK, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AC_FORWARD, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AC_STOP, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AC_REFRESH, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AC_BOOKMARKS, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_BRIGHTNESSDOWN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_BRIGHTNESSUP, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_DISPLAYSWITCH, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KBDILLUMTOGGLE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KBDILLUMDOWN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KBDILLUMUP, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_EJECT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SLEEP, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_APP1, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_APP2, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AUDIOREWIND, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AUDIOFASTFORWARD, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SOFTLEFT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SOFTRIGHT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CALL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_ENDCALL, \Serafim\SDL\Keyboard\ScanCode::SDL_NUM_SCANCODES])]
        public function SDL_GetScancodeFromKey(int $key): int;
        /**
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Keyboard\ScanCode::* $scancode
         */
        public function SDL_GetScancodeName(#[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_UNKNOWN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_A, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_B, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_C, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_D, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_E, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_G, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_H, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_I, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_J, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_K, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_L, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_M, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_N, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_O, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_P, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_Q, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_R, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_S, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_T, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_U, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_V, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_W, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_X, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_Y, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_Z, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_1, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_2, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_3, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_4, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_5, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_6, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_7, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_8, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_9, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_0, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_RETURN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_ESCAPE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_BACKSPACE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_TAB, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SPACE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_MINUS, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_EQUALS, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LEFTBRACKET, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_RIGHTBRACKET, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_BACKSLASH, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_NONUSHASH, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SEMICOLON, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_APOSTROPHE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_GRAVE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_COMMA, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_PERIOD, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SLASH, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CAPSLOCK, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F1, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F2, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F3, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F4, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F5, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F6, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F7, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F8, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F9, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F10, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F11, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F12, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_PRINTSCREEN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SCROLLLOCK, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_PAUSE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INSERT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_HOME, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_PAGEUP, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_DELETE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_END, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_PAGEDOWN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_RIGHT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LEFT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_DOWN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_UP, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_NUMLOCKCLEAR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_DIVIDE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MULTIPLY, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MINUS, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_PLUS, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_ENTER, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_1, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_2, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_3, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_4, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_5, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_6, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_7, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_8, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_9, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_0, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_PERIOD, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_NONUSBACKSLASH, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_APPLICATION, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_POWER, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_EQUALS, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F13, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F14, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F15, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F16, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F17, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F18, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F19, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F20, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F21, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F22, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F23, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F24, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_EXECUTE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_HELP, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_MENU, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SELECT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_STOP, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AGAIN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_UNDO, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CUT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_COPY, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_PASTE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_FIND, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_MUTE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_VOLUMEUP, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_VOLUMEDOWN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_COMMA, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_EQUALSAS400, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL1, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL2, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL3, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL4, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL5, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL6, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL7, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL8, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL9, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG1, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG2, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG3, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG4, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG5, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG6, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG7, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG8, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG9, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_ALTERASE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SYSREQ, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CANCEL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CLEAR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_PRIOR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_RETURN2, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SEPARATOR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_OUT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_OPER, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CLEARAGAIN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CRSEL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_EXSEL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_00, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_000, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_THOUSANDSSEPARATOR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_DECIMALSEPARATOR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CURRENCYUNIT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CURRENCYSUBUNIT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_LEFTPAREN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_RIGHTPAREN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_LEFTBRACE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_RIGHTBRACE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_TAB, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_BACKSPACE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_A, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_B, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_C, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_D, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_E, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_F, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_XOR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_POWER, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_PERCENT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_LESS, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_GREATER, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_AMPERSAND, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_DBLAMPERSAND, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_VERTICALBAR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_DBLVERTICALBAR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_COLON, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_HASH, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_SPACE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_AT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_EXCLAM, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MEMSTORE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MEMRECALL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MEMCLEAR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MEMADD, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MEMSUBTRACT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MEMMULTIPLY, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MEMDIVIDE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_PLUSMINUS, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_CLEAR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_CLEARENTRY, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_BINARY, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_OCTAL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_DECIMAL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_HEXADECIMAL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LCTRL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LSHIFT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LALT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LGUI, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_RCTRL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_RSHIFT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_RALT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_RGUI, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_MODE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AUDIONEXT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AUDIOPREV, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AUDIOSTOP, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AUDIOPLAY, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AUDIOMUTE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_MEDIASELECT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_WWW, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_MAIL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CALCULATOR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_COMPUTER, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AC_SEARCH, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AC_HOME, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AC_BACK, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AC_FORWARD, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AC_STOP, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AC_REFRESH, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AC_BOOKMARKS, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_BRIGHTNESSDOWN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_BRIGHTNESSUP, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_DISPLAYSWITCH, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KBDILLUMTOGGLE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KBDILLUMDOWN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KBDILLUMUP, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_EJECT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SLEEP, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_APP1, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_APP2, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AUDIOREWIND, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AUDIOFASTFORWARD, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SOFTLEFT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SOFTRIGHT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CALL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_ENDCALL, \Serafim\SDL\Keyboard\ScanCode::SDL_NUM_SCANCODES])] int $scancode): string|\FFI\CData;
        /**
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Keyboard\ScanCode::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_UNKNOWN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_A, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_B, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_C, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_D, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_E, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_G, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_H, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_I, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_J, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_K, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_L, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_M, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_N, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_O, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_P, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_Q, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_R, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_S, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_T, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_U, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_V, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_W, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_X, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_Y, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_Z, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_1, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_2, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_3, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_4, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_5, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_6, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_7, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_8, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_9, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_0, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_RETURN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_ESCAPE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_BACKSPACE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_TAB, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SPACE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_MINUS, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_EQUALS, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LEFTBRACKET, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_RIGHTBRACKET, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_BACKSLASH, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_NONUSHASH, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SEMICOLON, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_APOSTROPHE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_GRAVE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_COMMA, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_PERIOD, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SLASH, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CAPSLOCK, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F1, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F2, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F3, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F4, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F5, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F6, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F7, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F8, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F9, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F10, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F11, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F12, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_PRINTSCREEN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SCROLLLOCK, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_PAUSE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INSERT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_HOME, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_PAGEUP, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_DELETE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_END, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_PAGEDOWN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_RIGHT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LEFT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_DOWN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_UP, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_NUMLOCKCLEAR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_DIVIDE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MULTIPLY, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MINUS, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_PLUS, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_ENTER, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_1, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_2, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_3, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_4, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_5, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_6, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_7, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_8, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_9, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_0, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_PERIOD, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_NONUSBACKSLASH, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_APPLICATION, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_POWER, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_EQUALS, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F13, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F14, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F15, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F16, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F17, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F18, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F19, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F20, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F21, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F22, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F23, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_F24, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_EXECUTE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_HELP, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_MENU, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SELECT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_STOP, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AGAIN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_UNDO, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CUT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_COPY, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_PASTE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_FIND, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_MUTE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_VOLUMEUP, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_VOLUMEDOWN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_COMMA, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_EQUALSAS400, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL1, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL2, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL3, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL4, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL5, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL6, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL7, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL8, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_INTERNATIONAL9, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG1, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG2, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG3, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG4, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG5, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG6, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG7, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG8, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LANG9, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_ALTERASE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SYSREQ, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CANCEL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CLEAR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_PRIOR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_RETURN2, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SEPARATOR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_OUT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_OPER, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CLEARAGAIN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CRSEL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_EXSEL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_00, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_000, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_THOUSANDSSEPARATOR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_DECIMALSEPARATOR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CURRENCYUNIT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CURRENCYSUBUNIT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_LEFTPAREN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_RIGHTPAREN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_LEFTBRACE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_RIGHTBRACE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_TAB, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_BACKSPACE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_A, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_B, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_C, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_D, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_E, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_F, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_XOR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_POWER, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_PERCENT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_LESS, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_GREATER, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_AMPERSAND, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_DBLAMPERSAND, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_VERTICALBAR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_DBLVERTICALBAR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_COLON, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_HASH, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_SPACE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_AT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_EXCLAM, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MEMSTORE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MEMRECALL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MEMCLEAR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MEMADD, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MEMSUBTRACT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MEMMULTIPLY, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_MEMDIVIDE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_PLUSMINUS, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_CLEAR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_CLEARENTRY, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_BINARY, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_OCTAL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_DECIMAL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KP_HEXADECIMAL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LCTRL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LSHIFT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LALT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_LGUI, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_RCTRL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_RSHIFT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_RALT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_RGUI, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_MODE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AUDIONEXT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AUDIOPREV, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AUDIOSTOP, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AUDIOPLAY, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AUDIOMUTE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_MEDIASELECT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_WWW, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_MAIL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CALCULATOR, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_COMPUTER, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AC_SEARCH, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AC_HOME, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AC_BACK, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AC_FORWARD, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AC_STOP, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AC_REFRESH, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AC_BOOKMARKS, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_BRIGHTNESSDOWN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_BRIGHTNESSUP, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_DISPLAYSWITCH, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KBDILLUMTOGGLE, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KBDILLUMDOWN, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_KBDILLUMUP, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_EJECT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SLEEP, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_APP1, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_APP2, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AUDIOREWIND, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_AUDIOFASTFORWARD, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SOFTLEFT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_SOFTRIGHT, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_CALL, \Serafim\SDL\Keyboard\ScanCode::SDL_SCANCODE_ENDCALL, \Serafim\SDL\Keyboard\ScanCode::SDL_NUM_SCANCODES])]
        public function SDL_GetScancodeFromName(string|\FFI\CData $name): int;
        /**
         * @param int<-2147483648, 2147483647> $key
         */
        public function SDL_GetKeyName(int $key): string|\FFI\CData;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetKeyFromName(string|\FFI\CData $name): int;
        public function SDL_StartTextInput(): void;
        /**
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_IsTextInputActive(): int;
        public function SDL_StopTextInput(): void;
        public function SDL_ClearComposition(): void;
        /**
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_IsTextInputShown(): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $rect
         */
        public function SDL_SetTextInputRect(?\FFI\CData $rect): void;
        /**
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_HasScreenKeyboardSupport(): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_IsScreenKeyboardShown(?\FFI\CData $window): int;
        /**
         * @return null|\FFI\CData<\PHPSTORM_META\SDLWindow>
         */
        public function SDL_GetMouseFocus(): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $x
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $y
         * @return int<0, 4294967296>
         */
        public function SDL_GetMouseState(?\FFI\CData $x, ?\FFI\CData $y): int;
        /**
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $x
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $y
         * @return int<0, 4294967296>
         */
        public function SDL_GetGlobalMouseState(?\FFI\CData $x, ?\FFI\CData $y): int;
        /**
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $x
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $y
         * @return int<0, 4294967296>
         */
        public function SDL_GetRelativeMouseState(?\FFI\CData $x, ?\FFI\CData $y): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @param int<-2147483648, 2147483647> $x
         * @param int<-2147483648, 2147483647> $y
         */
        public function SDL_WarpMouseInWindow(?\FFI\CData $window, int $x, int $y): void;
        /**
         * @param int<-2147483648, 2147483647> $x
         * @param int<-2147483648, 2147483647> $y
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_WarpMouseGlobal(int $x, int $y): int;
        /**
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::* $enabled
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetRelativeMouseMode(#[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])] int $enabled): int;
        /**
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::* $enabled
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_CaptureMouse(#[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])] int $enabled): int;
        /**
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_GetRelativeMouseMode(): int;
        /**
         * @param null|\FFI\CData<int<0, 255>> $data
         * @param null|\FFI\CData<int<0, 255>> $mask
         * @param int<-2147483648, 2147483647> $w
         * @param int<-2147483648, 2147483647> $h
         * @param int<-2147483648, 2147483647> $hot_x
         * @param int<-2147483648, 2147483647> $hot_y
         * @return null|\FFI\CData<\PHPSTORM_META\SDLCursor>
         */
        public function SDL_CreateCursor(?\FFI\CData $data, ?\FFI\CData $mask, int $w, int $h, int $hot_x, int $hot_y): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSurface> $surface
         * @param int<-2147483648, 2147483647> $hot_x
         * @param int<-2147483648, 2147483647> $hot_y
         * @return null|\FFI\CData<\PHPSTORM_META\SDLCursor>
         */
        public function SDL_CreateColorCursor(?\FFI\CData $surface, int $hot_x, int $hot_y): ?\FFI\CData;
        /**
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Mouse\SystemCursor::* $id
         * @return null|\FFI\CData<\PHPSTORM_META\SDLCursor>
         */
        public function SDL_CreateSystemCursor(#[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Mouse\SystemCursor::SDL_SYSTEM_CURSOR_ARROW, \Serafim\SDL\Mouse\SystemCursor::SDL_SYSTEM_CURSOR_IBEAM, \Serafim\SDL\Mouse\SystemCursor::SDL_SYSTEM_CURSOR_WAIT, \Serafim\SDL\Mouse\SystemCursor::SDL_SYSTEM_CURSOR_CROSSHAIR, \Serafim\SDL\Mouse\SystemCursor::SDL_SYSTEM_CURSOR_WAITARROW, \Serafim\SDL\Mouse\SystemCursor::SDL_SYSTEM_CURSOR_SIZENWSE, \Serafim\SDL\Mouse\SystemCursor::SDL_SYSTEM_CURSOR_SIZENESW, \Serafim\SDL\Mouse\SystemCursor::SDL_SYSTEM_CURSOR_SIZEWE, \Serafim\SDL\Mouse\SystemCursor::SDL_SYSTEM_CURSOR_SIZENS, \Serafim\SDL\Mouse\SystemCursor::SDL_SYSTEM_CURSOR_SIZEALL, \Serafim\SDL\Mouse\SystemCursor::SDL_SYSTEM_CURSOR_NO, \Serafim\SDL\Mouse\SystemCursor::SDL_SYSTEM_CURSOR_HAND, \Serafim\SDL\Mouse\SystemCursor::SDL_NUM_SYSTEM_CURSORS])] int $id): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLCursor> $cursor
         */
        public function SDL_SetCursor(?\FFI\CData $cursor): void;
        /**
         * @return null|\FFI\CData<\PHPSTORM_META\SDLCursor>
         */
        public function SDL_GetCursor(): ?\FFI\CData;
        /**
         * @return null|\FFI\CData<\PHPSTORM_META\SDLCursor>
         */
        public function SDL_GetDefaultCursor(): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLCursor> $cursor
         */
        public function SDL_FreeCursor(?\FFI\CData $cursor): void;
        /**
         * @param int<-2147483648, 2147483647> $toggle
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_ShowCursor(int $toggle): int;
        /**
         * @param \PHPSTORM_META\SDLGUID|null|object{data:list<int<0, 255>>} $guid
         * @param int<-2147483648, 2147483647> $cbGUID
         */
        public function SDL_GUIDToString(?\FFI\CData $guid, string|\FFI\CData $pszGUID, int $cbGUID): void;
        /**
         * @return \PHPSTORM_META\SDLGUID|null|object{data:list<int<0, 255>>}
         */
        public function SDL_GUIDFromString(string|\FFI\CData $pchGUID): ?\FFI\CData;
        public function SDL_LockJoysticks(): void;
        public function SDL_UnlockJoysticks(): void;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_NumJoysticks(): int;
        /**
         * @param int<-2147483648, 2147483647> $device_index
         */
        public function SDL_JoystickNameForIndex(int $device_index): string|\FFI\CData;
        /**
         * @param int<-2147483648, 2147483647> $device_index
         */
        public function SDL_JoystickPathForIndex(int $device_index): string|\FFI\CData;
        /**
         * @param int<-2147483648, 2147483647> $device_index
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickGetDevicePlayerIndex(int $device_index): int;
        /**
         * @param int<-2147483648, 2147483647> $device_index
         * @return \PHPSTORM_META\SDLGUID|null|object{data:list<int<0, 255>>}
         */
        public function SDL_JoystickGetDeviceGUID(int $device_index): ?\FFI\CData;
        /**
         * @param int<-2147483648, 2147483647> $device_index
         * @return int<0, 65536>
         */
        public function SDL_JoystickGetDeviceVendor(int $device_index): int;
        /**
         * @param int<-2147483648, 2147483647> $device_index
         * @return int<0, 65536>
         */
        public function SDL_JoystickGetDeviceProduct(int $device_index): int;
        /**
         * @param int<-2147483648, 2147483647> $device_index
         * @return int<0, 65536>
         */
        public function SDL_JoystickGetDeviceProductVersion(int $device_index): int;
        /**
         * @param int<-2147483648, 2147483647> $device_index
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Joystick\Type::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Joystick\Type::SDL_JOYSTICK_TYPE_UNKNOWN, \Serafim\SDL\Joystick\Type::SDL_JOYSTICK_TYPE_GAMECONTROLLER, \Serafim\SDL\Joystick\Type::SDL_JOYSTICK_TYPE_WHEEL, \Serafim\SDL\Joystick\Type::SDL_JOYSTICK_TYPE_ARCADE_STICK, \Serafim\SDL\Joystick\Type::SDL_JOYSTICK_TYPE_FLIGHT_STICK, \Serafim\SDL\Joystick\Type::SDL_JOYSTICK_TYPE_DANCE_PAD, \Serafim\SDL\Joystick\Type::SDL_JOYSTICK_TYPE_GUITAR, \Serafim\SDL\Joystick\Type::SDL_JOYSTICK_TYPE_DRUM_KIT, \Serafim\SDL\Joystick\Type::SDL_JOYSTICK_TYPE_ARCADE_PAD, \Serafim\SDL\Joystick\Type::SDL_JOYSTICK_TYPE_THROTTLE])]
        public function SDL_JoystickGetDeviceType(int $device_index): int;
        /**
         * @param int<-2147483648, 2147483647> $device_index
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickGetDeviceInstanceID(int $device_index): int;
        /**
         * @param int<-2147483648, 2147483647> $device_index
         * @return null|\FFI\CData<\PHPSTORM_META\SDLJoystick>
         */
        public function SDL_JoystickOpen(int $device_index): ?\FFI\CData;
        /**
         * @param int<-2147483648, 2147483647> $instance_id
         * @return null|\FFI\CData<\PHPSTORM_META\SDLJoystick>
         */
        public function SDL_JoystickFromInstanceID(int $instance_id): ?\FFI\CData;
        /**
         * @param int<-2147483648, 2147483647> $player_index
         * @return null|\FFI\CData<\PHPSTORM_META\SDLJoystick>
         */
        public function SDL_JoystickFromPlayerIndex(int $player_index): ?\FFI\CData;
        /**
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Joystick\Type::* $type
         * @param int<-2147483648, 2147483647> $naxes
         * @param int<-2147483648, 2147483647> $nbuttons
         * @param int<-2147483648, 2147483647> $nhats
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickAttachVirtual(#[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Joystick\Type::SDL_JOYSTICK_TYPE_UNKNOWN, \Serafim\SDL\Joystick\Type::SDL_JOYSTICK_TYPE_GAMECONTROLLER, \Serafim\SDL\Joystick\Type::SDL_JOYSTICK_TYPE_WHEEL, \Serafim\SDL\Joystick\Type::SDL_JOYSTICK_TYPE_ARCADE_STICK, \Serafim\SDL\Joystick\Type::SDL_JOYSTICK_TYPE_FLIGHT_STICK, \Serafim\SDL\Joystick\Type::SDL_JOYSTICK_TYPE_DANCE_PAD, \Serafim\SDL\Joystick\Type::SDL_JOYSTICK_TYPE_GUITAR, \Serafim\SDL\Joystick\Type::SDL_JOYSTICK_TYPE_DRUM_KIT, \Serafim\SDL\Joystick\Type::SDL_JOYSTICK_TYPE_ARCADE_PAD, \Serafim\SDL\Joystick\Type::SDL_JOYSTICK_TYPE_THROTTLE])] int $type, int $naxes, int $nbuttons, int $nhats): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLVirtualJoystickDesc> $desc
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickAttachVirtualEx(?\FFI\CData $desc): int;
        /**
         * @param int<-2147483648, 2147483647> $device_index
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickDetachVirtual(int $device_index): int;
        /**
         * @param int<-2147483648, 2147483647> $device_index
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_JoystickIsVirtual(int $device_index): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLJoystick> $joystick
         * @param int<-2147483648, 2147483647> $axis
         * @param int<-32768, 32767> $value
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickSetVirtualAxis(?\FFI\CData $joystick, int $axis, int $value): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLJoystick> $joystick
         * @param int<-2147483648, 2147483647> $button
         * @param int<0, 255> $value
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickSetVirtualButton(?\FFI\CData $joystick, int $button, int $value): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLJoystick> $joystick
         * @param int<-2147483648, 2147483647> $hat
         * @param int<0, 255> $value
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickSetVirtualHat(?\FFI\CData $joystick, int $hat, int $value): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLJoystick> $joystick
         */
        public function SDL_JoystickName(?\FFI\CData $joystick): string|\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLJoystick> $joystick
         */
        public function SDL_JoystickPath(?\FFI\CData $joystick): string|\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLJoystick> $joystick
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickGetPlayerIndex(?\FFI\CData $joystick): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLJoystick> $joystick
         * @param int<-2147483648, 2147483647> $player_index
         */
        public function SDL_JoystickSetPlayerIndex(?\FFI\CData $joystick, int $player_index): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLJoystick> $joystick
         * @return \PHPSTORM_META\SDLGUID|null|object{data:list<int<0, 255>>}
         */
        public function SDL_JoystickGetGUID(?\FFI\CData $joystick): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLJoystick> $joystick
         * @return int<0, 65536>
         */
        public function SDL_JoystickGetVendor(?\FFI\CData $joystick): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLJoystick> $joystick
         * @return int<0, 65536>
         */
        public function SDL_JoystickGetProduct(?\FFI\CData $joystick): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLJoystick> $joystick
         * @return int<0, 65536>
         */
        public function SDL_JoystickGetProductVersion(?\FFI\CData $joystick): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLJoystick> $joystick
         * @return int<0, 65536>
         */
        public function SDL_JoystickGetFirmwareVersion(?\FFI\CData $joystick): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLJoystick> $joystick
         */
        public function SDL_JoystickGetSerial(?\FFI\CData $joystick): string|\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLJoystick> $joystick
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Joystick\Type::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Joystick\Type::SDL_JOYSTICK_TYPE_UNKNOWN, \Serafim\SDL\Joystick\Type::SDL_JOYSTICK_TYPE_GAMECONTROLLER, \Serafim\SDL\Joystick\Type::SDL_JOYSTICK_TYPE_WHEEL, \Serafim\SDL\Joystick\Type::SDL_JOYSTICK_TYPE_ARCADE_STICK, \Serafim\SDL\Joystick\Type::SDL_JOYSTICK_TYPE_FLIGHT_STICK, \Serafim\SDL\Joystick\Type::SDL_JOYSTICK_TYPE_DANCE_PAD, \Serafim\SDL\Joystick\Type::SDL_JOYSTICK_TYPE_GUITAR, \Serafim\SDL\Joystick\Type::SDL_JOYSTICK_TYPE_DRUM_KIT, \Serafim\SDL\Joystick\Type::SDL_JOYSTICK_TYPE_ARCADE_PAD, \Serafim\SDL\Joystick\Type::SDL_JOYSTICK_TYPE_THROTTLE])]
        public function SDL_JoystickGetType(?\FFI\CData $joystick): int;
        /**
         * @param \PHPSTORM_META\SDLGUID|null|object{data:list<int<0, 255>>} $guid
         * @param int<-2147483648, 2147483647> $cbGUID
         */
        public function SDL_JoystickGetGUIDString(?\FFI\CData $guid, string|\FFI\CData $pszGUID, int $cbGUID): void;
        /**
         * @return \PHPSTORM_META\SDLGUID|null|object{data:list<int<0, 255>>}
         */
        public function SDL_JoystickGetGUIDFromString(string|\FFI\CData $pchGUID): ?\FFI\CData;
        /**
         * @param \PHPSTORM_META\SDLGUID|null|object{data:list<int<0, 255>>} $guid
         * @param null|\FFI\CData<int<0, 65536>> $vendor
         * @param null|\FFI\CData<int<0, 65536>> $product
         * @param null|\FFI\CData<int<0, 65536>> $version
         * @param null|\FFI\CData<int<0, 65536>> $crc16
         */
        public function SDL_GetJoystickGUIDInfo(?\FFI\CData $guid, ?\FFI\CData $vendor, ?\FFI\CData $product, ?\FFI\CData $version, ?\FFI\CData $crc16): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLJoystick> $joystick
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_JoystickGetAttached(?\FFI\CData $joystick): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLJoystick> $joystick
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickInstanceID(?\FFI\CData $joystick): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLJoystick> $joystick
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickNumAxes(?\FFI\CData $joystick): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLJoystick> $joystick
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickNumBalls(?\FFI\CData $joystick): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLJoystick> $joystick
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickNumHats(?\FFI\CData $joystick): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLJoystick> $joystick
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickNumButtons(?\FFI\CData $joystick): int;
        public function SDL_JoystickUpdate(): void;
        /**
         * @param int<-2147483648, 2147483647> $state
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickEventState(int $state): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLJoystick> $joystick
         * @param int<-2147483648, 2147483647> $axis
         * @return int<-32768, 32767>
         */
        public function SDL_JoystickGetAxis(?\FFI\CData $joystick, int $axis): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLJoystick> $joystick
         * @param int<-2147483648, 2147483647> $axis
         * @param null|\FFI\CData<int<-32768, 32767>> $state
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_JoystickGetAxisInitialState(?\FFI\CData $joystick, int $axis, ?\FFI\CData $state): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLJoystick> $joystick
         * @param int<-2147483648, 2147483647> $hat
         * @return int<0, 255>
         */
        public function SDL_JoystickGetHat(?\FFI\CData $joystick, int $hat): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLJoystick> $joystick
         * @param int<-2147483648, 2147483647> $ball
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $dx
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $dy
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickGetBall(?\FFI\CData $joystick, int $ball, ?\FFI\CData $dx, ?\FFI\CData $dy): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLJoystick> $joystick
         * @param int<-2147483648, 2147483647> $button
         * @return int<0, 255>
         */
        public function SDL_JoystickGetButton(?\FFI\CData $joystick, int $button): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLJoystick> $joystick
         * @param int<0, 65536> $low_frequency_rumble
         * @param int<0, 65536> $high_frequency_rumble
         * @param int<0, 4294967296> $duration_ms
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickRumble(?\FFI\CData $joystick, int $low_frequency_rumble, int $high_frequency_rumble, int $duration_ms): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLJoystick> $joystick
         * @param int<0, 65536> $left_rumble
         * @param int<0, 65536> $right_rumble
         * @param int<0, 4294967296> $duration_ms
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickRumbleTriggers(?\FFI\CData $joystick, int $left_rumble, int $right_rumble, int $duration_ms): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLJoystick> $joystick
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_JoystickHasLED(?\FFI\CData $joystick): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLJoystick> $joystick
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_JoystickHasRumble(?\FFI\CData $joystick): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLJoystick> $joystick
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_JoystickHasRumbleTriggers(?\FFI\CData $joystick): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLJoystick> $joystick
         * @param int<0, 255> $red
         * @param int<0, 255> $green
         * @param int<0, 255> $blue
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickSetLED(?\FFI\CData $joystick, int $red, int $green, int $blue): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLJoystick> $joystick
         * @param int<-2147483648, 2147483647> $size
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickSendEffect(?\FFI\CData $joystick, ?\FFI\CData $data, int $size): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLJoystick> $joystick
         */
        public function SDL_JoystickClose(?\FFI\CData $joystick): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLJoystick> $joystick
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Joystick\PowerLevel::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Joystick\PowerLevel::SDL_JOYSTICK_POWER_UNKNOWN, \Serafim\SDL\Joystick\PowerLevel::SDL_JOYSTICK_POWER_EMPTY, \Serafim\SDL\Joystick\PowerLevel::SDL_JOYSTICK_POWER_LOW, \Serafim\SDL\Joystick\PowerLevel::SDL_JOYSTICK_POWER_MEDIUM, \Serafim\SDL\Joystick\PowerLevel::SDL_JOYSTICK_POWER_FULL, \Serafim\SDL\Joystick\PowerLevel::SDL_JOYSTICK_POWER_WIRED, \Serafim\SDL\Joystick\PowerLevel::SDL_JOYSTICK_POWER_MAX])]
        public function SDL_JoystickCurrentPowerLevel(?\FFI\CData $joystick): int;
        public function SDL_LockSensors(): void;
        public function SDL_UnlockSensors(): void;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_NumSensors(): int;
        /**
         * @param int<-2147483648, 2147483647> $device_index
         */
        public function SDL_SensorGetDeviceName(int $device_index): string|\FFI\CData;
        /**
         * @param int<-2147483648, 2147483647> $device_index
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Sensor\Type::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Sensor\Type::SDL_SENSOR_INVALID, \Serafim\SDL\Sensor\Type::SDL_SENSOR_UNKNOWN, \Serafim\SDL\Sensor\Type::SDL_SENSOR_ACCEL, \Serafim\SDL\Sensor\Type::SDL_SENSOR_GYRO, \Serafim\SDL\Sensor\Type::SDL_SENSOR_ACCEL_L, \Serafim\SDL\Sensor\Type::SDL_SENSOR_GYRO_L, \Serafim\SDL\Sensor\Type::SDL_SENSOR_ACCEL_R, \Serafim\SDL\Sensor\Type::SDL_SENSOR_GYRO_R])]
        public function SDL_SensorGetDeviceType(int $device_index): int;
        /**
         * @param int<-2147483648, 2147483647> $device_index
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SensorGetDeviceNonPortableType(int $device_index): int;
        /**
         * @param int<-2147483648, 2147483647> $device_index
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SensorGetDeviceInstanceID(int $device_index): int;
        /**
         * @param int<-2147483648, 2147483647> $device_index
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSensor>
         */
        public function SDL_SensorOpen(int $device_index): ?\FFI\CData;
        /**
         * @param int<-2147483648, 2147483647> $instance_id
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSensor>
         */
        public function SDL_SensorFromInstanceID(int $instance_id): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSensor> $sensor
         */
        public function SDL_SensorGetName(?\FFI\CData $sensor): string|\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSensor> $sensor
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Sensor\Type::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Sensor\Type::SDL_SENSOR_INVALID, \Serafim\SDL\Sensor\Type::SDL_SENSOR_UNKNOWN, \Serafim\SDL\Sensor\Type::SDL_SENSOR_ACCEL, \Serafim\SDL\Sensor\Type::SDL_SENSOR_GYRO, \Serafim\SDL\Sensor\Type::SDL_SENSOR_ACCEL_L, \Serafim\SDL\Sensor\Type::SDL_SENSOR_GYRO_L, \Serafim\SDL\Sensor\Type::SDL_SENSOR_ACCEL_R, \Serafim\SDL\Sensor\Type::SDL_SENSOR_GYRO_R])]
        public function SDL_SensorGetType(?\FFI\CData $sensor): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSensor> $sensor
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SensorGetNonPortableType(?\FFI\CData $sensor): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSensor> $sensor
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SensorGetInstanceID(?\FFI\CData $sensor): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSensor> $sensor
         * @param int<-2147483648, 2147483647> $num_values
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SensorGetData(?\FFI\CData $sensor, ?\FFI\CData $data, int $num_values): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSensor> $sensor
         * @param null|\FFI\CData<int<0, max>> $timestamp
         * @param int<-2147483648, 2147483647> $num_values
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SensorGetDataWithTimestamp(?\FFI\CData $sensor, ?\FFI\CData $timestamp, ?\FFI\CData $data, int $num_values): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSensor> $sensor
         */
        public function SDL_SensorClose(?\FFI\CData $sensor): void;
        public function SDL_SensorUpdate(): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRWops> $rw
         * @param int<-2147483648, 2147483647> $freerw
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerAddMappingsFromRW(?\FFI\CData $rw, int $freerw): int;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerAddMapping(string|\FFI\CData $mappingString): int;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerNumMappings(): int;
        /**
         * @param int<-2147483648, 2147483647> $mapping_index
         */
        public function SDL_GameControllerMappingForIndex(int $mapping_index): string|\FFI\CData;
        /**
         * @param \PHPSTORM_META\SDLGUID|null|object{data:list<int<0, 255>>} $guid
         */
        public function SDL_GameControllerMappingForGUID(?\FFI\CData $guid): string|\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLGameController> $gamecontroller
         */
        public function SDL_GameControllerMapping(?\FFI\CData $gamecontroller): string|\FFI\CData;
        /**
         * @param int<-2147483648, 2147483647> $joystick_index
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_IsGameController(int $joystick_index): int;
        /**
         * @param int<-2147483648, 2147483647> $joystick_index
         */
        public function SDL_GameControllerNameForIndex(int $joystick_index): string|\FFI\CData;
        /**
         * @param int<-2147483648, 2147483647> $joystick_index
         */
        public function SDL_GameControllerPathForIndex(int $joystick_index): string|\FFI\CData;
        /**
         * @param int<-2147483648, 2147483647> $joystick_index
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\GameController\Type::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_UNKNOWN, \Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_XBOX360, \Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_XBOXONE, \Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_PS3, \Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_PS4, \Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_NINTENDO_SWITCH_PRO, \Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_VIRTUAL, \Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_PS5, \Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_AMAZON_LUNA, \Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_GOOGLE_STADIA, \Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_NVIDIA_SHIELD, \Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_NINTENDO_SWITCH_JOYCON_LEFT, \Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_NINTENDO_SWITCH_JOYCON_RIGHT, \Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_NINTENDO_SWITCH_JOYCON_PAIR])]
        public function SDL_GameControllerTypeForIndex(int $joystick_index): int;
        /**
         * @param int<-2147483648, 2147483647> $joystick_index
         */
        public function SDL_GameControllerMappingForDeviceIndex(int $joystick_index): string|\FFI\CData;
        /**
         * @param int<-2147483648, 2147483647> $joystick_index
         * @return null|\FFI\CData<\PHPSTORM_META\SDLGameController>
         */
        public function SDL_GameControllerOpen(int $joystick_index): ?\FFI\CData;
        /**
         * @param int<-2147483648, 2147483647> $joyid
         * @return null|\FFI\CData<\PHPSTORM_META\SDLGameController>
         */
        public function SDL_GameControllerFromInstanceID(int $joyid): ?\FFI\CData;
        /**
         * @param int<-2147483648, 2147483647> $player_index
         * @return null|\FFI\CData<\PHPSTORM_META\SDLGameController>
         */
        public function SDL_GameControllerFromPlayerIndex(int $player_index): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLGameController> $gamecontroller
         */
        public function SDL_GameControllerName(?\FFI\CData $gamecontroller): string|\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLGameController> $gamecontroller
         */
        public function SDL_GameControllerPath(?\FFI\CData $gamecontroller): string|\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLGameController> $gamecontroller
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\GameController\Type::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_UNKNOWN, \Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_XBOX360, \Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_XBOXONE, \Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_PS3, \Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_PS4, \Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_NINTENDO_SWITCH_PRO, \Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_VIRTUAL, \Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_PS5, \Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_AMAZON_LUNA, \Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_GOOGLE_STADIA, \Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_NVIDIA_SHIELD, \Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_NINTENDO_SWITCH_JOYCON_LEFT, \Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_NINTENDO_SWITCH_JOYCON_RIGHT, \Serafim\SDL\GameController\Type::SDL_CONTROLLER_TYPE_NINTENDO_SWITCH_JOYCON_PAIR])]
        public function SDL_GameControllerGetType(?\FFI\CData $gamecontroller): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLGameController> $gamecontroller
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerGetPlayerIndex(?\FFI\CData $gamecontroller): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLGameController> $gamecontroller
         * @param int<-2147483648, 2147483647> $player_index
         */
        public function SDL_GameControllerSetPlayerIndex(?\FFI\CData $gamecontroller, int $player_index): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLGameController> $gamecontroller
         * @return int<0, 65536>
         */
        public function SDL_GameControllerGetVendor(?\FFI\CData $gamecontroller): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLGameController> $gamecontroller
         * @return int<0, 65536>
         */
        public function SDL_GameControllerGetProduct(?\FFI\CData $gamecontroller): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLGameController> $gamecontroller
         * @return int<0, 65536>
         */
        public function SDL_GameControllerGetProductVersion(?\FFI\CData $gamecontroller): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLGameController> $gamecontroller
         * @return int<0, 65536>
         */
        public function SDL_GameControllerGetFirmwareVersion(?\FFI\CData $gamecontroller): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLGameController> $gamecontroller
         */
        public function SDL_GameControllerGetSerial(?\FFI\CData $gamecontroller): string|\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLGameController> $gamecontroller
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_GameControllerGetAttached(?\FFI\CData $gamecontroller): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLGameController> $gamecontroller
         * @return null|\FFI\CData<\PHPSTORM_META\SDLJoystick>
         */
        public function SDL_GameControllerGetJoystick(?\FFI\CData $gamecontroller): ?\FFI\CData;
        /**
         * @param int<-2147483648, 2147483647> $state
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerEventState(int $state): int;
        public function SDL_GameControllerUpdate(): void;
        /**
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\GameController\Axis::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_INVALID, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_LEFTX, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_LEFTY, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_RIGHTX, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_RIGHTY, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_TRIGGERLEFT, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_TRIGGERRIGHT, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_MAX])]
        public function SDL_GameControllerGetAxisFromString(string|\FFI\CData $str): int;
        /**
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\GameController\Axis::* $axis
         */
        public function SDL_GameControllerGetStringForAxis(#[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_INVALID, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_LEFTX, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_LEFTY, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_RIGHTX, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_RIGHTY, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_TRIGGERLEFT, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_TRIGGERRIGHT, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_MAX])] int $axis): string|\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLGameController> $gamecontroller
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\GameController\Axis::* $axis
         * @return \PHPSTORM_META\SDLGameControllerButtonBind
         */
        public function SDL_GameControllerGetBindForAxis(?\FFI\CData $gamecontroller, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_INVALID, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_LEFTX, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_LEFTY, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_RIGHTX, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_RIGHTY, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_TRIGGERLEFT, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_TRIGGERRIGHT, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_MAX])] int $axis): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLGameController> $gamecontroller
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\GameController\Axis::* $axis
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_GameControllerHasAxis(?\FFI\CData $gamecontroller, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_INVALID, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_LEFTX, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_LEFTY, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_RIGHTX, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_RIGHTY, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_TRIGGERLEFT, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_TRIGGERRIGHT, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_MAX])] int $axis): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLGameController> $gamecontroller
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\GameController\Axis::* $axis
         * @return int<-32768, 32767>
         */
        public function SDL_GameControllerGetAxis(?\FFI\CData $gamecontroller, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_INVALID, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_LEFTX, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_LEFTY, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_RIGHTX, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_RIGHTY, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_TRIGGERLEFT, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_TRIGGERRIGHT, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_MAX])] int $axis): int;
        /**
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\GameController\Button::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_INVALID, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_A, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_B, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_X, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_Y, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_BACK, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_GUIDE, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_START, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_LEFTSTICK, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_RIGHTSTICK, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_LEFTSHOULDER, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_RIGHTSHOULDER, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_DPAD_UP, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_DPAD_DOWN, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_DPAD_LEFT, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_DPAD_RIGHT, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_MISC1, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_PADDLE1, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_PADDLE2, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_PADDLE3, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_PADDLE4, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_TOUCHPAD, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_MAX])]
        public function SDL_GameControllerGetButtonFromString(string|\FFI\CData $str): int;
        /**
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\GameController\Button::* $button
         */
        public function SDL_GameControllerGetStringForButton(#[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_INVALID, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_A, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_B, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_X, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_Y, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_BACK, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_GUIDE, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_START, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_LEFTSTICK, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_RIGHTSTICK, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_LEFTSHOULDER, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_RIGHTSHOULDER, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_DPAD_UP, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_DPAD_DOWN, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_DPAD_LEFT, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_DPAD_RIGHT, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_MISC1, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_PADDLE1, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_PADDLE2, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_PADDLE3, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_PADDLE4, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_TOUCHPAD, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_MAX])] int $button): string|\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLGameController> $gamecontroller
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\GameController\Button::* $button
         * @return \PHPSTORM_META\SDLGameControllerButtonBind
         */
        public function SDL_GameControllerGetBindForButton(?\FFI\CData $gamecontroller, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_INVALID, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_A, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_B, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_X, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_Y, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_BACK, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_GUIDE, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_START, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_LEFTSTICK, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_RIGHTSTICK, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_LEFTSHOULDER, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_RIGHTSHOULDER, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_DPAD_UP, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_DPAD_DOWN, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_DPAD_LEFT, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_DPAD_RIGHT, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_MISC1, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_PADDLE1, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_PADDLE2, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_PADDLE3, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_PADDLE4, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_TOUCHPAD, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_MAX])] int $button): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLGameController> $gamecontroller
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\GameController\Button::* $button
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_GameControllerHasButton(?\FFI\CData $gamecontroller, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_INVALID, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_A, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_B, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_X, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_Y, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_BACK, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_GUIDE, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_START, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_LEFTSTICK, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_RIGHTSTICK, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_LEFTSHOULDER, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_RIGHTSHOULDER, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_DPAD_UP, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_DPAD_DOWN, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_DPAD_LEFT, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_DPAD_RIGHT, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_MISC1, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_PADDLE1, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_PADDLE2, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_PADDLE3, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_PADDLE4, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_TOUCHPAD, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_MAX])] int $button): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLGameController> $gamecontroller
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\GameController\Button::* $button
         * @return int<0, 255>
         */
        public function SDL_GameControllerGetButton(?\FFI\CData $gamecontroller, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_INVALID, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_A, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_B, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_X, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_Y, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_BACK, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_GUIDE, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_START, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_LEFTSTICK, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_RIGHTSTICK, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_LEFTSHOULDER, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_RIGHTSHOULDER, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_DPAD_UP, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_DPAD_DOWN, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_DPAD_LEFT, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_DPAD_RIGHT, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_MISC1, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_PADDLE1, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_PADDLE2, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_PADDLE3, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_PADDLE4, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_TOUCHPAD, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_MAX])] int $button): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLGameController> $gamecontroller
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerGetNumTouchpads(?\FFI\CData $gamecontroller): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLGameController> $gamecontroller
         * @param int<-2147483648, 2147483647> $touchpad
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerGetNumTouchpadFingers(?\FFI\CData $gamecontroller, int $touchpad): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLGameController> $gamecontroller
         * @param int<-2147483648, 2147483647> $touchpad
         * @param int<-2147483648, 2147483647> $finger
         * @param null|\FFI\CData<int<0, 255>> $state
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerGetTouchpadFinger(?\FFI\CData $gamecontroller, int $touchpad, int $finger, ?\FFI\CData $state, ?\FFI\CData $x, ?\FFI\CData $y, ?\FFI\CData $pressure): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLGameController> $gamecontroller
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Sensor\Type::* $type
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_GameControllerHasSensor(?\FFI\CData $gamecontroller, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Sensor\Type::SDL_SENSOR_INVALID, \Serafim\SDL\Sensor\Type::SDL_SENSOR_UNKNOWN, \Serafim\SDL\Sensor\Type::SDL_SENSOR_ACCEL, \Serafim\SDL\Sensor\Type::SDL_SENSOR_GYRO, \Serafim\SDL\Sensor\Type::SDL_SENSOR_ACCEL_L, \Serafim\SDL\Sensor\Type::SDL_SENSOR_GYRO_L, \Serafim\SDL\Sensor\Type::SDL_SENSOR_ACCEL_R, \Serafim\SDL\Sensor\Type::SDL_SENSOR_GYRO_R])] int $type): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLGameController> $gamecontroller
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Sensor\Type::* $type
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::* $enabled
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerSetSensorEnabled(?\FFI\CData $gamecontroller, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Sensor\Type::SDL_SENSOR_INVALID, \Serafim\SDL\Sensor\Type::SDL_SENSOR_UNKNOWN, \Serafim\SDL\Sensor\Type::SDL_SENSOR_ACCEL, \Serafim\SDL\Sensor\Type::SDL_SENSOR_GYRO, \Serafim\SDL\Sensor\Type::SDL_SENSOR_ACCEL_L, \Serafim\SDL\Sensor\Type::SDL_SENSOR_GYRO_L, \Serafim\SDL\Sensor\Type::SDL_SENSOR_ACCEL_R, \Serafim\SDL\Sensor\Type::SDL_SENSOR_GYRO_R])] int $type, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])] int $enabled): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLGameController> $gamecontroller
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Sensor\Type::* $type
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_GameControllerIsSensorEnabled(?\FFI\CData $gamecontroller, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Sensor\Type::SDL_SENSOR_INVALID, \Serafim\SDL\Sensor\Type::SDL_SENSOR_UNKNOWN, \Serafim\SDL\Sensor\Type::SDL_SENSOR_ACCEL, \Serafim\SDL\Sensor\Type::SDL_SENSOR_GYRO, \Serafim\SDL\Sensor\Type::SDL_SENSOR_ACCEL_L, \Serafim\SDL\Sensor\Type::SDL_SENSOR_GYRO_L, \Serafim\SDL\Sensor\Type::SDL_SENSOR_ACCEL_R, \Serafim\SDL\Sensor\Type::SDL_SENSOR_GYRO_R])] int $type): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLGameController> $gamecontroller
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Sensor\Type::* $type
         */
        public function SDL_GameControllerGetSensorDataRate(?\FFI\CData $gamecontroller, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Sensor\Type::SDL_SENSOR_INVALID, \Serafim\SDL\Sensor\Type::SDL_SENSOR_UNKNOWN, \Serafim\SDL\Sensor\Type::SDL_SENSOR_ACCEL, \Serafim\SDL\Sensor\Type::SDL_SENSOR_GYRO, \Serafim\SDL\Sensor\Type::SDL_SENSOR_ACCEL_L, \Serafim\SDL\Sensor\Type::SDL_SENSOR_GYRO_L, \Serafim\SDL\Sensor\Type::SDL_SENSOR_ACCEL_R, \Serafim\SDL\Sensor\Type::SDL_SENSOR_GYRO_R])] int $type): float;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLGameController> $gamecontroller
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Sensor\Type::* $type
         * @param int<-2147483648, 2147483647> $num_values
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerGetSensorData(?\FFI\CData $gamecontroller, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Sensor\Type::SDL_SENSOR_INVALID, \Serafim\SDL\Sensor\Type::SDL_SENSOR_UNKNOWN, \Serafim\SDL\Sensor\Type::SDL_SENSOR_ACCEL, \Serafim\SDL\Sensor\Type::SDL_SENSOR_GYRO, \Serafim\SDL\Sensor\Type::SDL_SENSOR_ACCEL_L, \Serafim\SDL\Sensor\Type::SDL_SENSOR_GYRO_L, \Serafim\SDL\Sensor\Type::SDL_SENSOR_ACCEL_R, \Serafim\SDL\Sensor\Type::SDL_SENSOR_GYRO_R])] int $type, ?\FFI\CData $data, int $num_values): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLGameController> $gamecontroller
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Sensor\Type::* $type
         * @param null|\FFI\CData<int<0, max>> $timestamp
         * @param int<-2147483648, 2147483647> $num_values
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerGetSensorDataWithTimestamp(?\FFI\CData $gamecontroller, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Sensor\Type::SDL_SENSOR_INVALID, \Serafim\SDL\Sensor\Type::SDL_SENSOR_UNKNOWN, \Serafim\SDL\Sensor\Type::SDL_SENSOR_ACCEL, \Serafim\SDL\Sensor\Type::SDL_SENSOR_GYRO, \Serafim\SDL\Sensor\Type::SDL_SENSOR_ACCEL_L, \Serafim\SDL\Sensor\Type::SDL_SENSOR_GYRO_L, \Serafim\SDL\Sensor\Type::SDL_SENSOR_ACCEL_R, \Serafim\SDL\Sensor\Type::SDL_SENSOR_GYRO_R])] int $type, ?\FFI\CData $timestamp, ?\FFI\CData $data, int $num_values): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLGameController> $gamecontroller
         * @param int<0, 65536> $low_frequency_rumble
         * @param int<0, 65536> $high_frequency_rumble
         * @param int<0, 4294967296> $duration_ms
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerRumble(?\FFI\CData $gamecontroller, int $low_frequency_rumble, int $high_frequency_rumble, int $duration_ms): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLGameController> $gamecontroller
         * @param int<0, 65536> $left_rumble
         * @param int<0, 65536> $right_rumble
         * @param int<0, 4294967296> $duration_ms
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerRumbleTriggers(?\FFI\CData $gamecontroller, int $left_rumble, int $right_rumble, int $duration_ms): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLGameController> $gamecontroller
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_GameControllerHasLED(?\FFI\CData $gamecontroller): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLGameController> $gamecontroller
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_GameControllerHasRumble(?\FFI\CData $gamecontroller): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLGameController> $gamecontroller
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_GameControllerHasRumbleTriggers(?\FFI\CData $gamecontroller): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLGameController> $gamecontroller
         * @param int<0, 255> $red
         * @param int<0, 255> $green
         * @param int<0, 255> $blue
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerSetLED(?\FFI\CData $gamecontroller, int $red, int $green, int $blue): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLGameController> $gamecontroller
         * @param int<-2147483648, 2147483647> $size
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GameControllerSendEffect(?\FFI\CData $gamecontroller, ?\FFI\CData $data, int $size): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLGameController> $gamecontroller
         */
        public function SDL_GameControllerClose(?\FFI\CData $gamecontroller): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLGameController> $gamecontroller
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\GameController\Button::* $button
         */
        public function SDL_GameControllerGetAppleSFSymbolsNameForButton(?\FFI\CData $gamecontroller, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_INVALID, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_A, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_B, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_X, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_Y, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_BACK, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_GUIDE, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_START, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_LEFTSTICK, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_RIGHTSTICK, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_LEFTSHOULDER, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_RIGHTSHOULDER, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_DPAD_UP, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_DPAD_DOWN, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_DPAD_LEFT, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_DPAD_RIGHT, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_MISC1, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_PADDLE1, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_PADDLE2, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_PADDLE3, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_PADDLE4, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_TOUCHPAD, \Serafim\SDL\GameController\Button::SDL_CONTROLLER_BUTTON_MAX])] int $button): string|\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLGameController> $gamecontroller
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\GameController\Axis::* $axis
         */
        public function SDL_GameControllerGetAppleSFSymbolsNameForAxis(?\FFI\CData $gamecontroller, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_INVALID, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_LEFTX, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_LEFTY, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_RIGHTX, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_RIGHTY, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_TRIGGERLEFT, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_TRIGGERRIGHT, \Serafim\SDL\GameController\Axis::SDL_CONTROLLER_AXIS_MAX])] int $axis): string|\FFI\CData;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetNumTouchDevices(): int;
        /**
         * @param int<-2147483648, 2147483647> $index
         * @return int<min, max>
         */
        public function SDL_GetTouchDevice(int $index): int;
        /**
         * @param int<-2147483648, 2147483647> $index
         */
        public function SDL_GetTouchName(int $index): string|\FFI\CData;
        /**
         * @param int<min, max> $touchID
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Touch\DeviceType::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Touch\DeviceType::SDL_TOUCH_DEVICE_INVALID, \Serafim\SDL\Touch\DeviceType::SDL_TOUCH_DEVICE_DIRECT, \Serafim\SDL\Touch\DeviceType::SDL_TOUCH_DEVICE_INDIRECT_ABSOLUTE, \Serafim\SDL\Touch\DeviceType::SDL_TOUCH_DEVICE_INDIRECT_RELATIVE])]
        public function SDL_GetTouchDeviceType(int $touchID): int;
        /**
         * @param int<min, max> $touchID
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetNumTouchFingers(int $touchID): int;
        /**
         * @param int<min, max> $touchID
         * @param int<-2147483648, 2147483647> $index
         * @return null|\FFI\CData<\PHPSTORM_META\SDLFinger>
         */
        public function SDL_GetTouchFinger(int $touchID, int $index): ?\FFI\CData;
        /**
         * @param int<min, max> $touchId
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RecordGesture(int $touchId): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRWops> $dst
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SaveAllDollarTemplates(?\FFI\CData $dst): int;
        /**
         * @param int<min, max> $gestureId
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRWops> $dst
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SaveDollarTemplate(int $gestureId, ?\FFI\CData $dst): int;
        /**
         * @param int<min, max> $touchId
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRWops> $src
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_LoadDollarTemplates(int $touchId, ?\FFI\CData $src): int;
        public function SDL_PumpEvents(): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLEvent> $events
         * @param int<-2147483648, 2147483647> $numevents
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Event\Action::* $action
         * @param int<0, 4294967296> $minType
         * @param int<0, 4294967296> $maxType
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_PeepEvents(?\FFI\CData $events, int $numevents, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Event\Action::SDL_ADDEVENT, \Serafim\SDL\Event\Action::SDL_PEEKEVENT, \Serafim\SDL\Event\Action::SDL_GETEVENT])] int $action, int $minType, int $maxType): int;
        /**
         * @param int<0, 4294967296> $type
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_HasEvent(int $type): int;
        /**
         * @param int<0, 4294967296> $minType
         * @param int<0, 4294967296> $maxType
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_HasEvents(int $minType, int $maxType): int;
        /**
         * @param int<0, 4294967296> $type
         */
        public function SDL_FlushEvent(int $type): void;
        /**
         * @param int<0, 4294967296> $minType
         * @param int<0, 4294967296> $maxType
         */
        public function SDL_FlushEvents(int $minType, int $maxType): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLEvent> $event
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_PollEvent(?\FFI\CData $event): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLEvent> $event
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_WaitEvent(?\FFI\CData $event): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLEvent> $event
         * @param int<-2147483648, 2147483647> $timeout
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_WaitEventTimeout(?\FFI\CData $event, int $timeout): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLEvent> $event
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_PushEvent(?\FFI\CData $event): int;
        /**
         * @param null|\FFI\CData<callable(mixed, null|\FFI\CData<\PHPSTORM_META\SDLEvent>):(int<-2147483648, 2147483647>)> $filter
         */
        public function SDL_SetEventFilter(?\FFI\CData $filter, ?\FFI\CData $userdata): void;
        /**
         * @param null|\FFI\CData<null|\FFI\CData<callable(mixed, null|\FFI\CData<\PHPSTORM_META\SDLEvent>):(int<-2147483648, 2147483647>)>> $filter
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_GetEventFilter(?\FFI\CData $filter, ?\FFI\CData $userdata): int;
        /**
         * @param null|\FFI\CData<callable(mixed, null|\FFI\CData<\PHPSTORM_META\SDLEvent>):(int<-2147483648, 2147483647>)> $filter
         */
        public function SDL_AddEventWatch(?\FFI\CData $filter, ?\FFI\CData $userdata): void;
        /**
         * @param null|\FFI\CData<callable(mixed, null|\FFI\CData<\PHPSTORM_META\SDLEvent>):(int<-2147483648, 2147483647>)> $filter
         */
        public function SDL_DelEventWatch(?\FFI\CData $filter, ?\FFI\CData $userdata): void;
        /**
         * @param null|\FFI\CData<callable(mixed, null|\FFI\CData<\PHPSTORM_META\SDLEvent>):(int<-2147483648, 2147483647>)> $filter
         */
        public function SDL_FilterEvents(?\FFI\CData $filter, ?\FFI\CData $userdata): void;
        /**
         * @param int<0, 4294967296> $type
         * @param int<-2147483648, 2147483647> $state
         * @return int<0, 255>
         */
        public function SDL_EventState(int $type, int $state): int;
        /**
         * @param int<-2147483648, 2147483647> $numevents
         * @return int<0, 4294967296>
         */
        public function SDL_RegisterEvents(int $numevents): int;
        public function SDL_GetBasePath(): string|\FFI\CData;
        public function SDL_GetPrefPath(string|\FFI\CData $org, string|\FFI\CData $app): string|\FFI\CData;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_NumHaptics(): int;
        /**
         * @param int<-2147483648, 2147483647> $device_index
         */
        public function SDL_HapticName(int $device_index): string|\FFI\CData;
        /**
         * @param int<-2147483648, 2147483647> $device_index
         * @return null|\FFI\CData<\PHPSTORM_META\SDLHaptic>
         */
        public function SDL_HapticOpen(int $device_index): ?\FFI\CData;
        /**
         * @param int<-2147483648, 2147483647> $device_index
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HapticOpened(int $device_index): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLHaptic> $haptic
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HapticIndex(?\FFI\CData $haptic): int;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_MouseIsHaptic(): int;
        /**
         * @return null|\FFI\CData<\PHPSTORM_META\SDLHaptic>
         */
        public function SDL_HapticOpenFromMouse(): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLJoystick> $joystick
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_JoystickIsHaptic(?\FFI\CData $joystick): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLJoystick> $joystick
         * @return null|\FFI\CData<\PHPSTORM_META\SDLHaptic>
         */
        public function SDL_HapticOpenFromJoystick(?\FFI\CData $joystick): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLHaptic> $haptic
         */
        public function SDL_HapticClose(?\FFI\CData $haptic): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLHaptic> $haptic
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HapticNumEffects(?\FFI\CData $haptic): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLHaptic> $haptic
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HapticNumEffectsPlaying(?\FFI\CData $haptic): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLHaptic> $haptic
         * @return int<0, 4294967296>
         */
        public function SDL_HapticQuery(?\FFI\CData $haptic): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLHaptic> $haptic
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HapticNumAxes(?\FFI\CData $haptic): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLHaptic> $haptic
         * @param null|\FFI\CData<\PHPSTORM_META\SDLHapticEffect> $effect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HapticEffectSupported(?\FFI\CData $haptic, ?\FFI\CData $effect): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLHaptic> $haptic
         * @param null|\FFI\CData<\PHPSTORM_META\SDLHapticEffect> $effect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HapticNewEffect(?\FFI\CData $haptic, ?\FFI\CData $effect): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLHaptic> $haptic
         * @param int<-2147483648, 2147483647> $effect
         * @param null|\FFI\CData<\PHPSTORM_META\SDLHapticEffect> $data
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HapticUpdateEffect(?\FFI\CData $haptic, int $effect, ?\FFI\CData $data): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLHaptic> $haptic
         * @param int<-2147483648, 2147483647> $effect
         * @param int<0, 4294967296> $iterations
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HapticRunEffect(?\FFI\CData $haptic, int $effect, int $iterations): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLHaptic> $haptic
         * @param int<-2147483648, 2147483647> $effect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HapticStopEffect(?\FFI\CData $haptic, int $effect): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLHaptic> $haptic
         * @param int<-2147483648, 2147483647> $effect
         */
        public function SDL_HapticDestroyEffect(?\FFI\CData $haptic, int $effect): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLHaptic> $haptic
         * @param int<-2147483648, 2147483647> $effect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HapticGetEffectStatus(?\FFI\CData $haptic, int $effect): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLHaptic> $haptic
         * @param int<-2147483648, 2147483647> $gain
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HapticSetGain(?\FFI\CData $haptic, int $gain): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLHaptic> $haptic
         * @param int<-2147483648, 2147483647> $autocenter
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HapticSetAutocenter(?\FFI\CData $haptic, int $autocenter): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLHaptic> $haptic
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HapticPause(?\FFI\CData $haptic): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLHaptic> $haptic
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HapticUnpause(?\FFI\CData $haptic): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLHaptic> $haptic
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HapticStopAll(?\FFI\CData $haptic): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLHaptic> $haptic
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HapticRumbleSupported(?\FFI\CData $haptic): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLHaptic> $haptic
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HapticRumbleInit(?\FFI\CData $haptic): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLHaptic> $haptic
         * @param int<0, 4294967296> $length
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HapticRumblePlay(?\FFI\CData $haptic, float $strength, int $length): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLHaptic> $haptic
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_HapticRumbleStop(?\FFI\CData $haptic): int;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_hid_init(): int;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_hid_exit(): int;
        /**
         * @return int<0, 4294967296>
         */
        public function SDL_hid_device_change_count(): int;
        /**
         * @param int<0, 65536> $vendor_id
         * @param int<0, 65536> $product_id
         * @return null|\FFI\CData<\PHPSTORM_META\SDLHidDeviceInfo>
         */
        public function SDL_hid_enumerate(int $vendor_id, int $product_id): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLHidDeviceInfo> $devs
         */
        public function SDL_hid_free_enumeration(?\FFI\CData $devs): void;
        /**
         * @param int<0, 65536> $vendor_id
         * @param int<0, 65536> $product_id
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $serial_number
         * @return null|\FFI\CData<\PHPSTORM_META\SDLHidDevice>
         */
        public function SDL_hid_open(int $vendor_id, int $product_id, ?\FFI\CData $serial_number): ?\FFI\CData;
        /**
         * @param int<-2147483648, 2147483647> $bExclusive
         * @return null|\FFI\CData<\PHPSTORM_META\SDLHidDevice>
         */
        public function SDL_hid_open_path(string|\FFI\CData $path, int $bExclusive): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLHidDevice> $dev
         * @param null|\FFI\CData<int<0, 255>> $data
         * @param int<0, max> $length
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_hid_write(?\FFI\CData $dev, ?\FFI\CData $data, int $length): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLHidDevice> $dev
         * @param null|\FFI\CData<int<0, 255>> $data
         * @param int<0, max> $length
         * @param int<-2147483648, 2147483647> $milliseconds
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_hid_read_timeout(?\FFI\CData $dev, ?\FFI\CData $data, int $length, int $milliseconds): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLHidDevice> $dev
         * @param null|\FFI\CData<int<0, 255>> $data
         * @param int<0, max> $length
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_hid_read(?\FFI\CData $dev, ?\FFI\CData $data, int $length): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLHidDevice> $dev
         * @param int<-2147483648, 2147483647> $nonblock
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_hid_set_nonblocking(?\FFI\CData $dev, int $nonblock): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLHidDevice> $dev
         * @param null|\FFI\CData<int<0, 255>> $data
         * @param int<0, max> $length
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_hid_send_feature_report(?\FFI\CData $dev, ?\FFI\CData $data, int $length): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLHidDevice> $dev
         * @param null|\FFI\CData<int<0, 255>> $data
         * @param int<0, max> $length
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_hid_get_feature_report(?\FFI\CData $dev, ?\FFI\CData $data, int $length): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLHidDevice> $dev
         */
        public function SDL_hid_close(?\FFI\CData $dev): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLHidDevice> $dev
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $string
         * @param int<0, max> $maxlen
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_hid_get_manufacturer_string(?\FFI\CData $dev, ?\FFI\CData $string, int $maxlen): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLHidDevice> $dev
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $string
         * @param int<0, max> $maxlen
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_hid_get_product_string(?\FFI\CData $dev, ?\FFI\CData $string, int $maxlen): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLHidDevice> $dev
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $string
         * @param int<0, max> $maxlen
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_hid_get_serial_number_string(?\FFI\CData $dev, ?\FFI\CData $string, int $maxlen): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLHidDevice> $dev
         * @param int<-2147483648, 2147483647> $string_index
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $string
         * @param int<0, max> $maxlen
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_hid_get_indexed_string(?\FFI\CData $dev, int $string_index, ?\FFI\CData $string, int $maxlen): int;
        /**
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::* $active
         */
        public function SDL_hid_ble_scan(#[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])] int $active): void;
        /**
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Hint\Priority::* $priority
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_SetHintWithPriority(string|\FFI\CData $name, string|\FFI\CData $value, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Hint\Priority::SDL_HINT_DEFAULT, \Serafim\SDL\Hint\Priority::SDL_HINT_NORMAL, \Serafim\SDL\Hint\Priority::SDL_HINT_OVERRIDE])] int $priority): int;
        /**
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_SetHint(string|\FFI\CData $name, string|\FFI\CData $value): int;
        /**
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_ResetHint(string|\FFI\CData $name): int;
        public function SDL_ResetHints(): void;
        public function SDL_GetHint(string|\FFI\CData $name): string|\FFI\CData;
        /**
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::* $default_value
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_GetHintBoolean(string|\FFI\CData $name, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])] int $default_value): int;
        /**
         * @param null|\FFI\CData<callable(mixed, mixed, mixed, mixed):(mixed)> $callback
         */
        public function SDL_AddHintCallback(string|\FFI\CData $name, ?\FFI\CData $callback, ?\FFI\CData $userdata): void;
        /**
         * @param null|\FFI\CData<callable(mixed, mixed, mixed, mixed):(mixed)> $callback
         */
        public function SDL_DelHintCallback(string|\FFI\CData $name, ?\FFI\CData $callback, ?\FFI\CData $userdata): void;
        public function SDL_ClearHints(): void;
        public function SDL_LoadObject(string|\FFI\CData $sofile): ?\FFI\CData;
        public function SDL_LoadFunction(?\FFI\CData $handle, string|\FFI\CData $name): ?\FFI\CData;
        public function SDL_UnloadObject(?\FFI\CData $handle): void;
        /**
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Log\Priority::* $priority
         */
        public function SDL_LogSetAllPriority(#[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Log\Priority::SDL_LOG_PRIORITY_VERBOSE, \Serafim\SDL\Log\Priority::SDL_LOG_PRIORITY_DEBUG, \Serafim\SDL\Log\Priority::SDL_LOG_PRIORITY_INFO, \Serafim\SDL\Log\Priority::SDL_LOG_PRIORITY_WARN, \Serafim\SDL\Log\Priority::SDL_LOG_PRIORITY_ERROR, \Serafim\SDL\Log\Priority::SDL_LOG_PRIORITY_CRITICAL, \Serafim\SDL\Log\Priority::SDL_NUM_LOG_PRIORITIES])] int $priority): void;
        /**
         * @param int<-2147483648, 2147483647> $category
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Log\Priority::* $priority
         */
        public function SDL_LogSetPriority(int $category, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Log\Priority::SDL_LOG_PRIORITY_VERBOSE, \Serafim\SDL\Log\Priority::SDL_LOG_PRIORITY_DEBUG, \Serafim\SDL\Log\Priority::SDL_LOG_PRIORITY_INFO, \Serafim\SDL\Log\Priority::SDL_LOG_PRIORITY_WARN, \Serafim\SDL\Log\Priority::SDL_LOG_PRIORITY_ERROR, \Serafim\SDL\Log\Priority::SDL_LOG_PRIORITY_CRITICAL, \Serafim\SDL\Log\Priority::SDL_NUM_LOG_PRIORITIES])] int $priority): void;
        /**
         * @param int<-2147483648, 2147483647> $category
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Log\Priority::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Log\Priority::SDL_LOG_PRIORITY_VERBOSE, \Serafim\SDL\Log\Priority::SDL_LOG_PRIORITY_DEBUG, \Serafim\SDL\Log\Priority::SDL_LOG_PRIORITY_INFO, \Serafim\SDL\Log\Priority::SDL_LOG_PRIORITY_WARN, \Serafim\SDL\Log\Priority::SDL_LOG_PRIORITY_ERROR, \Serafim\SDL\Log\Priority::SDL_LOG_PRIORITY_CRITICAL, \Serafim\SDL\Log\Priority::SDL_NUM_LOG_PRIORITIES])]
        public function SDL_LogGetPriority(int $category): int;
        public function SDL_LogResetPriorities(): void;
        public function SDL_Log(string|\FFI\CData ...$fmt): void;
        /**
         * @param int<-2147483648, 2147483647> $category
         */
        public function SDL_LogVerbose(int $category, string|\FFI\CData ...$fmt): void;
        /**
         * @param int<-2147483648, 2147483647> $category
         */
        public function SDL_LogDebug(int $category, string|\FFI\CData ...$fmt): void;
        /**
         * @param int<-2147483648, 2147483647> $category
         */
        public function SDL_LogInfo(int $category, string|\FFI\CData ...$fmt): void;
        /**
         * @param int<-2147483648, 2147483647> $category
         */
        public function SDL_LogWarn(int $category, string|\FFI\CData ...$fmt): void;
        /**
         * @param int<-2147483648, 2147483647> $category
         */
        public function SDL_LogError(int $category, string|\FFI\CData ...$fmt): void;
        /**
         * @param int<-2147483648, 2147483647> $category
         */
        public function SDL_LogCritical(int $category, string|\FFI\CData ...$fmt): void;
        /**
         * @param int<-2147483648, 2147483647> $category
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Log\Priority::* $priority
         */
        public function SDL_LogMessage(int $category, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Log\Priority::SDL_LOG_PRIORITY_VERBOSE, \Serafim\SDL\Log\Priority::SDL_LOG_PRIORITY_DEBUG, \Serafim\SDL\Log\Priority::SDL_LOG_PRIORITY_INFO, \Serafim\SDL\Log\Priority::SDL_LOG_PRIORITY_WARN, \Serafim\SDL\Log\Priority::SDL_LOG_PRIORITY_ERROR, \Serafim\SDL\Log\Priority::SDL_LOG_PRIORITY_CRITICAL, \Serafim\SDL\Log\Priority::SDL_NUM_LOG_PRIORITIES])] int $priority, string|\FFI\CData ...$fmt): void;
        /**
         * @param int<-2147483648, 2147483647> $category
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Log\Priority::* $priority
         * @param list<mixed> $ap
         */
        public function SDL_LogMessageV(int $category, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Log\Priority::SDL_LOG_PRIORITY_VERBOSE, \Serafim\SDL\Log\Priority::SDL_LOG_PRIORITY_DEBUG, \Serafim\SDL\Log\Priority::SDL_LOG_PRIORITY_INFO, \Serafim\SDL\Log\Priority::SDL_LOG_PRIORITY_WARN, \Serafim\SDL\Log\Priority::SDL_LOG_PRIORITY_ERROR, \Serafim\SDL\Log\Priority::SDL_LOG_PRIORITY_CRITICAL, \Serafim\SDL\Log\Priority::SDL_NUM_LOG_PRIORITIES])] int $priority, string|\FFI\CData $fmt, array $ap): void;
        /**
         * @param null|\FFI\CData<null|\FFI\CData<callable(mixed, int<-2147483648, 2147483647>, int<-2147483648, 2147483647>|\Serafim\SDL\Log\Priority::*, mixed):(mixed)>> $callback
         */
        public function SDL_LogGetOutputFunction(?\FFI\CData $callback, ?\FFI\CData $userdata): void;
        /**
         * @param null|\FFI\CData<callable(mixed, int<-2147483648, 2147483647>, int<-2147483648, 2147483647>|\Serafim\SDL\Log\Priority::*, mixed):(mixed)> $callback
         */
        public function SDL_LogSetOutputFunction(?\FFI\CData $callback, ?\FFI\CData $userdata): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLMessageBoxData|null|object{flags:int<0, 4294967296>, window:null|\FFI\CData<\PHPSTORM_META\SDLWindow>, title:mixed, message:mixed, numbuttons:int<-2147483648, 2147483647>, buttons:null|\FFI\CData<\PHPSTORM_META\SDLMessageBoxButtonData|null|object{flags:int<0, 4294967296>, buttonid:int<-2147483648, 2147483647>, text:mixed}>, colorScheme:null|\FFI\CData<\PHPSTORM_META\SDLMessageBoxColorScheme|null|object{colors:list<\PHPSTORM_META\SDLMessageBoxColor|null|object{r:int<0, 255>, g:int<0, 255>, b:int<0, 255>}>}>}> $messageboxdata
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $buttonid
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_ShowMessageBox(?\FFI\CData $messageboxdata, ?\FFI\CData $buttonid): int;
        /**
         * @param int<0, 4294967296> $flags
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_ShowSimpleMessageBox(int $flags, string|\FFI\CData $title, string|\FFI\CData $message, ?\FFI\CData $window): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         */
        public function SDL_Metal_CreateView(?\FFI\CData $window): ?\FFI\CData;
        public function SDL_Metal_DestroyView(?\FFI\CData $view): void;
        public function SDL_Metal_GetLayer(?\FFI\CData $view): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $w
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $h
         */
        public function SDL_Metal_GetDrawableSize(?\FFI\CData $window, ?\FFI\CData $w, ?\FFI\CData $h): void;
        /**
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $seconds
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $percent
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Power\State::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Power\State::SDL_POWERSTATE_UNKNOWN, \Serafim\SDL\Power\State::SDL_POWERSTATE_ON_BATTERY, \Serafim\SDL\Power\State::SDL_POWERSTATE_NO_BATTERY, \Serafim\SDL\Power\State::SDL_POWERSTATE_CHARGING, \Serafim\SDL\Power\State::SDL_POWERSTATE_CHARGED])]
        public function SDL_GetPowerInfo(?\FFI\CData $seconds, ?\FFI\CData $percent): int;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetNumRenderDrivers(): int;
        /**
         * @param int<-2147483648, 2147483647> $index
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRendererInfo> $info
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetRenderDriverInfo(int $index, ?\FFI\CData $info): int;
        /**
         * @param int<-2147483648, 2147483647> $width
         * @param int<-2147483648, 2147483647> $height
         * @param int<0, 4294967296> $window_flags
         * @param null|\FFI\CData<null|\FFI\CData<\PHPSTORM_META\SDLWindow>> $window
         * @param null|\FFI\CData<null|\FFI\CData<\PHPSTORM_META\SDLRenderer>> $renderer
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_CreateWindowAndRenderer(int $width, int $height, int $window_flags, ?\FFI\CData $window, ?\FFI\CData $renderer): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @param int<-2147483648, 2147483647> $index
         * @param int<0, 4294967296> $flags
         * @return null|\FFI\CData<\PHPSTORM_META\SDLRenderer>
         */
        public function SDL_CreateRenderer(?\FFI\CData $window, int $index, int $flags): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSurface> $surface
         * @return null|\FFI\CData<\PHPSTORM_META\SDLRenderer>
         */
        public function SDL_CreateSoftwareRenderer(?\FFI\CData $surface): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @return null|\FFI\CData<\PHPSTORM_META\SDLRenderer>
         */
        public function SDL_GetRenderer(?\FFI\CData $window): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @return null|\FFI\CData<\PHPSTORM_META\SDLWindow>
         */
        public function SDL_RenderGetWindow(?\FFI\CData $renderer): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRendererInfo> $info
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetRendererInfo(?\FFI\CData $renderer, ?\FFI\CData $info): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $w
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $h
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetRendererOutputSize(?\FFI\CData $renderer, ?\FFI\CData $w, ?\FFI\CData $h): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @param int<0, 4294967296> $format
         * @param int<-2147483648, 2147483647> $access
         * @param int<-2147483648, 2147483647> $w
         * @param int<-2147483648, 2147483647> $h
         * @return null|\FFI\CData<\PHPSTORM_META\SDLTexture>
         */
        public function SDL_CreateTexture(?\FFI\CData $renderer, int $format, int $access, int $w, int $h): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSurface> $surface
         * @return null|\FFI\CData<\PHPSTORM_META\SDLTexture>
         */
        public function SDL_CreateTextureFromSurface(?\FFI\CData $renderer, ?\FFI\CData $surface): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLTexture> $texture
         * @param null|\FFI\CData<int<0, 4294967296>> $format
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $access
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $w
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $h
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_QueryTexture(?\FFI\CData $texture, ?\FFI\CData $format, ?\FFI\CData $access, ?\FFI\CData $w, ?\FFI\CData $h): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLTexture> $texture
         * @param int<0, 255> $r
         * @param int<0, 255> $g
         * @param int<0, 255> $b
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetTextureColorMod(?\FFI\CData $texture, int $r, int $g, int $b): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLTexture> $texture
         * @param null|\FFI\CData<int<0, 255>> $r
         * @param null|\FFI\CData<int<0, 255>> $g
         * @param null|\FFI\CData<int<0, 255>> $b
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetTextureColorMod(?\FFI\CData $texture, ?\FFI\CData $r, ?\FFI\CData $g, ?\FFI\CData $b): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLTexture> $texture
         * @param int<0, 255> $alpha
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetTextureAlphaMod(?\FFI\CData $texture, int $alpha): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLTexture> $texture
         * @param null|\FFI\CData<int<0, 255>> $alpha
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetTextureAlphaMod(?\FFI\CData $texture, ?\FFI\CData $alpha): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLTexture> $texture
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Video\BlendMode::* $blendMode
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetTextureBlendMode(?\FFI\CData $texture, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Video\BlendMode::SDL_BLENDMODE_NONE, \Serafim\SDL\Video\BlendMode::SDL_BLENDMODE_BLEND, \Serafim\SDL\Video\BlendMode::SDL_BLENDMODE_ADD, \Serafim\SDL\Video\BlendMode::SDL_BLENDMODE_MOD, \Serafim\SDL\Video\BlendMode::SDL_BLENDMODE_MUL, \Serafim\SDL\Video\BlendMode::SDL_BLENDMODE_INVALID])] int $blendMode): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLTexture> $texture
         * @param null|\FFI\CData<int<-2147483648, 2147483647>|\Serafim\SDL\Video\BlendMode::*> $blendMode
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetTextureBlendMode(?\FFI\CData $texture, ?\FFI\CData $blendMode): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLTexture> $texture
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Video\ScaleMode::* $scaleMode
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetTextureScaleMode(?\FFI\CData $texture, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Video\ScaleMode::SDL_SCALE_MODE_NEAREST, \Serafim\SDL\Video\ScaleMode::SDL_SCALE_MODE_LINEAR, \Serafim\SDL\Video\ScaleMode::SDL_SCALE_MODE_BEST])] int $scaleMode): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLTexture> $texture
         * @param null|\FFI\CData<int<-2147483648, 2147483647>|\Serafim\SDL\Video\ScaleMode::*> $scaleMode
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetTextureScaleMode(?\FFI\CData $texture, ?\FFI\CData $scaleMode): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLTexture> $texture
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetTextureUserData(?\FFI\CData $texture, ?\FFI\CData $userdata): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLTexture> $texture
         */
        public function SDL_GetTextureUserData(?\FFI\CData $texture): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLTexture> $texture
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $rect
         * @param int<-2147483648, 2147483647> $pitch
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_UpdateTexture(?\FFI\CData $texture, ?\FFI\CData $rect, ?\FFI\CData $pixels, int $pitch): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLTexture> $texture
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $rect
         * @param null|\FFI\CData<int<0, 255>> $Yplane
         * @param int<-2147483648, 2147483647> $Ypitch
         * @param null|\FFI\CData<int<0, 255>> $Uplane
         * @param int<-2147483648, 2147483647> $Upitch
         * @param null|\FFI\CData<int<0, 255>> $Vplane
         * @param int<-2147483648, 2147483647> $Vpitch
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_UpdateYUVTexture(?\FFI\CData $texture, ?\FFI\CData $rect, ?\FFI\CData $Yplane, int $Ypitch, ?\FFI\CData $Uplane, int $Upitch, ?\FFI\CData $Vplane, int $Vpitch): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLTexture> $texture
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $rect
         * @param null|\FFI\CData<int<0, 255>> $Yplane
         * @param int<-2147483648, 2147483647> $Ypitch
         * @param null|\FFI\CData<int<0, 255>> $UVplane
         * @param int<-2147483648, 2147483647> $UVpitch
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_UpdateNVTexture(?\FFI\CData $texture, ?\FFI\CData $rect, ?\FFI\CData $Yplane, int $Ypitch, ?\FFI\CData $UVplane, int $UVpitch): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLTexture> $texture
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $rect
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $pitch
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_LockTexture(?\FFI\CData $texture, ?\FFI\CData $rect, ?\FFI\CData $pixels, ?\FFI\CData $pitch): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLTexture> $texture
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $rect
         * @param null|\FFI\CData<null|\FFI\CData<\PHPSTORM_META\SDLSurface>> $surface
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_LockTextureToSurface(?\FFI\CData $texture, ?\FFI\CData $rect, ?\FFI\CData $surface): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLTexture> $texture
         */
        public function SDL_UnlockTexture(?\FFI\CData $texture): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_RenderTargetSupported(?\FFI\CData $renderer): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @param null|\FFI\CData<\PHPSTORM_META\SDLTexture> $texture
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetRenderTarget(?\FFI\CData $renderer, ?\FFI\CData $texture): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @return null|\FFI\CData<\PHPSTORM_META\SDLTexture>
         */
        public function SDL_GetRenderTarget(?\FFI\CData $renderer): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @param int<-2147483648, 2147483647> $w
         * @param int<-2147483648, 2147483647> $h
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderSetLogicalSize(?\FFI\CData $renderer, int $w, int $h): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $w
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $h
         */
        public function SDL_RenderGetLogicalSize(?\FFI\CData $renderer, ?\FFI\CData $w, ?\FFI\CData $h): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::* $enable
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderSetIntegerScale(?\FFI\CData $renderer, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])] int $enable): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_RenderGetIntegerScale(?\FFI\CData $renderer): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $rect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderSetViewport(?\FFI\CData $renderer, ?\FFI\CData $rect): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $rect
         */
        public function SDL_RenderGetViewport(?\FFI\CData $renderer, ?\FFI\CData $rect): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $rect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderSetClipRect(?\FFI\CData $renderer, ?\FFI\CData $rect): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $rect
         */
        public function SDL_RenderGetClipRect(?\FFI\CData $renderer, ?\FFI\CData $rect): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_RenderIsClipEnabled(?\FFI\CData $renderer): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderSetScale(?\FFI\CData $renderer, float $scaleX, float $scaleY): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         */
        public function SDL_RenderGetScale(?\FFI\CData $renderer, ?\FFI\CData $scaleX, ?\FFI\CData $scaleY): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @param int<-2147483648, 2147483647> $windowX
         * @param int<-2147483648, 2147483647> $windowY
         */
        public function SDL_RenderWindowToLogical(?\FFI\CData $renderer, int $windowX, int $windowY, ?\FFI\CData $logicalX, ?\FFI\CData $logicalY): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $windowX
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $windowY
         */
        public function SDL_RenderLogicalToWindow(?\FFI\CData $renderer, float $logicalX, float $logicalY, ?\FFI\CData $windowX, ?\FFI\CData $windowY): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @param int<0, 255> $r
         * @param int<0, 255> $g
         * @param int<0, 255> $b
         * @param int<0, 255> $a
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetRenderDrawColor(?\FFI\CData $renderer, int $r, int $g, int $b, int $a): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @param null|\FFI\CData<int<0, 255>> $r
         * @param null|\FFI\CData<int<0, 255>> $g
         * @param null|\FFI\CData<int<0, 255>> $b
         * @param null|\FFI\CData<int<0, 255>> $a
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetRenderDrawColor(?\FFI\CData $renderer, ?\FFI\CData $r, ?\FFI\CData $g, ?\FFI\CData $b, ?\FFI\CData $a): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Video\BlendMode::* $blendMode
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetRenderDrawBlendMode(?\FFI\CData $renderer, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Video\BlendMode::SDL_BLENDMODE_NONE, \Serafim\SDL\Video\BlendMode::SDL_BLENDMODE_BLEND, \Serafim\SDL\Video\BlendMode::SDL_BLENDMODE_ADD, \Serafim\SDL\Video\BlendMode::SDL_BLENDMODE_MOD, \Serafim\SDL\Video\BlendMode::SDL_BLENDMODE_MUL, \Serafim\SDL\Video\BlendMode::SDL_BLENDMODE_INVALID])] int $blendMode): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @param null|\FFI\CData<int<-2147483648, 2147483647>|\Serafim\SDL\Video\BlendMode::*> $blendMode
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetRenderDrawBlendMode(?\FFI\CData $renderer, ?\FFI\CData $blendMode): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderClear(?\FFI\CData $renderer): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @param int<-2147483648, 2147483647> $x
         * @param int<-2147483648, 2147483647> $y
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderDrawPoint(?\FFI\CData $renderer, int $x, int $y): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @param null|\FFI\CData<\PHPSTORM_META\SDLPoint> $points
         * @param int<-2147483648, 2147483647> $count
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderDrawPoints(?\FFI\CData $renderer, ?\FFI\CData $points, int $count): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @param int<-2147483648, 2147483647> $x1
         * @param int<-2147483648, 2147483647> $y1
         * @param int<-2147483648, 2147483647> $x2
         * @param int<-2147483648, 2147483647> $y2
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderDrawLine(?\FFI\CData $renderer, int $x1, int $y1, int $x2, int $y2): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @param null|\FFI\CData<\PHPSTORM_META\SDLPoint> $points
         * @param int<-2147483648, 2147483647> $count
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderDrawLines(?\FFI\CData $renderer, ?\FFI\CData $points, int $count): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $rect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderDrawRect(?\FFI\CData $renderer, ?\FFI\CData $rect): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $rects
         * @param int<-2147483648, 2147483647> $count
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderDrawRects(?\FFI\CData $renderer, ?\FFI\CData $rects, int $count): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $rect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderFillRect(?\FFI\CData $renderer, ?\FFI\CData $rect): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $rects
         * @param int<-2147483648, 2147483647> $count
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderFillRects(?\FFI\CData $renderer, ?\FFI\CData $rects, int $count): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @param null|\FFI\CData<\PHPSTORM_META\SDLTexture> $texture
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $srcrect
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $dstrect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderCopy(?\FFI\CData $renderer, ?\FFI\CData $texture, ?\FFI\CData $srcrect, ?\FFI\CData $dstrect): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @param null|\FFI\CData<\PHPSTORM_META\SDLTexture> $texture
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $srcrect
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $dstrect
         * @param null|\FFI\CData<\PHPSTORM_META\SDLPoint> $center
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Video\RendererFlip::* $flip
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderCopyEx(?\FFI\CData $renderer, ?\FFI\CData $texture, ?\FFI\CData $srcrect, ?\FFI\CData $dstrect, float $angle, ?\FFI\CData $center, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Video\RendererFlip::SDL_FLIP_NONE, \Serafim\SDL\Video\RendererFlip::SDL_FLIP_HORIZONTAL, \Serafim\SDL\Video\RendererFlip::SDL_FLIP_VERTICAL])] int $flip): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderDrawPointF(?\FFI\CData $renderer, float $x, float $y): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @param null|\FFI\CData<\PHPSTORM_META\SDLFPoint> $points
         * @param int<-2147483648, 2147483647> $count
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderDrawPointsF(?\FFI\CData $renderer, ?\FFI\CData $points, int $count): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderDrawLineF(?\FFI\CData $renderer, float $x1, float $y1, float $x2, float $y2): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @param null|\FFI\CData<\PHPSTORM_META\SDLFPoint> $points
         * @param int<-2147483648, 2147483647> $count
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderDrawLinesF(?\FFI\CData $renderer, ?\FFI\CData $points, int $count): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @param null|\FFI\CData<\PHPSTORM_META\SDLFRect> $rect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderDrawRectF(?\FFI\CData $renderer, ?\FFI\CData $rect): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @param null|\FFI\CData<\PHPSTORM_META\SDLFRect> $rects
         * @param int<-2147483648, 2147483647> $count
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderDrawRectsF(?\FFI\CData $renderer, ?\FFI\CData $rects, int $count): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @param null|\FFI\CData<\PHPSTORM_META\SDLFRect> $rect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderFillRectF(?\FFI\CData $renderer, ?\FFI\CData $rect): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @param null|\FFI\CData<\PHPSTORM_META\SDLFRect> $rects
         * @param int<-2147483648, 2147483647> $count
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderFillRectsF(?\FFI\CData $renderer, ?\FFI\CData $rects, int $count): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @param null|\FFI\CData<\PHPSTORM_META\SDLTexture> $texture
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $srcrect
         * @param null|\FFI\CData<\PHPSTORM_META\SDLFRect> $dstrect
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderCopyF(?\FFI\CData $renderer, ?\FFI\CData $texture, ?\FFI\CData $srcrect, ?\FFI\CData $dstrect): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @param null|\FFI\CData<\PHPSTORM_META\SDLTexture> $texture
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $srcrect
         * @param null|\FFI\CData<\PHPSTORM_META\SDLFRect> $dstrect
         * @param null|\FFI\CData<\PHPSTORM_META\SDLFPoint> $center
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Video\RendererFlip::* $flip
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderCopyExF(?\FFI\CData $renderer, ?\FFI\CData $texture, ?\FFI\CData $srcrect, ?\FFI\CData $dstrect, float $angle, ?\FFI\CData $center, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Video\RendererFlip::SDL_FLIP_NONE, \Serafim\SDL\Video\RendererFlip::SDL_FLIP_HORIZONTAL, \Serafim\SDL\Video\RendererFlip::SDL_FLIP_VERTICAL])] int $flip): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @param null|\FFI\CData<\PHPSTORM_META\SDLTexture> $texture
         * @param null|\FFI\CData<\PHPSTORM_META\SDLVertex> $vertices
         * @param int<-2147483648, 2147483647> $num_vertices
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $indices
         * @param int<-2147483648, 2147483647> $num_indices
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderGeometry(?\FFI\CData $renderer, ?\FFI\CData $texture, ?\FFI\CData $vertices, int $num_vertices, ?\FFI\CData $indices, int $num_indices): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @param null|\FFI\CData<\PHPSTORM_META\SDLTexture> $texture
         * @param int<-2147483648, 2147483647> $xy_stride
         * @param null|\FFI\CData<\PHPSTORM_META\SDLColor> $color
         * @param int<-2147483648, 2147483647> $color_stride
         * @param int<-2147483648, 2147483647> $uv_stride
         * @param int<-2147483648, 2147483647> $num_vertices
         * @param int<-2147483648, 2147483647> $num_indices
         * @param int<-2147483648, 2147483647> $size_indices
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderGeometryRaw(?\FFI\CData $renderer, ?\FFI\CData $texture, ?\FFI\CData $xy, int $xy_stride, ?\FFI\CData $color, int $color_stride, ?\FFI\CData $uv, int $uv_stride, int $num_vertices, ?\FFI\CData $indices, int $num_indices, int $size_indices): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRect> $rect
         * @param int<0, 4294967296> $format
         * @param int<-2147483648, 2147483647> $pitch
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderReadPixels(?\FFI\CData $renderer, ?\FFI\CData $rect, int $format, ?\FFI\CData $pixels, int $pitch): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         */
        public function SDL_RenderPresent(?\FFI\CData $renderer): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLTexture> $texture
         */
        public function SDL_DestroyTexture(?\FFI\CData $texture): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         */
        public function SDL_DestroyRenderer(?\FFI\CData $renderer): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderFlush(?\FFI\CData $renderer): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLTexture> $texture
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GL_BindTexture(?\FFI\CData $texture, ?\FFI\CData $texw, ?\FFI\CData $texh): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLTexture> $texture
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GL_UnbindTexture(?\FFI\CData $texture): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         */
        public function SDL_RenderGetMetalLayer(?\FFI\CData $renderer): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         */
        public function SDL_RenderGetMetalCommandEncoder(?\FFI\CData $renderer): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @param int<-2147483648, 2147483647> $vsync
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_RenderSetVSync(?\FFI\CData $renderer, int $vsync): int;
        /**
         * @param int<0, 4294967296> $x
         * @param int<0, 4294967296> $y
         * @param int<0, 4294967296> $w
         * @param int<0, 4294967296> $h
         * @param int<0, 4294967296> $flags
         * @return null|\FFI\CData<\PHPSTORM_META\SDLWindow>
         */
        public function SDL_CreateShapedWindow(string|\FFI\CData $title, int $x, int $y, int $w, int $h, int $flags): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_IsShapedWindow(?\FFI\CData $window): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @param null|\FFI\CData<\PHPSTORM_META\SDLSurface> $shape
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindowShapeMode> $shape_mode
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_SetWindowShape(?\FFI\CData $window, ?\FFI\CData $shape, ?\FFI\CData $shape_mode): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindow> $window
         * @param null|\FFI\CData<\PHPSTORM_META\SDLWindowShapeMode> $shape_mode
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetShapedWindowMode(?\FFI\CData $window, ?\FFI\CData $shape_mode): int;
        /**
         * @param null|\FFI\CData<callable(mixed, mixed, int<0, 4294967296>, int<0, max>, int<min, max>):(mixed)> $callback
         */
        public function SDL_SetWindowsMessageHook(?\FFI\CData $callback, ?\FFI\CData $userdata): void;
        /**
         * @param int<-2147483648, 2147483647> $displayIndex
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_Direct3D9GetAdapterIndex(int $displayIndex): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @return null|\FFI\CData<\PHPSTORM_META\IDirect3DDevice9>
         */
        public function SDL_RenderGetD3D9Device(?\FFI\CData $renderer): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @return null|\FFI\CData<\PHPSTORM_META\ID3D11Device>
         */
        public function SDL_RenderGetD3D11Device(?\FFI\CData $renderer): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRenderer> $renderer
         * @return null|\FFI\CData<\PHPSTORM_META\ID3D12Device>
         */
        public function SDL_RenderGetD3D12Device(?\FFI\CData $renderer): ?\FFI\CData;
        /**
         * @param int<-2147483648, 2147483647> $displayIndex
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $adapterIndex
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $outputIndex
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_DXGIGetOutputInfo(int $displayIndex, ?\FFI\CData $adapterIndex, ?\FFI\CData $outputIndex): int;
        /**
         * @param int<min, max> $threadID
         * @param int<-2147483648, 2147483647> $priority
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_LinuxSetThreadPriority(int $threadID, int $priority): int;
        /**
         * @param int<min, max> $threadID
         * @param int<-2147483648, 2147483647> $sdlPriority
         * @param int<-2147483648, 2147483647> $schedPolicy
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_LinuxSetThreadPriorityAndPolicy(int $threadID, int $sdlPriority, int $schedPolicy): int;
        /**
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\WinRT\Path::* $pathType
         * @return null|\FFI\CData<int<-2147483648, 2147483647>>
         */
        public function SDL_WinRTGetFSPathUNICODE(#[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\WinRT\Path::SDL_WINRT_PATH_INSTALLED_LOCATION, \Serafim\SDL\WinRT\Path::SDL_WINRT_PATH_LOCAL_FOLDER, \Serafim\SDL\WinRT\Path::SDL_WINRT_PATH_ROAMING_FOLDER, \Serafim\SDL\WinRT\Path::SDL_WINRT_PATH_TEMP_FOLDER])] int $pathType): ?\FFI\CData;
        /**
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\WinRT\Path::* $pathType
         */
        public function SDL_WinRTGetFSPathUTF8(#[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\WinRT\Path::SDL_WINRT_PATH_INSTALLED_LOCATION, \Serafim\SDL\WinRT\Path::SDL_WINRT_PATH_LOCAL_FOLDER, \Serafim\SDL\WinRT\Path::SDL_WINRT_PATH_ROAMING_FOLDER, \Serafim\SDL\WinRT\Path::SDL_WINRT_PATH_TEMP_FOLDER])] int $pathType): string|\FFI\CData;
        /**
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\WinRT\DeviceFamily::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\WinRT\DeviceFamily::SDL_WINRT_DEVICEFAMILY_UNKNOWN, \Serafim\SDL\WinRT\DeviceFamily::SDL_WINRT_DEVICEFAMILY_DESKTOP, \Serafim\SDL\WinRT\DeviceFamily::SDL_WINRT_DEVICEFAMILY_MOBILE, \Serafim\SDL\WinRT\DeviceFamily::SDL_WINRT_DEVICEFAMILY_XBOX])]
        public function SDL_WinRTGetDeviceFamily(): int;
        /**
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_IsTablet(): int;
        public function SDL_OnApplicationWillTerminate(): void;
        public function SDL_OnApplicationDidReceiveMemoryWarning(): void;
        public function SDL_OnApplicationWillResignActive(): void;
        public function SDL_OnApplicationDidEnterBackground(): void;
        public function SDL_OnApplicationWillEnterForeground(): void;
        public function SDL_OnApplicationDidBecomeActive(): void;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GDKGetTaskQueue(?\FFI\CData $outTaskQueue): int;
        /**
         * @return int<0, 4294967296>
         */
        public function SDL_GetTicks(): int;
        /**
         * @return int<0, max>
         */
        public function SDL_GetTicks64(): int;
        /**
         * @return int<0, max>
         */
        public function SDL_GetPerformanceCounter(): int;
        /**
         * @return int<0, max>
         */
        public function SDL_GetPerformanceFrequency(): int;
        /**
         * @param int<0, 4294967296> $ms
         */
        public function SDL_Delay(int $ms): void;
        /**
         * @param int<0, 4294967296> $interval
         * @param null|\FFI\CData<callable(int<0, 4294967296>, mixed):(int<0, 4294967296>)> $callback
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_AddTimer(int $interval, ?\FFI\CData $callback, ?\FFI\CData $param): int;
        /**
         * @param int<-2147483648, 2147483647> $id
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Boolean::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Boolean::SDL_FALSE, \Serafim\SDL\Boolean::SDL_TRUE])]
        public function SDL_RemoveTimer(int $id): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLVersion> $ver
         */
        public function SDL_GetVersion(?\FFI\CData $ver): void;
        public function SDL_GetRevision(): string|\FFI\CData;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_GetRevisionNumber(): int;
        /**
         * @return null|\FFI\CData<\PHPSTORM_META\SDLLocale>
         */
        public function SDL_GetPreferredLocales(): ?\FFI\CData;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_OpenURL(string|\FFI\CData $url): int;
        /**
         * @param int<0, 4294967296> $flags
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_Init(int $flags): int;
        /**
         * @param int<0, 4294967296> $flags
         * @return int<-2147483648, 2147483647>
         */
        public function SDL_InitSubSystem(int $flags): int;
        /**
         * @param int<0, 4294967296> $flags
         */
        public function SDL_QuitSubSystem(int $flags): void;
        /**
         * @param int<0, 4294967296> $flags
         * @return int<0, 4294967296>
         */
        public function SDL_WasInit(int $flags): int;
        public function SDL_Quit(): void;
    }
}