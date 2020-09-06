<?php

use Shiroyuki\Routes\Route;

$route = new Route;

/**
 * Routes define your routes here
 */

// Examples ===================================================================
$route->get('/', 'ExampleController@index');
$route->get('/create', 'ExampleController@create');
$route->get('/show', 'ExampleController@show');
$route->post('/store', 'ExampleController@store');
$route->get('/edit', 'ExampleController@edit');
$route->put('/update', 'ExampleController@update');
$route->delete('/destroy', 'ExampleController@destroy');