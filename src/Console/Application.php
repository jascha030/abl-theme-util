<?php

declare(strict_types=1);

namespace Jascha030\LiveTheme\Console;

use Psr\Container\ContainerInterface;
use RuntimeException;
use Symfony\Component\Console\Application as BaseApplication;

use function is_string;

final class Application extends BaseApplication
{
    public function __construct(private ContainerInterface $container)
    {
        $version = $this->container->get('app.version');
        $name    = $this->container->get('app.name');

        if (! is_string($name) || ! is_string($version)) {
            throw self::getException($name, $version);
        }

        parent::__construct($name, $version);
    }

    private static function getException(mixed $name, mixed $version): RuntimeException
    {
        $invalidKeys = array_keys(array_filter(
            [
                'app.name'    => $name,
                'app.version' => $version,
            ],
            static fn ($v) => ! is_string($v)
        ));

        return new RuntimeException(sprintf(
            'Invalid value type for container binding(s): "%s", binding(s) should be of type "string".',
            implode(', ', $invalidKeys)
        ));
    }
}
