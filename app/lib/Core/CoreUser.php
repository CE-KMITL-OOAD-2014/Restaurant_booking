<?php

use Core\Storage\Restaurant\RestaurantRepository as Restaurant;
use Core\Storage\Book\BookRepository as Book;
use Core\Storage\User\UserRepository as User;


class CoreUser {
  protected $name;
  protected $lastname;
  protected $password;
  protected $email;
  protected $tel;

    public function __construct(Restaurant $rest, Book $book, User $user)
    {
        $this->rest = $rest;
        $this->book = $book;
        $this->user = $user;
    }

    public function createRes ($id_user, $name, $addr, $day, $time_open, $time_close, $areaList, $seatList, $tel)
    {
        $rest  = App::make('CoreRestaurant');
        $rest->setIdOwner(Auth::id());
        $rest->setName($name);
        $rest->setAddr($addr);
        $rest->setDay(implode(",", $day));
        $rest->setTimeOpen($time_open);
        $rest->setTimeClose($time_close);
        $rest->setArea(implode(",", $areaList));
        $rest->setSeat(implode(",", $seatList));
        $rest->setTel($tel);
        $this->rest->save($rest);

        return true;
    }

    public function book ($id_user, $id_res, $time, $date, $area, $amout)
    {
        $booked = DB::table('books')->where('id_res',$id_res)->where('time',$time)->where('date',$date)->where('area',$area)->get();
        $currentBook = 0;

        //check current booked at time and area
        for ($i=0; $i < count($booked); $i++) { 
            $currentBook += $booked[$i]->amout;
        }

        $res = $this->rest->find($id_res);
        $areas = explode(",", $res->area); 
        $seats = explode(",", $res->seat);
        $index = array_search($area, $areas);
        $seat = $seats[$index];
                
        if ( ($currentBook+$amout) <=$seat )
        {
            $book  = App::make('CoreBook');
            $book->setIdRes($id_res);
            $book->setIdUser($id_user);
            $book->setDate($date);
            $book->setAmout($amout);
            $book->setTime($time);
            $book->setArea($area);
            $this->book->save($book);
            return true;
        }                
                
        else
            return false;
    } 


    public function edit ($id, $data)
    {
        $check_email = DB::table('users')->where('email',$data['email'])->get() ;
        $check_tel = DB::table('users')->where('tel',$data['tel'])->get() ;

        if (count($check_email)>1 || count($check_tel) > 1) {
            return 'false';
        }

        if (count($check_email)==1 ) {
            $exist_userID = $check_email[0]->id;
            if ( $exist_userID != $id) {

                return 'email';
            }
        }

        if (count($check_tel) == 1) {
            if ($check_tel[0]->id != $id) {

                return 'tel';
            }
        }


        $user  = $this->user->find($id);
        $user->name = $data['name'];
        $user->lastname = $data['lastname'];
        $user->password = $data['password'];
        $user->email = $data['email'];
        $user->tel = $data['tel'];
        $user->save();


        return 'true';
    }


  public function getName(){
    return $this->name;
  }

  public function getLastname(){
    return $this->lastname;
  }

  public function getPassword(){
    return $this->password;
  }

  public function getEmail(){
    return $this->email;
  }

  public function getTel(){
    return $this->tel;
  }

  public function setName($name){
    $this->name = $name;
  }

  public function setLastname($lastname){
    $this->lastname = $lastname;
  }


  public function setPassword($password){
    $this->password = $password;
  }


  public function setEmail($email){
    $this->email = $email;
  }

  public function setTel($tel){
    $this->tel = $tel;
  }
}