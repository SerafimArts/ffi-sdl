<?php

declare(strict_types=1);

namespace Serafim\SDL\Video;

interface YuvConversionMode
{
    public const SDL_YUV_CONVERSION_JPEG = 0;
    public const SDL_YUV_CONVERSION_BT601 = 1;
    public const SDL_YUV_CONVERSION_BT709 = 2;
    public const SDL_YUV_CONVERSION_AUTOMATIC = 3;
}
