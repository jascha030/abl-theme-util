<?php

declare(strict_types=1);

namespace Jascha030\LiveTheme\Model;

use Symfony\Component\Serializer\Annotation\SerializedName;

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
}
