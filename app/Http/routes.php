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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::group(['middleware' => ['web']], function () {

	Route::auth();

	Route::get('/', function () {
	    return view('halo.login');
	});

	Route::get('/login2', function () {
	    return view('halo.login');
	});

	Route::get('/home', 'HomeController@index');
	Route::get('/dashboard', 'HomeController@dashboard');
	

	/* Workmeeting Routes */
	Route::get('/workmeeting-list', 'WorkmeetingController@index');
	Route::get('/workmeeting-view/{uuid?}', 'HomeController@dashboard');
	Route::get('/workmeeting-questions', 'HomeController@dashboard');
	Route::get('/add-workmeeting', 'WorkmeetingController@create');
	Route::post('/add-workmeeting', 'WorkmeetingController@store');
	Route::get('/edit-workmeeting/{uuid?}', 'WorkmeetingController@edit');
	Route::post('/edit-workmeeting/{uuid?}', 'WorkmeetingController@update');
	Route::get('/delete-workmeeting/{uuid?}', 'WorkmeetingController@destroy');
	Route::get('/attachment-workmeeting/{uuid?}', 'HomeController@dashboard');

	/* Speakers Routes */
	Route::get('/speakers-list', 'SpeakersController@index');
	Route::get('/speaker-view/{uuid?}', 'SpeakersController@show');

	Route::get('/alerts', 'WorkmeetingController@alerts');
});

