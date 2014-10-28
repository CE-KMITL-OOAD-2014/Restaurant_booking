<?php

use Core\Storage\Restaurant\RestaurantRepository as Restaurant;
use Core\Storage\User\UserRepository as User;

class BookController extends BaseController {

	public function __construct(User $user, Restaurant $rest)
	{
		$this->user = $user;
  		$this->rest = $rest;
	}

	public function book ($id) {

		$restaurant = $this->rest->find($id);

		if($restaurant==NULL)
			return "Restaurant dosn't exist";

		return "Restaurant : ".$restaurant->name;

		


	}

}