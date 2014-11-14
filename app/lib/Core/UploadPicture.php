<?php
 
use Core\Storage\Restaurant\RestaurantRepository as Restaurant;
 
class UploadPicture   {
	public function __construct(Restaurant $rest)
	{
  		$this->rest = $rest;
	}


    public function upload ($id_res, $file)
    {

        if (!in_array($file->getClientOriginalExtension(), array('jpg', 'gif', 'png', 'jpeg'))) 
            return false;

        //set name of picture => "idRes_idPicOfRes"
        $rest = $this->rest->find($id_res);
        $stringPic = $rest->name_pic;
        if ($stringPic==NULL) {
            $name = $id_res."_1";
            $rest->name_pic = $name;
        }
        else {
            $pics = explode("_", $stringPic);
            $name = $id_res."_".($pics[count($pics)-1]+1);
            $rest->name_pic = $stringPic.",".$name;
        }        
        
        $rest->save();

        $file->move(base_path().'/public/pics/',$name);
        return true;
    }

}