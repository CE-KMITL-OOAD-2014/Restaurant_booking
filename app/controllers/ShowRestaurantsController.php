<?php
 
use Core\Storage\Restaurant\RestaurantRepository as Restaurant;
 
class ShowRestaurantsController extends BaseController {
	public function __construct(Restaurant $rest)
	{
  		$this->rest = $rest;
	}

	public function showall()
	{
		$restaurants = DB::table('restaurants')->get();
        
        return View::make('search',array('str'=>'ALL', 'restaurants'=>$restaurants));

	}

    public function show($id)
    {
        $data = $this->rest->find($id);
        if($data==NULL)
            return Redirect::to('login')->withMessage('Restaurant does not exist');
        
        return View::make('showDetailRestaurant')->with('restaurant',$data);

    }
}