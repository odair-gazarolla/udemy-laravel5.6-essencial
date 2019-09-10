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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/restaurant/{slug}', 'HomeController@show')->name('home.single');

Route::group(['middleware' => ['auth']], function() {

	Route::namespace('Admin')->prefix('admin')->group(function() {

		Route::name('restaurant.')->prefix('restaurants')->group(function() {

			Route::get('/', 'RestaurantController@index')
				->name('index');

			Route::get('/new', 'RestaurantController@new')
				->name('new');

			Route::post('/store', 'RestaurantController@store')
				->name('store');

			Route::get('/edit/{restaurant}', 'RestaurantController@edit')
				->name('edit');

			Route::post('/update/{id}', 'RestaurantController@update')
				->name('update');

			Route::get('/remove/{id}', 'RestaurantController@destroy')
				->name('remove');

			Route::get('/photos/{id}', 'RestaurantPhotoController@index')->name('photo');
			Route::post('/photos/{id}', 'RestaurantPhotoController@store')->name('photo.save');
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

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/rel', function() {

	$restaurant = \App\Restaurant::find(1);
	print $restaurant->name;
	print '<br>';
	foreach ($restaurant->menus as $menu) {

		print "Item: {$menu->name} - Price: R$ {$menu->price}<br>";
	}
});