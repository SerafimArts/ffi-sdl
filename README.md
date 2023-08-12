# FFI SDL Bindings

<p align="center">
    <a href="https://packagist.org/packages/serafim/ffi-sdl"><img src="https://poser.pugx.org/serafim/ffi-sdl/require/php?style=for-the-badge" alt="PHP 8.1+"></a>
    <a href="https://github.com/libsdl-org/SDL"><img src="https://img.shields.io/badge/SDL-2.28.2-004953.svg?style=flat-square" alt="SDL"></a>
    <a href="https://packagist.org/packages/serafim/ffi-sdl"><img src="https://poser.pugx.org/serafim/ffi-sdl/version?style=for-the-badge" alt="Latest Stable Version"></a>
    <a href="https://packagist.org/packages/serafim/ffi-sdl"><img src="https://poser.pugx.org/serafim/ffi-sdl/v/unstable?style=for-the-badge" alt="Latest Unstable Version"></a>
    <a href="https://packagist.org/packages/serafim/ffi-sdl"><img src="https://poser.pugx.org/serafim/ffi-sdl/downloads?style=for-the-badge" alt="Total Downloads"></a>
    <a href="https://raw.githubusercontent.com/php-serafim/ffi-sdl/master/LICENSE.md"><img src="https://poser.pugx.org/serafim/ffi-sdl/license?style=for-the-badge" alt="License MIT"></a>
</p>
<p align="center">
    <a href="https://github.com/php-serafim/ffi-sdl/actions"><img src="https://github.com/php-serafim/ffi-sdl/workflows/build/badge.svg"></a>
</p>

A SDL FFI bindings for the PHP language.

- [System Requirements](#requirements)
- [Installation](#installation)
- [Extensions](#extensions)
- [Documentation](#documentation)
- [Initialization](#initialization)
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

- API not yet fully documented and may not work in places.
- Low level and inline functions (such as `SDL_malloc` or `SDL_memcpy`) have
  been removed.

## Initialization

To specify a library pathname explicitly, you can add the `library` argument to
the `Serafim\SDL\SDL` constructor.

> By default, the library will try to resolve the binary's pathname automatically.

```php
// Load library from pathname (it may be relative or part of system-dependent path)
$sdl = new Serafim\SDL\SDL(library: __DIR__ . '/path/to/library.so');

// Try to automatically resolve library's pathname
$sdl = new Serafim\SDL\SDL(library: null);
```

You can explicitly specify the platform (OS) that will be used as the basis
for compiling headers. 

> By default, the library will try to resolve the platform automatically.

```php
// Use Linux as compile-aware platform
$sdl = new Serafim\SDL\SDL(platform: Serafim\SDL\Platform::LINUX);

// Detect platform automatically
$sdl = new Serafim\SDL\SDL(platform: null);
```

You can also specify the library version explicitly. Depending on this version,
the corresponding functions of the SDL will be available.

> By default, the library will try to resolve SDL version automatically.

```php
// Use v2.28.2 from string
$sdl = new Serafim\SDL\SDL(version: '2.28.2');

// Use v2.24.1 from predefined versions constant
$sdl = new Serafim\SDL\SDL(version: \Serafim\SDL\Version::V2_24_1);

// Use latest supported version
$sdl = new Serafim\SDL\SDL(version: \Serafim\SDL\Version::LATEST);
```

To speed up the header compiler, you can use any PSR-16 compatible cache driver.

```php
$sdl = new Serafim\SDL\SDL(cache: new Psr16Cache(...));
```

In addition, you can control other preprocessor directives explicitly:

```php
$pre = new \FFI\Preprocessor\Preprocessor();
$pre->setLogger(new ExampleLogger());
$pre->define('__ANDROID__', '1');

$sdl = new Serafim\SDL\SDL(pre: $pre);
$jni = $sdl->SDL_AndroidGetJNIEnv();
```

## Example

```php
use Serafim\SDL\SDL;
use Serafim\SDL\Event\Type;

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
