<?php
namespace Vendor\Manager;

use Vendor\DB\Database;
use Vendor\Interfaces\ManagerInterface;

abstract class Manager implements ManagerInterface{

    protected $db;
    protected $table;


    public function __construct ()
    {
        $db = new Database();
        $this->db = $db->getPdo();
    }

    // public abstract function create($article);

    public function getList()
    {
        $query = $this->db->query("SELECT * FROM $this->table");
        return $query->fetchAll(\PDO::FETCH_CLASS, "App\Entity\\".ucfirst($this->table));
    }
    
    public function getOne($id)
    {
        $prepare = $this->db->prepare("SELECT * FROM $this->table WHERE id=:id");
        $prepare->bindValue(":id", $id);
        $prepare->execute();
        return $prepare->fetchAll(\PDO::FETCH_CLASS, "App\Entity\\".ucfirst($this->table));
    }

    // public abstract function getOne();

    // public abstract function update();

    // public abstract function delete();

    public function delete($id){
        $prepare = $this->db->prepare("DELETE FROM $this->table WHERE id=:id");
        $prepare->bindValue(":id", $id);
        $prepare->execute();
    }
}
