<?php

class Member{

	#variables
	public $memberid;
	public $firstname;
	public $surname;
	public $numtel;
	public $mail;
	public $adress;
	public $bankid;
	public $trainingid;
	public $rights;
	public $title;
	public $pswd;

	public function __construct($memberid, $firstname, $surname, $numtel, $mail, $adress, $bankid, $trainingid, $rights, $title, $pswd){

		$this->memberid = $memberid;
		$this->firstname = $firstname;
		$this->surname = $surname;
		$this->numtel = $numtel;
		$this->mail = $mail;
		$this->adress = $adress;
		$this->bankid = $bankid;
		$this->trainingid = $trainingid;
		$this->rights = $rights;
		$this->title = $title;
		$this->pswd = $pswd;

	}

	#getters
	public function getMemberid(){
		return $this->memberid;
	}

	public function getFirstname(){
		return $this->firstname;
	}

	public function getSurname(){
		return $this->surname;
	}

	public function getNumtel(){
		return $this->numtel;
	}

	public function getMail(){
		return $this->mail;
	}

	public function getAdress(){
		return $this->adress;
	}

	public function getBankid(){
		return $this->bankid;
	}

	public function getTrainingid(){
		return $this->trainingid;
	}

	public function getRights(){
		return $this->rights;
	}

	public function getTitle(){
		return $this->title;
	}

	public function getPswd(){
		return $this->pswd;
	}

	public function setRights($rights){
		$this->rights = $rights;
		
	}

	/* #getters
	public function getMemberid(){
		return $this->hmemberid;
	}

	public function getFirstname(){
		return $this->firstname;
	}

	public function getSurname(){
		return $this->surname;
	}

	public function getNumtel(){
		return $this->numtel;
	}

	public function getMail(){
		return $this->mail;
	}

	public function getAdress(){
		return $this->adress;
	}

	public function getBankid(){
		return $this->bankid;
	}

	public function getTrainingid(){
		return $this->trainingid;
	}

	public function getRights(){
		return $this->rights;
	}

	public function getTitle(){
		return $this->title;
	}

	public function getPswd(){
		return $this->pswd;
	}
	*/
}

?>