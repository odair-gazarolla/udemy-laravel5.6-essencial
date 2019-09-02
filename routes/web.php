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

	return redirect()->route("prod_single");
	// return view('hello', compact('name'));
});

// Route::get('/users', 'UserController@index');
// Route::get('/users/{id}', 'UserController@show');
// Route::resource('/users', 'UserController');
// Route::resource('/products', 'Test\ProductsController');

Route::namespace("Test")->prefix("prod")->name("prod_")->group(function() {

	Route::get("/", 'ProductsController@index')->name("index");
	Route::get("/1", 'ProductsController@show')->name("single");
});

Route::view('/view', 'hello', ['name' => 'odair']);

Route::get('show/{name?}/{lastName?}', function($name = null, $lastName = null) {

	return $name . " " . $lastName ;
});

// Route::prefix('products')->name('products_')->group(function() {

// 	Route::get('/', function() {

// 		return "Products index";
// 	})->name("index");

// 	Route::get('/1', function() {

// 		return "Products 1";
// 	})->name("single");
// });
