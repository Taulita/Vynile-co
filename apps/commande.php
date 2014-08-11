<?php
$error5='';
$idUser=$_SESSION['id'];
$req="SELECT * FROM t_commande LEFT JOIN t_user ON t_commande.id_client = t_user.id WHERE t_commande.id_client='".$idUser."'  ";
$res=mysqli_query($db,$req);
if($res)
{
	while($commande=mysqli_fetch_assoc($res))
	{
		$dateCommande=date("d-m-Y",strtotime($commande['date_commande']));
		$articlesCommande=json_decode($commande['commande']);
		$TTCCommande=$commande['TotalprixTTC'];
		$LivraisonCommande=date("d-m-Y",strtotime($commande['date_livraison']));
		if ($commande['livree']==1)
			$livreeCommande="Votre commande a bien expediée, en date du ".$LivraisonCommande.".";
		else
			$livreeCommande="Votre commande est en cours de traitement";
		$nomCommande=htmlentities($commande['name']);
		$prenomCommande=htmlentities($commande['firstname']);
		$addressCommande=htmlentities($commande['address']);
		$CPCommande=htmlentities($commande['codePostal']);
		$villeCommande=htmlentities($commande['ville']);
		require('views/commande.phtml');
	}
}
else
{
	$error5="Vous avez effectué aucune commande.";
	require('views/commadeVide.phtml');	
}