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
Route::get('/', 'WelcomeController@index');

// Auth::routes();

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');

// crud admin
Route::get('/admin', 'AdminController@index');
Route::get('/admin/create', 'AdminController@create');
Route::post('/admin/store', 'AdminController@store');
Route::get('/admin/edit/{id}', 'AdminController@edit');
Route::post('/admin/update', 'AdminController@update');
Route::get('/admin/delete/{id}', 'AdminController@delete');

// crud file
Route::get('/file', 'FileController@index');
Route::get('/file/create', 'FileController@create');
Route::post('/file/store', 'FileController@store');
Route::get('/file/edit/{id}', 'FileController@edit');
Route::post('/file/update', 'FileController@update');
Route::get('/file/delete/{id}', 'FileController@delete');
