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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function() {

	Route::namespace('Admin')->prefix('admin')->group(function() {

		Route::name('restaurant.')->group(function() {

			Route::get('restaurants', 'RestaurantController@index')
				->name('index');

			Route::get('restaurants/new', 'RestaurantController@new')
				->name('new');

			Route::post('restaurants/store', 'RestaurantController@store')
				->name('store');

			Route::get('restaurants/edit/{restaurant}', 'RestaurantController@edit')
				->name('edit');

			Route::post('restaurants/update/{id}', 'RestaurantController@update')
				->name('update');

			Route::get('restaurants/remove/{id}', 'RestaurantController@destroy')
				->name('remove');
		});

		Route::name('user.')->group(function() {

			Route::get('users', 'UserController@index')
				->name('index');

			Route::get('users/new', 'UserController@new')
				->name('new');

			Route::post('users/store', 'UserController@store')
				->name('store');

			Route::get('users/edit/{user}', 'UserController@edit')
				->name('edit');

			Route::post('users/update/{id}', 'UserController@update')
				->name('update');

			Route::get('users/remove/{id}', 'UserController@destroy')
				->name('remove');
		});

		Route::name('menu.')->prefix('menus')->group(function() {

			Route::get('/', 'MenuController@index')
				->name('index');

			Route::get('/new', 'MenuController@new')
				->name('new');

			Route::post('/store', 'MenuController@store')
				->name('store');

			Route::get('/edit/{menu}', 'MenuController@edit')
				->name('edit');

			Route::post('/update/{id}', 'MenuController@update')
				->name('update');

			Route::get('/remove/{id}', 'MenuController@destroy')
				->name('remove');
		});

	});
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
