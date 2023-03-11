<?php

namespace ContainerAeuE1Sx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Cn80UwCService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Cn80UwC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Cn80UwC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'constatRepository' => ['privates', 'App\\Repository\\ConstatRepository', 'getConstatRepositoryService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
        ], [
            'constatRepository' => 'App\\Repository\\ConstatRepository',
            'paginator' => '?',
        ]);
    }
}
