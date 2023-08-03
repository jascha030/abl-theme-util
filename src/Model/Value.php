<?php

declare(strict_types=1);

namespace Jascha030\LiveTheme\Model;

use Symfony\Component\Serializer\Annotation\SerializedName;

class Value
{
    #[SerializedName('@Value')]
    private null|float|int|string $value;

    public function getValue(): null|float|int|string
    {
        return $this->value;
    }

    public function setValue(null|float|int|string $value): static
    {
        $this->value = $value;

        return $this;
    }
}
