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

Route::get('/', 'CafeController@index')->name('cafe.index');

Route::get('/home', 'CafeController@index')->name('home');

Route::get('/cafe/create', 'CafeController@create')->middleware('auth')->name('cafe.create');

Route::get('/cafe/{id}', 'CafeController@show')->name('cafe.show');

Route::post('/cafe/store', 'CafeController@store')->middleware('auth')->name('cafe.store');

Route::get('/cafe/edit/{id}', 'CafeController@edit')->middleware('auth')->name('cafe.edit');

Route::post('/cafe/update/{id}', 'CafeController@update')->middleware('auth')->name('cafe.update');

Route::post('/cafe/delete/{id}', 'CafeController@delete')->middleware('auth')->name('cafe.delete');

Route::post('/cafe/upload/{id}', 'CafeController@upload')->middleware('auth')->name('cafe.upload');

Route::get('/cafe/{cafe_id}/review/create', 'ReviewController@create')->name('review.create');

Route::post('/cafe/{cafe_id}/review/store', 'ReviewController@store')->name('review.store');
