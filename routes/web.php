<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/categories', 'CategoriesController@index');
$router->get('/categories/{categoryId}', 'CategoriesController@show');
$router->get('/categories/{categoryId}/products', 'CategoriesController@showProducts');
$router->get('/products', 'ProductsController@index');
$router->get('/products/{productId}', 'ProductsController@show');
