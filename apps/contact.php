<?php


if (isset($_POST['artisteVoulu'], $_POST['titreVoulu'], $_POST['submitVoulu']))
	{
		$artisteVoulu = trim($_POST['artisteVoulu'];
		$titreVoulu = trim($_POST['titreVoulu'];
		$urlVoulu = trim($_POST['urlVoulu']);
		$descripionVoulu = trim($_POST['descriptionVoulu'];

		$error = '';

		if (empty($artisteVoulu))
			{
				$error = "Êtes-vous sûr d'avoir entré le bon artiste que vous voudriez voir dans notre Store";.
			}
		else if (empty($titreVoulu))
			{
				$error = "Êtes-vous sûr d'avoir entré le bon titre que vous désirez trouver prochainement dans notre Store";.
			}
		else if ($urlVoulu != '' && !filter_var($urlVoulu, FILTER_VALIDATE_URL))
			{
				$error = "Url incorrecte";
			}

		else ($error == '')
			{

				$request=mysqli_query($db,"INSERT INTO requests(artiste, titre, url, description) VALUES('".$artisteVoulu.",".$titreVoulu.",".$urlVoulu.",".$descriptionVoulu."') ");

				$res=mysqli_query($db,$request);
			}

	}


$request=mysqli_query($db,"INSERT INTO requests(artiste, titre, url, description) VALUES('".$artisteVoulu.",".$titreVoulu.",".$urlVoulu.",".$descriptionVoulu."') ");

$res=mysqli_query($db,$request);

	

require('contact.phtml');

?>