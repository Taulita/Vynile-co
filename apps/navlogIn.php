<?php
$error="";
if(isset ($_POST['email']) && isset ($_POST['password']))
{
	$user=mysqli_real_escape_string($db, $_POST['email']);
	$res=mysqli_query($db,"SELECT id, email, password, firstname, admin FROM t_user WHERE email='".$user."'");
	$data = mysqli_fetch_assoc($res);
	if (mysqli_num_rows($res)==1)
	{
		if($data['password'] === md5($_POST['password']))
		{		 
			$_SESSION['login']= $data['firstname'];
			$_SESSION['id']= $data['id'];

			if ($data['admin'] == 1)
			{
				$_SESSION['admin'] = $data['admin'];
				require('views/navAdmin.phtml');	
			}
			else
				require('views/navUser.phtml');			
		}
		else
		{
			$error="Mot de passe incorrect.";
			require('views/navLogIn.phtml');
		}					
	}
	else
	{

		$error="Vous n'	&ecirc;tes pas encore inscrit.";
		require('views/navLogIn.phtml');

	}
}

else if (isset($_GET['logOut']))
{
	session_destroy(); 
	$_SESSION=array();
	require('views/navLogIn.phtml');
}

else if (isset($_SESSION['id']))
{
	if (isset($_SESSION['admin']))			
	{		
		require('views/navAdmin.phtml');	
	}
	else
		require('views/navUser.phtml');
	
}

else
require('views/navLogIn.phtml');
?>