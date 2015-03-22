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

/**
 * En route till roten som ska visa alla filmer. Kallar på metoden index
 * i Controllern "MoviesController".
 */
Route::get('/', 'MoviesController@index');

/**
 * En route som ska visa en enskild film. Kallar på metoden show
 * i Controllern "MoviesController".
 */
Route::get('movies/{slug}', 'MoviesController@show');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
