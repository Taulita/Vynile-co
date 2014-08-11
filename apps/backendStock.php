<?php
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