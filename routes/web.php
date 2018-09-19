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

$router->get('/', ['as' => 'form', 'uses' => 'DomainController@index']);
$router->get('/domains', ['as' => 'domains.index', 'uses' => 'DomainController@showDomains']);
$router->post('/domains', ['as' => 'domains', 'uses' => 'DomainController@store']);
$router->get('/domains/{id}', ['as' => 'domains.show', 'uses' => 'DomainController@show']);
