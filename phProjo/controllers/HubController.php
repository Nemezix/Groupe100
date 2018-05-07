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

		var_dump($this->_db->select_member('lakeke@hotmail.com'));

		#require home.php
		require_once(VIEWS.'hub.php');

	}

}

?>