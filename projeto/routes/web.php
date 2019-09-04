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

Route::namespace('Admin')->name('restaurant.')->prefix('admin')->group(function() {

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