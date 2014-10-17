<?php

Route::get('/', function(){
	return "wiview"; //View::make('hello');
});


// route to show the login form
Route::get('login', array('uses' => 'HomeController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));

//route to logout
Route::get('logout',function(){ 
	return View::make('logout');
});

// Do Log out
Route::get('logou', array('uses' => 'HomeController@doLogout'));
