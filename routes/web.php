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

Route::any('/public', 'Controller@index');

Route::get('/create','Controller@create');

Route::get('/delete','Controller@delete');

Route::post('/','Controller@index');
