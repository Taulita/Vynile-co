<?php
$req= "SELECT * FROM t_article WHERE categorie='vinyl' ORDER BY id DESC LIMIT 1,3 ";
$res=mysqli_query($db,$req);
while($vinyle=mysqli_fetch_assoc($res))
{
	require('views/topVinyle.phtml');	
}	