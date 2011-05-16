<?php
use Giftr\System;
use Giftr\Api;

class LandingPageController extends System\Controller
{
	protected function initialize_complete(){}
	
	public function index()
	{
		$this->model = new stdClass();
		return $this->view('landing_page',$this->model);
	}	
}
?>