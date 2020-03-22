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

- `sudo apt install libsdl2-2.0-0 -y`

#### MacOS

- `brew install sdl2`

#### Windows

- SDL (2.0.12) binaries are already bundled

## Extensions

- [SDL Image](https://github.com/SerafimArts/ffi-sdl-image)

## Documentation

- [PHP SDL2 API](docs/api.md)
- [SDL2 official documentation](https://wiki.libsdl.org/FrontPage)

#### Notes

- API not yet fully documented and may not work in places.
- Low level system functions (such as `SDL_malloc` or `SDL_memcpy`) have been removed.

## Example

```php
use Serafim\SDL\SDL;
use Serafim\SDL\Event;
use Serafim\SDL\Kernel\Event\Type;


$sdl = new SDL();

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
    throw new \Exception(sprintf('Could not create window: %s', $sdl->getError()));
}

$event = $sdl->new(Event::class);

while($sdl->pollEvent($sdl::addr($event))) {
    if ($event->type === Type::SDL_QUIT) {
        break;
    }
}

$sdl->destroyWindow($window);
$sdl->quit();
```
