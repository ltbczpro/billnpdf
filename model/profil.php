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

// fonction pour afficher la liste de tâche
function browseProfil($userid){
	/*j'appelle la fonction getDatabaseConnection pour me connecter à la base 
	de données avant de préparer une requête (selection de tous les éléments 
	de la table t_elements) à l'execution.*/
	$co_db_statement=getDatabaseConnection()->prepare("SELECT * FROM 
		users WHERE userid=?");
	//execution de la requete de selection
	$co_db_statement->execute([$userid]);
	/*récupération du résultat de l'execution stocké dans un tableau contenant
	tous les éléments de de la requete*/ 
	return $co_db_statement->fetch();
	// retourne le resultat du fetchAll
	//return $profil;
}

function editProfil($email, $name, $adress, $phone, $siren, $logo, $userid){
	/*j'appelle la fonction getDatabaseConnection pour me connecter à la base de
	données avant de préparer une requete (modification dans la table t_elements
	des éléments elementName, elementDescription de la tache X. )*/
	$co_db_statement=getDatabaseConnection()->prepare("UPDATE users SET email=?, name=?, adress=?, phone=?, siren=?, logo=? WHERE userid=?");
	/*execution de la requete en donnant à la requete les valeurs d'input nom et 
	descri ainsi que du parametre URL de id*/
	return $co_db_statement->execute([$email, $name, $adress, $phone, $siren, $logo, $userid]);

}