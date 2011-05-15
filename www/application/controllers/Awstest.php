<?php
use Giftr\System\Controller;
use Giftr\System\Database;

class Awstest extends Controller
{
	protected function initialize_complete()
	{
		$this->messages = new stdClass();
		$this->model = new stdClass();
		$this->model->messages = "{}";
		$this->model->formSuccess = false;
		
		$pas = new AmazonPAS();
		$this->model->aws_response = $pas->item_search('red hot chili peppers');
		
		//$db = Database::connection(Database::kSql);
		//$query = new AMQuery($db);
		//$query->sql = "select * from user";
		
		//foreach($query as $row)
		//{
	//		echo $row["username"], " : ", $row["email"], "<br>";
		//}
		
		
		if($this->isPostBack)
		{
			$this->processForm();
		}
	}
	
	private function processForm()
	{
		global $model;
		
		require System\Application::basePath().'/application/libs/axismundi/forms/AMForm.php';
		require System\Application::basePath().'/application/libs/axismundi/forms/validators/AMPatternValidator.php';
		require System\Application::basePath().'/application/libs/axismundi/forms/validators/AMInputValidator.php';
		require System\Application::basePath().'/application/libs/axismundi/forms/validators/AMEmailValidator.php';
		require System\Application::basePath().'/application/libs/axismundi/forms/validators/AMMatchValidator.php';
		require System\Application::basePath().'/application/libs/axismundi/forms/validators/AMErrorValidator.php';
		
		$context = array(AMForm::kDataKey=>$_POST);
		$form    = AMForm::formWithContext($context);
		
		$form->addValidator(new AMPatternValidator('username', AMValidator::kRequired, '/^[\w\d]{4,}$/', "Invalid username.  Expecting minimum 4 characters. Must be composed of letters, numbers or _"));
		$form->addValidator(new AMEmailValidator('email', AMValidator::kRequired, 'Invalid email address'));
		$form->addValidator(new AMPatternValidator('password', AMValidator::kRequired, '/^[\w\d\W]{5,}$/', "Invalid password.  Expecting minimum 5 characters. Cannot contain spaces"));
		$form->addValidator(new AMMatchValidator('password', 'password-verify', AMValidator::kRequired, "Passwords do not match"));
		
		if($form->isValid)
		{
			$this->model->formSuccess = true;
		}
		else
		{
			$this->hydrateErrors($form, $this->messages);
			$this->model->messages = json_encode($this->messages);
		}
	}
	
	protected function hydrateErrors(&$input, &$messages)
	{
		$messages->errors = array();
		
		foreach($input->validators as $validator)
		{
			if(!$validator->isValid)
			{
				$error = new stdClass();
				$error->key = $validator->key;
				$error->message = $validator->message;
				$messages->errors[] = $error;
			}
		}
	}
}
?>