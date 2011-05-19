<?php
namespace Giftr\Api;
use \stdClass;
use Giftr\System as System;
use Giftr\Models as Models;


class Accounts extends ApiObject
{
	/**
	 * Logout
	 * GET /accounts/logout
	 *
	 * @return void
	 * @author Adam Venturella
	 */
	public function logout()
	{
		$response     = new stdClass();
		$response->ok = true;
		
		$this->session->destroy();
		return $response;
	}
	
	/**
	 * Log in
	 * 
	 * POST /accounts/login
	 * 
	 * Form Vars (application/x-www-form-urlencoded)
	 * username
	 * password
	 *
	 * @return void
	 * @author Adam Venturella
	 */
	public function login()
	{
		$is_email     = false;
		$response     = new stdClass();
		$response->ok = false;
		
		$context = array(\AMForm::kDataKey=>$_POST);
		$input   = \AMForm::formWithContext($context);
		
		$input->addValidator(new \AMPatternValidator('password', \AMValidator::kRequired, '/^[\w\d\W]{5,}$/', "Invalid password.  Expecting minimum 5 characters. Cannot contain spaces"));
		
		if(strpos($input->username, '@') !== false)
		{
			$input->addValidator(new \AMEmailValidator('username', \AMValidator::kRequired, 'Invalid email address'));
			$is_email = true;
		}
		else
		{
			$input->addValidator(new \AMPatternValidator('username', \AMValidator::kRequired, '/^[\w\d]{4,}$/', "Invalid username.  Expecting minimum 4 characters. Must be composed of letters, numbers or _"));
		}
		
		
		if($input->isValid)
		{
			$user = $is_email ? Models\User::userWithEmail($input->username) : Models\User::userWithUsername($input->username);
			
			if($user)
			{
				$password = System\Security::hash($input->password);
				
				if($user->active == 1 && $password == $user->password)
				{
					// if(System\Application::isMobileClient())
					// 					{
					// 						$response->ok     = true;
					// 						$response->token  = $user->token;
					// 					}
					// 					else
					// 					{
						
						$currentUser            = new Models\CurrentUser();
						$currentUser->id        = $user->id;
						$currentUser->username  = $user->username;
						
						$this->session->currentUser = $currentUser;

						$response->ok     = true;
						$response->user   = $currentUser;
					//}
				}
				else
				{
					// intentionally vague about which one was wrong
					$input->addValidator(new \AMErrorValidator('error', "Invalid login."));
					$this->hydrateErrors($input, $response);
				}
			}
			else
			{
				// intentionally vague about which one was wrong
				$input->addValidator(new \AMErrorValidator('error', "Invalid login."));
				$this->hydrateErrors($input, $response);
			}
		}
		else
		{
			$this->hydrateErrors($input, $response);
		}
		
		return $response;
	}
	
	/**
	 * Register a new User Account.  Will send a notification
	 * to the provided email address to verify the account.
	 * POST /accounts/register
	 *
	 * Form Vars (application/x-www-form-urlencoded)
	 * email
	 * username
	 * password
	 * password_verify
	 *
	 * @return object
	 * @author Adam Venturella
	 */
	public function register()
	{
		$response     = new stdClass();
		$response->ok = false;
		
		$context = array(\AMForm::kDataKey=>$_POST);
		$input   = \AMForm::formWithContext($context);

		// I'm gonna say we don't need First/Last name.  No need
		// $input->addValidator(new AMPatternValidator('firstname', AMValidator::kRequired, '/^[a-zA-Z]{2,}[a-zA-Z ]{0,}$/', "Invalid first name. Expecting minimum 2 characters. Must start with at least 2 letters, followed by letters or spaces"));
		// $input->addValidator(new AMPatternValidator('lastname', AMValidator::kRequired, '/^[a-zA-Z]{2,}[a-zA-Z ]{0,}$/', "Invalid last name.  Expecting minimum 2 characters. Must start with at least 2 letters, followed by letters or spaces"));
		$input->addValidator(new \AMEmailValidator('email', \AMValidator::kRequired, 'Invalid email address'));
		$input->addValidator(new \AMPatternValidator('username', \AMValidator::kRequired, '/^[\w\d]{4,}$/', "Invalid username.  Expecting minimum 4 characters. Must be composed of letters, numbers or _"));
		$input->addValidator(new \AMPatternValidator('password', \AMValidator::kRequired, '/^[\w\d\W]{5,}$/', "Invalid password.  Expecting minimum 5 characters. Cannot contain spaces"));
		$input->addValidator(new \AMMatchValidator('password', 'password_verify', \AMValidator::kRequired, "Passwords do not match"));

		if($input->isValid)
		{
			// everything looks good so far
			// but we need to do some additional checking/cleanup
			// before we can create the account

			$data =& $input->formData;
			$data['email']     = strtolower($data['email']);
			$data['username']  = strtolower($data['username']);

			// do the domain and email values already exist?
			$dirty   = false;
			$hasUser = Models\User::hasUserWithNameOrEmail($input->username, $input->email);
			
			if($hasUser != false)
			{
				switch($hasUser)
				{
					case 'email':
						$input->addValidator(new \AMErrorValidator('email', "Invalid email address.  This email address is currently in use."));
						break;
					
					case 'username':
						$input->addValidator(new \AMErrorValidator('username', "Invalid username.  This username is currently in use."));
						break;
				}
				
				$dirty = true;
			}
			
			if($dirty) 
			{
				$this->hydrateErrors($input, $response);
			}
			else
			{
				$user               = new Models\User();
				$user->username     = $input->username;
				$user->email        = $input->email;
				//$user->token        = System\Security::generate_token(uniqid(true));
				$user->password     = System\Security::hash($input->password);
				
				$user               = $user->save();
				
				//require System\Application::basePath().'/application/data/GMRUserVerification.php';
				
				// the token comes back, we are not currently doing anything with it.
				//$token = GMRUserVerification::welcome($user);
				
				$response->ok = true;
			}
		}
		else
		{
			$this->hydrateErrors($input, $response);
		}

		return $response;
	}
}
?>
