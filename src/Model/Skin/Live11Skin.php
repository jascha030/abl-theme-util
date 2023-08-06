<?php

declare(strict_types=1);

namespace Jascha030\LiveTheme\Model\Skin;

use Jascha030\LiveTheme\Model\Skin;
use Jascha030\LiveTheme\Model\Theme;
use Symfony\Component\Serializer\Annotation\SerializedName;

final class Live11Skin extends Skin
{
    #[SerializedName('Theme')]
    private Theme $theme;

    public function getTheme(): ?Theme
    {
        return $this->theme;
    }

    public function setTheme(?Theme $theme): Skin
    {
        $this->theme = $theme;

        return $this;
    }
}
