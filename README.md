# FFI SDL Bindings

This is a SDL bindings for PHP

> #### Note 1: API not yet fully documented
> ##### Note 2: System functions (such as SDL_malloc or SDL_memcpy) have been removed from the API

## Requirements

- PHP >=7.4
- ext-ffi
- MacOS, Linux or MacOS (BSD or something else are not supported yet).

## Installation

Library is available as composer repository and can be 
installed using the following command in a root of your project:

```bash
$ composer require serafim/ffi-sdl
```

## Documentation

- [https://wiki.libsdl.org/FrontPage](https://wiki.libsdl.org/FrontPage)

### PHP Example

```cpp
use Serafim\SDL\SDL;

$sdl = new \Serafim\SDL\SDL();

$sdl->SDL_Init(SDL::SDL_INIT_VIDEO);

$window = $sdl->SDL_CreateWindow( 
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

$sdl->SDL_Delay(3000);
$sdl->SDL_DestroyWindow($window);
$sdl->SDL_Quit();
```
