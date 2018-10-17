<?php
/* 
Groupe[4] 
Version : V2.1.2

Ce fichier permet de récuperer les valeurs saisies dans les formulaires de sous catégories  (ajout et modification) et de les formater dans un fichier json.

Changements : nommage des variables en anglais.

*/
	$sub_category = $_POST['sub_category'];
	$category = $_POST['category'];		
	$data = '[{
		"sub_category": "'.$sub_category.'",
		"category": "'.$category.'",
	}]';
	$handle = fopen('sub_category.json', 'w+');
	fputs($handle,$data);
	fclose($handle);
	header('location: ./sub_category.php');
?>