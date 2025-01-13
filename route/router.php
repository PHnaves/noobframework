<?php

/*
|--------------------------------------------------------------------------
| Routes
|--------------------------------------------------------------------------
|
| Here is where you can register routes for your application. For more
| information see https://github.com/nikic/FastRoute
|
*/

function routes(FastRoute\RouteCollector $router): void
{
    $router->get('/', 'App\Controllers\IndexController::index');
    $router->get('/register', 'App\Controllers\RegisterController::index');
    $router->get('/home', 'App\Controllers\HomeController::index');

    $router->get('/index', 'App\Controllers\IndexController::goToRegister');
    // Rota para o processamento de cadastro de usuário e login
    $router->post('/register', 'App\Controllers\RegisterController::registerUser');
    $router->post('/index', 'App\Controllers\IndexController::loginUser');

}