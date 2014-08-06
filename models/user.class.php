<?php
class User
{
	private $id;
	private $email;
	private $password;
	private $birthdate;
	private $address;
	private $codePostal;
	private $ville;
	private $error = false;

	public function __construct($post = array())
	{
		if ($this->id == null)
		{
			if (isset($post['email'], $post['password'], $post['birthdate'], $post['address'],$post['codePostal'], $post['ville'] ))
			{
				$this->setEmail($post['email']);
				$this->setPassword($post['password']);
				$this->setBirthdate($post['birthdate']);
				$this->setAddress($post['address']);
				$this->setCodePostal($post['codePostal']);
				$this->setVille($post['ville']);
			}
			else
				$this->error = true;
		}
	}
	

	// FONCTION SETTER//
	private function setEmail($email)
	{
		if (filter_var($email, FILTER_VALIDATE_EMAIL))
			$this->email = $email;
	}
	private function setPassword($password)
	{
		if (strlen($password) > 3)
			$this->password = md5($password);
	}
	private function setBirthdate($birthdate)//Format : JJ/MM/YYYY
	{
		if (preg_match("/^(\d{4})-(\d{2})-(\d{2})$/", $birthdate, $matches))
		{
			if(checkdate($matches[2], $matches[3], $matches[1]))
				$this->birthdate = $birthdate;
		}
	}
	private function setAddress($address)
	{
		if (strlen($address) > 6)
			$this->address = $address;
	}

	private function setCodePostal($codePostal)
	{
		if (strlen($codePostal) == 5)
			$this->codePostal = $codePostal;
	}

	private function setVille($ville)
	{
		if (strlen($ville)>4)
			$this->ville = $ville;
	}	



	// FONCTION GETTER//	
	private function getEmail()
	{
		return $this->email;
	}
	private function getPassword()
	{
		return $this->password;
	}
	private function getBirthdate()
	{
		return $this->birthdate;
	}
	private function getAddress()
	{
		return $this->address;
	}
	private function getCodePostal()
	{
		return $this->codePostal;
	}
	private function getVille()
	{
		return $this->ville;
	}

	public function getUser()
	{
		$user=array();
		$user['email']=$this->getEmail();
		$user['password']=$this->getPassword();
		$user['birthdate']=$this->getBirthdate();
		$user['address']=$this->getAddress();
		$user['codePostal']=$this->getCodePostal();
		$user['ville']=$this->getVille();
		return $user;
	}



	// FONCTION ANNEX //
	public function verifPassword($password)
	{
		return $this->password == md5($password);
	}

	// FONCTION ERREUR//
	public function isOK()
	{
		return $this->error == false;
	}
}
?>