<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL;

use FFI\CPtr;
use FFI\CData;
use FFI\CScalar;
use FFI\CStruct;
use Serafim\SDL\Kernel\Keyboard\Key;
use Serafim\SDL\Kernel\Keyboard\KeyMode;
use Serafim\SDL\Kernel\Keyboard\ScanCode;

/**
 * <code>
 *  typedef struct AssertData
 *  {
 *      int always_ignore;
 *      unsigned int trigger_count;
 *      const char* condition;
 *      const char* filename;
 *      int linenum;
 *      const char* function;
 *      const struct AssertData* next;
 *  } AssertData;
 * </code>
 *
 * @see NativeApi::ReportAssertion
 * @see NativeApi::GetAssertionReport
 */
class AssertData extends CStruct
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
     * @var string|CScalar
     */
    public CScalar $condition;

    /**
     * @var string|CScalar
     */
    public CScalar $filename;

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

/**
 * A type representing an atomic integer value.
 * It is a struct so people don't accidentally use numeric operations on it.
 *
 * <code>
 *  typedef struct {
 *      int value;
 *  } AtomicT;
 * </code>
 *
 * @see NativeApi::AtomicCAS
 * @see NativeApi::AtomicSet
 * @see NativeApi::AtomicGet
 * @see NativeApi::AtomicAdd
 */
class AtomicT extends CStruct
{
    /**
     * The atomic integer value
     *
     * @var int
     */
    public int $value;
}

/**
 * The SDL mutex structure, defined in sysmutex.c
 *
 * TODO Finish the description of this structure
 */
class Mutex extends CData
{
}

/**
 * The SDL semaphore structure, defined in syssem.c
 *
 * TODO Finish the description of this structure
 */
class Semaphore extends CData
{
}

/**
 * The SDL condition variable structure, defined in syscond.c
 *
 * TODO Finish the description of this structure
 */
class Cond extends CData
{
}

/**
 * The SDL thread structure, defined in thread.c
 *
 * TODO Finish the description of this structure
 */
class Thread extends CData
{
}

/**
 * This is the read/write operation structure -- very basic.
 *
 * TODO Finish the description of this structure
 */
class RWops extends CData
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
     * Close and free an allocated RWops structure.
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
 *  The calculated values in this structure are calculated by OpenAudio().
 *
 *  For multi-channel audio, the default SDL channel mapping is:
 *  2:  FL FR                       (stereo)
 *  3:  FL FR LFE                   (2.1 surround)
 *  4:  FL FR BL BR                 (quad)
 *  5:  FL FR FC BL BR              (quad + center)
 *  6:  FL FR FC LFE SL SR          (5.1 surround - last two can also be BL BR)
 *  7:  FL FR FC LFE BC SL SR       (6.1 surround)
 *  8:  FL FR FC LFE BL BR SL SR    (7.1 surround)
 *
 * TODO Finish the description of this structure
 */
class AudioSpec extends CData
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
     * @var int|int
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
     * Callback that feeds the audio device (NULL to use QueueAudio()).
     *
     * @var \Closure|CData
     */
    public \Closure $callback;

    /**
     * Userdata passed to callback (ignored for NULL callbacks).
     */
    public $userdata;
}

/**
 * A structure that contains audio data conversion information.
 *
 * @see https://wiki.libsdl.org/AudioCVT
 *
 * TODO Finish the description of this structure
 */
class AudioCVT extends CData
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
     * @var int|int
     */
    public int $src_format;

    /**
     * Target audio format
     *
     * @var int|int
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
     * buffer must be len* len_mult big
     *
     * @var int
     */
    public int $len_mult;

    /**
     * Given len, final size is len* len_ratio
     */
    public float $len_ratio;

    /**
     * NULL-terminated list of filter functions
     *
     * @internal Internal usage
     * @var array|\Closure[]
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
 * AudioStream is a new audio conversion interface.
 *
 * The benefits vs AudioCVT:
 *  - it can handle resampling data in chunks without generating
 *      artifacts, when it doesn't have the complete buffer available.
 *  - it can handle incoming data in any variable size.
 *  - You push data as you have it, and pull it when you need it
 *
 * TODO Finish the description of this structure
 */
