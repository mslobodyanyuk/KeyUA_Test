<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Command\EmployeeCommand' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/src/Command/EmployeeCommand.php';
include_once $this->targetDirs[3].'/src/Service/EmployeeCommandService.php';

$this->privates['App\\Command\\EmployeeCommand'] = $instance = new \App\Command\EmployeeCommand(new \App\Service\EmployeeCommandService(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService())));

$instance->setName('employee:can');

return $instance;
