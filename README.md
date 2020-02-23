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

Let's take a look [at this example](https://wiki.libsdl.org/SDL_CreateWindow):

```cpp
// Example program:
// Using SDL2 to create an application window

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

It is equivalent to the following example:

```php
<?php

use Serafim\SDL\Enum\Init;
use Serafim\SDL\SDL;
use Serafim\SDL\SDLLibrary;

$sdl = new SDL(SDLLibrary::resolve(), Init::SDL_INIT_VIDEO);

$window = $sdl->SDL_CreateWindow(
    'An SDL2 window',                  // window title
    100,                               // initial x position
    100,                               // initial y position
    640,                               // width, in pixels
    480,                               // height, in pixels
    0x00000002                         // flags - see below
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

## Example

### Hello World

```php
<?php

use FFI\CData;
use Serafim\FFIUtils\Util;
use Serafim\SDL\Enum\Init;
use Serafim\SDL\SDL;
use Serafim\SDL\SDL_DisplayMode;
use Serafim\SDL\SDL_Event;
use Serafim\SDL\SDLLibrary;

require __DIR__ . '/vendor/autoload.php';

function create_window(SDL $sdl, string $title): CData
{
    [$width, $height] = [640, 480];

    /** @var SDL_DisplayMode|CData $mode */
    $mode = $sdl->new('SDL_DisplayMode');

    $sdl->SDL_GetDesktopDisplayMode(0, $sdl::addr($mode));

    [$left, $top] = [(int)($mode->w / 2 - $width / 2), (int)($mode->h / 2 - $height / 2)];

    return $sdl->SDL_CreateWindow($title, $left, $top, $width, $height, 0);
}

function message_box(SDL $sdl, string $title, string $body): void
{
    $titlePtr = Util::string($title);
    $bodyPtr = Util::string($body);

    $sdl->SDL_ShowSimpleMessageBox(0, $titlePtr, $bodyPtr,null);
}

// New Application
$sdl = new SDL(SDLLibrary::resolve(), Init::SDL_INIT_VIDEO);

// Render SDL Version
echo 'SDL ' . $sdl->getVersionString() . ' was loaded!';

// New Window
$window = create_window($sdl, 'Hello World!');


// Wait for close
$quit = false;

/** @var SDL_Event|CData $event */
$event = $sdl->new('SDL_Event');

while (! $quit) {
    if ($sdl->SDL_WaitEvent($sdl::addr($event)) !== 0 && $event->type === 0x100) {
        message_box($sdl, 'Bye-Bye!', \print_r($event, true));
        $quit = true;
    }
}
```
