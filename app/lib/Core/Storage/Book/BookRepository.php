<?php namespace Core\Storage\Book;
 
interface BookRepository {
   
  public function all();
 
  public function find($id);
 
  public function save($input);
 
}