<?php
use Giftr\System;
use Giftr\Api;

class LoginController extends System\Controller
{
	protected function initialize_complete(){}
	
	
	public function index()
	{
		$this->model = new stdClass();
		$this->model->message = "Hello World";
		
		return $this->view('login', $this->model);
	}
}
?>