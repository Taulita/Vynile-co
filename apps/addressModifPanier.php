<?php
require('models/user.class.php');
$idUser=$_SESSION['id'];
$error2="";
$req="SELECT * FROM t_user WHERE id='".$idUser."'";
$res=mysqli_query($db,$req);
while($user = mysqli_fetch_object($res, "User"))
{	
	if(isset($_POST['submit']))
	{
		$user->AddressModif($_POST);
		if($user->isOK())
		{
			$req="UPDATE t_user SET name='".mysqli_real_escape_string($db, $user->getName())."',
			firstname='".mysqli_real_escape_string($db, $user->getFirstName())."',
			address='".mysqli_real_escape_string($db, $user->getAddress())."',
			codePostal= '".mysqli_real_escape_string($db, $user->getCodePostal())."',
			ville='".mysqli_real_escape_string($db, $user->getVille())."' WHERE id='".$idUser."'";
			mysqli_query($db,$req);
			require('views/addressConfirmPanier.phtml');
			//header('Location:index.php?page=confirmPanier&sectionPanier=addressConfirmPanier#address');
		}
		else
		{
			$error2="Vos informations sont incorrectes";
		}		
	}
	else
		require('views/addressModifPanier.phtml');
}
?>