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
    return view('music');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {

  Route::get('/products', 'MusicController@read');

  Route::middleware(['admin'])->group(function(){
    Route::get('/product/add', 'MusicController@showCreate');
    Route::post('/product/add', 'MusicController@create');

    Route::get('/product/delete', 'MusicController@showDelete');
    Route::post('/product/delete', 'MusicController@delete');

    Route::get('/product/update/{id}', 'MusicController@showUpdate');
    Route::post('/product/update', 'MusicController@update');
  });

  Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
});
