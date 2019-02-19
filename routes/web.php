
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

// Route::get('/', 'TeamsController@index')->name('Teams');


// Route::get('/teams', 'TeamsController@index')->name('Teams');
// Route::get('/teams/{id}','TeamsController@show');


// Route::get('/players', 'PlayerController@index')->name('Players');
// Route::get('/players/{id}','PlayerController@show');

// Route::get('/register',['as'=>'show-register','uses'=>'RegisterController@create']);
// Route::post('/register',['as'=>'register','uses'=>'RegisterController@store']);

// Route::get('/logout',['as'=>'logout','uses'=>'LoginController@logout']);

// Route::get('/login',['as'=>'show-login','uses'=>'LoginController@create']);
// Route::post('/login',['as'=>'login','uses'=>'LoginController@store']);

Route::group(['middleware'=>['guest']],function(){
    Route::get('/register',['as'=>'show-register','uses'=>'RegisterController@create']);
    Route::post('/register',['as'=>'register','uses'=>'RegisterController@store']);
    Route::get('/login',['as'=>'show-login','uses'=>'LoginController@create']);
    Route::post('/login',['as'=>'login','uses'=>'LoginController@store']);
});

Route::group(['middleware'=>['auth']],function(){
    Route::get('/teams', 'TeamsController@index')->name('Teams');
    Route::get('/teams/{id}','TeamsController@show');
    Route::get('/logout',['as'=>'logout','uses'=>'LoginController@logout']);
    Route::get('/players', 'PlayerController@index')->name('Players');
    Route::get('/players/{id}','PlayerController@show');
});
