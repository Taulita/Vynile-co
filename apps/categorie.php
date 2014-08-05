<?php

$req="SELECT categorie FROM t_article GROUP BY categorie ORDER BY categorie";
var_dump($req);
$res=mysqli_query($db,$req);
while($data=mysqli_fetch_assoc($res))
{
	require('views/categorie.phtml');
}

?>