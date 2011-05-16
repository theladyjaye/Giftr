<?php
use Giftr\System\Controller;
use Giftr\System\Database;

class RegistrationController extends Controller
{
	protected function initialize_complete()
	{

	}
	
	public function index()
	{
		if($this->isPostBack)
		{
			
		}
		
		$model = new stdClass();
		$model->message = "Hello World";
		
		return $this->view('registration', $model);
	}
}
?>