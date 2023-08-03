<?php

declare(strict_types=1);

namespace Jascha030\LiveTheme\Container;

use DI\Container;
use DI\ContainerBuilder as DIContainerBuilder;
use Exception;

/**
 * @extends DIContainerBuilder<Container>
 */
final class Builder extends DIContainerBuilder
{
    public function __construct(private readonly Config $config)
    {
        parent::__construct();
    }

    /**
     * @throws Exception
     */
    public function build(): Container
    {
        $this
            ->useAttributes(false)
            ->useAutowiring(false)
            ->addDefinitions($this->config->getFactories());

        return parent::build();
    }
}
