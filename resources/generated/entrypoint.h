#include <stddef.h>
#include <stdarg.h>
#include <stdint.h>
extern  const char *  SDL_GetPlatform (void);
typedef enum
{
    SDL_FALSE = 0,
    SDL_TRUE = 1
} SDL_bool;
typedef int8_t Sint8;
typedef uint8_t Uint8;
typedef int16_t Sint16;
typedef uint16_t Uint16;
typedef int32_t Sint32;
typedef uint32_t Uint32;
typedef int64_t Sint64;
typedef uint64_t Uint64;
_Static_assert(sizeof(Uint8) == 1, "sizeof(Uint8) == 1");
_Static_assert(sizeof(Sint8) == 1, "sizeof(Sint8) == 1");
_Static_assert(sizeof(Uint16) == 2, "sizeof(Uint16) == 2");
_Static_assert(sizeof(Sint16) == 2, "sizeof(Sint16) == 2");
_Static_assert(sizeof(Uint32) == 4, "sizeof(Uint32) == 4");
_Static_assert(sizeof(Sint32) == 4, "sizeof(Sint32) == 4");
_Static_assert(sizeof(Uint64) == 8, "sizeof(Uint64) == 8");
_Static_assert(sizeof(Sint64) == 8, "sizeof(Sint64) == 8");
typedef enum
{
    DUMMY_ENUM_VALUE
} SDL_DUMMY_ENUM;
_Static_assert(sizeof(SDL_DUMMY_ENUM) == sizeof(int), "sizeof(SDL_DUMMY_ENUM) == sizeof(int)");
extern  void * SDL_malloc(size_t size);
extern  void * SDL_calloc(size_t nmemb, size_t size);
extern  void * SDL_realloc(void *mem, size_t size);
extern  void  SDL_free(void *mem);
typedef void *( *SDL_malloc_func)(size_t size);
typedef void *( *SDL_calloc_func)(size_t nmemb, size_t size);
typedef void *( *SDL_realloc_func)(void *mem, size_t size);
typedef void ( *SDL_free_func)(void *mem);
extern  void  SDL_GetOriginalMemoryFunctions(SDL_malloc_func *malloc_func,
                                                            SDL_calloc_func *calloc_func,
                                                            SDL_realloc_func *realloc_func,
                                                            SDL_free_func *free_func);
extern  void  SDL_GetMemoryFunctions(SDL_malloc_func *malloc_func,
                                                    SDL_calloc_func *calloc_func,
                                                    SDL_realloc_func *realloc_func,
                                                    SDL_free_func *free_func);
extern  int  SDL_SetMemoryFunctions(SDL_malloc_func malloc_func,
                                                   SDL_calloc_func calloc_func,
                                                   SDL_realloc_func realloc_func,
                                                   SDL_free_func free_func);
extern  int  SDL_GetNumAllocations(void);
extern  char * SDL_getenv(const char *name);
extern  int  SDL_setenv(const char *name, const char *value, int overwrite);
extern  void  SDL_qsort(void *base, size_t nmemb, size_t size, int ( *compare) (const void *, const void *));
extern  void *  SDL_bsearch(const void *key, const void *base, size_t nmemb, size_t size, int ( *compare) (const void *, const void *));
extern  int  SDL_abs(int x);
extern  int  SDL_isalpha(int x);
extern  int  SDL_isalnum(int x);
extern  int  SDL_isblank(int x);
extern  int  SDL_iscntrl(int x);
extern  int  SDL_isdigit(int x);
extern  int  SDL_isxdigit(int x);
extern  int  SDL_ispunct(int x);
extern  int  SDL_isspace(int x);
extern  int  SDL_isupper(int x);
extern  int  SDL_islower(int x);
extern  int  SDL_isprint(int x);
extern  int  SDL_isgraph(int x);
extern  int  SDL_toupper(int x);
extern  int  SDL_tolower(int x);
extern  Uint16  SDL_crc16(Uint16 crc, const void *data, size_t len);
extern  Uint32  SDL_crc32(Uint32 crc, const void *data, size_t len);
extern  void * SDL_memset( void *dst, int c, size_t len);
static inline void SDL_memset4(void *dst, Uint32 val, size_t dwords)
{
    size_t _n = (dwords + 3) / 4;
    Uint32 *_p = ((Uint32 *)(dst));
    Uint32 _val = (val);
    if (dwords == 0) {
        return;
    }
    switch (dwords % 4) {
        case 0: do {    *_p++ = _val;   do {} while (0);
        case 3:         *_p++ = _val;   do {} while (0);
        case 2:         *_p++ = _val;   do {} while (0);
        case 1:         *_p++ = _val;
        } while ( --_n );
    }
}
extern  void * SDL_memcpy( void *dst,  const void *src, size_t len);
extern  void * SDL_memmove( void *dst,  const void *src, size_t len);
extern  int  SDL_memcmp(const void *s1, const void *s2, size_t len);
extern  size_t  SDL_wcslen(const wchar_t *wstr);
extern  size_t  SDL_wcslcpy( wchar_t *dst, const wchar_t *src, size_t maxlen);
extern  size_t  SDL_wcslcat( wchar_t *dst, const wchar_t *src, size_t maxlen);
extern  wchar_t * SDL_wcsdup(const wchar_t *wstr);
extern  wchar_t * SDL_wcsstr(const wchar_t *haystack, const wchar_t *needle);
extern  int  SDL_wcscmp(const wchar_t *str1, const wchar_t *str2);
extern  int  SDL_wcsncmp(const wchar_t *str1, const wchar_t *str2, size_t maxlen);
extern  int  SDL_wcscasecmp(const wchar_t *str1, const wchar_t *str2);
extern  int  SDL_wcsncasecmp(const wchar_t *str1, const wchar_t *str2, size_t len);
extern  size_t  SDL_strlen(const char *str);
extern  size_t  SDL_strlcpy( char *dst, const char *src, size_t maxlen);
extern  size_t  SDL_utf8strlcpy( char *dst, const char *src, size_t dst_bytes);
extern  size_t  SDL_strlcat( char *dst, const char *src, size_t maxlen);
extern  char * SDL_strdup(const char *str);
extern  char * SDL_strrev(char *str);
extern  char * SDL_strupr(char *str);
extern  char * SDL_strlwr(char *str);
extern  char * SDL_strchr(const char *str, int c);
extern  char * SDL_strrchr(const char *str, int c);
extern  char * SDL_strstr(const char *haystack, const char *needle);
extern  char * SDL_strcasestr(const char *haystack, const char *needle);
extern  char * SDL_strtokr(char *s1, const char *s2, char **saveptr);
extern  size_t  SDL_utf8strlen(const char *str);
extern  size_t  SDL_utf8strnlen(const char *str, size_t bytes);
extern  char * SDL_itoa(int value, char *str, int radix);
extern  char * SDL_uitoa(unsigned int value, char *str, int radix);
extern  char * SDL_ltoa(long value, char *str, int radix);
extern  char * SDL_ultoa(unsigned long value, char *str, int radix);
extern  char * SDL_lltoa(Sint64 value, char *str, int radix);
extern  char * SDL_ulltoa(Uint64 value, char *str, int radix);
extern  int  SDL_atoi(const char *str);
extern  double  SDL_atof(const char *str);
extern  long  SDL_strtol(const char *str, char **endp, int base);
extern  unsigned long  SDL_strtoul(const char *str, char **endp, int base);
extern  Sint64  SDL_strtoll(const char *str, char **endp, int base);
extern  Uint64  SDL_strtoull(const char *str, char **endp, int base);
extern  double  SDL_strtod(const char *str, char **endp);
extern  int  SDL_strcmp(const char *str1, const char *str2);
extern  int  SDL_strncmp(const char *str1, const char *str2, size_t maxlen);
extern  int  SDL_strcasecmp(const char *str1, const char *str2);
extern  int  SDL_strncasecmp(const char *str1, const char *str2, size_t len);
extern  int  SDL_sscanf(const char *text,  const char *fmt, ...) ;
extern  int  SDL_vsscanf(const char *text, const char *fmt, va_list ap);
extern  int  SDL_snprintf( char *text, size_t maxlen,  const char *fmt, ... ) ;
extern  int  SDL_vsnprintf( char *text, size_t maxlen, const char *fmt, va_list ap);
extern  int  SDL_asprintf(char **strp,  const char *fmt, ...) ;
extern  int  SDL_vasprintf(char **strp, const char *fmt, va_list ap);
extern  double  SDL_acos(double x);
extern  float  SDL_acosf(float x);
extern  double  SDL_asin(double x);
extern  float  SDL_asinf(float x);
extern  double  SDL_atan(double x);
extern  float  SDL_atanf(float x);
extern  double  SDL_atan2(double y, double x);
extern  float  SDL_atan2f(float y, float x);
extern  double  SDL_ceil(double x);
extern  float  SDL_ceilf(float x);
extern  double  SDL_copysign(double x, double y);
extern  float  SDL_copysignf(float x, float y);
extern  double  SDL_cos(double x);
extern  float  SDL_cosf(float x);
extern  double  SDL_exp(double x);
extern  float  SDL_expf(float x);
extern  double  SDL_fabs(double x);
extern  float  SDL_fabsf(float x);
extern  double  SDL_floor(double x);
extern  float  SDL_floorf(float x);
extern  double  SDL_trunc(double x);
extern  float  SDL_truncf(float x);
extern  double  SDL_fmod(double x, double y);
extern  float  SDL_fmodf(float x, float y);
extern  double  SDL_log(double x);
extern  float  SDL_logf(float x);
extern  double  SDL_log10(double x);
extern  float  SDL_log10f(float x);
extern  double  SDL_pow(double x, double y);
extern  float  SDL_powf(float x, float y);
extern  double  SDL_round(double x);
extern  float  SDL_roundf(float x);
extern  long  SDL_lround(double x);
extern  long  SDL_lroundf(float x);
extern  double  SDL_scalbn(double x, int n);
extern  float  SDL_scalbnf(float x, int n);
extern  double  SDL_sin(double x);
extern  float  SDL_sinf(float x);
extern  double  SDL_sqrt(double x);
extern  float  SDL_sqrtf(float x);
extern  double  SDL_tan(double x);
extern  float  SDL_tanf(float x);
typedef struct _SDL_iconv_t *SDL_iconv_t;
extern  SDL_iconv_t  SDL_iconv_open(const char *tocode,
                                                   const char *fromcode);
extern  int  SDL_iconv_close(SDL_iconv_t cd);
extern  size_t  SDL_iconv(SDL_iconv_t cd, const char **inbuf,
                                         size_t * inbytesleft, char **outbuf,
                                         size_t * outbytesleft);
extern  char * SDL_iconv_string(const char *tocode,
                                               const char *fromcode,
                                               const char *inbuf,
                                               size_t inbytesleft);
static inline void *SDL_memcpy4( void *dst,  const void *src, size_t dwords)
{
    return SDL_memcpy(dst, src, dwords * 4);
}
static inline int SDL_size_mul_overflow (size_t a,
                                            size_t b,
                                            size_t *ret)
{
    if (a != 0 && b > ((size_t) -1) / a) {
        return -1;
    }
    *ret = a * b;
    return 0;
}
static inline int SDL_size_add_overflow (size_t a,
                                            size_t b,
                                            size_t *ret)
{
    if (b > ((size_t) -1) - a) {
        return -1;
    }
    *ret = a + b;
    return 0;
}
typedef int (*SDL_main_func)(int argc, char *argv[]);
extern  int SDL_main(int argc, char *argv[]);
extern  void  SDL_SetMainReady(void);
extern  int  SDL_RegisterApp(const char *name, Uint32 style, void *hInst);
extern  void  SDL_UnregisterApp(void);
typedef enum
{
    SDL_ASSERTION_RETRY,
    SDL_ASSERTION_BREAK,
    SDL_ASSERTION_ABORT,
    SDL_ASSERTION_IGNORE,
    SDL_ASSERTION_ALWAYS_IGNORE
} SDL_AssertState;
typedef struct SDL_AssertData
{
    int always_ignore;
    unsigned int trigger_count;
    const char *condition;
    const char *filename;
    int linenum;
    const char *function;
    const struct SDL_AssertData *next;
} SDL_AssertData;
extern  SDL_AssertState  SDL_ReportAssertion(SDL_AssertData *,
                                                            const char *,
                                                            const char *, int)
;
typedef SDL_AssertState ( *SDL_AssertionHandler)(
                                 const SDL_AssertData* data, void* userdata);
extern  void  SDL_SetAssertionHandler(
                                            SDL_AssertionHandler handler,
                                            void *userdata);
extern  SDL_AssertionHandler  SDL_GetDefaultAssertionHandler(void);
extern  SDL_AssertionHandler  SDL_GetAssertionHandler(void **puserdata);
extern  const SDL_AssertData *  SDL_GetAssertionReport(void);
extern  void  SDL_ResetAssertionReport(void);
typedef int SDL_SpinLock;
extern  SDL_bool  SDL_AtomicTryLock(SDL_SpinLock *lock);
extern  void  SDL_AtomicLock(SDL_SpinLock *lock);
extern  void  SDL_AtomicUnlock(SDL_SpinLock *lock);
extern  void  SDL_MemoryBarrierReleaseFunction(void);
extern  void  SDL_MemoryBarrierAcquireFunction(void);
typedef struct { int value; } SDL_atomic_t;
extern  SDL_bool  SDL_AtomicCAS(SDL_atomic_t *a, int oldval, int newval);
extern  int  SDL_AtomicSet(SDL_atomic_t *a, int v);
extern  int  SDL_AtomicGet(SDL_atomic_t *a);
extern  int  SDL_AtomicAdd(SDL_atomic_t *a, int v);
extern  SDL_bool  SDL_AtomicCASPtr(void **a, void *oldval, void *newval);
extern  void*  SDL_AtomicSetPtr(void **a, void* v);
extern  void*  SDL_AtomicGetPtr(void **a);
extern  int  SDL_SetError( const char *fmt, ...) ;
extern  const char * SDL_GetError(void);
extern  char *  SDL_GetErrorMsg(char *errstr, int maxlen);
extern  void  SDL_ClearError(void);
typedef enum
{
    SDL_ENOMEM,
    SDL_EFREAD,
    SDL_EFWRITE,
    SDL_EFSEEK,
    SDL_UNSUPPORTED,
    SDL_LASTERROR
} SDL_errorcode;
extern  int  SDL_Error(SDL_errorcode code);
static inline Uint16
SDL_Swap16(Uint16 x)
{
    return ((Uint16)(((x << 8) | (x >> 8))));
}
static inline Uint32
SDL_Swap32(Uint32 x)
{
    return ((Uint32)(((x << 24) | ((x << 8) & 0x00FF0000) |
                                    ((x >> 8) & 0x0000FF00) | (x >> 24))));
}
static inline Uint64
SDL_Swap64(Uint64 x)
{
    Uint32 hi, lo;
    lo = ((Uint32)(x & 0xFFFFFFFF));
    x >>= 32;
    hi = ((Uint32)(x & 0xFFFFFFFF));
    x = SDL_Swap32(lo);
    x <<= 32;
    x |= SDL_Swap32(hi);
    return (x);
}
static inline float
SDL_SwapFloat(float x)
{
    union {
        float f;
        Uint32 ui32;
    } swapper;
    swapper.f = x;
    swapper.ui32 = SDL_Swap32(swapper.ui32);
    return swapper.f;
}
struct SDL_mutex;
typedef struct SDL_mutex SDL_mutex;
extern  SDL_mutex * SDL_CreateMutex(void);
extern  int  SDL_LockMutex(SDL_mutex * mutex) 
  ;
extern  int  SDL_TryLockMutex(SDL_mutex * mutex) 
  ;
extern  int  SDL_UnlockMutex(SDL_mutex * mutex) 
  ;
extern  void  SDL_DestroyMutex(SDL_mutex * mutex);
struct SDL_semaphore;
typedef struct SDL_semaphore SDL_sem;
extern  SDL_sem * SDL_CreateSemaphore(Uint32 initial_value);
extern  void  SDL_DestroySemaphore(SDL_sem * sem);
extern  int  SDL_SemWait(SDL_sem * sem);
extern  int  SDL_SemTryWait(SDL_sem * sem);
extern  int  SDL_SemWaitTimeout(SDL_sem *sem, Uint32 timeout);
extern  int  SDL_SemPost(SDL_sem * sem);
extern  Uint32  SDL_SemValue(SDL_sem * sem);
struct SDL_cond;
typedef struct SDL_cond SDL_cond;
extern  SDL_cond * SDL_CreateCond(void);
extern  void  SDL_DestroyCond(SDL_cond * cond);
extern  int  SDL_CondSignal(SDL_cond * cond);
extern  int  SDL_CondBroadcast(SDL_cond * cond);
extern  int  SDL_CondWait(SDL_cond * cond, SDL_mutex * mutex);
extern  int  SDL_CondWaitTimeout(SDL_cond * cond,
                                                SDL_mutex * mutex, Uint32 ms);
struct SDL_Thread;
typedef struct SDL_Thread SDL_Thread;
typedef unsigned long SDL_threadID;
typedef unsigned int SDL_TLSID;
typedef enum {
    SDL_THREAD_PRIORITY_LOW,
    SDL_THREAD_PRIORITY_NORMAL,
    SDL_THREAD_PRIORITY_HIGH,
    SDL_THREAD_PRIORITY_TIME_CRITICAL
} SDL_ThreadPriority;
typedef int ( * SDL_ThreadFunction) (void *data);
typedef uintptr_t ( * pfnSDL_CurrentBeginThread)
                   (void *, unsigned, unsigned ( *func)(void *),
                    void *, unsigned, unsigned *);
typedef void ( * pfnSDL_CurrentEndThread) (unsigned code);
extern  SDL_Thread *
SDL_CreateThread(SDL_ThreadFunction fn, const char *name, void *data,
                 pfnSDL_CurrentBeginThread pfnBeginThread,
                 pfnSDL_CurrentEndThread pfnEndThread);
extern  SDL_Thread *
SDL_CreateThreadWithStackSize(SDL_ThreadFunction fn,
                 const char *name, const size_t stacksize, void *data,
                 pfnSDL_CurrentBeginThread pfnBeginThread,
                 pfnSDL_CurrentEndThread pfnEndThread);
extern  const char * SDL_GetThreadName(SDL_Thread *thread);
extern  SDL_threadID  SDL_ThreadID(void);
extern  SDL_threadID  SDL_GetThreadID(SDL_Thread * thread);
extern  int  SDL_SetThreadPriority(SDL_ThreadPriority priority);
extern  void  SDL_WaitThread(SDL_Thread * thread, int *status);
extern  void  SDL_DetachThread(SDL_Thread * thread);
extern  SDL_TLSID  SDL_TLSCreate(void);
extern  void *  SDL_TLSGet(SDL_TLSID id);
extern  int  SDL_TLSSet(SDL_TLSID id, const void *value, void ( *destructor)(void*));
extern  void  SDL_TLSCleanup(void);
typedef struct SDL_RWops
{
    Sint64 ( * size) (struct SDL_RWops * context);
    Sint64 ( * seek) (struct SDL_RWops * context, Sint64 offset,
                             int whence);
    size_t ( * read) (struct SDL_RWops * context, void *ptr,
                             size_t size, size_t maxnum);
    size_t ( * write) (struct SDL_RWops * context, const void *ptr,
                              size_t size, size_t num);
    int ( * close) (struct SDL_RWops * context);
    Uint32 type;
    union
    {
        struct
        {
            SDL_bool append;
            void *h;
            struct
            {
                void *data;
                size_t size;
                size_t left;
            } buffer;
        } windowsio;
        struct
        {
            Uint8 *base;
            Uint8 *here;
            Uint8 *stop;
        } mem;
        struct
        {
            void *data1;
            void *data2;
        } unknown;
    } hidden;
} SDL_RWops;
extern  SDL_RWops * SDL_RWFromFile(const char *file,
                                                  const char *mode);
extern  SDL_RWops * SDL_RWFromFP(void * fp,
                                                SDL_bool autoclose);
extern  SDL_RWops * SDL_RWFromMem(void *mem, int size);
extern  SDL_RWops * SDL_RWFromConstMem(const void *mem,
                                                      int size);
extern  SDL_RWops * SDL_AllocRW(void);
extern  void  SDL_FreeRW(SDL_RWops * area);
extern  Sint64  SDL_RWsize(SDL_RWops *context);
extern  Sint64  SDL_RWseek(SDL_RWops *context,
                                          Sint64 offset, int whence);
extern  Sint64  SDL_RWtell(SDL_RWops *context);
extern  size_t  SDL_RWread(SDL_RWops *context,
                                          void *ptr, size_t size,
                                          size_t maxnum);
extern  size_t  SDL_RWwrite(SDL_RWops *context,
                                           const void *ptr, size_t size,
                                           size_t num);
extern  int  SDL_RWclose(SDL_RWops *context);
extern  void * SDL_LoadFile_RW(SDL_RWops *src,
                                              size_t *datasize,
                                              int freesrc);
extern  void * SDL_LoadFile(const char *file, size_t *datasize);
extern  Uint8  SDL_ReadU8(SDL_RWops * src);
extern  Uint16  SDL_ReadLE16(SDL_RWops * src);
extern  Uint16  SDL_ReadBE16(SDL_RWops * src);
extern  Uint32  SDL_ReadLE32(SDL_RWops * src);
extern  Uint32  SDL_ReadBE32(SDL_RWops * src);
extern  Uint64  SDL_ReadLE64(SDL_RWops * src);
extern  Uint64  SDL_ReadBE64(SDL_RWops * src);
extern  size_t  SDL_WriteU8(SDL_RWops * dst, Uint8 value);
extern  size_t  SDL_WriteLE16(SDL_RWops * dst, Uint16 value);
extern  size_t  SDL_WriteBE16(SDL_RWops * dst, Uint16 value);
extern  size_t  SDL_WriteLE32(SDL_RWops * dst, Uint32 value);
extern  size_t  SDL_WriteBE32(SDL_RWops * dst, Uint32 value);
extern  size_t  SDL_WriteLE64(SDL_RWops * dst, Uint64 value);
extern  size_t  SDL_WriteBE64(SDL_RWops * dst, Uint64 value);
typedef Uint16 SDL_AudioFormat;
typedef void ( * SDL_AudioCallback) (void *userdata, Uint8 * stream,
                                            int len);
typedef struct SDL_AudioSpec
{
    int freq;
    SDL_AudioFormat format;
    Uint8 channels;
    Uint8 silence;
    Uint16 samples;
    Uint16 padding;
    Uint32 size;
    SDL_AudioCallback callback;
    void *userdata;
} SDL_AudioSpec;
struct SDL_AudioCVT;
typedef void ( * SDL_AudioFilter) (struct SDL_AudioCVT * cvt,
                                          SDL_AudioFormat format);
