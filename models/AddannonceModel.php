<?php
class AnnoncesModel1 extends Model{ 
	protected static $table = "annonce1";
	protected static $pk = "id_annonce";
	
		
	private $id_annonce;
	private $titre_annonce;
	private $status;
    private $adresse;
    private $prix;
    private $state;
	private $postal_code;
	private $location;
	private $rooms;
	private $bathroom;
    private $name;
    private $email;
    private $phone;
		
	public function getId_annonce(){
		return $this->id_annonce;
	}
	
	public function getTitre_annonce(){
		return $this->titre_annonce;
	}
	
	public function getStatus(){
		return $this->status;		
	}
    
    public function getAdesse(){
		return $this->adresse;		
	}
    
    public function getPrix(){
		return $this->prix;		
	}
    
    public function getState(){
		return $this->State;		
	}
	 
    public function getPostal_code(){
		return $this->postal_code;		
	}
	 
    public function getLocation(){
		return $this->location;		
	}
	 
   
	 
    public function getRooms(){
		return $this->rooms;		
	}
	 
    public function getBathroom(){
		return $this->bathroom;		
	}
	 
    public function getName(){
		return $this->name;	

	}
	 
    public function getEmail(){
		return $this->email;		
	}
	 
    public function getPhone(){
		return $this->phone;		
	}
}