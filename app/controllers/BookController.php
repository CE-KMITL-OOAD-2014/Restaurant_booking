<?php

use Core\Storage\Restaurant\RestaurantRepository as Restaurant;
use Core\Storage\Book\BookRepository as Book;

class BookController extends BaseController {

	public function __construct(Restaurant $rest, Book $book)
	{
  		$this->rest = $rest;
        $this->book = $book;
	}

	public function index ($id) {

		$restaurant = $this->rest->find($id);

		if($restaurant==NULL)
			return Redirect::to('logout')->withMessage('Restaurant does not exist');


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
                    $results[$i] = ($time[0]+1).":"."00";
                }

            }
             
        }

        $avail = implode(",", $results);

		$data = array('id' => $restaurant->id , 
			'id_owner' => $restaurant->id_owner, 
			'name' => $restaurant->name,
			'addr' => $restaurant->addr,
			'day' => $restaurant->day,
			'time_open' => $restaurant->time_open,
			'time_close' => $restaurant->time_close,
			'area' => $restaurant->area,
			'seat' => $restaurant->seat,
            'booked' => $restaurant->booked,
			'tel' => $restaurant->tel,
			'avail' => $avail);
		
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
                    return Redirect::to('booking')->withErrors($validator->messages());
            }
            else
            {
                
                $book  = new CoreBook;
                $book->setIdRes(Input::get('id_res'));
                $book->setIdUser(Input::get('id_user'));
                $book->setDate(Input::get('date'));
                $book->setAmout(Input::get('amout'));
                $book->setTime(Input::get('time'));
                $book->setArea(Input::get('area'));
        
                $this->book->save($book);

                return Redirect::to('logout')->withMessage('Data inserted');
            }

	}

}