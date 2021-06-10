<?php

use App\Controller\PokemonController;
use App\Controller\ArticleController;

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
    case 'blog':
        $controller = new ArticleController();
        $controller->getAllArticles();
        break;
 /*   case 'products':
        $controller = new PokemonController();
        $controller->getAllProducts();
        break;*/
    case 'allPokemons':
        $controller = new PokemonController();
        $controller->allPokemons(/* $_POST */);
        break;
    case 'pokemonView':
        $controller = new PokemonController();
        $controller->getPokemonById($_GET["id"]);
        break;
    case 'delete':
        $controller = new PokemonController();
        $controller->deletePokemon($_GET["id"]);
        break;
    default:
        break;
}
