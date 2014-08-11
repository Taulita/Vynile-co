<?php
$error = '';
$requetenvoyee = '';

if (isset($_POST['artisteVoulu'], $_POST['titreVoulu'], $_POST['submitVoulu']))
{
	$artisteVoulu = trim( mysqli_real_escape_string($db,$_POST['artisteVoulu']));
	$titreVoulu = trim(mysqli_real_escape_string($db,$_POST['titreVoulu']));
	$urlVoulu = trim(mysqli_real_escape_string($db,$_POST['urlVoulu']));
	$descriptionVoulu = trim(mysqli_real_escape_string($db,$_POST['descriptionVoulu']));

	if (empty($artisteVoulu))
		{
			$error = "Êtes-vous sûr d'avoir entré le bon artiste que vous voudriez voir dans notre Store";
		}
	else if (empty($titreVoulu))
		{
			$error = "Êtes-vous sûr d'avoir entré le bon titre que vous désirez trouver prochainement dans notre Store";
		}
	else if ($urlVoulu != '' && !(filter_var($urlVoulu, FILTER_VALIDATE_URL)))
		{
			$error = "Url incorrecte";
		}

	else if ($error == '')
		{
			$request=mysqli_query($db,"INSERT INTO requests(artiste, titre, url, description, date_request) VALUES('".$artisteVoulu."','".$titreVoulu."','".$urlVoulu."','".$descriptionVoulu."',NOW())");
			$requetenvoyee="Votre requête a bien été envoyée, nous reprendrons contact avec vous très prochainement!";
		}
}

require('views/requetContact.phtml');
?>