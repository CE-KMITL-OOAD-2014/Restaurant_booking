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
	/**
 	* Display a listing of the resource.
 	*
 	* @return Response
 	*/
	public function index($id)
	{
		$user = $this->user->find($id);
  		return View::make('userHome')->with('user',$user);
	}

	public function showBooked ($id)
	{
		$books = DB::table('books')->where('id_user',$id)->get();

		foreach ($books as $book) {
			if( strtotime(date("m/d")) < strtotime($book->date) )
			{
				
				echo $book->id." "."<a href=\"http://localhost/ResBook/public/index.php/cancel/$book->id\">CENCEL</a><br>";

			}

			if ( strtotime(date("m/d")) == strtotime($book->date) )
			{
				if( strtotime(date("H:i")) < strtotime($book->time) )
				
				echo $book->id." "."<a href=\"http://localhost/ResBook/public/index.php/cancel/$book->id\">CENCEL</a><br>";
			}
		}
	}

	public function showRestaurant ($id)
	{
		$rests = DB::table('restaurants')->where('id_owner',$id)->get();

		foreach ($rests as $rest) {
			echo $rest->id." : ".$rest->name."<a href=\"http://localhost/ResBook/public/index.php/manage/$rest->id\">MANAGE</a><br>";
		}
	}
}