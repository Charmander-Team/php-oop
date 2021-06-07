<?php 

class Test extends ConnexionBDD {
    public $personneId;

    public function Ajouter(){
		$bindage["personneId"]=$this->personneId;
		
		$req="INSERT INTO test (personneId) VALUES (:personneId)";
		$exec = $this->connexion->prepare($req);
		$exec->execute($bindage);
	}
}