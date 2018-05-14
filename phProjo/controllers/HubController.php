<?php

class HubController{

	private $_db;

	public function __construct($db){

		$this->_db = $db;
	}

	public function run(){

		#main CODE on HubController

		#recieving connection of USER
			#kicking out non-authentified USER
		if(empty($_SESSION['authentified'])){
			
			header('location: index.php?action=home');
			die();
		}

		$user = $this->_db->select_member($_SESSION['login']);

		var_dump($user);

		#require home.php
		require_once(VIEWS.'hub.php');

	}

}

?>