class AudioStream extends CData
{
}

/**
 * Everything in the pixel format structure is read-only.
 *
 * TODO Finish the description of this structure
 */
class PixelFormat extends CData
{
    /**
     * Uint32 format;
     *
     * @var int
     */
    public int $format;

    /**
     * Palette* palette;
     *
     * @var Palette|Palette[]|CData|null
     */
    public ?Palette $palette;

    /**
     * Uint8 BitsPerPixel;
     *
     * @var int
     */
    public int $BitsPerPixel;

    /**
     * Uint8 BytesPerPixel;
     *
     * @var int
     */
    public int $BytesPerPixel;

    /**
     * Uint8 padding[2];
     *
     * @var array|int[]
     */
    public array $padding;

    /**
     * Uint32 Rmask;
     *
     * @var int
     */
    public int $Rmask;

    /**
     * Uint32 Gmask;
     *
     * @var int
     */
    public int $Gmask;

    /**
     * Uint32 Bmask;
     *
     * @var int
     */
    public int $Bmask;

    /**
     * Uint32 Amask;
     *
     * @var int
     */
    public int $Amask;

    /**
     * Uint8 Rloss;
     *
     * @var int
     */
    public int $Rloss;

    /**
     * Uint8 Gloss;
     *
     * @var int
     */
    public int $Gloss;

    /**
     * Uint8 Bloss;
     *
     * @var int
     */
    public int $Bloss;

    /**
     * Uint8 Aloss;
     *
     * @var int
     */
    public int $Aloss;

    /**
     * Uint8 Rshift;
     *
     * @var int
     */
    public int $Rshift;

    /**
     * Uint8 Gshift;
     *
     * @var int
     */
    public int $Gshift;

    /**
     * Uint8 Bshift;
     *
     * @var int
     */
    public int $Bshift;

    /**
     * Uint8 Ashift;
     *
     * @var int
     */
    public int $Ashift;

    /**
     * int refcount;
     *
     * @var int
     */
    public int $refcount;

    /**
     * struct PixelFormat* next;
     *
     * @var PixelFormat|PixelFormat[]|CData|null
     */
    public ?PixelFormat $next;
}

/**
 * A structure that contains palette information.
 *
 * TODO Finish the description of this structure
 */
class Palette extends CData
{
    /**
     * int ncolors;
     *
     * @var int
     */
    public int $ncolors;

    /**
     * Color* colors;
     *
     * @var Color|Color[]|CData|null
     */
    public ?Color $colors;

    /**
     * Uint32 version;
     *
     * @var int
     */
    public int $version;

    /**
     * int refcount;
     *
     * @var int
     */
    public int $refcount;
}

/**
 * A structure that represents a color.
 *
 * TODO Finish the description of this structure
 */
class Color extends CData
{
    /**
     * Uint8 r;
     *
     * @var int
     */
    public int $r;

    /**
     * Uint8 g;
     *
     * @var int
     */
    public int $g;

    /**
     * Uint8 b;
     *
     * @var int
     */
    public int $b;

    /**
     * Uint8 a;
     *
     * @var int
     */
    public int $a;
}

/**
 * A rectangle, with the origin at the upper left (integer).
 *
 * TODO Finish the description of this structure
 */
class Rect extends CData
{
    /**
     * @var int
     */
    public int $x;

    /**
     * @var int
     */
    public int $y;

    /**
     * @var int
     */
    public int $w;

    /**
     * @var int
     */
    public int $h;
}

/**
 * A structure that contains a collection of pixels used in software blitting.
 *
 * TODO Finish the description of this structure
 */
class Surface extends CData
{
    /**
     * @var int
     */
    public int $flags;

    /**
     * @var PixelFormat|PixelFormat[]|CData
     */
    public PixelFormat $format;

    /**
     * @var int
     */
    public int $w;

    /**
     * @var int
     */
    public int $h;

    /**
     * @var int
     */
    public int $pitch;

    /**
     * @var CData|int[]|null
     */
    public ?CData $pixels;

    /**
     * @var CData|mixed[]|null
     */
    public ?CData $userdata;

