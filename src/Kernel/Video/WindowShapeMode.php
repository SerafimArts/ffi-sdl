<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SDL\Kernel\Video;

/**
 * Interface WindowShapeMode
 */
interface WindowShapeMode
{
    public const SHAPE_MODE_DEFAULT                = 0;
    public const SHAPE_MODE_BINARIZE_ALPHA         = 1;
    public const SHAPE_MODE_REVERSE_BINARIZE_ALPHA = 2;
    public const SHAPE_MODE_COLOR_KEY              = 3;

    /**
     * @deprecated Compat with original SDL enum naming. Please use SCREAMING_SNAKE_CASE const format instead.
     */
    public const ShapeModeDefault                  = self::SHAPE_MODE_DEFAULT;

    /**
     * @deprecated Compat with original SDL enum naming. Please use SCREAMING_SNAKE_CASE const format instead.
     */
    public const ShapeModeBinarizeAlpha            = self::SHAPE_MODE_BINARIZE_ALPHA;

    /**
     * @deprecated Compat with original SDL enum naming. Please use SCREAMING_SNAKE_CASE const format instead.
     */
    public const ShapeModeReverseBinarizeAlpha     = self::SHAPE_MODE_REVERSE_BINARIZE_ALPHA;

    /**
     * @deprecated Compat with original SDL enum naming. Please use SCREAMING_SNAKE_CASE const format instead.
     */
    public const ShapeModeColorKey                 = self::SHAPE_MODE_COLOR_KEY;
}
