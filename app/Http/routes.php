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

Route::get('/', function(){
	return view('pages.index');
});

Route::get('login', function(){
	$var1 = 'first variable';
	$var2 = 'second variable';

	return view('pages.login', $var1);
});

Route::get('dashboard', function(){
	return view('pages.dashboard');
});
