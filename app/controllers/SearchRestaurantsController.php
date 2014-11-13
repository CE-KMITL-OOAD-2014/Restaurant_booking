<?php
 
class SearchRestaurantsController extends BaseController {

    public function search () {
        $str = Input::get('str');
        $restaurants = DB::table('restaurants')->where('name','like','%'.$str.'%')
                                                ->orWhere('addr','like','%'.$str.'%')
                                                ->orWhere('day','like','%'.$str.'%')
                                                ->orWhere('time_open','like','%'.$str.'%')
                                                ->orWhere('time_close','like','%'.$str.'%')
                                                ->orWhere('area','like','%'.$str.'%')
                                                ->orWhere('tel','like','%'.$str.'%')->get();
        

        if ($str=="") $str = "ALL";

        return View::make('search',array('str'=>$str, 'restaurants'=>$restaurants));
    }


}