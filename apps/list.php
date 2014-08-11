<?php
if(isset($_POST['search']))
	$search=$_POST['search'];
if($search=='platine')
{
	$req= "SELECT * FROM t_article WHERE categorie='".$search."' ORDER BY prixTTC ";
	$res=mysqli_query($db,$req);
	while($platine=mysqli_fetch_assoc($res))
	{
		require('views/platine.phtml');	
	}	
}

else if($search=='new')
{
	$req= "SELECT * FROM t_article WHERE categorie='vinyl' ORDER BY id DESC LIMIT 1,10";
	$res=mysqli_query($db,$req);
	while($vinyle=mysqli_fetch_assoc($res))
		require('views/vinyle.phtml');	
}	

else
{
	$req= "SELECT * FROM t_article WHERE categorie='".$search."' OR style='".$search."' OR nom='".$search."' OR artiste='".$search."' OR marque='".$search."' OR label='".$search."' ORDER BY prixTTC";
	$res=mysqli_query($db,$req);
	if(mysqli_num_rows($res)>0)
	{
		while($vinyle=mysqli_fetch_assoc($res))
			require('views/vinyle.phtml');			
	}
	else
	{
		$error4="Nous sommes d&eacute;sol&eacute;s, nous n'avons pas le produit de votre recherche.";
		require('views/pasVendu.phtml');	
		
	}
}
?>