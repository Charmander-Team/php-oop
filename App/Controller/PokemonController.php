<?php
namespace App\Controller;

use App\Entity\Pokemon;
use App\Model\PokemonModel;
use App\Model\UserModel;
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

        session_start();
        //session_destroy();
        //unset($_SESSION["connexion"]);
        //var_dump($_SESSION);
        if(isset($_SESSION["connexion"])){
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
        else {
            $this->redirectToRoute("connexion");
            $this->render("connexion"); 
        }
    }

    public function connexion($array)
    // public function connexion($username,$password)
    {

        if(!empty($array)){
        // if(!empty($_POST)){
            $user= new UserModel();
            $acces= $user->checkUser($array["username"],$array["password"]);
            // $acces= $user->checkUser($username,$password);
            //var_dump($acces);
            if($acces===true){
            $this->redirectToRoute("addPokemon");    
            $this->render("addPokemon");
            session_start();
            $_SESSION["connexion"]=true;
            }else{
                $this->render("connexion");
                session_destroy();
            }
        }
        else {

        $this->render("connexion");}
    }

    public function deconnexion(){

        $this->redirectToRoute("connexion");
        $this->render("connexion");
        unset($_SESSION["connexion"]);
        //session_destroy();
    
    }

}
