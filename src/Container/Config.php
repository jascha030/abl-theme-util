<?php

declare(strict_types=1);

namespace Jascha030\LiveTheme\Container;

use Closure;
use Generator;
use InvalidArgumentException;
use Jascha030\DI\ServiceProvider\ServiceProviderInterface;

use function array_map;
use function is_string;
use function iterator_to_array;

class Config
{
    private Closure $providerMap;

    private Closure $factoryMap;

    private array $providers = [];

    private array $definitions = [];

    /**
     * @var array<string, callable>
     */
    private ?array $factories = null;

    final public static function create(): static
    {
        return new static();
    }

    /**
     * @param array<int, class-string|ServiceProviderInterface> $providers
     */
    public function withProviders(array $providers): static
    {
        $new            = clone $this;
        $new->providers = $providers;

        return $new;
    }

    /**
     * @param array<string, callable> $definitions
     */
    public function withDefinitions(array $definitions): static
    {
        $new              = clone $this;
        $new->definitions = $definitions;

        return $new;
    }

    /**
     * @return array<string, callable>
     */
    public function getFactories(): array
    {
        if (null === $this->factories) {
            $generator = (function (): Generator {
                /**
                 * @var array<string, callable> $factories
                 */
                $factories = array_map(
                    $this->factoryMap,
                    array_map($this->providerMap, $this->providers)
                );

                foreach ($factories as $f) {
                    yield from $f;
                }
            })();

            $this->factories = array_merge(iterator_to_array($generator), $this->definitions);
        }

        return $this->factories;
    }

    final private function __construct()
    {
        $this->providerMap = static function (string|ServiceProviderInterface $provider): ServiceProviderInterface {
            is_subclass_of($provider, ServiceProviderInterface::class) || throw new InvalidArgumentException('Argument "$provider" should implement"' . ServiceProviderInterface::class . '".');

            return is_string($provider) ? new $provider() : $provider;
        };

        $this->factoryMap = static fn (ServiceProviderInterface $provider): array => (array) $provider->getFactories();
    }
}
