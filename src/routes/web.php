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

Auth::routes();

Route::get('/', 'TopController@index');

Route::get('/cafe', 'CafeController@index')->name('cafe.index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cafe/create', 'CafeController@create')->name('cafe.create');

Route::get('/cafe/{id}', 'CafeController@show')->name('cafe.show');

Route::post('/cafe/store', 'CafeController@store')->name('cafe.store');

Route::post('/cafe/sort', 'CafeController@sort')->name('cafe.sort');

Route::get('/cafe/edit/{id}', 'CafeController@edit')->name('cafe.edit');

Route::post('/cafe/update/{id}', 'CafeController@update')->name('cafe.update');

Route::post('/cafe/delete/{id}', 'CafeController@delete')->name('cafe.delete');
