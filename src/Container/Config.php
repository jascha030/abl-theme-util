<?php

declare(strict_types=1);

namespace Jascha030\LiveTheme\Container;

use Closure;
use Jascha030\DI\ServiceProvider\ServiceProviderInterface;

class Config
{
    private Closure $providerMap;

    private Closure $factoryMap;

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
        $this->providers = $providers;

        return $this;
    }

    /**
     * @param array<string, callable> $definitions
     */
    public function withDefinitions(array $definitions): static
    {
        $this->definitions = $definitions;

        return $this;
    }

    /**
     * @return array<string, callable>
     */
    public function getFactories(): array
    {
        if (null === $this->factories) {
            /** @var array<string, callable> $factories */
            $factories = array_map($this->factoryMap, array_map($this->providerMap, $this->providers));

            $this->factories = array_merge($factories, $this->definitions);
        }

        return $this->factories;
    }

    /**
     * @param array<int, class-string|ServiceProviderInterface> $providers
     * @param array<string, callable>                           $definitions
     */
    final private function __construct(
        private array $providers = [],
        private array $definitions = [],
    ) {
        $this->providerMap = static function (string|ServiceProviderInterface $provider): ServiceProviderInterface {
            if (! is_subclass_of($provider, ServiceProviderInterface::class)) {
                throw new \InvalidArgumentException('Argument "$provider" should implement"' . ServiceProviderInterface::class . '".');
            }

            return is_string($provider) ? new $provider() : $provider;
        };

        $this->factoryMap = static fn (ServiceProviderInterface $provider): array => (array) $provider->getFactories();
    }
}
