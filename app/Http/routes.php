<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', array(
	'as' 		=> 'public-home',
 	function() {
 		return view('welcome');
 	}
));

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    
	// Authentication routes
	Route::get('login', array(
		'as' => 'get-login', 
		'uses' => 'Auth\AuthController@getLogin'
	));
	Route::post('login', array(
		'as' => 'post-login', 
		'uses' => 'Auth\AuthController@postLogin'
	));
	Route::get('logout', array(
		'as' => 'get-logout', 
		'uses' => 'Auth\AuthController@getLogout'
	));

	// Password reset link request routes
	Route::get('password/email', array(
		'as' => 'reset-get-email', 
		'uses' => 'Auth\PasswordController@getEmail'
	));
	Route::post('password/email', array(
		'as' => 'reset-post-email', 
		'uses' => 'Auth\PasswordController@postEmail'
	));

	// Password reset routes
	Route::get('password/reset/{token}', array(
		'as' => 'password-get-reset', 
		'uses' => 'Auth\PasswordController@getReset'
	));
	Route::post('password/reset', array(
		'as' => 'password-post-reset', 
		'uses' => 'Auth\PasswordController@postReset'
	));

	
	/* Private Routes */
	Route::get('/home', array( 
		'as'	=> 'private-dashboard',
		'uses'	=> 'HomeController@index'
	));


});
