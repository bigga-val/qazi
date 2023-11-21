<?php

namespace ContainerRxtddJx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_L5aPaCpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.L5aPaCp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.L5aPaCp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'service' => ['privates', '.errored..service_locator.L5aPaCp.App\\Entity\\Service', NULL, 'Cannot autowire service ".service_locator.L5aPaCp": it references class "App\\Entity\\Service" but no such service exists.'],
        ], [
            'service' => 'App\\Entity\\Service',
        ]);
    }
}
