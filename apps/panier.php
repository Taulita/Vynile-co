<?php

if (!(isset($_SESSION['panier'])))
	$_SESSION['panier']=array();
else
	$_SESSION['panier'];


if(isset($_POST['panier']))
{
	array_push($_SESSION['panier'], $_POST['id']);
	header("Location: ".$_SERVER['HTTP_REFERER']."");
}

if(isset($_POST['erase']))
{
	$i=0;
	while($i<sizeof($_SESSION['panier']))
	{
		$panier=array();	
		if($_SESSION['panier'][$_POST['idErase']]);
			
		else
			array_push($panier,$_SESSION['panier'][$i]);
		$i++;
	}
	var_dump($panier);
	$_SESSION['panier']=$panier;
	require('views/panier.phtml');

}
else
	require('views/panier.phtml');


