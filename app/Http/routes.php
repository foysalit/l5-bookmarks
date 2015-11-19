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

Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes...
Route::get('auth/login', [
	'as' => 'auth.login',
	'uses' => 'Auth\AuthController@getLogin'
]);
Route::post('auth/login', [
	'as' => 'auth.login',
	'uses' => 'Auth\AuthController@postLogin'
]);
Route::get('auth/logout', [
	'as' => 'auth.logout',
	'uses' => 'Auth\AuthController@getLogout'
]);

// Registration Routes...
Route::get('auth/register', [
	'as' => 'auth.register',
	'uses' => 'Auth\AuthController@getRegister'
]);
Route::post('auth/register', [
	'as' => 'auth.register',
	'uses' => 'Auth\AuthController@postRegister'
]);

Route::get('/bookmarks', [
	'as' => 'bookmarks.index',
	'uses' => 'BookmarkController@index'
]);

Route::get('/bookmark/create', [
	'as' => 'bookmarks.create',
	'uses' => 'BookmarkController@create'
]);

Route::post('/bookmark', [
	'as' => 'bookmarks.post',
	'uses' => 'BookmarkController@store'
]);

Route::delete('/bookmark/{bookmark}', [
	'as' => 'bookmarks.remove',
	'uses' => 'BookmarkController@destroy'
]);