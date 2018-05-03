<?php

class HubController{

	public function __construct(){

	}

	public function run(){

		#main CODE on HubController

		#recieving connection of USER
			#kicking out non-authentified USER
		if(empty($_SESSION['authentified'])){
			
			header('location: index.php?action=home');
			die();
		}

		#require home.php
		require_once(VIEWS.'hub.php');

	}

}

?>