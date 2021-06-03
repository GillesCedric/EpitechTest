<?php
session_start();

include_once 'dbconnection.php';

class Profile
{
	protected String $name;
	protected String $society;
	protected String $email;
	protected String $phone;

	public function __construct(?String $name, ?String $society, ?String $email, ?String $phone)
	{
		$this->name = $name;
		$this->society = $society;
		$this->email = $email;
		$this->phone = $phone;
	}

	public function saveProfile(): void
	{
		try {
			$connection = new DBConnection();
			$connection = $connection->setConnection();
			$request = $connection->prepare('INSERT INTO profile (name,society,email,tel,userid) VALUES (?,?,?,?,?)');
			$response = $request->execute(array($this->name, $this->society, $this->email, $this->phone, $_SESSION['user']));
		} catch (Exception $th) {
			throw $th;
		}
	}

	/**
	 * Get the value of name
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Set the value of name
	 *
	 * @return  self
	 */
	public function setName($name)
	{
		$this->name = $name;

		return $this;
	}

	/**
	 * Get the value of society
	 */
	public function getSociety()
	{
		return $this->society;
	}

	/**
	 * Set the value of society
	 *
	 * @return  self
	 */
	public function setSociety($society)
	{
		$this->society = $society;

		return $this;
	}

	/**
	 * Get the value of email
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * Set the value of email
	 *
	 * @return  self
	 */
	public function setEmail($email)
	{
		$this->email = $email;

		return $this;
	}

	/**
	 * Get the value of tel
	 */
	public function getTel()
	{
		return $this->tel;
	}

	/**
	 * Set the value of tel
	 *
	 * @return  self
	 */
	public function setTel($tel)
	{
		$this->tel = $tel;

		return $this;
	}
}
