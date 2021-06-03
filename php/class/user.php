<?php
session_start();

include_once 'dbconnection.php';

class User
{
	private String $login;
	private String $password;

	public function __construct(?String $login, ?String $password)
	{
		$this->login = $login;
		$this->password = $password;
	}

	public function sign_in(): bool
	{
		try {
			$connection = new DBConnection();
			$connection = $connection->setConnection();
			$request = $connection->prepare('SELECT * FROM user WHERE login=? AND password=?');
			$request->execute(array($this->login, md5($this->password)));
			if ($request->rowcount() > 0) {
				$data = $request->fetch();
				$_SESSION['user'] = $data['id'];
				return true;
			}
		} catch (Exception $th) {
			throw $th;
		}
		return false;
	}

	public function sign_up(): void
	{
		try {
			$connection = new DBConnection();
			$connection = $connection->setConnection();
			$request = $connection->prepare('INSERT INTO user(login,password) VALUES(?,?)');
			$request->execute(array($this->login, md5($this->password)));
		} catch (Exception $th) {
			throw $th;
		}
	}

	public static function sign_out(): void
	{
		$_SESSION = array();
		session_destroy();
	}
}
