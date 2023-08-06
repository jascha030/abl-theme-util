<?php

declare(strict_types=1);

namespace Jascha030\LiveTheme\Model\Property;

use Jascha030\LiveTheme\Model\Property;
use Symfony\Component\Serializer\Annotation\SerializedName;

class SimpleValue extends Property
{
    #[SerializedName('@Value')]
    private string|int|float|bool|null $value;

    public function get(): ?string
    {
        return $this->getValue() ? (string) $this->getValue() : null;
    }

    public function getValue(): string|int|float|bool|null
    {
        return $this->value ?? null;
    }

    public function setValue(string|int|float|bool|null $value): Property
    {
        $this->value = $value;

        return $this;
    }
}
