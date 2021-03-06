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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('test', function(){
    return 'hello world';
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::resource('tags', 'TagController');

Route::get('tags/{id}/delete', [
    'as' => 'tags.delete',
    'uses' => 'TagController@destroy',
]);


Route::resource('api/categories', 'API\CategoryAPIController');

Route::resource('categories', 'CategoryController');

Route::get('categories/{id}/delete', [
    'as' => 'categories.delete',
    'uses' => 'CategoryController@destroy',
]);
