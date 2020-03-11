<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL;

use Serafim\SDL\Enum\AssertStateInterface;
use Serafim\SDL\Enum\AudioStatusInterface;
use Serafim\SDL\Enum\BlendFactorInterface;
use Serafim\SDL\Enum\BlendModeInterface;
use Serafim\SDL\Enum\BlendOperationInterface;
use Serafim\SDL\Enum\DisplayEventInterface;
use Serafim\SDL\Enum\DisplayOrientationInterface;
use Serafim\SDL\Enum\EventActionInterface;
use Serafim\SDL\Enum\EventTypeInterface;
use Serafim\SDL\Enum\GameControllerAxisInterface;
use Serafim\SDL\Enum\GameControllerBindTypeInterface;
use Serafim\SDL\Enum\GameControllerButtonInterface;
use Serafim\SDL\Enum\GLAttrInterface;
use Serafim\SDL\Enum\GLContextFlagInterface;
use Serafim\SDL\Enum\GLContextReleaseFlagInterface;
use Serafim\SDL\Enum\GLContextResetNotificationInterface;
use Serafim\SDL\Enum\GLProfileInterface;
use Serafim\SDL\Enum\HintNameInterface;
use Serafim\SDL\Enum\HintPriorityInterface;
use Serafim\SDL\Enum\HitTestResultInterface;
use Serafim\SDL\Enum\JoystickPowerLevelInterface;
use Serafim\SDL\Enum\JoystickTypeInterface;
use Serafim\SDL\Enum\KeyInterface;
use Serafim\SDL\Enum\KeyModeInterface;
use Serafim\SDL\Enum\LogCategoryInterface;
use Serafim\SDL\Enum\LogPriorityInterface;
use Serafim\SDL\Enum\MessageBoxButtonFlagsInterface;
use Serafim\SDL\Enum\MessageBoxColorTypeInterface;
use Serafim\SDL\Enum\MessageBoxFlagsInterface;
use Serafim\SDL\Enum\MouseWheelDirectionInterface;
use Serafim\SDL\Enum\PixelFormatInterface;
use Serafim\SDL\Enum\PowerStateInterface;
use Serafim\SDL\Enum\RendererFlagsInterface;
use Serafim\SDL\Enum\RendererFlipInterface;
use Serafim\SDL\Enum\SensorTypeInterface;
use Serafim\SDL\Enum\SystemCursorInterface;
use Serafim\SDL\Enum\TextureAccessInterface;
use Serafim\SDL\Enum\TextureModulateInterface;
use Serafim\SDL\Enum\ThreadPriorityInterface;
use Serafim\SDL\Enum\TouchDeviceTypeInterface;
use Serafim\SDL\Enum\WindowEventInterface;
use Serafim\SDL\Enum\WindowFlagsInterface;
use Serafim\SDL\Enum\WindowShapeModeInterface;
use Serafim\SDL\Enum\YuvConversionModeInterface;

/**
 * Interface EnumsInterface
 */
interface EnumsInterface extends
    AssertStateInterface,
    ThreadPriorityInterface,
    AudioStatusInterface,
    PixelFormatInterface,
    BlendModeInterface,
    BlendOperationInterface,
    BlendFactorInterface,
    YuvConversionModeInterface,
    WindowFlagsInterface,
    WindowEventInterface,
    DisplayEventInterface,
    DisplayOrientationInterface,
    GLAttrInterface,
    GLProfileInterface,
    GLContextFlagInterface,
    GLContextReleaseFlagInterface,
    GLContextResetNotificationInterface,
    HitTestResultInterface,
    KeyInterface,
    KeyModeInterface,
    SystemCursorInterface,
    MouseWheelDirectionInterface,
    JoystickTypeInterface,
    JoystickPowerLevelInterface,
    GameControllerBindTypeInterface,
    GameControllerAxisInterface,
    GameControllerButtonInterface,
    TouchDeviceTypeInterface,
    EventTypeInterface,
    EventActionInterface,
    HintPriorityInterface,
    HintNameInterface,
    LogCategoryInterface,
    LogPriorityInterface,
    MessageBoxFlagsInterface,
    MessageBoxButtonFlagsInterface,
    MessageBoxColorTypeInterface,
    PowerStateInterface,
    RendererFlagsInterface,
    TextureAccessInterface,
    TextureModulateInterface,
    RendererFlipInterface,
    SensorTypeInterface,
    WindowShapeModeInterface
{

}
