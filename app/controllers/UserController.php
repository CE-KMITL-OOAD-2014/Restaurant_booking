<?php
 
use Core\Storage\User\UserRepository as User;
 
class UserController extends BaseController {
	public function __construct(User $user)
	{
  		$this->user = $user;
	}
	/**
 	* Display a listing of the resource.
 	*
 	* @return Response
 	*/
	public function index()
	{
  		return $this->user->find(1);
	}
}