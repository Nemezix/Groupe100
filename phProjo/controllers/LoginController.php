<?php

class LoginController{

	public function __construct(){

	}

	public function run(){

		#main CODE on LoginController

		#kicking out authentified USER
		if(!empty($_SESSION['authentified'])){
			
			header('location: index.php?action=hub');
			die();
		}

		#managing connection of USER
		$notification = '';

			#verifying if data are sent
		if(isset($_POST['submitLogin'])){

			if($_POST['userLogin'] == 'test' && $_POST['pwLogin'] == 'test'){

				$_SESSION['authentified'] = 'authentified';

				header('location: index.php?action=hub');
				die();
			}
			else{
				$notification = 'Erreur de connexion : les identifiants sont incorrects.';
			}

		}

		#require home.php
		require_once(VIEWS.'login.php');

	}

}

?>