    /**
     * @var int
     */
    public int $locked;

    /**
     * @var CData|mixed[]|null
     */
    public ?CData $lock_data;

    /**
     * @var Rect|CData
     */
    public Rect $clip_rect;

    /**
     * @var BlitMap|BlitMap[]|CData
     */
    public BlitMap $map;

    /**
     * @var int
     */
    public int $refcount;
}

/**
 * Info for fast blit mapping to other surfaces
 *
 * TODO Finish the description of this structure
 */
class BlitMap extends CData
{
}

/**
 * Class DisplayMode
 *
 * TODO Finish the description of this structure
 */
class DisplayMode extends CData
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
     * @var CData|mixed|null
     */
    public ?CData $driverdata;
}

/**
 * The type used to identify a window
 *
 * TODO Finish the description of this structure
 */
class Window extends CData
{
}

/**
 * An opaque handle to an OpenGL context
 */
class GLContext extends CData
{
}

/**
 * Implementation dependent
 *
 * TODO Finish the description of this structure
 */
class Cursor extends CData
{
}

/**
 * A structure that encodes the stable unique id for a joystick device
 *
 * TODO Finish the description of this structure
 */
class JoystickGUID extends CData
{
    /**
     * @var array|int[]
     */
    public array $data;
}

/**
 * The joystick structure used to identify an SDL joystick
 *
 * TODO Finish the description of this structure
 */
class Joystick extends CData
{
}

/**
 * The Game Controller structure used to identify an SDL game controller
 *
 * TODO Finish the description of this structure
 */
class GameController extends CData
{
}

/**
 * Class GameControllerButtonBind
 *
 * TODO Finish the description of this structure
 */
class GameControllerButtonBind extends CData
{
    /**
     * GameControllerBindType bindType;
     *
     * @var int
     */
    public int $bindType;

    /**
     * union {
     *  int button;
     *  int axis;
     *  struct { int hat; int hat_mask; } hat;
     * } value;
     *
     * @var GameControllerButtonBindValue
     */
    public GameControllerButtonBindValue $value;
}

/**
 * TODO Finish the description of this structure
 */
class GameControllerButtonBindValue extends CData
{
    /**
     * int button;
     *
     * @var int
     */
    public int $button;

    /**
     * int axis;
     *
     * @var int
     */
    public int $axis;

    /**
     * struct { int hat; int hat_mask; } hat;
     *
     * @var GameControllerButtonBindValueHat|CData
     */
    public GameControllerButtonBindValueHat $hat;
}

/**
 * TODO Finish the description of this structure
 */
class GameControllerButtonBindValueHat extends CData
{
    /**
     * int hat;
     *
     * @var int
     */
    public int $hat;

    /**
     * int hat_mask;
     *
     * @var int
     */
    public int $hat_mask;
}

/**
 * TODO Finish the description of this structure
 */
class Finger extends CData
{
    /**
     * FingerID id;
     *
     * @var int
     */
    public int $id;

    /**
     * float x;
     *
     * @var float
     */
    public float $x;

    /**
     * float y;
     *
     * @var float
     */
    public float $y;

    /**
     * float pressure;
     *
     * @var float
     */
    public float $pressure;
}

/**
 * General event structure
 *
 * TODO Finish the description of this structure
 */
class Event extends CData
{
    public int                       $type;

    public CommonEvent           $common;

    public DisplayEvent          $display;

    public WindowEvent           $window;

    public KeyboardEvent         $key;

    public TextEditingEvent      $edit;

    public TextInputEvent        $text;

    public MouseMotionEvent      $motion;

    public MouseButtonEvent      $button;

    public MouseWheelEvent       $wheel;

    public JoyAxisEvent          $jaxis;

    public JoyBallEvent          $jball;

    public JoyHatEvent           $jhat;

    public JoyButtonEvent        $jbutton;

    public JoyDeviceEvent        $jdevice;

    public ControllerAxisEvent   $caxis;

    public ControllerButtonEvent $cbutton;

    public ControllerDeviceEvent $cdevice;

    public AudioDeviceEvent      $adevice;

    public SensorEvent           $sensor;

