<?php

declare(strict_types=1);

namespace Jascha030\LiveTheme\Util;

use PHPUnit\Framework\TestCase;

final class ColorTest extends TestCase
{
    private const VALUE_HEX = '#ffffff';

    private const VALUE_RGB = [
        'r' => 255,
        'g' => 255,
        'b' => 255
    ];

    private const VALUE_RGBA = [
        'r' => 255,
        'g' => 255,
        'b' => 255,
        'a' => 255
    ];

    public function testHexToRGB(): void
    {
        self::assertEquals(
            self::VALUE_RGB,
            Color::hexToRgb(self::VALUE_HEX)
        );
    }

    public function testRgbToHex(): void
    {
        self::assertEquals(
            self::VALUE_HEX,
            Color::rgbToHex(...self::VALUE_RGB)
        );
    }

    public function testRgbaToHex(): void
    {
        self::assertEquals(
            self::VALUE_HEX,
            Color::rgbaToHex(...self::VALUE_RGBA)
        );
    }
}
