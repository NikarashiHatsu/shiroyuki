<?php

use Shiroyuki\Routes\Route;

$route = new Route;

/**
 * Routes define your routes here
 */

// Examples ===================================================================
$route->get('/', 'ExampleController@index');
$route->get('/create', 'ExampleController@create');
$route->post('/store', 'ExampleController@store');
$route->get('/{id}/detail', 'ExampleController@show');
$route->get('/{id}/edit', 'ExampleController@edit');
$route->put('/{id}/update', 'ExampleController@update');
$route->delete('/{id}/destroy', 'ExampleController@delete');