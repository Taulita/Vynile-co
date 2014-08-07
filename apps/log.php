<?php
$error="";
if(isset ($_POST['email']) && isset ($_POST['password']))
{
	$user=$_POST['email'];
	$res=mysqli_query($db,"SELECT email, password, nom FROM t_user WHERE email='".$user."'");
	$data = mysqli_fetch_assoc($res);
	if (mysqli_num_rows($res)==1)
	{
		if($data['password'] === md5($_POST['password']))
		{		 
			$_SESSION['login']= $data['nom'];
			require('views/navUser.phtml');			
		}
		else
		{
			$error="Mot de passe incorrect.";
			require('views/navLogin.phtml');
		}					
	}
	else
	{
		$error="Vous n'	&ecirc;tes pas encore inscrits.";
		require('views/navLogin.phtml');
	}
}

else if (isset($_POST['f_out']))
{
	session_destroy(); 
	$_SESSION=array();
	require('views/navLogin.phtml');
}

else
require('views/navLogin.phtml');
?>