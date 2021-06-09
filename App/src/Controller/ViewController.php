<?php

namespace App\Controller;

use App\Manager\PokemonManager;

class ViewController{

    public function home($param = null){
        include ROOT."\src\View\homeView.php";
    }

    public function allPokemonsView($param){
        $pokemons = new PokemonManager;
        $pokemons->getList();
        $type = $param;
        include ROOT."\src\View\allPokemonsView.php";
    }
}