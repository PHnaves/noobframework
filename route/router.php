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
    // Exemplo de arquivo de rotas (routes.php)
    $router->get('/goToRegister', 'App\Controllers\IndexController::goToRegister');

    $router->get('/register', 'App\Controllers\RegisterController::index');
}