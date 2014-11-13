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
                    
                $user  = new CoreUser;
                $user->setName(Input::get('name'));
                $user->setLastname(Input::get('lastname'));
                $user->setPassword(Input::get('password'));
                $user->setEmail(Input::get('email'));
                $user->setTel(Input::get('tel'));

                $this->user->save($user);

                return Redirect::to('login')->withMessage('Complete Register, You can login!');
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
         	$check_email = DB::table('users')->where('email',$data['email'])->get() ;
         	$check_tel = DB::table('users')->where('tel',$data['tel'])->get() ;

         	if (count($check_email)>1 || count($check_tel) > 1) {
          		return Redirect::to($link)->withMessage('Duplicate email or tel');
         	}
         	
         	if (count($check_email)==1 ) {
          		if ($check_email[0]->id != Auth::id()) {

           			return Redirect::to($link)->withMessage('Duplicate email');
          		}
         	}
         
         	if (count($check_tel) == 1) {
          		if ($check_tel[0]->id != Auth::id()) {

           			return Redirect::to($link)->withMessage('Duplicate tel');
          		}
         	}

                    
        	$user  = $this->user->find(Auth::id());
        	$user->name = Input::get('name');
        	$user->lastname = Input::get('lastname');
        	$user->password = Input::get('password');
        	$user->email = Input::get('email');
        	$user->tel = Input::get('tel');
        	$user->save();


        	return Redirect::to('/')->withMessage('edit profile complete.');
        }
	}
}