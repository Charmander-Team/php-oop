<?php

use App\Controller\PokemonController;

$_GET["page"] = "home";

switch ($_GET["page"]) {
    case 'addPokemon':
        $controller = new PokemonController();
        $controller->addPokemon(/* $_POST */);
        break;
    case 'home':
        $controller = new PokemonController();
        $controller->home();
        break;

    default:
        break;
}
