<?php
namespace Evercue\Queries;
use \AMQuery;

class UserWithString extends AMQuery
{
	protected function initialize()
	{
		$string = $this->dbh->real_escape_string($this->options);
		
		$this->sql = <<<SQL
		CALL UserWithString("$string");
SQL;
	}
}
?>