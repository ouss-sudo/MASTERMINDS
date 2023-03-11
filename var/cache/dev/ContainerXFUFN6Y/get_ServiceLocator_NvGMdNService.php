<?php

namespace ContainerXFUFN6Y;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NvGMdNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.nvGMdN_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.nvGMdN_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Normalizer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
            'repo' => ['privates', 'App\\Repository\\ReclamationRepository', 'getReclamationRepositoryService', true],
            'repository' => ['privates', 'App\\Repository\\ConstatRepository', 'getConstatRepositoryService', true],
        ], [
            'Normalizer' => '?',
            'repo' => 'App\\Repository\\ReclamationRepository',
            'repository' => 'App\\Repository\\ConstatRepository',
        ]);
    }
}
