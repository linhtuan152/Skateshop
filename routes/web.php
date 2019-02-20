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
		return view('admin.home');
	});
	Route::get('/list-category','CategoryController@index')->name('list-cat');
	Route::get('/add-category','CategoryController@create')->name('add-cat');
	Route::post('/add-category','CategoryController@store');
	Route::get('/edit-category/{id}','CategoryController@edit')->name('edit-cat');
	Route::post('/edit-category/{id}','CategoryController@update');
	Route::get('/delete-catetogy/{id}','CategoryController@destroy')->name('delete-cat');
});


Route::get('/','HomeController@index')->name('home');
Route::get('/shop', function () {
	return view('shop');
})->name('shop');
Route::get('contact-us', function(){
	return view('contact-us');
})->name('contact-us');
Route::get('my-account',function(){
	return view('my-account');
})->name('my-account');
Route::get('cart',function(){
	return view('cart');
})->name('cart');
Route::get('checkout',function(){
	return view('checkout');
})->name('checkout');
Route::get('wishlist',function(){
	return view('wishlist');
})->name('wishlist');
Route::get('order-tracking',function(){
	return view('order-tracking');
})->name('order-tracking');
