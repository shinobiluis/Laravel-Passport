<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| rouphp artisan config:cleartes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
 * Creamo la ruta y le modemosn el middleware auth para que
 * solo los usuarios autenticados puedan acceder
 */
Route::get('/client', 'ClientController@index')->middleware('auth');