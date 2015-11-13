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
	$page = 'dashboard';
	return view('pages.dashboard')->with('page',$page);
});

Route::get('guards', function(){
	$guards = App\Guard::all();

	$data = array(
		'page' => 'guards',
		'guards' => $guards
	);
	return view('pages.guards')->with($data);
});

Route::get('forms', function(){
	$page="forms";
	return view('pages.forms')->with('page',$page);
});