    public QuitEvent             $quit;

    public UserEvent             $user;

    public SysWMEvent            $syswm;

    public TouchFingerEvent      $tfinger;

    public MultiGestureEvent     $mgesture;

    public DollarGestureEvent    $dgesture;

    public DropEvent             $drop;

    /**
     * @var array|int[]
     */
    public array $padding;
}

/**
 * TODO Finish the description of this structure
 */
class CommonEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class DisplayEvent extends CData
{
}

/**
 * A structure that contains window state change event data.
 *
 * <code>
 *  typedef struct SDL_WindowEvent {
 *      Uint32 type;
 *      Uint32 timestamp;
 *      Uint32 windowID;
 *      Uint8 event;
 *      Uint8 padding1;
 *      Uint8 padding2;
 *      Uint8 padding3;
 *      Sint32 data1;
 *      Sint32 data2;
 *  } SDL_WindowEvent;
 * </code>
 *
 * @see https://wiki.libsdl.org/SDL_WindowEvent
 */
class WindowEvent extends CData
{
    /**
     * @var int
     */
    public int $type;

    /**
     * @var int
     */
    public int $timestamp;

    /**
     * @var int
     */
    public int $windowID;

    /**
     * @var int
     */
    public int $event;

    /**
     * @var int
     */
    public int $padding1;

    /**
     * @var int
     */
    public int $padding2;

    /**
     * @var int
     */
    public int $padding3;

    /**
     * @var int
     */
    public int $data1;

    /**
     * @var int
     */
    public int $data2;
}

/**
 * A structure that contains keyboard button event information.
 *
 * <code>
 *  typedef struct SDL_KeyboardEvent {
 *      Uint32 type;
 *      Uint32 timestamp;
 *      Uint32 windowID;
 *      Uint8 state;
 *      Uint8 repeat;
 *      Uint8 padding2;
 *      Uint8 padding3;
 *      SDL_Keysym keysym;
 *  } SDL_KeyboardEvent;
 * </code>
 * @see https://wiki.libsdl.org/SDL_KeyboardEvent
 */
class KeyboardEvent extends CData
{
    /**
     * @var int
     */
    public int $type;

    /**
     * @var int
     */
    public int $timestamp;

    /**
     * @var int
     */
    public int $windowID;

    /**
     * @var int
     */
    public int $state;

    /**
     * @var int
     */
    public int $repeat;

    /**
     * @var int
     */
    public int $padding2;

    /**
     * @var int
     */
    public int $padding3;

    /**
     * @var KeySym
     */
    public KeySym $keysym;
}

/**
 * <code>
 *  typedef struct SDL_Keysym {
 *      SDL_Scancode scancode;
 *      SDL_Keycode sym;
 *      Uint16 mod;
 *      Uint32 unused;
 *  } SDL_Keysym;
 * </code>
 *
 * @see https://wiki.libsdl.org/SDL_Keysym
 */
class KeySym extends CData
{
    /**
     * @var int|ScanCode
     */
    public int $scancode;

    /**
     * @var int|Key
     */
    public int $sym;

    /**
     * @var int|KeyMode
     */
    public int $mod;

    /**
     * @deprecated Unused
     * @var int
     */
    public int $unused;
}

/**
 * TODO Finish the description of this structure
 */
class TextInputEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class MouseMotionEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class MouseButtonEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class TextEditingEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class MouseWheelEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class JoyAxisEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class JoyBallEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class JoyHatEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class JoyButtonEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class JoyDeviceEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class ControllerAxisEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class ControllerButtonEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class ControllerDeviceEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class AudioDeviceEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SensorEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class QuitEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class UserEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SysWMEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class TouchFingerEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class MultiGestureEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class DollarGestureEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class DropEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class EventAction extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class EventFilter extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class Haptic extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class HapticEffect extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class LogPriority extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class LogOutputFunction extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class MessageBoxData extends CData
{
    /**
     * MessageBoxFlags
     *
     * @var int
     */
    public int $flags;

    /**
     * Parent window, can be NULL
     *
     * @var Window|CData
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
     * @var MessageBoxButtonData[]|CData[]
     */
    public array $buttons;

