<?php

define("ROOT", dirname(__DIR__));

require ROOT."/Vendor/Autoload.php";
Vendor\Autoload::register();

use App\Entity\Pokemon;
use App\Manager\PokemonManager;
use App\Manager\UserManager;
use App\Manager\BlogManager;
use App\Manager\ProductManager;

$pokemonManager = new PokemonManager();
var_dump($pokemonManager->getList());
echo "<br>";echo "<br>";echo "<br>";
//var_dump($pokemonManager->getListByType('fire'));
//echo "<br>";echo "<br>";echo "<br>";

$userManager = new UserManager();
var_dump($userManager->getList());
echo "<br>";echo "<br>";echo "<br>";

$blogManager = new BlogManager();
var_dump($blogManager->getList());
echo "<br>";echo "<br>";echo "<br>";

$productManager = new ProductManager();
var_dump($productManager->getList());
echo "<br>";echo "<br>";echo "<br>";

if (!empty($_POST)) {

/*    // To convert string in int
    $_POST["hp"] = (int)$_POST["hp"];

    // To convert checkbox into boolean for DB
    ($_POST["hasEvolve"] == "on") ? ($_POST["hasEvolve"] = 1) : ($_POST["hasEvolve"] = 0);

    $pokemon = new Pokemon();
    $manager = new PokemonManager();
    $pokemon->hydrate($_POST);
    $manager->create($pokemon);*/

    echo $_POST['type'];
    echo "<br>";
    var_dump($pokemonManager->getListByType('fire'));


} else {
    //require ROOT."/Templates/addPokemon.php";
    require ROOT."/Templates/filterPokemonByType.php";
}
