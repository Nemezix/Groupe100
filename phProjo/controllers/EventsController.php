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
		$listevents = Db::getInstance()->select_all_events();

		if(isset($_POST['submitEvent'])){

			if(empty($_POST['localisation'])){
				$_POST['localisation'] = "";
			}

			if(empty($_POST['photo'])){
				$_POST['photo']="views/images/ameno.jpg";
			}


			Db::getInstance()->submit_event($_POST);
		}

		if (isset($_GET['event'])){
			$event = Db::getInstance()->select_event($_GET['event']);
			require_once(VIEWS.'event.php');
		}else{
			require_once(VIEWS.'events.php');
		}
		

	}

}

?>