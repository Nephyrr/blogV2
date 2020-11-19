<?php

namespace ContainerFrQe1K0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3zcMOVMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3zcMOVM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3zcMOVM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'produit' => ['privates', '.errored..service_locator.3zcMOVM.App\\Entity\\Produit', NULL, 'Cannot autowire service ".service_locator.3zcMOVM": it references class "App\\Entity\\Produit" but no such service exists.'],
        ], [
            'produit' => 'App\\Entity\\Produit',
        ]);
    }
}
