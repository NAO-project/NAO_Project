<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'argument_resolver.service' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\ServiceValueResolver.php';

return $this->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array('App\\Controller\\BlogController:index' => function () {
    return ($this->privates['service_locator.oTHV_I7'] ?? $this->load(__DIR__.'/getServiceLocator_OTHVI7Service.php'));
}, 'App\\Controller\\BlogController:list' => function () {
    return ($this->privates['service_locator.oTHV_I7'] ?? $this->load(__DIR__.'/getServiceLocator_OTHVI7Service.php'));
}, 'App\\Controller\\UserController:dashboardAction' => function () {
    return ($this->privates['service_locator.saQ8x6M'] ?? $this->load(__DIR__.'/getServiceLocator_SaQ8x6MService.php'));
}, 'App\\Controller\\UserController:downgradeUserAction' => function () {
    return ($this->privates['service_locator.rWoBfLf'] ?? $this->load(__DIR__.'/getServiceLocator_RWoBfLfService.php'));
}, 'App\\Controller\\UserController:login' => function () {
    return ($this->privates['service_locator.NkUBxsb'] ?? $this->load(__DIR__.'/getServiceLocator_NkUBxsbService.php'));
}, 'App\\Controller\\UserController:subscribeAction' => function () {
    return ($this->privates['service_locator.R6oaVOY'] ?? $this->load(__DIR__.'/getServiceLocator_R6oaVOYService.php'));
}, 'App\\Controller\\UserController:validateUserAction' => function () {
    return ($this->privates['service_locator.xiVkYm3'] ?? $this->load(__DIR__.'/getServiceLocator_XiVkYm3Service.php'));
}, 'App\\Controller\\BlogController::index' => function () {
    return ($this->privates['service_locator.oTHV_I7'] ?? $this->load(__DIR__.'/getServiceLocator_OTHVI7Service.php'));
}, 'App\\Controller\\BlogController::list' => function () {
    return ($this->privates['service_locator.oTHV_I7'] ?? $this->load(__DIR__.'/getServiceLocator_OTHVI7Service.php'));
}, 'App\\Controller\\UserController::dashboardAction' => function () {
    return ($this->privates['service_locator.saQ8x6M'] ?? $this->load(__DIR__.'/getServiceLocator_SaQ8x6MService.php'));
}, 'App\\Controller\\UserController::downgradeUserAction' => function () {
    return ($this->privates['service_locator.rWoBfLf'] ?? $this->load(__DIR__.'/getServiceLocator_RWoBfLfService.php'));
}, 'App\\Controller\\UserController::login' => function () {
    return ($this->privates['service_locator.NkUBxsb'] ?? $this->load(__DIR__.'/getServiceLocator_NkUBxsbService.php'));
}, 'App\\Controller\\UserController::subscribeAction' => function () {
    return ($this->privates['service_locator.R6oaVOY'] ?? $this->load(__DIR__.'/getServiceLocator_R6oaVOYService.php'));
}, 'App\\Controller\\UserController::validateUserAction' => function () {
    return ($this->privates['service_locator.xiVkYm3'] ?? $this->load(__DIR__.'/getServiceLocator_XiVkYm3Service.php'));
})));
