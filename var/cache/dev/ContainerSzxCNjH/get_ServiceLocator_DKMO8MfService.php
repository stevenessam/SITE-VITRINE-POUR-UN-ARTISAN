<?php

namespace ContainerSzxCNjH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DKMO8MfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dKMO8Mf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dKMO8Mf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ChantierController::delete' => ['privates', '.service_locator.KDH6mTw', 'get_ServiceLocator_KDH6mTwService', true],
            'App\\Controller\\ChantierController::edit' => ['privates', '.service_locator.KDH6mTw', 'get_ServiceLocator_KDH6mTwService', true],
            'App\\Controller\\ChantierController::index' => ['privates', '.service_locator.LrGOLIG', 'get_ServiceLocator_LrGOLIGService', true],
            'App\\Controller\\ChantierController::show' => ['privates', '.service_locator.KDH6mTw', 'get_ServiceLocator_KDH6mTwService', true],
            'App\\Controller\\DemandeDevisController::delete' => ['privates', '.service_locator._DVoNCC', 'get_ServiceLocator_DVoNCCService', true],
            'App\\Controller\\DemandeDevisController::edit' => ['privates', '.service_locator._DVoNCC', 'get_ServiceLocator_DVoNCCService', true],
            'App\\Controller\\DemandeDevisController::index' => ['privates', '.service_locator.yb_fsEw', 'get_ServiceLocator_YbFsEwService', true],
            'App\\Controller\\DemandeDevisController::show' => ['privates', '.service_locator._DVoNCC', 'get_ServiceLocator_DVoNCCService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\ChantierController:delete' => ['privates', '.service_locator.KDH6mTw', 'get_ServiceLocator_KDH6mTwService', true],
            'App\\Controller\\ChantierController:edit' => ['privates', '.service_locator.KDH6mTw', 'get_ServiceLocator_KDH6mTwService', true],
            'App\\Controller\\ChantierController:index' => ['privates', '.service_locator.LrGOLIG', 'get_ServiceLocator_LrGOLIGService', true],
            'App\\Controller\\ChantierController:show' => ['privates', '.service_locator.KDH6mTw', 'get_ServiceLocator_KDH6mTwService', true],
            'App\\Controller\\DemandeDevisController:delete' => ['privates', '.service_locator._DVoNCC', 'get_ServiceLocator_DVoNCCService', true],
            'App\\Controller\\DemandeDevisController:edit' => ['privates', '.service_locator._DVoNCC', 'get_ServiceLocator_DVoNCCService', true],
            'App\\Controller\\DemandeDevisController:index' => ['privates', '.service_locator.yb_fsEw', 'get_ServiceLocator_YbFsEwService', true],
            'App\\Controller\\DemandeDevisController:show' => ['privates', '.service_locator._DVoNCC', 'get_ServiceLocator_DVoNCCService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\ChantierController::delete' => '?',
            'App\\Controller\\ChantierController::edit' => '?',
            'App\\Controller\\ChantierController::index' => '?',
            'App\\Controller\\ChantierController::show' => '?',
            'App\\Controller\\DemandeDevisController::delete' => '?',
            'App\\Controller\\DemandeDevisController::edit' => '?',
            'App\\Controller\\DemandeDevisController::index' => '?',
            'App\\Controller\\DemandeDevisController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\ChantierController:delete' => '?',
            'App\\Controller\\ChantierController:edit' => '?',
            'App\\Controller\\ChantierController:index' => '?',
            'App\\Controller\\ChantierController:show' => '?',
            'App\\Controller\\DemandeDevisController:delete' => '?',
            'App\\Controller\\DemandeDevisController:edit' => '?',
            'App\\Controller\\DemandeDevisController:index' => '?',
            'App\\Controller\\DemandeDevisController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
