<?php

class Model{
	protected static $pdo;
 
	/* Init() initialise l'objet $pdo */
	public static function Init(){
		Model::$pdo = new PDO("mysql:host=localhost;dbname=dari_tn;charset=utf8", "root", "", null);
	}
 
	/* getAll() retourne tous les enregistrements de la table static::$table (remplacée lors de l'appel par le nom
	de la table sauvegardée dans $table dans la classe fille) avec PDOStatement::fetchAll()*/
	public static function getAll(){
		$sth = Model::$pdo->prepare("SELECT * FROM ".static::$table);
		$sth->execute();

		$sth->setFetchMode(PDO::FETCH_CLASS, static::class);
		$result = $sth->fetchAll();
		return $result;
	}
	 
	 
	/*select() sélectionne les enregistrements de la table static::$table avec une clé primaire stockée dans une
	variable simple ou plusieurs clés primaires (stockées dans un tableau). Elle retourne selon le cas, null, un
	seul enregistrement avec PDOStatement::fetch() ou plusieurs enregistrements avec
	PDOStatement::fetchAll()*/
	public static function select($cle_primaire) {
		$sth = Model::$pdo->prepare("SELECT * FROM ".static::$table." where ".static::$pk." = :cle_primaire");
		$sth->bindParam(":cle_primaire", $cle_primaire);
		$sth->execute();

		$sth->setFetchMode(PDO::FETCH_CLASS, static::class);
		
		$result = $sth->fetch();
		
		return $result;
	}
	 
	
	/* recherche(array) permet la recherche des enregistrements dans la table static::$table avec les
	paramètres spécifiés dans le tableau $parametres. Elle retourne selon le cas, null, un seul enregistrement
	avec PDOStatement::fetch() ou plusieurs enregistrements avec PDOStatement::fetchAll() */
	 public static function recherche($parametres) {
		$params = [];
		foreach($parametres as $k => $value){
			$params[] = "$k = \"$value\"";
		}
		$strParams = implode('AND ', $params);
		
		$sth = Model::$pdo->prepare("SELECT * FROM ".static::$table." where $strParams");
		
		$req = "SELECT * FROM ".static::$table." where $strParams";
		
		$sth->execute();
		$sth->setFetchMode(PDO::FETCH_CLASS, static::class);
		$result = $sth->fetchAll();
		
		return $result;
	 }


	/* insert(array) permet d'ajouter un enregistrement dans la table static::$table avec les paramètres
	spécifiés dans $tab */
	public static function insert($tab){
		$keys = [];
		$values = [];
		
		foreach($tab as $k => $value){
			$keys[] = $k;
			$values[] = "\"$value\"";
		}
		
		$strKeys = implode(', ', $keys);
		$strValues = implode(', ', $values);
		
		
		$sth = Model::$pdo->prepare("Insert into ".static::$table." ($strKeys) Values ($strValues)");
		$sth->execute();
		
		return True;
	}
	 
	 
	public static function delete($cle_primaire) {
		$sth = Model::$pdo->prepare("Delete FROM ".static::$table." WHERE ".static::$pk." = :cle_primaire");
		$sth->bindParam(":cle_primaire", $cle_primaire);
		
		$sth->execute();
	}
	 
	 
	public static function update($tab, $cle_primaire) {
		$values = [];
		
		foreach($tab as $k => $value){
			$values[] = "$k = \"$value\"";
		}
		
		$strValues = implode(', ', $values);
		
		
		$sth = Model::$pdo->prepare("Update ".static::$table." SET $strValues WHERE ".static::$pk." = :cle_primaire");
		$sth->bindParam(":cle_primaire", $cle_primaire);
		
		$sth->execute();
		
		return True;
	}
}
