<?php

declare(strict_types=1);

namespace Serafim\SDL\Sensor;

interface Type
{
    public const SDL_SENSOR_INVALID = -1;
    public const SDL_SENSOR_UNKNOWN = 0;
    public const SDL_SENSOR_ACCEL = 1;
    public const SDL_SENSOR_GYRO = 2;
    public const SDL_SENSOR_ACCEL_L = 3;
    public const SDL_SENSOR_GYRO_L = 4;
    public const SDL_SENSOR_ACCEL_R = 5;
    public const SDL_SENSOR_GYRO_R = 6;
}
