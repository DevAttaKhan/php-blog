<?php

use Core\Router;
use Core\Session;
use Core\ValidationException;

const BASE_PATH =  __DIR__ . '/../';

session_start();

require BASE_PATH . 'vendor/autoload.php';
require BASE_PATH . 'Core/functions.php';



$container = require base_path('container.php');

$router = new  Router($container);
require base_path('routes.php');


['REQUEST_URI' => $URI, 'REQUEST_METHOD' => $method] = $_SERVER;
$uri = explode('?', $URI)[0];



try {

    $router->route($uri, $method);
} catch (ValidationException $e) {

    Session::flash('errors', $e->errors);
    Session::flash('old', $e->old);

    return redirect($router->previousUrl());
}


Session::unflash();
