<?php
namespace Giftr\System;
abstract class Controller extends Page
{
	public $model;
	protected $requiresAuthorization  = false;
	protected $requiresPermission     = false;
	protected $currentUser            = null;
	
	protected abstract function initialize_complete();
	protected function initialize()
	{
		global $model;
		$this->model =& $model;
		
		if($this->requiresAuthorization)
			$this->verifyAuthorization();
		
		if($this->requiresPermission)
			$this->verifyPermission() ? null : $this->verifyPermissionFailed();
		
		$this->initialize_complete();
	}

	protected function verifyAuthorization()
	{
		if(!$this->session->currentUser)
		{
			$this->authorizationFailed();
		}
	}
	
	protected function isLoggedIn()
	{
		if($this->session->currentUser)
		{
			return true;
		}
		
		return false;
	}
	
	protected function authorizationFailed()
	{
		$this->redirect("/");
	}
	
	protected function verifyPermissionFailed() {}
	protected function verifyPermission()
	{
		return true;
	}
	
	protected function redirect($url)
	{
		header("Location:".$url);
		exit;
	}
	
	protected function view($view, $model)
	{
		return $view = new View($view, $model);
		//$configuration = Configuration::standardConfiguration();
		//require $configuration['views'].'/'.$view.".php";
	}
}
?>