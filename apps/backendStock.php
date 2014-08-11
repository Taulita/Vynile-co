<?php

require('models/user.class.php');
require('models/platine.class.php');
require('models/vinyle.class.php');



//---------GESTION DES VINYLES---------//


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

if (isset($_POST["delete-vinyl"])) {

$req2 = "DELETE FROM t_article WHERE id = '".$_POST['id']."'";

mysqli_query($db,$req2);

}

//---------GESTION DES PLATINES---------//

if (isset($_POST['name'], $_POST['year'], $_POST['prixTTC'], $_POST['description'],  $_POST['stock'], $_POST['brand'])) { 

$req3 = "UPDATE t_article SET
nom = '".$_POST['name']."',
annee = '".$_POST['year']."',
prixTTC = '".$_POST['prixTTC']."',
brefDescriptif = '".$_POST['description']."',
stock = '".$_POST['stock']."',
marque = '".$_POST['brand']."'
WHERE id = '".$_POST["id"]."'";

mysqli_query($db, $req3);
}
var_dump($_POST);

if (isset($_POST["delete-platine"])) {

$req4 = "DELETE FROM t_article WHERE id = '".$_POST['id']."'";

mysqli_query($db,$req4);

}


//---------------GETTERS----------------//


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



function getPlatines($db) {
	// $server = "localhost";
	// $db_name = "vinyle-co";
	// $user = "root";
	// $password = "troiswa";
	// $db = mysqli_connect($server, $user, $password, $db_name);

	$req = "SELECT * FROM t_article WHERE categorie = 'platine'";
	$res = mysqli_query($db, $req);
	$platines = array();

	while ($platine = mysqli_fetch_object($res, "Platine")) 
	{
		$platines[] = $platine;
	}
	return $platines;

}


$platines = getPlatines($db);





require('views/backendStock.phtml');