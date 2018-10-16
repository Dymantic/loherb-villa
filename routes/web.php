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

Route::view('test', 'testimagesize');
Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect']], function() {
    Route::get('/', 'PagesController@home');

    Route::get('/about', 'PagesController@about');

    Route::get('/contact', 'PagesController@contact');

    Route::get('rooms', 'RoomsController@index');
    Route::get('rooms/{room}', 'RoomsController@show');
    
    Route::get('blog', 'BlogController@index');
    Route::get('blog/{slug}', 'BlogController@show');

});
Route::post('contact', 'ContactController@store');
