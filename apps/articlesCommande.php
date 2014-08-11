<?php
$i=0;
while($i<sizeof($articlesCommande))
{
	$idArticle= $articlesCommande[$i];
	$req="SELECT * FROM t_article WHERE id='".$idArticle."' AND categorie ='platine' ";
	$res2=mysqli_query($db,$req);
	if(mysqli_num_rows($res2)==1)
		$obj = "Platine";
	else 
	{
		$req="SELECT * FROM t_article WHERE id='".$idArticle."'";
		$res2=mysqli_query($db,$req);
		$obj = "Vinyl";
	}
	while($article = mysqli_fetch_object($res2, $obj))
	{
		require('views/articlesCommande.phtml');	
	}
	$i++;
}
?>