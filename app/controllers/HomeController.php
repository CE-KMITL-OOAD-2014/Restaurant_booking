<?php

class HomeController extends BaseController {


	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showRegister ()
	{
		return View::make('register');
	}

	public function showLogin()
	{
		return View::make('login');
	}

	public function doLogin()
	{
		// validate the info, create rules for the inputs
		$rules = array(
			'email'    => 'required|email', // make sure the email is an actual email
			'password' => 'required|min:6' 
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
			return Redirect::to('login')
				->withErrors($validator) // send back all errors to the login form
				->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {

			// create our user data for the authentication
			$userdata = array(
				'email' 	=> Input::get('email'),
				'password' 	=> Input::get('password')
			);

			// attempt to do the login
			if (Auth::attempt($userdata)) {

				// validation successful!
				$id = Auth::id();
				return Redirect::to('/');

			} else {	 	

				// validation not successful, send back to form	
				return Redirect::to('login')->withErrors('Incorrect E-mail or password');

			}

		}
	}

	public function doLogout()
	{
		Auth::logout(); // log the user out of our application
		return Redirect::to('/'); // redirect the user to the login screen
	}

}
