<?php

class SearchRestaurantsController extends BaseController {

    public function search () {
        $str = Input::get('str');
        $searcher = new SearchRestaurants;
        $restaurants = $searcher->search($str);

        if ($str=="") $str = "ALL";

        return View::make('search',array('str'=>$str, 'restaurants'=>$restaurants));
    }

}