<?php

namespace ContainerXFUFN6Y;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConstatRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\ConstatRepository' shared autowired service.
     *
     * @return \App\Repository\ConstatRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\ConstatRepository'] = new \App\Repository\ConstatRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}