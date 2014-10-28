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


Route::get('regisres',array(
	'before' => 'auth | over',
	function()
	{
		return View::make('formOpen');
	}
));

Route::post('regisres_action',array('uses' => 'RestaurantController@store'));

Route::get('user', array('uses' => 'UserController@index'));

Route::get('restau', array('uses' => 'RestaurantController@index'));

Route::get('restaurant/{id}',array('uses' => 'RestaurantController@show'));

Route::get('test',function()
{
	$roles = DB::table('restaurants')->where('id_owner',Auth::id())->get();
	return count($roles);
});

Route::get('book/{id}',array('uses' => 'BookController@book'));

//Route::post('booking_action',/*implement*/);





