<?php
define("ROOT", dirname(__DIR__));

require ROOT. "/vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(ROOT);
$dotenv->load();
//var_dump($_ENV['MYSQL_DATABASE']);

//require ROOT . "/Core/oldAutoload.php";
//Core\Autoload::register();

include ROOT."/Routeur/routeur.php";
