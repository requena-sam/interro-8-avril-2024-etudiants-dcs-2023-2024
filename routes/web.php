<?php

use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\JiriController;
use App\Http\Controllers\RegisterUserController;

/** @var Core\Router $router */
$router->get('/', [JiriController::class, 'index']);

$router->get('/jiris', [JiriController::class, 'index']);

$router->get('/jiri', [JiriController::class, 'show']);

$router->get('/jiri/create', [JiriController::class, 'create']);
$router->post('/jiri', [JiriController::class, 'store'])->csrf();

$router->get('/jiri/edit', [JiriController::class, 'edit']);
$router->patch('/jiri', [JiriController::class, 'update'])->csrf();

$router->get('/login', [AuthenticatedSessionController::class, 'create']);
$router->post('/login', [AuthenticatedSessionController::class, 'store']);

$router->get('/register', [RegisterUserController::class, 'create']);
$router->post('/register', [RegisterUserController::class, 'store']);


$router->delete('/jiri', [JiriController::class, 'destroy'])->csrf();


