<?php
ini_set('display_errors', 1);
require('sources/confphp/param.conf.php');
session_start();

$error = '';

$access="nav";
$access1="navlogIn";
$access2=["accueil", "store", "article", "panier", "LogIn"];
$access3=["new","platine","vinyl","funk", "soul", "rock"];

if (isset($_GET['nav']))
	$nav = $_GET['nav'];
else
	$nav = 'nav';

if (isset($_GET['navSection']))
	$navSection = $_GET['navSection'];
else
	$navSection = 'navlogIn';

if (isset($_GET['page']))
	$page = $_GET['page'];
else
	$page = 'accueil';

if(isset($_GET['section']))
	$section = $_GET['section'];
else
	$section ='';

if(isset($_GET['search']))
	$search = $_GET['search'];
else
	$search ='';



// if(isset($_GET['ajax']))
// {
// 	if($section != '')
// 		require('apps/'.$section.'.php');

// 	else
// 		require('apps/'.$page.'.php');			
// }



require('apps/skel.php');


?>