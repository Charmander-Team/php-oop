<?php

use App\Controller\ViewController;
use App\Manager\PokemonManager;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection;

// var_dump($routes);
$routes->add("home", new Route("/home", [
    "type" => "feu",
    "_controller" => [new ViewController, "home"]
]));

$routes->add("pokemons", new Route("/pokemons/{type}", [
    "type" => "feu",
    "_controller" => [new ViewController, "allPokemonsView"]
 ]));