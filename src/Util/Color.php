<?php

declare(strict_types=1);

namespace Jascha030\LiveTheme\Util;

final class Color
{
    public static function rgbToHex(string $r, string $g, string $b): string
    {
        return sprintf('#%02x%02x%02x', $r, $g, $b);
    }

    /**
     * @return array<string, int|null>
     */
    public static function hexToRGB(string $hex): array
    {
        if (! str_starts_with($hex, '#') && 6 === strlen($hex)) {
            $hex = '#' . $hex;
        }

        if (null === sscanf($hex, '#%02x%02x%02x')) {
            throw new \RuntimeException('Invalid format for string: "' . $hex . '".');
        }

        [$r, $g, $b] = sscanf($hex, '#%02x%02x%02x');

        return compact('r', 'g', 'b');
    }
}
