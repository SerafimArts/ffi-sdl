<?php

declare(strict_types=1);

namespace Serafim\SDL\Kernel\Video;

/**
 * Interface WindowPosition
 */
interface WindowPosition
{

    public const SDL_WINDOWPOS_UNDEFINED_MASK = 0x1FFF0000;

    public const SDL_WINDOWPOS_UNDEFINED = self::SDL_WINDOWPOS_UNDEFINED_MASK | 0;

    public const SDL_WINDOWPOS_CENTERED_MASK = 0x2FFF0000;

    public const SDL_WINDOWPOS_CENTERED = self::SDL_WINDOWPOS_CENTERED_MASK | 0;
}
