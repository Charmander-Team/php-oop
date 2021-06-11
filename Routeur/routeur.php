<?php

use App\Controller\PokemonController;
use App\Controller\ArticleController;
use Core\Controller\DefaultController;

if(!isset($_GET["page"])) {
    $_GET["page"] = "home";
}

// if(!isset($_POST["username"]) || !isset($_POST["password"]) ){
//     $_POST["username"]="";
//     $_POST["password"]="";
// }

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
        $controller = new PokemonController();
        $controller->getPokemonById($_GET["id"]);
        break;
    case 'delete':
        $controller = new PokemonController();
        $controller->deletePokemon($_GET["id"]);
        break;
    case 'connexion':
        $controller = new PokemonController();
        
        //$controller->render("connexion");
        //if(isset($_POST["password"]))
        // $controller->connexion($_POST["username"],$_POST["password"]);
        $controller->connexion($_POST);
        //else{$controller->render("connexion");}
        break;
    case 'deconnexion':
            $controller = new PokemonController();
            $controller->deconnexion();
            break;
    default:
        break;
}
