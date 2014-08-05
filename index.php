<?php

require('apps/vinyle.php');
$error = '';


if (isset($_GET['page']))
	$page = $_GET['page'];
else
	$page = 'accueil';


if(isset($_GET['section']))
	$section = $_GET['section'];
else
	$section ='';



if(isset($_GET['ajax']))
{
	if($section != '')
		require('apps/'.$section.'.php');

	else
		require('apps/'.$page.'.php');			
}
	
else
	require('views/skel.phtml');


?>