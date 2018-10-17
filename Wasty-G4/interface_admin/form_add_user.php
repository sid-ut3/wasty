<?php
/* 
Groupe[4] 

Ce fichier permet de récuperer les valeurs saisies dans le formulaire utilisateur (ajout) et de les formater dans un fichier json.

Version (V1.0.0): Ajout des variables permettant de récuperer les données saisies dans le formulaire d'ajout d'un utilisateur
Version (V1.1.0): Suppression de la boucle permettant de gérer l'ajout de plusieurs valeurs dans la variable $csp
Version (V1.2.0): Ajout de la fonction "date_default_timezone_set" permettant de modifier le fuseau horaire
Version (V2.0.0): Mise en forme du fichier afin de respecter la norme de codage définit dans la charte.

*/

	/* Configuration du type "date" */ 
	date_default_timezone_set('Europe/Paris');
	
	/* Recuperation des donnes saisies par l'administrateur dans la page ajout_user.php */
	$last_name = $_POST['last_name'];
	$first_name = $_POST['first_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$date_birth = $_POST['birthday'];
	$phone_number = $_POST['phone_number'];
	$gender = $_POST['gender'];
	$user_permission = $_POST['permission'];
	$supervisor = $_POST['supervisor'];
	$is_staff = $_POST['m_staff'];
	$csp = $_POST['csp'];
	$car_size = $_POST['car_size'];
	$date_joined = date("Y-m-d H:i:s");
	
	/* Creation du fichier json à partir des données recuperees */ 
	$data = '[
		{
			"password" : "'.$password.'",
			"date_joined" : "'.$date_joined.'",
			"email" : "'.$email.'",
			"last_name" : "'.$last_name.'",
			"first_name" : "'.$first_name.'",
			"user_permission" : "'.$user_permission.'",
			"is_superuser" : "'.$supervisor.'",
			"is_staff" : "'.$is_staff.'",
			"gender" : "'.$gender.'",
			"date_birth" : "'.$date_birth.'",
			"social_professional_category" : "'.$csp.'",
			"phone_number" : "'.$phone_number.'",
			"car_size" : "'.$car_size.'"
		}
]';

	/* Cree(ou ecrase) et écrit le contenu de la variable data dans le fichier form_add_user.json */
	$handle = fopen('form_add_user.json', 'w+');
	fputs($handle,$data);
	fclose($handle);
	header('location: ./user_add.php');
?>