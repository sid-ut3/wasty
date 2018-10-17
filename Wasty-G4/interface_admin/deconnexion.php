<?php
/* 
Groupe[4] 
Version : V2.1.2

Ce fichier ferme la session de l'utilisateur et le redirige vers la page de login.

*/
 ?>
<?php
	session_start ();
	session_unset ();
	session_destroy ();
	header ('location: login.php');
?>