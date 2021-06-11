<?php 

namespace App\Controller;

use App\Entity\Pokemon;
use App\Entity\User;
use App\Model\PokemonModel;
use App\Model\UserModel;
//use CategorieManager;
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
            "articles" => $articles
        ]);
    }
    
    public function connexion($username,$password)
    {
        if(!empty($_POST)){
            $user= new UserModel();
            $acces= $user->checkUser($username,$password);
            var_dump($acces);
            // $acces= $user->checkUser($_POST["username"],$_POST["password"]);
            if($acces===true){$this->render("addPokemon");
            session_start();
            $_SESSION["connexion"]=true;
            }else{
                $this->redirectToRoute("connexion");
                $this->render("connexion");
                session_destroy();
            }
        }else {$this->render("connexion");}
    }

    public function addArticle(/* $data */)
    {
        session_start();
        if(isset($_SESSION["connexion"])){
        if (!empty($_POST)) {
            $article = new Pokemon();
            $article->hydrate($_POST);
            $this->manager->create($article);
            $this->redirectToRoute("home");
        }
        $this->render("addPokemon");
    } else {
        $this->redirectToRoute("connexion");
        $this->render("connexion"); 
    }

    }

    public function test ($param)
    {
        extract($param);
        var_dump($id);
    }

    // public function contact ()
    // {
    //     $categorieManager = new CategorieManager();
    //     $categories = $categorieManager->getList();
    //     $last5 = $this->manager->getLast5();

    //     $this->render("accueil", [
    //         "articles" => $last5,
    //         "categories" => $categories
    //     ]);
    // }
}
