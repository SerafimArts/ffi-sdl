<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL;

use FFI\CData;
use FFI\CScalar;
use FFI\CStruct;

/**
 * <code>
 *  typedef struct SDL_AssertData
 *  {
 *      int always_ignore;
 *      unsigned int trigger_count;
 *      const char *condition;
 *      const char *filename;
 *      int linenum;
 *      const char *function;
 *      const struct SDL_AssertData *next;
 *  } SDL_AssertData;
 * </code>
 *
 * @see SDLMethods::SDL_ReportAssertion
 * @see SDLMethods::SDL_GetAssertionReport
 */
class SDL_AssertData extends CStruct
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
 *  } SDL_AtomicT;
 * </code>
 *
 * @see SDLMethods::SDL_AtomicCAS
 * @see SDLMethods::SDL_AtomicSet
 * @see SDLMethods::SDL_AtomicGet
 * @see SDLMethods::SDL_AtomicAdd
 */
class SDL_AtomicT extends CStruct
{
    /**
     * The atomic integer value
     *
     * @var int
     */
    public int $value;
}

/**
 * The SDL mutex structure, defined in SDL_sysmutex.c
 *
 * TODO Finish the description of this structure
 */
class SDL_Mutex extends CData
{
}

/**
 * The SDL semaphore structure, defined in SDL_syssem.c
 *
 * TODO Finish the description of this structure
 */
class SDL_Semaphore extends CData
{
}

/**
 * The SDL condition variable structure, defined in SDL_syscond.c
 *
 * TODO Finish the description of this structure
 */
class SDL_Cond extends CData
{
}

/**
 * The SDL thread structure, defined in SDL_thread.c
 *
 * TODO Finish the description of this structure
 */
class SDL_Thread extends CData
{
}

/**
 * This is the read/write operation structure -- very basic.
 *
 * TODO Finish the description of this structure
 */
class SDL_RWops extends CData
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
 *
 * TODO Finish the description of this structure
 */
class SDL_AudioSpec extends CData
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
     * Callback that feeds the audio device (NULL to use SDL_QueueAudio()).
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
 * @see https://wiki.libsdl.org/SDL_AudioCVT
 *
 * TODO Finish the description of this structure
 */
class SDL_AudioCVT extends CData
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
 * SDL_AudioStream is a new audio conversion interface.
 *
 * The benefits vs SDL_AudioCVT:
 *  - it can handle resampling data in chunks without generating
 *      artifacts, when it doesn't have the complete buffer available.
 *  - it can handle incoming data in any variable size.
 *  - You push data as you have it, and pull it when you need it
 *
 * TODO Finish the description of this structure
 */
class SDL_AudioStream extends CData
{
}

/**
 * Everything in the pixel format structure is read-only.
 *
 * TODO Finish the description of this structure
 */
class SDL_PixelFormat extends CData
{
    /**
     * Uint32 format;
     *
     * @var int
     */
    public int $format;

    /**
     * SDL_Palette *palette;
     *
     * @var SDL_Palette|SDL_Palette[]|CData|null
     */
    public ?SDL_Palette $palette;

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
     * struct SDL_PixelFormat *next;
     *
     * @var SDL_PixelFormat|SDL_PixelFormat[]|CData|null
     */
    public ?SDL_PixelFormat $next;
}

/**
 * A structure that contains palette information.
 *
 * TODO Finish the description of this structure
 */
class SDL_Palette extends CData
{
    /**
     * int ncolors;
     *
     * @var int
     */
    public int $ncolors;

    /**
     * SDL_Color *colors;
     *
     * @var SDL_Color|SDL_Color[]|CData|null
     */
    public ?SDL_Color $colors;

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
class SDL_Color extends CData
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
class SDL_Rect extends CData
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
class SDL_Surface extends CData
{
    /**
     * @var int
     */
    public int $flags;

    /**
     * @var SDL_PixelFormat|SDL_PixelFormat[]|CData
     */
    public SDL_PixelFormat $format;

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
     * @var SDL_Rect|CData
     */
    public SDL_Rect $clip_rect;

