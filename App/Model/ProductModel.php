<?php

namespace App\Model;

use Vendor\Model\Model;

class ProductModel extends Model
{
    protected $db;
    protected $table = "product";

    public function create ($product)
    {
        $statement = "INSERT INTO product (name, description, price, image, user_id)
                     VALUES(:name, :description, :price, :image, :user_id)";

        $prepare = $this->db->prepare($statement);

        $prepare->bindValue(":name", $product->getName());
        $prepare->bindValue(":description", $product->getDescription());
        $prepare->bindValue(":price", $product->getDescription());
        $prepare->bindValue(":image", $product->getImage());
        $prepare->bindValue(":user_id", $product->getUserId());

        $prepare->execute();
    }
    public function getOne()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
