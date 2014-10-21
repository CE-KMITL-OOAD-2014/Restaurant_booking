<?php

class CoreArea {
  protected $id_res;
  protected $area;


  public function getIdres(){
    return $this->id_res;
  }

  public function getArea(){
    return $this->area;
  }

  public function setIdres($id_res){
    $this->id_res = $id_res;
  }

  public function setArea($area){
    $this->area = $area;
  }

}