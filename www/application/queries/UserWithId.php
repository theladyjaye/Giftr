<?php
namespace Giftr\Queries;
use \AMQuery;

class UserWithId extends AMQuery
{
	protected function initialize()
	{
		$id = (int)$this->dbh->real_escape_string($this->options);
		
		$this->sql = <<<SQL
		SELECT id, username, email, password, active, created_on FROM user WHERE id = '$id';
SQL;
	}
}
?>