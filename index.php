<?php

use App\DB\Database;
use Vendor\Autoload;

require "Vendor/Autoload.php";
Autoload::register();

define("ROOT", __DIR__);


use App\Entity\Pokemon;
use App\Manager\PokemonManager;

if (!empty($_POST)) {
    $pokemon = new Pokemon();
    $manager = new PokemonManager();
    $pokemon->hydrate($_POST);
    $manager->savePokemon($pokemon);
    var_dump($pokemon);
    require "templates/addPokemon.php";
} else {
    echo "Hello les cons, mon truc fonctionne pas vraiment bien =/";
}
