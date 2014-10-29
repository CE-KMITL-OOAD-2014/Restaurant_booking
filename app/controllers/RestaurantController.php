<?php
 
use Core\Storage\Restaurant\RestaurantRepository as Restaurant;
 
class RestaurantController extends BaseController {
	public function __construct(Restaurant $rest)
	{
  		$this->rest = $rest;
	}
	/**
 	* Display a listing of the resource.
 	*
 	* @return Response
 	*/
	public function index()
	{
  		return View::make('formOpen');
	}

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
                    'tel'        => 'required|min:10|integer|unique:restaurants'
                ) ;

            $validator = Validator::make($data,$rule);

            if ($validator->fails())
            {
                    return Redirect::to('regisres')->withErrors($validator->messages());
            }
            else
            {
                for ($i=0; $i < count(Input::get('areaList')); $i++) { 
                    $booked[$i] = '0';
                }

                $rest  = new CoreRestaurant;
                $rest->setIdOwner(Auth::id());
                $rest->setName(Input::get('name'));
                $rest->setAddr(Input::get('addr'));
                $rest->setDay(implode(",", Input::get('day')));
                $rest->setTimeOpen(Input::get('time_open'));
                $rest->setTimeClose(Input::get('time_close'));
                $rest->setArea(implode(",", Input::get('areaList')));
                $rest->setSeat(implode(",", Input::get('seatList')));
                $rest->setBooked(implode(",", $booked));
                $rest->setTel(Input::get('tel'));
        
                $this->rest->save($rest);

                return Redirect::to('logout')->withMessage('Data inserted');
            }
	}

	public function show($id)
	{
		$data = $this->rest->find($id);
        if($data==NULL)
            return Redirect::to('logout')->withMessage('Restaurant does not exist');
        
        
		return View::make('showRestaurant')->with('data',$data);
	}
}