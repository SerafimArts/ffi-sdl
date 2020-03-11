# FFI SDL Bindings

This is a SDL bindings for PHP

> #### Note 1: API not yet fully documented
> ##### Note 2: System functions (such as SDL_malloc or SDL_memcpy) have been removed from the API, but they can be returned if desired

## Requirements

- PHP >=7.4
- ext-ffi

## Installation

Library is available as composer repository and can be 
installed using the following command in a root of your project:

```bash
$ composer require serafim/ffi-sdl
```

## Documentation

- [https://wiki.libsdl.org/FrontPage](https://wiki.libsdl.org/FrontPage)

### How Read Documentation?

Let's take a look [at this example](https://wiki.libsdl.org/SDL_CreateWindow) 
with PHP code equivalent:

```cpp
#include "SDL.h"
#include <stdio.h>

int main(int argc, char* argv[]) {

    SDL_Window *window;                    // Declare a pointer

    SDL_Init(SDL_INIT_VIDEO);              // Initialize SDL2

    // Create an application window with the following settings:
    window = SDL_CreateWindow(
        "An SDL2 window",                  // window title
        100,                               // initial x position
        100,                               // initial y position
        640,                               // width, in pixels
        480,                               // height, in pixels
        SDL_WINDOW_OPENGL                  // flags - see below
    );

    // Check that the window was successfully created
    if (window == NULL) {
        // In the case that the window could not be made...
        printf("Could not create window: %s\n", SDL_GetError());
        return 1;
    }

    // The window is open: could enter program loop here (see SDL_PollEvent())

    SDL_Delay(3000);  // Pause execution for 3000 milliseconds, for example

    // Close and destroy the window
    SDL_DestroyWindow(window);

    // Clean up
    SDL_Quit();
    return 0;
}
```

### PHP Result

It is equivalent to the following example:

```php
<?php

use Serafim\SDL\SDL;

$sdl = new SDL();

$sdl->SDL_Init(SDL::SDL_INIT_VIDEO);

$window = $sdl->SDL_CreateWindow(
    'An SDL2 window',                  // window title
    100,                               // initial x position
    100,                               // initial y position
    640,                               // width, in pixels
    480,                               // height, in pixels
    SDL::SDL_WINDOW_OPENGL             // flags - see below
);

// Check that the window was successfully created
if ($window === null) {
    // In the case that the window could not be made...
    printf("Could not create window: %s\n", $sdl->SDL_GetError());
    return 1;
}

// The window is open: could enter program loop here (see SDL_PollEvent())

$sdl->SDL_Delay(3000); // Pause execution for 3000 milliseconds, for example

// Close and destroy the window
$sdl->SDL_DestroyWindow($window);

// Clean up
$sdl->SDL_Quit();
```

PHP is a managed-memory language, then cleanup after shutdown is optional. It 
means that `$sdl->SDL_DestroyWindow()` and `$sdl->SDL_Quit()` not needed... 
maybe...

## Code Comparison

```cpp
//                                                                 | //
// C/C++                                                           | // PHP
//                                                                 | //
                                                                   | 
#include "SDL.h"                                                   | $sdl = new \Serafim\SDL\SDL();
#include <stdio.h>                                                 | 
                                                                   | 
int main(int argc, char* argv[]) {                                 | 
    SDL_Window *window;                                            | 
    SDL_Init(SDL_INIT_VIDEO);                                      | $sdl->SDL_Init(SDL::SDL_INIT_VIDEO);
                                                                   | 
    window = SDL_CreateWindow(                                     | $window = $sdl->SDL_CreateWindow( 
        "An SDL2 window",                                          |     'An SDL2 window',
        100,                                                       |     100,
        100,                                                       |     100, 
        640,                                                       |     640,
        480,                                                       |     480,
        SDL_WINDOW_OPENGL                                          |     SDL::SDL_WINDOW_OPENGL
    );                                                             | );
                                                                   | 
    if (window == NULL) {                                          | if ($window == null) {
        printf(                                                    |     printf(
            "Could not create window: %s\n",                       |         "Could not create window: %s\n",
            SDL_GetError()                                         |         $sdl->SDL_GetError()
        );                                                         |     );
        return 1;                                                  |     return 1;
    }                                                              | }
                                                                   | 
    SDL_Delay(3000);                                               | $sdl->SDL_Delay(3000);
    SDL_DestroyWindow(window);                                     | $sdl->SDL_DestroyWindow($window);
    SDL_Quit();                                                    | $sdl->SDL_Quit();
                                                                   | 
    return 0;                                                      | return 0;
}                                                                  | 
```
