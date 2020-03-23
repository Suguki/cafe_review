<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'TopController@index');

Route::get('/cafe', 'CafeController@index')->name('cafe.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cafe/create', 'CafeController@create')->name('cafe.create');

Route::post('/cafe/store', 'CafeController@store')->name('cafe.store');
