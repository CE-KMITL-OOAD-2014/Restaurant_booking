<?php
 
class RandomRestaurantsController extends BaseController {


	public function randomThump ()
	{
		$randomGenerator = new RandomRestaurants;
		$results = $randomGenerator->randomPic();
		return View::make('index',array('restaurants' => $results['restaurants'], 'pics' => $results['pics']));
	}

}