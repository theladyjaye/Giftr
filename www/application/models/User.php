<?php
namespace Evercue\Models;
use Evercue\System as System;
use Evercue\Queries as Queries;

class User
{
	public $id;
	public $username;
	public $email;
	public $password;
	public $active;
	public $created_on;
	
	public static function hasUserWithNameOrEmail($username, $email)
	{
		static $queryLoaded = false;
		
		if(!$queryLoaded)
		{
			require System\Application::basePath().'/application/queries/UserWithNameOrEmail.php';
			$queryLoaded = true;
		}
		
		$database = System\Database::connection(System\Database::kSql);
		$query    = new Queries\UserWithNameOrEmail($database, array('username' => $username, 'email' => $email));
		
		if(count($query) == 1)
		{
			$result = $query->one();
			
			if($result['username'] == $username)
				return 'username';
			
			if($result['email'] == $email)
				return 'email';
		}
		
		return false;
	}
	
	public static function userWithId($id)
	{
		static $queryLoaded = false;
		
		if(!$queryLoaded)
		{
			require System\Application::basePath().'/application/queries/UserWithId.php';
			$queryLoaded = true;
		}
		
		$object   = null;
		$database = System\Database::connection(System\Database::kSql);
		$query    = new Queries\UserWithId($database, $id);
		
		if(count($query) == 1)
		{
			$object = User::hydrateWithArray($query->one());
		}
		
		return $object;
	}
	
	public static function userWithString($string)
	{
		static $queryLoaded = false;
		
		if(!$queryLoaded)
		{
			require System\Application::basePath().'/application/queries/UserWithString.php';
			$queryLoaded = true;
		}
		
		$object   = null;
		$database = System\Database::connection(System\Database::kSql);
		$query    = new Queries\UserWithString($database, $string);
		
		if(count($query) == 1)
		{
			$object = User::hydrateWithArray($query->one());
		}
		
		return $object;
	}
	
	private static function hydrateWithArray($array)
	{
		$object             = new User();
		$object->id         = $array['id'];
		$object->username   = $array['username'];
		$object->email      = $array['email'];
		$object->password   = $array['password'];
		$object->active     = (int) $array['active'];
		$object->created_on = $array['created_on'];
		
		return $object;
	}
	
	public function save()
	{
		if($this->id)
		{
			// update
			require System\Application::basePath().'/application/queries/UserUpdate.php';
			
			$database = System\Database::connection(System\Database::kSql);
			$query    = new Queries\UserUpdate($database, array('id'        => $this->id,
			                                                    'username'  => $this->username,
			                                                    'email'     => $this->email,
			                                                    'active'    => $this->active,
			                                                    'password'  => $this->password));
			$query->execute();
			$object = $this;
		}
		else
		{
			require System\Application::basePath().'/application/queries/UserInsert.php';
			
			$database = System\Database::connection(System\Database::kSql);
			$query    = new Queries\UserInsert($database, array('username'  => $this->username,
			                                                    'email'     => $this->email,
			                                                    //'active'    => $this->active,
			                                                    'password'  => $this->password));
			$query->execute();
			$object = User::userWithEmail($this->email);
		}
		
		return $object;
	}
}
?>