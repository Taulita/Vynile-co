<?php
	$server = "localhost";
	$db_name = "vinyle-co";
	$user = "root";
	//$password = "troiswa";
	$password = "root";

	$db = mysqli_connect($server, $user, $password, $db_name) or die ('<h1 style="font-family: sans-serif; font-size: 16pt; text-align: center; border: 4px solid #FF0000; padding: 16px; width: 400; margin: 0 auto; border-radius: 32px; background-color: #FFC0C0; margin-top: 128px; color: #FF0000;">Error: Failed to connect with database.</h1>');

	$titre_application = "Vinyle & Co";
	$version           = "0.00.001";
	$developpeur1      = "Audrey";
	$developpeur2      = "Mehdi";
	$developpeur3      = "Thomas";
	$compagnie         = "3W Academy Promo 24";
?>
