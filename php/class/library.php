<?php
include_once 'dbconnection.php';
include_once 'profile.php';

class library extends Profile
{

	public function __contruct(?String $name, ?String $society, ?String $email, ?String $phone)
	{
		parent::__construct($name, $society, $email, $phone);
	}
	/**
	 * @Override 
	 */
	public function saveProfile(): void
	{
		try {
			$connection = new DBConnection();
			$connection = $connection->setConnection();
			$request = $connection->prepare('INSERT INTO library (name,society,email,tel,userid) VALUES (?,?,?,?,?)');
			$request->execute(array($this->name, $this->society, $this->email, $this->phone, $_SESSION['user']));
		} catch (Exception $th) {
			throw $th;
		}
	}
}
