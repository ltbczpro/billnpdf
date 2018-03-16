<?php

// fonction pour se connecter à la base de données.
function getDatabaseConnection() {
	// de base la variable connection_database vaut null
	$connection_database = null;
	// récupération des données sensibles
	require __DIR__."/../config.php";
	//j'essaie de me connecter à la base de données.
	try{
	//PDO: Connexion entre le php et la base de données
	$connection_database = new PDO("mysql:host=$host;dbname=$dbn", 
		$db_login, $db_pwd);

	}
	// sinon j'affiche Connexion failed et le message d'erreur.
	catch (PDOException $e) {
	    echo "Connection failed : " . $e->getMessage();
	}
	// je retourne l'instance de l'objet PDO ou null 
	return $connection_database;

}