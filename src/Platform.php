<?php

declare(strict_types=1);

namespace Serafim\SDL;

enum Platform
{
    case WINDOWS;
    case LINUX;
    case DARWIN;
    case FREEBSD;

    public const DEFAULT = self::LINUX;
}
