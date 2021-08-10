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

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', function() {
        return redirect()->route('admin.categories.index');
    });
    Route::resource('categories', 'CategoriesController');
    Route::resource('contact', 'ContactController');
    Route::resource('product', 'ProductController');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('notfound', ['as' => 'notfound', 'uses' => 'HomeController@pagenotfound']);