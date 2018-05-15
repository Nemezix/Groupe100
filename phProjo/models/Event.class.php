<?php

class Event{
	
	private $eventid;
	private $title;
	private $description;
	private $price;
	private $event_date;
	private $past;
	private $photo_url;
	private $drive_url;
	private $localisation;

	public function __construct($eventid, $title, $description, $price, $event_date){

		$this->eventid = $eventid;
		$this->title = $title;
		$this->description = $description;
		$this->price = $price;
		$this->event_date = $event_date;

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



}