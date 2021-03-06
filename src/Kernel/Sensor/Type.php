<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Kernel\Sensor;

/**
 * Interface SensorTypeInterface
 */
interface Type
{
    public const SDL_SENSOR_INVALID = -1;
    public const SDL_SENSOR_UNKNOWN = 0;
    public const SDL_SENSOR_ACCEL   = 1;
    public const SDL_SENSOR_GYRO    = 2;
}
