<?php
if (isset($_SESSION['admin']) && isset($_GET['admin']))
{
	require('views/backskel.phtml');
}
else
	require("views/skel.phtml");
?>