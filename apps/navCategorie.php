<?php

$req="SELECT style FROM t_article WHERE categorie = 'vinyl' GROUP BY style ORDER BY style";
$res=mysqli_query($db,$req);
while($data=mysqli_fetch_assoc($res))
{
	require('views/navCategorie.phtml');
}
?>