typedef struct SDL_AudioCVT
{
    int needed;
    SDL_AudioFormat src_format;
    SDL_AudioFormat dst_format;
    double rate_incr;
    Uint8 *buf;
    int len;
    int len_cvt;
    int len_mult;
    double len_ratio;
    SDL_AudioFilter filters[9 + 1];
    int filter_index;
}  SDL_AudioCVT;
extern  int  SDL_GetNumAudioDrivers(void);
extern  const char * SDL_GetAudioDriver(int index);
extern  int  SDL_AudioInit(const char *driver_name);
extern  void  SDL_AudioQuit(void);
extern  const char * SDL_GetCurrentAudioDriver(void);
extern  int  SDL_OpenAudio(SDL_AudioSpec * desired,
                                          SDL_AudioSpec * obtained);
typedef Uint32 SDL_AudioDeviceID;
extern  int  SDL_GetNumAudioDevices(int iscapture);
extern  const char * SDL_GetAudioDeviceName(int index,
                                                           int iscapture);
extern  int  SDL_GetAudioDeviceSpec(int index,
                                                   int iscapture,
                                                   SDL_AudioSpec *spec);
extern  int  SDL_GetDefaultAudioInfo(char **name,
                                                    SDL_AudioSpec *spec,
                                                    int iscapture);
extern  SDL_AudioDeviceID  SDL_OpenAudioDevice(
                                                  const char *device,
                                                  int iscapture,
                                                  const SDL_AudioSpec *desired,
                                                  SDL_AudioSpec *obtained,
                                                  int allowed_changes);
typedef enum
{
    SDL_AUDIO_STOPPED = 0,
    SDL_AUDIO_PLAYING,
    SDL_AUDIO_PAUSED
} SDL_AudioStatus;
extern  SDL_AudioStatus  SDL_GetAudioStatus(void);
extern  SDL_AudioStatus  SDL_GetAudioDeviceStatus(SDL_AudioDeviceID dev);
extern  void  SDL_PauseAudio(int pause_on);
extern  void  SDL_PauseAudioDevice(SDL_AudioDeviceID dev,
                                                  int pause_on);
extern  SDL_AudioSpec * SDL_LoadWAV_RW(SDL_RWops * src,
                                                      int freesrc,
                                                      SDL_AudioSpec * spec,
                                                      Uint8 ** audio_buf,
                                                      Uint32 * audio_len);
extern  void  SDL_FreeWAV(Uint8 * audio_buf);
extern  int  SDL_BuildAudioCVT(SDL_AudioCVT * cvt,
                                              SDL_AudioFormat src_format,
                                              Uint8 src_channels,
                                              int src_rate,
                                              SDL_AudioFormat dst_format,
                                              Uint8 dst_channels,
                                              int dst_rate);
extern  int  SDL_ConvertAudio(SDL_AudioCVT * cvt);
struct _SDL_AudioStream;
typedef struct _SDL_AudioStream SDL_AudioStream;
extern  SDL_AudioStream *  SDL_NewAudioStream(const SDL_AudioFormat src_format,
                                           const Uint8 src_channels,
                                           const int src_rate,
                                           const SDL_AudioFormat dst_format,
                                           const Uint8 dst_channels,
                                           const int dst_rate);
extern  int  SDL_AudioStreamPut(SDL_AudioStream *stream, const void *buf, int len);
extern  int  SDL_AudioStreamGet(SDL_AudioStream *stream, void *buf, int len);
extern  int  SDL_AudioStreamAvailable(SDL_AudioStream *stream);
extern  int  SDL_AudioStreamFlush(SDL_AudioStream *stream);
extern  void  SDL_AudioStreamClear(SDL_AudioStream *stream);
extern  void  SDL_FreeAudioStream(SDL_AudioStream *stream);
extern  void  SDL_MixAudio(Uint8 * dst, const Uint8 * src,
                                          Uint32 len, int volume);
extern  void  SDL_MixAudioFormat(Uint8 * dst,
                                                const Uint8 * src,
                                                SDL_AudioFormat format,
                                                Uint32 len, int volume);
extern  int  SDL_QueueAudio(SDL_AudioDeviceID dev, const void *data, Uint32 len);
extern  Uint32  SDL_DequeueAudio(SDL_AudioDeviceID dev, void *data, Uint32 len);
extern  Uint32  SDL_GetQueuedAudioSize(SDL_AudioDeviceID dev);
extern  void  SDL_ClearQueuedAudio(SDL_AudioDeviceID dev);
extern  void  SDL_LockAudio(void);
extern  void  SDL_LockAudioDevice(SDL_AudioDeviceID dev);
extern  void  SDL_UnlockAudio(void);
extern  void  SDL_UnlockAudioDevice(SDL_AudioDeviceID dev);
extern  void  SDL_CloseAudio(void);
extern  void  SDL_CloseAudioDevice(SDL_AudioDeviceID dev);
extern  int  SDL_SetClipboardText(const char *text);
extern  char *  SDL_GetClipboardText(void);
extern  SDL_bool  SDL_HasClipboardText(void);
extern  int  SDL_SetPrimarySelectionText(const char *text);
extern  char *  SDL_GetPrimarySelectionText(void);
extern  SDL_bool  SDL_HasPrimarySelectionText(void);
extern  int  SDL_GetCPUCount(void);
extern  int  SDL_GetCPUCacheLineSize(void);
extern  SDL_bool  SDL_HasRDTSC(void);
extern  SDL_bool  SDL_HasAltiVec(void);
extern  SDL_bool  SDL_HasMMX(void);
extern  SDL_bool  SDL_Has3DNow(void);
extern  SDL_bool  SDL_HasSSE(void);
extern  SDL_bool  SDL_HasSSE2(void);
extern  SDL_bool  SDL_HasSSE3(void);
extern  SDL_bool  SDL_HasSSE41(void);
extern  SDL_bool  SDL_HasSSE42(void);
extern  SDL_bool  SDL_HasAVX(void);
extern  SDL_bool  SDL_HasAVX2(void);
extern  SDL_bool  SDL_HasAVX512F(void);
extern  SDL_bool  SDL_HasARMSIMD(void);
extern  SDL_bool  SDL_HasNEON(void);
extern  SDL_bool  SDL_HasLSX(void);
extern  SDL_bool  SDL_HasLASX(void);
extern  int  SDL_GetSystemRAM(void);
extern  size_t  SDL_SIMDGetAlignment(void);
extern  void *  SDL_SIMDAlloc(const size_t len);
extern  void *  SDL_SIMDRealloc(void *mem, const size_t len);
extern  void  SDL_SIMDFree(void *ptr);
typedef enum
{
    SDL_PIXELTYPE_UNKNOWN,
    SDL_PIXELTYPE_INDEX1,
    SDL_PIXELTYPE_INDEX4,
    SDL_PIXELTYPE_INDEX8,
    SDL_PIXELTYPE_PACKED8,
    SDL_PIXELTYPE_PACKED16,
    SDL_PIXELTYPE_PACKED32,
    SDL_PIXELTYPE_ARRAYU8,
    SDL_PIXELTYPE_ARRAYU16,
    SDL_PIXELTYPE_ARRAYU32,
    SDL_PIXELTYPE_ARRAYF16,
    SDL_PIXELTYPE_ARRAYF32
} SDL_PixelType;
typedef enum
{
    SDL_BITMAPORDER_NONE,
    SDL_BITMAPORDER_4321,
    SDL_BITMAPORDER_1234
} SDL_BitmapOrder;
typedef enum
{
    SDL_PACKEDORDER_NONE,
    SDL_PACKEDORDER_XRGB,
    SDL_PACKEDORDER_RGBX,
    SDL_PACKEDORDER_ARGB,
    SDL_PACKEDORDER_RGBA,
    SDL_PACKEDORDER_XBGR,
    SDL_PACKEDORDER_BGRX,
    SDL_PACKEDORDER_ABGR,
    SDL_PACKEDORDER_BGRA
} SDL_PackedOrder;
typedef enum
{
    SDL_ARRAYORDER_NONE,
    SDL_ARRAYORDER_RGB,
    SDL_ARRAYORDER_RGBA,
    SDL_ARRAYORDER_ARGB,
    SDL_ARRAYORDER_BGR,
    SDL_ARRAYORDER_BGRA,
    SDL_ARRAYORDER_ABGR
} SDL_ArrayOrder;
typedef enum
{
    SDL_PACKEDLAYOUT_NONE,
    SDL_PACKEDLAYOUT_332,
    SDL_PACKEDLAYOUT_4444,
    SDL_PACKEDLAYOUT_1555,
    SDL_PACKEDLAYOUT_5551,
    SDL_PACKEDLAYOUT_565,
    SDL_PACKEDLAYOUT_8888,
    SDL_PACKEDLAYOUT_2101010,
    SDL_PACKEDLAYOUT_1010102
} SDL_PackedLayout;
typedef enum
{
    SDL_PIXELFORMAT_UNKNOWN,
    SDL_PIXELFORMAT_INDEX1LSB =
        
    ((1 << 28) | ((SDL_PIXELTYPE_INDEX1) << 24) | ((SDL_BITMAPORDER_4321) << 20) | ((0) << 16) | 
     ((1) << 8) | ((0) << 0)),
    SDL_PIXELFORMAT_INDEX1MSB =
        
    ((1 << 28) | ((SDL_PIXELTYPE_INDEX1) << 24) | ((SDL_BITMAPORDER_1234) << 20) | ((0) << 16) | 
     ((1) << 8) | ((0) << 0)),
    SDL_PIXELFORMAT_INDEX4LSB =
        
    ((1 << 28) | ((SDL_PIXELTYPE_INDEX4) << 24) | ((SDL_BITMAPORDER_4321) << 20) | ((0) << 16) | 
     ((4) << 8) | ((0) << 0)),
    SDL_PIXELFORMAT_INDEX4MSB =
        
    ((1 << 28) | ((SDL_PIXELTYPE_INDEX4) << 24) | ((SDL_BITMAPORDER_1234) << 20) | ((0) << 16) | 
     ((4) << 8) | ((0) << 0)),
    SDL_PIXELFORMAT_INDEX8 =
        
    ((1 << 28) | ((SDL_PIXELTYPE_INDEX8) << 24) | ((0) << 20) | ((0) << 16) | 
     ((8) << 8) | ((1) << 0)),
    SDL_PIXELFORMAT_RGB332 =
        
    ((1 << 28) | ((SDL_PIXELTYPE_PACKED8) << 24) | ((SDL_PACKEDORDER_XRGB) << 20) | ((SDL_PACKEDLAYOUT_332) << 16) | 
     ((8) << 8) | ((1) << 0)),
    SDL_PIXELFORMAT_XRGB4444 =
        
    ((1 << 28) | ((SDL_PIXELTYPE_PACKED16) << 24) | ((SDL_PACKEDORDER_XRGB) << 20) | ((SDL_PACKEDLAYOUT_4444) << 16) | 
     ((12) << 8) | ((2) << 0)),
    SDL_PIXELFORMAT_RGB444 = SDL_PIXELFORMAT_XRGB4444,
    SDL_PIXELFORMAT_XBGR4444 =
        
    ((1 << 28) | ((SDL_PIXELTYPE_PACKED16) << 24) | ((SDL_PACKEDORDER_XBGR) << 20) | ((SDL_PACKEDLAYOUT_4444) << 16) | 
     ((12) << 8) | ((2) << 0)),
    SDL_PIXELFORMAT_BGR444 = SDL_PIXELFORMAT_XBGR4444,
    SDL_PIXELFORMAT_XRGB1555 =
        
    ((1 << 28) | ((SDL_PIXELTYPE_PACKED16) << 24) | ((SDL_PACKEDORDER_XRGB) << 20) | ((SDL_PACKEDLAYOUT_1555) << 16) | 
     ((15) << 8) | ((2) << 0)),
    SDL_PIXELFORMAT_RGB555 = SDL_PIXELFORMAT_XRGB1555,
    SDL_PIXELFORMAT_XBGR1555 =
        
    ((1 << 28) | ((SDL_PIXELTYPE_PACKED16) << 24) | ((SDL_PACKEDORDER_XBGR) << 20) | ((SDL_PACKEDLAYOUT_1555) << 16) | 
     ((15) << 8) | ((2) << 0)),
    SDL_PIXELFORMAT_BGR555 = SDL_PIXELFORMAT_XBGR1555,
    SDL_PIXELFORMAT_ARGB4444 =
        
    ((1 << 28) | ((SDL_PIXELTYPE_PACKED16) << 24) | ((SDL_PACKEDORDER_ARGB) << 20) | ((SDL_PACKEDLAYOUT_4444) << 16) | 
     ((16) << 8) | ((2) << 0)),
    SDL_PIXELFORMAT_RGBA4444 =
        
    ((1 << 28) | ((SDL_PIXELTYPE_PACKED16) << 24) | ((SDL_PACKEDORDER_RGBA) << 20) | ((SDL_PACKEDLAYOUT_4444) << 16) | 
     ((16) << 8) | ((2) << 0)),
    SDL_PIXELFORMAT_ABGR4444 =
        
    ((1 << 28) | ((SDL_PIXELTYPE_PACKED16) << 24) | ((SDL_PACKEDORDER_ABGR) << 20) | ((SDL_PACKEDLAYOUT_4444) << 16) | 
     ((16) << 8) | ((2) << 0)),
    SDL_PIXELFORMAT_BGRA4444 =
        
    ((1 << 28) | ((SDL_PIXELTYPE_PACKED16) << 24) | ((SDL_PACKEDORDER_BGRA) << 20) | ((SDL_PACKEDLAYOUT_4444) << 16) | 
     ((16) << 8) | ((2) << 0)),
    SDL_PIXELFORMAT_ARGB1555 =
        
    ((1 << 28) | ((SDL_PIXELTYPE_PACKED16) << 24) | ((SDL_PACKEDORDER_ARGB) << 20) | ((SDL_PACKEDLAYOUT_1555) << 16) | 
     ((16) << 8) | ((2) << 0)),
    SDL_PIXELFORMAT_RGBA5551 =
        
    ((1 << 28) | ((SDL_PIXELTYPE_PACKED16) << 24) | ((SDL_PACKEDORDER_RGBA) << 20) | ((SDL_PACKEDLAYOUT_5551) << 16) | 
     ((16) << 8) | ((2) << 0)),
    SDL_PIXELFORMAT_ABGR1555 =
        
    ((1 << 28) | ((SDL_PIXELTYPE_PACKED16) << 24) | ((SDL_PACKEDORDER_ABGR) << 20) | ((SDL_PACKEDLAYOUT_1555) << 16) | 
     ((16) << 8) | ((2) << 0)),
    SDL_PIXELFORMAT_BGRA5551 =
        
    ((1 << 28) | ((SDL_PIXELTYPE_PACKED16) << 24) | ((SDL_PACKEDORDER_BGRA) << 20) | ((SDL_PACKEDLAYOUT_5551) << 16) | 
     ((16) << 8) | ((2) << 0)),
    SDL_PIXELFORMAT_RGB565 =
        
    ((1 << 28) | ((SDL_PIXELTYPE_PACKED16) << 24) | ((SDL_PACKEDORDER_XRGB) << 20) | ((SDL_PACKEDLAYOUT_565) << 16) | 
     ((16) << 8) | ((2) << 0)),
    SDL_PIXELFORMAT_BGR565 =
        
    ((1 << 28) | ((SDL_PIXELTYPE_PACKED16) << 24) | ((SDL_PACKEDORDER_XBGR) << 20) | ((SDL_PACKEDLAYOUT_565) << 16) | 
     ((16) << 8) | ((2) << 0)),
    SDL_PIXELFORMAT_RGB24 =
        
    ((1 << 28) | ((SDL_PIXELTYPE_ARRAYU8) << 24) | ((SDL_ARRAYORDER_RGB) << 20) | ((0) << 16) | 
     ((24) << 8) | ((3) << 0)),
    SDL_PIXELFORMAT_BGR24 =
        
    ((1 << 28) | ((SDL_PIXELTYPE_ARRAYU8) << 24) | ((SDL_ARRAYORDER_BGR) << 20) | ((0) << 16) | 
     ((24) << 8) | ((3) << 0)),
    SDL_PIXELFORMAT_XRGB8888 =
        
    ((1 << 28) | ((SDL_PIXELTYPE_PACKED32) << 24) | ((SDL_PACKEDORDER_XRGB) << 20) | ((SDL_PACKEDLAYOUT_8888) << 16) | 
     ((24) << 8) | ((4) << 0)),
    SDL_PIXELFORMAT_RGB888 = SDL_PIXELFORMAT_XRGB8888,
    SDL_PIXELFORMAT_RGBX8888 =
        
    ((1 << 28) | ((SDL_PIXELTYPE_PACKED32) << 24) | ((SDL_PACKEDORDER_RGBX) << 20) | ((SDL_PACKEDLAYOUT_8888) << 16) | 
     ((24) << 8) | ((4) << 0)),
    SDL_PIXELFORMAT_XBGR8888 =
        
    ((1 << 28) | ((SDL_PIXELTYPE_PACKED32) << 24) | ((SDL_PACKEDORDER_XBGR) << 20) | ((SDL_PACKEDLAYOUT_8888) << 16) | 
     ((24) << 8) | ((4) << 0)),
    SDL_PIXELFORMAT_BGR888 = SDL_PIXELFORMAT_XBGR8888,
    SDL_PIXELFORMAT_BGRX8888 =
        
    ((1 << 28) | ((SDL_PIXELTYPE_PACKED32) << 24) | ((SDL_PACKEDORDER_BGRX) << 20) | ((SDL_PACKEDLAYOUT_8888) << 16) | 
     ((24) << 8) | ((4) << 0)),
    SDL_PIXELFORMAT_ARGB8888 =
        
    ((1 << 28) | ((SDL_PIXELTYPE_PACKED32) << 24) | ((SDL_PACKEDORDER_ARGB) << 20) | ((SDL_PACKEDLAYOUT_8888) << 16) | 
     ((32) << 8) | ((4) << 0)),
    SDL_PIXELFORMAT_RGBA8888 =
        
    ((1 << 28) | ((SDL_PIXELTYPE_PACKED32) << 24) | ((SDL_PACKEDORDER_RGBA) << 20) | ((SDL_PACKEDLAYOUT_8888) << 16) | 
     ((32) << 8) | ((4) << 0)),
    SDL_PIXELFORMAT_ABGR8888 =
        
    ((1 << 28) | ((SDL_PIXELTYPE_PACKED32) << 24) | ((SDL_PACKEDORDER_ABGR) << 20) | ((SDL_PACKEDLAYOUT_8888) << 16) | 
     ((32) << 8) | ((4) << 0)),
    SDL_PIXELFORMAT_BGRA8888 =
        
    ((1 << 28) | ((SDL_PIXELTYPE_PACKED32) << 24) | ((SDL_PACKEDORDER_BGRA) << 20) | ((SDL_PACKEDLAYOUT_8888) << 16) | 
     ((32) << 8) | ((4) << 0)),
    SDL_PIXELFORMAT_ARGB2101010 =
        
    ((1 << 28) | ((SDL_PIXELTYPE_PACKED32) << 24) | ((SDL_PACKEDORDER_ARGB) << 20) | ((SDL_PACKEDLAYOUT_2101010) << 16) | 
     ((32) << 8) | ((4) << 0)),
    SDL_PIXELFORMAT_RGBA32 = SDL_PIXELFORMAT_ABGR8888,
    SDL_PIXELFORMAT_ARGB32 = SDL_PIXELFORMAT_BGRA8888,
    SDL_PIXELFORMAT_BGRA32 = SDL_PIXELFORMAT_ARGB8888,
    SDL_PIXELFORMAT_ABGR32 = SDL_PIXELFORMAT_RGBA8888,
    SDL_PIXELFORMAT_YV12 =
        
    ((((Uint32)(((Uint8)(('Y'))))) << 0) | 
     (((Uint32)(((Uint8)(('V'))))) << 8) | 
     (((Uint32)(((Uint8)(('1'))))) << 16) | 
     (((Uint32)(((Uint8)(('2'))))) << 24)),
    SDL_PIXELFORMAT_IYUV =
        
    ((((Uint32)(((Uint8)(('I'))))) << 0) | 
     (((Uint32)(((Uint8)(('Y'))))) << 8) | 
     (((Uint32)(((Uint8)(('U'))))) << 16) | 
     (((Uint32)(((Uint8)(('V'))))) << 24)),
    SDL_PIXELFORMAT_YUY2 =
        
    ((((Uint32)(((Uint8)(('Y'))))) << 0) | 
     (((Uint32)(((Uint8)(('U'))))) << 8) | 
     (((Uint32)(((Uint8)(('Y'))))) << 16) | 
     (((Uint32)(((Uint8)(('2'))))) << 24)),
    SDL_PIXELFORMAT_UYVY =
        
    ((((Uint32)(((Uint8)(('U'))))) << 0) | 
     (((Uint32)(((Uint8)(('Y'))))) << 8) | 
     (((Uint32)(((Uint8)(('V'))))) << 16) | 
     (((Uint32)(((Uint8)(('Y'))))) << 24)),
    SDL_PIXELFORMAT_YVYU =
        
    ((((Uint32)(((Uint8)(('Y'))))) << 0) | 
     (((Uint32)(((Uint8)(('V'))))) << 8) | 
     (((Uint32)(((Uint8)(('Y'))))) << 16) | 
     (((Uint32)(((Uint8)(('U'))))) << 24)),
    SDL_PIXELFORMAT_NV12 =
        
    ((((Uint32)(((Uint8)(('N'))))) << 0) | 
     (((Uint32)(((Uint8)(('V'))))) << 8) | 
     (((Uint32)(((Uint8)(('1'))))) << 16) | 
     (((Uint32)(((Uint8)(('2'))))) << 24)),
    SDL_PIXELFORMAT_NV21 =
        
    ((((Uint32)(((Uint8)(('N'))))) << 0) | 
     (((Uint32)(((Uint8)(('V'))))) << 8) | 
     (((Uint32)(((Uint8)(('2'))))) << 16) | 
     (((Uint32)(((Uint8)(('1'))))) << 24)),
    SDL_PIXELFORMAT_EXTERNAL_OES =
        
    ((((Uint32)(((Uint8)(('O'))))) << 0) | 
     (((Uint32)(((Uint8)(('E'))))) << 8) | 
     (((Uint32)(((Uint8)(('S'))))) << 16) | 
     (((Uint32)(((Uint8)((' '))))) << 24))
} SDL_PixelFormatEnum;
typedef struct SDL_Color
{
    Uint8 r;
    Uint8 g;
    Uint8 b;
    Uint8 a;
} SDL_Color;
typedef struct SDL_Palette
{
    int ncolors;
    SDL_Color *colors;
    Uint32 version;
    int refcount;
} SDL_Palette;
typedef struct SDL_PixelFormat
{
    Uint32 format;
    SDL_Palette *palette;
    Uint8 BitsPerPixel;
    Uint8 BytesPerPixel;
    Uint8 padding[2];
    Uint32 Rmask;
    Uint32 Gmask;
    Uint32 Bmask;
    Uint32 Amask;
    Uint8 Rloss;
    Uint8 Gloss;
    Uint8 Bloss;
    Uint8 Aloss;
    Uint8 Rshift;
    Uint8 Gshift;
    Uint8 Bshift;
    Uint8 Ashift;
    int refcount;
    struct SDL_PixelFormat *next;
} SDL_PixelFormat;
extern  const char*  SDL_GetPixelFormatName(Uint32 format);
extern  SDL_bool  SDL_PixelFormatEnumToMasks(Uint32 format,
                                                            int *bpp,
                                                            Uint32 * Rmask,
                                                            Uint32 * Gmask,
                                                            Uint32 * Bmask,
                                                            Uint32 * Amask);
