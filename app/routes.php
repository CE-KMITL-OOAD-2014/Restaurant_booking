<?php

Route::get('/', function()
{
	//return View::make('hello');
	return View::make('index');
});

Route::get('register', array('uses'=>'HomeController@showRegister'));

Route::post('register_action', 'RegisterController@store');

// route to show the login form
Route::get('login', array('uses' => 'HomeController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));

// Do Log out
Route::get('logout_action', array('uses' => 'HomeController@doLogout'));

Route::get('regisres',array('before' => 'auth | over',	'uses' => 'RestaurantController@showRegisRestaurant'));

Route::post('regisres_action',array('uses' => 'RestaurantController@store'));

Route::get('user/{id}', array('before' => 'auth' ,'uses' => 'UserController@index'));

Route::get('restaurant/{id}',array('uses' => 'RestaurantController@show'));

Route::get('book/{id}',array('before' => 'auth' ,'uses' => 'BookController@showBookPage'));

Route::post('booking_action',array('before' => 'auth' ,'uses' => 'BookController@book'));

Route::get('show/{id}',array('before' => 'auth' ,'uses'=>'UserController@showBooked'));

Route::get('showRes/{id}',array('before' => 'auth' ,'uses'=>'UserController@showRestaurant'));

Route::get('cancel/{id}',array('uses'=>'BookController@cancel'));

Route::get('manage/{id}',array('before' => 'auth' ,'uses'=>'UserController@manage'));

Route::get('delete/{id}',array('before' => 'auth' ,'uses'=>'RestaurantController@deleteRestaurant'));

Route::post('uploadpic/{id}',array('before' => 'auth' ,'uses'=>'RestaurantController@uploadPic'));

Route::get('edit/{id}',array('uses'=>'UserController@showEdit'));

Route::post('edit_action',array('uses'=>'UserController@edit'));

Route::get('editRes/{id}',array('uses'=>'RestaurantController@showEdit'));

Route::post('editRes_action/{id_res}',array('uses'=>'RestaurantController@edit'));

Route::get('showBook/{id}',array('uses'=>'BookController@showDetailBook'));

Route::get('editBook/{id}',array('uses'=>'BookController@showEdit'));

Route::post('editBook_action/{id_book}',array('uses'=>'BookController@edit'));

Route::post('search',array('uses'=>'RestaurantController@search'));
