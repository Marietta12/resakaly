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

/*Front route start*/
Route::get('/', function () {
    return view('front.home.index');
});
Route::namespace('Front')->group(function () {
    Route::get('/product', 'ProductController@index')->name('front_product');
});
/*Front route end*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->namespace('Back')->group(function(){
	Route::name('admin')->get('/', 'AdminController@index');
});
