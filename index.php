<?php

require "Database/connect.php";
require "Database/general.php";

// $pdo = new PDO($dsn, $user, $passwd);

// $stm = $pdo->query("SELECT VERSION()");

// $version = $stm->fetch();

// echo $version[0] . PHP_EOL;

$test = new Test();
$test->personneId = 22;
$test-> Ajouter();
