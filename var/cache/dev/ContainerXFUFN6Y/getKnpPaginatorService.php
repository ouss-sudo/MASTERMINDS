<?php

namespace ContainerXFUFN6Y;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKnpPaginatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'knp_paginator' shared service.
     *
     * @return \Knp\Component\Pager\Paginator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->services['knp_paginator'])) {
            return $container->services['knp_paginator'];
        }

        $container->services['knp_paginator'] = $instance = new \Knp\Component\Pager\Paginator($a, ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));

        $instance->setDefaultPaginatorOptions(['pageParameterName' => 'page', 'sortFieldParameterName' => 'sort', 'sortDirectionParameterName' => 'direction', 'filterFieldParameterName' => 'filterField', 'filterValueParameterName' => 'filterValue', 'distinct' => true, 'pageOutOfRange' => 'ignore', 'defaultLimit' => 10]);

        return $instance;
    }
}
