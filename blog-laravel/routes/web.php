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



Auth::routes();

Route::get('/', 'BlogController@index')->name('home');
Route::get('/show/{post}', 'BlogController@show')->name('show');
Route::post('/show/{post}/comment', 'BlogController@commentStore');
Route::get('/category/{category}', 'BlogController@category');
Route::get('/search', 'BlogController@search');

