<?php
 
use Core\Storage\User\UserRepository as User;
 
class ManageRestaurants  {
	
    public function __construct(User $user)
	{
  		$this->user = $user;
	}


	public function manage ($restaurant)
	{

		$books = DB::table('books')->where('id_res',$restaurant->id)->get();
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
        
        $results['restaurant'] = $restaurant;
        $results['currentBookeds'] = $currentBookeds;
        $results['customersName'] = $customersName;

		return $results;
	}

}