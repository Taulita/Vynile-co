<?php
$_SESSION['id'];
$_SESSION['panier'];
$_SESSION['TotalTTC'];
$_SESSION['TotalHT'];
$_SESSION['TotalTva'];


if(isset($_POST['paid']))
{
	$i=0;
	while($i<sizeof($_SESSION['panier']))
	{
		$req="UPDATE t_article SET stock=stock-1, vendu=vendu+1 WHERE id='".$_SESSION['panier'][$i]."'";
		mysqli_query($db,$req);
		$i++;
	}

	$req= "INSERT INTO t_commande (date_commande, commande, id_client, totalprixHT, totalTva, totalprixTTC, livree) 
			VALUES(Now(),
			'".json_encode($_SESSION['panier'])."',
			'".$_SESSION['id']."',
			'".$_SESSION['TotalHT']."',
			'".$_SESSION['TotalTva']."',
			'".$_SESSION['TotalTTC']."',
			0)";
	mysqli_query($db,$req);
	$idCommande= mysqli_insert_id($db);
	$_SESSION['panier']=array();
	header('Location:index.php?page=commandeValide');
}
else
	require('views/confirmPanier.phtml');
?>