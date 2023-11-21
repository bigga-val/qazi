<?php

namespace ContainerRxtddJx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CnSWJp2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cnSWJp2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cnSWJp2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'clientRepository' => ['privates', 'App\\Repository\\ClientRepository', 'getClientRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'factureRepository' => ['privates', 'App\\Repository\\FactureRepository', 'getFactureRepositoryService', true],
            'typeFactureRepository' => ['privates', 'App\\Repository\\TypeFactureRepository', 'getTypeFactureRepositoryService', true],
        ], [
            'clientRepository' => 'App\\Repository\\ClientRepository',
            'entityManager' => '?',
            'factureRepository' => 'App\\Repository\\FactureRepository',
            'typeFactureRepository' => 'App\\Repository\\TypeFactureRepository',
        ]);
    }
}
