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
		$_POST['birthdate']='01/12/2010';
		$_POST['address']= "6, rue de l'évênement";
		$_POST['code']='75006';
		$_POST['ville']='Paris';
		$user = new User($_POST);
		if ($user->isOK())
		{
			$req= "INSERT INTO t_user (email, name, firstname, password, admin) 
				VALUES('".mysqli_real_escape_string($db, $user->getEmail())."',
					'".mysqli_real_escape_string($db, $user->getName())."',
					'".mysqli_real_escape_string($db, $user->getFirstName())."',
					'".mysqli_real_escape_string($db, $user->getPassword())."',
					1 )";
			mysqli_query($db,$req);		
		}

		else
			$error="Certaines de vos donn&eacute;es sont incorrectes.";
	}
}

require('views/backendAdmin.phtml');

?>