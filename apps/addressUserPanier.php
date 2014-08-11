<?php
$idUser=$_SESSION['id'];
$req="SELECT * FROM t_user WHERE id='".$idUser."'";
$res=mysqli_query($db,$req);
while($user = mysqli_fetch_object($res, "User"))
{
	require('views/addressUserPanier.phtml');
}
?>