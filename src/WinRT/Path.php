<?php

declare(strict_types=1);

namespace Serafim\SDL\WinRT;

interface Path
{
    /**
     * The installed app's root directory.
     * Files here are likely to be read-only.
     */
    public const SDL_WINRT_PATH_INSTALLED_LOCATION = 0;

    /**
     * The app's local data store.
     * Files may be written here
     */
    public const SDL_WINRT_PATH_LOCAL_FOLDER = 1;

    /**
     * The app's roaming data store.
     * Unsupported on Windows Phone.
     *
     * Files written here may be copied to other machines via a
     * network connection.
     */
    public const SDL_WINRT_PATH_ROAMING_FOLDER = 2;

    /**
     * The app's temporary data store.
     * Unsupported on Windows Phone.
     *
     * Files written here may be deleted at any time.
     */
    public const SDL_WINRT_PATH_TEMP_FOLDER = 3;
}
