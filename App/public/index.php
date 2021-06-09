<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;

define("ROOT", dirname(__DIR__));
// var_dump(ROOT);


require ROOT."/Vendor/autoload.php";
// Vendor\Autoload::register();

$request = Request::createFromGlobals();

require ROOT."/src/routeur.php";

$context = new RequestContext();
$context->fromRequest($request);

$matcher = new UrlMatcher($routes, $context);

// $attributes = $matcher->match($request->getPathInfo());
extract($matcher->match($request->getPathInfo()));

// $name = $matcher->match($request->getPathInfo())["name"];
$_controller($type);

// use App\Entity\Pokemon;
// use App\Manager\PokemonManager;

// $pokemonManager = new PokemonManager();
// // var_dump($pokemonManager->getList());

// if (!empty($_POST)) {

//     // To convert string in int
//     $_POST["hp"] = (int)$_POST["hp"];

//     // To convert checkbox into boolean for DB
//     ($_POST["hasEvolve"] == "on") ? ($_POST["hasEvolve"] = 1) : ($_POST["hasEvolve"] = 0);

//     $pokemon = new Pokemon();
//     $manager = new PokemonManager();
//     $pokemon->hydrate($_POST);
//     $manager->create($pokemon);
// } else {
//     require ROOT."/Templates/addPokemon.php";
// }

// $pokemonManager->getList();
