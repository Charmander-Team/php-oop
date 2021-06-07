<?php

// $dsn = "mysql:host=localhost;dbname=oop_pokemon";
// $user = "root";
// $passwd = "";

define( "PARAM_hote" , "localhost" );
define( "PARAM_port" , "3306" );
define( "PARAM_nom_bdd" , "oop_pokemon" );
define( "PARAM_utilisateur" , "root" );
define( "PARAM_mot_passe" , "" );

class ConnexionBDD{
	
	public $connexion;

	function __construct(){
		try { 
			$this->connexion = new PDO( 'mysql:host=' .PARAM_hote. ';port=' .PARAM_port. ';dbname=' .PARAM_nom_bdd, PARAM_utilisateur, PARAM_mot_passe,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
			}  
			catch (PDOException $erreur) 
			{
				echo "Erreur : " . $erreur->getMessage();
				die();
			}
	}
	
}

