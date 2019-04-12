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
	Route::get('/list-user','UserController@index')->name('list-user');
	Route::get('/edit-user/{id}','UserController@edit')->name('edit-user');
	
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
Route::post('my-account','HomeController@showDetail');
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
Route::get('checkout',
	['middleware' => 'auth',
	'uses' => 'HomeController@showCheckout'])->name('checkout');
Route::post('checkout','HomeController@checkout');
Route::get('add-wish/{id}', 'HomeController@addWish')->name('add-wish');
Route::get('delete-wish/{id}','HomeController@deleteWish'
)->name('del-wish');
Route::get('wishlist', 'HomeController@showWishList')->name('wishlist');
Route::get('compare', function(){
	return view('compare');
})->name('compare');
Route::get('/product-detail/{id}','HomeController@showProduct')->name('product-detail');
Route::get('register','HomeController@showRegister')->name('register');
Route::post('register','HomeController@addUser');
Route::get('success','HomeController@showSuccess')->name('success');
Route::get('price1','HomeController@showPrice1')->name('price1');
Route::get('price2','HomeController@showPrice2')->name('price2');
Route::get('price3','HomeController@showPrice3')->name('price3');
Route::get('SUPREME','HomeController@showSupreme')->name('SUPREME');
Route::get('BLANK','HomeController@showBlank')->name('BLANK');
Route::get('BD SKATE','HomeController@showBD')->name('BD SKATE');
Route::get('INDEPENDENT','HomeController@showInde')->name('INDEPENDENT');
Route::get('BONES','HomeController@showBones')->name('BONES');
Route::get('ANDALE','HomeController@showAndele')->name('ANDALE');

