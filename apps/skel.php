<?php
if (isset($_SESSION['admin']) && isset($_GET['admin']))
{
	require('views/backendskel.phtml');
}
else
	require("views/skel.phtml");
?>