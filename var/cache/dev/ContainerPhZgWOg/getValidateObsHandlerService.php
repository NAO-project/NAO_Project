<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Services\ValidateObsHandler' shared autowired service.

include_once $this->targetDirs[3].'\\src\\Services\\ValidateObsHandler.php';

return $this->privates['App\Services\ValidateObsHandler'] = new \App\Services\ValidateObsHandler(($this->services['doctrine.orm.default_entity_manager'] ?? $this->load(__DIR__.'/getDoctrine_Orm_DefaultEntityManagerService.php')), ($this->privates['App\Services\SubscribeDataGenerator\FlusherService'] ?? $this->load(__DIR__.'/getFlusherServiceService.php')), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));