<?php

declare(strict_types=1);

namespace Jascha030\LiveTheme\Util;

use RuntimeException;

use function strlen;

final class Color
{
    public static function rgbToHex(string|int $r, string|int $g, string|int $b): string
    {
        return sprintf('#%02x%02x%02x', $r, $g, $b);
    }

    public static function rgbaToHex(string|int $r, string|int $g, string|int $b, string|int $a): string
    {
        if ((string)$a === '255') {
            return self::rgbToHex($r, $g, $b);
        }

        return sprintf('#%02x%02x%02x%02x', $r, $g, $b, $a);
    }

    /**
     * @return array<string|int, int|null>
     */
    public static function hexToRgb(string $hex): array
    {
        if (! str_starts_with($hex, '#') && 6 === strlen($hex)) {
            $hex = '#' . $hex;
        }

        if (null === sscanf($hex, '#%02x%02x%02x')) {
            throw new RuntimeException('Invalid format for string|int: "' . $hex . '".');
        }

        [$r, $g, $b] = sscanf($hex, '#%02x%02x%02x');

        return compact('r', 'g', 'b');
    }
}
