<?php

use Vendor\DB\Database;
use Vendor\Autoload;

require "Vendor/Autoload.php";
Autoload::register();

define("ROOT", __DIR__);


use App\Entity\Pokemon;
use App\Manager\PokemonManager;

$pokemonManager = new PokemonManager();
//var_dump($pokemonManager->getPokemons());

if (!empty($_POST)) {
    $pokemon = new Pokemon();
    $manager = new PokemonManager();
    $pokemon->hydrate($_POST);
    $manager->savePokemon($pokemon);
    //var_dump($_POST);
} else {
    require "Templates/addPokemon.php";
}
