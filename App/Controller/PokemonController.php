<?php
namespace App\Controller;

use App\Entity\Pokemon;
use App\Model\PokemonModel;
use Core\Controller\DefaultController;

class PokemonController extends DefaultController{

    public function __construct()
    {
        $this->manager = new PokemonModel;
    }

    public function home()
    {
        $pokemons = $this->manager->getList();
        $this->render("indexView", [
            "pokemons" => $pokemons
        ]);
    }

    public function addPokemon(/* $data */)
    {
        if (!empty($_POST)) {
            $_POST["hp"] = (int)$_POST["hp"];

            // To convert checkbox into boolean for DB
            ($_POST["hasEvolve"] == "on") ? ($_POST["hasEvolve"] = 1) : ($_POST["hasEvolve"] = 0);
            $pokemon = new Pokemon();
            $pokemon->hydrate($_POST);
            $this->manager->create($pokemon);
            $this->redirectToRoute("home");
        }
        $this->render("addPokemon");
    }

    public function test ($param)
    {
        extract($param);
        //var_dump($id);
    }
}
