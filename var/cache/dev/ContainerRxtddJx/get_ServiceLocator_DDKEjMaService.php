<?php

namespace ContainerRxtddJx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DDKEjMaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.DDKEjMa' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DDKEjMa'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'ligneFactureRepository' => ['privates', 'App\\Repository\\LigneFactureRepository', 'getLigneFactureRepositoryService', true],
        ], [
            'entityManager' => '?',
            'ligneFactureRepository' => 'App\\Repository\\LigneFactureRepository',
        ]);
    }
}
