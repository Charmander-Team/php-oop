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
/*        $pokemons = $this->manager->getList();
        $this->render("indexView", [
            "pokemons" => $pokemons
        ]);*/
        $this->render("home");
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

    public function allPokemons(/* $data */)
    {
        $pokemons = $this->manager->getList();
        $this->render("indexViewPokemon", [
            "pokemons" => $pokemons
        ]);

        /**
         * a mettre en place VENDREDI MATIN
         */
/*        if(!empty($_GET) && $_GET["action"]==="delete"){
            var_dump("coucou");die();
            $pokemonModel->delete($_GET["id"]);
        }*/
    }
    public function renderEditPage($id){
        $pokemon = $this->manager->getOne($id);
        $this->render("editPokemon", ["pokemon" => $pokemon]);
    }
/*    public function getAllArticles ()
    {
        $blogModel = new BlogModel;
        $blogs = $blogModel->getList();

        $this->render("blogView", ["blogs" => $blogs]);
    }

    public function getAllProducts ()
    {
        $productModel = new ProductModel;
        $products = $productModel->getList();

        $this->render("productsView", ["products" => $products]);
    }*/
}
