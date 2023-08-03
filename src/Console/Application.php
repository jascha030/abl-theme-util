<?php

declare(strict_types=1);

namespace Jascha030\LiveTheme\Console;

use Psr\Container\ContainerInterface;
use RuntimeException;
use Symfony\Component\Console\Application as BaseApplication;

use function is_string;

final class Application extends BaseApplication
{
    public const APP_NAME = 'Live Theme Util';

    /**
     * @throws \Psr\Container\ContainerExceptionInterface|\Psr\Container\NotFoundExceptionInterface
     * @throws RuntimeException
     */
    public function __construct(private readonly ContainerInterface $container)
    {
        $version = $this->container->get('app.version');

        if (! is_string($version)) {
            throw new RuntimeException('Invalid value type for container binding: "app.version", binding should be of type "string".');
        }

        parent::__construct(self::APP_NAME, $version);
    }
}
