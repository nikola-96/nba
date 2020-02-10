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

Route::get('/', 'TeamController@index');//prikazujemo sve timove

Route::get('/teams/{id}', 'TeamController@show');//prikazujemo jedan izabrani tim

Route::get('/players/{id}', 'PlayerController@show');//prikazujemo igraca koji je potreban

