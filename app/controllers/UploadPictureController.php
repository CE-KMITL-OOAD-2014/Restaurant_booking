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

        
        $uploader = App::make('UploadPicture');
        $file = Input::file('pic');

       	if ($uploader->upload($id_res, $file)) {
       		$messages = $file->getClientOriginalName()." UPLOADED!!";
       		return Redirect::to($link)->withMessage($messages);
       	}
        
       	else
       		return Redirect::to($link)->withErrors('Invalid image extension we just allow JPG, GIF, PNG, JPEG');

    }

}