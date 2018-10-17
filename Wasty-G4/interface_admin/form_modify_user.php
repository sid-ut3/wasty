<?php
/* 

Groupe[4] 

Ce fichier permet de récuperer les valeurs saisies dans le formulaire utilisateur (modification) et de les formater dans un fichier json.


Version (V1.0.0): Ajout des variables permettant de récuperer les données saisies dans le formulaire de modification d'un utilisateur
Version (V1.1.0): Ajout de la fonction "date_default_timezone_set" permettant de modifier le fuseau horaire
Version (V2.0.0): Mise en forme du fichier afin de respecter la norme de codage définit dans la charte.

*/
	/* Configuration du type "date" */ 
	date_default_timezone_set('Europe/Paris');
	
	/* Recuperation des données saisies par l'administrateur dans la page modif_user.php */
	$user_permission = $_POST['permission'];
	
	/* Creation du fichier json à partir des données recuperées */ 
	$data = '[
	{
			
		"user_permission" : "'.$user_permission.'"
			
	}
]';

	/* Crée(ou ecrase) et écrit le contenu de la variable data dans le fichier form_modify_user.json */
	$handle = fopen('form_modify_user.json', 'w+');
	fputs($handle,$data);
	fclose($handle);
	header('location: ./user_modif.php');
?>