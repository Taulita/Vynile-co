<?php
$req2 = "SELECT * FROM requests LEFT JOIN t_user ON requests.id_client=t_user.id";
$res2= mysqli_query($db, $req2);
while($demande=mysqli_fetch_assoc($res2)) 	
{
	$id=($demande['id']);
	$nom=htmlentities($demande['name']);
	$prenom=htmlentities($demande['firstname']);
	$email=htmlentities($demande['email']);
	$artiste=htmlentities($demande['artiste']);
	$titre=htmlentities($demande['titre']);
	$url=htmlentities($demande['url']);
	$description=htmlentities($demande['description']);
	$date=date("d-m-Y",strtotime($demande['date_request']));
	if($demande['traite']==1)
		$check='checked';
	else
		$check='';
	require('views/backendRequestClient.phtml');
}

?> 