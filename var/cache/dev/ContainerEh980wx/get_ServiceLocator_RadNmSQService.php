<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.RadNmSQ' shared service.

return $this->privates['.service_locator.RadNmSQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'session' => ['privates', 'App\\Services\\SessionService', 'getSessionServiceService.php', true],
], [
    'session' => 'App\\Services\\SessionService',
]);
