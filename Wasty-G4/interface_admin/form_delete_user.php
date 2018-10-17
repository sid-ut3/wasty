<?php
/* 
Groupe[4] 

Ce fichier permet de récuperer les valeurs saisies dans le formulaire utilisateur (suppression) et de les formater dans un fichier json.

Version (V1.0.0): Ajout des variables permettant de récuperer les données saisies dans le formulaire de suppression d'un utilisateur
Version (V1.1.0): Ajout de la fonction "date_default_timezone_set" permettant de modifier le fuseau horaire
Version (V2.0.0): Mise en forme du fichier afin de respecter la norme de codage définit dans la charte.

*/
	/* Configuration du type "date" */ 
	date_default_timezone_set('Europe/Paris');
	
	/* Recuperation des données saisies par l'administrateur dans la page modif_user.php */
	$date_unsubscribe = date("Y-m-d H:i:s");
	$is_active = 'False';
	
	/* Creation du fichier json à partir des données recuperées */ 
	$data = '[
	{
		"is_active" : "'.$is_active.'",
		"date_unsubscribe" : "'.$date_unsubscribe.'"
			
	}
]';
	/* Crée(ou ecrase) et écrit le contenu de la variable data dans le fichier form_delete_user.json */
	$handle = fopen('form_delete_user.json', 'w+');
	fputs($handle,$data);
	fclose($handle);
	header('location: ./user_delete.php');
?>