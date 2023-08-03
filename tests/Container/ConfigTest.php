<?php

declare(strict_types=1);

namespace Jascha030\LiveTheme\Container;

use Jascha030\LiveTheme\Provider\SerializationProvider;
use PHPUnit\Framework\TestCase;

use function array_merge;

/**
 * @internal
 *
 * @covers \Jascha030\LiveTheme\Container\Config
 */
final class ConfigTest extends TestCase
{
    /**
     * @depends testWithProviders
     * @depends testWithDefinitions
     */
    public function testProvidersAndDefinitions(): void
    {
        $definitions = self::createDefinitions();

        self::assertEquals(
            array_merge((array) (new SerializationProvider())->getFactories(), $definitions),
            Config::create()
                ->withProviders([SerializationProvider::class])
                ->withDefinitions($definitions)
                ->getFactories()
        );
    }

    /**
     * @depends testGetFactories
     */
    public function testWithProviders(): void
    {
        self::assertEquals(
            (new SerializationProvider())->getFactories(),
            Config::create()
                ->withProviders([SerializationProvider::class])
                ->getFactories()
        );
    }

    /**
     * @depends testGetFactories
     */
    public function testWithDefinitions(): void
    {
        self::assertEquals(
            $definitions = self::createDefinitions(),
            Config::create()
                ->withDefinitions($definitions)
                ->getFactories()
        );
    }

    /**
     * @depends testCreate
     */
    public function testGetFactories(): void
    {
        self::assertEquals([], Config::create()->getFactories());
    }

    public function testCreate(): void
    {
        self::assertInstanceOf(Config::class, Config::create());
    }

    private static function createDefinitions(): array
    {
        return [
            'app.version' => static fn (): string => '1.0.0',
        ];
    }
}
