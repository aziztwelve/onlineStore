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



//hit
Route::get('/hit', [
	'uses'=>'ProductController@getHit',
	'as'=>'hit'
]);

//novelty
Route::get('/novelty', [
	'uses'=>'ProductController@getNovelty',
	'as'=>'novelty'
]);


//sale
Route::get('/sale', [
	'uses'=>'ProductController@getSale',
	'as'=>'sale'
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
	Route::get('/',[
	'uses'=>'Admin\ProductsController@getProducts',
	'as'=>'admin'
	]);

	// Route::delete('/delete/{id}',[
	// 'uses'=>'Admin\ProductsController@deleteProducts',
	// 'as'=>'delete_product'
	// ]);

	Route::match(['get', 'post', 'delete'], '/edit/{id}',[
		'uses'=>'Admin\ProductsController@AdminProducts',
		'as'=>'admin_product'
		]);


	

	Route::get('orders',[
	'uses'=>'Admin\OrdersController@getOrders',
	'as'=>'admin_orders'
	]);


	
	//admin/product
	Route::group(['prefix'=>'product'], function(){

		//product
		Route::get('/',[
		'uses'=>'Admin\Product\AllController@getAdd',
		'as'=>'product_admin'
		]);

		 


		Route::get('add',[
		'uses'=>'Admin\Product\AddController@getAdd',
		'as'=>'product_get_add'
		]);

		Route::post('add',[
		'uses'=>'Admin\Product\AddController@postAdd',
		'as'=>'product_post_add'
		]);
	});



	//admin/brand
	Route::group(['prefix'=>'brand'], function(){

		//brand
		Route::get('/',[
		'uses'=>'Admin\Brand\AllController@getAdd',
		'as'=>'brand_admin'
		]);


		Route::get('add',[
		'uses'=>'Admin\Brand\AddController@getAdd',
		'as'=>'brand_get_add'
		]);

		Route::post('add',[
		'uses'=>'Admin\Brand\AddController@postAdd',
		'as'=>'brand_post_add'
		]);
	});


	// =====================================================================

	//admin/content
	Route::group(['prefix'=>'content'], function(){


		//content/hit
		Route::get('/hit',[
		'uses'=>'Admin\Content\HitController@getProducts',
		'as'=>'content_hit_admin'
		]);



		Route::match(['get', 'post', 'delete'], '/hit/edit/{id}',[
		'uses'=>'Admin\Content\HitController@AdminProducts',
		'as'=>'edit_hit_product'
		]);


		// ==============================================================

		//content/new



		// Route::get('/new',[
		// 'uses'=>'Admin\Content\NewController@getProducts',
		// 'as'=>'content_hit_admin'
		// ]);
		// Route::get('/new',[
		// 'uses'=>'Admin\Content\NewController@getProducts',
		// 'as'=>'new_admin'
		// ]);



		// Route::match(['get', 'post', 'delete'], '/new/edit/{id}',[
		// 'uses'=>'Admin\Content\NewController@AdminProducts',
		// 'as'=>'edit_new_product'
		// ]);




		// ==============================================================

		//content/sale
		Route::get('/sale',[
		'uses'=>'Admin\Content\SaleController@getProducts',
		'as'=>'content_sale_admin'
		]);



		Route::match(['get', 'post', 'delete'], '/sale/edit/{id}',[
		'uses'=>'Admin\Content\SaleController@AdminProducts',
		'as'=>'edit_sale_product'
		]);



		//content/sale
		Route::get('/novelty',[
		'uses'=>'Admin\Content\NoveltyController@getProducts',
		'as'=>'content_novelty_admin'
		]);



		Route::match(['get', 'post', 'delete'], '/novelty/edit/{id}',[
		'uses'=>'Admin\Content\NoveltyController@AdminProducts',
		'as'=>'edit_novelty_product'
		]);

	});


});