extern  Uint32  SDL_MasksToPixelFormatEnum(int bpp,
                                                          Uint32 Rmask,
                                                          Uint32 Gmask,
                                                          Uint32 Bmask,
                                                          Uint32 Amask);
extern  SDL_PixelFormat *  SDL_AllocFormat(Uint32 pixel_format);
extern  void  SDL_FreeFormat(SDL_PixelFormat *format);
extern  SDL_Palette * SDL_AllocPalette(int ncolors);
extern  int  SDL_SetPixelFormatPalette(SDL_PixelFormat * format,
                                                      SDL_Palette *palette);
extern  int  SDL_SetPaletteColors(SDL_Palette * palette,
                                                 const SDL_Color * colors,
                                                 int firstcolor, int ncolors);
extern  void  SDL_FreePalette(SDL_Palette * palette);
extern  Uint32  SDL_MapRGB(const SDL_PixelFormat * format,
                                          Uint8 r, Uint8 g, Uint8 b);
extern  Uint32  SDL_MapRGBA(const SDL_PixelFormat * format,
                                           Uint8 r, Uint8 g, Uint8 b,
                                           Uint8 a);
extern  void  SDL_GetRGB(Uint32 pixel,
                                        const SDL_PixelFormat * format,
                                        Uint8 * r, Uint8 * g, Uint8 * b);
extern  void  SDL_GetRGBA(Uint32 pixel,
                                         const SDL_PixelFormat * format,
                                         Uint8 * r, Uint8 * g, Uint8 * b,
                                         Uint8 * a);
extern  void  SDL_CalculateGammaRamp(float gamma, Uint16 * ramp);
typedef struct SDL_Point
{
    int x;
    int y;
} SDL_Point;
typedef struct SDL_FPoint
{
    float x;
    float y;
} SDL_FPoint;
typedef struct SDL_Rect
{
    int x, y;
    int w, h;
} SDL_Rect;
typedef struct SDL_FRect
{
    float x;
    float y;
    float w;
    float h;
} SDL_FRect;
static inline SDL_bool SDL_PointInRect(const SDL_Point *p, const SDL_Rect *r)
{
    return ( (p->x >= r->x) && (p->x < (r->x + r->w)) &&
             (p->y >= r->y) && (p->y < (r->y + r->h)) ) ? SDL_TRUE : SDL_FALSE;
}
static inline SDL_bool SDL_RectEmpty(const SDL_Rect *r)
{
    return ((!r) || (r->w <= 0) || (r->h <= 0)) ? SDL_TRUE : SDL_FALSE;
}
static inline SDL_bool SDL_RectEquals(const SDL_Rect *a, const SDL_Rect *b)
{
    return (a && b && (a->x == b->x) && (a->y == b->y) &&
            (a->w == b->w) && (a->h == b->h)) ? SDL_TRUE : SDL_FALSE;
}
extern  SDL_bool  SDL_HasIntersection(const SDL_Rect * A,
                                                     const SDL_Rect * B);
extern  SDL_bool  SDL_IntersectRect(const SDL_Rect * A,
                                                   const SDL_Rect * B,
                                                   SDL_Rect * result);
extern  void  SDL_UnionRect(const SDL_Rect * A,
                                           const SDL_Rect * B,
                                           SDL_Rect * result);
extern  SDL_bool  SDL_EnclosePoints(const SDL_Point * points,
                                                   int count,
                                                   const SDL_Rect * clip,
                                                   SDL_Rect * result);
extern  SDL_bool  SDL_IntersectRectAndLine(const SDL_Rect *
                                                          rect, int *X1,
                                                          int *Y1, int *X2,
                                                          int *Y2);
static inline SDL_bool SDL_PointInFRect(const SDL_FPoint *p, const SDL_FRect *r)
{
    return ( (p->x >= r->x) && (p->x < (r->x + r->w)) &&
             (p->y >= r->y) && (p->y < (r->y + r->h)) ) ? SDL_TRUE : SDL_FALSE;
}
static inline SDL_bool SDL_FRectEmpty(const SDL_FRect *r)
{
    return ((!r) || (r->w <= 0.0f) || (r->h <= 0.0f)) ? SDL_TRUE : SDL_FALSE;
}
static inline SDL_bool SDL_FRectEqualsEpsilon(const SDL_FRect *a, const SDL_FRect *b, const float epsilon)
{
    return (a && b && ((a == b) ||
            ((SDL_fabsf(a->x - b->x) <= epsilon) &&
            (SDL_fabsf(a->y - b->y) <= epsilon) &&
            (SDL_fabsf(a->w - b->w) <= epsilon) &&
            (SDL_fabsf(a->h - b->h) <= epsilon))))
            ? SDL_TRUE : SDL_FALSE;
}
static inline SDL_bool SDL_FRectEquals(const SDL_FRect *a, const SDL_FRect *b)
{
    return SDL_FRectEqualsEpsilon(a, b, 1.1920928955078125e-07F);
}
extern  SDL_bool  SDL_HasIntersectionF(const SDL_FRect * A,
                                                      const SDL_FRect * B);
extern  SDL_bool  SDL_IntersectFRect(const SDL_FRect * A,
                                                    const SDL_FRect * B,
                                                    SDL_FRect * result);
extern  void  SDL_UnionFRect(const SDL_FRect * A,
                                            const SDL_FRect * B,
                                            SDL_FRect * result);
extern  SDL_bool  SDL_EncloseFPoints(const SDL_FPoint * points,
                                                    int count,
                                                    const SDL_FRect * clip,
                                                    SDL_FRect * result);
extern  SDL_bool  SDL_IntersectFRectAndLine(const SDL_FRect *
                                                           rect, float *X1,
                                                           float *Y1, float *X2,
                                                           float *Y2);
typedef enum
{
    SDL_BLENDMODE_NONE = 0x00000000,
    SDL_BLENDMODE_BLEND = 0x00000001,
    SDL_BLENDMODE_ADD = 0x00000002,
    SDL_BLENDMODE_MOD = 0x00000004,
    SDL_BLENDMODE_MUL = 0x00000008,
    SDL_BLENDMODE_INVALID = 0x7FFFFFFF
} SDL_BlendMode;
typedef enum
{
    SDL_BLENDOPERATION_ADD              = 0x1,
    SDL_BLENDOPERATION_SUBTRACT         = 0x2,
    SDL_BLENDOPERATION_REV_SUBTRACT     = 0x3,
    SDL_BLENDOPERATION_MINIMUM          = 0x4,
    SDL_BLENDOPERATION_MAXIMUM          = 0x5
} SDL_BlendOperation;
typedef enum
{
    SDL_BLENDFACTOR_ZERO                = 0x1,
    SDL_BLENDFACTOR_ONE                 = 0x2,
    SDL_BLENDFACTOR_SRC_COLOR           = 0x3,
    SDL_BLENDFACTOR_ONE_MINUS_SRC_COLOR = 0x4,
    SDL_BLENDFACTOR_SRC_ALPHA           = 0x5,
    SDL_BLENDFACTOR_ONE_MINUS_SRC_ALPHA = 0x6,
    SDL_BLENDFACTOR_DST_COLOR           = 0x7,
    SDL_BLENDFACTOR_ONE_MINUS_DST_COLOR = 0x8,
    SDL_BLENDFACTOR_DST_ALPHA           = 0x9,
    SDL_BLENDFACTOR_ONE_MINUS_DST_ALPHA = 0xA
} SDL_BlendFactor;
extern  SDL_BlendMode  SDL_ComposeCustomBlendMode(SDL_BlendFactor srcColorFactor,
                                                                 SDL_BlendFactor dstColorFactor,
                                                                 SDL_BlendOperation colorOperation,
                                                                 SDL_BlendFactor srcAlphaFactor,
                                                                 SDL_BlendFactor dstAlphaFactor,
                                                                 SDL_BlendOperation alphaOperation);
typedef struct SDL_BlitMap SDL_BlitMap;
typedef struct SDL_Surface
{
    Uint32 flags;
    SDL_PixelFormat *format;
    int w, h;
    int pitch;
    void *pixels;
    void *userdata;
    int locked;
    void *list_blitmap;
    SDL_Rect clip_rect;
    SDL_BlitMap *map;
    int refcount;
} SDL_Surface;
typedef int ( *SDL_blit) (struct SDL_Surface * src, SDL_Rect * srcrect,
                                 struct SDL_Surface * dst, SDL_Rect * dstrect);
typedef enum
{
    SDL_YUV_CONVERSION_JPEG,
    SDL_YUV_CONVERSION_BT601,
    SDL_YUV_CONVERSION_BT709,
    SDL_YUV_CONVERSION_AUTOMATIC
} SDL_YUV_CONVERSION_MODE;
extern  SDL_Surface * SDL_CreateRGBSurface
    (Uint32 flags, int width, int height, int depth,
     Uint32 Rmask, Uint32 Gmask, Uint32 Bmask, Uint32 Amask);
extern  SDL_Surface * SDL_CreateRGBSurfaceWithFormat
    (Uint32 flags, int width, int height, int depth, Uint32 format);
extern  SDL_Surface * SDL_CreateRGBSurfaceFrom(void *pixels,
                                                              int width,
                                                              int height,
                                                              int depth,
                                                              int pitch,
                                                              Uint32 Rmask,
                                                              Uint32 Gmask,
                                                              Uint32 Bmask,
                                                              Uint32 Amask);
extern  SDL_Surface * SDL_CreateRGBSurfaceWithFormatFrom
    (void *pixels, int width, int height, int depth, int pitch, Uint32 format);
extern  void  SDL_FreeSurface(SDL_Surface * surface);
extern  int  SDL_SetSurfacePalette(SDL_Surface * surface,
                                                  SDL_Palette * palette);
extern  int  SDL_LockSurface(SDL_Surface * surface);
extern  void  SDL_UnlockSurface(SDL_Surface * surface);
extern  SDL_Surface * SDL_LoadBMP_RW(SDL_RWops * src,
                                                    int freesrc);
extern  int  SDL_SaveBMP_RW
    (SDL_Surface * surface, SDL_RWops * dst, int freedst);
extern  int  SDL_SetSurfaceRLE(SDL_Surface * surface,
                                              int flag);
extern  SDL_bool  SDL_HasSurfaceRLE(SDL_Surface * surface);
extern  int  SDL_SetColorKey(SDL_Surface * surface,
                                            int flag, Uint32 key);
extern  SDL_bool  SDL_HasColorKey(SDL_Surface * surface);
extern  int  SDL_GetColorKey(SDL_Surface * surface,
                                            Uint32 * key);
extern  int  SDL_SetSurfaceColorMod(SDL_Surface * surface,
                                                   Uint8 r, Uint8 g, Uint8 b);
extern  int  SDL_GetSurfaceColorMod(SDL_Surface * surface,
                                                   Uint8 * r, Uint8 * g,
                                                   Uint8 * b);
extern  int  SDL_SetSurfaceAlphaMod(SDL_Surface * surface,
                                                   Uint8 alpha);
extern  int  SDL_GetSurfaceAlphaMod(SDL_Surface * surface,
                                                   Uint8 * alpha);
extern  int  SDL_SetSurfaceBlendMode(SDL_Surface * surface,
                                                    SDL_BlendMode blendMode);
extern  int  SDL_GetSurfaceBlendMode(SDL_Surface * surface,
                                                    SDL_BlendMode *blendMode);
extern  SDL_bool  SDL_SetClipRect(SDL_Surface * surface,
                                                 const SDL_Rect * rect);
extern  void  SDL_GetClipRect(SDL_Surface * surface,
                                             SDL_Rect * rect);
extern  SDL_Surface * SDL_DuplicateSurface(SDL_Surface * surface);
extern  SDL_Surface * SDL_ConvertSurface
    (SDL_Surface * src, const SDL_PixelFormat * fmt, Uint32 flags);
extern  SDL_Surface * SDL_ConvertSurfaceFormat
    (SDL_Surface * src, Uint32 pixel_format, Uint32 flags);
extern  int  SDL_ConvertPixels(int width, int height,
                                              Uint32 src_format,
                                              const void * src, int src_pitch,
                                              Uint32 dst_format,
                                              void * dst, int dst_pitch);
extern  int  SDL_PremultiplyAlpha(int width, int height,
                                                 Uint32 src_format,
                                                 const void * src, int src_pitch,
                                                 Uint32 dst_format,
                                                 void * dst, int dst_pitch);
extern  int  SDL_FillRect
    (SDL_Surface * dst, const SDL_Rect * rect, Uint32 color);
extern  int  SDL_FillRects
    (SDL_Surface * dst, const SDL_Rect * rects, int count, Uint32 color);
extern  int  SDL_UpperBlit
    (SDL_Surface * src, const SDL_Rect * srcrect,
     SDL_Surface * dst, SDL_Rect * dstrect);
extern  int  SDL_LowerBlit
    (SDL_Surface * src, SDL_Rect * srcrect,
     SDL_Surface * dst, SDL_Rect * dstrect);
extern  int  SDL_SoftStretch(SDL_Surface * src,
                                            const SDL_Rect * srcrect,
                                            SDL_Surface * dst,
                                            const SDL_Rect * dstrect);
extern  int  SDL_SoftStretchLinear(SDL_Surface * src,
                                            const SDL_Rect * srcrect,
                                            SDL_Surface * dst,
                                            const SDL_Rect * dstrect);
extern  int  SDL_UpperBlitScaled
    (SDL_Surface * src, const SDL_Rect * srcrect,
    SDL_Surface * dst, SDL_Rect * dstrect);
extern  int  SDL_LowerBlitScaled
    (SDL_Surface * src, SDL_Rect * srcrect,
    SDL_Surface * dst, SDL_Rect * dstrect);
extern  void  SDL_SetYUVConversionMode(SDL_YUV_CONVERSION_MODE mode);
extern  SDL_YUV_CONVERSION_MODE  SDL_GetYUVConversionMode(void);
extern  SDL_YUV_CONVERSION_MODE  SDL_GetYUVConversionModeForResolution(int width, int height);
typedef struct
{
    Uint32 format;
    int w;
    int h;
    int refresh_rate;
    void *driverdata;
} SDL_DisplayMode;
typedef struct SDL_Window SDL_Window;
typedef enum
{
    SDL_WINDOW_FULLSCREEN = 0x00000001,
    SDL_WINDOW_OPENGL = 0x00000002,
    SDL_WINDOW_SHOWN = 0x00000004,
    SDL_WINDOW_HIDDEN = 0x00000008,
    SDL_WINDOW_BORDERLESS = 0x00000010,
    SDL_WINDOW_RESIZABLE = 0x00000020,
    SDL_WINDOW_MINIMIZED = 0x00000040,
    SDL_WINDOW_MAXIMIZED = 0x00000080,
    SDL_WINDOW_MOUSE_GRABBED = 0x00000100,
    SDL_WINDOW_INPUT_FOCUS = 0x00000200,
    SDL_WINDOW_MOUSE_FOCUS = 0x00000400,
    SDL_WINDOW_FULLSCREEN_DESKTOP = ( SDL_WINDOW_FULLSCREEN | 0x00001000 ),
    SDL_WINDOW_FOREIGN = 0x00000800,
    SDL_WINDOW_ALLOW_HIGHDPI = 0x00002000,
    SDL_WINDOW_MOUSE_CAPTURE    = 0x00004000,
    SDL_WINDOW_ALWAYS_ON_TOP    = 0x00008000,
    SDL_WINDOW_SKIP_TASKBAR     = 0x00010000,
    SDL_WINDOW_UTILITY          = 0x00020000,
    SDL_WINDOW_TOOLTIP          = 0x00040000,
    SDL_WINDOW_POPUP_MENU       = 0x00080000,
    SDL_WINDOW_KEYBOARD_GRABBED = 0x00100000,
    SDL_WINDOW_VULKAN           = 0x10000000,
    SDL_WINDOW_METAL            = 0x20000000,
    SDL_WINDOW_INPUT_GRABBED = SDL_WINDOW_MOUSE_GRABBED
} SDL_WindowFlags;
typedef enum
{
    SDL_WINDOWEVENT_NONE,
    SDL_WINDOWEVENT_SHOWN,
    SDL_WINDOWEVENT_HIDDEN,
    SDL_WINDOWEVENT_EXPOSED,
    SDL_WINDOWEVENT_MOVED,
    SDL_WINDOWEVENT_RESIZED,
    SDL_WINDOWEVENT_SIZE_CHANGED,
    SDL_WINDOWEVENT_MINIMIZED,
    SDL_WINDOWEVENT_MAXIMIZED,
    SDL_WINDOWEVENT_RESTORED,
    SDL_WINDOWEVENT_ENTER,
    SDL_WINDOWEVENT_LEAVE,
    SDL_WINDOWEVENT_FOCUS_GAINED,
    SDL_WINDOWEVENT_FOCUS_LOST,
    SDL_WINDOWEVENT_CLOSE,
    SDL_WINDOWEVENT_TAKE_FOCUS,
    SDL_WINDOWEVENT_HIT_TEST,
    SDL_WINDOWEVENT_ICCPROF_CHANGED,
    SDL_WINDOWEVENT_DISPLAY_CHANGED
} SDL_WindowEventID;
typedef enum
{
    SDL_DISPLAYEVENT_NONE,
    SDL_DISPLAYEVENT_ORIENTATION,
    SDL_DISPLAYEVENT_CONNECTED,
    SDL_DISPLAYEVENT_DISCONNECTED,
    SDL_DISPLAYEVENT_MOVED
} SDL_DisplayEventID;
typedef enum
{
    SDL_ORIENTATION_UNKNOWN,
    SDL_ORIENTATION_LANDSCAPE,
    SDL_ORIENTATION_LANDSCAPE_FLIPPED,
    SDL_ORIENTATION_PORTRAIT,
    SDL_ORIENTATION_PORTRAIT_FLIPPED
} SDL_DisplayOrientation;
typedef enum
{
    SDL_FLASH_CANCEL,
    SDL_FLASH_BRIEFLY,
    SDL_FLASH_UNTIL_FOCUSED
} SDL_FlashOperation;
typedef void *SDL_GLContext;
typedef enum
{
    SDL_GL_RED_SIZE,
    SDL_GL_GREEN_SIZE,
    SDL_GL_BLUE_SIZE,
    SDL_GL_ALPHA_SIZE,
    SDL_GL_BUFFER_SIZE,
    SDL_GL_DOUBLEBUFFER,
    SDL_GL_DEPTH_SIZE,
    SDL_GL_STENCIL_SIZE,
    SDL_GL_ACCUM_RED_SIZE,
    SDL_GL_ACCUM_GREEN_SIZE,
    SDL_GL_ACCUM_BLUE_SIZE,
    SDL_GL_ACCUM_ALPHA_SIZE,
    SDL_GL_STEREO,
    SDL_GL_MULTISAMPLEBUFFERS,
    SDL_GL_MULTISAMPLESAMPLES,
    SDL_GL_ACCELERATED_VISUAL,
    SDL_GL_RETAINED_BACKING,
    SDL_GL_CONTEXT_MAJOR_VERSION,
    SDL_GL_CONTEXT_MINOR_VERSION,
    SDL_GL_CONTEXT_EGL,
    SDL_GL_CONTEXT_FLAGS,
    SDL_GL_CONTEXT_PROFILE_MASK,
    SDL_GL_SHARE_WITH_CURRENT_CONTEXT,
    SDL_GL_FRAMEBUFFER_SRGB_CAPABLE,
    SDL_GL_CONTEXT_RELEASE_BEHAVIOR,
    SDL_GL_CONTEXT_RESET_NOTIFICATION,
    SDL_GL_CONTEXT_NO_ERROR,
    SDL_GL_FLOATBUFFERS
} SDL_GLattr;
typedef enum
{
    SDL_GL_CONTEXT_PROFILE_CORE           = 0x0001,
    SDL_GL_CONTEXT_PROFILE_COMPATIBILITY  = 0x0002,
    SDL_GL_CONTEXT_PROFILE_ES             = 0x0004
} SDL_GLprofile;
typedef enum
{
    SDL_GL_CONTEXT_DEBUG_FLAG              = 0x0001,
    SDL_GL_CONTEXT_FORWARD_COMPATIBLE_FLAG = 0x0002,
    SDL_GL_CONTEXT_ROBUST_ACCESS_FLAG      = 0x0004,
    SDL_GL_CONTEXT_RESET_ISOLATION_FLAG    = 0x0008
} SDL_GLcontextFlag;
typedef enum
{
    SDL_GL_CONTEXT_RELEASE_BEHAVIOR_NONE   = 0x0000,
    SDL_GL_CONTEXT_RELEASE_BEHAVIOR_FLUSH  = 0x0001
} SDL_GLcontextReleaseFlag;
typedef enum
{
    SDL_GL_CONTEXT_RESET_NO_NOTIFICATION = 0x0000,
    SDL_GL_CONTEXT_RESET_LOSE_CONTEXT    = 0x0001
} SDL_GLContextResetNotification;
extern  int  SDL_GetNumVideoDrivers(void);
extern  const char * SDL_GetVideoDriver(int index);
extern  int  SDL_VideoInit(const char *driver_name);
extern  void  SDL_VideoQuit(void);
extern  const char * SDL_GetCurrentVideoDriver(void);
extern  int  SDL_GetNumVideoDisplays(void);
extern  const char *  SDL_GetDisplayName(int displayIndex);
extern  int  SDL_GetDisplayBounds(int displayIndex, SDL_Rect * rect);
extern  int  SDL_GetDisplayUsableBounds(int displayIndex, SDL_Rect * rect);
extern  int  SDL_GetDisplayDPI(int displayIndex, float * ddpi, float * hdpi, float * vdpi);
extern  SDL_DisplayOrientation  SDL_GetDisplayOrientation(int displayIndex);
extern  int  SDL_GetNumDisplayModes(int displayIndex);
extern  int  SDL_GetDisplayMode(int displayIndex, int modeIndex,
                                               SDL_DisplayMode * mode);
