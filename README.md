# FFI SDL Bindings

This is a SDL bindings for PHP

- [System Requirements](#requirements)
- [Installation](#installation)
    - [Linux](#linux)
    - [MacOS](#macos)
    - [Windows](#windows)
- [Extensions](#extensions)
- [Documentation](#documentation)
- [Example](#example)

## Requirements

- PHP >= 7.4
- ext-ffi
- Windows, Linux or MacOS 
    - Android, iOS, BSD or something else are not supported yet
- SDL >= 2.0

## Installation

Library is available as composer repository and can be 
installed using the following command in a root of your project.

```bash
$ composer require serafim/ffi-sdl
```

#### Linux

- `sudo apt install libsdl2-2.0-0 -y`

#### MacOS

- `brew install sdl2`

#### Windows

- SDL (2.0.12) binaries are already bundled

## Extensions

- [SDL Image](https://github.com/SerafimArts/ffi-sdl-image)

## Documentation

The library API completely supports and repeats the analogue in the C language.

- [SDL2 official documentation](https://wiki.libsdl.org/FrontPage)

To support autocomplete, please add a link to `\SDL\NativeApiAutocomplete`:

```php
/** @var \SDL\SDLNativeApiAutocomplete $sdl */
$sdl = new \SDL\SDL();
```

In addition, the library contains functionality adapted for PHP.
- All methods are converted to the PSR style 
    - For example `$sdl->init(...)` instead of `$sdl->SDL_Init(...)`.
- In case of errors, methods throw exceptions.
- Removed passing arguments by reference during initialization
    - For example `$sdl->getVersion()` instead of `$sdl->SDL_GetVersion($versionPointer)`.
- All arguments that accept a boolean in c-format (short int) are replaced by a boolean.
- Added default arguments in some methods

#### Notes

- API not yet fully documented and may not work in places.
- Low level system functions (such as `SDL_malloc` or `SDL_memcpy`) have been removed.

## Example

```php
use SDL\SDL;
use SDL\Event;
use SDL\Kernel\Event\Type;

/** @var SDL|\SDL\SDLNativeApiAutocomplete $sdl */
$sdl = new SDL();

$sdl->SDL_Init(SDL::SDL_INIT_VIDEO);

$window = $sdl->SDL_CreateWindow( 
    'An SDL2 window',
    SDL::SDL_WINDOWPOS_UNDEFINED,
    SDL::SDL_WINDOWPOS_UNDEFINED, 
    640,
    480,
    SDL::SDL_WINDOW_OPENGL
);

if ($window === null) {
    throw new \Exception(sprintf('Could not create window: %s', $sdl->SDL_GetError()));
}

$event = $sdl->new(Event::class);

while($sdl->SDL_PollEvent(SDL::addr($event))) {
    if ($event->type === Type::SDL_QUIT) {
        break;
    }
}

$sdl->SDL_DestroyWindow($window);
$sdl->SDL_Quit();
```
