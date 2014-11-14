<?php namespace Core\Storage\Restaurant;
 
interface RestaurantRepository {
   
  public function all();
 
  public function find($id);
 
  public function save($input);

 
}