<?php

declare(strict_types=1);

namespace Serafim\SDL\Kernel\Video;

interface PixelFormat
{
    public const SDL_PIXELFORMAT_UNKNOWN = 0;
    public const SDL_PIXELFORMAT_INDEX1LSB = (1 << 28) | (PixelType::SDL_PIXELTYPE_INDEX1 << 24) | (BitMapOrder::SDL_BITMAPORDER_4321 << 20) | (0 << 16) | (1 << 8) | (0 << 0);
    public const SDL_PIXELFORMAT_INDEX1MSB = (1 << 28) | (PixelType::SDL_PIXELTYPE_INDEX1 << 24) | (BitMapOrder::SDL_BITMAPORDER_1234 << 20) | (0 << 16) | (1 << 8) | (0 << 0);
    public const SDL_PIXELFORMAT_INDEX4LSB = (1 << 28) | (PixelType::SDL_PIXELTYPE_INDEX4 << 24) | (BitMapOrder::SDL_BITMAPORDER_4321 << 20) | (0 << 16) | (4 << 8) | (0 << 0);
    public const SDL_PIXELFORMAT_INDEX4MSB = (1 << 28) | (PixelType::SDL_PIXELTYPE_INDEX4 << 24) | (BitMapOrder::SDL_BITMAPORDER_1234 << 20) | (0 << 16) | (4 << 8) | (0 << 0);
    public const SDL_PIXELFORMAT_INDEX8 = (1 << 28) | (PixelType::SDL_PIXELTYPE_INDEX8 << 24) | (0 << 20) | (0 << 16) | (8 << 8) | (1 << 0);
    public const SDL_PIXELFORMAT_RGB332 = (1 << 28) | (PixelType::SDL_PIXELTYPE_PACKED8 << 24) | (PackedOrder::SDL_PACKEDORDER_XRGB << 20) | (PackedLayout::SDL_PACKEDLAYOUT_332 << 16) | (8 << 8) | (1 << 0);
    public const SDL_PIXELFORMAT_RGB444 = (1 << 28) | (PixelType::SDL_PIXELTYPE_PACKED16 << 24) | (PackedOrder::SDL_PACKEDORDER_XRGB << 20) | (PackedLayout::SDL_PACKEDLAYOUT_4444 << 16) | (12 << 8) | (2 << 0);
    public const SDL_PIXELFORMAT_RGB555 = (1 << 28) | (PixelType::SDL_PIXELTYPE_PACKED16 << 24) | (PackedOrder::SDL_PACKEDORDER_XRGB << 20) | (PackedLayout::SDL_PACKEDLAYOUT_1555 << 16) | (15 << 8) | (2 << 0);
    public const SDL_PIXELFORMAT_BGR555 = (1 << 28) | (PixelType::SDL_PIXELTYPE_PACKED16 << 24) | (PackedOrder::SDL_PACKEDORDER_XBGR << 20) | (PackedLayout::SDL_PACKEDLAYOUT_1555 << 16) | (15 << 8) | (2 << 0);
    public const SDL_PIXELFORMAT_ARGB4444 = (1 << 28) | (PixelType::SDL_PIXELTYPE_PACKED16 << 24) | (PackedOrder::SDL_PACKEDORDER_ARGB << 20) | (PackedLayout::SDL_PACKEDLAYOUT_4444 << 16) | (16 << 8) | (2 << 0);
    public const SDL_PIXELFORMAT_RGBA4444 = (1 << 28) | (PixelType::SDL_PIXELTYPE_PACKED16 << 24) | (PackedOrder::SDL_PACKEDORDER_RGBA << 20) | (PackedLayout::SDL_PACKEDLAYOUT_4444 << 16) | (16 << 8) | (2 << 0);
    public const SDL_PIXELFORMAT_ABGR4444 = (1 << 28) | (PixelType::SDL_PIXELTYPE_PACKED16 << 24) | (PackedOrder::SDL_PACKEDORDER_ABGR << 20) | (PackedLayout::SDL_PACKEDLAYOUT_4444 << 16) | (16 << 8) | (2 << 0);
    public const SDL_PIXELFORMAT_BGRA4444 = (1 << 28) | (PixelType::SDL_PIXELTYPE_PACKED16 << 24) | (PackedOrder::SDL_PACKEDORDER_BGRA << 20) | (PackedLayout::SDL_PACKEDLAYOUT_4444 << 16) | (16 << 8) | (2 << 0);
    public const SDL_PIXELFORMAT_ARGB1555 = (1 << 28) | (PixelType::SDL_PIXELTYPE_PACKED16 << 24) | (PackedOrder::SDL_PACKEDORDER_ARGB << 20) | (PackedLayout::SDL_PACKEDLAYOUT_1555 << 16) | (16 << 8) | (2 << 0);
    public const SDL_PIXELFORMAT_RGBA5551 = (1 << 28) | (PixelType::SDL_PIXELTYPE_PACKED16 << 24) | (PackedOrder::SDL_PACKEDORDER_RGBA << 20) | (PackedLayout::SDL_PACKEDLAYOUT_5551 << 16) | (16 << 8) | (2 << 0);
    public const SDL_PIXELFORMAT_ABGR1555 = (1 << 28) | (PixelType::SDL_PIXELTYPE_PACKED16 << 24) | (PackedOrder::SDL_PACKEDORDER_ABGR << 20) | (PackedLayout::SDL_PACKEDLAYOUT_1555 << 16) | (16 << 8) | (2 << 0);
    public const SDL_PIXELFORMAT_BGRA5551 = (1 << 28) | (PixelType::SDL_PIXELTYPE_PACKED16 << 24) | (PackedOrder::SDL_PACKEDORDER_BGRA << 20) | (PackedLayout::SDL_PACKEDLAYOUT_5551 << 16) | (16 << 8) | (2 << 0);
    public const SDL_PIXELFORMAT_RGB565 = (1 << 28) | (PixelType::SDL_PIXELTYPE_PACKED16 << 24) | (PackedOrder::SDL_PACKEDORDER_XRGB << 20) | (PackedLayout::SDL_PACKEDLAYOUT_565 << 16) | (16 << 8) | (2 << 0);
    public const SDL_PIXELFORMAT_BGR565 = (1 << 28) | (PixelType::SDL_PIXELTYPE_PACKED16 << 24) | (PackedOrder::SDL_PACKEDORDER_XBGR << 20) | (PackedLayout::SDL_PACKEDLAYOUT_565 << 16) | (16 << 8) | (2 << 0);
    public const SDL_PIXELFORMAT_RGB24 = (1 << 28) | (PixelType::SDL_PIXELTYPE_ARRAYU8 << 24) | (ArrayOrder::SDL_ARRAYORDER_RGB << 20) | (0 << 16) | (24 << 8) | (3 << 0);
    public const SDL_PIXELFORMAT_BGR24 = (1 << 28) | (PixelType::SDL_PIXELTYPE_ARRAYU8 << 24) | (ArrayOrder::SDL_ARRAYORDER_BGR << 20) | (0 << 16) | (24 << 8) | (3 << 0);
    public const SDL_PIXELFORMAT_RGB888 = (1 << 28) | (PixelType::SDL_PIXELTYPE_PACKED32 << 24) | (PackedOrder::SDL_PACKEDORDER_XRGB << 20) | (PackedLayout::SDL_PACKEDLAYOUT_8888 << 16) | (24 << 8) | (4 << 0);
    public const SDL_PIXELFORMAT_RGBX8888 = (1 << 28) | (PixelType::SDL_PIXELTYPE_PACKED32 << 24) | (PackedOrder::SDL_PACKEDORDER_RGBX << 20) | (PackedLayout::SDL_PACKEDLAYOUT_8888 << 16) | (24 << 8) | (4 << 0);
    public const SDL_PIXELFORMAT_BGR888 = (1 << 28) | (PixelType::SDL_PIXELTYPE_PACKED32 << 24) | (PackedOrder::SDL_PACKEDORDER_XBGR << 20) | (PackedLayout::SDL_PACKEDLAYOUT_8888 << 16) | (24 << 8) | (4 << 0);
    public const SDL_PIXELFORMAT_BGRX8888 = (1 << 28) | (PixelType::SDL_PIXELTYPE_PACKED32 << 24) | (PackedOrder::SDL_PACKEDORDER_BGRX << 20) | (PackedLayout::SDL_PACKEDLAYOUT_8888 << 16) | (24 << 8) | (4 << 0);
    public const SDL_PIXELFORMAT_ARGB8888 = (1 << 28) | (PixelType::SDL_PIXELTYPE_PACKED32 << 24) | (PackedOrder::SDL_PACKEDORDER_ARGB << 20) | (PackedLayout::SDL_PACKEDLAYOUT_8888 << 16) | (32 << 8) | (4 << 0);
    public const SDL_PIXELFORMAT_RGBA8888 = (1 << 28) | (PixelType::SDL_PIXELTYPE_PACKED32 << 24) | (PackedOrder::SDL_PACKEDORDER_RGBA << 20) | (PackedLayout::SDL_PACKEDLAYOUT_8888 << 16) | (32 << 8) | (4 << 0);
    public const SDL_PIXELFORMAT_ABGR8888 = (1 << 28) | (PixelType::SDL_PIXELTYPE_PACKED32 << 24) | (PackedOrder::SDL_PACKEDORDER_ABGR << 20) | (PackedLayout::SDL_PACKEDLAYOUT_8888 << 16) | (32 << 8) | (4 << 0);
    public const SDL_PIXELFORMAT_BGRA8888 = (1 << 28) | (PixelType::SDL_PIXELTYPE_PACKED32 << 24) | (PackedOrder::SDL_PACKEDORDER_BGRA << 20) | (PackedLayout::SDL_PACKEDLAYOUT_8888 << 16) | (32 << 8) | (4 << 0);
    public const SDL_PIXELFORMAT_ARGB2101010 = (1 << 28) | (PixelType::SDL_PIXELTYPE_PACKED32 << 24) | (PackedOrder::SDL_PACKEDORDER_ARGB << 20) | (PackedLayout::SDL_PACKEDLAYOUT_2101010 << 16) | (32 << 8) | (4 << 0);
    public const SDL_PIXELFORMAT_RGBA32 = self::SDL_PIXELFORMAT_ABGR8888;
    public const SDL_PIXELFORMAT_ARGB32 = self::SDL_PIXELFORMAT_BGRA8888;
    public const SDL_PIXELFORMAT_BGRA32 = self::SDL_PIXELFORMAT_ARGB8888;
    public const SDL_PIXELFORMAT_ABGR32 = self::SDL_PIXELFORMAT_RGBA8888;
    //
    public const SDL_PIXELFORMAT_YV12 = 842094169;
    public const SDL_PIXELFORMAT_IYUV = 1448433993;
    public const SDL_PIXELFORMAT_YUY2 = 844715353;
    public const SDL_PIXELFORMAT_UYVY = 1498831189;
    public const SDL_PIXELFORMAT_YVYU = 1431918169;
    public const SDL_PIXELFORMAT_NV12 = 842094158;
    public const SDL_PIXELFORMAT_NV21 = 825382478;
    public const SDL_PIXELFORMAT_EXTERNAL_OES = 542328143;
}
