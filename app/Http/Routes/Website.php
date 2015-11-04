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

Route::get('/', array(
	'as' => 'splash',
	'middleware' => 'lang',
	function() {
		return Redirect::route('home-'.Config::get('app.locale'), array(), 301);
	})
);

/**
 * French.
 */
Route::get('/accueil', array('as' => 'home-fr', 'uses' => 'App\AppController@index'));
Route::get('/a-propos', array('as' => 'about-fr', 'uses' => 'App\AppController@about'));
Route::get('/travaux', array('as' => 'works-fr', 'uses' => 'App\AppController@works'));

/**
 * English.
 */
Route::get('/home', array('as' => 'home-en', 'uses' => 'App\AppController@index'));
Route::get('/about', array('as' => 'about-en', 'uses' => 'App\AppController@about'));
Route::get('/works', array('as' => 'works-en', 'uses' => 'App\AppController@works'));
