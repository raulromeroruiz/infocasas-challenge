<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\TasksController;

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

$router->group(['prefix' => 'api/v1'], function () use ($router) {
    $router->get('/tasks', 'TasksController@index');
    $router->get('/tasks/{id}', 'TasksController@get');
    $router->post('/task', 'TasksController@store');
    $router->put('/task/{id}', 'TasksController@update');
    $router->delete('/tasks/{id}', 'TasksController@delete');
});