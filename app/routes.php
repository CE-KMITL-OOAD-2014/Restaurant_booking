<?php

Route::get('/', array('uses'=>'RandomRestaurantsController@randomThump'));

Route::get('register', array('uses'=>'HomeController@showRegister'));

Route::post('register_action', 'UserController@store');

// route to show the login form
Route::get('login', array('uses' => 'HomeController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));

// Do Log out
Route::get('logout_action', array('uses' => 'HomeController@doLogout'));

Route::get('regisres',array('before' => 'auth | over',	'uses' => 'ShowRestaurantsController@showRegisRestaurant'));

Route::post('regisres_action',array('uses' => 'RestaurantController@store'));

Route::get('restaurant/{id}',array('uses' => 'ShowRestaurantsController@show'));

Route::get('book/{id}',array('before' => 'auth' ,'uses' => 'ShowBookController@showBookPage'));

Route::post('booking_action',array('before' => 'auth' ,'uses' => 'BookController@book'));

Route::get('show/{id}',array('before' => 'auth' ,'uses'=>'ShowUserController@showBooked'));

Route::get('showRes/{id}',array('before' => 'auth' ,'uses'=>'ShowUserController@showRestaurant'));

Route::get('cancel/{id}',array('uses'=>'BookController@cancel'));

Route::get('manage/{id}',array('before' => 'auth' ,'uses'=>'ManageRestaurantController@manage'));

Route::get('delete/{id}',array('before' => 'auth' ,'uses'=>'RestaurantController@deleteRestaurant'));

Route::post('uploadpic/{id}',array('before' => 'auth' ,'uses'=>'UploadPictureController@uploadPic'));

Route::get('edit/{id}',array('uses'=>'ShowUserController@showEdit'));

Route::post('edit_action',array('uses'=>'UserController@edit'));

Route::get('editRes/{id}',array('uses'=>'ShowRestaurantsController@showEdit'));

Route::post('editRes_action/{id_res}',array('uses'=>'RestaurantController@edit'));

Route::get('showBook/{id}',array('uses'=>'ShowBookController@showDetailBook'));

Route::get('editBook/{id}',array('uses'=>'ShowBookController@showEdit'));

Route::post('editBook_action/{id_book}',array('uses'=>'BookController@edit'));

Route::post('search',array('uses'=>'SearchRestaurantsController@search'));

Route::get('showall',array('uses'=>'ShowRestaurantsController@showall'));

Route::get('profile/{id}',array('before' => 'auth' ,'uses'=>'ShowUserController@showProfile'));

Route::get('aboutus',array('uses'=>'AboutusController@aboutus'));
