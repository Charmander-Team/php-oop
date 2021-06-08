<?php

use Vendor\DB\Database;
use Vendor\Autoload;

require "Vendor/Autoload.php";
Autoload::register();

define("ROOT", __DIR__);

use App\Entity\Pokemon;
use App\Manager\PokemonManager;
use App\Entity\Produit;
use App\Manager\ProduitManager;

$pokemonManager = new PokemonManager();
$produitManager = new ProduitManager();

// var_dump($pokemonManager->getPokemons());
// var_dump($produitManager->getProduits());

if (!empty($_POST)) {
    // $pokemon = new Pokemon();
    // $manager = new PokemonManager();
    // $pokemon->hydrate($_POST);
    // $manager->savePokemon($pokemon);
    //var_dump($_POST);
    $produit = new Produit();
    $manager = new ProduitManager();
    $produit->hydrate($_POST);
    $manager->saveProduit($produit);
    // var_dump($produit);
    require "Templates/produitView.php";
} else {
    // require "Templates/addPokemon.php";
    require "Templates/addProduit.php";
}
