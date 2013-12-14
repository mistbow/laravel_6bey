<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});
Route::get('password_resets/reset/{token}', 'PasswordResetsController@reset');

Route::post('password_resets/reset/{token}', 'PasswordResetsController@postReset');

Route::resource('password_resets', 'PasswordResetsController');

Route::controller('users', 'UsersController');