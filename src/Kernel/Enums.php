<?php

declare(strict_types=1);

namespace Serafim\SDL\Kernel;

interface Enums extends
    Boolean,
    InitFlags,
    ThreadPriority,
    SysWMType,
    // Assert
    Assert\State,
    // Audio
    Audio\AllowChangeFlag,
    Audio\Format,
    Audio\Status,
    // Event
    Event\Action,
    Event\Type,
    // GameController
    GameController\Axis,
    GameController\BindType,
    GameController\Button,
    GameController\Type,
    // Hint
    Hint\Name,
    Hint\Priority,
    // Joystick
    Joystick\Hat,
    Joystick\PowerLevel,
    Joystick\Type,
    // Keyboard
    Keyboard\EventState,
    Keyboard\Key,
    Keyboard\KeyMode,
    Keyboard\ScanCode,
    // Log
    Log\Category,
    Log\Priority,
    // MessageBox
    MessageBox\Flags,
    MessageBox\ButtonFlags,
    MessageBox\ColorType,
    // Mouse
    Mouse\Button,
    Mouse\SystemCursor,
    Mouse\WheelDirection,
    // OpenGL
    OpenGL\GLAttr,
    OpenGL\GLProfile,
    OpenGL\GLContextFlag,
    OpenGL\GLSwapInterval,
    OpenGL\GLContextReleaseFlag,
    OpenGL\GLContextResetNotification,
    // Power
    Power\State,
    // RWops
    RWops\SeekWhence,
    // Sensor
    Sensor\Type,
    // Touch
    Touch\DeviceType,
    // Video + Pixel + Texture + Surface + Renderer + BlendMode
    Video\WindowPosition,
    Video\PixelFormat,
    Video\BlendMode,
    Video\BlendOperation,
    Video\BlendFactor,
    Video\YuvConversionMode,
    Video\WindowFlags,
    Video\WindowEvent,
    Video\DisplayEvent,
    Video\DisplayOrientation,
    Video\FlashOperation,
    Video\HitTestResult,
    Video\RendererFlags,
    Video\TextureAccess,
    Video\TextureModulate,
    Video\RendererFlip,
    Video\ScaleMode,
    Video\WindowShapeMode
{
}
