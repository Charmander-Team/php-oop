<?php

require "Database/connect.php";
require "Database/general.php";

// $pdo = new PDO($dsn, $user, $passwd);

// $stm = $pdo->query("SELECT VERSION()");

// $version = $stm->fetch();

// echo $version[0] . PHP_EOL;
// test
//$Salameche = new Pokemon("Salameche","Chelles","Feu",50,true);
$Salameche = new Pokemon();
$Salameche->setId(2);
$Salameche->setName("Salameche");
$Salameche->setLocation("Chelles");
$Salameche->setType("Feu");
$Salameche->setPv(50);
$Salameche->setHasEvolve(true);
$Salameche->setImage("http://test.png");
$Salameche-> Ajouter();
