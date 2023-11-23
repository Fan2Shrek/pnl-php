<?php

namespace Pnl\PnlPhp;
use Pnl\Extensions\AbstractExtension;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class PNL extends AbstractExtension
{
    protected static string $name = "php";

    public function loadServices(ContainerBuilder $container): void
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../config'));
        $loader->load('services.yaml');
    }

    public function getCommandTag(): string
    {
        return 'pnlphp-command';
    }

    public function prepareContainer(ContainerBuilder $container): void
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../config'));
        $loader->load('services.yaml');
    }
}
