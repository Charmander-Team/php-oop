<?php

namespace App\Manager;

use Vendor\DB\Database;
use App\Entity\Pokemon;

class PokemonManager
{

    private $db;

    public function __construct()
    {
        $db = new Database();
        $this->setDb($db->getPdo());
    }

    private function setDb(\PDO $db)
    {
        $this->db = $db;
    }

    public function getPokemons ()
    {
        $query = $this->db->query("SELECT * FROM pokemon");
        return $query->fetchAll(\PDO::FETCH_CLASS, "App\Entity\Pokemon");
    }

    public function savePokemon (Pokemon $pokemon)
    {
        $statement = "INSERT INTO pokemon (name, location, type, hp, hasEvolve, image)
                     VALUES(:name, :location, :type, :hp, :hasEvolve, :image)";

        $prepare = $this->db->prepare($statement);

        $prepare->bindValue(":name", $pokemon->getName());
        $prepare->bindValue(":location", $pokemon->getLocation());
        $prepare->bindValue(":type", $pokemon->getType());
        $prepare->bindValue(":hp", $pokemon->getHp());
        $prepare->bindValue(":hasEvolve", $pokemon->getHasEvolve());
        $prepare->bindValue(":image", $pokemon->getImage());

        $prepare->execute();
    }
}
