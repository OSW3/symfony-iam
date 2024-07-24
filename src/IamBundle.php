<?php 
namespace OSW3\Iam;

use OSW3\Iam\DependencyInjection\Configuration;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class IamBundle extends Bundle
{
    public function build(ContainerBuilder $container): void
    {
        (new Configuration)->generateProjectConfig($container->getParameter('kernel.project_dir'));
    }
}