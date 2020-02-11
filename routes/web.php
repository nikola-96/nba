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

Route::get('/register', 'RegisterController@create');//odlazimo na register blade

Route::post('/register', 'RegisterController@store');//saljemo podatke u bazu i stvaramo novog korisnika

Route::get('/login', 'LoginController@create')->name('login');//odlazimo na login blade

Route::post('/login', 'LoginController@store');//proveramo podatke postojeceg korisnika

Route::post('/logout', 'LoginController@destroy')->name('logout');//proveramo podatke postojeceg korisnika

Route::get('/verified/{id}', 'RegisterController@verified');//verifikujemo korisnika


