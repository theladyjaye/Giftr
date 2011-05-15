<?php
namespace Giftr\Queries;
use \AMQuery;

class UserWithEmail extends AMQuery
{
	protected function initialize()
	{
		$email = $this->dbh->real_escape_string($this->options);
		
		$this->sql = <<<SQL
		SELECT id, username, email, password, active, created_on FROM user WHERE email = '$email';
SQL;
	}
}
?>