<?php
class ClientModel extends Model{ 
	protected static $table = "client";
	protected static $pk = "id_client";
	
	private $id_client;
	private $cin;
	private $nom;
    private $prenom;
	private $mail;
	private $mdp;
	

	public function getId(){
		return $this->id_client;
	}
	
	public function getCin(){
		return $this->cin;
	}
	
	public function getNom(){
		return $this->nom;		
	}
    
    public function getPrenom(){
		return $this->prenom;
	}
	
	public function getMail(){
		return $this->mail;
	}
	
	public function getMdp(){
		return $this->mdp;		
	}
   
    public static function login($mail, $mdp) {
			$sth = Model::$pdo->prepare("SELECT * FROM client where mail = :mail and mdp = :mdp");
			$sth->bindParam(":mail", $mail);
			$sth->bindParam(":mdp", $mdp);
			$sth->execute();

			$sth->setFetchMode(PDO::FETCH_CLASS, self::class);
			
			$client = $sth->fetch();
			return $client;
	}

}
