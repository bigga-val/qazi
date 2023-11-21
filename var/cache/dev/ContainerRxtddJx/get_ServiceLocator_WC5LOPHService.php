<?php

namespace ContainerRxtddJx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WC5LOPHService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.WC5LOPH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WC5LOPH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'facture' => ['privates', '.errored..service_locator.WC5LOPH.App\\Entity\\Facture', NULL, 'Cannot autowire service ".service_locator.WC5LOPH": it references class "App\\Entity\\Facture" but no such service exists.'],
            'factureRepository' => ['privates', 'App\\Repository\\FactureRepository', 'getFactureRepositoryService', true],
            'ligneFactureRepository' => ['privates', 'App\\Repository\\LigneFactureRepository', 'getLigneFactureRepositoryService', true],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'pdfGenerator' => ['privates', 'App\\Service\\FPdfGenerator', 'getFPdfGeneratorService', true],
        ], [
            'facture' => 'App\\Entity\\Facture',
            'factureRepository' => 'App\\Repository\\FactureRepository',
            'ligneFactureRepository' => 'App\\Repository\\LigneFactureRepository',
            'mailer' => '?',
            'pdfGenerator' => 'App\\Service\\FPdfGenerator',
        ]);
    }
}
