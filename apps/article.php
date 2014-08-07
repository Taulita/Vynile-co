<?php

$id=$_POST['id'];
$req="SELECT * FROM t_article WHERE id='".$id."'";
$res=mysqli_query($db,$req);
while($article=mysqli_fetch_assoc($res))
{
	require("views/article.phtml");
}