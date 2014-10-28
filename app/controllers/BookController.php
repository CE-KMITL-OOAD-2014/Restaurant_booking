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


		$open = $restaurant->time_open;
        $close = $restaurant->time_close;
        $results[0] = $open;

        if($open[3]=='0'){
                        

            for ($i=1 ; $results[count($results)-1]!=$close ; $i++) {
                $time = explode(":", $results[$i-1]);

                if(($i%2)!=0){                                
                    $results[$i] = $time[0].":"."30";
                }
                else {
                    $results[$i] = ($time[0]+1).":"."00";
                }

            }
               
        }

        elseif ($open[3]=='3') {

            for ($i=1 ; $results[count($results)-1]!=$close ; $i++) {
                $time = explode(":", $results[$i-1]);

                if(($i%2)==0){                                
                    $results[$i] = $time[0].":"."30";
                }
                else {
                    $results[$i] = ($time[0]+1).":"."00";
                }

            }
             
        }

        $avail = implode(",", $results);

		$data = array('id' => $restaurant->id , 
			'id_owner' => $restaurant->id_owner, 
			'name' => $restaurant->name,
			'addr' => $restaurant->addr,
			'day' => $restaurant->day,
			'time_open' => $restaurant->time_open,
			'time_close' => $restaurant->time_close,
			'area' => $restaurant->area,
			'seat' => $restaurant->seat,
			'tel' => $restaurant->tel,
			'avail' => $avail);
		
		return View::make('booking')->with('data',$data);


	}

}