extern  int  SDL_GetDesktopDisplayMode(int displayIndex, SDL_DisplayMode * mode);
extern  int  SDL_GetCurrentDisplayMode(int displayIndex, SDL_DisplayMode * mode);
extern  SDL_DisplayMode *  SDL_GetClosestDisplayMode(int displayIndex, const SDL_DisplayMode * mode, SDL_DisplayMode * closest);
extern  int  SDL_GetPointDisplayIndex(const SDL_Point * point);
extern  int  SDL_GetRectDisplayIndex(const SDL_Rect * rect);
extern  int  SDL_GetWindowDisplayIndex(SDL_Window * window);
extern  int  SDL_SetWindowDisplayMode(SDL_Window * window,
                                                     const SDL_DisplayMode * mode);
extern  int  SDL_GetWindowDisplayMode(SDL_Window * window,
                                                     SDL_DisplayMode * mode);
extern  void*  SDL_GetWindowICCProfile(SDL_Window * window, size_t* size);
extern  Uint32  SDL_GetWindowPixelFormat(SDL_Window * window);
extern  SDL_Window *  SDL_CreateWindow(const char *title,
                                                      int x, int y, int w,
                                                      int h, Uint32 flags);
extern  SDL_Window *  SDL_CreateWindowFrom(const void *data);
extern  Uint32  SDL_GetWindowID(SDL_Window * window);
extern  SDL_Window *  SDL_GetWindowFromID(Uint32 id);
extern  Uint32  SDL_GetWindowFlags(SDL_Window * window);
extern  void  SDL_SetWindowTitle(SDL_Window * window,
                                                const char *title);
extern  const char * SDL_GetWindowTitle(SDL_Window * window);
extern  void  SDL_SetWindowIcon(SDL_Window * window,
                                               SDL_Surface * icon);
extern  void*  SDL_SetWindowData(SDL_Window * window,
                                                const char *name,
                                                void *userdata);
extern  void * SDL_GetWindowData(SDL_Window * window,
                                                const char *name);
extern  void  SDL_SetWindowPosition(SDL_Window * window,
                                                   int x, int y);
extern  void  SDL_GetWindowPosition(SDL_Window * window,
                                                   int *x, int *y);
extern  void  SDL_SetWindowSize(SDL_Window * window, int w,
                                               int h);
extern  void  SDL_GetWindowSize(SDL_Window * window, int *w,
                                               int *h);
extern  int  SDL_GetWindowBordersSize(SDL_Window * window,
                                                     int *top, int *left,
                                                     int *bottom, int *right);
extern  void  SDL_GetWindowSizeInPixels(SDL_Window * window,
                                                       int *w, int *h);
extern  void  SDL_SetWindowMinimumSize(SDL_Window * window,
                                                      int min_w, int min_h);
extern  void  SDL_GetWindowMinimumSize(SDL_Window * window,
                                                      int *w, int *h);
extern  void  SDL_SetWindowMaximumSize(SDL_Window * window,
                                                      int max_w, int max_h);
extern  void  SDL_GetWindowMaximumSize(SDL_Window * window,
                                                      int *w, int *h);
extern  void  SDL_SetWindowBordered(SDL_Window * window,
                                                   SDL_bool bordered);
extern  void  SDL_SetWindowResizable(SDL_Window * window,
                                                    SDL_bool resizable);
extern  void  SDL_SetWindowAlwaysOnTop(SDL_Window * window,
                                                      SDL_bool on_top);
extern  void  SDL_ShowWindow(SDL_Window * window);
extern  void  SDL_HideWindow(SDL_Window * window);
extern  void  SDL_RaiseWindow(SDL_Window * window);
extern  void  SDL_MaximizeWindow(SDL_Window * window);
extern  void  SDL_MinimizeWindow(SDL_Window * window);
extern  void  SDL_RestoreWindow(SDL_Window * window);
extern  int  SDL_SetWindowFullscreen(SDL_Window * window,
                                                    Uint32 flags);
extern  SDL_bool  SDL_HasWindowSurface(SDL_Window *window);
extern  SDL_Surface *  SDL_GetWindowSurface(SDL_Window * window);
extern  int  SDL_UpdateWindowSurface(SDL_Window * window);
extern  int  SDL_UpdateWindowSurfaceRects(SDL_Window * window,
                                                         const SDL_Rect * rects,
                                                         int numrects);
extern  int  SDL_DestroyWindowSurface(SDL_Window *window);
extern  void  SDL_SetWindowGrab(SDL_Window * window,
                                               SDL_bool grabbed);
extern  void  SDL_SetWindowKeyboardGrab(SDL_Window * window,
                                                       SDL_bool grabbed);
extern  void  SDL_SetWindowMouseGrab(SDL_Window * window,
                                                    SDL_bool grabbed);
extern  SDL_bool  SDL_GetWindowGrab(SDL_Window * window);
extern  SDL_bool  SDL_GetWindowKeyboardGrab(SDL_Window * window);
extern  SDL_bool  SDL_GetWindowMouseGrab(SDL_Window * window);
extern  SDL_Window *  SDL_GetGrabbedWindow(void);
extern  int  SDL_SetWindowMouseRect(SDL_Window * window, const SDL_Rect * rect);
extern  const SDL_Rect *  SDL_GetWindowMouseRect(SDL_Window * window);
extern  int  SDL_SetWindowBrightness(SDL_Window * window, float brightness);
extern  float  SDL_GetWindowBrightness(SDL_Window * window);
extern  int  SDL_SetWindowOpacity(SDL_Window * window, float opacity);
extern  int  SDL_GetWindowOpacity(SDL_Window * window, float * out_opacity);
extern  int  SDL_SetWindowModalFor(SDL_Window * modal_window, SDL_Window * parent_window);
extern  int  SDL_SetWindowInputFocus(SDL_Window * window);
extern  int  SDL_SetWindowGammaRamp(SDL_Window * window,
                                                   const Uint16 * red,
                                                   const Uint16 * green,
                                                   const Uint16 * blue);
extern  int  SDL_GetWindowGammaRamp(SDL_Window * window,
                                                   Uint16 * red,
                                                   Uint16 * green,
                                                   Uint16 * blue);
typedef enum
{
    SDL_HITTEST_NORMAL,
    SDL_HITTEST_DRAGGABLE,
    SDL_HITTEST_RESIZE_TOPLEFT,
    SDL_HITTEST_RESIZE_TOP,
    SDL_HITTEST_RESIZE_TOPRIGHT,
    SDL_HITTEST_RESIZE_RIGHT,
    SDL_HITTEST_RESIZE_BOTTOMRIGHT,
    SDL_HITTEST_RESIZE_BOTTOM,
    SDL_HITTEST_RESIZE_BOTTOMLEFT,
    SDL_HITTEST_RESIZE_LEFT
} SDL_HitTestResult;
typedef SDL_HitTestResult ( *SDL_HitTest)(SDL_Window *win,
                                                 const SDL_Point *area,
                                                 void *data);
extern  int  SDL_SetWindowHitTest(SDL_Window * window,
                                                 SDL_HitTest callback,
                                                 void *callback_data);
extern  int  SDL_FlashWindow(SDL_Window * window, SDL_FlashOperation operation);
extern  void  SDL_DestroyWindow(SDL_Window * window);
extern  SDL_bool  SDL_IsScreenSaverEnabled(void);
extern  void  SDL_EnableScreenSaver(void);
extern  void  SDL_DisableScreenSaver(void);
extern  int  SDL_GL_LoadLibrary(const char *path);
extern  void * SDL_GL_GetProcAddress(const char *proc);
extern  void  SDL_GL_UnloadLibrary(void);
extern  SDL_bool  SDL_GL_ExtensionSupported(const char
                                                           *extension);
extern  void  SDL_GL_ResetAttributes(void);
extern  int  SDL_GL_SetAttribute(SDL_GLattr attr, int value);
extern  int  SDL_GL_GetAttribute(SDL_GLattr attr, int *value);
extern  SDL_GLContext  SDL_GL_CreateContext(SDL_Window *
                                                           window);
extern  int  SDL_GL_MakeCurrent(SDL_Window * window,
                                               SDL_GLContext context);
extern  SDL_Window*  SDL_GL_GetCurrentWindow(void);
extern  SDL_GLContext  SDL_GL_GetCurrentContext(void);
extern  void  SDL_GL_GetDrawableSize(SDL_Window * window, int *w,
                                                    int *h);
