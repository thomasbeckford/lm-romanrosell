<?php

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

$router->group(['prefix' => 'api', 'middleware' => 'auth'], function () use ($router) {
  $router->get('personas',  ['uses' => 'PersonaController@showAllPersonas']);

  $router->get('personas/{id}', ['uses' => 'PersonaController@showOnePersona']);

  $router->post('personas', ['uses' => 'PersonaController@create']);

  $router->delete('personas/{id}', ['uses' => 'PersonaController@delete']);

  $router->put('personas/{id}', ['uses' => 'PersonaController@update']);
});