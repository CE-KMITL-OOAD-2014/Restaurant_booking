<?php
 
use Core\Storage\Restaurant\RestaurantRepository as Restaurant;
 
class RestaurantController extends BaseController {
	public function __construct(Restaurant $rest)
	{
  		$this->rest = $rest;
	}

    //generate set of time between 00:00 - 23:30
	public static function index()
	{
        $times[0] = "00:00";
        $close = "23:30";
        for ($i=1 ; $times[count($times)-1]!=$close ; $i++) {
            $time = explode(":", $times[$i-1]);

            if(($i%2)!=0){                                
                $times[$i] = $time[0].":"."30";
            }
            else {
                $times[$i] = ($time[0]+1).":"."00";
            }   

        }

  		return $times;
	}

    //create restaurant
	public function store()
	{
            $data =  Input::all() ;
            $rule  =  array(
                    'name'       => 'required',
                    'addr'       => 'required|unique:restaurants',
                    'day'        => 'required',
                    'time_open'  => 'required',
                    'time_close' => 'required',
                    'areaList'	 => 'required',
                    'tel'        => 'required|min:10|numeric'
                ) ;

            $validator = Validator::make($data,$rule);

            if ($validator->fails())
            {
                    return Redirect::to('regisres')->withErrors($validator->messages());
            }
            else
            {
            	$id_user = Auth::id();
            	$name = Input::get('name');
            	$addr = Input::get('addr');
            	$day = Input::get('day');
            	$time_open = Input::get('time_open');
            	$time_close = Input::get('time_close');
            	$areaList = Input::get('areaList');
            	$seatList = Input::get('seatList');
            	$tel = Input::get('tel');

                
                $user = App::make('CoreUser');
                if ($user->createRes($id_user, $name, $addr, $day, $time_open, $time_close, $areaList, $seatList, $tel))
                	return Redirect::to('/')->withMessage('Your Restaurant is Ready!');
            }
	}

    public function deleteRestaurant ($id)
    {
        $restaurant = App::make('CoreRestaurant');
        if ($restaurant->delete($id)) 
        	return Redirect::to('/')->withMessage('Deleted restaurant.');
        
       	else
       		return Redirect::to('/')->withErrors('Sorry, can\'t delete restaurant');
    }


    public function edit ($id_res) {
        //To do : add confirm old password before edit.
        $data =  Input::all() ;
        $rule  =  array(
                    'name'       => 'required',
                    'addr'       => 'required',
                    'day'        => 'required',
                    'time_open'  => 'required',
                    'time_close' => 'required',
                    'areaList'   => 'required',
                    'tel'        => 'required|min:10|numeric'
                ) ;

        $validator = Validator::make($data,$rule);

        $link = "editRes/".$id_res;
        if ($validator->fails())
        {
                
            return Redirect::to($link)->withErrors($validator->messages());
        }

        else
        {

        	$restaurant = App::make('CoreRestaurant');
        	$status = $restaurant->edit($id_res, $data);
        	if ( $status == 'true') {
        		$complete = "manage/".$id_res;
            	return Redirect::to($complete)->withMessage('edit profile complete.');
        	}

        	elseif ( $status == "addr") 
        		return Redirect::to($link)->withErrors('Sorry, The address has already been taken.');
        	

        	elseif ( $status == "tel") 
        		return Redirect::to($link)->withErrors('Sorry, The tel has already been taken.');
        	
        	else
        		return Redirect::to($link)->withErrors('Sorry, The tel or address has already been taken.');
            
        }
    }

}