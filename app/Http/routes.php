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

	Route::get('/home', 'HomeController@dashboard');
	Route::get('/dashboard', 'HomeController@dashboard');
	

	/* Workmeeting Routes */
	Route::get('/workmeeting-list/{category?}', 'WorkmeetingController@index');
	Route::get('/hearing-list', 'WorkmeetingController@hearing');
	Route::get('/workmeeting-view/{uuid?}', 'HomeController@dashboard');
	Route::get('/workmeeting-questions', 'HomeController@dashboard');
	Route::get('/add-workmeeting/{category?}', 'WorkmeetingController@create');
	Route::post('/add-workmeeting', 'WorkmeetingController@store');
	Route::get('/edit-workmeeting/{uuid?}', 'WorkmeetingController@edit');
	Route::post('/edit-workmeeting/{uuid?}', 'WorkmeetingController@update');
	Route::get('/delete-workmeeting/{uuid?}', 'WorkmeetingController@destroy');
	Route::get('/attachment-workmeeting/{uuid?}', 'HomeController@dashboard');
	Route::get('/show-workmeeting/{uuid?}', 'WorkmeetingController@show');
	Route::get('/workmeeting-questions/{uuid?}', 'WorkmeetingController@questions');
	Route::get('/question-list', 'WorkmeetingController@listQuestionDoc');
	Route::get('/answer-list', 'WorkmeetingController@listAnswerDoc');
	Route::get('/show-question/{uuid?}/{docid?}', 'WorkmeetingController@showQuestion');
	Route::get('/show-answer/{uuid?}/{docid?}', 'WorkmeetingController@showAnswer');

	/* Document Routes */
	Route::get('/add-document/{uuid?}', 'DocumentController@create');
	Route::post('/add-document/{uuid?}', 'DocumentController@store');
	Route::get('/delete-document/{doc_uuid?}/{uuid?}', 'DocumentController@destroy');

	/* Speakers Routes */
	Route::get('/speakers-list', 'SpeakersController@index');
	Route::get('/speaker-view/{uuid?}', 'SpeakersController@show');
	Route::get('/add-speaker', 'SpeakersController@create');
	Route::post('/add-speaker', 'SpeakersController@store');
	Route::post('/edit-speaker/{uuid?}', 'SpeakersController@update');
	Route::post('/change-speaker-photo', 'SpeakersController@updatePhoto');

	Route::get('/alerts', 'WorkmeetingController@alerts');

	/* Kementan Routes */
	Route::get('/kementan-list', 'SpeakersController@kementan');
	Route::get('/receiver-list', 'ReceiverController@index');
	Route::get('/add-receiver', 'ReceiverController@create');
	Route::post('/add-receiver', 'ReceiverController@store');
	Route::get('/edit-receiver/{uuid}', 'ReceiverController@edit');
	Route::post('/edit-receiver', 'ReceiverController@update');

	/* Questions Routes */
	Route::get('/add-question/{uuid?}', 'QuestionsController@create');
	Route::post('/add-question/{uuid?}', 'QuestionsController@store');
	Route::get('/edit-question/{id?}/{uuid?}', 'QuestionsController@edit');
	Route::post('/edit-question/{id?}/{uuid?}', 'QuestionsController@update');
	Route::get('/delete-question/{id?}/{uuid?}', 'QuestionsController@destroy');

	/* Assistant Routes */
	Route::get('/add-assistant/{uuid?}', 'AssistantController@create');
	Route::post('/add-assistant/{uuid?}', 'AssistantController@store');
	Route::get('/edit-assistant/{id?}/{uuid?}', 'AssistantController@edit');
	Route::post('/edit-assistant/{id?}/{uuid?}', 'AssistantController@update');
	Route::get('/delete-assistant/{id?}/{uuid?}', 'AssistantController@destroy');


	/* Email Routes */
	Route::get('/form-email/{uuid?}', 'EmailController@form');
	Route::post('/process-email/{uuid?}', 'EmailController@process');
	Route::get('/form-email-question/{uuid?}', 'EmailController@formQuestion');
	Route::post('/process-email-question/{uuid?}', 'EmailController@processQuestion');
	Route::get('/form-email-answer/{uuid?}', 'EmailController@formAnswer');
	Route::post('/process-email-answer/{uuid?}', 'EmailController@processAnswer');

	Route::get('/send', 'EmailController@send');
	Route::get('/testmail', 'EmailController@testMail');

	Route::get('sendemail', function () {

	    $data = array(
	        'name' => "Hubungan Antar Lembaga - Kementan",
	    );

	    Mail::send('emails.welcome', $data, function ($message) {

	        $message->from('hal@pertanian.go.id', 'Hubungan Antar Lembaga - Kementerian Pertanian');

	        $message->to('rophenk@gmail.com')->subject('Learning Laravel test email');

	    });

	    return "Your email has been sent successfully to : rophenk@gmail.com";

	});

	/* Redis Routes */
	Route::get('/testredis', function() {
		$redis = app()->make('redis');
		$redis->set("key1", "testValue");
		return $redis->get("key1");

	});

});

