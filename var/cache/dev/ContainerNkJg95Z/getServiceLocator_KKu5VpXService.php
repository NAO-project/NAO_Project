<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.KKu5VpX' shared service.

return $this->privates['service_locator.KKu5VpX'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('newHandler' => function (): ?\App\Services\NewArticleHandler {
    return ($this->privates['App\Services\NewArticleHandler'] ?? $this->load(__DIR__.'/getNewArticleHandlerService.php'));
}));
