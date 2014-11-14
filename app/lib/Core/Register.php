<?php

use Core\Storage\User\UserRepository as User;

Class Register {

	public function __construct(User $user)
	{
  		$this->user = $user;
	}
	
	public function createUser ()
	{
		$user  = App::make('CoreUser');
        $user->setName(Input::get('name'));
        $user->setLastname(Input::get('lastname'));
        $user->setPassword(Input::get('password'));
        $user->setEmail(Input::get('email'));
        $user->setTel(Input::get('tel'));

        $this->user->save($user);

        return true;
	}
}