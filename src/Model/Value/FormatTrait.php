<?php

declare(strict_types=1);

namespace Jascha030\LiveTheme\Model\Value;

use Jascha030\LiveTheme\Model\ColorValue;
use Jascha030\LiveTheme\Model\Theme\ColorNotation;
use Jascha030\LiveTheme\Model\Value;
use function str_starts_with;

trait FormatTrait
{
    private ColorNotation $format = ColorNotation::NONE;

    public function forceHex(): static
    {
        $this->format = ColorNotation::HEX;

        return $this;
    }

    /**
     * @noinspection MultipleReturnStatementsInspection
     */
    private function format(Value|ColorValue|null $value): Value|ColorValue|null
    {
        if ($this->format === ColorNotation::NONE || null === $value) {
            return $value;
        }

        if (!$value instanceof ColorValue) {
            return $value;
        }

        return $value->asHex();
    }
}
