<?php namespace Core\Storage\Area;
 
use Area;
 
class EloquentAreaRepository implements AreaRepository {
 
  public function all()
  {
    return Area::all();
  }
 
  public function find($id)
  {
    return Area::find($id);
  }
 
  public function save($input)
  {

    $elo = new Area;
    $elo->id_res = $input->getIdres();
    $elo->area = $input->getArea();
    return $elo->save();
  }

  public function update($id,$input)
  {
    
    $elo = Area::find($id);
    $elo->id_res = $input->getIdres();
    $elo->area = $input->getArea();
    return $elo->save();
  }
 
}