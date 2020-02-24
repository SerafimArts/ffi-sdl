<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Enum;

/**
 * Class WindowFlags
 */
class WindowFlags extends Enum
{
    /* !!! FIXME: change this to name = (1<<x). */
    public const SDL_WINDOW_FULLSCREEN = 0x00000001;         /**< fullscreen window */
    public const SDL_WINDOW_OPENGL = 0x00000002;             /**< window usable with OpenGL context */
    public const SDL_WINDOW_SHOWN = 0x00000004;              /**< window is visible */
    public const SDL_WINDOW_HIDDEN = 0x00000008;             /**< window is not visible */
    public const SDL_WINDOW_BORDERLESS = 0x00000010;         /**< no window decoration */
    public const SDL_WINDOW_RESIZABLE = 0x00000020;          /**< window can be resized */
    public const SDL_WINDOW_MINIMIZED = 0x00000040;          /**< window is minimized */
    public const SDL_WINDOW_MAXIMIZED = 0x00000080;          /**< window is maximized */
    public const SDL_WINDOW_INPUT_GRABBED = 0x00000100;      /**< window has grabbed input focus */
    public const SDL_WINDOW_INPUT_FOCUS = 0x00000200;        /**< window has input focus */
    public const SDL_WINDOW_MOUSE_FOCUS = 0x00000400;        /**< window has mouse focus */
    public const SDL_WINDOW_FULLSCREEN_DESKTOP = ( self::SDL_WINDOW_FULLSCREEN | 0x00001000 );
    public const SDL_WINDOW_FOREIGN = 0x00000800;            /**< window not created by SDL */
    public const SDL_WINDOW_ALLOW_HIGHDPI = 0x00002000;      /**< window should be created in high-DPI mode if supported.
    On macOS NSHighResolutionCapable must be set true in the
    application's Info.plist for this to have any effect. */
    public const SDL_WINDOW_MOUSE_CAPTURE = 0x00004000;      /**< window has mouse captured (unrelated to INPUT_GRABBED) */
    public const SDL_WINDOW_ALWAYS_ON_TOP = 0x00008000;      /**< window should always be above others */
    public const SDL_WINDOW_SKIP_TASKBAR  = 0x00010000;      /**< window should not be added to the taskbar */
    public const SDL_WINDOW_UTILITY       = 0x00020000;      /**< window should be treated as a utility window */
    public const SDL_WINDOW_TOOLTIP       = 0x00040000;      /**< window should be treated as a tooltip */
    public const SDL_WINDOW_POPUP_MENU    = 0x00080000;      /**< window should be treated as a popup menu */
    public const SDL_WINDOW_VULKAN        = 0x10000000;       /**< window usable for Vulkan surface */
}
