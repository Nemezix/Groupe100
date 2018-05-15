<?php

class EventsController{

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

		if(isset($_POST['submitEvent'])){

			if(empty($_POST['localisation'])){
				$_POST['localisation'] = "";
			}

			if(empty($_POST['photo'])){
				$_POST['photo']="views/images/ameno.jpg";
			}


			Db::getInstance()->submit_event($_POST);
		}

		#require home.php
		require_once(VIEWS.'events.php');

	}

}

?>