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

use Illuminate\Support\Facades\Route;

Route::post('/registrar/usuario', 'UserController@store');

Route::post('/registrar/curso', 'CursoController@store');

Route::get('/', 'MainController@index')->name('home');

Route::get('/registrar', 'MainController@create');

Route::get('/modificar/usuario/{id}', 'UserController@edit');

Route::patch('/modificar/usuario/{id}', 'UserController@update');
