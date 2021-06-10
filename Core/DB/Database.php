<?php
namespace Core\DB;

class Database
{
    //private $dbUser = "root";
    //private $dbPass = "test";
    //private $host = "localhost";
    //private $dbName = "oop_pokemon";
    private $pdo;

    public function __construct()
    {
        $dbHost = $_ENV['MYSQL_HOST'];
        $dbUser = $_ENV['MYSQL_USER'];
        $dbPassword = $_ENV['MYSQL_PASSWORD'];
        $dbName = $_ENV['MYSQL_DATABASE'];

        $this->pdo = new \PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPassword, [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            // Use for display special character on view
            \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
        ]);
    }

    public function getPdo()
    {
        return $this->pdo;
    }
}
