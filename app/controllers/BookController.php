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

	public function index ($restaurant) {

        $avail = BookController::calTime($restaurant);
        $day = BookController::calDate($restaurant);

		$data = array('id' => $restaurant->id , 
			'id_owner' => $restaurant->id_owner, 
			'name' => $restaurant->name,
			'day' => $day,
			'area' => $restaurant->area,
			'seat' => $restaurant->seat,
			'avail' => $avail);
		
		return $data;
	}

    public function showBookPage ($id) {
        $restaurant = $this->rest->find($id);

        if($restaurant==NULL) {
            $link = "user/".Auth::id();
            return Redirect::to($link)->withMessage('Restaurant does not exist');
        }

        $data = BookController::index($restaurant);
        
        return View::make('booking')->with('data',$data);
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
            else
            {
                if (Input::get('date')==date("m/d")) {
                    $currentTime = strtotime(date("H:i"));
                    $bookTime = strtotime(Input::get('time'));
                    if ($bookTime < $currentTime) {
                        $link = "book/".(Input::get('id_res'));
                        return Redirect::to($link)->withMessage('เลยเวลาแล้ว!!!');
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
                    $link = "user/".Input::get('id_user');
                    return Redirect::to($link)->withMessage('Data inserted');
                }                
                
                else
                    $link = "book/".Input::get('id_res');
                    return Redirect::to($link)->withMessage('Seat unavailable now...');

                
            }

	}

    public function calDate($restaurant) {
        $days = explode(",", $restaurant->day);

        $Currentdate = date("Y-m-d");
        $date = strtotime("+0 day", strtotime($Currentdate));
        $results[0] = "";

        for ($i=0; $i < 15; $i++) { 
            for ($j=0; $j < count($days); $j++) { 
                if ($days[$j]==date("l", $date)) {
                    
                    $results[$i] = date("m/d", $date);
                    break;
                }
                
            }
            
            if ($j==count($days)) {

                $i--;
            }
            $date = date("Y-m-d",$date);
            $date = strtotime("+1 day", strtotime($date));            
        }

        $results = implode(",", $results);
        return $results;

    }

    public function calTime($restaurant) {

        $open = $restaurant->time_open;
        $close = $restaurant->time_close;
        $results[0] = $open;

        if($open[3]=='0'){
                        

            for ($i=1 ; $results[count($results)-1]!=$close ; $i++) {
                $time = explode(":", $results[$i-1]);

                if(($i%2)!=0){                                
                    $results[$i] = $time[0].":"."30";
                }
                else {
                    if ($results[$i-1] == "23:30") 
                        $results[$i] = "00:00";
                    
                    else
                        $results[$i] = ($time[0]+1).":"."00";
                }

            }
               
        }

        elseif ($open[3]=='3') {

            for ($i=1 ; $results[count($results)-1]!=$close ; $i++) {
                $time = explode(":", $results[$i-1]);

                if(($i%2)==0){                                
                    $results[$i] = $time[0].":"."30";
                }
                else {
                    if ($results[$i-1] == "23:30") 
                        $results[$i] = "00:00";
                    
                    else                    
                        $results[$i] = ($time[0]+1).":"."00";
                }

            }
             
        }
        $avail = implode(",", $results);
        return $avail;
    }

    public function cancel($id) 
    {
        //To do : add popup to comfirm cancel.
        $link = "user/".Auth::id();
        $book = $this->book->find($id);
        $restaurant = $this->rest->find($book->id_res);

        /*if (strtotime("+30 minute", strtotime(date("H:i")))>strtotime($book->time)) {
            return Redirect::to($link)->withMessage('ใกล้ถึงเวลาแล้ว ยกเลิกไม่ได้');
        }*/
        if (BookController::checkTime($link,$book) || $restaurant->id_owner == Auth::id()) {
            $book->delete();
            return Redirect::to($link)->withMessage('Books canceled');
         }
         else
            return Redirect::to($link)->withMessage('ใกล้ถึงเวลาแล้ว ยกเลิกไม่ได้');

    }

    public function showDetailBook ($id_book) {
        $book = $this->book->find($id_book);
        $res_name = $this->rest->find($book->id_res)->name;
        $username = $this->user->find($book->id_user)->name;
        return View::make('showDetailBook',array('book'=>$book, 'res_name'=>$res_name, 'username'=>$username));
    }

    public function showEdit ($id_book) {
        $link = "user/".Auth::id();
        $book = $this->book->find($id_book);
        $restaurant = $this->rest->find($book->id_res);

        if (BookController::checkTime($link, $book) || $restaurant->id_owner == Auth::id()) {
            
            
            $data = BookController::index($restaurant);
            return View::make('editBook',array('book'=>$book, 'data'=>$data));
        }
        else
            return Redirect::to($link)->withMessage('ใกล้ถึงเวลาแล้ว edit ไม่ได้ <br>Please contact restaurant');
        
    }

    public function checkTime ($link, $book)
    {
        if ($book->date == date("m/d")) {
            if (strtotime("+30 minute", strtotime(date("H:i")))>strtotime($book->time))
                return false;
        }

        return true;
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
        else
        {
            if (Input::get('date')==date("m/d")) {
                $currentTime = strtotime(date("H:i"));
                $bookTime = strtotime(Input::get('time'));
                if ($bookTime < $currentTime) {
                    return Redirect::to($link)->withMessage('เลยเวลาแล้ว!!!');
                }                   

            }

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
                
            if ($currentBook+(Input::get('amout')) <= $seat )
            {
                $book  = $this->book->find($id_book);
                $book->date = Input::get('date');
                $book->amout = Input::get('amout');
                $book->time = Input::get('time');
                $book->area = Input::get('area');
                $book->save();

                $complete = "showBook/".$id_book;
                return Redirect::to($complete)->withMessage('Completed edit booking info...');
            }                
                
            else {
                return Redirect::to($link)->withMessage('Seat unavailable now...');
            }
                
        }
    }

}