

/**
 *  This can be called to set the application class at startup
 */
extern int SDL_RegisterApp(char *name, Uint32 style, void *hInst);
extern void SDL_UnregisterApp(void);

// DirectX
/**
   \brief Set a function that is called for every windows message, before TranslateMessage()
*/
typedef void ( *SDL_WindowsMessageHook)(void *userdata, void *hWnd, unsigned int message, Uint64 wParam, Sint64 lParam);
extern void SDL_SetWindowsMessageHook(SDL_WindowsMessageHook callback, void *userdata);

/**
   \brief Returns the D3D9 adapter index that matches the specified display index.

   This adapter index can be passed to IDirect3D9::CreateDevice and controls
   on which monitor a full screen application will appear.
*/
extern int SDL_Direct3D9GetAdapterIndex(int displayIndex);

/**
   \brief Returns the D3D device associated with a renderer, or NULL if it's not a D3D renderer.

   Once you are done using the device, you should release it to avoid a resource leak.
 */
typedef struct IDirect3DDevice9 IDirect3DDevice9;
extern IDirect3DDevice9 * SDL_RenderGetD3D9Device(SDL_Renderer * renderer);

/**
   \brief Returns the DXGI Adapter and Output indices for the specified display index.

   These can be passed to EnumAdapters and EnumOutputs respectively to get the objects
   required to create a DX10 or DX11 device and swap chain.
 */
extern int SDL_DXGIGetOutputInfo(int displayIndex, int *adapterIndex, int *outputIndex);

