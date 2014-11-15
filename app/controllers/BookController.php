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
            	$id_res = Input::get('id_res');
            	$id_user = Input::get('id_user');
            	$date = Input::get('date');
            	$time = Input::get('time');
            	$area = Input::get('area');
            	$amout = Input::get('amout');
            	$link = "book/".(Input::get('id_res'));

                if ( $date == date("m/d") ) {

                    $check_time = new CheckTime;
            		$checker = $check_time->checkLateTime($time);
                    
                    if (!$checker) {
                        return Redirect::to($link)->withErrors('เลยเวลาแล้ว!!!');
                    }
                }

                $user = App::make('CoreUser');
                if ($user->book($id_user,$id_res, $time, $date, $area, $amout)) {
                	$user = $this->user->find(Auth::id());
            		
                    //set data for send e-mail to customer
                    $data['name_res'] = $this->rest->find($data['id_res'])->name;
            		$data['name_user'] = $user->name;
                    $data['email'] = $user->email;
                    SendEmail::setValue($data['email'],$data['name_user']);
            		SendEmail::sendmail($data);
                	return Redirect::to('/')->withMessage('<h3 style="color:green;">Complete Booking.</h3>');
                }
                else
                    return Redirect::to($link)->withErrors('Seat unavailable now...');

            }

	}

    public function cancel($id) 
    {

      	$book = App::make('CoreBook');
      	$book->setId($id);
      	$book->setIdUser(Auth::id());

      	if ($book->cancel()) 
      		return Redirect::to('/')->withMessage('Books canceled');
      	
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
        	$id_res = Input::get('id_res');
        	$time = Input::get('time');
        	$date = Input::get('date');
        	$area = Input::get('area');
        	$amout = Input::get('amout');

            if ( $date ==date("m/d")) {
                
                $check_time = new CheckTime;
            	$checker = $check_time->checkLateTime($id_res, $date, $time);
                    
              	if (!$checker) {
                  	return Redirect::to($link)->withErrors('เลยเวลาแล้ว!!!');
              	}

            }

            $book = App::make('CoreBook');
            if ($book->edit($id_book, $id_res, $time, $date, $area, $amout)) {
            	$user = $this->user->find(Auth::id());
            	$data['name_res'] = $this->rest->find($data['id_res'])->name;
            	$data['name_user'] = $user->name;
            	$sender = new SendEmail;
            	$sender->sendmail($data, $user->email, $user->name);
            	return Redirect::to('/')->withMessage('Completed edit booking info...');
            }
            
            else
            	return Redirect::to($link)->withErrors('Seat unavailable now...');

            
        }
    }

}