<?php
class User
{
	private $id;
	private $email;
	private $name;
	private $firstname;
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
			if (isset($post['email'], $post['nom'], $post['prenom'], $post['password'], $post['birthdate'], $post['address'],$post['code'], $post['ville'] ))
			{
				$this->setName($post['nom']);
				$this->setFirstName($post['prenom']);
				$this->setEmail($post['email']);
				$this->setPassword($post['password']);
				$this->setBirthdate($post['birthdate']);
				$this->setAddress($post['address']);
				$this->setCodePostal($post['code']);
				$this->setVille($post['ville']);
			}
			else
				$this->error = true;
		}
	}
	

	// FONCTION SETTER//
	private function setName($nom)
	{
		if (strlen($nom)>2)
			$this->name =trim($nom);
		else
			$this->error=true;
	}

	private function setFirstName($prenom)
	{
		if (strlen($prenom)>2)
			$this->firstname = trim($prenom);
		else
			$this->error=true;
	}

	private function setEmail($email)
	{
		if (filter_var($email, FILTER_VALIDATE_EMAIL))
			$this->email = trim($email);
		else
			$this->error=true;
	}
	private function setPassword($password)
	{
		if (strlen($password) > 3)
			$this->password = md5($password);
		else
			$this->error=true;
	}
	private function setBirthdate($birth)//Format : JJ/MM/YYYY
	{
		$date=explode( "/", $birth);
		if(isset($date[1]))
		{
			if(checkdate($date[1], $date[0], $date[2]))	
				$this->birthdate= $birth;	
		}
		else
			$this->error=true;
	}
	private function setAddress($address)
	{
		if (strlen($address) > 6)
			$this->address = trim($address);
		else
			$this->error=true;
	}

	private function setCodePostal($codePostal)
	{
		if (strlen($codePostal) == 5)
			$this->codePostal = $codePostal;
		else
			$this->error=true;
	}

	private function setVille($ville)
	{
		if (strlen($ville)>4)
			$this->ville = trim($ville);
		else
			$this->error=true;
	}	



	// FONCTION GETTER//

	public function getId()
	{
		return $this->id;
	}
	public function getFirstName()
	{
		return $this->firstname;
	}
	public function getName()
	{
		return $this->name;
	}
	public function getEmail()
	{
		return $this->email;
	}
	public function getPassword()
	{
		return $this->password;
	}
	public function getBirthdate()
	{
		return $this->birthdate;
	}
	public function getAddress()
	{
		return $this->address;
	}
	public function getCodePostal()
	{
		return $this->codePostal;
	}
	public function getVille()
	{
		return $this->ville;
	}
	public function getIsAdmin()
	{
		return $this->admin;
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