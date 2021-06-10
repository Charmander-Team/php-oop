<?php

use App\Controller\PokemonController;

if(!isset($_GET["page"])) {
    $_GET["page"] = "home";
}

switch ($_GET["page"]) {
    case 'addPokemon':
        $controller = new PokemonController();
        $controller->addPokemon(/* $_POST */);
        break;
    case 'home':
        $controller = new PokemonController();
        $controller->home();
        break;
/*    case 'blog':
        $controller = new PokemonController();
        $controller->getAllArticles();
        break;*/
 /*   case 'products':
        $controller = new PokemonController();
        $controller->getAllProducts();
        break;*/
    case 'allPokemons':
        $controller = new PokemonController();
        $controller->allPokemons(/* $_POST */);
        break;
    default:
        break;
}
