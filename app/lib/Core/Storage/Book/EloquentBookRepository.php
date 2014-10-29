<?php namespace Core\Storage\Book;
 
use Book;
 
class EloquentBookRepository implements BookRepository {
 
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

    $elo = new Book;
    $elo->id_res = $input->getIdRes();
    $elo->id_user = $input->getIdUser();
    $elo->date = $input->getDate();
    $elo->amout = $input->getAmout();
    $elo->time = $input->getTime();
    $elo->area = $input->getArea();
    return $elo->save();
  }

/*  public function update($id,$input)
  {
    
    $elo = User::find($id);
    $elo->name = $input->getName();
    $elo->lastname = $input->getLastname();
    $elo->password = $input->getPassword();
    $elo->email = $input->getEmail();
    $elo->tel = $input->getTel();
    return $elo->save();
  }*/
 
}