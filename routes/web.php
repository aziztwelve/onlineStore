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


Route::get('/home', function () {
    return view('master');
});
Route::get('/one', function () {
    return view('one');
});


// Route::get('/one', function () {
//     return view('one');
// });
Route::get('one', 'AvoContactController@contactpage')->name('one');
Route::post('one', 'AvoContactController@store')->name('one_store');



Route::get('contact-us', 'ContactUSController@contactUS');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);