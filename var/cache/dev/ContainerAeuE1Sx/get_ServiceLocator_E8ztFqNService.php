<?php

namespace ContainerAeuE1Sx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_E8ztFqNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.e8ztFqN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.e8ztFqN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reclamation' => ['privates', '.errored..service_locator.e8ztFqN.App\\Entity\\Reclamation', NULL, 'Cannot autowire service ".service_locator.e8ztFqN": it references class "App\\Entity\\Reclamation" but no such service exists.'],
            'reclamationRepository' => ['privates', 'App\\Repository\\ReclamationRepository', 'getReclamationRepositoryService', true],
            'reponseRepository' => ['privates', 'App\\Repository\\ReponseRepository', 'getReponseRepositoryService', true],
        ], [
            'reclamation' => 'App\\Entity\\Reclamation',
            'reclamationRepository' => 'App\\Repository\\ReclamationRepository',
            'reponseRepository' => 'App\\Repository\\ReponseRepository',
        ]);
    }
}
