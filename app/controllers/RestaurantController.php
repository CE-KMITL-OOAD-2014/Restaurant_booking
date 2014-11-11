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

  		return $results;
	}

    public function showRegisRestaurant () {
        $results = RestaurantController::index();
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

	/*public function show($id)
	{
		$data = $this->rest->find($id);
        if($data==NULL)
            return Redirect::to('logout')->withMessage('Restaurant does not exist');
        
		return View::make('showDetailRestaurant')->with('restaurant',$data);

	}*/

    public function search () {
        $restaurants = DB::table('restaurants')->get();
        $str = Input::get('str');

        if ($str=="") $str = "ALL";

        return View::make('search',array('str'=>$str, 'restaurants'=>$restaurants));
    }

    public function deleteRestaurant ($id)
    {
        //To do : add popup to comfirm delete.
        $link = "user/".Auth::id();
        $restaurant = $this->rest->find($id);

        $restaurant->delete();
        
        return Redirect::to($link)->withMessage('Deleted restaurant id : {{$id}}');
    }

    public function uploadPic ($id_res)
    {
        $link = "manage/".$id_res;

        $data =  Input::all() ;
            $rule  =  array(
                    'pic'       => 'required'
                ) ;

            $validator = Validator::make($data,$rule);

            if ($validator->fails())
            {
                    return Redirect::to($link)->withErrors($validator->messages());
            }

        if (!in_array(Input::file('pic')->getClientOriginalExtension(), array('jpg', 'gif', 'png', 'jpeg'))) 
            return Redirect::to($link)->withMessage('Invalid image extension we just allow JPG, GIF, PNG, JPEG');

        //set name of picture => "idRes_idPicOfRes"
        $rest = $this->rest->find($id_res);
        $stringPic = $rest->name_pic;
        if ($stringPic==NULL) {
            $name = $id_res."_1";
            $rest->name_pic = $name;
        }
        else {
            $pics = explode("_", $stringPic);
            $name = $id_res."_".($pics[count($pics)-1]+1);
            $rest->name_pic = $stringPic.",".$name;
        }
        
        
        $rest->save();

        $messages = Input::file('pic')->getClientOriginalName()." UPLOADED!!";
        Input::file('pic')->move(base_path().'/public/pics/',$name);
        return Redirect::to($link)->withMessage($messages);
    }

    public function showEdit($id_res) {
        $rest = $this->rest->find($id_res);
        $results = RestaurantController::index();

        return View::make('editRestaurant',array('results'=>$results , 'restaurant'=>$rest));
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
            $check_addr = DB::table('restaurants')->where('addr',$data['addr'])->get() ;
            $check_tel = DB::table('restaurants')->where('tel',$data['tel'])->get() ;

            if (count($check_addr)>1 || count($check_tel) > 1) {
                return Redirect::to($link)->withMessage('Duplicate addr or tel');
            }
            
            if (count($check_addr)==1 ) {
                if ($check_addr[0]->id != $id_res) {

                    return Redirect::to($link)->withMessage('Duplicate address');
                }
            }
         
            if (count($check_tel) == 1) {
                if ($check_tel[0]->id != $id_res) {

                    return Redirect::to($link)->withMessage('Duplicate tel');
                }
            }

                    
            $rest  = $this->rest->find($id_res);
            $rest->name = $data['name'];
            $rest->addr = $data['addr'];
            $rest->day = implode(",", Input::get('day'));
            $rest->time_open = $data['time_open'];
            $rest->time_close = $data['time_close'];
            $rest->area = implode(",", Input::get('areaList'));
            $rest->seat = implode(",", Input::get('seatList'));
            $rest->tel = $data['tel'];
            $rest->save();

            $link = "manage/".$id_res;
            return Redirect::to($link)->withMessage('edit profile complete! ^^');
        }
    }

}