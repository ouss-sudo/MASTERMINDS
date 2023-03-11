<?php

namespace ContainerXFUFN6Y;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AOBNCBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.aOBNC_B' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.aOBNC_B'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reclamation' => ['privates', '.errored..service_locator.aOBNC_B.App\\Entity\\Reclamation', NULL, 'Cannot autowire service ".service_locator.aOBNC_B": it references class "App\\Entity\\Reclamation" but no such service exists.'],
            'reponseRepository' => ['privates', 'App\\Repository\\ReponseRepository', 'getReponseRepositoryService', true],
        ], [
            'reclamation' => 'App\\Entity\\Reclamation',
            'reponseRepository' => 'App\\Repository\\ReponseRepository',
        ]);
    }
}