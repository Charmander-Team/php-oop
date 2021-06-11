<?php

namespace App\Model;

use Core\Model\Model;

class PokemonModel extends Model
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

    public function update($pokemon)
    {
        $id = (int)$pokemon['id'];
        $statement = "UPDATE pokemon
        SET name = :name, location = :location, type = :type, hp = :hp, image = :image
        WHERE id=:id";
        
        $prepare = $this->db->prepare($statement);

        $prepare->bindValue(":id", $id);
        $prepare->bindValue(":name", $pokemon['name']);
        $prepare->bindValue(":location", $pokemon['location']);
        $prepare->bindValue(":type", $pokemon['type']);
        $prepare->bindValue(":hp", $pokemon['hp']);
        $prepare->bindValue(":image", $pokemon['image']);
        $prepare->execute();
    }

    public function getListByType($type)
    {
        $query = $this->db->query("SELECT * FROM $this->table WHERE type = '$type'");
        return $query->fetchAll(\PDO::FETCH_CLASS, "App\Entity\\".ucfirst($this->table));
    }

}
