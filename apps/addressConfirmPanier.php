<?php
require('models/user.class.php');
$idUser=$_SESSION['id'];

$req="SELECT * FROM t_user WHERE id='".$idUser."'";
$res=mysqli_query($db,$req);
while($user = mysqli_fetch_object($res, "User"))
{
	if(isset($_POST['modif']))
		require('views/addressModifPanier.phtml');
	else
		require('views/addressConfirmPanier.phtml');
}




?>