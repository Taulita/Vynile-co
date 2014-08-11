<?php

if (isset($_POST['artist'], $_POST['name'], $_POST['style'], $_POST['cover'], $_POST['description'], $_POST['prixTTC'], $_POST['stock'], $_POST['year'], $_POST['label'], $_POST['tracksA'], $_POST['tracksB'])) { 

$req = "UPDATE t_article SET
artiste = '".$_POST['artist']."',
nom = '".$_POST['name']."',
style = '".$_POST['style']."',
img = '".$_POST['cover']."',
brefDescriptif = '".$_POST['description']."',
prixTTC = '".$_POST['prixTTC']."',
stock = '".$_POST['stock']."',
annee = '".$_POST['year']."',
label = '".$_POST['label']."',
tracksFaceA = '".$_POST['tracksA']."',
tracksFaceB = '".$_POST['tracksB']."'
WHERE id = '".$_POST["id"]."'";

mysqli_query($db, $req);
}


require('models/user.class.php');
require('models/platine.class.php');
require('models/vinyle.class.php');




function getVinyls($db) {
	// $server = "localhost";
	// $db_name = "vinyle-co";
	// $user = "root";
	// $password = "troiswa";
	// $db = mysqli_connect($server, $user, $password, $db_name);

	$req = "SELECT * FROM t_article WHERE categorie = 'vinyl'";
	$res = mysqli_query($db, $req);
	$vinyls = array();

	while ($vinyl = mysqli_fetch_object($res, "Vinyl")) 
	{
		$vinyls[] = $vinyl;
	}
	return $vinyls;

}

$vinyls = getVinyls($db);


//-----------------------GESTION DES PLATINES------------------------//

function getPlatines($db) {
	// $server = "localhost";
	// $db_name = "vinyle-co";
	// $user = "root";
	// $password = "troiswa";
	// $db = mysqli_connect($server, $user, $password, $db_name);

	$req = "SELECT * FROM t_article WHERE categorie = 'platine'";
	$res = mysqli_query($db, $req);
	$platines = array();

	while ($platine = mysqli_fetch_object($res, "Article")) 
	{
		$platines[] = $platine;
	}
	return $platines;

}


$platines = getPlatines($db);




require('views/backendStock.phtml');