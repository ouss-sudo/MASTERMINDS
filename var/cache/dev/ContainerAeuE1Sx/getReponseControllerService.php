<?php

namespace ContainerAeuE1Sx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReponseControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ReponseController' shared autowired service.
     *
     * @return \App\Controller\ReponseController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\ReponseController'] = $instance = new \App\Controller\ReponseController();

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\ReponseController', $container));

        return $instance;
    }
}
