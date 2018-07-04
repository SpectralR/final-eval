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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {

  Route::get('/products', 'MusicController@read');

  Route::get('/product/add', function(){
    return view('add');
  });

  Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
});
