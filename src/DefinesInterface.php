<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL;

use Serafim\SDL\Defines\AudioSubsystemInterface;
use Serafim\SDL\Defines\BoolImplInterface;
use Serafim\SDL\Defines\EventsSubsystemInterface;
use Serafim\SDL\Defines\InitFlagsInterface;
use Serafim\SDL\Defines\JoystickSubsystemInterface;
use Serafim\SDL\Defines\MouseSubsystemInterface;
use Serafim\SDL\Defines\VideoSubsystemInterface;

/**
 * Interface DefinesInterface
 */
interface DefinesInterface extends
    BoolImplInterface,
    InitFlagsInterface,
    AudioSubsystemInterface,
    EventsSubsystemInterface,
    JoystickSubsystemInterface,
    MouseSubsystemInterface,
    VideoSubsystemInterface
{
}
