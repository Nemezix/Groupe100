<?php

class Members{

	#static variables
	private member_id;
	private firstname;
	private surname;
	private num_tel;
	private mail;
	private adress;
	private bank_id;
	private training_id;
	private rights;
	private title;
	private pswd;

	public function __construct($member_id, $firstname, $surname, $num_tel, $mail, $adress, $bank_id, $training_id, $rights, $title, $pswd){

		$this->member_id = $member_id;
		$this->firstname = $firstname;
		$this->surname = $surname;
		$this->num_tel = $num_tel;
		$this->mail = $mail;
		$this->adress = $adress;
		$this->bank_id = $bank_id;
		$this->training_id = $training_id;
		$this->rights = $rights;
		$this->title = $title;
		$this->pswd = $pswd;

	}

	#getters
	public function getMemberid(){
		return $this->member_id;
	}

	public function getFirstname(){
		return $this->firstname;
	}

	public function getSurname(){
		return $this->surname;
	}

	public function getNumtel(){
		return $this->num_tel;
	}

	public function getMail(){
		return $this->mail;
	}

	public function getAdress(){
		return $this->adress;
	}

	public function getBankid(){
		return $this->bank_id;
	}

	public function getTrainingid(){
		return $this->training_id;
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

	#html getters
	public function getMemberid(){
		return $this->htmlspecialchars(member_id);
	}

	public function getFirstname(){
		return $this->htmlspecialchars(firstname);
	}

	public function getSurname(){
		return $this->htmlspecialchars(surname);
	}

	public function getNumtel(){
		return $this->htmlspecialchars(num_tel);
	}

	public function getMail(){
		return $this->htmlspecialchars(mail);
	}

	public function getAdress(){
		return $this->htmlspecialchars(adress);
	}

	public function getBankid(){
		return $this->htmlspecialchars(bank_id);
	}

	public function getTrainingid(){
		return $this->htmlspecialchars(training_id);
	}

	public function getRights(){
		return $this->htmlspecialchars(rights);
	}

	public function getTitle(){
		return $this->htmlspecialchars(title);
	}

	public function getPswd(){
		return $this->htmlspecialchars(pswd);
	}

}

?>