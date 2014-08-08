<?php

if(isset($_SESSION['panier']))
	$panier=sizeof($_SESSION['panier']);
else
	$panier=0;

require('views/nav.phtml');
?>