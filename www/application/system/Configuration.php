<?php
namespace Giftr\System;
class Configuration
{
	private static $domain;
	private static $data;
	private static $configuration;
	
	public function __construct($path)
	{
		$data                = parse_ini_file($path, true);
		self::$configuration = $data['application']['configuration'];
		$currentUser         = null;
		
		if($data['autologin'] && $data['application']['configuration'] == 'debug')
		{
			/*$currentUser            = new GMRCurrentUser();
			$currentUser->id        = $data['autologin']['userid'];
			$currentUser->username  = $data['autologin']['username'];
			$currentUser->token     = $data['autologin']['token'];
			*/
		}
		
		self::$data       = $data[$data['application']['configuration']];
		
		if($currentUser)
			self::$data['currentUser'] = $currentUser;
	}
	
	public static function applicationConfiguration()
	{
		return Configuration::$configuration;
	}
	
	public static function applicationDomain()
	{
		return Configuration::$domain;
	}
	
	public static function standardConfiguration()
	{
		return Configuration::$data;
	}
}
?>