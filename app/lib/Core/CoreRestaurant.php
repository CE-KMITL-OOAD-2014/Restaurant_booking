<?php

use Core\Storage\Restaurant\RestaurantRepository as Restaurant;


class CoreRestaurant {
  protected $id;
  protected $id_owner;
  protected $name_pic;
  protected $name;
  protected $addr;
  protected $day;
  protected $time_open;
  protected $time_close;
  protected $area;
  protected $seat;
  protected $tel;
  

    public function __construct(Restaurant $rest)
    {
        $this->rest = $rest;
    }

    public function edit ($id_res, $data)
    {
        $check_tel = DB::table('restaurants')->where('tel',$data['tel'])->get() ;
        $check_addr = DB::table('restaurants')->where('addr',$data['addr'])->get() ;

        if (count($check_addr)>1 || count($check_tel)>1) {
            return 'false';
        }

        if (count($check_addr)==1 ) {
            if ($check_addr[0]->id != $id_res) {

                return "addr";
            }
        }

        if (count($check_tel) == 1) {
            if ($check_tel[0]->id != $id_res) {

                return "tel";
            }
        }
        
        $rest  = $this->rest->find($id_res);
        $rest->name = $data['name'];
        $rest->addr = $data['addr'];
        $rest->day = implode(",", $data['day']);
        $rest->time_open = $data['time_open'];
        $rest->time_close = $data['time_close'];
        $rest->area = implode(",", $data['areaList']);
        $rest->seat = implode(",", $data['seatList']);
        $rest->tel = $data['tel'];
        $rest->save();

        return 'true';
    }


    public function delete ($id)
    {
        //To do : add popup to comfirm delete.
        $restaurant = $this->rest->find($id);

        $restaurant->delete();
        
        return true;
    }


  public function getId(){
    return $this->id;
  }

  public function getIdOwner(){
    return $this->id_owner;
  }

  public function getNamePic () {
    return $this->name_pic;
  }

  public function getName(){
    return $this->name;
  }

  public function getAddr(){
    return $this->addr;
  }

  public function getDay(){
    return $this->day;
  }

  public function getTimeOpen(){
    return $this->time_open;
  }

  public function getTimeClose(){
    return $this->time_close;
  }

  public function getArea(){
    return $this->area;
  }

  public function getSeat(){
    return $this->seat;
  }

  public function getTel(){
    return $this->tel;
  }

  public function setIdOwner ($id_owner){
    $this->id_owner = $id_owner;
  }

  public function setNamePic ($name_pic) {
    $this->name_pic = $name_pic;
  }
  
  public function setName($name){
    $this->name = $name;
  }

  public function setAddr($addr){
    $this->addr = $addr;
  }

  public function setDay($day){
    $this->day = $day;
  }

  public function setTimeOpen($time_open){
    $this->time_open = $time_open;
  }

  public function setTimeClose($time_close){
    $this->time_close = $time_close;
  }

  public function setArea($area){
    $this->area = $area;
  }

  public function setSeat($seat){
    $this->seat = $seat;
  }

  public function setTel($tel){
    $this->tel = $tel;
  }

  
}