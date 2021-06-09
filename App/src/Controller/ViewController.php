<?php

namespace App\Controller;

class ViewController{

    public function home($param = null){
        include ROOT."\src\View\homeView.php";
    }

    public function allPokemonsView($param){
        $type = $param;
        include ROOT."\src\View\allPokemonsView.php";
    }
}