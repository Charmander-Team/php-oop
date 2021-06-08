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
}