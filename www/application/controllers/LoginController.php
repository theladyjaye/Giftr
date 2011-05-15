<?php
use Giftr\System\Controller;
use Giftr\System\Database;

class LoginController extends Controller
{
	protected function initialize_complete()
	{

	}
	
	public function foo()
	{
		$model = new stdClass();
		$model->message = "Hello World";
		
		$this->view('foo', $model);
	}
}
?>