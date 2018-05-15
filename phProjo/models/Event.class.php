<?php

class Event{
	
	public $eventid;
	public $title;
	public $description;
	public $price;
	public $event_date;
	public $past;
	public $photo_url;
	public $drive_url;
	public $localisation;

	public function __construct($eventid, $title, $description, $price, $event_date, $photo_url, $drive_url, $localisation){
		
		$this->eventid = $eventid;
		$this->title = $title;
		$this->description = $description;
		$this->price = $price;
		$this->event_date = $event_date;
		$this->photo_url = $photo_url;
		$this->drive_url = $drive_url;
		$this->localisation = $localisation;
	}

	public function setTitle($title){
		$this->title = $title;
		return $this->title;
	}

	public function setDescription($description){
		$this->description = $description;
		return $this->description;
	}

	public function setPrice($price){
		$this->price = $price;
		return $this->price;
	}

	public function setEvent_date($event_date){
		$this->event_date = $event_date;
		return $this->event_date;
	}

	public function setPast($past){
		$this->past = $past;
		return $this->past;
	}


	public function setPhoto_url($photo_url){
		$this->photo_url = $photo_url;
		return $this->photo_url;
	}

	public function setDrive_url($drive_url){
		$this->drive_url = $drive_url;
		return $this->drive_url;
	}

	public function setLocalisation($localisation){
		$this->localisation = $localisation;
		return $this->localisation;
	}

	#getters
	public function getEventid(){
		return $this->eventid;
	}
	public function getTitle(){
		return $this->title;
	}
	public function getDescription(){
		return $this->description;
	}
	public function getPrice(){
		return $this->price;
	}
	public function getEvent_date(){
		return $this->event_date;
	}
	public function getPast(){
		return $this->past;
	}
	public function getPhoto_url(){
		return $this->photo_url;
	}
	public function getDrive_url(){
		return $this->drive_url;
	}
	public function getLocalisation(){
		return $this->localisation;
	}


}