<?php

namespace ContainerXFUFN6Y;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XmyXMfMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xmyXMfM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xmyXMfM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ConstatController::delete' => ['privates', '.service_locator.TZpuq6v', 'get_ServiceLocator_TZpuq6vService', true],
            'App\\Controller\\ConstatController::edit' => ['privates', '.service_locator.TZpuq6v', 'get_ServiceLocator_TZpuq6vService', true],
            'App\\Controller\\ConstatController::index' => ['privates', '.service_locator.Cn80UwC', 'get_ServiceLocator_Cn80UwCService', true],
            'App\\Controller\\ConstatController::indexfront' => ['privates', '.service_locator.Cn80UwC', 'get_ServiceLocator_Cn80UwCService', true],
            'App\\Controller\\ConstatController::new' => ['privates', '.service_locator.9vWqCnD', 'get_ServiceLocator_9vWqCnDService', true],
            'App\\Controller\\ConstatController::pdf' => ['privates', '.service_locator.zUhtkMk', 'get_ServiceLocator_ZUhtkMkService', true],
            'App\\Controller\\ConstatController::searchrbyobject' => ['privates', '.service_locator.MKU8Nbh', 'get_ServiceLocator_MKU8NbhService', true],
            'App\\Controller\\ConstatController::show' => ['privates', '.service_locator.4aKLf_K', 'get_ServiceLocator_4aKLfKService', true],
            'App\\Controller\\ConstatController::showfront' => ['privates', '.service_locator.4aKLf_K', 'get_ServiceLocator_4aKLfKService', true],
            'App\\Controller\\HomeController::index' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\HomeController::index4' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\ReclamationController::delete' => ['privates', '.service_locator.e8ztFqN', 'get_ServiceLocator_E8ztFqNService', true],
            'App\\Controller\\ReclamationController::edit' => ['privates', '.service_locator.e8ztFqN', 'get_ServiceLocator_E8ztFqNService', true],
            'App\\Controller\\ReclamationController::index' => ['privates', '.service_locator.RBZRot8', 'get_ServiceLocator_RBZRot8Service', true],
            'App\\Controller\\ReclamationController::indexfront' => ['privates', '.service_locator.bvmeD74', 'get_ServiceLocator_BvmeD74Service', true],
            'App\\Controller\\ReclamationController::new' => ['privates', '.service_locator.IdT3Iol', 'get_ServiceLocator_IdT3IolService', true],
            'App\\Controller\\ReclamationController::searchrecbyobject' => ['privates', '.service_locator.fiYkjuL', 'get_ServiceLocator_FiYkjuLService', true],
            'App\\Controller\\ReclamationController::show' => ['privates', '.service_locator.aOBNC_B', 'get_ServiceLocator_AOBNCBService', true],
            'App\\Controller\\ReclamationController::showfront' => ['privates', '.service_locator.aOBNC_B', 'get_ServiceLocator_AOBNCBService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.qFTiI7f', 'get_ServiceLocator_QFTiI7fService', true],
            'App\\Controller\\ReponseController::delete' => ['privates', '.service_locator.yRqPluq', 'get_ServiceLocator_YRqPluqService', true],
            'App\\Controller\\ReponseController::edit' => ['privates', '.service_locator.yRqPluq', 'get_ServiceLocator_YRqPluqService', true],
            'App\\Controller\\ReponseController::new' => ['privates', '.service_locator.aOBNC_B', 'get_ServiceLocator_AOBNCBService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\StatController::stats' => ['privates', '.service_locator.nvGMdN_', 'get_ServiceLocator_NvGMdNService', true],
            'App\\Controller\\UserController::delete' => ['privates', '.service_locator.9uW928t', 'get_ServiceLocator_9uW928tService', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.9uW928t', 'get_ServiceLocator_9uW928tService', true],
            'App\\Controller\\UserController::index' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\UserController::new' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\UserController::show' => ['privates', '.service_locator.4T4EJFR', 'get_ServiceLocator_4T4EJFRService', true],
            'App\\Controller\\VehiculeController::delete' => ['privates', '.service_locator.YdyC4xD', 'get_ServiceLocator_YdyC4xDService', true],
            'App\\Controller\\VehiculeController::edit' => ['privates', '.service_locator.YdyC4xD', 'get_ServiceLocator_YdyC4xDService', true],
            'App\\Controller\\VehiculeController::index' => ['privates', '.service_locator.y1420Rl', 'get_ServiceLocator_Y1420RlService', true],
            'App\\Controller\\VehiculeController::new' => ['privates', '.service_locator.4aKLf_K', 'get_ServiceLocator_4aKLfKService', true],
            'App\\Controller\\VehiculeController::new2' => ['privates', '.service_locator.4aKLf_K', 'get_ServiceLocator_4aKLfKService', true],
            'App\\Controller\\VehiculeController::show' => ['privates', '.service_locator.pB20uqv', 'get_ServiceLocator_PB20uqvService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\ConstatController:delete' => ['privates', '.service_locator.TZpuq6v', 'get_ServiceLocator_TZpuq6vService', true],
            'App\\Controller\\ConstatController:edit' => ['privates', '.service_locator.TZpuq6v', 'get_ServiceLocator_TZpuq6vService', true],
            'App\\Controller\\ConstatController:index' => ['privates', '.service_locator.Cn80UwC', 'get_ServiceLocator_Cn80UwCService', true],
            'App\\Controller\\ConstatController:indexfront' => ['privates', '.service_locator.Cn80UwC', 'get_ServiceLocator_Cn80UwCService', true],
            'App\\Controller\\ConstatController:new' => ['privates', '.service_locator.9vWqCnD', 'get_ServiceLocator_9vWqCnDService', true],
            'App\\Controller\\ConstatController:pdf' => ['privates', '.service_locator.zUhtkMk', 'get_ServiceLocator_ZUhtkMkService', true],
            'App\\Controller\\ConstatController:searchrbyobject' => ['privates', '.service_locator.MKU8Nbh', 'get_ServiceLocator_MKU8NbhService', true],
            'App\\Controller\\ConstatController:show' => ['privates', '.service_locator.4aKLf_K', 'get_ServiceLocator_4aKLfKService', true],
            'App\\Controller\\ConstatController:showfront' => ['privates', '.service_locator.4aKLf_K', 'get_ServiceLocator_4aKLfKService', true],
            'App\\Controller\\HomeController:index' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\HomeController:index4' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\ReclamationController:delete' => ['privates', '.service_locator.e8ztFqN', 'get_ServiceLocator_E8ztFqNService', true],
            'App\\Controller\\ReclamationController:edit' => ['privates', '.service_locator.e8ztFqN', 'get_ServiceLocator_E8ztFqNService', true],
            'App\\Controller\\ReclamationController:index' => ['privates', '.service_locator.RBZRot8', 'get_ServiceLocator_RBZRot8Service', true],
            'App\\Controller\\ReclamationController:indexfront' => ['privates', '.service_locator.bvmeD74', 'get_ServiceLocator_BvmeD74Service', true],
            'App\\Controller\\ReclamationController:new' => ['privates', '.service_locator.IdT3Iol', 'get_ServiceLocator_IdT3IolService', true],
            'App\\Controller\\ReclamationController:searchrecbyobject' => ['privates', '.service_locator.fiYkjuL', 'get_ServiceLocator_FiYkjuLService', true],
            'App\\Controller\\ReclamationController:show' => ['privates', '.service_locator.aOBNC_B', 'get_ServiceLocator_AOBNCBService', true],
            'App\\Controller\\ReclamationController:showfront' => ['privates', '.service_locator.aOBNC_B', 'get_ServiceLocator_AOBNCBService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.qFTiI7f', 'get_ServiceLocator_QFTiI7fService', true],
            'App\\Controller\\ReponseController:delete' => ['privates', '.service_locator.yRqPluq', 'get_ServiceLocator_YRqPluqService', true],
            'App\\Controller\\ReponseController:edit' => ['privates', '.service_locator.yRqPluq', 'get_ServiceLocator_YRqPluqService', true],
            'App\\Controller\\ReponseController:new' => ['privates', '.service_locator.aOBNC_B', 'get_ServiceLocator_AOBNCBService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\StatController:stats' => ['privates', '.service_locator.nvGMdN_', 'get_ServiceLocator_NvGMdNService', true],
            'App\\Controller\\UserController:delete' => ['privates', '.service_locator.9uW928t', 'get_ServiceLocator_9uW928tService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.9uW928t', 'get_ServiceLocator_9uW928tService', true],
            'App\\Controller\\UserController:index' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\UserController:new' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\UserController:show' => ['privates', '.service_locator.4T4EJFR', 'get_ServiceLocator_4T4EJFRService', true],
            'App\\Controller\\VehiculeController:delete' => ['privates', '.service_locator.YdyC4xD', 'get_ServiceLocator_YdyC4xDService', true],
            'App\\Controller\\VehiculeController:edit' => ['privates', '.service_locator.YdyC4xD', 'get_ServiceLocator_YdyC4xDService', true],
            'App\\Controller\\VehiculeController:index' => ['privates', '.service_locator.y1420Rl', 'get_ServiceLocator_Y1420RlService', true],
            'App\\Controller\\VehiculeController:new' => ['privates', '.service_locator.4aKLf_K', 'get_ServiceLocator_4aKLfKService', true],
            'App\\Controller\\VehiculeController:new2' => ['privates', '.service_locator.4aKLf_K', 'get_ServiceLocator_4aKLfKService', true],
            'App\\Controller\\VehiculeController:show' => ['privates', '.service_locator.pB20uqv', 'get_ServiceLocator_PB20uqvService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\ConstatController::delete' => '?',
            'App\\Controller\\ConstatController::edit' => '?',
            'App\\Controller\\ConstatController::index' => '?',
            'App\\Controller\\ConstatController::indexfront' => '?',
            'App\\Controller\\ConstatController::new' => '?',
            'App\\Controller\\ConstatController::pdf' => '?',
            'App\\Controller\\ConstatController::searchrbyobject' => '?',
            'App\\Controller\\ConstatController::show' => '?',
            'App\\Controller\\ConstatController::showfront' => '?',
            'App\\Controller\\HomeController::index' => '?',
            'App\\Controller\\HomeController::index4' => '?',
            'App\\Controller\\ReclamationController::delete' => '?',
            'App\\Controller\\ReclamationController::edit' => '?',
            'App\\Controller\\ReclamationController::index' => '?',
            'App\\Controller\\ReclamationController::indexfront' => '?',
            'App\\Controller\\ReclamationController::new' => '?',
            'App\\Controller\\ReclamationController::searchrecbyobject' => '?',
            'App\\Controller\\ReclamationController::show' => '?',
            'App\\Controller\\ReclamationController::showfront' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\ReponseController::delete' => '?',
            'App\\Controller\\ReponseController::edit' => '?',
            'App\\Controller\\ReponseController::new' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\StatController::stats' => '?',
            'App\\Controller\\UserController::delete' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Controller\\UserController::index' => '?',
            'App\\Controller\\UserController::new' => '?',
            'App\\Controller\\UserController::show' => '?',
            'App\\Controller\\VehiculeController::delete' => '?',
            'App\\Controller\\VehiculeController::edit' => '?',
            'App\\Controller\\VehiculeController::index' => '?',
            'App\\Controller\\VehiculeController::new' => '?',
            'App\\Controller\\VehiculeController::new2' => '?',
            'App\\Controller\\VehiculeController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\ConstatController:delete' => '?',
            'App\\Controller\\ConstatController:edit' => '?',
            'App\\Controller\\ConstatController:index' => '?',
            'App\\Controller\\ConstatController:indexfront' => '?',
            'App\\Controller\\ConstatController:new' => '?',
            'App\\Controller\\ConstatController:pdf' => '?',
            'App\\Controller\\ConstatController:searchrbyobject' => '?',
            'App\\Controller\\ConstatController:show' => '?',
            'App\\Controller\\ConstatController:showfront' => '?',
            'App\\Controller\\HomeController:index' => '?',
            'App\\Controller\\HomeController:index4' => '?',
            'App\\Controller\\ReclamationController:delete' => '?',
            'App\\Controller\\ReclamationController:edit' => '?',
            'App\\Controller\\ReclamationController:index' => '?',
            'App\\Controller\\ReclamationController:indexfront' => '?',
            'App\\Controller\\ReclamationController:new' => '?',
            'App\\Controller\\ReclamationController:searchrecbyobject' => '?',
            'App\\Controller\\ReclamationController:show' => '?',
            'App\\Controller\\ReclamationController:showfront' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\ReponseController:delete' => '?',
            'App\\Controller\\ReponseController:edit' => '?',
            'App\\Controller\\ReponseController:new' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\StatController:stats' => '?',
            'App\\Controller\\UserController:delete' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'App\\Controller\\UserController:index' => '?',
            'App\\Controller\\UserController:new' => '?',
            'App\\Controller\\UserController:show' => '?',
            'App\\Controller\\VehiculeController:delete' => '?',
            'App\\Controller\\VehiculeController:edit' => '?',
            'App\\Controller\\VehiculeController:index' => '?',
            'App\\Controller\\VehiculeController:new' => '?',
            'App\\Controller\\VehiculeController:new2' => '?',
            'App\\Controller\\VehiculeController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
