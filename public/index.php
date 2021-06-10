<?php

define("ROOT", dirname(__DIR__));

require ROOT . "/Core/Autoload.php";
Core\Autoload::register();

use App\Entity\Pokemon;
use App\Model\PokemonModel;
use App\Model\UserModel;
use App\Model\BlogModel;
use App\Model\ProductModel;

$pokemonModel = new PokemonModel();
var_dump($pokemonModel->getList());
echo "<br>";echo "<br>";echo "<br>";
//var_dump($pokemonModel->getListByType('fire'));
//echo "<br>";echo "<br>";echo "<br>";

$userModel = new UserModel();
var_dump($userModel->getList());
echo "<br>";echo "<br>";echo "<br>";

$blogModel = new BlogModel();
var_dump($blogModel->getList());
echo "<br>";echo "<br>";echo "<br>";

$productModel = new ProductModel();
var_dump($productModel->getList());
echo "<br>";echo "<br>";echo "<br>";

if (!empty($_POST)) {

/*    // To convert string in int
    $_POST["hp"] = (int)$_POST["hp"];

    // To convert checkbox into boolean for DB
    ($_POST["hasEvolve"] == "on") ? ($_POST["hasEvolve"] = 1) : ($_POST["hasEvolve"] = 0);

    $pokemon = new Pokemon();
    $model = new PokemonModel();
    $pokemon->hydrate($_POST);
    $Mmdel->create($pokemon);*/

    echo $_POST['type'];
    echo "<br>";
    var_dump($pokemonModel->getListByType($_POST['type']));


} else {
    //require ROOT."/Templates/addPokemon.php";
    require ROOT."/Templates/filterPokemonByType.php";
}
