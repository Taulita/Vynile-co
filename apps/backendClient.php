<?php
require('models/user.class.php');
function getClients($db) {

	$req = "SELECT * FROM t_user";
	$res = mysqli_query($db, $req);
	$clients = array();

	while ($client = mysqli_fetch_object($res, "User")) {
		$clients[] = $client;
	}
	return $clients;

}

$clients = getClients($db);

if(isset($_POST['traite']))
{
	$req3="UPDATE requests SET traite=1 WHERE id='".$_POST['id']."'";
	mysqli_query($db,$req3);
}

require('views/backendClient.phtml');
?>