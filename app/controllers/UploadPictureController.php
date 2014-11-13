<?php
 
use Core\Storage\Restaurant\RestaurantRepository as Restaurant;
 
class UploadPictureController extends BaseController  {
	public function __construct(Restaurant $rest)
	{
  		$this->rest = $rest;
	}


    public function uploadPic ($id_res)
    {
        $link = "manage/".$id_res;

        $data =  Input::all() ;
        $rule  =  array( 'pic'       => 'required' ) ;

        $validator = Validator::make($data,$rule);

        if ($validator->fails())
            return Redirect::to($link)->withErrors($validator->messages());
            

        if (!in_array(Input::file('pic')->getClientOriginalExtension(), array('jpg', 'gif', 'png', 'jpeg'))) 
            return Redirect::to($link)->withErrors('Invalid image extension we just allow JPG, GIF, PNG, JPEG');

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

        $messages = Input::file('pic')->getClientOriginalName()." UPLOADED!!";
        Input::file('pic')->move(base_path().'/public/pics/',$name);
        return Redirect::to($link)->withMessage($messages);
    }

}