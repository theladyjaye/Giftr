<?php
namespace Giftr\Api;
use Giftr\System\Session;

abstract class ApiObject
{
	protected $session;
	
	public function __construct()
	{
		$this->session = Session::sharedSession();
	}
	
	protected function hydrateErrors(&$input, &$response)
	{
		$response->errors = array();
		
		foreach($input->validators as $validator)
		{
			if(!$validator->isValid)
			{
				$error = new stdClass();
				$error->key = $validator->key;
				$error->message = $validator->message;
				$response->errors[] = $error;
			}
		}
	}
}
?>