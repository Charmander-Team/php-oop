<?php

use App\Controller\PokemonController;
use App\Controller\ArticleController;
use Core\Controller\DefaultController;

if(!isset($_GET["page"])) {
    $_GET["page"] = "home";
}

switch ($_GET["page"]) {
    case 'home':
        $controller = new DefaultController();
        $controller->home();
        break;
    case 'addPokemon':
        $controller = new PokemonController();
        $controller->addPokemon();
        break;
    case 'blog':
        $controller = new ArticleController();
        $controller->getAll("blogView", "blogs");
        break;
    case 'allPokemons':
        $controller = new PokemonController();
        $controller->getAll("indexViewPokemon", "pokemons");
        break;
    case 'pokemonView':
        $controller = new DefaultController();
        $controller->getEntityById("pokemonView", $_GET["id"], "pokemon");
        break;
    case 'delete':
        $controller = new PokemonController();
        $controller->deletePokemon($_GET["id"]);
        break;
    case 'edit':
        $controller = new DefaultController();
        $controller->getEntityById("pokemonView", $_GET["id"], "pokemon");
    break;
    default:
        break;
}
