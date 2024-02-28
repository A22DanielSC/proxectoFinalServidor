<?php

namespace ContainerPOGW9j8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_61FRqSIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.61FRqSI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.61FRqSI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\EmployeesController::addDefaultData' => ['privates', '.service_locator.3_zcVGD', 'get_ServiceLocator_3ZcVGDService', true],
            'App\\Controller\\EmployeesController::addEmployee' => ['privates', '.service_locator.3_zcVGD', 'get_ServiceLocator_3ZcVGDService', true],
            'App\\Controller\\EmployeesController::editEmployee' => ['privates', '.service_locator.3_zcVGD', 'get_ServiceLocator_3ZcVGDService', true],
            'App\\Controller\\EmployeesController::findEmployee' => ['privates', '.service_locator.3_zcVGD', 'get_ServiceLocator_3ZcVGDService', true],
            'App\\Controller\\EmployeesController::formToFindEmployee' => ['privates', '.service_locator.3_zcVGD', 'get_ServiceLocator_3ZcVGDService', true],
            'App\\Controller\\EmployeesController::showAllEmployees' => ['privates', '.service_locator.3_zcVGD', 'get_ServiceLocator_3ZcVGDService', true],
            'App\\Controller\\EmployeesController::showOneEmployee' => ['privates', '.service_locator.3_zcVGD', 'get_ServiceLocator_3ZcVGDService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\EmployeesController:addDefaultData' => ['privates', '.service_locator.3_zcVGD', 'get_ServiceLocator_3ZcVGDService', true],
            'App\\Controller\\EmployeesController:addEmployee' => ['privates', '.service_locator.3_zcVGD', 'get_ServiceLocator_3ZcVGDService', true],
            'App\\Controller\\EmployeesController:editEmployee' => ['privates', '.service_locator.3_zcVGD', 'get_ServiceLocator_3ZcVGDService', true],
            'App\\Controller\\EmployeesController:findEmployee' => ['privates', '.service_locator.3_zcVGD', 'get_ServiceLocator_3ZcVGDService', true],
            'App\\Controller\\EmployeesController:formToFindEmployee' => ['privates', '.service_locator.3_zcVGD', 'get_ServiceLocator_3ZcVGDService', true],
            'App\\Controller\\EmployeesController:showAllEmployees' => ['privates', '.service_locator.3_zcVGD', 'get_ServiceLocator_3ZcVGDService', true],
            'App\\Controller\\EmployeesController:showOneEmployee' => ['privates', '.service_locator.3_zcVGD', 'get_ServiceLocator_3ZcVGDService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\EmployeesController::addDefaultData' => '?',
            'App\\Controller\\EmployeesController::addEmployee' => '?',
            'App\\Controller\\EmployeesController::editEmployee' => '?',
            'App\\Controller\\EmployeesController::findEmployee' => '?',
            'App\\Controller\\EmployeesController::formToFindEmployee' => '?',
            'App\\Controller\\EmployeesController::showAllEmployees' => '?',
            'App\\Controller\\EmployeesController::showOneEmployee' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\EmployeesController:addDefaultData' => '?',
            'App\\Controller\\EmployeesController:addEmployee' => '?',
            'App\\Controller\\EmployeesController:editEmployee' => '?',
            'App\\Controller\\EmployeesController:findEmployee' => '?',
            'App\\Controller\\EmployeesController:formToFindEmployee' => '?',
            'App\\Controller\\EmployeesController:showAllEmployees' => '?',
            'App\\Controller\\EmployeesController:showOneEmployee' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
