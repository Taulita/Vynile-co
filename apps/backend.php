<?php

require('../models/user.class.php');
require('../models/vynile.class.php');
require('../sources/confphp/param.conf.php');
#var_dump($_POST);

//-----------------------GESTION DES CLIENTS------------------------//

function getClients() {
	$server = "localhost";
	$db_name = "vinyle-co";
	$user = "root";
	$password = "troiswa";
	$db = mysqli_connect($server, $user, $password, $db_name);

	$req = "SELECT * FROM t_user";
	$res = mysqli_query($db, $req);
	$clients = array();

	while ($client = mysqli_fetch_object($res, "User")) {
		$clients[] = $client;
	}
	return $clients;

}

$clients = getClients();

//-----------------------GESTION DES VINYLES------------------------//

function getVinyls() {
	$server = "localhost";
	$db_name = "vinyle-co";
	$user = "root";
	$password = "troiswa";
	$db = mysqli_connect($server, $user, $password, $db_name);

	$req = "SELECT * FROM t_article WHERE categorie = 'vinyl'";
	$res = mysqli_query($db, $req);
	$vinyls = array();

	while ($vinyl = mysqli_fetch_object($res, "Vinyl")) {
		$vinyls[] = $vinyl;
	}
	return $vinyls;

}

$vinyls = getVinyls();


//-----------------------GESTION DES PLATINES------------------------//

/*function getClients() {
	$server = "localhost";
	$db_name = "vinyle-co";
	$user = "root";
	$password = "troiswa";
	$db = mysqli_connect($server, $user, $password, $db_name);

	$req = "SELECT * FROM t_user";
	$res = mysqli_query($db, $req);
	$clients = array();

	while ($client = mysqli_fetch_object($res, "User")) {
		$clients[] = $client;
	}
	return $clients;

}


$clients = getClients();*/

require('../views/backend.phtml');







//-----------------------GESTION DES ARTICLES------------------------//






?>