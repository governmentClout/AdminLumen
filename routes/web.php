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

$router->get('/', 'HomeController@home');
$router->get('login','HomeController@home');
$router->get('register','UserController@register');

$router->post('login',['as'=>'login','uses'=>'UserController@login']);


$router->group(['middleware' => 'auth'], function () use ($router) {

	$router->post('create',['as'=>'create','uses'=>'UserController@create']);

});


