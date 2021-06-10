<?php

define("ROOT", dirname(__DIR__));

require ROOT . "/Core/Autoload.php";
Core\Autoload::register();

include ROOT."/Routeur/routeur.php";
