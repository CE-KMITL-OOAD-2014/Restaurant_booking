<?php namespace Core\Storage\Book;
 
use Book;
 
class EloquentBookRepository implements BookRepository {
 
  public function all()
  {
    return Book::all();
  }
 
  public function find($id)
  {
    return Book::find($id);
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
 
}