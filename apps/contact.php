<?php


if (isset($_POST['artiste-voulu'], $_POST['titre-voulu']))
	{
		$artisteVoulu = trim($_POST['artiste-voulu'];
		$titreVoulu = trim($_POST['titre-voulu'];
		$urlVoulu = trim($_POST['url-voulu']);
		$descripionVoulu = trim($_POST['description-voulu'];

		$error = '';

	if (empty($artisteVoulu))
		{
			$error = "Êtes-vous sûr d'avoir entré le bon artiste que vous voudriez voir dans notre Store";.
		}
	else if (empty($titreVoulu))
		{
			$error = "Êtes-vous sûr d'avoir entré le bon titre que vous désirez trouver prochainement dans notre Store";.
		}

	}


$req="INSERT INTO ";

$res=mysqli_query($db,$req);
while($data=mysqli_fetch_assoc($res))
{
	
}
require('contact.phtml');

?>