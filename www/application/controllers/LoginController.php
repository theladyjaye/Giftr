<?php
use Giftr\System\Controller;
use Giftr\System\Database;

class LoginController extends Controller
{
	protected function initialize_complete()
	{
		$this->messages = new stdClass();
		$this->model = new stdClass();
		$this->model->messages = "{}";
		$this->model->formSuccess = false;
		
		
		/*
		$db = Database::connection(Database::kSql);
		$query = new AMQuery($db);
		$query->sql = "select * from user";
		
		foreach($query as $row)
		{
			echo $row["username"], " : ", $row["email"], "<br>";
		}
		
		
		if($this->isPostBack)
		{
			$this->processForm();
		}
		*/
	}
	
	public function foo()
	{
		$model = new stdClass();
		$model->message = "Hello World";
		
		$this->view('foo', $model);
	}
}
?>