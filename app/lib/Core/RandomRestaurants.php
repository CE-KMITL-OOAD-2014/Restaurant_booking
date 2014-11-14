<?php

 
class RandomRestaurants  {

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
                if (!in_array($rand,$random)) {
                    $random[$i] = $rand;
                    $restRand[$i] = $restaurants[$rand];
                    $i++;
                    
                }
                if ($i==9) break;
            }
            return $restRand;
        }

	}

    //show random picture on index page
    public function randomPic () {
        $restaurants = RandomRestaurants::random();
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

        $results['restaurants'] = $restaurants;
        $results['pics'] = $restaurant_pics;

        return $results;
    }
}