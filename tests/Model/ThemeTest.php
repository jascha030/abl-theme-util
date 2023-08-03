<?php

declare(strict_types=1);

namespace Jascha030\LiveTheme\Model;

use Exception;
use Jascha030\LiveTheme\Container\Builder;
use Jascha030\LiveTheme\Container\Config;
use Jascha030\LiveTheme\Model\Theme\ColorNotation;
use Jascha030\LiveTheme\Provider\SerializationProvider;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

use function dirname;
use function file_get_contents;

/**
 * @internal
 *
 * @covers \Jascha030\LiveTheme\Model\ColorValue
 * @covers \Jascha030\LiveTheme\Model\LiveTheme
 * @covers \Jascha030\LiveTheme\Model\Theme
 * @covers \Jascha030\LiveTheme\Model\Value
 */
final class ThemeTest extends TestCase
{
    private const XML_CONTROL_VALUE = <<<'XML'
<?xml version="1.0" encoding="UTF-8"?>
<ControlForeground>
    <R Value="255" />
    <G Value="255" />
    <B Value="255" />
    <Alpha Value="255" />
</ControlForeground>
XML;

    /**
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public function testValue(): void
    {
        $value = $this->getSerializer()->deserialize(
            self::XML_CONTROL_VALUE,
            ColorValue::class,
            XmlEncoder::FORMAT,
            ['xml_root_node_name' => 'ControlForeground']
        );

        $values = [
            $value->getRed()->getValue(),
            $value->getGreen()->getValue(),
            $value->getBlue()->getValue(),
            $value->getAlpha()->getValue(),
        ];

        foreach ($values as $v) {
            self::assertEquals(255, $v);
        }

        self::assertEquals(ColorNotation::RGBA, $value->getType());

        self::assertNotInstanceOf(ColorValue::class, $value->asHex());
        self::assertInstanceOf(Value::class, $value->asHex());
        self::assertEquals('#ffffff', $value->asHex()->getValue());
    }

    /**
     * @throws Exception
     */
    public function testSerialization(): void
    {
        $theme = $this->getTheme(dirname(__DIR__) . '/Fixtures/00Light.ask');
        $old   = $this->getTheme(dirname(__DIR__) . '/Fixtures/Almost Palenight 2.ask');

        self::assertNotNull($theme->getTheme());
        self::assertNull($theme->getSkinManager());

        self::assertNotNull($old->getSkinManager());
        self::assertNull($old->getTheme());
    }

    public function testConversion(): void
    {
        $theme = $this->getTheme(dirname(__DIR__) . '/Fixtures/Almost Palenight 2.ask');

        $skinManager = $theme->getSkinManager();

        $new = new LiveTheme();
        $new->setTheme($skinManager);

        dd($new);
        $new = $this->getSerializer()->serialize($new, XmlEncoder::FORMAT, ['xml_root_node_name' => 'Ableton']);
    }

    /**
     * @throws Exception
     */
    private function getTheme(string $path): LiveTheme
    {
        return $this
            ->getSerializer()
            ->deserialize(
                file_get_contents($path),
                LiveTheme::class,
                XmlEncoder::FORMAT,
                [
                    'xml_root_node_name'                       => 'Ableton',
                    AbstractObjectNormalizer::SKIP_NULL_VALUES => true,
                ]
            );
    }

    /**
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     * @throws Exception
     */
    private function getSerializer(): Serializer
    {
        $container = (new Builder(
            Config::create()
                ->withProviders([SerializationProvider::class])
        ))->build();

        return $container->get(Serializer::class);
    }
}
