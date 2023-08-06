<?php

declare(strict_types=1);

namespace Jascha030\LiveTheme\Model;

abstract class Property
{
    abstract public function get(): mixed;
}
