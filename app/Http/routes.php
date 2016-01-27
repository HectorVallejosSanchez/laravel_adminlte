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
Route::get('admin', function () {
    return view('admin.admin_template');
});
Route::get('test', 'TestController@index');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
	Route::resource('users', 'UsersController');
	Route::get('users/{id}/destroy', [
		'uses' => 'UsersController@destroy',
		'as' => 'admin.users.destroy'
		]);
	Route::resource('categories', 'CategoriesController');
	Route::get('categories/{id}/destroy',[
		'uses' => 'CategoriesController@destroy',
		'as' => 'admin.categories.destroy'
		]);
});
Route::get('auth/login', [
	'uses' => 'Auth\AuthController@getLogin',
	'as' => 'auth.login'
	]);
Route::post('auth/login',[
	'uses' =>  'Auth\AuthController@postLogin',
	'as' => 'auth.login'
	]);
Route::get('auth/logout', [
	'uses' => 'Auth\AuthController@getLogout',
	'as' => 'auth.logout'
	]);