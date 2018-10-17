<?php
/* 
Groupe[4] 
Version : V2.1.2

Ce fichier permet de récuperer les valeurs saisies dans les formulaires de catégorie (ajout et modification) et de les formater dans un fichier json.

Changements : nommage des variables en anglais.

*/
	$category = $_POST['category'];
	$data = '[{
		"category": "'.$category.'",
	}]';
	$handle = fopen('category.json', 'w+');
	fputs($handle,$data);
	fclose($handle);
	header('location: ./category.php');
?>