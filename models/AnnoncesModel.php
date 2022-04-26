<?php
class AnnoncesModel extends Model{ 
	protected static $table = "annonce";
	protected static $pk = "id_annonce";
	
	protected $id_annonce;
	protected $titre_annonce;
	protected $type;
    protected $description;
    protected $prix;
    protected $region;
		
	public function getId_annonce(){
		return $this->id_annonce;
	}
	
	public function getTitre_annonce(){
		return $this->titre_annonce;
	}
	
	public function getType(){
		return $this->type;		
	}
    
    public function getDescription(){
		return $this->description;		
	}
    
    public function getPrix(){
		return $this->prix;		
	}
    
    public function getRegion(){
		return $this->region;		
	}
}





