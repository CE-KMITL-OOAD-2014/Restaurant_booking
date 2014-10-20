<?php

Route::get('/', function()
{
	//return View::make('hello');
	return View::make('home');
});


Route::get('register', function()
{
	return View::make('register');
});


Route::post('register_action', 'RegisterController@store');


// route to show the login form
Route::get('login', array('uses' => 'HomeController@showLogin'));


// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));


//route to logout
Route::get('logout',function(){ 
	return View::make('logout');
});


// Do Log out
Route::get('logout_action', array('uses' => 'HomeController@doLogout'));


Route::get('regisres',function()
{
	return View::make('formOpen');
});

Route::post('openRes_action',function()
{
	$data[] = Input::all();
	return $data;
});

Route::get('user', array('uses' => 'UserController@index'));





