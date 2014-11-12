<?php
 
use Core\Storage\Restaurant\RestaurantRepository as Restaurant;
 
class RandomRestaurantsController extends BaseController {
	public function __construct(Restaurant $rest)
	{
  		$this->rest = $rest;
	}

	public function random()
	{
		$restaurants = DB::table('restaurants')->get();
        
        if (count($restaurants)<=9) {
            return $restaurants;
        
        }

        else {
            $random[0] = "";
            $restRand[0] = "";
            $max = count($restaurants)-1;
            $i = 0;
            while (true) { 
                $rand = rand(0,$max);
                if (!strrchr($random, $rand)) {
                    $random[$i] = $rand;
                    $restRand[$i] = $restaurants[$rand];
                    $i++;
                    
                }
                if ($i==6) break;
            }
            return $restRand;
        }

	}

    public function showPic () {
        $restaurants = RandomRestaurantsController::random();
        $restaurant_pics[0] = "";
        $i = 0;
        
        foreach ($restaurants as $restaurant) { 
            
            $pics = explode(",", $restaurant->name_pic);
            if ($pics[0]=="") 
                $restaurant_pics[$i] = "/pics/pic";
            
            else {
                $rand = rand(1,count($pics));
                $restaurant_pics[$i] = "/pics/".$restaurant->id."_".$rand;
            }
            $i++;
        }

        return View::make('index',array('restaurants'=>$restaurants,'pics'=>$restaurant_pics));
    }
}