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

//http://localhost/lumen/public/books
$router->get('books', ['uses' => 'BookController@showAllBooks']);

//http://localhost/lumen/public/2

$router->get('books/{id}', ['uses' => 'BookController@showOneBooks']);


