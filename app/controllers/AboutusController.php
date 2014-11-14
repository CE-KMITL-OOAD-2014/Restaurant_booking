<?php

class AboutusController extends BaseController {
	
	//show page about us
	public function aboutus () {
		return View::make('aboutus');
	}
}