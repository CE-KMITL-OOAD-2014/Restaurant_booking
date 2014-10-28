<?php namespace Core\Storage\User;
 
use User;
 
class EloquentUserRepository implements UserRepository {
 
  public function all()
  {
    return User::all();
  }
 
  public function find($id)
  {
    return User::find($id);
  }
 
  public function save($input)
  {

    $elo = new User;
    $elo->name = $input->getName();
    $elo->lastname = $input->getLastname();
    $elo->password = $input->getPassword();
    $elo->email = $input->getEmail();
    $elo->tel = $input->getTel();
    return $elo->save();
  }

  public function update($id,$input)
  {
    
    $elo = User::find($id);
    $elo->name = $input->getName();
    $elo->lastname = $input->getLastname();
    $elo->password = $input->getPassword();
    $elo->email = $input->getEmail();
    $elo->tel = $input->getTel();
    return $elo->save();
  }
 
}