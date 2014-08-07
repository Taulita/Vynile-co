<?php
require('models/user.class.php');
$error="";

if (isset($_POST['submit']))
{
	$req= "SELECT * FROM t_user WHERE email='".$_POST['email']."'";
	$res = mysqli_query($db, $req);
	if (mysqli_num_rows($res)==1)
	{
		$error="Vous &ecirc;tes d&eacute;j&agrave; inscrits.";
	}

	else
	{
		$user = new User($_POST);
		if ($user->isOK())
		{
			$req= "INSERT INTO t_user (email, name, firstname, password, birthdate, address, codePostal, ville ) 
				VALUES('".mysqli_real_escape_string($db, $user->getEmail())."',
					'".mysqli_real_escape_string($db, $user->getName())."',
					'".mysqli_real_escape_string($db, $user->getFirstName())."',
					'".mysqli_real_escape_string($db, $user->getPassword())."',
					'".date("Y-m-d", strtotime($user->getBirthdate()))."',
					'".mysqli_real_escape_string($db, $user->getAddress())."',
					'".mysqli_real_escape_string($db, $user->getCodePostal())."',
					'".mysqli_real_escape_string($db, $user->getVille())."')";

			mysqli_query($db,$req);	
			$_SESSION['login']= $user->getFirstName();
			$_SESSION['id']= mysqli_insert_id($db);
			header('Location: index.php?page=accueil');
				
		}
		else
			$error="Certaines de vos donn&eacute;es sont incorrectes.";
	}
}
require('views/logIn.phtml');



