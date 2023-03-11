<?php

namespace ContainerXFUFN6Y;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RBZRot8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RBZRot8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RBZRot8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Normalizer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
            'flashy' => ['services', 'mercuryseries_flashy.flashy_notifier', 'getMercuryseriesFlashy_FlashyNotifierService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'reclamationRepository' => ['privates', 'App\\Repository\\ReclamationRepository', 'getReclamationRepositoryService', true],
        ], [
            'Normalizer' => '?',
            'flashy' => '?',
            'paginator' => '?',
            'reclamationRepository' => 'App\\Repository\\ReclamationRepository',
        ]);
    }
}
