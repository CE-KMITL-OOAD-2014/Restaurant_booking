<?php namespace Core\Storage\Area;
 
interface AreaRepository {
   
  public function all();
 
  public function find($id);
 
  public function save($input);

  public function update($id,$input);
 
}