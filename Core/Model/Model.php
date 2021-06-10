<?php
namespace Core\Model;

use Core\DB\Database;
use Core\Interfaces\ModelInterface;

abstract class Model implements ModelInterface{

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

    // public abstract function getOne();

    // public abstract function update();

    // public abstract function delete();
}
