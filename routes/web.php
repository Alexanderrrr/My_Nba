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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teams', 'TeamsController@index');
Route::get('/teams/{teamId}', 'TeamsController@show');
Route::get('/players/{playerId}', 'PlayersController@index');

Route::get('/register', 'RegisterController@show');
Route::post('/register', 'RegisterController@store');

Route::get('/login', 'LoginController@show');
Route::post('/login', 'LoginController@create');
Route::get('/logout', 'LoginController@logout');
