<?php namespace Core\Storage\Restaurant;
 
use Restaurant;
 
class EloquentRestaurantRepository implements RestaurantRepository {
 
  public function all()
  {
    return Restaurant::all();
  }
 
  public function find($id)
  {
    return Restaurant::find($id);
  }
 
  public function save($input)
  {

    $elo = new Restaurant;
    $elo->id_owner = $input->getIdOwner();
    $elo->name = $input->getName();
    $elo->addr = $input->getAddr();
    $elo->day = $input->getDay();
    $elo->time_open = $input->getTimeOpen();
    $elo->time_close = $input->getTimeClose();
    $elo->area = $input->getArea();
    $elo->seat = $input->getSeat();
    $elo->tel = $input->getTel();
    return $elo->save();
  }

/*  public function update($id,$input)
  {
    
    $elo = Restaurant::find($id);
    $elo->name = $input->getName();
    $elo->addr = $input->getAddr();
    $elo->day = $input->getDay();
    $elo->time_open = $input->getTimeOpen();
    $elo->time_close = $input->getTimeClose();
    $elo->area = $input->getArea();
    $elo->tel = $input->getTel();
    return $elo->save();
  }*/
 
}