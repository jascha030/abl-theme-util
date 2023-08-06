<?php

declare(strict_types=1);

namespace Jascha030\LiveTheme\Model;

use Symfony\Component\Serializer\Annotation\SerializedName;

abstract class Skin
{
    #[SerializedName('@MinorVersion')]
    private int|string|float|null $minorVersion = null;

    #[SerializedName('@SchemaChangeCount')]
    private int|string|float|null $schemaChangeCount = null;

    #[SerializedName('@Creator')]
    private int|string|float|null $creator = null;

    #[SerializedName('@Revision')]
    private int|string|float|null $revision = null;

    abstract public function getTheme(): ?Theme;

    abstract public function setTheme(?Theme $theme): Skin;

    public function getMinorVersion(): float|int|string|null
    {
        return $this->minorVersion;
    }

    public function setMinorVersion(float|int|string|null $minorVersion): Skin
    {
        $this->minorVersion = $minorVersion;
        return $this;
    }

    public function getSchemaChangeCount(): float|int|string|null
    {
        return $this->schemaChangeCount;
    }

    public function setSchemaChangeCount(float|int|string|null $schemaChangeCount): Skin
    {
        $this->schemaChangeCount = $schemaChangeCount;
        return $this;
    }

    public function getCreator(): float|int|string|null
    {
        return $this->creator;
    }

    public function setCreator(float|int|string|null $creator): Skin
    {
        $this->creator = $creator;
        return $this;
    }

    public function getRevision(): float|int|string|null
    {
        return $this->revision;
    }

    public function setRevision(float|int|string|null $revision): Skin
    {
        $this->revision = $revision;
        return $this;
    }
}
