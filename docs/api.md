# SDL API

List of functions describing how the original SDL function was implemented in 
the SDL library.

- [Methods Naming](#methods-naming)
- [Modified Functions](#modified-functions)
- [Added Functions](#added-functions)

## Methods Naming

Each method has been renamed, given the [PSR-1](https://www.php-fig.org/psr/psr-1/)
naming convention of the PHP ([PSR-1 #4.3](https://www.php-fig.org/psr/psr-1/#43-methods)) methods.

- Prefix `SDL_` has been removed.
- All methods are formatted in the `lowerCamelCase` form.

```cpp
// Original naming convention
$sdl->SDL_Init(SDL::SDL_INIT_VIDEO);

// PSR-1 naming convention
$sdl->init(SDL::SDL_INIT_VIDEO);
```

However, you can use original methods naming:

```php
use Serafim\SDL\SDL;
use Serafim\SDL\SDLNativeApiAutocomplete;

/**
 * An interface SDLNativeApiAutocomplete enables autocomplete 
 * for legacy naming in IDE/editors.
 * 
 * @var SDL|SDLNativeApiAutocomplete $sdl 
 */
$sdl = new SDL();

// Also works
$sdl->SDL_Init(SDL::SDL_INIT_VIDEO);
```

## Modified Functions

### SDL_RWFromConstMem

- The function has been renamed to `rwFromConstMem`.
- The function always returns a structure pointer and throws the 
`Serafim\SDL\SDLException` exception in case of an error.

### SDL_RWFromFP

- The function has been renamed to `rwFromFilePointer`.
- The function always returns a structure pointer and throws the 
`Serafim\SDL\SDLException` exception in case of an error.
- Second argument `$autoClose` contains `true` as default value instead required integer value.

### SDL_RWFromFile

- The function has been renamed to `rwFromFile`.
- The function always returns a structure pointer and throws the 
`Serafim\SDL\SDLException` exception in case of an error.
- Second argument `$mode` contains `rb` as default value.

### SDL_RWFromMem

- The function has been renamed to `rwFromMemory`.
- The function always returns a structure pointer and throws the 
`Serafim\SDL\SDLException` exception in case of an error.

### SDL_RWclose

- The function has been renamed to `rwClose`.
- The function returns `void` (nothing) and throws the `Serafim\SDL\SDLException` 
exception in case of an error.
- Throws the `Serafim\SDL\VersionException` in case of local library 
incompatibility (Prior to version 2.0.10, preprocessor macros were used, 
which are not export functions).

### SDL_RWread

- The function has been renamed to `rwRead`.
- The function returns `void` (nothing) and throws the `Serafim\SDL\SDLException` 
exception in case of an error.
- Throws the `Serafim\SDL\VersionException` in case of local library 
incompatibility (Prior to version 2.0.10, preprocessor macros were used, 
which are not export functions).

### SDL_RWseek

- The function has been renamed to `rwSeek`.
- Throws the `Serafim\SDL\SDLException` exception in case of an error.
- Throws the `Serafim\SDL\VersionException` in case of local library 
incompatibility (Prior to version 2.0.10, preprocessor macros were used, 
which are not export functions).

### SDL_RWsize

- The function has been renamed to `rwSize`.
- Throws the `Serafim\SDL\SDLException` exception in case of an error.
- Throws the `Serafim\SDL\VersionException` in case of local library 
incompatibility (Prior to version 2.0.10, preprocessor macros were used, 
which are not export functions).

### SDL_RWtell

- The function has been renamed to `rwTell`.
- Throws the `Serafim\SDL\SDLException` exception in case of an error.
- Throws the `Serafim\SDL\VersionException` in case of local library 
incompatibility (Prior to version 2.0.10, preprocessor macros were used, 
which are not export functions).

### SDL_RWwrite

- The function has been renamed to `rwWrite`.
- Throws the `Serafim\SDL\SDLException` exception in case of an error.
- Throws the `Serafim\SDL\VersionException` in case of local library 
incompatibility (Prior to version 2.0.10, preprocessor macros were used, 
which are not export functions).

### SDL_AllocRW

- The function has been renamed to `allocRw`.
- The function always returns a structure pointer and throws the 
`Serafim\SDL\SDLException` exception in case of an error.


### SDL_GL_BindTexture

- The function has been renamed to `rwWrite`.
- Throws the `Serafim\SDL\SDLException` exception in case of an error.
- The function no longer requires float pointers (second and third arguments) and
returns an array of float values (texture width and height).

### SDL_GL_CreateContext

- The function has been renamed to `glCreateContext`.
- The function always returns a structure pointer and throws the 
  `Serafim\SDL\SDLException` exception in case of an error.
  
### SDL_GL_ExtensionSupported

- The function has been renamed to `glExtensionSupported`.
- The function returns a `bool` value instead of `int`.
- Throws the `Serafim\SDL\SDLException` exception in case of an error.

### SDL_GL_GetAttribute

- The function has been renamed to `glGetAttribute`.
- The function returns an `int` value for an attribute from the current context.
- Second int value pointer argument has been removed and replaced by the return value.
- Throws the `Serafim\SDL\SDLException` exception in case of an error.

### SDL_GL_GetCurrentContext

- The function has been renamed to `glGetCurrentContext`.
- Throws the `Serafim\SDL\SDLException` exception in case of an error.

### SDL_GL_GetCurrentContext

- The function has been renamed to `glGetCurrentContext`.

### SDL_GL_GetDrawableSize

- The function has been renamed to `glGetDrawableSize`.
- The function no longer requires int pointers (second and third arguments) and
  returns an array of int values (width and height).
- Throws the `Serafim\SDL\VersionException` in case of local library 
  incompatibility (SDL >= 2.0.1 required).

### SDL_GL_GetProcAddress

- The function has been renamed to `glGetProcAddress`.

### SDL_GL_GetSwapInterval

- The function has been renamed to `glGetSwapInterval`.
- Throws the `Serafim\SDL\SDLException` exception in case of an error.

### SDL_GL_LoadLibrary

- The function has been renamed to `glLoadLibrary`.
- Throws the `Serafim\SDL\SDLException` exception in case of an error.

### SDL_GL_MakeCurrent

- The function has been renamed to `glMakeCurrent`.
- Throws the `Serafim\SDL\SDLException` exception in case of an error.

### SDL_GL_ResetAttributes

- The function has been renamed to `glResetAttributes`.
- Throws the `Serafim\SDL\VersionException` in case of local library 
  incompatibility (SDL >= 2.0.2 required).
  
### SDL_GL_SetAttribute

- The function has been renamed to `glSetAttribute`.
- The function returns `void` (nothing) and throws the `Serafim\SDL\SDLException` 
exception in case of an error.

### SDL_GL_SetSwapInterval

- The function has been renamed to `glSetSwapInterval`.
- The function returns `void` (nothing) and throws the `Serafim\SDL\SDLException` 
  exception in case of an error.
  
### SDL_GL_SwapWindow

- The function has been renamed to `glSwapWindow`.
  
### SDL_GL_UnbindTexture

- The function has been renamed to `glUnbindTexture`.
- The function returns `void` (nothing) and throws the `Serafim\SDL\SDLException` 
  exception in case of an error.
  
### SDL_GL_UnloadLibrary

- The function has been renamed to `glUnloadLibrary`.

### SDL_LoadBMP_RW

- The function has been renamed to `loadBmpRw`.
- Third argument `$autoClose` contains `true` as default value instead required integer value.
- The function always returns a structure pointer and throws the 
  `Serafim\SDL\SDLException` exception in case of an error.

### SDL_SaveBMP_RW

- The function has been renamed to `saveBmpRw`.
- Third argument `$autoClose` contains `true` as default value instead required integer value.
- The function returns `void` (nothing) and throws the `Serafim\SDL\SDLException` 
    exception in case of an error.
    
### SDL_TLSCreate

- The function has been renamed to `tlsCreate`.
- Throws the `Serafim\SDL\SDLException` exception in case of an error.

### SDL_TLSGet

- The function has been renamed to `tlsGet`.
- The function always returns a structure pointer and throws the 
  `Serafim\SDL\SDLException` exception in case of an error.
  
### SDL_TLSSet

- The function has been renamed to `tlsSet`.
- The function returns `void` (nothing) and throws the `Serafim\SDL\SDLException` 
    exception in case of an error.

## Added Functions

### rwFromSplFile

- Is similar with `SDL_RWFromFile` however takes the `\SplFileInfo` object as 
the first argument.
- The function always returns a structure pointer and throws an 
`Serafim\SDL\SDLException` exception in case of an error.
