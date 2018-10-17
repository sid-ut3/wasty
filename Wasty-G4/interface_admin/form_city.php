<?php
/* 
Groupe[4] 
Version : V2.1.2

Ce fichier permet de récuperer les valeurs saisies dans les formulaires ville (ajout et modification) et de les formater dans un fichier json.

Changements : nommage des variables en anglais.

*/
	$city = $_POST['city'];	
	$data = '[{
		"city": "'.$city.'"
	}]';	
	$handle = fopen('city.json', 'w+');
	fputs($handle,$data);
	fclose($handle);
	header('location: ./city.php');
?>