<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();

Route::get('/', 'HomeController@index');

Route::post('/api/login', 'UserController@login');

Route::post('/api/register', 'UserController@register');


/*
----------------------------------------------------------
*/

Route::post('/api/mile', 'MileController@getall');

Route::post('/api/mile/{type}', 'MileController@get');

Route::post('/api/mile/{type}/{name}/new', 'MileController@newtrip');

Route::post('/api/mile/{miles}/add', 'MileController@add');