    /**
     * MessageBoxColorScheme, can be NULL to use system settings
     *
     * @var MessageBoxColorScheme|CData
     */
    public CData $colorScheme;
}

/**
 * TODO Finish the description of this structure
 */
class MessageBoxColorScheme extends CData
{
    /**
     * @var array|MessageBoxColor[]
     */
    public array $colors;
}

/**
 * TODO Finish the description of this structure
 */
class MessageBoxColor extends CData
{
    public int $r;

    public int $g;

    public int $b;
}

/**
 * TODO Finish the description of this structure
 */
class MessageBoxButtonData extends CData
{
    /**
     * MessageBoxButtonFlags
     *
     * @var int
     */
    public int $flags;

    /**
     * User defined button id (value returned via ShowMessageBox)
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

/**
 * TODO Finish the description of this structure
 */
class RendererInfo extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class Renderer extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class Texture extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class FRect extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SensorType extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SensorID extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class Sensor extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class WindowShapeMode extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class WindowsMessageHook extends CData
{
}

/**
 * @since 2.0.1
 */
class IDirect3DDevice9 extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class TimerCallback extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class TimerID extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class Version extends CData
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

/**
 * @since 2.0.6
 *
 * TODO Finish the description of this structure
 */
class VulkanInstance extends CData
{
}

/**
 * @since 2.0.6
 *
 * TODO Finish the description of this structure
 */
class VulkanSurface extends CData
{
}

// =============================================================================
//  Pointers
// =============================================================================

/** @mixin CPtr */
class AssertDataPtr extends AssertData
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): AssertData
    {
    }

    private function offsetSet(int $i, AssertData $d): void
    {
    }
}

/** @mixin CPtr */
class AtomicTPtr extends AtomicT
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): AtomicT
    {
    }

    private function offsetSet(int $i, AtomicT $d): void
    {
    }
}

/** @mixin CPtr */
class MutexPtr extends Mutex
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): Mutex
    {
    }

    private function offsetSet(int $i, Mutex $d): void
    {
    }
}

/** @mixin CPtr */
class SemaphorePtr extends Semaphore
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): Semaphore
    {
    }

    private function offsetSet(int $i, Semaphore $d): void
    {
    }
}

/** @mixin CPtr */
class CondPtr extends Cond
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): Cond
    {
    }

    private function offsetSet(int $i, Cond $d): void
    {
    }
}

/** @mixin CPtr */
class ThreadPtr extends Thread
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): Thread
    {
    }

    private function offsetSet(int $i, Thread $d): void
    {
    }
}

/** @mixin CPtr */
class RWopsPtr extends RWops
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): RWops
    {
    }

    private function offsetSet(int $i, RWops $d): void
    {
    }
}

/** @mixin CPtr */
class AudioSpecPtr extends AudioSpec
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): AudioSpec
    {
    }

    private function offsetSet(int $i, AudioSpec $d): void
    {
    }
}

/** @mixin CPtr */
class AudioCVTPtr extends AudioCVT
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): AudioCVT
    {
    }

    private function offsetSet(int $i, AudioCVT $d): void
    {
    }
}

/** @mixin CPtr */
class AudioStreamPtr extends AudioStream
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): AudioStream
    {
    }

    private function offsetSet(int $i, AudioStream $d): void
    {
    }
}

/** @mixin CPtr */
class PixelFormatPtr extends PixelFormat
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): PixelFormat
    {
    }

    private function offsetSet(int $i, PixelFormat $d): void
    {
    }
}

/** @mixin CPtr */
class PalettePtr extends Palette
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): Palette
    {
    }

    private function offsetSet(int $i, Palette $d): void
    {
    }
}

/** @mixin CPtr */
class ColorPtr extends Color
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): Color
    {
    }

    private function offsetSet(int $i, Color $d): void
    {
    }
}

/** @mixin CPtr */
class RectPtr extends Rect
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): Rect
    {
    }

    private function offsetSet(int $i, Rect $d): void
    {
    }
}

/** @mixin CPtr */
class SurfacePtr extends Surface
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): Surface
    {
    }

    private function offsetSet(int $i, Surface $d): void
    {
    }
}

