<?php

/** @var \Laravel\Lumen\Routing\Router $router */

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET,HEAD,PUT,POST,DELETE,PATCH,OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, X-Auth-Token, Origin, Authorization');
Route::options('/{any:.*}', [function (){ 
   return response(['status' => 'success']); 
  }
 ]
);

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
$router->get('basketball', ['uses' => 'BasketballController@showAllStatement']);

//http://localhost/lumen/public/2

$router->get('basketball/{id}', ['uses' => 'BasketballController@showOneStatement']);