extern  int  SDL_GL_SetSwapInterval(int interval);
extern  int  SDL_GL_GetSwapInterval(void);
extern  void  SDL_GL_SwapWindow(SDL_Window * window);
extern  void  SDL_GL_DeleteContext(SDL_GLContext context);
typedef enum
{
    SDL_SCANCODE_UNKNOWN = 0,
    SDL_SCANCODE_A = 4,
    SDL_SCANCODE_B = 5,
    SDL_SCANCODE_C = 6,
    SDL_SCANCODE_D = 7,
    SDL_SCANCODE_E = 8,
    SDL_SCANCODE_F = 9,
    SDL_SCANCODE_G = 10,
    SDL_SCANCODE_H = 11,
    SDL_SCANCODE_I = 12,
    SDL_SCANCODE_J = 13,
    SDL_SCANCODE_K = 14,
    SDL_SCANCODE_L = 15,
    SDL_SCANCODE_M = 16,
    SDL_SCANCODE_N = 17,
    SDL_SCANCODE_O = 18,
    SDL_SCANCODE_P = 19,
    SDL_SCANCODE_Q = 20,
    SDL_SCANCODE_R = 21,
    SDL_SCANCODE_S = 22,
    SDL_SCANCODE_T = 23,
    SDL_SCANCODE_U = 24,
    SDL_SCANCODE_V = 25,
    SDL_SCANCODE_W = 26,
    SDL_SCANCODE_X = 27,
    SDL_SCANCODE_Y = 28,
    SDL_SCANCODE_Z = 29,
    SDL_SCANCODE_1 = 30,
    SDL_SCANCODE_2 = 31,
    SDL_SCANCODE_3 = 32,
    SDL_SCANCODE_4 = 33,
    SDL_SCANCODE_5 = 34,
    SDL_SCANCODE_6 = 35,
    SDL_SCANCODE_7 = 36,
    SDL_SCANCODE_8 = 37,
    SDL_SCANCODE_9 = 38,
    SDL_SCANCODE_0 = 39,
    SDL_SCANCODE_RETURN = 40,
    SDL_SCANCODE_ESCAPE = 41,
    SDL_SCANCODE_BACKSPACE = 42,
    SDL_SCANCODE_TAB = 43,
    SDL_SCANCODE_SPACE = 44,
    SDL_SCANCODE_MINUS = 45,
    SDL_SCANCODE_EQUALS = 46,
    SDL_SCANCODE_LEFTBRACKET = 47,
    SDL_SCANCODE_RIGHTBRACKET = 48,
    SDL_SCANCODE_BACKSLASH = 49,
    SDL_SCANCODE_NONUSHASH = 50,
    SDL_SCANCODE_SEMICOLON = 51,
    SDL_SCANCODE_APOSTROPHE = 52,
    SDL_SCANCODE_GRAVE = 53,
    SDL_SCANCODE_COMMA = 54,
    SDL_SCANCODE_PERIOD = 55,
    SDL_SCANCODE_SLASH = 56,
    SDL_SCANCODE_CAPSLOCK = 57,
    SDL_SCANCODE_F1 = 58,
    SDL_SCANCODE_F2 = 59,
    SDL_SCANCODE_F3 = 60,
    SDL_SCANCODE_F4 = 61,
    SDL_SCANCODE_F5 = 62,
    SDL_SCANCODE_F6 = 63,
    SDL_SCANCODE_F7 = 64,
    SDL_SCANCODE_F8 = 65,
    SDL_SCANCODE_F9 = 66,
    SDL_SCANCODE_F10 = 67,
    SDL_SCANCODE_F11 = 68,
    SDL_SCANCODE_F12 = 69,
    SDL_SCANCODE_PRINTSCREEN = 70,
    SDL_SCANCODE_SCROLLLOCK = 71,
    SDL_SCANCODE_PAUSE = 72,
    SDL_SCANCODE_INSERT = 73,
    SDL_SCANCODE_HOME = 74,
    SDL_SCANCODE_PAGEUP = 75,
    SDL_SCANCODE_DELETE = 76,
    SDL_SCANCODE_END = 77,
    SDL_SCANCODE_PAGEDOWN = 78,
    SDL_SCANCODE_RIGHT = 79,
    SDL_SCANCODE_LEFT = 80,
    SDL_SCANCODE_DOWN = 81,
    SDL_SCANCODE_UP = 82,
    SDL_SCANCODE_NUMLOCKCLEAR = 83,
    SDL_SCANCODE_KP_DIVIDE = 84,
    SDL_SCANCODE_KP_MULTIPLY = 85,
    SDL_SCANCODE_KP_MINUS = 86,
    SDL_SCANCODE_KP_PLUS = 87,
    SDL_SCANCODE_KP_ENTER = 88,
    SDL_SCANCODE_KP_1 = 89,
    SDL_SCANCODE_KP_2 = 90,
    SDL_SCANCODE_KP_3 = 91,
    SDL_SCANCODE_KP_4 = 92,
    SDL_SCANCODE_KP_5 = 93,
    SDL_SCANCODE_KP_6 = 94,
    SDL_SCANCODE_KP_7 = 95,
    SDL_SCANCODE_KP_8 = 96,
    SDL_SCANCODE_KP_9 = 97,
    SDL_SCANCODE_KP_0 = 98,
    SDL_SCANCODE_KP_PERIOD = 99,
    SDL_SCANCODE_NONUSBACKSLASH = 100,
    SDL_SCANCODE_APPLICATION = 101,
    SDL_SCANCODE_POWER = 102,
    SDL_SCANCODE_KP_EQUALS = 103,
    SDL_SCANCODE_F13 = 104,
    SDL_SCANCODE_F14 = 105,
    SDL_SCANCODE_F15 = 106,
    SDL_SCANCODE_F16 = 107,
    SDL_SCANCODE_F17 = 108,
    SDL_SCANCODE_F18 = 109,
    SDL_SCANCODE_F19 = 110,
    SDL_SCANCODE_F20 = 111,
    SDL_SCANCODE_F21 = 112,
    SDL_SCANCODE_F22 = 113,
    SDL_SCANCODE_F23 = 114,
    SDL_SCANCODE_F24 = 115,
    SDL_SCANCODE_EXECUTE = 116,
    SDL_SCANCODE_HELP = 117,
    SDL_SCANCODE_MENU = 118,
    SDL_SCANCODE_SELECT = 119,
    SDL_SCANCODE_STOP = 120,
    SDL_SCANCODE_AGAIN = 121,
    SDL_SCANCODE_UNDO = 122,
    SDL_SCANCODE_CUT = 123,
    SDL_SCANCODE_COPY = 124,
    SDL_SCANCODE_PASTE = 125,
    SDL_SCANCODE_FIND = 126,
    SDL_SCANCODE_MUTE = 127,
    SDL_SCANCODE_VOLUMEUP = 128,
    SDL_SCANCODE_VOLUMEDOWN = 129,
    SDL_SCANCODE_KP_COMMA = 133,
    SDL_SCANCODE_KP_EQUALSAS400 = 134,
    SDL_SCANCODE_INTERNATIONAL1 = 135,
    SDL_SCANCODE_INTERNATIONAL2 = 136,
    SDL_SCANCODE_INTERNATIONAL3 = 137,
    SDL_SCANCODE_INTERNATIONAL4 = 138,
    SDL_SCANCODE_INTERNATIONAL5 = 139,
    SDL_SCANCODE_INTERNATIONAL6 = 140,
    SDL_SCANCODE_INTERNATIONAL7 = 141,
    SDL_SCANCODE_INTERNATIONAL8 = 142,
    SDL_SCANCODE_INTERNATIONAL9 = 143,
    SDL_SCANCODE_LANG1 = 144,
    SDL_SCANCODE_LANG2 = 145,
    SDL_SCANCODE_LANG3 = 146,
    SDL_SCANCODE_LANG4 = 147,
    SDL_SCANCODE_LANG5 = 148,
    SDL_SCANCODE_LANG6 = 149,
    SDL_SCANCODE_LANG7 = 150,
    SDL_SCANCODE_LANG8 = 151,
    SDL_SCANCODE_LANG9 = 152,
    SDL_SCANCODE_ALTERASE = 153,
    SDL_SCANCODE_SYSREQ = 154,
    SDL_SCANCODE_CANCEL = 155,
    SDL_SCANCODE_CLEAR = 156,
    SDL_SCANCODE_PRIOR = 157,
    SDL_SCANCODE_RETURN2 = 158,
    SDL_SCANCODE_SEPARATOR = 159,
    SDL_SCANCODE_OUT = 160,
    SDL_SCANCODE_OPER = 161,
    SDL_SCANCODE_CLEARAGAIN = 162,
    SDL_SCANCODE_CRSEL = 163,
    SDL_SCANCODE_EXSEL = 164,
    SDL_SCANCODE_KP_00 = 176,
    SDL_SCANCODE_KP_000 = 177,
    SDL_SCANCODE_THOUSANDSSEPARATOR = 178,
    SDL_SCANCODE_DECIMALSEPARATOR = 179,
    SDL_SCANCODE_CURRENCYUNIT = 180,
    SDL_SCANCODE_CURRENCYSUBUNIT = 181,
    SDL_SCANCODE_KP_LEFTPAREN = 182,
    SDL_SCANCODE_KP_RIGHTPAREN = 183,
    SDL_SCANCODE_KP_LEFTBRACE = 184,
    SDL_SCANCODE_KP_RIGHTBRACE = 185,
    SDL_SCANCODE_KP_TAB = 186,
    SDL_SCANCODE_KP_BACKSPACE = 187,
    SDL_SCANCODE_KP_A = 188,
    SDL_SCANCODE_KP_B = 189,
    SDL_SCANCODE_KP_C = 190,
    SDL_SCANCODE_KP_D = 191,
    SDL_SCANCODE_KP_E = 192,
    SDL_SCANCODE_KP_F = 193,
    SDL_SCANCODE_KP_XOR = 194,
    SDL_SCANCODE_KP_POWER = 195,
    SDL_SCANCODE_KP_PERCENT = 196,
    SDL_SCANCODE_KP_LESS = 197,
    SDL_SCANCODE_KP_GREATER = 198,
    SDL_SCANCODE_KP_AMPERSAND = 199,
    SDL_SCANCODE_KP_DBLAMPERSAND = 200,
    SDL_SCANCODE_KP_VERTICALBAR = 201,
    SDL_SCANCODE_KP_DBLVERTICALBAR = 202,
    SDL_SCANCODE_KP_COLON = 203,
    SDL_SCANCODE_KP_HASH = 204,
    SDL_SCANCODE_KP_SPACE = 205,
    SDL_SCANCODE_KP_AT = 206,
    SDL_SCANCODE_KP_EXCLAM = 207,
    SDL_SCANCODE_KP_MEMSTORE = 208,
    SDL_SCANCODE_KP_MEMRECALL = 209,
    SDL_SCANCODE_KP_MEMCLEAR = 210,
    SDL_SCANCODE_KP_MEMADD = 211,
    SDL_SCANCODE_KP_MEMSUBTRACT = 212,
    SDL_SCANCODE_KP_MEMMULTIPLY = 213,
    SDL_SCANCODE_KP_MEMDIVIDE = 214,
    SDL_SCANCODE_KP_PLUSMINUS = 215,
    SDL_SCANCODE_KP_CLEAR = 216,
    SDL_SCANCODE_KP_CLEARENTRY = 217,
    SDL_SCANCODE_KP_BINARY = 218,
    SDL_SCANCODE_KP_OCTAL = 219,
    SDL_SCANCODE_KP_DECIMAL = 220,
    SDL_SCANCODE_KP_HEXADECIMAL = 221,
    SDL_SCANCODE_LCTRL = 224,
    SDL_SCANCODE_LSHIFT = 225,
    SDL_SCANCODE_LALT = 226,
    SDL_SCANCODE_LGUI = 227,
    SDL_SCANCODE_RCTRL = 228,
    SDL_SCANCODE_RSHIFT = 229,
    SDL_SCANCODE_RALT = 230,
    SDL_SCANCODE_RGUI = 231,
    SDL_SCANCODE_MODE = 257,
    SDL_SCANCODE_AUDIONEXT = 258,
    SDL_SCANCODE_AUDIOPREV = 259,
    SDL_SCANCODE_AUDIOSTOP = 260,
    SDL_SCANCODE_AUDIOPLAY = 261,
    SDL_SCANCODE_AUDIOMUTE = 262,
    SDL_SCANCODE_MEDIASELECT = 263,
    SDL_SCANCODE_WWW = 264,
    SDL_SCANCODE_MAIL = 265,
    SDL_SCANCODE_CALCULATOR = 266,
    SDL_SCANCODE_COMPUTER = 267,
    SDL_SCANCODE_AC_SEARCH = 268,
    SDL_SCANCODE_AC_HOME = 269,
    SDL_SCANCODE_AC_BACK = 270,
    SDL_SCANCODE_AC_FORWARD = 271,
    SDL_SCANCODE_AC_STOP = 272,
    SDL_SCANCODE_AC_REFRESH = 273,
    SDL_SCANCODE_AC_BOOKMARKS = 274,
    SDL_SCANCODE_BRIGHTNESSDOWN = 275,
    SDL_SCANCODE_BRIGHTNESSUP = 276,
    SDL_SCANCODE_DISPLAYSWITCH = 277,
    SDL_SCANCODE_KBDILLUMTOGGLE = 278,
    SDL_SCANCODE_KBDILLUMDOWN = 279,
    SDL_SCANCODE_KBDILLUMUP = 280,
    SDL_SCANCODE_EJECT = 281,
    SDL_SCANCODE_SLEEP = 282,
    SDL_SCANCODE_APP1 = 283,
    SDL_SCANCODE_APP2 = 284,
    SDL_SCANCODE_AUDIOREWIND = 285,
    SDL_SCANCODE_AUDIOFASTFORWARD = 286,
    SDL_SCANCODE_SOFTLEFT = 287,
    SDL_SCANCODE_SOFTRIGHT = 288,
    SDL_SCANCODE_CALL = 289,
    SDL_SCANCODE_ENDCALL = 290,
    SDL_NUM_SCANCODES = 512
} SDL_Scancode;
typedef Sint32 SDL_Keycode;
typedef enum
{
    SDLK_UNKNOWN = 0,
    SDLK_RETURN = '\r',
    SDLK_ESCAPE = '\x1B',
    SDLK_BACKSPACE = '\b',
    SDLK_TAB = '\t',
    SDLK_SPACE = ' ',
    SDLK_EXCLAIM = '!',
    SDLK_QUOTEDBL = '"',
    SDLK_HASH = '#',
    SDLK_PERCENT = '%',
    SDLK_DOLLAR = '$',
    SDLK_AMPERSAND = '&',
    SDLK_QUOTE = '\'',
    SDLK_LEFTPAREN = '(',
    SDLK_RIGHTPAREN = ')',
    SDLK_ASTERISK = '*',
    SDLK_PLUS = '+',
    SDLK_COMMA = ',',
    SDLK_MINUS = '-',
    SDLK_PERIOD = '.',
    SDLK_SLASH = '/',
    SDLK_0 = '0',
    SDLK_1 = '1',
    SDLK_2 = '2',
    SDLK_3 = '3',
    SDLK_4 = '4',
    SDLK_5 = '5',
    SDLK_6 = '6',
    SDLK_7 = '7',
    SDLK_8 = '8',
    SDLK_9 = '9',
    SDLK_COLON = ':',
    SDLK_SEMICOLON = ';',
    SDLK_LESS = '<',
    SDLK_EQUALS = '=',
    SDLK_GREATER = '>',
    SDLK_QUESTION = '?',
    SDLK_AT = '@',
    SDLK_LEFTBRACKET = '[',
    SDLK_BACKSLASH = '\\',
    SDLK_RIGHTBRACKET = ']',
    SDLK_CARET = '^',
    SDLK_UNDERSCORE = '_',
    SDLK_BACKQUOTE = '`',
    SDLK_a = 'a',
    SDLK_b = 'b',
    SDLK_c = 'c',
    SDLK_d = 'd',
    SDLK_e = 'e',
    SDLK_f = 'f',
    SDLK_g = 'g',
    SDLK_h = 'h',
    SDLK_i = 'i',
    SDLK_j = 'j',
    SDLK_k = 'k',
    SDLK_l = 'l',
    SDLK_m = 'm',
    SDLK_n = 'n',
    SDLK_o = 'o',
    SDLK_p = 'p',
    SDLK_q = 'q',
    SDLK_r = 'r',
    SDLK_s = 's',
    SDLK_t = 't',
    SDLK_u = 'u',
    SDLK_v = 'v',
    SDLK_w = 'w',
    SDLK_x = 'x',
    SDLK_y = 'y',
    SDLK_z = 'z',
    SDLK_CAPSLOCK = (SDL_SCANCODE_CAPSLOCK | (1<<30)),
    SDLK_F1 = (SDL_SCANCODE_F1 | (1<<30)),
    SDLK_F2 = (SDL_SCANCODE_F2 | (1<<30)),
    SDLK_F3 = (SDL_SCANCODE_F3 | (1<<30)),
    SDLK_F4 = (SDL_SCANCODE_F4 | (1<<30)),
    SDLK_F5 = (SDL_SCANCODE_F5 | (1<<30)),
    SDLK_F6 = (SDL_SCANCODE_F6 | (1<<30)),
    SDLK_F7 = (SDL_SCANCODE_F7 | (1<<30)),
    SDLK_F8 = (SDL_SCANCODE_F8 | (1<<30)),
    SDLK_F9 = (SDL_SCANCODE_F9 | (1<<30)),
    SDLK_F10 = (SDL_SCANCODE_F10 | (1<<30)),
    SDLK_F11 = (SDL_SCANCODE_F11 | (1<<30)),
    SDLK_F12 = (SDL_SCANCODE_F12 | (1<<30)),
    SDLK_PRINTSCREEN = (SDL_SCANCODE_PRINTSCREEN | (1<<30)),
    SDLK_SCROLLLOCK = (SDL_SCANCODE_SCROLLLOCK | (1<<30)),
    SDLK_PAUSE = (SDL_SCANCODE_PAUSE | (1<<30)),
    SDLK_INSERT = (SDL_SCANCODE_INSERT | (1<<30)),
    SDLK_HOME = (SDL_SCANCODE_HOME | (1<<30)),
    SDLK_PAGEUP = (SDL_SCANCODE_PAGEUP | (1<<30)),
    SDLK_DELETE = '\x7F',
    SDLK_END = (SDL_SCANCODE_END | (1<<30)),
    SDLK_PAGEDOWN = (SDL_SCANCODE_PAGEDOWN | (1<<30)),
    SDLK_RIGHT = (SDL_SCANCODE_RIGHT | (1<<30)),
    SDLK_LEFT = (SDL_SCANCODE_LEFT | (1<<30)),
    SDLK_DOWN = (SDL_SCANCODE_DOWN | (1<<30)),
    SDLK_UP = (SDL_SCANCODE_UP | (1<<30)),
    SDLK_NUMLOCKCLEAR = (SDL_SCANCODE_NUMLOCKCLEAR | (1<<30)),
    SDLK_KP_DIVIDE = (SDL_SCANCODE_KP_DIVIDE | (1<<30)),
    SDLK_KP_MULTIPLY = (SDL_SCANCODE_KP_MULTIPLY | (1<<30)),
    SDLK_KP_MINUS = (SDL_SCANCODE_KP_MINUS | (1<<30)),
    SDLK_KP_PLUS = (SDL_SCANCODE_KP_PLUS | (1<<30)),
    SDLK_KP_ENTER = (SDL_SCANCODE_KP_ENTER | (1<<30)),
    SDLK_KP_1 = (SDL_SCANCODE_KP_1 | (1<<30)),
    SDLK_KP_2 = (SDL_SCANCODE_KP_2 | (1<<30)),
    SDLK_KP_3 = (SDL_SCANCODE_KP_3 | (1<<30)),
    SDLK_KP_4 = (SDL_SCANCODE_KP_4 | (1<<30)),
    SDLK_KP_5 = (SDL_SCANCODE_KP_5 | (1<<30)),
    SDLK_KP_6 = (SDL_SCANCODE_KP_6 | (1<<30)),
    SDLK_KP_7 = (SDL_SCANCODE_KP_7 | (1<<30)),
    SDLK_KP_8 = (SDL_SCANCODE_KP_8 | (1<<30)),
    SDLK_KP_9 = (SDL_SCANCODE_KP_9 | (1<<30)),
    SDLK_KP_0 = (SDL_SCANCODE_KP_0 | (1<<30)),
    SDLK_KP_PERIOD = (SDL_SCANCODE_KP_PERIOD | (1<<30)),
    SDLK_APPLICATION = (SDL_SCANCODE_APPLICATION | (1<<30)),
    SDLK_POWER = (SDL_SCANCODE_POWER | (1<<30)),
    SDLK_KP_EQUALS = (SDL_SCANCODE_KP_EQUALS | (1<<30)),
    SDLK_F13 = (SDL_SCANCODE_F13 | (1<<30)),
    SDLK_F14 = (SDL_SCANCODE_F14 | (1<<30)),
    SDLK_F15 = (SDL_SCANCODE_F15 | (1<<30)),
    SDLK_F16 = (SDL_SCANCODE_F16 | (1<<30)),
    SDLK_F17 = (SDL_SCANCODE_F17 | (1<<30)),
    SDLK_F18 = (SDL_SCANCODE_F18 | (1<<30)),
    SDLK_F19 = (SDL_SCANCODE_F19 | (1<<30)),
    SDLK_F20 = (SDL_SCANCODE_F20 | (1<<30)),
    SDLK_F21 = (SDL_SCANCODE_F21 | (1<<30)),
    SDLK_F22 = (SDL_SCANCODE_F22 | (1<<30)),
    SDLK_F23 = (SDL_SCANCODE_F23 | (1<<30)),
    SDLK_F24 = (SDL_SCANCODE_F24 | (1<<30)),
    SDLK_EXECUTE = (SDL_SCANCODE_EXECUTE | (1<<30)),
    SDLK_HELP = (SDL_SCANCODE_HELP | (1<<30)),
    SDLK_MENU = (SDL_SCANCODE_MENU | (1<<30)),
    SDLK_SELECT = (SDL_SCANCODE_SELECT | (1<<30)),
    SDLK_STOP = (SDL_SCANCODE_STOP | (1<<30)),
    SDLK_AGAIN = (SDL_SCANCODE_AGAIN | (1<<30)),
    SDLK_UNDO = (SDL_SCANCODE_UNDO | (1<<30)),
    SDLK_CUT = (SDL_SCANCODE_CUT | (1<<30)),
    SDLK_COPY = (SDL_SCANCODE_COPY | (1<<30)),
    SDLK_PASTE = (SDL_SCANCODE_PASTE | (1<<30)),
    SDLK_FIND = (SDL_SCANCODE_FIND | (1<<30)),
    SDLK_MUTE = (SDL_SCANCODE_MUTE | (1<<30)),
    SDLK_VOLUMEUP = (SDL_SCANCODE_VOLUMEUP | (1<<30)),
    SDLK_VOLUMEDOWN = (SDL_SCANCODE_VOLUMEDOWN | (1<<30)),
    SDLK_KP_COMMA = (SDL_SCANCODE_KP_COMMA | (1<<30)),
    SDLK_KP_EQUALSAS400 =
        (SDL_SCANCODE_KP_EQUALSAS400 | (1<<30)),
    SDLK_ALTERASE = (SDL_SCANCODE_ALTERASE | (1<<30)),
    SDLK_SYSREQ = (SDL_SCANCODE_SYSREQ | (1<<30)),
    SDLK_CANCEL = (SDL_SCANCODE_CANCEL | (1<<30)),
    SDLK_CLEAR = (SDL_SCANCODE_CLEAR | (1<<30)),
    SDLK_PRIOR = (SDL_SCANCODE_PRIOR | (1<<30)),
    SDLK_RETURN2 = (SDL_SCANCODE_RETURN2 | (1<<30)),
    SDLK_SEPARATOR = (SDL_SCANCODE_SEPARATOR | (1<<30)),
    SDLK_OUT = (SDL_SCANCODE_OUT | (1<<30)),
    SDLK_OPER = (SDL_SCANCODE_OPER | (1<<30)),
    SDLK_CLEARAGAIN = (SDL_SCANCODE_CLEARAGAIN | (1<<30)),
    SDLK_CRSEL = (SDL_SCANCODE_CRSEL | (1<<30)),
    SDLK_EXSEL = (SDL_SCANCODE_EXSEL | (1<<30)),
    SDLK_KP_00 = (SDL_SCANCODE_KP_00 | (1<<30)),
    SDLK_KP_000 = (SDL_SCANCODE_KP_000 | (1<<30)),
    SDLK_THOUSANDSSEPARATOR =
        (SDL_SCANCODE_THOUSANDSSEPARATOR | (1<<30)),
    SDLK_DECIMALSEPARATOR =
        (SDL_SCANCODE_DECIMALSEPARATOR | (1<<30)),
    SDLK_CURRENCYUNIT = (SDL_SCANCODE_CURRENCYUNIT | (1<<30)),
    SDLK_CURRENCYSUBUNIT =
        (SDL_SCANCODE_CURRENCYSUBUNIT | (1<<30)),
    SDLK_KP_LEFTPAREN = (SDL_SCANCODE_KP_LEFTPAREN | (1<<30)),
    SDLK_KP_RIGHTPAREN = (SDL_SCANCODE_KP_RIGHTPAREN | (1<<30)),
    SDLK_KP_LEFTBRACE = (SDL_SCANCODE_KP_LEFTBRACE | (1<<30)),
    SDLK_KP_RIGHTBRACE = (SDL_SCANCODE_KP_RIGHTBRACE | (1<<30)),
    SDLK_KP_TAB = (SDL_SCANCODE_KP_TAB | (1<<30)),
    SDLK_KP_BACKSPACE = (SDL_SCANCODE_KP_BACKSPACE | (1<<30)),
    SDLK_KP_A = (SDL_SCANCODE_KP_A | (1<<30)),
    SDLK_KP_B = (SDL_SCANCODE_KP_B | (1<<30)),
    SDLK_KP_C = (SDL_SCANCODE_KP_C | (1<<30)),
    SDLK_KP_D = (SDL_SCANCODE_KP_D | (1<<30)),
    SDLK_KP_E = (SDL_SCANCODE_KP_E | (1<<30)),
    SDLK_KP_F = (SDL_SCANCODE_KP_F | (1<<30)),
    SDLK_KP_XOR = (SDL_SCANCODE_KP_XOR | (1<<30)),
    SDLK_KP_POWER = (SDL_SCANCODE_KP_POWER | (1<<30)),
    SDLK_KP_PERCENT = (SDL_SCANCODE_KP_PERCENT | (1<<30)),
    SDLK_KP_LESS = (SDL_SCANCODE_KP_LESS | (1<<30)),
    SDLK_KP_GREATER = (SDL_SCANCODE_KP_GREATER | (1<<30)),
    SDLK_KP_AMPERSAND = (SDL_SCANCODE_KP_AMPERSAND | (1<<30)),
    SDLK_KP_DBLAMPERSAND =
        (SDL_SCANCODE_KP_DBLAMPERSAND | (1<<30)),
    SDLK_KP_VERTICALBAR =
        (SDL_SCANCODE_KP_VERTICALBAR | (1<<30)),
    SDLK_KP_DBLVERTICALBAR =
        (SDL_SCANCODE_KP_DBLVERTICALBAR | (1<<30)),
    SDLK_KP_COLON = (SDL_SCANCODE_KP_COLON | (1<<30)),
    SDLK_KP_HASH = (SDL_SCANCODE_KP_HASH | (1<<30)),
    SDLK_KP_SPACE = (SDL_SCANCODE_KP_SPACE | (1<<30)),
    SDLK_KP_AT = (SDL_SCANCODE_KP_AT | (1<<30)),
    SDLK_KP_EXCLAM = (SDL_SCANCODE_KP_EXCLAM | (1<<30)),
    SDLK_KP_MEMSTORE = (SDL_SCANCODE_KP_MEMSTORE | (1<<30)),
    SDLK_KP_MEMRECALL = (SDL_SCANCODE_KP_MEMRECALL | (1<<30)),
    SDLK_KP_MEMCLEAR = (SDL_SCANCODE_KP_MEMCLEAR | (1<<30)),
    SDLK_KP_MEMADD = (SDL_SCANCODE_KP_MEMADD | (1<<30)),
    SDLK_KP_MEMSUBTRACT =
        (SDL_SCANCODE_KP_MEMSUBTRACT | (1<<30)),
    SDLK_KP_MEMMULTIPLY =
        (SDL_SCANCODE_KP_MEMMULTIPLY | (1<<30)),
    SDLK_KP_MEMDIVIDE = (SDL_SCANCODE_KP_MEMDIVIDE | (1<<30)),
    SDLK_KP_PLUSMINUS = (SDL_SCANCODE_KP_PLUSMINUS | (1<<30)),
    SDLK_KP_CLEAR = (SDL_SCANCODE_KP_CLEAR | (1<<30)),
    SDLK_KP_CLEARENTRY = (SDL_SCANCODE_KP_CLEARENTRY | (1<<30)),
    SDLK_KP_BINARY = (SDL_SCANCODE_KP_BINARY | (1<<30)),
    SDLK_KP_OCTAL = (SDL_SCANCODE_KP_OCTAL | (1<<30)),
    SDLK_KP_DECIMAL = (SDL_SCANCODE_KP_DECIMAL | (1<<30)),
    SDLK_KP_HEXADECIMAL =
        (SDL_SCANCODE_KP_HEXADECIMAL | (1<<30)),
    SDLK_LCTRL = (SDL_SCANCODE_LCTRL | (1<<30)),
    SDLK_LSHIFT = (SDL_SCANCODE_LSHIFT | (1<<30)),
    SDLK_LALT = (SDL_SCANCODE_LALT | (1<<30)),
    SDLK_LGUI = (SDL_SCANCODE_LGUI | (1<<30)),
    SDLK_RCTRL = (SDL_SCANCODE_RCTRL | (1<<30)),
    SDLK_RSHIFT = (SDL_SCANCODE_RSHIFT | (1<<30)),
    SDLK_RALT = (SDL_SCANCODE_RALT | (1<<30)),
    SDLK_RGUI = (SDL_SCANCODE_RGUI | (1<<30)),
    SDLK_MODE = (SDL_SCANCODE_MODE | (1<<30)),
    SDLK_AUDIONEXT = (SDL_SCANCODE_AUDIONEXT | (1<<30)),
    SDLK_AUDIOPREV = (SDL_SCANCODE_AUDIOPREV | (1<<30)),
    SDLK_AUDIOSTOP = (SDL_SCANCODE_AUDIOSTOP | (1<<30)),
    SDLK_AUDIOPLAY = (SDL_SCANCODE_AUDIOPLAY | (1<<30)),
    SDLK_AUDIOMUTE = (SDL_SCANCODE_AUDIOMUTE | (1<<30)),
    SDLK_MEDIASELECT = (SDL_SCANCODE_MEDIASELECT | (1<<30)),
    SDLK_WWW = (SDL_SCANCODE_WWW | (1<<30)),
    SDLK_MAIL = (SDL_SCANCODE_MAIL | (1<<30)),
    SDLK_CALCULATOR = (SDL_SCANCODE_CALCULATOR | (1<<30)),
    SDLK_COMPUTER = (SDL_SCANCODE_COMPUTER | (1<<30)),
    SDLK_AC_SEARCH = (SDL_SCANCODE_AC_SEARCH | (1<<30)),
    SDLK_AC_HOME = (SDL_SCANCODE_AC_HOME | (1<<30)),
    SDLK_AC_BACK = (SDL_SCANCODE_AC_BACK | (1<<30)),
    SDLK_AC_FORWARD = (SDL_SCANCODE_AC_FORWARD | (1<<30)),
    SDLK_AC_STOP = (SDL_SCANCODE_AC_STOP | (1<<30)),
    SDLK_AC_REFRESH = (SDL_SCANCODE_AC_REFRESH | (1<<30)),
    SDLK_AC_BOOKMARKS = (SDL_SCANCODE_AC_BOOKMARKS | (1<<30)),
    SDLK_BRIGHTNESSDOWN =
        (SDL_SCANCODE_BRIGHTNESSDOWN | (1<<30)),
    SDLK_BRIGHTNESSUP = (SDL_SCANCODE_BRIGHTNESSUP | (1<<30)),
    SDLK_DISPLAYSWITCH = (SDL_SCANCODE_DISPLAYSWITCH | (1<<30)),
    SDLK_KBDILLUMTOGGLE =
        (SDL_SCANCODE_KBDILLUMTOGGLE | (1<<30)),
    SDLK_KBDILLUMDOWN = (SDL_SCANCODE_KBDILLUMDOWN | (1<<30)),
    SDLK_KBDILLUMUP = (SDL_SCANCODE_KBDILLUMUP | (1<<30)),
    SDLK_EJECT = (SDL_SCANCODE_EJECT | (1<<30)),
    SDLK_SLEEP = (SDL_SCANCODE_SLEEP | (1<<30)),
    SDLK_APP1 = (SDL_SCANCODE_APP1 | (1<<30)),
    SDLK_APP2 = (SDL_SCANCODE_APP2 | (1<<30)),
    SDLK_AUDIOREWIND = (SDL_SCANCODE_AUDIOREWIND | (1<<30)),
    SDLK_AUDIOFASTFORWARD = (SDL_SCANCODE_AUDIOFASTFORWARD | (1<<30)),
    SDLK_SOFTLEFT = (SDL_SCANCODE_SOFTLEFT | (1<<30)),
    SDLK_SOFTRIGHT = (SDL_SCANCODE_SOFTRIGHT | (1<<30)),
    SDLK_CALL = (SDL_SCANCODE_CALL | (1<<30)),
    SDLK_ENDCALL = (SDL_SCANCODE_ENDCALL | (1<<30))
} SDL_KeyCode;
typedef enum
{
    KMOD_NONE = 0x0000,
    KMOD_LSHIFT = 0x0001,
    KMOD_RSHIFT = 0x0002,
    KMOD_LCTRL = 0x0040,
    KMOD_RCTRL = 0x0080,
    KMOD_LALT = 0x0100,
    KMOD_RALT = 0x0200,
    KMOD_LGUI = 0x0400,
    KMOD_RGUI = 0x0800,
    KMOD_NUM = 0x1000,
    KMOD_CAPS = 0x2000,
    KMOD_MODE = 0x4000,
    KMOD_SCROLL = 0x8000,
    KMOD_CTRL = KMOD_LCTRL | KMOD_RCTRL,
    KMOD_SHIFT = KMOD_LSHIFT | KMOD_RSHIFT,
    KMOD_ALT = KMOD_LALT | KMOD_RALT,
    KMOD_GUI = KMOD_LGUI | KMOD_RGUI,
    KMOD_RESERVED = KMOD_SCROLL
} SDL_Keymod;
typedef struct SDL_Keysym
{
    SDL_Scancode scancode;
    SDL_Keycode sym;
    Uint16 mod;
    Uint32 unused;
} SDL_Keysym;
extern  SDL_Window *  SDL_GetKeyboardFocus(void);
extern  const Uint8 * SDL_GetKeyboardState(int *numkeys);
extern  void  SDL_ResetKeyboard(void);
extern  SDL_Keymod  SDL_GetModState(void);
extern  void  SDL_SetModState(SDL_Keymod modstate);
extern  SDL_Keycode  SDL_GetKeyFromScancode(SDL_Scancode scancode);
extern  SDL_Scancode  SDL_GetScancodeFromKey(SDL_Keycode key);
extern  const char * SDL_GetScancodeName(SDL_Scancode scancode);
extern  SDL_Scancode  SDL_GetScancodeFromName(const char *name);
extern  const char * SDL_GetKeyName(SDL_Keycode key);
extern  SDL_Keycode  SDL_GetKeyFromName(const char *name);
extern  void  SDL_StartTextInput(void);
extern  SDL_bool  SDL_IsTextInputActive(void);
extern  void  SDL_StopTextInput(void);
extern  void  SDL_ClearComposition(void);
extern  SDL_bool  SDL_IsTextInputShown(void);
extern  void  SDL_SetTextInputRect(const SDL_Rect *rect);
extern  SDL_bool  SDL_HasScreenKeyboardSupport(void);
extern  SDL_bool  SDL_IsScreenKeyboardShown(SDL_Window *window);
typedef struct SDL_Cursor SDL_Cursor;
typedef enum
{
    SDL_SYSTEM_CURSOR_ARROW,
    SDL_SYSTEM_CURSOR_IBEAM,
    SDL_SYSTEM_CURSOR_WAIT,
    SDL_SYSTEM_CURSOR_CROSSHAIR,
    SDL_SYSTEM_CURSOR_WAITARROW,
    SDL_SYSTEM_CURSOR_SIZENWSE,
    SDL_SYSTEM_CURSOR_SIZENESW,
    SDL_SYSTEM_CURSOR_SIZEWE,
    SDL_SYSTEM_CURSOR_SIZENS,
    SDL_SYSTEM_CURSOR_SIZEALL,
    SDL_SYSTEM_CURSOR_NO,
    SDL_SYSTEM_CURSOR_HAND,
    SDL_NUM_SYSTEM_CURSORS
} SDL_SystemCursor;
typedef enum
{
    SDL_MOUSEWHEEL_NORMAL,
    SDL_MOUSEWHEEL_FLIPPED
} SDL_MouseWheelDirection;
extern  SDL_Window *  SDL_GetMouseFocus(void);
extern  Uint32  SDL_GetMouseState(int *x, int *y);
extern  Uint32  SDL_GetGlobalMouseState(int *x, int *y);
extern  Uint32  SDL_GetRelativeMouseState(int *x, int *y);
extern  void  SDL_WarpMouseInWindow(SDL_Window * window,
                                                   int x, int y);
