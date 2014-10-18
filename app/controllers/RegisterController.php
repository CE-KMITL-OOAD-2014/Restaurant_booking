<?php

class RegisterController extends BaseController
{

public function store()
{
            $data =  Input::except(array('_token')) ;
            $rule  =  array(
                    'name'       => 'required|unique:users',
                    'lastname'   => 'required',
                    'email'      => 'required|email|unique:users',
                    'tel'        => 'required|min:10|unique:users',
                    'password'   => 'required|min:6|same:cpassword',
                    'cpassword'  => 'required|min:6'
                ) ;

            $validator = Validator::make($data,$rule);

            if ($validator->fails())
            {
                    return Redirect::to('register')->withErrors($validator->messages());
            }
            else
            {
                    //User::saveFormData(Input::except(array('_token','cpassword')));

                    $user           = new User;
                    $user->name     = Input::get('name');
                    $user->lastname = Input::get('lastname');
                    $user->password = Input::get('password');
                    $user->email    = Input::get('email');
                    $user->tel      = Input::get('tel');
        
                    $eloquentRepo = new UserRepository();
                    $eloquentRepo->save($user);

                    return Redirect::to('register')->withMessage('Data inserted');
            }
}
}
