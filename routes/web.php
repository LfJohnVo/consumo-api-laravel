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

Route::get('/', 'ApiController@index');
Route::post('/consumo', 'ApiController@consumo')->name('consumo');
Route::get('/xml/{path}', 'ApiController@Descargar')->name('xml');



