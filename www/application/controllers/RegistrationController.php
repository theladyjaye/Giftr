<?php
use Giftr\System;
use Giftr\Api;

class RegistrationController extends System\Controller
{
	protected function initialize_complete(){}
	
	public function index()
	{
		$this->model = new stdClass();
		
		if($this->isPostBack)
		{
			require System\Application::basePath().'/application/models/User.php';
			require System\Application::basePath().'/application/api/AbstractApi.php';
			require System\Application::basePath().'/application/api/Accounts.php';
			require System\Application::basePath().'/application/libs/axismundi/forms/AMForm.php';
			require System\Application::basePath().'/application/libs/axismundi/forms/validators/AMEmailValidator.php';
			require System\Application::basePath().'/application/libs/axismundi/forms/validators/AMPatternValidator.php';
			require System\Application::basePath().'/application/libs/axismundi/forms/validators/AMMatchValidator.php';
			require System\Application::basePath().'/application/libs/axismundi/forms/validators/AMErrorValidator.php';
			
			$accounts = new Api\Accounts();
			$response = $accounts->register();
			
			if($response->ok == true)
			{
				return $this->view('registration_thanks', $this->model);
			}
			
			$this->model->messages = json_encode($response);
		}
		
		$this->model->title = "Fun Times -- Partial Views";
		return $this->view('registration', $this->model);
	}
}
?>