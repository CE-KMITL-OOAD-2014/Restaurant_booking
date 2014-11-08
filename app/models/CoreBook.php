<?php

class CoreBook {
  protected $id;
  protected $id_res;
  protected $id_user;
  protected $date;
  protected $amout;
  protected $time;
  protected $area;  


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