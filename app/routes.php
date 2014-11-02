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

Route::get('regisres',array('before' => 'auth | over',	'uses' => 'RestaurantController@index'));

Route::post('regisres_action',array('uses' => 'RestaurantController@store'));

Route::get('user/{id}', array('before' => 'auth' ,'uses' => 'UserController@index'));

Route::get('restaurant/{id}',array('uses' => 'RestaurantController@show'));

Route::get('book/{id}',array('before' => 'auth' ,'uses' => 'BookController@index'));

Route::post('booking_action',array('before' => 'auth' ,'uses' => 'BookController@book'));

Route::get('show/{id}',array('before' => 'auth' ,'uses'=>'UserController@showBooked'));

Route::get('showRes/{id}',array('before' => 'auth' ,'uses'=>'UserController@showRestaurant'));

Route::get('cancel/{id}',array('uses'=>'BookController@cancel'));

Route::get('test',function()
{
	echo strtotime(date("l d/m"))."<br>"; 
	echo strtotime($book->date)."<br>";
});