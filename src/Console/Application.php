<?php

declare(strict_types=1);

namespace Jascha030\LiveTheme\Console;

use Symfony\Component\Console\Application as BaseApplication;

final class Application extends BaseApplication
{
    private const APP_VERSION = '1.0.0';

    private const APP_NAME = 'ABL Theme Util';

    public function __construct()
    {
        parent::__construct(self::APP_NAME, self::APP_VERSION);
    }


}
