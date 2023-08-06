<?php

declare(strict_types=1);

namespace Jascha030\LiveTheme\Model\Property;

use Jascha030\LiveTheme\Model\Property;
use Jascha030\LiveTheme\Util\Color;
use Symfony\Component\Serializer\Annotation\Ignore;
use Symfony\Component\Serializer\Annotation\SerializedName;

final class RGBAColor extends Property
{
    #[SerializedName('R')]
    private SimpleValue $red;

    #[SerializedName('G')]
    private SimpleValue $green;

    #[SerializedName('B')]
    private SimpleValue $blue;

    #[SerializedName('Alpha')]
    private SimpleValue $alpha;

    public function get(): array
    {
        return [
            'r' => $this->getRed()->get(),
            'g' => $this->getGreen()->get(),
            'b' => $this->getBlue()->get(),
            'a' => $this->getAlpha()->get(),
        ];
    }

    public function getRed(): SimpleValue
    {
        return $this->red;
    }

    public function setRed(SimpleValue $red): RGBAColor
    {
        $this->red = $red;

        return $this;
    }

    public function getGreen(): SimpleValue
    {
        return $this->green;
    }

    public function setGreen(SimpleValue $green): RGBAColor
    {
        $this->green = $green;

        return $this;
    }

    public function getBlue(): SimpleValue
    {
        return $this->blue;
    }

    public function setBlue(SimpleValue $blue): RGBAColor
    {
        $this->blue = $blue;

        return $this;
    }

    public function getAlpha(): SimpleValue
    {
        return $this->alpha;
    }

    public function setAlpha(SimpleValue $alpha): RGBAColor
    {
        $this->alpha = $alpha;

        return $this;
    }

    #[Ignore]
    public function getHex(): Property
    {
        return (new SimpleValue())->setValue(Color::rgbaToHex(
            $this->getRed()->get(),
            $this->getGreen()->get(),
            $this->getBlue()->get(),
            $this->getAlpha()->get()
        ));
    }
}
