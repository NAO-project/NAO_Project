<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'argument_resolver.service' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\ServiceValueResolver.php';

return $this->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array('App\\Controller\\BlogController:bloglist' => function () {
    return ($this->privates['service_locator.udmBeas'] ?? $this->load(__DIR__.'/getServiceLocator_UdmBeasService.php'));
}, 'App\\Controller\\BlogController:deleteArticleAction' => function () {
    return ($this->privates['service_locator.4wmE59A'] ?? $this->load(__DIR__.'/getServiceLocator_4wmE59AService.php'));
}, 'App\\Controller\\BlogController:modifyArticleAction' => function () {
    return ($this->privates['service_locator.ZhtcTiN'] ?? $this->load(__DIR__.'/getServiceLocator_ZhtcTiNService.php'));
}, 'App\\Controller\\BlogController:newArticleAction' => function () {
    return ($this->privates['service_locator.KKu5VpX'] ?? $this->load(__DIR__.'/getServiceLocator_KKu5VpXService.php'));
}, 'App\\Controller\\BlogController:single' => function () {
    return ($this->privates['service_locator.mK_71Bz'] ?? $this->load(__DIR__.'/getServiceLocator_MK71BzService.php'));
}, 'App\\Controller\\ContactController:index' => function () {
    return ($this->privates['service_locator.srmxvxF'] ?? $this->load(__DIR__.'/getServiceLocator_SrmxvxFService.php'));
}, 'App\\Controller\\DonController:CBcheckout' => function () {
    return ($this->privates['service_locator.KhTx4ja'] ?? $this->load(__DIR__.'/getServiceLocator_KhTx4jaService.php'));
}, 'App\\Controller\\DonController:index' => function () {
    return ($this->privates['service_locator.MAB7qRx'] ?? $this->load(__DIR__.'/getServiceLocator_MAB7qRxService.php'));
}, 'App\\Controller\\MapController:Deny' => function () {
    return ($this->privates['service_locator.VXkrEKb'] ?? $this->load(__DIR__.'/getServiceLocator_VXkrEKbService.php'));
}, 'App\\Controller\\MapController:MapAction' => function () {
    return ($this->privates['service_locator.BTVloeW'] ?? $this->load(__DIR__.'/getServiceLocator_BTVloeWService.php'));
}, 'App\\Controller\\MapController:Validate' => function () {
    return ($this->privates['service_locator.cumVKIr'] ?? $this->load(__DIR__.'/getServiceLocator_CumVKIrService.php'));
}, 'App\\Controller\\ResearchController:index' => function () {
    return ($this->privates['service_locator.d9aQ9np'] ?? $this->load(__DIR__.'/getServiceLocator_D9aQ9npService.php'));
}, 'App\\Controller\\UserController:dashboardAction' => function () {
    return ($this->privates['service_locator.saQ8x6M'] ?? $this->load(__DIR__.'/getServiceLocator_SaQ8x6MService.php'));
}, 'App\\Controller\\UserController:downgradeUserAction' => function () {
    return ($this->privates['service_locator.rWoBfLf'] ?? $this->load(__DIR__.'/getServiceLocator_RWoBfLfService.php'));
}, 'App\\Controller\\UserController:login' => function () {
    return ($this->privates['service_locator.NkUBxsb'] ?? $this->load(__DIR__.'/getServiceLocator_NkUBxsbService.php'));
}, 'App\\Controller\\UserController:modifyUserAction' => function () {
    return ($this->privates['service_locator.6G1AhUG'] ?? $this->load(__DIR__.'/getServiceLocator_6G1AhUGService.php'));
}, 'App\\Controller\\UserController:subscribeAction' => function () {
    return ($this->privates['service_locator.R6oaVOY'] ?? $this->load(__DIR__.'/getServiceLocator_R6oaVOYService.php'));
}, 'App\\Controller\\UserController:validateUserAction' => function () {
    return ($this->privates['service_locator.xiVkYm3'] ?? $this->load(__DIR__.'/getServiceLocator_XiVkYm3Service.php'));
}, 'App\\Controller\\BlogController::bloglist' => function () {
    return ($this->privates['service_locator.udmBeas'] ?? $this->load(__DIR__.'/getServiceLocator_UdmBeasService.php'));
}, 'App\\Controller\\BlogController::deleteArticleAction' => function () {
    return ($this->privates['service_locator.4wmE59A'] ?? $this->load(__DIR__.'/getServiceLocator_4wmE59AService.php'));
}, 'App\\Controller\\BlogController::modifyArticleAction' => function () {
    return ($this->privates['service_locator.ZhtcTiN'] ?? $this->load(__DIR__.'/getServiceLocator_ZhtcTiNService.php'));
}, 'App\\Controller\\BlogController::newArticleAction' => function () {
    return ($this->privates['service_locator.KKu5VpX'] ?? $this->load(__DIR__.'/getServiceLocator_KKu5VpXService.php'));
}, 'App\\Controller\\BlogController::single' => function () {
    return ($this->privates['service_locator.mK_71Bz'] ?? $this->load(__DIR__.'/getServiceLocator_MK71BzService.php'));
}, 'App\\Controller\\ContactController::index' => function () {
    return ($this->privates['service_locator.srmxvxF'] ?? $this->load(__DIR__.'/getServiceLocator_SrmxvxFService.php'));
}, 'App\\Controller\\DonController::CBcheckout' => function () {
    return ($this->privates['service_locator.KhTx4ja'] ?? $this->load(__DIR__.'/getServiceLocator_KhTx4jaService.php'));
}, 'App\\Controller\\DonController::index' => function () {
    return ($this->privates['service_locator.MAB7qRx'] ?? $this->load(__DIR__.'/getServiceLocator_MAB7qRxService.php'));
}, 'App\\Controller\\MapController::Deny' => function () {
    return ($this->privates['service_locator.VXkrEKb'] ?? $this->load(__DIR__.'/getServiceLocator_VXkrEKbService.php'));
}, 'App\\Controller\\MapController::MapAction' => function () {
    return ($this->privates['service_locator.BTVloeW'] ?? $this->load(__DIR__.'/getServiceLocator_BTVloeWService.php'));
}, 'App\\Controller\\MapController::Validate' => function () {
    return ($this->privates['service_locator.cumVKIr'] ?? $this->load(__DIR__.'/getServiceLocator_CumVKIrService.php'));
}, 'App\\Controller\\ResearchController::index' => function () {
    return ($this->privates['service_locator.d9aQ9np'] ?? $this->load(__DIR__.'/getServiceLocator_D9aQ9npService.php'));
}, 'App\\Controller\\UserController::dashboardAction' => function () {
    return ($this->privates['service_locator.saQ8x6M'] ?? $this->load(__DIR__.'/getServiceLocator_SaQ8x6MService.php'));
}, 'App\\Controller\\UserController::downgradeUserAction' => function () {
    return ($this->privates['service_locator.rWoBfLf'] ?? $this->load(__DIR__.'/getServiceLocator_RWoBfLfService.php'));
}, 'App\\Controller\\UserController::login' => function () {
    return ($this->privates['service_locator.NkUBxsb'] ?? $this->load(__DIR__.'/getServiceLocator_NkUBxsbService.php'));
}, 'App\\Controller\\UserController::modifyUserAction' => function () {
    return ($this->privates['service_locator.6G1AhUG'] ?? $this->load(__DIR__.'/getServiceLocator_6G1AhUGService.php'));
}, 'App\\Controller\\UserController::subscribeAction' => function () {
    return ($this->privates['service_locator.R6oaVOY'] ?? $this->load(__DIR__.'/getServiceLocator_R6oaVOYService.php'));
}, 'App\\Controller\\UserController::validateUserAction' => function () {
    return ($this->privates['service_locator.xiVkYm3'] ?? $this->load(__DIR__.'/getServiceLocator_XiVkYm3Service.php'));
})));
