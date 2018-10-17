<?php
/* 
Groupe[4] 
Version : V2.1.2

Ce fichier permet de récuperer les valeurs saisies dans les formulaires de points de collecte (ajout et modification) et de les formater dans un fichier json.

Changements : nommage des variables en anglais.

*/
	$adress = $_POST['adress'];
	$recovery_type = $_POST['recovery_type'];
	$data = '[{
		"adress": "'.$adress.'",
		"recovery_type": "'.$recovery_type.'",
	}]';
	$handle = fopen('pickup_points.json', 'w+');
	fputs($handle,$data);
	fclose($handle);
	header('location: ./pick_up_point.php');
?>