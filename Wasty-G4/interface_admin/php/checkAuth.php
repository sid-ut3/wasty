<?php
	function verifAuth($level){
		if (empty($_SESSION['login']) || empty($_SESSION['mdp'])) 
		{
			header('location: ./login.php');
		}
		else {
			if ($_SESSION['level'] < $level){
				header('location: ./index.php');				
			}
		}		
	}
?>