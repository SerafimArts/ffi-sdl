<?php

declare(strict_types=1);

use FFI\Generator\Metadata\CastXMLGenerator;
use FFI\Generator\Metadata\CastXMLParser;
use FFI\Generator\PhpStormMetadataGenerator;
use FFI\Generator\SimpleNamingStrategy;


if (!isset($_composer_autoload_path)) {
    $current = __DIR__;
    do {
        if (is_file($current . '/autoload.php')) {
            $_composer_autoload_path = $current . '/autoload.php';
            break;
        } elseif (is_file($current . '/vendor/autoload.php')) {
            $_composer_autoload_path = $current . '/vendor/autoload.php';
            break;
        }
    } while (
        $current !== \dirname($current)
        && ($current = \dirname($current))
    );
}

if (!isset($_composer_autoload_path)) {
    throw new \LogicException('Could not require composer autoloader');
}

require $_composer_autoload_path;


const INPUT_HEADERS = __DIR__ . '/../resources/headers/SDL.h';
const OUTPUT_METADATA = __DIR__ . '/metadata.xml';
const OUTPUT_FILE = __DIR__ . '/../resources/generated/.phpstorm.meta.php';

fwrite(STDOUT, " - [1/4] Generating metadata files\n");

if (!is_file(OUTPUT_METADATA)) {
    (new CastXMLGenerator($_SERVER['FFI_GENERATOR_CASTXML_BINARY'] ?? 'castxml'))
        ->generate(INPUT_HEADERS)
        ->save(OUTPUT_METADATA)
    ;
}

fwrite(STDOUT, " - [2/4] Building AST\n");

$ast = (new CastXMLParser())
    ->parse(OUTPUT_METADATA)
;

fwrite(STDOUT, " - [3/4] Generating IDE helper\n");

