<?php
 
use Core\Storage\Area\AreaRepository as Area;
 
class AreaController extends BaseController {
	public function __construct(Area $area)
	{
  		$this->area = $area;
	}
	/**
 	* Display a listing of the resource.
 	*
 	* @return Response
 	*/
	public function index()
	{
  		return $this->area->all();
	}
}