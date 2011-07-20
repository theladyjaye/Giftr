<?php
use Giftr\System;
use Giftr\Api;

class LoginController extends System\Controller
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
			require System\Application::basePath().'/application/libs/axismundi/forms/validators/AMErrorValidator.php';
			
			$accounts = new Api\Accounts();
			$response = $accounts->login();
			
			if($response->ok == true)
			{
				$this->redirect("/");
			}
			
			$this->model->messages = json_encode($response);
		}
	
		return $this->view('login', $this->model);
	}
	
	public function logout()
	{
		require System\Application::basePath().'/application/api/AbstractApi.php';
		require System\Application::basePath().'/application/api/Accounts.php';
		
		$accounts = new Api\Accounts();
		$response = $accounts->logout();
		
		if($response->ok)
		{
			$this->redirect("/");
		}
	}
}
?>