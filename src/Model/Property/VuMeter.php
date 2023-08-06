<?php

declare(strict_types=1);

namespace Jascha030\LiveTheme\Model\Property;

use Jascha030\LiveTheme\Model\Property;
use Symfony\Component\Serializer\Annotation\SerializedName;

final class VuMeter extends Property
{
    #[SerializedName('OnlyMinimumToMaximum')]
    private SimpleValue $onlyMinimumToMaximum;

    #[SerializedName('Maximum')]
    private SimpleValue $maximum;

    #[SerializedName('AboveZeroDecibel')]
    private SimpleValue $aboveZeroDecibel;

    #[SerializedName('ZeroDecibel')]
    private SimpleValue $zeroDecibel;

    #[SerializedName('Minimum')]
    private SimpleValue $minimum;

    public function getOnlyMinimumToMaximum(): SimpleValue
    {
        return $this->onlyMinimumToMaximum;
    }

    public function setOnlyMinimumToMaximum(SimpleValue $onlyMinimumToMaximum): VuMeter
    {
        $this->onlyMinimumToMaximum = $onlyMinimumToMaximum;
        return $this;
    }

    public function getMaximum(): SimpleValue
    {
        return $this->maximum;
    }

    public function setMaximum(SimpleValue $maximum): VuMeter
    {
        $this->maximum = $maximum;
        return $this;
    }

    public function getAboveZeroDecibel(): SimpleValue
    {
        return $this->aboveZeroDecibel;
    }

    public function setAboveZeroDecibel(SimpleValue $aboveZeroDecibel): VuMeter
    {
        $this->aboveZeroDecibel = $aboveZeroDecibel;
        return $this;
    }

    public function getZeroDecibel(): SimpleValue
    {
        return $this->zeroDecibel;
    }

    public function setZeroDecibel(SimpleValue $zeroDecibel): VuMeter
    {
        $this->zeroDecibel = $zeroDecibel;
        return $this;
    }

    public function getMinimum(): SimpleValue
    {
        return $this->minimum;
    }

    public function setMinimum(SimpleValue $minimum): VuMeter
    {
        $this->minimum = $minimum;
        return $this;
    }

    public function get(): array
    {
        return [
            'OnlyMinimumToMaximum' => $this->getOnlyMinimumToMaximum()->get(),
            'Maximum'              => $this->getMaximum()->get(),
            'AboveZeroDecibel'     => $this->getAboveZeroDecibel()->get(),
            'ZeroDecibel'          => $this->getZeroDecibel()->get(),
            'Minimum'              => $this->getMinimum()->get(),
        ];
    }
}
