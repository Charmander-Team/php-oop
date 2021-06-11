<?php 

use App\Controller\PokemonController;
//var_dump(new PokemonController());
if(!empty($_GET["page"])){
switch ($_GET["page"]) {
    case 'addArticle':
        $controller = new PokemonController();
        $controller->addArticle(/* $_POST */);
        break;
    case 'home':
        $controller = new PokemonController();
        $controller->home();
        break;
    case 'connexion':
        $controller = new PokemonController();
        $controller->connexion($_POST["username"],$_POST["password"]);
        break;
    
    default:
        # code...
        break;
}
}