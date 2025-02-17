<?php

use Core\Router;
use Http\Services\Test;

const BASE_PATH =  __DIR__ . '/../';
require BASE_PATH . 'Core/functions.php';

require BASE_PATH . 'vendor/autoload.php';
$container = require base_path('container.php');

$router = new  Router($container);
require base_path('routes.php');


['REQUEST_URI' => $URI, 'REQUEST_METHOD' => $method] = $_SERVER;
$uri = explode('?', $URI)[0];



$router->route($uri, $method);
