<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/users', 'UserController@index'); // get all users records
$router->get('/users/{id}', 'UserController@show'); // get user by id

$router->post('/users', 'UserController@add'); // create new user record

$router->put('/users/{id}', 'UserController@update'); // update user record

$router->patch('/users/{id}', 'UserController@update'); // update user record

$router->delete('/users/{id}', 'UserController@delete'); // delete record