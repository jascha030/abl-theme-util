<?php

/**
 * @noinspection EmptyClassInspection
 */

declare(strict_types=1);

namespace Jascha030\LiveTheme\Model\Theme;

enum ColorNotation
{
    case HEX;
    case RGBA;
    case RGB;
    case NONE;
}
