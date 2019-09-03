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

	$users = \App\User::where('id', '<', 15)->get();

    return view('welcome', ['users' => $users]);
})->middleware('testCheck');

Route::group(['middleware' => ['testCheck']], function() {

	Route::get('/mid', function() {

		return "middleware 1";
	});

	Route::get('/mid/2', function() {

		return "middleware 2";
	});
});

Route::resource('/users', 'UserController');