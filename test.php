<?php

require __DIR__ . '/vendor/autoload.php';

$cache = new \Symfony\Component\Cache\Psr16Cache(
    pool: new \Symfony\Component\Cache\Adapter\FilesystemAdapter(
        namespace: 'sdl',
        directory: __DIR__ . '/vendor/.cache',
    ),
);

$sdl = new \Serafim\SDL\SDL('SDL2.dll', cache: $cache);

use Serafim\SDL\SDL;
use Serafim\SDL\Event;
use Serafim\SDL\Kernel\Event\Type;

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
    $sdl->SDL_PollEvent(SDL::addr($event));
    if ($event->type === Type::SDL_QUIT) {
        $running = false;
    }
}

$sdl->SDL_DestroyWindow($window);
$sdl->SDL_Quit();
