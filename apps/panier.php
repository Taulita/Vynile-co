<?php

if(isset($_POST['panier']))
{
	if (!(isset($_SESSION['panier'])))
		$_SESSION['panier']=array();
	else
		$_SESSION['panier'];

	array_push($_SESSION['panier'], $_POST['id']);

	header("Location: ".$_SERVER['HTTP_REFERER']."");
}
else
{

	require('views/panier.phtml');
}

