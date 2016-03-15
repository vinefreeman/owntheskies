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

Route::bind('airports', function($slug)
{
	return App\Airport::whereSlug($slug)->first();
});

Route::bind('airlines', function($slug)
{
	return App\Airline::whereSlug($slug)->first();
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Basic routes...
Route::get('/', 'WelcomeController@index');
Route::get('/home', 'WelcomeController@index');

// Category Specific
Route::resource('airlines', 'AirlinesController', [
	'names' => [
		'index' 	=> 'airlines_path',
		'show' 		=> 'airline_path',
		'showimg'	=> 'airline_path',
		'edit' 		=> 'airline_path',
		'store' 	=> 'airline_path',
		'update' 	=> 'airline_path',
		'destroy' 	=> 'airline_path',
		'create' 	=> 'airline_path',
		]

]);

Route::resource('airports', 'AirportsController', [
	'names' => [
		'index' 	=> 'airports_path',
		'show' 		=> 'airport_path',
		'showimg'	=> 'airport_path',
		'edit' 		=> 'airport_path',
		'store' 	=> 'airport_path',
		'update' 	=> 'airport_path',
		'destroy'	=> 'airport_path',
		'create' 	=> 'airport_path',
		]

]);
