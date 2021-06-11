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

    public function getPokemonById($id){
        $pokemon = $this->manager->getOne($id);
        $this->render("pokemonView", ["pokemon" => $pokemon]);
    }

    public function deletePokemon($id){
        $this->manager->delete($id);
        header('Location: /php-oop/public/index.php/?page=allPokemons');
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
            $this->redirectToRoute("allPokemons");
        }
        $this->render("addPokemon");
    }
}