extern  int  SDL_WarpMouseGlobal(int x, int y);
extern  int  SDL_SetRelativeMouseMode(SDL_bool enabled);
extern  int  SDL_CaptureMouse(SDL_bool enabled);
extern  SDL_bool  SDL_GetRelativeMouseMode(void);
extern  SDL_Cursor * SDL_CreateCursor(const Uint8 * data,
                                                     const Uint8 * mask,
                                                     int w, int h, int hot_x,
                                                     int hot_y);
extern  SDL_Cursor * SDL_CreateColorCursor(SDL_Surface *surface,
                                                          int hot_x,
                                                          int hot_y);
extern  SDL_Cursor * SDL_CreateSystemCursor(SDL_SystemCursor id);
extern  void  SDL_SetCursor(SDL_Cursor * cursor);
extern  SDL_Cursor * SDL_GetCursor(void);
extern  SDL_Cursor * SDL_GetDefaultCursor(void);
extern  void  SDL_FreeCursor(SDL_Cursor * cursor);
extern  int  SDL_ShowCursor(int toggle);
typedef struct {
    Uint8 data[16];
} SDL_GUID;
extern  void  SDL_GUIDToString(SDL_GUID guid, char *pszGUID, int cbGUID);
extern  SDL_GUID  SDL_GUIDFromString(const char *pchGUID);
struct _SDL_Joystick;
typedef struct _SDL_Joystick SDL_Joystick;
typedef SDL_GUID SDL_JoystickGUID;
typedef Sint32 SDL_JoystickID;
typedef enum
{
    SDL_JOYSTICK_TYPE_UNKNOWN,
    SDL_JOYSTICK_TYPE_GAMECONTROLLER,
    SDL_JOYSTICK_TYPE_WHEEL,
    SDL_JOYSTICK_TYPE_ARCADE_STICK,
    SDL_JOYSTICK_TYPE_FLIGHT_STICK,
    SDL_JOYSTICK_TYPE_DANCE_PAD,
    SDL_JOYSTICK_TYPE_GUITAR,
    SDL_JOYSTICK_TYPE_DRUM_KIT,
    SDL_JOYSTICK_TYPE_ARCADE_PAD,
    SDL_JOYSTICK_TYPE_THROTTLE
} SDL_JoystickType;
typedef enum
{
    SDL_JOYSTICK_POWER_UNKNOWN = -1,
    SDL_JOYSTICK_POWER_EMPTY,
    SDL_JOYSTICK_POWER_LOW,
    SDL_JOYSTICK_POWER_MEDIUM,
    SDL_JOYSTICK_POWER_FULL,
    SDL_JOYSTICK_POWER_WIRED,
    SDL_JOYSTICK_POWER_MAX
} SDL_JoystickPowerLevel;
extern  void  SDL_LockJoysticks(void) 
  ;
extern  void  SDL_UnlockJoysticks(void) 
  ;
extern  int  SDL_NumJoysticks(void);
extern  const char * SDL_JoystickNameForIndex(int device_index);
extern  const char * SDL_JoystickPathForIndex(int device_index);
extern  int  SDL_JoystickGetDevicePlayerIndex(int device_index);
extern  SDL_JoystickGUID  SDL_JoystickGetDeviceGUID(int device_index);
extern  Uint16  SDL_JoystickGetDeviceVendor(int device_index);
extern  Uint16  SDL_JoystickGetDeviceProduct(int device_index);
extern  Uint16  SDL_JoystickGetDeviceProductVersion(int device_index);
extern  SDL_JoystickType  SDL_JoystickGetDeviceType(int device_index);
extern  SDL_JoystickID  SDL_JoystickGetDeviceInstanceID(int device_index);
extern  SDL_Joystick * SDL_JoystickOpen(int device_index);
extern  SDL_Joystick * SDL_JoystickFromInstanceID(SDL_JoystickID instance_id);
extern  SDL_Joystick * SDL_JoystickFromPlayerIndex(int player_index);
extern  int  SDL_JoystickAttachVirtual(SDL_JoystickType type,
                                                      int naxes,
                                                      int nbuttons,
                                                      int nhats);
typedef struct SDL_VirtualJoystickDesc
{
    Uint16 version;
    Uint16 type;
    Uint16 naxes;
    Uint16 nbuttons;
    Uint16 nhats;
    Uint16 vendor_id;
    Uint16 product_id;
    Uint16 padding;
    Uint32 button_mask;
    Uint32 axis_mask;
    const char *name;
    void *userdata;
    void ( *Update)(void *userdata);
    void ( *SetPlayerIndex)(void *userdata, int player_index);
    int ( *Rumble)(void *userdata, Uint16 low_frequency_rumble, Uint16 high_frequency_rumble);
    int ( *RumbleTriggers)(void *userdata, Uint16 left_rumble, Uint16 right_rumble);
    int ( *SetLED)(void *userdata, Uint8 red, Uint8 green, Uint8 blue);
    int ( *SendEffect)(void *userdata, const void *data, int size);
} SDL_VirtualJoystickDesc;
extern  int  SDL_JoystickAttachVirtualEx(const SDL_VirtualJoystickDesc *desc);
extern  int  SDL_JoystickDetachVirtual(int device_index);
extern  SDL_bool  SDL_JoystickIsVirtual(int device_index);
extern  int  SDL_JoystickSetVirtualAxis(SDL_Joystick *joystick, int axis, Sint16 value);
extern  int  SDL_JoystickSetVirtualButton(SDL_Joystick *joystick, int button, Uint8 value);
extern  int  SDL_JoystickSetVirtualHat(SDL_Joystick *joystick, int hat, Uint8 value);
extern  const char * SDL_JoystickName(SDL_Joystick *joystick);
extern  const char * SDL_JoystickPath(SDL_Joystick *joystick);
extern  int  SDL_JoystickGetPlayerIndex(SDL_Joystick *joystick);
extern  void  SDL_JoystickSetPlayerIndex(SDL_Joystick *joystick, int player_index);
extern  SDL_JoystickGUID  SDL_JoystickGetGUID(SDL_Joystick *joystick);
extern  Uint16  SDL_JoystickGetVendor(SDL_Joystick *joystick);
extern  Uint16  SDL_JoystickGetProduct(SDL_Joystick *joystick);
extern  Uint16  SDL_JoystickGetProductVersion(SDL_Joystick *joystick);
extern  Uint16  SDL_JoystickGetFirmwareVersion(SDL_Joystick *joystick);
extern  const char *  SDL_JoystickGetSerial(SDL_Joystick *joystick);
extern  SDL_JoystickType  SDL_JoystickGetType(SDL_Joystick *joystick);
extern  void  SDL_JoystickGetGUIDString(SDL_JoystickGUID guid, char *pszGUID, int cbGUID);
extern  SDL_JoystickGUID  SDL_JoystickGetGUIDFromString(const char *pchGUID);
extern  void  SDL_GetJoystickGUIDInfo(SDL_JoystickGUID guid, Uint16 *vendor, Uint16 *product, Uint16 *version, Uint16 *crc16);
extern  SDL_bool  SDL_JoystickGetAttached(SDL_Joystick *joystick);
extern  SDL_JoystickID  SDL_JoystickInstanceID(SDL_Joystick *joystick);
extern  int  SDL_JoystickNumAxes(SDL_Joystick *joystick);
extern  int  SDL_JoystickNumBalls(SDL_Joystick *joystick);
extern  int  SDL_JoystickNumHats(SDL_Joystick *joystick);
extern  int  SDL_JoystickNumButtons(SDL_Joystick *joystick);
extern  void  SDL_JoystickUpdate(void);
extern  int  SDL_JoystickEventState(int state);
extern  Sint16  SDL_JoystickGetAxis(SDL_Joystick *joystick,
                                                   int axis);
extern  SDL_bool  SDL_JoystickGetAxisInitialState(SDL_Joystick *joystick,
                                                   int axis, Sint16 *state);
extern  Uint8  SDL_JoystickGetHat(SDL_Joystick *joystick,
                                                 int hat);
extern  int  SDL_JoystickGetBall(SDL_Joystick *joystick,
                                                int ball, int *dx, int *dy);
extern  Uint8  SDL_JoystickGetButton(SDL_Joystick *joystick,
                                                    int button);
extern  int  SDL_JoystickRumble(SDL_Joystick *joystick, Uint16 low_frequency_rumble, Uint16 high_frequency_rumble, Uint32 duration_ms);
extern  int  SDL_JoystickRumbleTriggers(SDL_Joystick *joystick, Uint16 left_rumble, Uint16 right_rumble, Uint32 duration_ms);
extern  SDL_bool  SDL_JoystickHasLED(SDL_Joystick *joystick);
extern  SDL_bool  SDL_JoystickHasRumble(SDL_Joystick *joystick);
extern  SDL_bool  SDL_JoystickHasRumbleTriggers(SDL_Joystick *joystick);
extern  int  SDL_JoystickSetLED(SDL_Joystick *joystick, Uint8 red, Uint8 green, Uint8 blue);
extern  int  SDL_JoystickSendEffect(SDL_Joystick *joystick, const void *data, int size);
extern  void  SDL_JoystickClose(SDL_Joystick *joystick);
extern  SDL_JoystickPowerLevel  SDL_JoystickCurrentPowerLevel(SDL_Joystick *joystick);
struct _SDL_Sensor;
typedef struct _SDL_Sensor SDL_Sensor;
typedef Sint32 SDL_SensorID;
typedef enum
{
    SDL_SENSOR_INVALID = -1,
    SDL_SENSOR_UNKNOWN,
    SDL_SENSOR_ACCEL,
    SDL_SENSOR_GYRO,
    SDL_SENSOR_ACCEL_L,
    SDL_SENSOR_GYRO_L,
    SDL_SENSOR_ACCEL_R,
    SDL_SENSOR_GYRO_R
} SDL_SensorType;
extern  void  SDL_LockSensors(void);
extern  void  SDL_UnlockSensors(void);
extern  int  SDL_NumSensors(void);
extern  const char * SDL_SensorGetDeviceName(int device_index);
extern  SDL_SensorType  SDL_SensorGetDeviceType(int device_index);
extern  int  SDL_SensorGetDeviceNonPortableType(int device_index);
extern  SDL_SensorID  SDL_SensorGetDeviceInstanceID(int device_index);
extern  SDL_Sensor * SDL_SensorOpen(int device_index);
extern  SDL_Sensor * SDL_SensorFromInstanceID(SDL_SensorID instance_id);
extern  const char * SDL_SensorGetName(SDL_Sensor *sensor);
extern  SDL_SensorType  SDL_SensorGetType(SDL_Sensor *sensor);
extern  int  SDL_SensorGetNonPortableType(SDL_Sensor *sensor);
extern  SDL_SensorID  SDL_SensorGetInstanceID(SDL_Sensor *sensor);
extern  int  SDL_SensorGetData(SDL_Sensor *sensor, float *data, int num_values);
extern  int  SDL_SensorGetDataWithTimestamp(SDL_Sensor *sensor, Uint64 *timestamp, float *data, int num_values);
extern  void  SDL_SensorClose(SDL_Sensor *sensor);
extern  void  SDL_SensorUpdate(void);
struct _SDL_GameController;
typedef struct _SDL_GameController SDL_GameController;
typedef enum
{
    SDL_CONTROLLER_TYPE_UNKNOWN = 0,
    SDL_CONTROLLER_TYPE_XBOX360,
    SDL_CONTROLLER_TYPE_XBOXONE,
    SDL_CONTROLLER_TYPE_PS3,
    SDL_CONTROLLER_TYPE_PS4,
    SDL_CONTROLLER_TYPE_NINTENDO_SWITCH_PRO,
    SDL_CONTROLLER_TYPE_VIRTUAL,
    SDL_CONTROLLER_TYPE_PS5,
    SDL_CONTROLLER_TYPE_AMAZON_LUNA,
    SDL_CONTROLLER_TYPE_GOOGLE_STADIA,
    SDL_CONTROLLER_TYPE_NVIDIA_SHIELD,
    SDL_CONTROLLER_TYPE_NINTENDO_SWITCH_JOYCON_LEFT,
    SDL_CONTROLLER_TYPE_NINTENDO_SWITCH_JOYCON_RIGHT,
    SDL_CONTROLLER_TYPE_NINTENDO_SWITCH_JOYCON_PAIR
} SDL_GameControllerType;
typedef enum
{
    SDL_CONTROLLER_BINDTYPE_NONE = 0,
    SDL_CONTROLLER_BINDTYPE_BUTTON,
    SDL_CONTROLLER_BINDTYPE_AXIS,
    SDL_CONTROLLER_BINDTYPE_HAT
} SDL_GameControllerBindType;
typedef struct SDL_GameControllerButtonBind
{
    SDL_GameControllerBindType bindType;
    union
    {
        int button;
        int axis;
        struct {
            int hat;
            int hat_mask;
        } hat;
    } value;
} SDL_GameControllerButtonBind;
extern  int  SDL_GameControllerAddMappingsFromRW(SDL_RWops * rw, int freerw);
extern  int  SDL_GameControllerAddMapping(const char* mappingString);
extern  int  SDL_GameControllerNumMappings(void);
extern  char *  SDL_GameControllerMappingForIndex(int mapping_index);
extern  char *  SDL_GameControllerMappingForGUID(SDL_JoystickGUID guid);
extern  char *  SDL_GameControllerMapping(SDL_GameController *gamecontroller);
extern  SDL_bool  SDL_IsGameController(int joystick_index);
extern  const char * SDL_GameControllerNameForIndex(int joystick_index);
extern  const char * SDL_GameControllerPathForIndex(int joystick_index);
extern  SDL_GameControllerType  SDL_GameControllerTypeForIndex(int joystick_index);
extern  char * SDL_GameControllerMappingForDeviceIndex(int joystick_index);
extern  SDL_GameController * SDL_GameControllerOpen(int joystick_index);
extern  SDL_GameController * SDL_GameControllerFromInstanceID(SDL_JoystickID joyid);
extern  SDL_GameController * SDL_GameControllerFromPlayerIndex(int player_index);
extern  const char * SDL_GameControllerName(SDL_GameController *gamecontroller);
extern  const char * SDL_GameControllerPath(SDL_GameController *gamecontroller);
extern  SDL_GameControllerType  SDL_GameControllerGetType(SDL_GameController *gamecontroller);
extern  int  SDL_GameControllerGetPlayerIndex(SDL_GameController *gamecontroller);
extern  void  SDL_GameControllerSetPlayerIndex(SDL_GameController *gamecontroller, int player_index);
extern  Uint16  SDL_GameControllerGetVendor(SDL_GameController *gamecontroller);
extern  Uint16  SDL_GameControllerGetProduct(SDL_GameController *gamecontroller);
extern  Uint16  SDL_GameControllerGetProductVersion(SDL_GameController *gamecontroller);
extern  Uint16  SDL_GameControllerGetFirmwareVersion(SDL_GameController *gamecontroller);
extern  const char *  SDL_GameControllerGetSerial(SDL_GameController *gamecontroller);
extern  SDL_bool  SDL_GameControllerGetAttached(SDL_GameController *gamecontroller);
extern  SDL_Joystick * SDL_GameControllerGetJoystick(SDL_GameController *gamecontroller);
extern  int  SDL_GameControllerEventState(int state);
extern  void  SDL_GameControllerUpdate(void);
typedef enum
{
    SDL_CONTROLLER_AXIS_INVALID = -1,
    SDL_CONTROLLER_AXIS_LEFTX,
    SDL_CONTROLLER_AXIS_LEFTY,
    SDL_CONTROLLER_AXIS_RIGHTX,
    SDL_CONTROLLER_AXIS_RIGHTY,
    SDL_CONTROLLER_AXIS_TRIGGERLEFT,
    SDL_CONTROLLER_AXIS_TRIGGERRIGHT,
    SDL_CONTROLLER_AXIS_MAX
} SDL_GameControllerAxis;
extern  SDL_GameControllerAxis  SDL_GameControllerGetAxisFromString(const char *str);
extern  const char*  SDL_GameControllerGetStringForAxis(SDL_GameControllerAxis axis);
extern  SDL_GameControllerButtonBind 
SDL_GameControllerGetBindForAxis(SDL_GameController *gamecontroller,
                                 SDL_GameControllerAxis axis);
extern  SDL_bool 
SDL_GameControllerHasAxis(SDL_GameController *gamecontroller, SDL_GameControllerAxis axis);
extern  Sint16 
SDL_GameControllerGetAxis(SDL_GameController *gamecontroller, SDL_GameControllerAxis axis);
typedef enum
{
    SDL_CONTROLLER_BUTTON_INVALID = -1,
    SDL_CONTROLLER_BUTTON_A,
    SDL_CONTROLLER_BUTTON_B,
    SDL_CONTROLLER_BUTTON_X,
    SDL_CONTROLLER_BUTTON_Y,
    SDL_CONTROLLER_BUTTON_BACK,
    SDL_CONTROLLER_BUTTON_GUIDE,
    SDL_CONTROLLER_BUTTON_START,
    SDL_CONTROLLER_BUTTON_LEFTSTICK,
    SDL_CONTROLLER_BUTTON_RIGHTSTICK,
    SDL_CONTROLLER_BUTTON_LEFTSHOULDER,
    SDL_CONTROLLER_BUTTON_RIGHTSHOULDER,
    SDL_CONTROLLER_BUTTON_DPAD_UP,
    SDL_CONTROLLER_BUTTON_DPAD_DOWN,
    SDL_CONTROLLER_BUTTON_DPAD_LEFT,
    SDL_CONTROLLER_BUTTON_DPAD_RIGHT,
    SDL_CONTROLLER_BUTTON_MISC1,
    SDL_CONTROLLER_BUTTON_PADDLE1,
    SDL_CONTROLLER_BUTTON_PADDLE2,
    SDL_CONTROLLER_BUTTON_PADDLE3,
    SDL_CONTROLLER_BUTTON_PADDLE4,
    SDL_CONTROLLER_BUTTON_TOUCHPAD,
    SDL_CONTROLLER_BUTTON_MAX
} SDL_GameControllerButton;
extern  SDL_GameControllerButton  SDL_GameControllerGetButtonFromString(const char *str);
extern  const char*  SDL_GameControllerGetStringForButton(SDL_GameControllerButton button);
extern  SDL_GameControllerButtonBind 
SDL_GameControllerGetBindForButton(SDL_GameController *gamecontroller,
                                   SDL_GameControllerButton button);
extern  SDL_bool  SDL_GameControllerHasButton(SDL_GameController *gamecontroller,
                                                             SDL_GameControllerButton button);
extern  Uint8  SDL_GameControllerGetButton(SDL_GameController *gamecontroller,
                                                          SDL_GameControllerButton button);