$result = (new PhpStormMetadataGenerator(
        argumentSetPrefix: 'ffi_sdl_',
        ignoreDirectories: ['/usr', ...explode(',', $_SERVER['FFI_GENERATOR_IGNORE_PATHS'] ?? '')],
        naming: new class(
            entrypoint: Serafim\SDL\SDL::class,
            externalNamespace: 'Serafim\SDL',
        ) extends SimpleNamingStrategy {
            protected function getEnumTypeName(string $name): string
            {
                return match ($name) {
                    'SDL_bool' => \Serafim\SDL\Boolean::class,
                    'SDL_AssertState' => \Serafim\SDL\Assert\State::class,
                    'SDL_errorcode' => \Serafim\SDL\ErrorCode::class,
                    'SDL_ThreadPriority' => \Serafim\SDL\ThreadPriority::class,
                    'SDL_AudioStatus' => \Serafim\SDL\Audio\Status::class,
                    'SDL_PixelType' => \Serafim\SDL\Video\PixelType::class,
                    'SDL_BitmapOrder' => \Serafim\SDL\Video\BitMapOrder::class,
                    'SDL_PackedOrder' => \Serafim\SDL\Video\PackedOrder::class,
                    'SDL_ArrayOrder' => \Serafim\SDL\Video\ArrayOrder::class,
                    'SDL_PackedLayout' => \Serafim\SDL\Video\PackedLayout::class,
                    'SDL_PixelFormatEnum' => \Serafim\SDL\Video\PixelFormat::class,
                    'SDL_BlendMode' => \Serafim\SDL\Video\BlendMode::class,
                    'SDL_BlendOperation' => \Serafim\SDL\Video\BlendOperation::class,
                    'SDL_BlendFactor' => \Serafim\SDL\Video\BlendFactor::class,
                    'SDL_YUV_CONVERSION_MODE' => \Serafim\SDL\Video\YuvConversionMode::class,
                    'SDL_WindowFlags' => \Serafim\SDL\Video\WindowFlags::class,
                    'SDL_WindowEventID' => \Serafim\SDL\Video\WindowEvent::class,
                    'SDL_DisplayEventID' => \Serafim\SDL\Video\DisplayEvent::class,
                    'SDL_DisplayOrientation' => \Serafim\SDL\Video\DisplayOrientation::class,
                    'SDL_FlashOperation' => \Serafim\SDL\Video\FlashOperation::class,
                    'SDL_GLattr' => \Serafim\SDL\OpenGL\GLAttr::class,
                    'SDL_GLprofile' => \Serafim\SDL\OpenGL\GLProfile::class,
                    'SDL_GLcontextFlag' => \Serafim\SDL\OpenGL\GLContextFlag::class,
                    'SDL_GLcontextReleaseFlag' => \Serafim\SDL\OpenGL\GLContextReleaseFlag::class,
                    'SDL_GLContextResetNotification' => \Serafim\SDL\OpenGL\GLContextResetNotification::class,
                    'SDL_HitTestResult' => \Serafim\SDL\Video\HitTestResult::class,
                    'SDL_Scancode' => \Serafim\SDL\Keyboard\ScanCode::class,
                    'SDL_KeyCode' => \Serafim\SDL\Keyboard\Key::class,
                    'SDL_Keymod' => \Serafim\SDL\Keyboard\KeyMode::class,
                    'SDL_SystemCursor' => \Serafim\SDL\Mouse\SystemCursor::class,
                    'SDL_MouseWheelDirection' => \Serafim\SDL\Mouse\WheelDirection::class,
                    'SDL_JoystickType' => \Serafim\SDL\Joystick\Type::class,
                    'SDL_JoystickPowerLevel' => \Serafim\SDL\Joystick\PowerLevel::class,
                    'SDL_SensorType' => \Serafim\SDL\Sensor\Type::class,
                    'SDL_GameControllerType' => \Serafim\SDL\GameController\Type::class,
                    'SDL_GameControllerBindType' => \Serafim\SDL\GameController\BindType::class,
                    'SDL_GameControllerAxis' => \Serafim\SDL\GameController\Axis::class,
                    'SDL_GameControllerButton' => \Serafim\SDL\GameController\Button::class,
                    'SDL_TouchDeviceType' => \Serafim\SDL\Touch\DeviceType::class,
                    'SDL_EventType' => \Serafim\SDL\Event\Type::class,
                    'SDL_eventaction' => \Serafim\SDL\Event\Action::class,
                    'SDL_HintPriority' => \Serafim\SDL\Hint\Priority::class,
                    'SDL_LogCategory' => \Serafim\SDL\Log\Category::class,
                    'SDL_LogPriority' => \Serafim\SDL\Log\Priority::class,
                    'SDL_MessageBoxFlags' => \Serafim\SDL\MessageBox\Flags::class,
                    'SDL_MessageBoxButtonFlags' => \Serafim\SDL\MessageBox\ButtonFlags::class,
                    'SDL_MessageBoxColorType' => \Serafim\SDL\MessageBox\ColorType::class,
                    'SDL_PowerState' => \Serafim\SDL\Power\State::class,
                    'SDL_RendererFlags' => \Serafim\SDL\Video\RendererFlags::class,
                    'SDL_ScaleMode' => \Serafim\SDL\Video\ScaleMode::class,
                    'SDL_TextureAccess' => \Serafim\SDL\Video\TextureAccess::class,
                    'SDL_TextureModulate' => \Serafim\SDL\Video\TextureModulate::class,
                    'SDL_RendererFlip' => \Serafim\SDL\Video\RendererFlip::class,
                    'WindowShapeMode' => \Serafim\SDL\Video\WindowShapeMode::class,
                    'SDL_WinRT_Path' => \Serafim\SDL\WinRT\Path::class,
                    'SDL_WinRT_DeviceFamily' => \Serafim\SDL\WinRT\DeviceFamily::class,
                    // Debug
                    'SDL_DUMMY_ENUM' => parent::getEnumTypeName($name),
                    default => throw new \InvalidArgumentException(
                        "Unprocessable mapping of enum \"$name\"",
                    ),
                };
            }
        }
    ))
        ->generate($ast)
    ;

fwrite(STDOUT, " - [4/4] Saving result\n");

file_put_contents(OUTPUT_FILE, (string)$result);

fwrite(STDOUT, "   [ ✓ ] DONE!\n");
