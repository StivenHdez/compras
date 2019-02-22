<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!|
|
*/

Route::get('/', function () {
    return view('compra.login');
});

Route::resource('compras','ProductoController');

Route::post('login','Auth\LoginController@login')->name('login');

Route::get('/','Auth\LoginController@showloginform');

Route::post('logout','Auth\LoginController@logout')->name('logout');
// Route::resource('login','Aut\LoginController');






