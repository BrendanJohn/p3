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

Route::get('/', function () {
    return view('home.index');
});

Route::get('/generateIpsum','IpsumController@getIndex');
Route::post('/generateIpsum','IpsumController@postIndex');
Route::get('/user', function () {
	return view('usercontroller');
});
Route::post('/user', 'UserController@postIndex');
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
