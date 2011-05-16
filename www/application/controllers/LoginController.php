<?php
use Giftr\System;
use Giftr\Api;

class LoginController extends System\Controller
{
	protected function initialize_complete(){}
	
	
	public function index()
	{
		$model = new stdClass();
		$model->message = "Hello World";
		
		$this->view('foo', $model);
	}
}
?>