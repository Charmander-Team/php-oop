<?php
namespace App\DB;

class Database {

    private $dbUser = "root";
    private $dbPass = "root";
    private $host = "localhost:8889";
    private $dbName = "oop_pokemon";
    private $pdo;

    public function __construct()
    {
        $this->pdo = new \PDO("mysql:host=$this->host;dbname=$this->dbName", $this->dbUser, $this->dbPass, [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
        ]);
    }

    public function getPdo()
    {
        return $this->pdo;
    }
}
