<?php
if (isset($_GET['logOut']))
{
	session_destroy(); 
	$_SESSION=array();
	require("views/skel.phtml");
}

else if (isset($_SESSION['admin']) && isset($_GET['admin']))
{
	require('views/backendskel.phtml');
}
else
	require("views/skel.phtml");
?>