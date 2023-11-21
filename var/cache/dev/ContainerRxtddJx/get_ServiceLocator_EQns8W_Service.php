<?php

namespace ContainerRxtddJx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EQns8W_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.eQns8W.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.eQns8W.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'client' => ['privates', '.errored..service_locator.eQns8W..App\\Entity\\Client', NULL, 'Cannot autowire service ".service_locator.eQns8W.": it references class "App\\Entity\\Client" but no such service exists.'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'client' => 'App\\Entity\\Client',
            'entityManager' => '?',
        ]);
    }
}
