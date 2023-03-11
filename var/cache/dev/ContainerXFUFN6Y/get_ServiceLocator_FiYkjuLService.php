<?php

namespace ContainerXFUFN6Y;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FiYkjuLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.fiYkjuL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fiYkjuL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Normalizer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
            'repository' => ['privates', 'App\\Repository\\ReclamationRepository', 'getReclamationRepositoryService', true],
        ], [
            'Normalizer' => '?',
            'repository' => 'App\\Repository\\ReclamationRepository',
        ]);
    }
}
