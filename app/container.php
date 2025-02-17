<?php

declare(strict_types = 1);

use Core\Router;
use DI\ContainerBuilder;
use Http\Controllers\HomeController;
use Http\Services\Test;
use Core\Database;


use function DI\autowire;

$config = require base_path('config.php');

$containerBuilder = new ContainerBuilder();

$containerBuilder->addDefinitions([
    'dbConfig' => $config['database'],
    Database::class => function ($container) {
        static $dbInstance = null;
        if ($dbInstance === null) {
            $config = $container->get('dbConfig');
            $dbInstance = new \Core\Database($config, 'root', 'admin');
        }
        return $dbInstance;
    },

    HomeController::class => autowire(),
    Test::class => autowire()
]);


return $containerBuilder->build();
