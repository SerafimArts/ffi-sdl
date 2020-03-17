<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Kernel;

/**
 * Interface EnumsInterface
 */
interface Enums extends
    Boolean,
    InitFlags,
    ThreadPriority,
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
    OpenGL\GLContextReleaseFlag,
    OpenGL\GLContextResetNotification,
    // Power
    Power\State,
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
    Video\HitTestResult,
    Video\RendererFlags,
    Video\TextureAccess,
    Video\TextureModulate,
    Video\RendererFlip,
    Video\WindowShapeMode
{

}
