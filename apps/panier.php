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

else if(isset($_POST['erase']))
{
	
	$j=0;
	$panier=array();	
	while($j<sizeof($_SESSION['panier']))
	{
		if($_SESSION['panier'][$j]!=$_SESSION['panier'][$_POST['idErase']])
			array_push($panier,$_SESSION['panier'][$j]);
		$j++;
	}
	$_SESSION['panier']=$panier;
	header("Location: index.php?page=panier");


}

else
	require('views/panier.phtml');


