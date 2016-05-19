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

Route::get('mypage', function(){
	return view('mypage');
});

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

			Route::get('/project', ['uses' => 'ProjectController@index','as' => 'project.show']);
			Route::get('/project/add', ['uses' => 'ProjectController@addIndex','as' => 'project.add.index']);
			Route::post('/project/add', ['uses' => 'ProjectController@create','as' => 'project.add.create']);
			Route::get('/project/delete/{id}', ['uses' => 'ProjectController@delete', 'as' => 'project.delete']);

			Route::get('/article', ['uses' => 'ArticleController@index','as' => 'article.show']);
			Route::get('/article/add', ['uses' => 'ArticleController@addIndex','as' => 'article.add.index']);
			Route::post('/article/add', ['uses' => 'ArticleController@create','as' => 'article.add.create']);
			Route::get('/article/delete/{id}', ['uses' => 'ArticleController@delete', 'as' => 'article.delete']);

			Route::get('/comment', ['uses' => 'CommentController@index','as' => 'comment.show']);
			Route::get('/comment/add', ['uses' => 'CommentController@addIndex','as' => 'comment.add.index']);
			Route::post('/comment/add', ['uses' => 'CommentController@create','as' => 'comment.add.create']);
			Route::get('/comment/delete/{id}', ['uses' => 'CommentController@delete', 'as' => 'comment.delete']);

			Route::get('/event', ['uses' => 'EventController@index','as' => 'event.show']);
			Route::get('/event/add', ['uses' => 'EventController@addIndex','as' => 'event.add.index']);
			Route::post('/event/add', ['uses' => 'EventController@create','as' => 'event.add.create']);
			Route::get('/event/delete/{id}', ['uses' => 'EventController@delete', 'as' => 'event.delete']);
		});
	});
	
});