<?php

declare(strict_types=1);

use Core\Router;
use DI\ContainerBuilder;
use Http\Controllers\HomeController;
use Http\Services\Test;

use function DI\autowire;

$containerBuilder = new ContainerBuilder();

$containerBuilder->addDefinitions([
    HomeController::class => autowire(),
    Test::class => autowire()
]);


return $containerBuilder->build();
