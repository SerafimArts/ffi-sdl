# FFI SDL Bindings

This is a SDL bindings for PHP

- [System Requirements](#requirements)
- [Installation](#installation)
    - [Linux](#linux)
    - [MacOS](#macos)
    - [Windows](#windows)
- [Documentation](#documentation)
- [Example](#example)

## Requirements

- PHP >=7.4
- ext-ffi
- MacOS, Linux or MacOS (BSD or something else are not supported yet).
- SDL >= 2.0

## Installation

Library is available as composer repository and can be 
installed using the following command in a root of your project.

```bash
$ composer require serafim/ffi-sdl
```

#### Linux

- `sudo apt install libsdl2-2.0-0 -y` for `\Serafim\SDL\SDL` API.
- `sudo apt install libsdl2-image-2.0-0 -y` for `\Serafim\SDL\Image` API.

#### MacOS

- `brew install sdl2` for `\Serafim\SDL\SDL` API.
- `brew install sdl2_image` for `\Serafim\SDL\Image` API.

#### Windows

- Binaries are already included

## Documentation

- [PHP SDL2 API](docs/api.md)
- [SDL2 official documentation](https://wiki.libsdl.org/FrontPage)

#### Notes

- API not yet fully documented and may not work in places.
- Low level system functions (such as `SDL_malloc` or `SDL_memcpy`) have been removed.

## Example

```cpp
use Serafim\SDL\SDL;

$sdl = new \Serafim\SDL\SDL();

$sdl->init(SDL::SDL_INIT_VIDEO);

$window = $sdl->createWindow( 
    'An SDL2 window',
    SDL::SDL_WINDOWPOS_UNDEFINED,
    SDL::SDL_WINDOWPOS_UNDEFINED, 
    640,
    480,
    SDL::SDL_WINDOW_OPENGL
);

if ($window == null) {
    throw new \Exception(sprintf('Could not create window: %s', $sdl->SDL_GetError());
}

$sdl->delay(3000);
$sdl->destroyWindow($window);
$sdl->quit();
```
