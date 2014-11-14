<?php

class SearchRestaurants  {

    public function search ($str) {
        $restaurants = DB::table('restaurants')->where('name','like','%'.$str.'%')
                                                ->orWhere('addr','like','%'.$str.'%')
                                                ->orWhere('day','like','%'.$str.'%')
                                                ->orWhere('time_open','like','%'.$str.'%')
                                                ->orWhere('time_close','like','%'.$str.'%')
                                                ->orWhere('area','like','%'.$str.'%')
                                                ->orWhere('tel','like','%'.$str.'%')->get();
        

        return $restaurants;
    }

}