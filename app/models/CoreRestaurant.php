<?php

class CoreRestaurant {
  protected $id;
  protected $id_owner;
  protected $name;
  protected $addr;
  protected $day;
  protected $time_open;
  protected $time_close;
  protected $area;
  protected $seat;
  protected $tel;
  


  public function getId(){
    return $this->id;
  }

  public function getIdOwner(){
    return $this->id_owner;
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