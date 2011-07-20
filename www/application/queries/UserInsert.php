<?php
namespace Evercue\Queries;
use \AMQuery;
use Evercue\System;
class UserInsert extends AMQuery
{
	protected function initialize()
	{
		$timestamp = System\Application::timestamp_now();
		
		$username  = $this->dbh->real_escape_string($this->options['username']);
		$email     = $this->dbh->real_escape_string($this->options['email']);
		$password  = $this->dbh->real_escape_string($this->options['password']);
		//$active    = (int) $this->dbh->real_escape_string($this->options['active']);
		
		//INSERT INTO user (username, email, password, token, created_on) VALUES ('$username', '$email', '$firstname', '$lastname', '$password', '$token', '$timestamp');
		$this->sql = <<<SQL
		INSERT INTO user (username, email, password, created_on) VALUES ('$username', '$email', '$password', '$timestamp');
SQL;
	}
}

?>