    /**
     * @var SDL_BlitMap|SDL_BlitMap[]|CData
     */
    public SDL_BlitMap $map;

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
class SDL_BlitMap extends CData
{
}

/**
 * Class SDL_DisplayMode
 *
 * TODO Finish the description of this structure
 */
class SDL_DisplayMode extends CData
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
class SDL_Window extends CData
{
}

/**
 * An opaque handle to an OpenGL context
 *
 * TODO Finish the description of this structure
 */
class SDL_GLContext extends CData
{
}

/**
 * Implementation dependent
 *
 * TODO Finish the description of this structure
 */
class SDL_Cursor extends CData
{
}

/**
 * A structure that encodes the stable unique id for a joystick device
 *
 * TODO Finish the description of this structure
 */
class SDL_JoystickGUID extends CData
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
class SDL_Joystick extends CData
{
}

/**
 * The Game Controller structure used to identify an SDL game controller
 *
 * TODO Finish the description of this structure
 */
class SDL_GameController extends CData
{
}

/**
 * Class SDL_GameControllerButtonBind
 *
 * TODO Finish the description of this structure
 */
class SDL_GameControllerButtonBind extends CData
{
    /**
     * SDL_GameControllerBindType bindType;
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
     * @var SDL_GameControllerButtonBindValue
     */
    public SDL_GameControllerButtonBindValue $value;
}

/**
 * TODO Finish the description of this structure
 */
class SDL_GameControllerButtonBindValue extends CData
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
     * @var SDL_GameControllerButtonBindValueHat|CData
     */
    public SDL_GameControllerButtonBindValueHat $hat;
}

/**
 * TODO Finish the description of this structure
 */
class SDL_GameControllerButtonBindValueHat extends CData
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
class SDL_Finger extends CData
{
    /**
     * SDL_FingerID id;
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
class SDL_Event extends CData
{
    public int                       $type;

    public SDL_CommonEvent           $common;

    public SDL_DisplayEvent          $display;

    public SDL_WindowEvent           $window;

    public SDL_KeyboardEvent         $key;

    public SDL_TextEditingEvent      $edit;

    public SDL_TextInputEvent        $text;

    public SDL_MouseMotionEvent      $motion;

    public SDL_MouseButtonEvent      $button;

    public SDL_MouseWheelEvent       $wheel;

    public SDL_JoyAxisEvent          $jaxis;

    public SDL_JoyBallEvent          $jball;

    public SDL_JoyHatEvent           $jhat;

    public SDL_JoyButtonEvent        $jbutton;

    public SDL_JoyDeviceEvent        $jdevice;

    public SDL_ControllerAxisEvent   $caxis;

    public SDL_ControllerButtonEvent $cbutton;

    public SDL_ControllerDeviceEvent $cdevice;

    public SDL_AudioDeviceEvent      $adevice;

    public SDL_SensorEvent           $sensor;

    public SDL_QuitEvent             $quit;

    public SDL_UserEvent             $user;

    public SDL_SysWMEvent            $syswm;

    public SDL_TouchFingerEvent      $tfinger;

    public SDL_MultiGestureEvent     $mgesture;

    public SDL_DollarGestureEvent    $dgesture;

    public SDL_DropEvent             $drop;

    /**
     * @var array|int[]
     */
    public array $padding;
}

/**
 * TODO Finish the description of this structure
 */
class SDL_CommonEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_DisplayEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_WindowEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_KeyboardEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_TextInputEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_MouseMotionEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_MouseButtonEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_TextEditingEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_MouseWheelEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_JoyAxisEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_JoyBallEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_JoyHatEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_JoyButtonEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_JoyDeviceEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_ControllerAxisEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_ControllerButtonEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_ControllerDeviceEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_AudioDeviceEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_SensorEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_QuitEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_UserEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_SysWMEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_TouchFingerEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_MultiGestureEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_DollarGestureEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_DropEvent extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_EventAction extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_EventFilter extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_Haptic extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_HapticEffect extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_LogPriority extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_LogOutputFunction extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_MessageBoxData extends CData
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
 * TODO Finish the description of this structure
 */
class SDL_MessageBoxColorScheme extends CData
{
    /**
     * @var array|SDL_MessageBoxColor[]
     */
    public array $colors;
}

/**
 * TODO Finish the description of this structure
 */
class SDL_MessageBoxColor extends CData
{
    public int $r;

    public int $g;

    public int $b;
}

/**
 * TODO Finish the description of this structure
 */
class SDL_MessageBoxButtonData extends CData
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

/**
 * TODO Finish the description of this structure
 */
class SDL_RendererInfo extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_Renderer extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_Texture extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_FRect extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_SensorType extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_SensorID extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_Sensor extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_WindowShapeMode extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_WindowsMessageHook extends CData
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
class SDL_TimerCallback extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_TimerID extends CData
{
}

/**
 * TODO Finish the description of this structure
 */
class SDL_Version extends CData
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
class SDL_VulkanInstance extends CData
{
}

/**
 * @since 2.0.6
 *
 * TODO Finish the description of this structure
 */
class SDL_VulkanSurface extends CData
{
}
