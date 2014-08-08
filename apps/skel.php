<?php
if (isset($_SESSION['admin']) && isset($_GET['admin']))
{
	require('apps/backend.php');
}
else
	require("views/skel.phtml");
?>