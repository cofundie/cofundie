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


Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index')->name('home');

Route::get('/properties', 'PropertiesController@listing')->name('listing');
Route::get('/details/{url}', 'PropertiesController@details')->name('explore');

Route::get('/dashboard', 'UsersController@dashboard')->name('dashboard');
