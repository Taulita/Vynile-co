<?php
class User
{
	private $id;
	private $login;
	private $password;
	private $email;
	private $birthdate;

	public function __construct($login, $password, $email, $birthdate)
	{
		$this->setLogin($login);
		$this->setPassword($password);
		$this->setEmail($email);
		$this->setBirthdate($birthdate);
	}
	public function setLogin($login)
	{
		if (strlen($login) > 2)
			$this->login = $login;
	}
	public function setPassword($password)
	{
		if (strlen($password) > 3)
			$this->password = md5($password);
	}
	public function setEmail($email)
	{
		if (filter_var($email, FILTER_VALIDATE_EMAIL))
			$this->email = $email;
	}
	public function setBirthdate($birthdate)//Format : JJ/MM/YYYY
	{
		if (preg_match("/^(\d{4})-(\d{2})-(\d{2})$/", $birthdate, $matches))
		{
			if(checkdate($matches[2], $matches[3], $matches[1]))
			{
				$this->birthdate = $birthdate;
			}
		}
	}
	public function getLogin()
	{
		return $this->login;
	}
	public function getPassword()
	{
		return 'Encrypted';
	}
	public function getEmail()
	{
		return $this->email;
	}
	public function getBirthdate()
	{
		return $this->birthdate;
	}
	public function verifPassword($password)
	{
		return ($this->password == md5($password));
	}
}
?>