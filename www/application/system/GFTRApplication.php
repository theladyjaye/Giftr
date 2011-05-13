<?php
namespace Giftr\System;
class Application
{
	private static $application;
	
	public static function sharedApplication()
	{
		return Application::$application;
	}
	
	public static function basePath()
	{
		static $path;
		
		if($path == null)
		{
			$path = realpath(__DIR__.'/../../');
		}
		
		return $path;
	}
	
	public static function current_language()
	{
		return 'en-US';
	}
	
	public static function timestamp_now()
	{
		$date = new DateTime("now", new DateTimeZone("UTC"));
		return $date->format(DateTime::ISO8601);
	}
	
	public static function isMobileClient()
	{
		return $_SERVER['HTTP_USER_AGENT'] == 'GamePop Mobile' || $_SERVER['HTTP_USER_AGENT'] == 'GamePop AIR';
	}
	
	public static function startSession()
	{
		if (session_id() == "") 
		{
			//session_set_cookie_params(0, '/', '.'.GMRConfiguration::applicationDomain(), false);
			session_start();
		}
		
		$configuration = Configuration::standardConfiguration();
		
		// initialize the session which will trigger the cookie/login action if present
		Session::sharedSession();
		
		if(isset($configuration['currentUser']))
		{
			$session = Session::sharedSession();
			$session->currentUser = $configuration['currentUser'];
		}
	}
	
	public function __construct()
	{
		new Configuration('config.ini');
		Application::$application = $this;
	}
	
	
	
	
}
?>