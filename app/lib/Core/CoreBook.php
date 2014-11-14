<?php

use Core\Storage\Restaurant\RestaurantRepository as Restaurant;
use Core\Storage\Book\BookRepository as Book;
use Core\Storage\User\UserRepository as User;
 

class CoreBook {
    protected $id;
    protected $id_res;
    protected $id_user;
    protected $date;
    protected $amout;
    protected $time;
    protected $area;  


    public function __construct(Restaurant $rest, Book $book, User $user)
    {
        $this->rest = $rest;
        $this->book = $book;
        $this->user = $user;
    }


    public function edit ($id_book, $id_res, $time, $date, $area, $amout)
    {
        //check amout that booked
        $test = DB::table('books')->where('id_res',$id_res)->where('time',$time)->where('date',$date)->where('area',$area)->get();
        $currentBook = 0;
        for ($i=0; $i < count($test); $i++) { 
            if ($test[$i]->id != $id_book) {
                $currentBook += $test[$i]->amout;
            }
                
        }
            $res = $this->rest->find($id_res);
            $areas = explode(",", $res->area); 
            $seats = explode(",", $res->seat);
            $indexArea = array_search($area, $areas);
            $seat = $seats[$indexArea];
               
            //can edit book 
            if ( ($currentBook+$amout) <= $seat )
            {
                $book  = $this->book->find($id_book);
                $book->date = $date;
                $book->amout = $amout;
                $book->time = $time;
                $book->area = $area;
                $book->save();

                return true;
            }                
            
            //Seat unavailable now   
            else {
                return false;
            }
    }


    public function cancel ()
    {
        //To do : add popup to comfirm cancel.
        $book = $this->book->find($this->id);
        $restaurant = $this->rest->find($book->id_res);

        //can cancel
        $calculate = new CheckTime();
        if ($calculate->checkTimeBefore($book) || $restaurant->id_owner == $this->id_user) {
            $book->delete();
            return true;
        }

        else
            return false;
  }


  public function getId(){
    return $this->id;
  }

  public function getIdRes(){
    return $this->id_res;
  }

  public function getIdUser(){
    return $this->id_user;
  }

  public function getDate(){
    return $this->date;
  }

  public function getAmout(){
    return $this->amout;
  }

  public function getTime(){
    return $this->time;
  }

  public function getArea(){
    return $this->area;
  }

  public function setId ($id) {
    $this->id = $id;
  }

  public function setIdRes ($id_res){
    $this->id_res = $id_res;
  }
  
  public function setIdUser($id_user){
    $this->id_user = $id_user;
  }

  public function setDate($date){
    $this->date = $date;
  }

  public function setAmout($amout){
    $this->amout = $amout;
  }

  public function setTime($time){
    $this->time = $time;
  }

  public function setArea($area){
    $this->area = $area;
  }
  
}