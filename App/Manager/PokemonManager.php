<?php

namespace App\Manager;

use Vendor\Manager\Manager;

class PokemonManager extends Manager
{

    protected $db;
    protected $table = "pokemon";

    public function create ($pokemon)
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
    // public function getOne()
    // {
        // $query = $this->db->query("SELECT * FROM $this->table WHERE id=:id");
        // return $query->fetchAll(\PDO::FETCH_CLASS, "App\Entity\\".ucfirst($this->table));   
    // }

    public function update($pokemon)
    {

        $statement = "UPDATE pokemon name=:name, location=:location, type=:type, hp=:hp, hasEvolve=:hasEvolve, image=:image
                     WHERE id=:id";

        $prepare = $this->db->prepare($statement);

        $prepare->bindValue(":id", $pokemon->getID());
        $prepare->bindValue(":name", $pokemon->getName());
        $prepare->bindValue(":location", $pokemon->getLocation());
        $prepare->bindValue(":type", $pokemon->getType());
        $prepare->bindValue(":hp", $pokemon->getHp());
        $prepare->bindValue(":hasEvolve", $pokemon->getHasEvolve());
        $prepare->bindValue(":image", $pokemon->getImage());

        $prepare->execute();

    }

    // public function delete()
    // {

    // }
}
