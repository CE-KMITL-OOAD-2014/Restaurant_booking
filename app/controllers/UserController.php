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


	public function showBooked ($id)
	{
		$books = DB::table('books')->where('id_user',$id)->get();
		$currentBookeds = BookController::currentBook($books);
        $restaurantsName[0] = "";
        $i=0;

        if ($currentBookeds[0]!="") {
            foreach ($currentBookeds as $currentBooked) {
                $restaurantsName[$i] = $this->rest->find($currentBooked->id_res)->name;
                $i++;
            }
        }
    

        return View::make('showBooked',array('currentBookeds'=>$currentBookeds,'restaurantsName'=>$restaurantsName));

	}

	public function showRestaurant ($id)
	{
		$rests = DB::table('restaurants')->where('id_owner',$id)->get();
        return View::make('showMyRestaurant',array('restaurants'=>$rests));
	}

  public function showProfile ($id)
  {
      $user = $this->user->find($id);
      return View::make('profile',array('user'=>$user));
  }

	public function manage ($id_res)
	{
		$restaurant = $this->rest->find($id_res);
		$books = DB::table('books')->where('id_res',$id_res)->get();
		$currentBookeds = BookController::currentBook($books);
    $customersName[0] = "";
    $i=0;

    if ($currentBookeds[0]!="") {
      foreach ($currentBookeds as $currentBooked) {
        $customersName[$i] = $this->user->find($currentBooked->id_user)->name;
        $i++;
      }
    }
    

		return View::make('manageRestaurant',array('restaurant'=>$restaurant,'currentBookeds'=>$currentBookeds,'customersName'=>$customersName));
	}

	//show Edit profile page
	public function showEdit ($id) {
		$user = $this->user->find($id);
		return View::make('editProfile')->with('user',$user);
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