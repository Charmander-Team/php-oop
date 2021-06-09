<?php

define("ROOT", dirname(__DIR__));

require ROOT."/Vendor/Autoload.php";
Vendor\Autoload::register();

use App\Entity\Pokemon;
use App\Manager\PokemonManager;

$pokemonManager = new PokemonManager();
//var_dump($pokemonManager->getList());
?>
<table border="1">
<?php
foreach ($pokemonManager->getList() as $value){ ?>
    <tr>
        <td><?php echo $value->getId(); ?></td>
        <td><a href="index.php?action=voir&id=<?php echo $value->getId(); ?>"><?php echo $value->getName(); ?></a></td>
        <td><?php echo $value->getLocation(); ?></td>
        <td><?php echo $value->getType(); ?></td>
        <td><?php echo $value->getHp(); ?></td>
        <td><?php echo $value->getHasEvolve(); ?></td>
        <td><?php echo $value->getImage(); ?></td>
        <td><a href="index.php?action=update&id=<?php echo $value->getId(); ?>">Update</a></td>
        <td><a href="index.php?action=delete&id=<?php echo $value->getId(); ?>">Delete</a></td>
    </tr>
<?php } ?>
</tabble>
<table border="1">
<?php

if(!empty($_GET) && $_GET["action"]==="voir"){
    foreach ($pokemonManager->getOne($_GET["id"]) as $value){ ?>
        <tr>
            <td><?php echo $value->getId(); ?></td>
            <td><a href="index.php?id=<?php echo $value->getId(); ?>"><?php echo $value->getName(); ?></a></td>
            <td><?php echo $value->getLocation(); ?></td>
            <td><?php echo $value->getType(); ?></td>
            <td><?php echo $value->getHp(); ?></td>
            <td><?php echo $value->getHasEvolve(); ?></td>
            <td><?php echo $value->getImage(); ?></td>
        </tr>
    <?php } 
}?>
    </table>
<?php


if (!empty($_POST)) {

    // To convert string in int
    $_POST["hp"] = (int)$_POST["hp"];

    // To convert checkbox into boolean for DB
    ($_POST["hasEvolve"] == "on") ? ($_POST["hasEvolve"] = 1) : ($_POST["hasEvolve"] = 0);

    $pokemon = new Pokemon();
    $manager = new PokemonManager();
    $pokemon->hydrate($_POST);
    $manager->create($pokemon);
} else {
    require ROOT."/Templates/addPokemon.php";
}


if(!empty($_GET) && $_GET["action"]==="delete"){
    $pokemonManager->delete($_GET["id"]);
}


// if(!empty($_GET) && $_GET["action"]==="update"){
//     $pokemonManager->getOne($_GET["id"]);

// }