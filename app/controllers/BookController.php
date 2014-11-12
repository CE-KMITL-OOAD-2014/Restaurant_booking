<?php

use Core\Storage\Restaurant\RestaurantRepository as Restaurant;
use Core\Storage\Book\BookRepository as Book;
use Core\Storage\User\UserRepository as User;

class BookController extends BaseController {

	public function __construct(Restaurant $rest, Book $book, User $user)
	{
  		$this->rest = $rest;
        $this->book = $book;
        $this->user = $user;
	}

    //set data of restaurant for show page and show edit restaurant
	public static function index ($restaurant) {

        $calculate = new Calculate;

        $avail = $calculate->calTime($restaurant);
        $day = $calculate->calDate($restaurant);

		$data = array('id' => $restaurant->id , 
			'id_owner' => $restaurant->id_owner, 
			'name' => $restaurant->name,
			'day' => $day,
			'area' => $restaurant->area,
			'seat' => $restaurant->seat,
			'avail' => $avail);
		
		return $data;
	}

	public function book () {

            $data =  Input::all() ;
            $rule  =  array(
                    'date'      => 'required',
                    'amout'     => 'required',
                    'time'      => 'required',
                    'area'      => 'required',
                ) ;

            $validator = Validator::make($data,$rule);

            if ($validator->fails())
            {
                $link = "book/".(Input::get('id_res'));
                return Redirect::to($link)->withErrors($validator->messages());
            }

            //make booking
            else
            {
                if (Input::get('date')==date("m/d")) {
                    $currentTime = strtotime(date("H:i"));
                    $bookTime = strtotime(Input::get('time'));
                    if ($bookTime < $currentTime) {
                        $link = "book/".(Input::get('id_res'));
                        return Redirect::to($link)->withErrors('เลยเวลาแล้ว!!!');
                    }                   

                }

                $test = DB::table('books')->where('id_res',Input::get('id_res'))->where('time',Input::get('time'))->where('date',Input::get('date'))->where('area',Input::get('area'))->get();
                $currentBook = 0;
                for ($i=0; $i < count($test); $i++) { 
                    $currentBook += $test[$i]->amout;
                }

                $res = $this->rest->find(Input::get('id_res'));
                $areas = explode(",", $res->area); 
                $seats = explode(",", $res->seat);
                $indexArea = array_search(Input::get('area'), $areas);
                $seat = $seats[$indexArea];
                
                if ($currentBook+(Input::get('amout'))<=$seat )
                {
                    $book  = new CoreBook;
                    $book->setIdRes(Input::get('id_res'));
                    $book->setIdUser(Input::get('id_user'));
                    $book->setDate(Input::get('date'));
                    $book->setAmout(Input::get('amout'));
                    $book->setTime(Input::get('time'));
                    $book->setArea(Input::get('area'));
        
                    $this->book->save($book);
                    return Redirect::to('/')->withMessage('<h3 style="color:green;">Complete Booking.</h3>');
                }                
                
                else
                    $link = "book/".Input::get('id_res');
                    return Redirect::to($link)->withErrors('Seat unavailable now...');

                
            }

	}

    public function cancel($id) 
    {
        //To do : add popup to comfirm cancel.
        $book = $this->book->find($id);
        $restaurant = $this->rest->find($book->id_res);

        //can cancel
        $calculate = new Calculate();
        if ($calculate->checkTime($book) || $restaurant->id_owner == Auth::id()) {
            $book->delete();
            return Redirect::to('/')->withMessage('Books canceled');
         }
         else
            return Redirect::to('/')->withErrors('ใกล้ถึงเวลาแล้ว ยกเลิกไม่ได้');

    }

    public function edit($id_book) {
        $data =  Input::all() ;
        $rule  =  array(
                'date'      => 'required',
                'amout'     => 'required',
                'time'      => 'required',
                'area'      => 'required',
            ) ;

        $validator = Validator::make($data,$rule);

        $link = "editBook/".$id_book;
        if ($validator->fails())
        {
            
            return Redirect::to($link)->withErrors($validator->messages());
        }

        //making editing
        else
        {
            if (Input::get('date')==date("m/d")) {
                $currentTime = strtotime(date("H:i"));
                $bookTime = strtotime(Input::get('time'));
                if ($bookTime < $currentTime) {
                    return Redirect::to($link)->withErrors('เลยเวลาแล้ว!!!');
                }                   

            }

            //check amout that booked
            $test = DB::table('books')->where('id_res',Input::get('id_res'))->where('time',Input::get('time'))->where('date',Input::get('date'))->where('area',Input::get('area'))->get();
            $currentBook = 0;
            for ($i=0; $i < count($test); $i++) { 
                if ($test[$i]->id != $id_book) {
                    $currentBook += $test[$i]->amout;
                }
                
            }
            $res = $this->rest->find(Input::get('id_res'));
            $areas = explode(",", $res->area); 
            $seats = explode(",", $res->seat);
            $indexArea = array_search(Input::get('area'), $areas);
            $seat = $seats[$indexArea];
               
            //can edit book 
            if ($currentBook+(Input::get('amout')) <= $seat )
            {
                $book  = $this->book->find($id_book);
                $book->date = Input::get('date');
                $book->amout = Input::get('amout');
                $book->time = Input::get('time');
                $book->area = Input::get('area');
                $book->save();

                return Redirect::to('/')->withMessage('Completed edit booking info...');
            }                
            
            //Seat unavailable now   
            else {
                return Redirect::to($link)->withErrors('Seat unavailable now...');
            }
                
        }
    }

}