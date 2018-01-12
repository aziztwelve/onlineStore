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



Route::get('contact-us', 'ContactUSController@contactUS');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);