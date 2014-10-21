<?php

use Core\Storage\Restaurant\RestaurantRepository as Restaurant;

class RegisresController extends BaseController
{

    public function __construct(Restaurant $rest)
    {
        $this->rest = $rest;
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
                    $rest->setName(Input::get('name'));
                    $rest->setAddr(Input::get('addr'));
                    $rest->setDay(implode(",", Input::get('day')));
                    $rest->setTimeOpen(Input::get('time_open'));
                    $rest->setTimeClose(Input::get('time_close'));
                    $rest->setTel(Input::get('tel'));
        
                    $this->rest->save($rest);

                    return Redirect::to('register')->withMessage('Data inserted');
            }
}
}
