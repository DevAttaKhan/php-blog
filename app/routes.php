<?php

use Http\Controllers\AuthController;
use Http\Controllers\HomeController;

$router->get('/', [HomeController::class, 'index']);
$router->get('/register', [AuthController::class, 'showRegisterPage']);
$router->post('/register', [AuthController::class, 'register']);
