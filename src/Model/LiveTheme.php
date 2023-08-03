<?php

declare(strict_types=1);

namespace Jascha030\LiveTheme\Model;

use Symfony\Component\Serializer\Annotation\SerializedName;

final class LiveTheme
{
    #[SerializedName('Theme')]
    private ?Theme $theme = null;

    #[SerializedName('SkinManager')]
    private ?Theme $skinManager = null;

    public function getTheme(): ?Theme
    {
        return $this->theme;
    }

    public function setTheme(?Theme $theme): self
    {
        $theme = $theme?->forceHex();

        $this->theme = clone $theme;

        return $this;
    }

    public function getSkinManager(): ?Theme
    {
        return $this->skinManager;
    }

    public function setSkinManager(?Theme $skinManager): self
    {
        $this->skinManager = $skinManager;

        return $this;
    }
}
