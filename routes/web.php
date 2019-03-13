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
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
	Route::get('/',function(){
		return view('admin.master');
	})->name('admin-home');
	Route::get('/list-category','CategoryController@index')->name('list-cat');
	Route::get('/add-category','CategoryController@create')->name('add-cat');
	Route::post('/add-category','CategoryController@store');
	Route::get('/edit-category/{id}','CategoryController@edit')->name('edit-cat');
	Route::post('/edit-category/{id}','CategoryController@update');
	Route::get('/delete-catetogy/{id}','CategoryController@destroy')->name('delete-cat');
	Route::get('/add-product','ProductController@create')->name('add-pro');
	Route::post('/add-product','ProductController@store');
	Route::get('list-product','ProductController@index')->name('list-pro');
	Route::get('/edit-product/{id}','ProductController@edit')->name('edit-pro');
	Route::post('/edit-product/{id}','ProductController@update');
	Route::get('/delete-product/{id}','ProductController@destroy')->name('delete-pro');
});


Route::get('/','HomeController@index')->name('home');
Route::get('/shop', 'HomeController@showShop')->name('shop');
Route::get('/deck', 'HomeController@showDeck')->name('deck');
Route::get('/truck', 'HomeController@showTruck')->name('truck');
Route::get('/wheels', 'HomeController@showWheels')->name('wheels');
Route::get('/bearings', 'HomeController@showBearings')->name('bearings');
Route::get('/griptape', 'HomeController@showgriptape')->name('griptape');
Route::get('contact-us','HomeController@showContact')->name('contact-us');
Route::get('my-account',[
	'middleware' => 'auth', 
	'uses' => 'HomeController@showAcc'])->name('my-account');
Route::get('login', 'LoginController@showLogin')->name('login');
Route::post('login','LoginController@checkLogin');
Route::get('log-out','LoginController@logOut')->name('log-out');
//--------CART-------
Route::get('cart', [
	'uses' => 'CartController@showCart'
])->name('cart');
// Route::get('update-cart','CartController@updateCart')->name('update-cart');
Route::post('updatecart','CartController@updateCart')->name('updatecart');
Route::get('add-cart/{id}',
	['uses' => 'CartController@addCart']
)->name('add-cart');
Route::get('delete-cart/{id}',
	['uses' => 'CartController@deleteCart']
)->name('del-cart');
//--------CART END--------
Route::get('checkout', function(){
	return view('checkout');
})->name('checkout');
Route::get('wishlist', function(){
	return view('wishlist');
})->name('wishlist');
Route::get('compare', function(){
	return view('compare');
})->name('compare');
Route::get('product-detail', function(){
	return view('product-detail');
})->name('product-detail');
