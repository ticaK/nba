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
Route::get('/teams/{id}','TeamsController@show');


Route::get('/players', 'PlayerController@index');
Route::get('/players/{id}','PlayerController@show');

Route::get('/register',['as'=>'show-register','uses'=>'RegisterController@create']);
Route::post('/register',['as'=>'register','uses'=>'RegisterController@store']);
