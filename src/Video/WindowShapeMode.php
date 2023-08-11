<?php

declare(strict_types=1);

namespace Serafim\SDL\Video;

interface WindowShapeMode
{
    public const SHAPE_MODE_DEFAULT = 0;
    public const SHAPE_MODE_BINARIZE_ALPHA = 1;
    public const SHAPE_MODE_REVERSE_BINARIZE_ALPHA = 2;
    public const SHAPE_MODE_COLOR_KEY = 3;

    /**
     * @deprecated Compat with original SDL enum naming. Please
     *             use {@see WindowShapeMode::SCREAMING_SNAKE_CASE} const
     *             format instead.
     */
    public const ShapeModeDefault = self::SHAPE_MODE_DEFAULT;

    /**
     * @deprecated Compat with original SDL enum naming. Please
     *             use {@see WindowShapeMode::SCREAMING_SNAKE_CASE} const
     *             format instead.
     */
    public const ShapeModeBinarizeAlpha = self::SHAPE_MODE_BINARIZE_ALPHA;

    /**
     * @deprecated Compat with original SDL enum naming. Please
     *             use {@see WindowShapeMode::SCREAMING_SNAKE_CASE} const
     *             format instead.
     */
    public const ShapeModeReverseBinarizeAlpha = self::SHAPE_MODE_REVERSE_BINARIZE_ALPHA;

    /**
     * @deprecated Compat with original SDL enum naming. Please
     *             use {@see WindowShapeMode::SCREAMING_SNAKE_CASE} const
     *             format instead.
     */
    public const ShapeModeColorKey = self::SHAPE_MODE_COLOR_KEY;
}
