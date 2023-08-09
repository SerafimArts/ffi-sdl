<?php

declare(strict_types=1);

namespace Serafim\SDL\Kernel\Video;

interface FlashOperation
{
    public const SDL_FLASH_CANCEL = 0;
    public const SDL_FLASH_BRIEFLY = 1;
    public const SDL_FLASH_UNTIL_FOCUSED = 2;
}
