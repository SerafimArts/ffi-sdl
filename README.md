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

- PHP ^8.1
- ext-ffi
- Windows, Linux, BSD or MacOS 
    - Android, iOS or something else are not supported yet
- SDL >= 2.0

## Installation

Library is available as composer repository and can be 
installed using the following command in a root of your project.

```bash
$ composer require serafim/ffi-sdl
```

Additional dependencies:
  - Debian-based Linux: `sudo apt install libsdl2-2.0-0 -y`
  - MacOS: `brew install sdl2`
  - Window: Can be [downloaded from here](https://github.com/libsdl-org/SDL/releases)

## Extensions

- [SDL Image](https://github.com/SerafimArts/ffi-sdl-image)
- [SDL TTF](https://github.com/SerafimArts/ffi-sdl-ttf)

## Documentation

The library API completely supports and repeats the analogue in the C language.

- [SDL2 official documentation](https://wiki.libsdl.org/FrontPage)

#### Notes

- API not yet fully documented and may not work in places.
- Low level and inline functions (such as `SDL_malloc` or `SDL_memcpy`) have been removed.

## Example

```php
use Serafim\SDL\SDL;
use Serafim\SDL\Event;
use Serafim\SDL\Kernel\Event\Type;

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

$event = $sdl->new('SDL_Event');
$running = true;

while ($running) {
    $sdl->SDL_PollEvent(FFI::addr($event));
    if ($event->type === Type::SDL_QUIT) {
        $running = false;
    }
}

$sdl->SDL_DestroyWindow($window);
$sdl->SDL_Quit();
```
