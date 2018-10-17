<?php
/* 
Groupe[4] 
Version : V2.1.2

Ce fichier permet de récuperer les valeurs saisies dans les formulaires de quartiers (ajout et modification) et de les formater dans un fichier json.

Changements : nommage des variables en anglais.

*/
	$district_name = $_POST['district_name'];
	$city_name = $_POST['city_name'];
	$density = $_POST['density'];
	$polygon = $_POST['polygon'];
	$data = '[{
		"district_name": "'.$district_name.'",
		"city_name": "'.$city_name.'",
		"density": "'.$density.'",
		"polygon": "'.$polygon.'",
	}]}';
	$handle = fopen('district.json', 'w+');
	fputs($handle,$data);
	fclose($handle);
	header('location: ./district.php');
?>