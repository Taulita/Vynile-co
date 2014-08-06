<?php
require('models/user.class.php');
$error="";

if (isset($_POST['submit']))
{
	$req= "SELECT * FROM t_user WHERE email='".$_POST['email']."'";
	$res = mysqli_query($db, $req);
	if (mysqli_num_rows($res)==1)
	{
		$user = mysqli_fetch_object($res, "User");
		if($user->verifPassword($_POST['password']))
			//require('apps/vinyle.php');
			echo"OK";
		else
			$error="Mot de passe incorrect.";
	}

	else
	{
		$user = new User($_POST);
		if ($user->isOK())
		{
			echo"OK";
			$req= "INSERT INTO t_user (email, password, birthdate, address, codePostal, ville ) 
				VALUES('".mysqli_real_escape_string($db, $user->getEmail())."',
					'".mysqli_real_escape_string($db, $user->getPassword())."',
					'".$user->getBirthdate()."',
					'".mysqli_real_escape_string($db, $user->getAddress())."',
					'".mysqli_real_escape_string($db, $user->getCodePostal())."',
					'".mysqli_real_escape_string($db, $user->getVille())."')";
			var_dump($req);
			mysqli_query($db,$req);	
			//require('apps/vinyle.php');
				
		}
	}
}
require('views/logIn.phtml');



