<?php

use App\Http\Middleware;

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

Route::post('/teams/{team_id}', 'CommentController@store')->middleware('words');//prosledjujemo komentar u bazu i vrsimo proveru zabranjenih reci
Route::get('/forbidden_comment', 'CommentController@show');//ukoliko postoje zabranjene reci u komentaru, prikazujemo ih 

Route::get('/news', 'NewsController@index');//prikazuje sve novosti iz baze
Route::get('/news/{id}', 'NewsController@show');//prikazuje trazenu vest koju je korisnik izabrao
Route::get('/news/team/{id}', 'NewsController@showTeamNews');
Route::get('/create/news','NewsController@create');
Route::post('/create/news','NewsController@store');


