<?php

namespace ContainerXFUFN6Y;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFhomeControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\FhomeController' shared autowired service.
     *
     * @return \App\Controller\FhomeController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\FhomeController'] = $instance = new \App\Controller\FhomeController();

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\FhomeController', $container));

        return $instance;
    }
}
