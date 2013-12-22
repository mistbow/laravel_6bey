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

Route::get('/test', function() {
	return Topic::with('user')->find(1);
});

Route::get('/email', function() {

	$user = User::first();

	$mailer = new Mailers\UserMailer($user);

	$mailer->welcome()->deliver();

	return 'send';
});

Route::get('/', 'TopicsController@index');

Route::controller('password', 'RemindersController');

Route::controller('users', 'UsersController');

Route::resource('topics', 'TopicsController');

Route::resource('topics.replies', 'RepliesController');