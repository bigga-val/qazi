<?php

namespace Container3mYT4WQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFPdfGeneratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\FPdfGenerator' shared autowired service.
     *
     * @return \App\Service\FPdfGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'FPdfGenerator.php';

        return $container->privates['App\\Service\\FPdfGenerator'] = new \App\Service\FPdfGenerator();
    }
}
