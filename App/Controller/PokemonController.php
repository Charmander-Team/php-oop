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
        $articles = $this->manager->getList();
        $this->render("indexView", [
            "pokemons" => $pokemons
        ]);
    }

    public function addPokemon(/* $data */)
    {
        if (!empty($_POST)) {
            $article = new Pokemon();
            $article->hydrate($_POST);
            $this->manager->create($article);
            $this->redirectToRoute("home");
        }
        $this->render("addArticle");
    }

    public function test ($param)
    {
        extract($param);
        //var_dump($id);
    }
}
