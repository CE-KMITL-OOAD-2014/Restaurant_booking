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
        $results[0] = "00:00";
        $close = "23:30";
        for ($i=1 ; $results[count($results)-1]!=$close ; $i++) {
            $time = explode(":", $results[$i-1]);

            if(($i%2)!=0){                                
                $results[$i] = $time[0].":"."30";
            }
            else {
                $results[$i] = ($time[0]+1).":"."00";
            }   

        }
  		return View::make('formOpen')->with('results',$results);
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
                    'tel'        => 'required|min:10|numeric|unique:restaurants'
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
                $rest->setSeat(implode(",", Input::get('seatList')));
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

    public function deleteRestaurant ($id)
    {
        $link = "user/".Auth::id();
        $book = $this->book->find($id);

        if (strtotime("+30 minute", strtotime(date("H:i")))>strtotime($book->time)) {
            return Redirect::to($link)->withMessage('ใกล้ถึงเวลาแล้ว ยกเลิกไม่ได้');
        }

        
        $book->delete();
        
        return Redirect::to($link)->withMessage('Books cenceled');
    }
}