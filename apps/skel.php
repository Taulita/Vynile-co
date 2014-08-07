<?php
if (isset($_SESSION['admin']))
{
	require('apps/backend.php');
}
else
	require("views/skel.phtml");
?>