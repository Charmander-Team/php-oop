<?php

namespace App\Manager;

use Vendor\DB\Database;
use App\Entity\Produit;

class ProduitManager{
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

    public function getProduits(){
        $query = $this->db->query("SELECT * FROM produit");
        return $query->fetchAll(\PDO::FETCH_CLASS, "App\Entity\Produit");
    }

    public function saveProduit (Produit $produit)
    {
        $statement = "INSERT INTO produit (name, prix, image, description)
                     VALUES(:name, :prix, :image, :description)";

        $prepare = $this->db->prepare($statement);

        $prepare->bindValue(":name", $produit->getName());
        $prepare->bindValue(":prix", $produit->getPrix());
        $prepare->bindValue(":image", $produit->getImage());
        $prepare->bindValue(":description", $produit->getDescription());

        $prepare->execute();
    }
}