<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use \App\User;

Route::get('/', function () {

    return view('welcome');
});

Route::get('hello/{name}', function($name) {

	return view('hello', compact('name'));
});

// Route::get('/users', 'UserController@index');
// Route::get('/users/{id}', 'UserController@show');
Route::resource('/users', 'UserController');