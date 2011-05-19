<?php
use Giftr\System;
use Giftr\Api;

class HomeController extends System\Controller
{
	protected $requiresAuthorization  = true;
	
	protected function initialize_complete(){}
	
	
	public function index()
	{
		$this->model = new stdClass();

	
		return $this->view('home', $this->model);
	}
}
?>