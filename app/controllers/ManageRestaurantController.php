<?php
 
use Core\Storage\Restaurant\RestaurantRepository as Restaurant;
 
class ManageRestaurantController extends BaseController {
	
    public function __construct(User $user, Restaurant $rest)
	{
  		$this->rest = $rest;
	}


	public function manage ($id_res)
	{
		$restaurant = $this->rest->find($id_res);
		$manager = App::make('ManageRestaurants');
		$results = $manager->manage($restaurant);

		return View::make('manageRestaurant',array('restaurant'=> $results['restaurant'],'currentBookeds'=> $results['currentBookeds'],'customersName'=> $results['customersName']));

	}

}