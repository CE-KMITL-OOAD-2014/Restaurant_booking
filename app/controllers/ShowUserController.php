<?php
 
use Core\Storage\User\UserRepository as User;
use Core\Storage\Book\BookRepository as Book;
use Core\Storage\Restaurant\RestaurantRepository as Restaurant;
 
class ShowUserController extends BaseController {
	
    public function __construct(User $user, Book $book, Restaurant $rest)
	{
  		$this->user = $user;
  		$this->book = $book;
  		$this->rest = $rest;
	}

    //show list of booked that book by user
	public function showBooked ($id)
	{
		$books = DB::table('books')->where('id_user',$id)->get();
        $checkCurrentBooked = new CheckCurrentBooked();
		$currentBookeds = $checkCurrentBooked->currentBook($books);
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

    //show restaurant of user
	public function showRestaurant ($id)
	{
		$rests = DB::table('restaurants')->where('id_owner',$id)->get();
        return View::make('showMyRestaurant',array('restaurants'=>$rests));
	}

    //show profile of user
    public function showProfile ($id)
    {
        $user = $this->user->find($id);
        return View::make('profile',array('user'=>$user));
    }

	//show Edit profile page
	public function showEdit ($id) {
		$user = $this->user->find($id);
		return View::make('editProfile')->with('user',$user);
	}

}