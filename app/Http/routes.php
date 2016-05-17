<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware' => ['web']], function (){
	Route::group(['middleware' => ['guest']], function (){
		Route::get('/login', ['uses' => 'AuthController@index','as' => 'auth.index']);
		Route::post('/login', ['uses' => 'AuthController@doLogin','as' => 'auth.doLogin']);
	});

	Route::group(['middleware' => ['auth']], function (){
		Route::get('/logout', ['uses' => 'AuthController@doLogout','as' => 'auth.doLogout']);
		
		Route::group(['middleware' => ['role:Administrator']], function (){
			Route::get('/user', ['uses' => 'UserController@index','as' => 'user.show']);
			Route::get('/user/add', ['uses' => 'UserController@addIndex','as' => 'user.add.index']);
			Route::post('/user/add', ['uses' => 'UserController@create','as' => 'user.add.create']);
			Route::get('/user/delete/{id}', ['uses' => 'UserController@delete', 'as' => 'user.delete']);
		});
	});
	
});