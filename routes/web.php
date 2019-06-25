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
})->name('home');
Route::namespace('Front')->group(function () {
    Route::get('/product', 'ProductController@index')->name('front_product');
    Route::get('/detail_product', 'ProductController@detailproduct')->name('front_detailproduct');
    Route::get('/blog', 'BlogController@index')->name('front_blog');
    Route::get('/contact', 'ContactController@index')->name('front_contact');
    Route::get('/about', 'AboutController@index')->name('front_about');

});
/*Front route end*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->namespace('Back')->group(function(){
	Route::name('admin')->get('/', 'AdminController@index');
});
