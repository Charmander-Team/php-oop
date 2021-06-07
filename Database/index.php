<?php

$dsn = "mysql:host=localhost;dbname=oop_pokemon";
$user = "root";
$passwd = "test";

$pdo = new PDO($dsn, $user, $passwd);

$stm = $pdo->query("SELECT VERSION()");

$version = $stm->fetch();
echo "coucou";
echo $version[0] . PHP_EOL;
