<?php
namespace Giftr\Queries;
use \AMQuery;

class UserWithUsername extends AMQuery
{
	protected function initialize()
	{
		$username = $this->dbh->real_escape_string($this->options);
		
		$this->sql = <<<SQL
		SELECT id, username, email, password, active, created_on FROM user WHERE username = '$username';
SQL;
	}
}
?>