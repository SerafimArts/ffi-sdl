<?php

declare(strict_types=1);

namespace Serafim\SDL;

use FFI\Contracts\Headers\Version as UserVersion;
use FFI\Contracts\Headers\Version\Comparable;
use FFI\Contracts\Headers\Version\ComparableInterface;
use FFI\Contracts\Headers\VersionInterface;

enum Version: string implements VersionInterface, ComparableInterface
{
    use Comparable;

    /**
     * @link https://github.com/libsdl-org/SDL/releases/tag/release-2.0.0
     */
    case V2_0_0 = '2.0.0';

    /**
     * @link https://github.com/libsdl-org/SDL/releases/tag/release-2.0.1
     */
    case V2_0_1 = '2.0.1';

    /**
     * @link https://github.com/libsdl-org/SDL/releases/tag/release-2.0.2
     */
    case V2_0_2 = '2.0.2';

    /**
     * @link https://github.com/libsdl-org/SDL/releases/tag/release-2.0.3
     */
    case V2_0_3 = '2.0.3';

    /**
     * @link https://github.com/libsdl-org/SDL/releases/tag/release-2.0.4
     */
    case V2_0_4 = '2.0.4';

    /**
     * @link https://github.com/libsdl-org/SDL/releases/tag/release-2.0.5
     */
    case V2_0_5 = '2.0.5';

    /**
     * @link https://github.com/libsdl-org/SDL/releases/tag/release-2.0.6
     */
    case V2_0_6 = '2.0.6';

    /**
     * @link https://github.com/libsdl-org/SDL/releases/tag/release-2.0.7
     */
    case V2_0_7 = '2.0.7';

    /**
     * @link https://github.com/libsdl-org/SDL/releases/tag/release-2.0.8
     */
    case V2_0_8 = '2.0.8';

    /**
     * @link https://github.com/libsdl-org/SDL/releases/tag/release-2.0.9
     */
    case V2_0_9 = '2.0.9';

    /**
     * @link https://github.com/libsdl-org/SDL/releases/tag/release-2.0.10
     */
    case V2_0_10 = '2.0.10';

    /**
     * @link https://github.com/libsdl-org/SDL/releases/tag/release-2.0.12
     */
    case V2_0_12 = '2.0.12';

    /**
     * @link https://github.com/libsdl-org/SDL/releases/tag/release-2.0.14
     */
    case V2_0_14 = '2.0.14';

    /**
     * @link https://github.com/libsdl-org/SDL/releases/tag/release-2.0.16
     */
    case V2_0_16 = '2.0.16';

    /**
     * @link https://github.com/libsdl-org/SDL/releases/tag/release-2.0.18
     */
    case V2_0_18 = '2.0.18';

    /**
     * @link https://github.com/libsdl-org/SDL/releases/tag/release-2.0.20
     */
    case V2_0_20 = '2.0.20';

    /**
     * @link https://github.com/libsdl-org/SDL/releases/tag/release-2.0.22
     */
    case V2_0_22 = '2.0.22';

    /**
     * @link https://github.com/libsdl-org/SDL/releases/tag/release-2.24.0
     */
    case V2_24_0 = '2.24.0';

    /**
     * @link https://github.com/libsdl-org/SDL/releases/tag/release-2.24.1
     */
    case V2_24_1 = '2.24.1';

    /**
     * @link https://github.com/libsdl-org/SDL/releases/tag/release-2.24.2
     */
    case V2_24_2 = '2.24.2';

    /**
     * @link https://github.com/libsdl-org/SDL/releases/tag/release-2.26.0
     */
    case V2_26_0 = '2.26.0';

    /**
     * @link https://github.com/libsdl-org/SDL/releases/tag/release-2.26.1
     */
    case V2_26_1 = '2.26.1';

    /**
     * @link https://github.com/libsdl-org/SDL/releases/tag/release-2.26.2
     */
    case V2_26_2 = '2.26.2';

    /**
     * @link https://github.com/libsdl-org/SDL/releases/tag/release-2.26.3
     */
    case V2_26_3 = '2.26.3';

    /**
     * @link https://github.com/libsdl-org/SDL/releases/tag/release-2.26.4
     */
    case V2_26_4 = '2.26.4';

    /**
     * @link https://github.com/libsdl-org/SDL/releases/tag/release-2.26.5
     */
    case V2_26_5 = '2.26.5';

    /**
     * @link https://github.com/libsdl-org/SDL/releases/tag/release-2.28.0
     */
    case V2_28_0 = '2.28.0';

    /**
     * @link https://github.com/libsdl-org/SDL/releases/tag/release-2.28.1
     */
    case V2_28_1 = '2.28.1';

    /**
     * @link https://github.com/libsdl-org/SDL/releases/tag/release-2.28.2
     */
    case V2_28_2 = '2.28.2';

    /**
     * @link https://github.com/libsdl-org/SDL/releases
     */
    public const LATEST = self::V2_28_2;

    /**
     * @param non-empty-string $version
     */
    public static function create(string $version): VersionInterface
    {
        /** @var array<non-empty-string, VersionInterface> $versions */
        static $versions = [];

        return self::tryFrom($version) ?? $versions[$version] ??= UserVersion::fromString($version);
    }

    public function toString(): string
    {
        return $this->value;
    }
}
