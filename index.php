<?php

use App\Bdd\Database;
use Vendor\Autoload;
use App\Entity\Pokemon;
use App\Manager\PokemonManager;

require "Vendor/Autoload.php";
Autoload::register();

define("ROOT", __DIR__);

$pokemonManager = new PokemonManager();
var_dump($pokemonManager->getPokemon());


if (!empty($_POST)) {
    $pokemon = new Pokemon();
    $manager = new PokemonManager();
    $pokemon->hydrate($_POST);
    $manager->savePokemon($pokemon);
    var_dump($pokemon);
} else {
    require "templates/addPokemon.php";
}