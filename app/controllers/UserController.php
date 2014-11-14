<?php
 
use Core\Storage\User\UserRepository as User;
use Core\Storage\Book\BookRepository as Book;
use Core\Storage\Restaurant\RestaurantRepository as Restaurant;
 
class UserController extends BaseController {
	
    public function __construct(User $user, Book $book, Restaurant $rest)
	{
  		$this->user = $user;
  		$this->book = $book;
  		$this->rest = $rest;
	}

    //create user
    public function store()
    {
        $data =  Input::except(array('_token')) ;
        $rule  =  array(
                'name'       => 'required',
                'lastname'   => 'required',
                'email'      => 'required|email|unique:users',
                'tel'        => 'required|min:10|unique:users',
                'password'   => 'required|min:6|same:cpassword',
                'cpassword'  => 'required|min:6'
            ) ;

        $validator = Validator::make($data,$rule);

        if ($validator->fails())
            return Redirect::to('register')->withErrors($validator->messages());

        else
        {
        	$register = App::make('Register');
        	if ($register->createUser($data)) 
        		return Redirect::to('login')->withMessage('Complete Register, You can login!');
        	
        	else
        		return Redirect::to('/')->withErrors('Sorry, Can\'t register, please try again later.');
                
        }
    }


	//Edit profile
	public function edit () {
		//To do : add confirm old password before edit.
		$data =  Input::all() ;
        $rule  =  array(
                'name'       => 'required',
                'lastname'   => 'required',
                'email'      => 'required|email',
                'tel'        => 'required|min:10',
                'password'   => 'required|min:6|same:cpassword',
                'cpassword'  => 'required|min:6'
            ) ;

        $validator = Validator::make($data,$rule);

        $link = "edit/".Auth::id();
        if ($validator->fails())
        {
            	
            return Redirect::to($link)->withErrors($validator->messages());
        }

        else
        {
        	$user = App::make('CoreUser');
        	$status = $user->edit(Auth::id(), $data);

        	if ( $status == 'true') {
            	return Redirect::to('/')->withMessage('edit profile complete.');
        	}

        	elseif ( $status == "email") 
        		return Redirect::to($link)->withErrors('Sorry, The e-mail has already been taken.');
        	

        	elseif ( $status == "tel") 
        		return Redirect::to($link)->withErrors('Sorry, The tel has already been taken.');
        	
        	else
        		return Redirect::to($link)->withErrors('Sorry, The tel or e-mail has already been taken.');
        }

	}
}