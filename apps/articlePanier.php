<?php
require('models/vinyle.class.php');
require('models/platine.class.php');
$i=0;
while($i<sizeof($_SESSION['panier']))
{
	$idArticle= $_SESSION['panier'][$i];
	$req="SELECT * FROM t_article WHERE id='".$idArticle."' AND categorie ='platine' ";
	$res=mysqli_query($db,$req);
	if(mysqli_num_rows($res)==1)
		$obj = "Platine";
	else 
	{
		$req="SELECT * FROM t_article WHERE id='".$idArticle."'";
		$res=mysqli_query($db,$req);
		$obj = "Vinyl";
	}
	while($article = mysqli_fetch_object($res, $obj))
	{
		require('views/articlePanier.phtml');
	}
	$i++;
}