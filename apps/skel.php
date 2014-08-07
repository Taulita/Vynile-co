<?php
if (isset($_GET['admin']))
{
	require('apps/backend.php');
}
else
	require("views/skel.phtml");
?>