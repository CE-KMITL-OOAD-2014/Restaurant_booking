<?php
 
use Core\Storage\Restaurant\RestaurantRepository as Restaurant;
 
class ShowRestaurantsController extends BaseController {
	public function __construct(Restaurant $rest)
	{
  		$this->rest = $rest;
	}

	public function showall()
	{
        //query all restaurants from database
		$restaurants = DB::table('restaurants')->get();
        //use one page with search
        return View::make('search',array('str'=>'ALL', 'restaurants'=>$restaurants));

	}

    //show detail of specify restaurants
    public function show($id)
    {
        $data = $this->rest->find($id);
        //Restaurant does not exist
        if($data==NULL)
            return Redirect::to('/')->withErrors('Restaurant does not exist');
        
        return View::make('showDetailRestaurant')->with('restaurant',$data);

    }

    //show page for registed restaurant
    public function showRegisRestaurant () {
        $results = RestaurantController::index();
        return View::make('formOpen')->with('results',$results);
    }

    //show page for edit restaurant    
    public function showEdit($id_res) {
        $rest = $this->rest->find($id_res);
        $results = RestaurantController::index();

        return View::make('editRestaurant',array('results'=>$results , 'restaurant'=>$rest));
    }
}