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


		
		if(isset($_POST['profileSubmit'])){

			$update_user = new Member( $user->memberid, $_POST['name'], $_POST['surname'], $_POST['numtel'], $_POST['email'], $_POST['adress'], $_POST['bankid'], $user->trainingid, $user->rights, $user->title, $user->pswd);
			Db::getInstance()->update_member($update_user);

		}

		$user = Db::getInstance()->select_member($_SESSION['login']);
		var_dump($user);

		#require home.php
		require_once(VIEWS.'profil.php');

	}

}

?>