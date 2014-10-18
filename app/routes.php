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
Route::get('logou', array('uses' => 'HomeController@doLogout'));


Route::get('openRes',function()
{
	return View::make('formOpen');
});

Route::get('edit',function()
{
	$user = new CoreUser;
      $user->setName('Repo11');
      $user->setLastname('Edit');
      $user->setPassword('123456');
      $user->setEmail('repo11@mail.com');
      $user->setTel('8888888888');

      $eloquentRepo = new UserRepository();
      $eloquentRepo->update(20,$user);
});