extern  int  SDL_GameControllerGetNumTouchpads(SDL_GameController *gamecontroller);
extern  int  SDL_GameControllerGetNumTouchpadFingers(SDL_GameController *gamecontroller, int touchpad);
extern  int  SDL_GameControllerGetTouchpadFinger(SDL_GameController *gamecontroller, int touchpad, int finger, Uint8 *state, float *x, float *y, float *pressure);
extern  SDL_bool  SDL_GameControllerHasSensor(SDL_GameController *gamecontroller, SDL_SensorType type);
extern  int  SDL_GameControllerSetSensorEnabled(SDL_GameController *gamecontroller, SDL_SensorType type, SDL_bool enabled);
extern  SDL_bool  SDL_GameControllerIsSensorEnabled(SDL_GameController *gamecontroller, SDL_SensorType type);
extern  float  SDL_GameControllerGetSensorDataRate(SDL_GameController *gamecontroller, SDL_SensorType type);
extern  int  SDL_GameControllerGetSensorData(SDL_GameController *gamecontroller, SDL_SensorType type, float *data, int num_values);
extern  int  SDL_GameControllerGetSensorDataWithTimestamp(SDL_GameController *gamecontroller, SDL_SensorType type, Uint64 *timestamp, float *data, int num_values);
extern  int  SDL_GameControllerRumble(SDL_GameController *gamecontroller, Uint16 low_frequency_rumble, Uint16 high_frequency_rumble, Uint32 duration_ms);
extern  int  SDL_GameControllerRumbleTriggers(SDL_GameController *gamecontroller, Uint16 left_rumble, Uint16 right_rumble, Uint32 duration_ms);
extern  SDL_bool  SDL_GameControllerHasLED(SDL_GameController *gamecontroller);
extern  SDL_bool  SDL_GameControllerHasRumble(SDL_GameController *gamecontroller);
extern  SDL_bool  SDL_GameControllerHasRumbleTriggers(SDL_GameController *gamecontroller);
extern  int  SDL_GameControllerSetLED(SDL_GameController *gamecontroller, Uint8 red, Uint8 green, Uint8 blue);
extern  int  SDL_GameControllerSendEffect(SDL_GameController *gamecontroller, const void *data, int size);
extern  void  SDL_GameControllerClose(SDL_GameController *gamecontroller);
extern  const char*  SDL_GameControllerGetAppleSFSymbolsNameForButton(SDL_GameController *gamecontroller, SDL_GameControllerButton button);
extern  const char*  SDL_GameControllerGetAppleSFSymbolsNameForAxis(SDL_GameController *gamecontroller, SDL_GameControllerAxis axis);
typedef Sint64 SDL_TouchID;
typedef Sint64 SDL_FingerID;
typedef enum
{
    SDL_TOUCH_DEVICE_INVALID = -1,
    SDL_TOUCH_DEVICE_DIRECT,
    SDL_TOUCH_DEVICE_INDIRECT_ABSOLUTE,
    SDL_TOUCH_DEVICE_INDIRECT_RELATIVE
} SDL_TouchDeviceType;
typedef struct SDL_Finger
{
    SDL_FingerID id;
    float x;
    float y;
    float pressure;
} SDL_Finger;
extern  int  SDL_GetNumTouchDevices(void);
extern  SDL_TouchID  SDL_GetTouchDevice(int index);
extern  const char*  SDL_GetTouchName(int index);
extern  SDL_TouchDeviceType  SDL_GetTouchDeviceType(SDL_TouchID touchID);
extern  int  SDL_GetNumTouchFingers(SDL_TouchID touchID);
extern  SDL_Finger *  SDL_GetTouchFinger(SDL_TouchID touchID, int index);
typedef Sint64 SDL_GestureID;
extern  int  SDL_RecordGesture(SDL_TouchID touchId);
extern  int  SDL_SaveAllDollarTemplates(SDL_RWops *dst);
extern  int  SDL_SaveDollarTemplate(SDL_GestureID gestureId,SDL_RWops *dst);
extern  int  SDL_LoadDollarTemplates(SDL_TouchID touchId, SDL_RWops *src);
typedef enum
{
    SDL_FIRSTEVENT     = 0,
    SDL_QUIT           = 0x100,
    SDL_APP_TERMINATING,
    SDL_APP_LOWMEMORY,
    SDL_APP_WILLENTERBACKGROUND,
    SDL_APP_DIDENTERBACKGROUND,
    SDL_APP_WILLENTERFOREGROUND,
    SDL_APP_DIDENTERFOREGROUND,
    SDL_LOCALECHANGED,
    SDL_DISPLAYEVENT   = 0x150,
    SDL_WINDOWEVENT    = 0x200,
    SDL_SYSWMEVENT,
    SDL_KEYDOWN        = 0x300,
    SDL_KEYUP,
    SDL_TEXTEDITING,
    SDL_TEXTINPUT,
    SDL_KEYMAPCHANGED,
    SDL_TEXTEDITING_EXT,
    SDL_MOUSEMOTION    = 0x400,
    SDL_MOUSEBUTTONDOWN,
    SDL_MOUSEBUTTONUP,
    SDL_MOUSEWHEEL,
    SDL_JOYAXISMOTION  = 0x600,
    SDL_JOYBALLMOTION,
    SDL_JOYHATMOTION,
    SDL_JOYBUTTONDOWN,
    SDL_JOYBUTTONUP,
    SDL_JOYDEVICEADDED,
    SDL_JOYDEVICEREMOVED,
    SDL_JOYBATTERYUPDATED,
    SDL_CONTROLLERAXISMOTION  = 0x650,
    SDL_CONTROLLERBUTTONDOWN,
    SDL_CONTROLLERBUTTONUP,
    SDL_CONTROLLERDEVICEADDED,
    SDL_CONTROLLERDEVICEREMOVED,
    SDL_CONTROLLERDEVICEREMAPPED,
    SDL_CONTROLLERTOUCHPADDOWN,
    SDL_CONTROLLERTOUCHPADMOTION,
    SDL_CONTROLLERTOUCHPADUP,
    SDL_CONTROLLERSENSORUPDATE,
    SDL_FINGERDOWN      = 0x700,
    SDL_FINGERUP,
    SDL_FINGERMOTION,
    SDL_DOLLARGESTURE   = 0x800,
    SDL_DOLLARRECORD,
    SDL_MULTIGESTURE,
    SDL_CLIPBOARDUPDATE = 0x900,
    SDL_DROPFILE        = 0x1000,
    SDL_DROPTEXT,
    SDL_DROPBEGIN,
    SDL_DROPCOMPLETE,
    SDL_AUDIODEVICEADDED = 0x1100,
    SDL_AUDIODEVICEREMOVED,
    SDL_SENSORUPDATE = 0x1200,
    SDL_RENDER_TARGETS_RESET = 0x2000,
    SDL_RENDER_DEVICE_RESET,
    SDL_POLLSENTINEL = 0x7F00,
    SDL_USEREVENT    = 0x8000,
    SDL_LASTEVENT    = 0xFFFF
} SDL_EventType;
typedef struct SDL_CommonEvent
{
    Uint32 type;
    Uint32 timestamp;
} SDL_CommonEvent;
typedef struct SDL_DisplayEvent
{
    Uint32 type;
    Uint32 timestamp;
    Uint32 display;
    Uint8 event;
    Uint8 padding1;
    Uint8 padding2;
    Uint8 padding3;
    Sint32 data1;
} SDL_DisplayEvent;
typedef struct SDL_WindowEvent
{
    Uint32 type;
    Uint32 timestamp;
    Uint32 windowID;
    Uint8 event;
    Uint8 padding1;
    Uint8 padding2;
    Uint8 padding3;
    Sint32 data1;
    Sint32 data2;
} SDL_WindowEvent;
typedef struct SDL_KeyboardEvent
{
    Uint32 type;
    Uint32 timestamp;
    Uint32 windowID;
    Uint8 state;
    Uint8 repeat;
    Uint8 padding2;
    Uint8 padding3;
    SDL_Keysym keysym;
} SDL_KeyboardEvent;
typedef struct SDL_TextEditingEvent
{
    Uint32 type;
    Uint32 timestamp;
    Uint32 windowID;
    char text[(32)];
    Sint32 start;
    Sint32 length;
} SDL_TextEditingEvent;
typedef struct SDL_TextEditingExtEvent
{
    Uint32 type;
    Uint32 timestamp;
    Uint32 windowID;
    char* text;
    Sint32 start;
    Sint32 length;
} SDL_TextEditingExtEvent;
typedef struct SDL_TextInputEvent
{
    Uint32 type;
    Uint32 timestamp;
    Uint32 windowID;
    char text[(32)];
} SDL_TextInputEvent;
typedef struct SDL_MouseMotionEvent
{
    Uint32 type;
    Uint32 timestamp;
    Uint32 windowID;
    Uint32 which;
    Uint32 state;
    Sint32 x;
    Sint32 y;
    Sint32 xrel;
    Sint32 yrel;
} SDL_MouseMotionEvent;
typedef struct SDL_MouseButtonEvent
{
    Uint32 type;
    Uint32 timestamp;
    Uint32 windowID;
    Uint32 which;
    Uint8 button;
    Uint8 state;
    Uint8 clicks;
    Uint8 padding1;
    Sint32 x;
    Sint32 y;
} SDL_MouseButtonEvent;
typedef struct SDL_MouseWheelEvent
{
    Uint32 type;
    Uint32 timestamp;
    Uint32 windowID;
    Uint32 which;
    Sint32 x;
    Sint32 y;
    Uint32 direction;
    float preciseX;
    float preciseY;
    Sint32 mouseX;
    Sint32 mouseY;
} SDL_MouseWheelEvent;
typedef struct SDL_JoyAxisEvent
{
    Uint32 type;
    Uint32 timestamp;
    SDL_JoystickID which;
    Uint8 axis;
    Uint8 padding1;
    Uint8 padding2;
    Uint8 padding3;
    Sint16 value;
    Uint16 padding4;
} SDL_JoyAxisEvent;
typedef struct SDL_JoyBallEvent
{
    Uint32 type;
    Uint32 timestamp;
    SDL_JoystickID which;
    Uint8 ball;
    Uint8 padding1;
    Uint8 padding2;
    Uint8 padding3;
    Sint16 xrel;
    Sint16 yrel;
} SDL_JoyBallEvent;
typedef struct SDL_JoyHatEvent
{
    Uint32 type;
    Uint32 timestamp;
    SDL_JoystickID which;
    Uint8 hat;
    Uint8 value;
    Uint8 padding1;
    Uint8 padding2;
} SDL_JoyHatEvent;
typedef struct SDL_JoyButtonEvent
{
    Uint32 type;
    Uint32 timestamp;
    SDL_JoystickID which;
    Uint8 button;
    Uint8 state;
    Uint8 padding1;
    Uint8 padding2;
} SDL_JoyButtonEvent;
typedef struct SDL_JoyDeviceEvent
{
    Uint32 type;
    Uint32 timestamp;
    Sint32 which;
} SDL_JoyDeviceEvent;
typedef struct SDL_JoyBatteryEvent
{
    Uint32 type;
    Uint32 timestamp;
    SDL_JoystickID which;
    SDL_JoystickPowerLevel level;
} SDL_JoyBatteryEvent;
typedef struct SDL_ControllerAxisEvent
{
    Uint32 type;
    Uint32 timestamp;
    SDL_JoystickID which;
    Uint8 axis;
    Uint8 padding1;
    Uint8 padding2;
    Uint8 padding3;
    Sint16 value;
    Uint16 padding4;
} SDL_ControllerAxisEvent;
typedef struct SDL_ControllerButtonEvent
{
    Uint32 type;
    Uint32 timestamp;
    SDL_JoystickID which;
    Uint8 button;
    Uint8 state;
    Uint8 padding1;
    Uint8 padding2;
} SDL_ControllerButtonEvent;
typedef struct SDL_ControllerDeviceEvent
{
    Uint32 type;
    Uint32 timestamp;
    Sint32 which;
} SDL_ControllerDeviceEvent;
typedef struct SDL_ControllerTouchpadEvent
{
    Uint32 type;
    Uint32 timestamp;
    SDL_JoystickID which;
    Sint32 touchpad;
    Sint32 finger;
    float x;
    float y;
    float pressure;
} SDL_ControllerTouchpadEvent;
typedef struct SDL_ControllerSensorEvent
{
    Uint32 type;
    Uint32 timestamp;
    SDL_JoystickID which;
    Sint32 sensor;
    float data[3];
    Uint64 timestamp_us;
} SDL_ControllerSensorEvent;
typedef struct SDL_AudioDeviceEvent
{
    Uint32 type;
    Uint32 timestamp;
    Uint32 which;
    Uint8 iscapture;
    Uint8 padding1;
    Uint8 padding2;
    Uint8 padding3;
} SDL_AudioDeviceEvent;
typedef struct SDL_TouchFingerEvent
{
    Uint32 type;
    Uint32 timestamp;
    SDL_TouchID touchId;
    SDL_FingerID fingerId;
    float x;
    float y;
    float dx;
    float dy;
    float pressure;
    Uint32 windowID;
} SDL_TouchFingerEvent;
typedef struct SDL_MultiGestureEvent
{
    Uint32 type;
    Uint32 timestamp;
    SDL_TouchID touchId;
    float dTheta;
    float dDist;
    float x;
    float y;
    Uint16 numFingers;
    Uint16 padding;
} SDL_MultiGestureEvent;
typedef struct SDL_DollarGestureEvent
{
    Uint32 type;
    Uint32 timestamp;
    SDL_TouchID touchId;
    SDL_GestureID gestureId;
    Uint32 numFingers;
    float error;
    float x;
    float y;
} SDL_DollarGestureEvent;
typedef struct SDL_DropEvent
{
    Uint32 type;
    Uint32 timestamp;
    char *file;
    Uint32 windowID;
} SDL_DropEvent;
typedef struct SDL_SensorEvent
{
    Uint32 type;
    Uint32 timestamp;
    Sint32 which;
    float data[6];
    Uint64 timestamp_us;
} SDL_SensorEvent;
typedef struct SDL_QuitEvent
{
    Uint32 type;
    Uint32 timestamp;
} SDL_QuitEvent;
typedef struct SDL_OSEvent
{
    Uint32 type;
    Uint32 timestamp;
} SDL_OSEvent;
typedef struct SDL_UserEvent
{
    Uint32 type;
    Uint32 timestamp;
    Uint32 windowID;
    Sint32 code;
    void *data1;
    void *data2;
} SDL_UserEvent;
struct SDL_SysWMmsg;
typedef struct SDL_SysWMmsg SDL_SysWMmsg;
typedef struct SDL_SysWMEvent
{
    Uint32 type;
    Uint32 timestamp;
    SDL_SysWMmsg *msg;
} SDL_SysWMEvent;
typedef union SDL_Event
{
    Uint32 type;
    SDL_CommonEvent common;
    SDL_DisplayEvent display;
    SDL_WindowEvent window;
    SDL_KeyboardEvent key;
    SDL_TextEditingEvent edit;
    SDL_TextEditingExtEvent editExt;
    SDL_TextInputEvent text;
    SDL_MouseMotionEvent motion;
    SDL_MouseButtonEvent button;
    SDL_MouseWheelEvent wheel;
    SDL_JoyAxisEvent jaxis;
    SDL_JoyBallEvent jball;
    SDL_JoyHatEvent jhat;
    SDL_JoyButtonEvent jbutton;
    SDL_JoyDeviceEvent jdevice;
    SDL_JoyBatteryEvent jbattery;
    SDL_ControllerAxisEvent caxis;
    SDL_ControllerButtonEvent cbutton;
    SDL_ControllerDeviceEvent cdevice;
    SDL_ControllerTouchpadEvent ctouchpad;
    SDL_ControllerSensorEvent csensor;
    SDL_AudioDeviceEvent adevice;
    SDL_SensorEvent sensor;
    SDL_QuitEvent quit;
    SDL_UserEvent user;
    SDL_SysWMEvent syswm;
    SDL_TouchFingerEvent tfinger;
    SDL_MultiGestureEvent mgesture;
    SDL_DollarGestureEvent dgesture;
    SDL_DropEvent drop;
    Uint8 padding[sizeof(void *) <= 8 ? 56 : sizeof(void *) == 16 ? 64 : 3 * sizeof(void *)];
} SDL_Event;
_Static_assert(sizeof(SDL_Event) == sizeof(((SDL_Event *)((void *)0))->padding), "sizeof(SDL_Event) == sizeof(((SDL_Event *)((void *)0))->padding)");
extern  void  SDL_PumpEvents(void);
typedef enum
{
    SDL_ADDEVENT,
    SDL_PEEKEVENT,
    SDL_GETEVENT
} SDL_eventaction;
extern  int  SDL_PeepEvents(SDL_Event * events, int numevents,
                                           SDL_eventaction action,
                                           Uint32 minType, Uint32 maxType);
extern  SDL_bool  SDL_HasEvent(Uint32 type);
extern  SDL_bool  SDL_HasEvents(Uint32 minType, Uint32 maxType);
extern  void  SDL_FlushEvent(Uint32 type);
extern  void  SDL_FlushEvents(Uint32 minType, Uint32 maxType);
extern  int  SDL_PollEvent(SDL_Event * event);
extern  int  SDL_WaitEvent(SDL_Event * event);
extern  int  SDL_WaitEventTimeout(SDL_Event * event,
                                                 int timeout);
extern  int  SDL_PushEvent(SDL_Event * event);
typedef int ( * SDL_EventFilter) (void *userdata, SDL_Event * event);
extern  void  SDL_SetEventFilter(SDL_EventFilter filter,
                                                void *userdata);
extern  SDL_bool  SDL_GetEventFilter(SDL_EventFilter * filter,
                                                    void **userdata);
extern  void  SDL_AddEventWatch(SDL_EventFilter filter,
                                               void *userdata);
extern  void  SDL_DelEventWatch(SDL_EventFilter filter,
                                               void *userdata);
extern  void  SDL_FilterEvents(SDL_EventFilter filter,
                                              void *userdata);
extern  Uint8  SDL_EventState(Uint32 type, int state);
extern  Uint32  SDL_RegisterEvents(int numevents);
extern  char * SDL_GetBasePath(void);
extern  char * SDL_GetPrefPath(const char *org, const char *app);
struct _SDL_Haptic;
typedef struct _SDL_Haptic SDL_Haptic;
typedef struct SDL_HapticDirection
{
    Uint8 type;
    Sint32 dir[3];
} SDL_HapticDirection;
typedef struct SDL_HapticConstant
{
    Uint16 type;
    SDL_HapticDirection direction;
    Uint32 length;
    Uint16 delay;
    Uint16 button;
    Uint16 interval;
    Sint16 level;
    Uint16 attack_length;
    Uint16 attack_level;
    Uint16 fade_length;
    Uint16 fade_level;
} SDL_HapticConstant;
typedef struct SDL_HapticPeriodic
{
    Uint16 type;
    SDL_HapticDirection direction;
    Uint32 length;
    Uint16 delay;
    Uint16 button;
    Uint16 interval;
    Uint16 period;
    Sint16 magnitude;
    Sint16 offset;
    Uint16 phase;
    Uint16 attack_length;
    Uint16 attack_level;
    Uint16 fade_length;
    Uint16 fade_level;
} SDL_HapticPeriodic;
typedef struct SDL_HapticCondition
{
    Uint16 type;
    SDL_HapticDirection direction;
    Uint32 length;
    Uint16 delay;
    Uint16 button;
    Uint16 interval;
    Uint16 right_sat[3];
    Uint16 left_sat[3];
    Sint16 right_coeff[3];
    Sint16 left_coeff[3];
    Uint16 deadband[3];
    Sint16 center[3];
} SDL_HapticCondition;
typedef struct SDL_HapticRamp
{
    Uint16 type;
    SDL_HapticDirection direction;
    Uint32 length;
    Uint16 delay;
    Uint16 button;
    Uint16 interval;
    Sint16 start;
    Sint16 end;
    Uint16 attack_length;
    Uint16 attack_level;
    Uint16 fade_length;
    Uint16 fade_level;
} SDL_HapticRamp;
typedef struct SDL_HapticLeftRight
{
    Uint16 type;
    Uint32 length;
    Uint16 large_magnitude;
    Uint16 small_magnitude;
} SDL_HapticLeftRight;
typedef struct SDL_HapticCustom
{
    Uint16 type;
    SDL_HapticDirection direction;
    Uint32 length;
    Uint16 delay;
    Uint16 button;
    Uint16 interval;
    Uint8 channels;
    Uint16 period;
    Uint16 samples;
    Uint16 *data;
    Uint16 attack_length;
    Uint16 attack_level;
    Uint16 fade_length;
    Uint16 fade_level;
} SDL_HapticCustom;
typedef union SDL_HapticEffect
{
    Uint16 type;
    SDL_HapticConstant constant;
    SDL_HapticPeriodic periodic;
    SDL_HapticCondition condition;
    SDL_HapticRamp ramp;
    SDL_HapticLeftRight leftright;
    SDL_HapticCustom custom;
} SDL_HapticEffect;
extern  int  SDL_NumHaptics(void);
extern  const char * SDL_HapticName(int device_index);
extern  SDL_Haptic * SDL_HapticOpen(int device_index);
extern  int  SDL_HapticOpened(int device_index);
extern  int  SDL_HapticIndex(SDL_Haptic * haptic);
extern  int  SDL_MouseIsHaptic(void);
extern  SDL_Haptic * SDL_HapticOpenFromMouse(void);
extern  int  SDL_JoystickIsHaptic(SDL_Joystick * joystick);
extern  SDL_Haptic * SDL_HapticOpenFromJoystick(SDL_Joystick *
                                                               joystick);
extern  void  SDL_HapticClose(SDL_Haptic * haptic);
extern  int  SDL_HapticNumEffects(SDL_Haptic * haptic);
extern  int  SDL_HapticNumEffectsPlaying(SDL_Haptic * haptic);
extern  unsigned int  SDL_HapticQuery(SDL_Haptic * haptic);
extern  int  SDL_HapticNumAxes(SDL_Haptic * haptic);
extern  int  SDL_HapticEffectSupported(SDL_Haptic * haptic,
                                                      SDL_HapticEffect *
                                                      effect);
extern  int  SDL_HapticNewEffect(SDL_Haptic * haptic,
                                                SDL_HapticEffect * effect);
extern  int  SDL_HapticUpdateEffect(SDL_Haptic * haptic,
                                                   int effect,
                                                   SDL_HapticEffect * data);
extern  int  SDL_HapticRunEffect(SDL_Haptic * haptic,
                                                int effect,
                                                Uint32 iterations);
extern  int  SDL_HapticStopEffect(SDL_Haptic * haptic,
                                                 int effect);
extern  void  SDL_HapticDestroyEffect(SDL_Haptic * haptic,
                                                     int effect);
extern  int  SDL_HapticGetEffectStatus(SDL_Haptic * haptic,
                                                      int effect);
extern  int  SDL_HapticSetGain(SDL_Haptic * haptic, int gain);
extern  int  SDL_HapticSetAutocenter(SDL_Haptic * haptic,
                                                    int autocenter);
extern  int  SDL_HapticPause(SDL_Haptic * haptic);
extern  int  SDL_HapticUnpause(SDL_Haptic * haptic);
extern  int  SDL_HapticStopAll(SDL_Haptic * haptic);
extern  int  SDL_HapticRumbleSupported(SDL_Haptic * haptic);
extern  int  SDL_HapticRumbleInit(SDL_Haptic * haptic);
extern  int  SDL_HapticRumblePlay(SDL_Haptic * haptic, float strength, Uint32 length );
extern  int  SDL_HapticRumbleStop(SDL_Haptic * haptic);
struct SDL_hid_device_;
typedef struct SDL_hid_device_ SDL_hid_device;
typedef struct SDL_hid_device_info
{
    char *path;
    unsigned short vendor_id;
    unsigned short product_id;
    wchar_t *serial_number;
    unsigned short release_number;
    wchar_t *manufacturer_string;
    wchar_t *product_string;
    unsigned short usage_page;
    unsigned short usage;
    int interface_number;
    int interface_class;
    int interface_subclass;
    int interface_protocol;
    struct SDL_hid_device_info *next;
} SDL_hid_device_info;
extern  int  SDL_hid_init(void);
extern  int  SDL_hid_exit(void);
extern  Uint32  SDL_hid_device_change_count(void);
extern  SDL_hid_device_info *  SDL_hid_enumerate(unsigned short vendor_id, unsigned short product_id);
extern  void  SDL_hid_free_enumeration(SDL_hid_device_info *devs);
extern  SDL_hid_device *  SDL_hid_open(unsigned short vendor_id, unsigned short product_id, const wchar_t *serial_number);
extern  SDL_hid_device *  SDL_hid_open_path(const char *path, int bExclusive);
extern  int  SDL_hid_write(SDL_hid_device *dev, const unsigned char *data, size_t length);
extern  int  SDL_hid_read_timeout(SDL_hid_device *dev, unsigned char *data, size_t length, int milliseconds);
extern  int  SDL_hid_read(SDL_hid_device *dev, unsigned char *data, size_t length);
extern  int  SDL_hid_set_nonblocking(SDL_hid_device *dev, int nonblock);
extern  int  SDL_hid_send_feature_report(SDL_hid_device *dev, const unsigned char *data, size_t length);
extern  int  SDL_hid_get_feature_report(SDL_hid_device *dev, unsigned char *data, size_t length);
extern  void  SDL_hid_close(SDL_hid_device *dev);
extern  int  SDL_hid_get_manufacturer_string(SDL_hid_device *dev, wchar_t *string, size_t maxlen);
extern  int  SDL_hid_get_product_string(SDL_hid_device *dev, wchar_t *string, size_t maxlen);
extern  int  SDL_hid_get_serial_number_string(SDL_hid_device *dev, wchar_t *string, size_t maxlen);
extern  int  SDL_hid_get_indexed_string(SDL_hid_device *dev, int string_index, wchar_t *string, size_t maxlen);
extern  void  SDL_hid_ble_scan(SDL_bool active);
typedef enum
{
    SDL_HINT_DEFAULT,
    SDL_HINT_NORMAL,
    SDL_HINT_OVERRIDE
} SDL_HintPriority;
extern  SDL_bool  SDL_SetHintWithPriority(const char *name,
                                                         const char *value,
                                                         SDL_HintPriority priority);
extern  SDL_bool  SDL_SetHint(const char *name,
                                             const char *value);
extern  SDL_bool  SDL_ResetHint(const char *name);
extern  void  SDL_ResetHints(void);
extern  const char *  SDL_GetHint(const char *name);
extern  SDL_bool  SDL_GetHintBoolean(const char *name, SDL_bool default_value);
typedef void ( *SDL_HintCallback)(void *userdata, const char *name, const char *oldValue, const char *newValue);
extern  void  SDL_AddHintCallback(const char *name,
                                                 SDL_HintCallback callback,
                                                 void *userdata);
