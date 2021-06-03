<?php

require_once(dirname(__DIR__) . '/config.php');
require_once(CLASS_PATH . '/dbconnection.php');

class DBConnection
{
	private string $host;
	private string $port;
	private string $dbname;
	private string $user;
	private string $password;
	public function __construct(string $host = DB_HOST, string $port = DB_PORT, string $dbname = DB_NAME, string $user = DB_USER, string $password = DB_PASSWORD)
	{
		$this->host = $host;
		$this->port = $port;
		$this->dbname = $dbname;
		$this->user = $user;
		$this->password = $password;
	}

	public function setConnection(): PDO
	{
		return new PDO("mysql:host=" . $this->host . ":" . $this->port . ";dbname=" . $this->dbname, $this->user, $this->password);
	}
}
