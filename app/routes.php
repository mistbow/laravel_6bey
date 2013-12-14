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

Route::get('/', 'TopicsController@index');

Route::controller('password', 'RemindersController');

Route::controller('users', 'UsersController');

Route::resource('topics', 'TopicsController');