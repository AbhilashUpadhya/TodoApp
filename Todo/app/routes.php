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



Route::group(array('before' => 'guest') ,function(){

Route::group(array('before' => 'csrf') ,function(){



	Route::post('/login', array(
	'as' => 'login',
	'uses' => 'AuthController@postlogin'

	));
});





Route::get('/login', array(
	'as' => 'login',
	'uses' => 'AuthController@getlogin'
	));


});









Route::group(array('before' => 'auth') ,function(){

Route::group(array('before' => 'csrf') ,function(){

Route::post('/', array(
	'as' => 'home' , 
	'uses' => 'HomeController@postIndex'
	));

Route::post('/new', array(
	'as' => 'new' , 
	'uses' => 'HomeController@postNew'
	));

});
	
Route::get('/', array(
	'as' => 'home' , 
	'uses' => 'HomeController@getIndex'
	));


Route::get('/new', array(
	'as' => 'new' , 
	'uses' => 'HomeController@getNew'
	));

Route::get('/delete/{task}', array(
	'as' => 'delete' , 
	'uses' => 'HomeController@getDelete'
	));

Route::get('/logout', array(
	'as' => 'logout' , 
	'uses' => 'AuthController@getLogout'
	));

});




















