<?php

use Vendor\DB\Database;
use Vendor\Autoload;

require "Vendor/Autoload.php";
Autoload::register();

define("ROOT", __DIR__);


use App\Entity\Pokemon;
use App\Manager\PokemonManager;

/*$pokemonManager = new PokemonManager();
var_dump($pokemonManager->getPokemons());*/

if (!empty($_POST)) {

    // To convert string in int
    $_POST["hp"] = (int)$_POST["hp"];

    // To convert checkbox into boolean for DB
    ($_POST["hasEvolve"] == "on") ? ($_POST["hasEvolve"] = 1) : ($_POST["hasEvolve"] = 0);

    $pokemon = new Pokemon();
    $manager = new PokemonManager();
    $pokemon->hydrate($_POST);
    $manager->savePokemon($pokemon);
} else {
    require "Templates/addPokemon.php";
}
