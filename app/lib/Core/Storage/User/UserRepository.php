<?php namespace Core\Storage\User;
 
interface UserRepository {
   
  public function all();
 
  public function find($id);
 
  public function save($input);

  public function update($id,$input);
 
}