extern  void  SDL_DelHintCallback(const char *name,
                                                 SDL_HintCallback callback,
                                                 void *userdata);
extern  void  SDL_ClearHints(void);
extern  void * SDL_LoadObject(const char *sofile);
extern  void * SDL_LoadFunction(void *handle,
                                               const char *name);
extern  void  SDL_UnloadObject(void *handle);
typedef enum
{
    SDL_LOG_CATEGORY_APPLICATION,
    SDL_LOG_CATEGORY_ERROR,
    SDL_LOG_CATEGORY_ASSERT,
    SDL_LOG_CATEGORY_SYSTEM,
    SDL_LOG_CATEGORY_AUDIO,
    SDL_LOG_CATEGORY_VIDEO,
    SDL_LOG_CATEGORY_RENDER,
    SDL_LOG_CATEGORY_INPUT,
    SDL_LOG_CATEGORY_TEST,
    SDL_LOG_CATEGORY_RESERVED1,
    SDL_LOG_CATEGORY_RESERVED2,
    SDL_LOG_CATEGORY_RESERVED3,
    SDL_LOG_CATEGORY_RESERVED4,
    SDL_LOG_CATEGORY_RESERVED5,
    SDL_LOG_CATEGORY_RESERVED6,
    SDL_LOG_CATEGORY_RESERVED7,
    SDL_LOG_CATEGORY_RESERVED8,
    SDL_LOG_CATEGORY_RESERVED9,
    SDL_LOG_CATEGORY_RESERVED10,
    SDL_LOG_CATEGORY_CUSTOM
} SDL_LogCategory;
typedef enum
{
    SDL_LOG_PRIORITY_VERBOSE = 1,
    SDL_LOG_PRIORITY_DEBUG,
    SDL_LOG_PRIORITY_INFO,
    SDL_LOG_PRIORITY_WARN,
    SDL_LOG_PRIORITY_ERROR,
    SDL_LOG_PRIORITY_CRITICAL,
    SDL_NUM_LOG_PRIORITIES
} SDL_LogPriority;
extern  void  SDL_LogSetAllPriority(SDL_LogPriority priority);
extern  void  SDL_LogSetPriority(int category,
                                                SDL_LogPriority priority);
extern  SDL_LogPriority  SDL_LogGetPriority(int category);
extern  void  SDL_LogResetPriorities(void);
extern  void  SDL_Log( const char *fmt, ...) ;
extern  void  SDL_LogVerbose(int category,  const char *fmt, ...) ;
extern  void  SDL_LogDebug(int category,  const char *fmt, ...) ;
extern  void  SDL_LogInfo(int category,  const char *fmt, ...) ;
extern  void  SDL_LogWarn(int category,  const char *fmt, ...) ;
extern  void  SDL_LogError(int category,  const char *fmt, ...) ;
extern  void  SDL_LogCritical(int category,  const char *fmt, ...) ;
extern  void  SDL_LogMessage(int category,
                                            SDL_LogPriority priority,
                                             const char *fmt, ...) ;
extern  void  SDL_LogMessageV(int category,
                                             SDL_LogPriority priority,
                                             const char *fmt, va_list ap);
typedef void ( *SDL_LogOutputFunction)(void *userdata, int category, SDL_LogPriority priority, const char *message);
extern  void  SDL_LogGetOutputFunction(SDL_LogOutputFunction *callback, void **userdata);
extern  void  SDL_LogSetOutputFunction(SDL_LogOutputFunction callback, void *userdata);
typedef enum
{
    SDL_MESSAGEBOX_ERROR                 = 0x00000010,
    SDL_MESSAGEBOX_WARNING               = 0x00000020,
    SDL_MESSAGEBOX_INFORMATION           = 0x00000040,
    SDL_MESSAGEBOX_BUTTONS_LEFT_TO_RIGHT = 0x00000080,
    SDL_MESSAGEBOX_BUTTONS_RIGHT_TO_LEFT = 0x00000100
} SDL_MessageBoxFlags;
typedef enum
{
    SDL_MESSAGEBOX_BUTTON_RETURNKEY_DEFAULT = 0x00000001,
    SDL_MESSAGEBOX_BUTTON_ESCAPEKEY_DEFAULT = 0x00000002
} SDL_MessageBoxButtonFlags;
typedef struct
{
    Uint32 flags;
    int buttonid;
    const char * text;
} SDL_MessageBoxButtonData;
typedef struct
{
    Uint8 r, g, b;
} SDL_MessageBoxColor;
typedef enum
{
    SDL_MESSAGEBOX_COLOR_BACKGROUND,
    SDL_MESSAGEBOX_COLOR_TEXT,
    SDL_MESSAGEBOX_COLOR_BUTTON_BORDER,
    SDL_MESSAGEBOX_COLOR_BUTTON_BACKGROUND,
    SDL_MESSAGEBOX_COLOR_BUTTON_SELECTED,
    SDL_MESSAGEBOX_COLOR_MAX
} SDL_MessageBoxColorType;
typedef struct
{
    SDL_MessageBoxColor colors[SDL_MESSAGEBOX_COLOR_MAX];
} SDL_MessageBoxColorScheme;
typedef struct
{
    Uint32 flags;
    SDL_Window *window;
    const char *title;
    const char *message;
    int numbuttons;
    const SDL_MessageBoxButtonData *buttons;
    const SDL_MessageBoxColorScheme *colorScheme;
} SDL_MessageBoxData;
extern  int  SDL_ShowMessageBox(const SDL_MessageBoxData *messageboxdata, int *buttonid);
extern  int  SDL_ShowSimpleMessageBox(Uint32 flags, const char *title, const char *message, SDL_Window *window);
typedef void *SDL_MetalView;
extern  SDL_MetalView  SDL_Metal_CreateView(SDL_Window * window);
extern  void  SDL_Metal_DestroyView(SDL_MetalView view);
extern  void * SDL_Metal_GetLayer(SDL_MetalView view);
extern  void  SDL_Metal_GetDrawableSize(SDL_Window* window, int *w,
                                                       int *h);
typedef enum
{
    SDL_POWERSTATE_UNKNOWN,
    SDL_POWERSTATE_ON_BATTERY,
    SDL_POWERSTATE_NO_BATTERY,
    SDL_POWERSTATE_CHARGING,
    SDL_POWERSTATE_CHARGED
} SDL_PowerState;
extern  SDL_PowerState  SDL_GetPowerInfo(int *seconds, int *percent);
typedef enum
{
    SDL_RENDERER_SOFTWARE = 0x00000001,
    SDL_RENDERER_ACCELERATED = 0x00000002,
    SDL_RENDERER_PRESENTVSYNC = 0x00000004,
    SDL_RENDERER_TARGETTEXTURE = 0x00000008
} SDL_RendererFlags;
typedef struct SDL_RendererInfo
{
    const char *name;
    Uint32 flags;
    Uint32 num_texture_formats;
    Uint32 texture_formats[16];
    int max_texture_width;
    int max_texture_height;
} SDL_RendererInfo;
typedef struct SDL_Vertex
{
    SDL_FPoint position;
    SDL_Color  color;
    SDL_FPoint tex_coord;
} SDL_Vertex;
typedef enum
{
    SDL_ScaleModeNearest,
    SDL_ScaleModeLinear,
    SDL_ScaleModeBest
} SDL_ScaleMode;
typedef enum
{
    SDL_TEXTUREACCESS_STATIC,
    SDL_TEXTUREACCESS_STREAMING,
    SDL_TEXTUREACCESS_TARGET
} SDL_TextureAccess;
typedef enum
{
    SDL_TEXTUREMODULATE_NONE = 0x00000000,
    SDL_TEXTUREMODULATE_COLOR = 0x00000001,
    SDL_TEXTUREMODULATE_ALPHA = 0x00000002
} SDL_TextureModulate;
typedef enum
{
    SDL_FLIP_NONE = 0x00000000,
    SDL_FLIP_HORIZONTAL = 0x00000001,
    SDL_FLIP_VERTICAL = 0x00000002
} SDL_RendererFlip;
struct SDL_Renderer;
typedef struct SDL_Renderer SDL_Renderer;
struct SDL_Texture;
typedef struct SDL_Texture SDL_Texture;
extern  int  SDL_GetNumRenderDrivers(void);
extern  int  SDL_GetRenderDriverInfo(int index,
                                                    SDL_RendererInfo * info);
extern  int  SDL_CreateWindowAndRenderer(
                                int width, int height, Uint32 window_flags,
                                SDL_Window **window, SDL_Renderer **renderer);
extern  SDL_Renderer *  SDL_CreateRenderer(SDL_Window * window,
                                               int index, Uint32 flags);
extern  SDL_Renderer *  SDL_CreateSoftwareRenderer(SDL_Surface * surface);
extern  SDL_Renderer *  SDL_GetRenderer(SDL_Window * window);
extern  SDL_Window *  SDL_RenderGetWindow(SDL_Renderer *renderer);
extern  int  SDL_GetRendererInfo(SDL_Renderer * renderer,
                                                SDL_RendererInfo * info);
extern  int  SDL_GetRendererOutputSize(SDL_Renderer * renderer,
                                                      int *w, int *h);
extern  SDL_Texture *  SDL_CreateTexture(SDL_Renderer * renderer,
                                                        Uint32 format,
                                                        int access, int w,
                                                        int h);
extern  SDL_Texture *  SDL_CreateTextureFromSurface(SDL_Renderer * renderer, SDL_Surface * surface);
extern  int  SDL_QueryTexture(SDL_Texture * texture,
                                             Uint32 * format, int *access,
                                             int *w, int *h);
extern  int  SDL_SetTextureColorMod(SDL_Texture * texture,
                                                   Uint8 r, Uint8 g, Uint8 b);
extern  int  SDL_GetTextureColorMod(SDL_Texture * texture,
                                                   Uint8 * r, Uint8 * g,
                                                   Uint8 * b);
extern  int  SDL_SetTextureAlphaMod(SDL_Texture * texture,
                                                   Uint8 alpha);
extern  int  SDL_GetTextureAlphaMod(SDL_Texture * texture,
                                                   Uint8 * alpha);
extern  int  SDL_SetTextureBlendMode(SDL_Texture * texture,
                                                    SDL_BlendMode blendMode);
extern  int  SDL_GetTextureBlendMode(SDL_Texture * texture,
                                                    SDL_BlendMode *blendMode);
extern  int  SDL_SetTextureScaleMode(SDL_Texture * texture,
                                                    SDL_ScaleMode scaleMode);
extern  int  SDL_GetTextureScaleMode(SDL_Texture * texture,
                                                    SDL_ScaleMode *scaleMode);
extern  int  SDL_SetTextureUserData(SDL_Texture * texture,
                                                   void *userdata);
extern  void *  SDL_GetTextureUserData(SDL_Texture * texture);
extern  int  SDL_UpdateTexture(SDL_Texture * texture,
                                              const SDL_Rect * rect,
                                              const void *pixels, int pitch);
extern  int  SDL_UpdateYUVTexture(SDL_Texture * texture,
                                                 const SDL_Rect * rect,
                                                 const Uint8 *Yplane, int Ypitch,
                                                 const Uint8 *Uplane, int Upitch,
                                                 const Uint8 *Vplane, int Vpitch);
extern  int  SDL_UpdateNVTexture(SDL_Texture * texture,
                                                 const SDL_Rect * rect,
                                                 const Uint8 *Yplane, int Ypitch,
                                                 const Uint8 *UVplane, int UVpitch);
extern  int  SDL_LockTexture(SDL_Texture * texture,
                                            const SDL_Rect * rect,
                                            void **pixels, int *pitch);
extern  int  SDL_LockTextureToSurface(SDL_Texture *texture,
                                            const SDL_Rect *rect,
                                            SDL_Surface **surface);
extern  void  SDL_UnlockTexture(SDL_Texture * texture);
extern  SDL_bool  SDL_RenderTargetSupported(SDL_Renderer *renderer);
extern  int  SDL_SetRenderTarget(SDL_Renderer *renderer,
                                                SDL_Texture *texture);
extern  SDL_Texture *  SDL_GetRenderTarget(SDL_Renderer *renderer);
extern  int  SDL_RenderSetLogicalSize(SDL_Renderer * renderer, int w, int h);
extern  void  SDL_RenderGetLogicalSize(SDL_Renderer * renderer, int *w, int *h);
extern  int  SDL_RenderSetIntegerScale(SDL_Renderer * renderer,
                                                      SDL_bool enable);
extern  SDL_bool  SDL_RenderGetIntegerScale(SDL_Renderer * renderer);
extern  int  SDL_RenderSetViewport(SDL_Renderer * renderer,
                                                  const SDL_Rect * rect);
extern  void  SDL_RenderGetViewport(SDL_Renderer * renderer,
                                                   SDL_Rect * rect);
extern  int  SDL_RenderSetClipRect(SDL_Renderer * renderer,
                                                  const SDL_Rect * rect);
extern  void  SDL_RenderGetClipRect(SDL_Renderer * renderer,
                                                   SDL_Rect * rect);
extern  SDL_bool  SDL_RenderIsClipEnabled(SDL_Renderer * renderer);
extern  int  SDL_RenderSetScale(SDL_Renderer * renderer,
                                               float scaleX, float scaleY);
extern  void  SDL_RenderGetScale(SDL_Renderer * renderer,
                                               float *scaleX, float *scaleY);
extern  void  SDL_RenderWindowToLogical(SDL_Renderer * renderer,
                                                            int windowX, int windowY,
                                                            float *logicalX, float *logicalY);
extern  void  SDL_RenderLogicalToWindow(SDL_Renderer * renderer,
                                                            float logicalX, float logicalY,
                                                            int *windowX, int *windowY);
extern  int  SDL_SetRenderDrawColor(SDL_Renderer * renderer,
                                           Uint8 r, Uint8 g, Uint8 b,
                                           Uint8 a);
extern  int  SDL_GetRenderDrawColor(SDL_Renderer * renderer,
                                           Uint8 * r, Uint8 * g, Uint8 * b,
                                           Uint8 * a);
extern  int  SDL_SetRenderDrawBlendMode(SDL_Renderer * renderer,
                                                       SDL_BlendMode blendMode);
extern  int  SDL_GetRenderDrawBlendMode(SDL_Renderer * renderer,
                                                       SDL_BlendMode *blendMode);
extern  int  SDL_RenderClear(SDL_Renderer * renderer);
extern  int  SDL_RenderDrawPoint(SDL_Renderer * renderer,
                                                int x, int y);
extern  int  SDL_RenderDrawPoints(SDL_Renderer * renderer,
                                                 const SDL_Point * points,
                                                 int count);
extern  int  SDL_RenderDrawLine(SDL_Renderer * renderer,
                                               int x1, int y1, int x2, int y2);
extern  int  SDL_RenderDrawLines(SDL_Renderer * renderer,
                                                const SDL_Point * points,
                                                int count);
extern  int  SDL_RenderDrawRect(SDL_Renderer * renderer,
                                               const SDL_Rect * rect);
extern  int  SDL_RenderDrawRects(SDL_Renderer * renderer,
                                                const SDL_Rect * rects,
                                                int count);
extern  int  SDL_RenderFillRect(SDL_Renderer * renderer,
                                               const SDL_Rect * rect);
extern  int  SDL_RenderFillRects(SDL_Renderer * renderer,
                                                const SDL_Rect * rects,
                                                int count);
extern  int  SDL_RenderCopy(SDL_Renderer * renderer,
                                           SDL_Texture * texture,
                                           const SDL_Rect * srcrect,
                                           const SDL_Rect * dstrect);
extern  int  SDL_RenderCopyEx(SDL_Renderer * renderer,
                                           SDL_Texture * texture,
                                           const SDL_Rect * srcrect,
                                           const SDL_Rect * dstrect,
                                           const double angle,
                                           const SDL_Point *center,
                                           const SDL_RendererFlip flip);
extern  int  SDL_RenderDrawPointF(SDL_Renderer * renderer,
                                                 float x, float y);
extern  int  SDL_RenderDrawPointsF(SDL_Renderer * renderer,
                                                  const SDL_FPoint * points,
                                                  int count);
extern  int  SDL_RenderDrawLineF(SDL_Renderer * renderer,
                                                float x1, float y1, float x2, float y2);
extern  int  SDL_RenderDrawLinesF(SDL_Renderer * renderer,
                                                 const SDL_FPoint * points,
                                                 int count);
extern  int  SDL_RenderDrawRectF(SDL_Renderer * renderer,
                                                const SDL_FRect * rect);
extern  int  SDL_RenderDrawRectsF(SDL_Renderer * renderer,
                                                 const SDL_FRect * rects,
                                                 int count);
extern  int  SDL_RenderFillRectF(SDL_Renderer * renderer,
                                                const SDL_FRect * rect);
extern  int  SDL_RenderFillRectsF(SDL_Renderer * renderer,
                                                 const SDL_FRect * rects,
                                                 int count);
extern  int  SDL_RenderCopyF(SDL_Renderer * renderer,
                                            SDL_Texture * texture,
                                            const SDL_Rect * srcrect,
                                            const SDL_FRect * dstrect);
extern  int  SDL_RenderCopyExF(SDL_Renderer * renderer,
                                            SDL_Texture * texture,
                                            const SDL_Rect * srcrect,
                                            const SDL_FRect * dstrect,
                                            const double angle,
                                            const SDL_FPoint *center,
                                            const SDL_RendererFlip flip);
extern  int  SDL_RenderGeometry(SDL_Renderer *renderer,
                                               SDL_Texture *texture,
                                               const SDL_Vertex *vertices, int num_vertices,
                                               const int *indices, int num_indices);
extern  int  SDL_RenderGeometryRaw(SDL_Renderer *renderer,
                                               SDL_Texture *texture,
                                               const float *xy, int xy_stride,
                                               const SDL_Color *color, int color_stride,
                                               const float *uv, int uv_stride,
                                               int num_vertices,
                                               const void *indices, int num_indices, int size_indices);
extern  int  SDL_RenderReadPixels(SDL_Renderer * renderer,
                                                 const SDL_Rect * rect,
                                                 Uint32 format,
                                                 void *pixels, int pitch);
extern  void  SDL_RenderPresent(SDL_Renderer * renderer);
extern  void  SDL_DestroyTexture(SDL_Texture * texture);
extern  void  SDL_DestroyRenderer(SDL_Renderer * renderer);
extern  int  SDL_RenderFlush(SDL_Renderer * renderer);
extern  int  SDL_GL_BindTexture(SDL_Texture *texture, float *texw, float *texh);
extern  int  SDL_GL_UnbindTexture(SDL_Texture *texture);
extern  void * SDL_RenderGetMetalLayer(SDL_Renderer * renderer);
extern  void * SDL_RenderGetMetalCommandEncoder(SDL_Renderer * renderer);
extern  int  SDL_RenderSetVSync(SDL_Renderer* renderer, int vsync);
extern  SDL_Window *  SDL_CreateShapedWindow(const char *title,unsigned int x,unsigned int y,unsigned int w,unsigned int h,Uint32 flags);
extern  SDL_bool  SDL_IsShapedWindow(const SDL_Window *window);
typedef enum {
    ShapeModeDefault,
    ShapeModeBinarizeAlpha,
    ShapeModeReverseBinarizeAlpha,
    ShapeModeColorKey
} WindowShapeMode;
typedef union {
    Uint8 binarizationCutoff;
    SDL_Color colorKey;
} SDL_WindowShapeParams;
typedef struct SDL_WindowShapeMode {
    WindowShapeMode mode;
    SDL_WindowShapeParams parameters;
} SDL_WindowShapeMode;
extern  int  SDL_SetWindowShape(SDL_Window *window,SDL_Surface *shape,SDL_WindowShapeMode *shape_mode);
extern  int  SDL_GetShapedWindowMode(SDL_Window *window,SDL_WindowShapeMode *shape_mode);
typedef void ( * SDL_WindowsMessageHook)(void *userdata, void *hWnd, unsigned int message, Uint64 wParam, Sint64 lParam);
extern  void  SDL_SetWindowsMessageHook(SDL_WindowsMessageHook callback, void *userdata);
extern  int  SDL_Direct3D9GetAdapterIndex( int displayIndex );
typedef struct IDirect3DDevice9 IDirect3DDevice9;
extern  IDirect3DDevice9*  SDL_RenderGetD3D9Device(SDL_Renderer * renderer);
typedef struct ID3D11Device ID3D11Device;
extern  ID3D11Device*  SDL_RenderGetD3D11Device(SDL_Renderer * renderer);
typedef struct ID3D12Device ID3D12Device;
extern  ID3D12Device*  SDL_RenderGetD3D12Device(SDL_Renderer* renderer);
extern  SDL_bool  SDL_DXGIGetOutputInfo( int displayIndex, int *adapterIndex, int *outputIndex );
extern  int  SDL_LinuxSetThreadPriority(Sint64 threadID, int priority);
extern  int  SDL_LinuxSetThreadPriorityAndPolicy(Sint64 threadID, int sdlPriority, int schedPolicy);
extern  SDL_bool  SDL_IsTablet(void);
extern  void  SDL_OnApplicationWillTerminate(void);
extern  void  SDL_OnApplicationDidReceiveMemoryWarning(void);
extern  void  SDL_OnApplicationWillResignActive(void);
extern  void  SDL_OnApplicationDidEnterBackground(void);
extern  void  SDL_OnApplicationWillEnterForeground(void);
extern  void  SDL_OnApplicationDidBecomeActive(void);
extern  Uint32  SDL_GetTicks(void);
extern  Uint64  SDL_GetTicks64(void);
extern  Uint64  SDL_GetPerformanceCounter(void);
extern  Uint64  SDL_GetPerformanceFrequency(void);
extern  void  SDL_Delay(Uint32 ms);
typedef Uint32 ( * SDL_TimerCallback) (Uint32 interval, void *param);
typedef int SDL_TimerID;
extern  SDL_TimerID  SDL_AddTimer(Uint32 interval,
                                                 SDL_TimerCallback callback,
                                                 void *param);
extern  SDL_bool  SDL_RemoveTimer(SDL_TimerID id);
typedef struct SDL_version
{
    Uint8 major;
    Uint8 minor;
    Uint8 patch;
} SDL_version;
extern  void  SDL_GetVersion(SDL_version * ver);
extern  const char * SDL_GetRevision(void);
extern   int  SDL_GetRevisionNumber(void);
typedef struct SDL_Locale
{
    const char *language;
    const char *country;
} SDL_Locale;
extern  SDL_Locale *  SDL_GetPreferredLocales(void);
extern  int  SDL_OpenURL(const char *url);
extern  int  SDL_Init(Uint32 flags);
extern  int  SDL_InitSubSystem(Uint32 flags);
extern  void  SDL_QuitSubSystem(Uint32 flags);
extern  Uint32  SDL_WasInit(Uint32 flags);
extern  void  SDL_Quit(void);