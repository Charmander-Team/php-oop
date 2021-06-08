<?php

namespace App\Manager;

use App\Bdd\Database;
use App\Entity\Pokemon;

class PokemonManager {

    private $db;

    public function __construct(){
        $db = new Database();
        $this->setDb($db->getPdo());
    }

    public function setDb (\PDO $db){
        $this->db = $db;
    }

    public function getPokemon(){
        $query = $this->db->query("SELECT * FROM pokemon");
        return $query->fetchAll(\PDO::FETCH_CLASS, "App\Entity\Pokemon");
    }

    public function savePokemon (Pokemon $pokemon)
    {
        $statement = "INSERT INTO pokemon (name, location, type, pv, image) 
                        VALUES (:name, :location, :type, :pv, :image)";
        
        $prepare = $this->db->prepare($statement);
        var_dump($pokemon);
        $prepare->bindValue(":name", $pokemon->getName());
        $prepare->bindValue(":location", $pokemon->getLocation());
        $prepare->bindValue(":type", $pokemon->getType());
        $prepare->bindValue(":pv", $pokemon->getPv());
        $prepare->bindValue(":image", $pokemon->getImage());


        $prepare->execute();
    }
}