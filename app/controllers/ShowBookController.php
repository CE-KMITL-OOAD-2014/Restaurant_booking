<?php

use Core\Storage\Restaurant\RestaurantRepository as Restaurant;
use Core\Storage\Book\BookRepository as Book;
use Core\Storage\User\UserRepository as User;

class ShowBookController extends BaseController {

	public function __construct(Restaurant $rest, Book $book, User $user)
	{
  		$this->rest = $rest;
        $this->book = $book;
        $this->user = $user;
	}

    public function showBookPage ($id) {
        $restaurant = $this->rest->find($id);

        if($restaurant==NULL) 
            return Redirect::to('/')->withErrors('Restaurant does not exist');

        $data = BookController::index($restaurant);
        return View::make('booking')->with('data',$data);
    }


    public function showDetailBook ($id_book) {
        $book = $this->book->find($id_book);
        $res_name = $this->rest->find($book->id_res)->name;
        $username = $this->user->find($book->id_user)->name;
        return View::make('showDetailBook',array('book'=>$book, 'res_name'=>$res_name, 'username'=>$username));
    }

    public function showEdit ($id_book) {
        $book = $this->book->find($id_book);
        $restaurant = $this->rest->find($book->id_res);

        $calculate = new CheckTime();
        if ($calculate->checkTimeBefore($book) || $restaurant->id_owner == Auth::id()) {
            $data = BookController::index($restaurant);
            return View::make('editBook',array('book'=>$book, 'data'=>$data));
        }
        
        else
            return Redirect::to('/')->withErrors('ใกล้ถึงเวลาแล้ว edit ไม่ได้ <br>Please contact restaurant');
        
    }

}