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

		#require home.php
		require_once(VIEWS.'events.php');

	}

}

?>