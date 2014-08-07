<?php
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
	{
		require('views/vinyle.phtml');	
	}
}	


else
{
	$req= "SELECT * FROM t_article WHERE categorie='".$search."' OR style='".$search."' ORDER BY prixTTC ";
	$res=mysqli_query($db,$req);
	while($vinyle=mysqli_fetch_assoc($res))
	{
		require('views/vinyle.phtml');	
	}	
}

?>