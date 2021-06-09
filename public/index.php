<?php

define("ROOT", dirname(__DIR__));

require ROOT."/Vendor/Autoload.php";
Vendor\Autoload::register();

use App\Entity\Pokemon;
use App\Manager\PokemonManager;

$pokemonManager = new PokemonManager();
var_dump($pokemonManager->getList());

if (!empty($_POST)) {

    // To convert string in int
    $_POST["hp"] = (int)$_POST["hp"];

    // To convert checkbox into boolean for DB
    ($_POST["hasEvolve"] == "on") ? ($_POST["hasEvolve"] = 1) : ($_POST["hasEvolve"] = 0);

    $pokemon = new Pokemon();
    $manager = new PokemonManager();
    $pokemon->hydrate($_POST);
    $manager->create($pokemon);
} else {
    require ROOT."/Templates/addPokemon.php";
}
