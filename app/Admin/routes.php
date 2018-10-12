<?php

use Encore\Admin\Controllers\UserController;
use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('demo/users',UserController::class);
    $router->resource('demo/pages',PageController::class);
    $router->resource('demo/services',ServiceController::class);
    $router->resource('demo/news',NewsController::class);
});


