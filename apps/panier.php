<?php
$error3='';

if (!(isset($_SESSION['panier'])))
	$_SESSION['panier']=array();
else
	$_SESSION['panier'];

if(isset($_POST['panier']))
{
	array_push($_SESSION['panier'], $_POST['id']);
	header("Location:".$_SERVER['HTTP_REFERER']."");
}

else if(isset($_POST['erase']))
{
	$j=0;
	$panier=array();	
	while($j<sizeof($_SESSION['panier']))
	{
		if([$j]!=[$_POST['idErase']])
			array_push($panier,$_SESSION['panier'][$j]);
		$j++;
	}
	$_SESSION['panier']=$panier;
	header("Location:index.php?page=panier");
}

else if(isset($_POST['validate']))
{
	if($_SESSION['TotalTTC'] != "0,00")
	{
		if(isset($_SESSION['id']))
			require('apps/confirmPanier.php');
		else
			require('views/inscription.phtml');
	}
	else
	{
		$error3="Votre panier est vide!";
		require('views/panier.phtml');
		
	}
}

else if(isset($_POST['modif']))
	require('views/panier.phtml');

else
	require('views/panier.phtml');
?>


