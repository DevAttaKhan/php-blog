<?php

declare(strict_types=1);

use DI\ContainerBuilder;
use Http\Controllers\HomeController;
use Psr\Container\ContainerInterface;
use Core\Database;
use Core\Session;
use Http\Controllers\AuthController;
use Http\Services\AuthService;

use function DI\autowire;


$config = require base_path('config.php');




$containerBuilder = new ContainerBuilder();

$containerBuilder->addDefinitions([
    'databaseConfig' => $config['database'],
    Database::class => function (ContainerInterface $container) {
        static $instance = null;

        if ($instance === null) {
            $config = $container->get('databaseConfig');
            return new Database($config, 'root', 'root');
        }

        return $instance;
    },
    HomeController::class => autowire(),
    AuthController::class => autowire(),
    AuthService::class => autowire(),
    Session::class => autowire(),
]);


return $containerBuilder->build();
