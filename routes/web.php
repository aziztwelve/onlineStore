<?php


Route::get('one', function() {
    return view('one.phonebook');
});

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



Route::get('/', [
	'uses'=>'ProductController@getContent',
	'as'=>'content'
]);

Route::get('/product/{id}', [
	'uses'=>'ProductController@show',
	'as'=>'showProduct'
]);

Route::get('/brands', [
	'uses'=>'BrandController@getBrands',
	'as'=>'brands'
]);

Route::get('/brands/{id}', [
	'uses'=>'BrandController@show',
	'as'=>'showBrand'
]);



//order
Route::get('/order', [
	'uses'=>'OrderController@showOrder',
	'as'=>'order'
]);

Route::post('/order', [
	'uses'=>'OrderController@postOrder',
	'as'=>'order'
]);


// ===================================cart==============================

Route::get('/add-to-cart/{id}', [
	'uses'=>'ProductController@getAddToCart',
	'as'=>'addToCart'
]);

Route::get('/reduce/{id}', [
	'uses'=>'ProductController@getReduceByOne',
	'as'=>'reduceByOne'
]);

Route::get('/boost/{id}', [
	'uses'=>'ProductController@getBoostByOne',
	'as'=>'boostByOne'
]);

Route::get('/remove/{id}', [
	'uses'=>'ProductController@getRemoveItem',
	'as'=>'removeItem'
]);

Route::get('/cart', [
	'uses'=>'ProductController@getCart',
	'as'=>'shoppingCart'
]);










Route::get('home', function () {
    return view('welcome');
});


Route::get('home12', function () {
    return view('welcome');
});



Route::get('contact-us', 'ContactUSController@contactUS');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');












// ================================Admin=================================

Route::get('Adlogin', function() {
	    return view('admin.auth.admin_login');
	})->name('admin_login');

// admin/service
Route::group(['prefix'=>'admin', 'middleware'=>'myadmin'], function(){

	//admin
	Route::get('/', function(){

		return view('admin.layouts.app');

	});

	Route::get('orders',[
	'uses'=>'Admin\OrdersController@getOrders',
	'as'=>'admin_orders'
	]);


	

	Route::group(['prefix'=>'product'], function(){

	Route::get('add',[
	'uses'=>'Admin\Product\AddController@getAdd',
	'as'=>'product_get_add'
	]);

	Route::post('add',[
	'uses'=>'Admin\Product\AddController@postAdd',
	'as'=>'product_post_add'
	]);


	});


});



