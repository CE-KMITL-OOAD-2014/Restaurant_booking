<?php
 
use Core\Storage\User\UserRepository as User;
use Core\Storage\Restaurant\RestaurantRepository as Restaurant;
 
class ManageRestaurantController extends BaseController {
	
    public function __construct(User $user, Restaurant $rest)
	{
  		$this->user = $user;
  		$this->rest = $rest;
	}


	public function manage ($id_res)
	{
		$restaurant = $this->rest->find($id_res);
		$books = DB::table('books')->where('id_res',$id_res)->get();
		$checkCurrentBooked = new CheckCurrentBooked();
        $currentBookeds = $checkCurrentBooked->currentBook($books);
        $customersName[0] = "";
        $i=0;

        if ($currentBookeds[0]!="") {
            foreach ($currentBookeds as $currentBooked) {
                $customersName[$i] = $this->user->find($currentBooked->id_user)->name;
                $i++;
            }
        }
    

		return View::make('manageRestaurant',array('restaurant'=>$restaurant,'currentBookeds'=>$currentBookeds,'customersName'=>$customersName));
	}

}