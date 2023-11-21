<?php

namespace ContainerRxtddJx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HNmj0HkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.HNmj0Hk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HNmj0Hk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'clientRepository' => ['privates', 'App\\Repository\\ClientRepository', 'getClientRepositoryService', true],
            'serviceRepository' => ['privates', 'App\\Repository\\ServiceRepository', 'getServiceRepositoryService', true],
            'typeFactureRepository' => ['privates', 'App\\Repository\\TypeFactureRepository', 'getTypeFactureRepositoryService', true],
        ], [
            'clientRepository' => 'App\\Repository\\ClientRepository',
            'serviceRepository' => 'App\\Repository\\ServiceRepository',
            'typeFactureRepository' => 'App\\Repository\\TypeFactureRepository',
        ]);
    }
}
