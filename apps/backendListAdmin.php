<?php
$req = "SELECT * FROM t_user WHERE admin=1";
$res= mysqli_query($db, $req);
while($admin = mysqli_fetch_object($res, "User")) 
{
	require('views/backendListAdmin.phtml');
}


?> 