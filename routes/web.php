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

Route::get('/', 'SiteController@home');

Route::get('datacategory/{id}', 'SiteController@category');
Route::get('categories', 'SiteController@home');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', function() {
        return view('admin.index');
     });
    Route::get('help', function() {
        return view('admin.help');
    })->name('help');
    Route::get('about_us', function() {
        return view('admin.about_us');
    })->name('about_us');
    Route::resource('categories', 'CategoriesController');
    Route::resource('contact', 'ContactController');
    Route::resource('product', 'ProductController');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('notfound', ['as' => 'notfound', 'uses' => 'HomeController@pagenotfound']);