<?php
namespace Giftr\System;
abstract class Page
{
	public $isPostBack = false;
	protected $session;
	
	public static function Controller($class)
	{
		//global $controller;
		$configuration = Configuration::standardConfiguration();
		
		//require realpath('./').'/'.$configuration['controllers'].'/'.$class;
		require $configuration['controllers'].'/'.$class;
		
		
		$class = substr($class, 0, strrpos($class, '.'));
		//$controller = new $class();
		return new $class();
	}
	
	public function __construct()
	{
		$this->session = Session::sharedSession();
		
		if(count($_POST))
		{
			$this->isPostBack = true;
		}
		
		$this->initialize();
	}
	
	protected abstract function initialize();
}
?>