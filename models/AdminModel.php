<?php
class AdminModel extends Model {
	
	public $id;
	public $title;
	public $artist;
		
	public function getId(){
		return $this->id;
	}
	
	public function getTitle(){
		return $this->title;
	}
	
	public function getArtist(){
		return $this->artist;		
	}
	
}