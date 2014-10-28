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
  		return $this->rest->all();
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
                    'tel'        => 'required|min:10|unique:restaurants'
                ) ;

            $validator = Validator::make($data,$rule);

            if ($validator->fails())
            {
                    return Redirect::to('regisres')->withErrors($validator->messages());
            }
            else
            {
                    
                    $rest  = new CoreRestaurant;
                    $rest->setIdOwner(Auth::id());
                    $rest->setName(Input::get('name'));
                    $rest->setAddr(Input::get('addr'));
                    $rest->setDay(implode(",", Input::get('day')));
                    $rest->setTimeOpen(Input::get('time_open'));
                    $rest->setTimeClose(Input::get('time_close'));
                    $rest->setArea(implode(",", Input::get('areaList')));
                    $rest->setTel(Input::get('tel'));
        
                    $this->rest->save($rest);

                    //{{$id = Auth::id();}}

                    return Redirect::to('logout')->withMessage('Data inserted');
            }
	}

	public function show($id)
	{
		$data = $this->rest->find($id);
		return View::make('showRestaurant')->with('data',$data);
	}
}