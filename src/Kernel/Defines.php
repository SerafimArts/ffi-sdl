<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Kernel;

use Serafim\SDL\Kernel\Defines\AudioSubsystem;
use Serafim\SDL\Kernel\Defines\BoolImpl;
use Serafim\SDL\Kernel\Defines\EventsSubsystem;
use Serafim\SDL\Kernel\Defines\InitFlags;
use Serafim\SDL\Kernel\Defines\JoystickSubsystem;
use Serafim\SDL\Kernel\Defines\MouseSubsystem;
use Serafim\SDL\Kernel\Defines\VideoSubsystem;

/**
 * Interface DefinesInterface
 */
interface Defines extends
    BoolImpl,
    InitFlags,
    AudioSubsystem,
    EventsSubsystem,
    JoystickSubsystem,
    MouseSubsystem,
    VideoSubsystem
{
}
