<?php

declare(strict_types=1);

namespace Jascha030\LiveTheme\Provider;

use Doctrine\Common\Annotations\AnnotationReader;
use Jascha030\DI\ServiceProvider\ServiceProviderInterface;
use Psr\Container\ContainerInterface;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractorInterface;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactoryInterface;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;
use Symfony\Component\Serializer\NameConverter\AdvancedNameConverterInterface;
use Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

final class SerializationProvider implements ServiceProviderInterface
{
    /**
     * @return array<string, callable(): mixed>
     */
    public function getFactories(): iterable
    {
        return [
            'serializer.normalizers' => static function (ContainerInterface $container): array {
                return [
                    $container->get(AbstractObjectNormalizer::class),
                    new GetSetMethodNormalizer(
                        classMetadataFactory: $container->get(ClassMetadataFactoryInterface::class),
                        nameConverter: $container->get(AdvancedNameConverterInterface::class),
                        propertyTypeExtractor: $container->get(PropertyInfoExtractorInterface::class),
                    ),
                    new ArrayDenormalizer(),
                ];
            },
            'serializer.encoders' => static function (): array {
                return [new XmlEncoder()];
            },
            ClassMetadataFactoryInterface::class => static function (): ClassMetadataFactory {
                return new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));
            },
            AdvancedNameConverterInterface::class => static function (ContainerInterface $container): MetadataAwareNameConverter {
                return new MetadataAwareNameConverter($container->get(ClassMetadataFactoryInterface::class));
            },
            PropertyInfoExtractorInterface::class => static function (): PropertyInfoExtractor {
                return new PropertyInfoExtractor(
                    typeExtractors: [
                        new PhpDocExtractor(),
                        new ReflectionExtractor(),
                    ]
                );
            },
            AbstractObjectNormalizer::class => static function (ContainerInterface $container): ObjectNormalizer {
                return new ObjectNormalizer(
                    classMetadataFactory: $container->get(ClassMetadataFactoryInterface::class),
                    nameConverter: $container->get(AdvancedNameConverterInterface::class),
                    propertyTypeExtractor: $container->get(PropertyInfoExtractorInterface::class),
                );
            },
            Serializer::class => static function (ContainerInterface $container): Serializer {
                return new Serializer(
                    $container->get('serializer.normalizers'),
                    $container->get('serializer.encoders'),
                );
            },
        ];
    }

    /**
     * @return array<string, callable(): mixed>
     */
    public function getExtensions(): iterable
    {
        return [];
    }
}
