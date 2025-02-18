<?php

declare(strict_types=1);

use DI\ContainerBuilder;
use Http\Controllers\HomeController;
use Http\Services\Test;
use Psr\Container\ContainerInterface;
use Core\Database;


use function DI\autowire;


$config = require base_path('config.php');




$containerBuilder = new ContainerBuilder();

$containerBuilder->addDefinitions([
    'databaseConfig' => $config['database'],
    Database::class => function (ContainerInterface $container) {
        static $instance = null;

        if ($instance === null) {
            $config = $container->get('databaseConfig');
            return new Database($config, 'root', 'amdin');
        }

        return $instance;
    },
    HomeController::class => autowire(),
    Test::class => autowire(),
]);


return $containerBuilder->build();
