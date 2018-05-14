<?php

class ProfilController{

	public function __construct(){

	}

	public function run(){

		#main CODE on homeController

		#kicking out non-authentified USER
		if(empty($_SESSION['authentified'])){
			
			header('location: index.php?action=home');
			die();
		}
		
		$user = Db::getInstance()->select_member($_SESSION['login']);
		var_dump($user);
		
		#require home.php
		require_once(VIEWS.'profil.php');

	}

}

?>