<?php

declare(strict_types=1);

namespace Jascha030\LiveTheme\Model;

use Jascha030\LiveTheme\Model\Theme\ColorNotation;
use Jascha030\LiveTheme\Util\Color;
use Symfony\Component\Serializer\Annotation\Ignore;
use Symfony\Component\Serializer\Annotation\SerializedName;
use function array_map;
use function count;
use function is_float;
use function is_numeric;

class ColorValue extends Value
{
    #[SerializedName('R')]
    private Value|null $red = null;

    #[SerializedName('G')]
    private Value|null $green = null;

    #[SerializedName('B')]
    private Value|null $blue = null;

    #[SerializedName('Alpha')]
    private Value|null $alpha = null;

    public function getRed(): ?Value
    {
        return $this->red;
    }

    public function setRed(?Value $red): self
    {
        $this->red = $red;

        return $this;
    }

    public function getGreen(): ?Value
    {
        return $this->green;
    }

    public function setGreen(?Value $green): self
    {
        $this->green = $green;

        return $this;
    }

    public function getBlue(): ?Value
    {
        return $this->blue;
    }

    public function setBlue(?Value $blue): self
    {
        $this->blue = $blue;

        return $this;
    }

    public function getAlpha(): ?Value
    {
        return $this->alpha;
    }

    public function setAlpha(?Value $alpha): self
    {
        $this->alpha = $alpha;

        return $this;
    }

    #[Ignore]
    public function getType(): ColorNotation
    {
        $numeric = array_map(
            static fn(?Value $v) => null !== $v && is_numeric($v->getValue()),
            [
                $this->getRed(),
                $this->getGreen(),
                $this->getBlue(),
                $this->getAlpha(),
            ]
        );

        if (count($numeric) >= 4) {
            return ColorNotation::RGBA;
        }

        if (count($numeric) === 3) {
            return ColorNotation::RGB;
        }

        if ($this->getValue() !== null && str_starts_with($this->getValue(), '#')) {
            return ColorNotation::HEX;
        }
    }

    public function asHex(): Value
    {
        $v = new Value();

        $hex = match (true) {
            is_float($this->getValue()),
                is_numeric($this->getValue())
                && !str_starts_with((string)$this->getValue(), '#') => $this->getValue(),
            $this->getType() === ColorNotation::HEX                 => $this->getValue(),
            $this->getType() === ColorNotation::RGBA                => Color::rgbaToHex(
                $this->getRed()?->getValue(),
                $this->getGreen()?->getValue(),
                $this->getBlue()?->getValue(),
                $this->getAlpha()?->getValue()
            ),
            $this->getType() === ColorNotation::RGB                 => Color::rgbToHex(
                $this->getRed()?->getValue(),
                $this->getGreen()?->getValue(),
                $this->getBlue()?->getValue()
            ),
            default                                                 => null,
        };

        if ($hex === null) {
            throw new \InvalidArgumentException('Invalid color value type, could not be converted to hex.');
        }

        $v->setValue($hex);

        return $v;
    }
}
