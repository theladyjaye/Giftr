<?php
namespace Giftr\System;
class Session
{
	const kSessionKey = 'GFTR';
	
	private static $session = null;
	
	public static function sharedSession()
	{
		if(!self::$session)
		{
			self::$session = new Session();
		}
		
		return self::$session;
	}
	
	public function __construct()
	{
		$token = null;
		$user  = null;
		
		// these 2 dudes are only used if there is no valid user found, or if the
		// provided token is less then this $static_token
		
		$static_token      = 'e060415ff54e1bd812def344246b37ad28bb81ee';
		$static_user_token = '35f950de568a8be7877dbf9e07570803';
		
		if(isset($_COOKIE['GMR_T']))
		{
			$token = $_COOKIE['GMR_T'];
			
			if(isset($_COOKIE['GMR_U']))
			{
				$username = $_COOKIE['GMR_U'];
				/*$user     = GMRUser::userWithUsername($username);
				
				if($user)
				{
					if(strlen($token) == strlen($static_token) && GMRSecurity::is_valid_user_cookie($token, $user->token))
					{
						$currentUser = new GMRCurrentUser();
						$currentUser->id       = $user->id;
						$currentUser->username = $user->username;
						$currentUser->token    = $user->token;
						$this->currentUser     = $currentUser;
						
						return;
					}
				}
				
				// there is no user, but lets eat up the same amount of time as if there was:
				GMRSecurity::is_valid_user_cookie($static_token, $static_user_token);
				//$this->destroy();
				*/
			}
		}
	}
	
	public function destroy()
	{
		$_SESSION[Session::kSessionKey] = array();
		
		if (isset($_COOKIE[session_name()])) 
		    setcookie(session_name(), '', time()-42000, '/');
		
		if (isset($_COOKIE['GMR_T'])) 
			setcookie('GMR_T', '', time()-42000, '/');
			
		if (isset($_COOKIE['GMR_U'])) 
			setcookie('GMR_U', '', time()-42000, '/');
			
		session_destroy();
	}
	
	public function __get($key)
	{
		if(isset($_SESSION[Session::kSessionKey][$key]))
			return $_SESSION[Session::kSessionKey][$key];
	}
	
	public function __unset($key)
	{
		if(isset($_SESSION[Session::kSessionKey][$key]))
			unset($_SESSION[Session::kSessionKey][$key]);
	}

	public function __set($key, $value)
	{
		if($key == "currentUser")
		{
			$expires = time() + (86400 * 90); // 90 days;
			setcookie('GMR_T', Security::generate_cookie_token($value->token), $expires, '/');
			setcookie('GMR_U', $value->username, $expires, '/');
		}
		
		if(isset($_SESSION[Session::kSessionKey][$key]) && $_SESSION[Session::kSessionKey][$key] != $value)
		{
			$_SESSION[Session::kSessionKey][$key] = $value;
		}
		else
		{
			$_SESSION[Session::kSessionKey][$key] = $value;
		}
	}
}
?>
