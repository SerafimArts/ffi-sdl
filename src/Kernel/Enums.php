<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Kernel;

use Serafim\SDL\Kernel\Enum\AssertState;
use Serafim\SDL\Kernel\Enum\AudioStatus;
use Serafim\SDL\Kernel\Enum\BlendFactor;
use Serafim\SDL\Kernel\Enum\BlendMode;
use Serafim\SDL\Kernel\Enum\BlendOperation;
use Serafim\SDL\Kernel\Enum\DisplayEvent;
use Serafim\SDL\Kernel\Enum\DisplayOrientation;
use Serafim\SDL\Kernel\Enum\EventAction;
use Serafim\SDL\Kernel\Enum\EventType;
use Serafim\SDL\Kernel\Enum\GameControllerAxis;
use Serafim\SDL\Kernel\Enum\GameControllerBindType;
use Serafim\SDL\Kernel\Enum\GameControllerButton;
use Serafim\SDL\Kernel\Enum\GLAttr;
use Serafim\SDL\Kernel\Enum\GLContextFlag;
use Serafim\SDL\Kernel\Enum\GLContextReleaseFlag;
use Serafim\SDL\Kernel\Enum\GLContextResetNotification;
use Serafim\SDL\Kernel\Enum\GLProfile;
use Serafim\SDL\Kernel\Enum\HintName;
use Serafim\SDL\Kernel\Enum\HintPriority;
use Serafim\SDL\Kernel\Enum\HitTestResult;
use Serafim\SDL\Kernel\Enum\JoystickPowerLevel;
use Serafim\SDL\Kernel\Enum\JoystickType;
use Serafim\SDL\Kernel\Enum\Key;
use Serafim\SDL\Kernel\Enum\KeyMode;
use Serafim\SDL\Kernel\Enum\LogCategory;
use Serafim\SDL\Kernel\Enum\LogPriority;
use Serafim\SDL\Kernel\Enum\MessageBoxButtonFlags;
use Serafim\SDL\Kernel\Enum\MessageBoxColorType;
use Serafim\SDL\Kernel\Enum\MessageBoxFlags;
use Serafim\SDL\Kernel\Enum\MouseWheelDirection;
use Serafim\SDL\Kernel\Enum\PixelFormat;
use Serafim\SDL\Kernel\Enum\PowerState;
use Serafim\SDL\Kernel\Enum\RendererFlags;
use Serafim\SDL\Kernel\Enum\RendererFlip;
use Serafim\SDL\Kernel\Enum\SensorType;
use Serafim\SDL\Kernel\Enum\SystemCursor;
use Serafim\SDL\Kernel\Enum\TextureAccess;
use Serafim\SDL\Kernel\Enum\TextureModulate;
use Serafim\SDL\Kernel\Enum\ThreadPriority;
use Serafim\SDL\Kernel\Enum\TouchDeviceType;
use Serafim\SDL\Kernel\Enum\WindowEvent;
use Serafim\SDL\Kernel\Enum\WindowFlags;
use Serafim\SDL\Kernel\Enum\WindowShapeMode;
use Serafim\SDL\Kernel\Enum\YuvConversionMode;

/**
 * Interface EnumsInterface
 */
interface Enums extends
    AssertState,
    ThreadPriority,
    AudioStatus,
    PixelFormat,
    BlendMode,
    BlendOperation,
    BlendFactor,
    YuvConversionMode,
    WindowFlags,
    WindowEvent,
    DisplayEvent,
    DisplayOrientation,
    GLAttr,
    GLProfile,
    GLContextFlag,
    GLContextReleaseFlag,
    GLContextResetNotification,
    HitTestResult,
    Key,
    KeyMode,
    SystemCursor,
    MouseWheelDirection,
    JoystickType,
    JoystickPowerLevel,
    GameControllerBindType,
    GameControllerAxis,
    GameControllerButton,
    TouchDeviceType,
    EventType,
    EventAction,
    HintPriority,
    HintName,
    LogCategory,
    LogPriority,
    MessageBoxFlags,
    MessageBoxButtonFlags,
    MessageBoxColorType,
    PowerState,
    RendererFlags,
    TextureAccess,
    TextureModulate,
    RendererFlip,
    SensorType,
    WindowShapeMode
{

}