/** @mixin CPtr */
class DisplayModePtr extends DisplayMode
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): DisplayMode
    {
    }

    private function offsetSet(int $i, DisplayMode $d): void
    {
    }
}

/** @mixin CPtr */
class WindowPtr extends Window
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): Window
    {
    }

    private function offsetSet(int $i, Window $d): void
    {
    }
}

/** @mixin CPtr */
class WindowPtrPtr extends WindowPtr
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): WindowPtr
    {
    }

    private function offsetSet(int $i, WindowPtr $d): void
    {
    }
}

/** @mixin CPtr */
class CursorPtr extends Cursor
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): Cursor
    {
    }

    private function offsetSet(int $i, Cursor $d): void
    {
    }
}

/** @mixin CPtr */
class JoystickPtr extends Joystick
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): Joystick
    {
    }

    private function offsetSet(int $i, Joystick $d): void
    {
    }
}

/** @mixin CPtr */
class GameControllerPtr extends GameController
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): GameController
    {
    }

    private function offsetSet(int $i, GameController $d): void
    {
    }
}

/** @mixin CPtr */
class FingerPtr extends Finger
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): Finger
    {
    }

    private function offsetSet(int $i, Finger $d): void
    {
    }
}

/** @mixin CPtr */
class EventPtr extends Event
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): Event
    {
    }

    private function offsetSet(int $i, Event $d): void
    {
    }
}

/** @mixin CPtr */
class EventFilterPtr extends EventFilter
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): EventFilter
    {
    }

    private function offsetSet(int $i, EventFilter $d): void
    {
    }
}

/** @mixin CPtr */
class HapticPtr extends Haptic
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): Haptic
    {
    }

    private function offsetSet(int $i, Haptic $d): void
    {
    }
}

/** @mixin CPtr */
class HapticEffectPtr extends HapticEffect
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): HapticEffect
    {
    }

    private function offsetSet(int $i, HapticEffect $d): void
    {
    }
}

/** @mixin CPtr */
class LogOutputFunctionPtr extends LogOutputFunction
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): LogOutputFunction
    {
    }

    private function offsetSet(int $i, LogOutputFunction $d): void
    {
    }
}

/** @mixin CPtr */
class MessageBoxDataPtr extends MessageBoxData
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): MessageBoxData
    {
    }

    private function offsetSet(int $i, MessageBoxData $d): void
    {
    }
}

/** @mixin CPtr */
class RendererInfoPtr extends RendererInfo
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): RendererInfo
    {
    }

    private function offsetSet(int $i, RendererInfo $d): void
    {
    }
}

/** @mixin CPtr */
class RendererPtr extends Renderer
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): Renderer
    {
    }

    private function offsetSet(int $i, Renderer $d): void
    {
    }
}

/** @mixin CPtr */
class RendererPtrPtr extends RendererPtr
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): RendererPtr
    {
    }

    private function offsetSet(int $i, RendererPtr $d): void
    {
    }
}

/** @mixin CPtr */
class TexturePtr extends Texture
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): Texture
    {
    }

    private function offsetSet(int $i, Texture $d): void
    {
    }
}

/** @mixin CPtr */
class FRectPtr extends FRect
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): FRect
    {
    }

    private function offsetSet(int $i, FRect $d): void
    {
    }
}

/** @mixin CPtr */
class SensorPtr extends Sensor
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): Sensor
    {
    }

    private function offsetSet(int $i, Sensor $d): void
    {
    }
}

/** @mixin CPtr */
class WindowShapeModePtr extends WindowShapeMode
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): WindowShapeMode
    {
    }

    private function offsetSet(int $i, WindowShapeMode $d): void
    {
    }
}

/** @mixin CPtr */
class IDirect3DDevice9Ptr extends IDirect3DDevice9
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): IDirect3DDevice9
    {
    }

    private function offsetSet(int $i, IDirect3DDevice9 $d): void
    {
    }
}

/** @mixin CPtr */
class VersionPtr extends Version
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): Version
    {
    }

    private function offsetSet(int $i, Version $d): void
    {
    }
}
