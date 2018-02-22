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
// fonction pour loguer un utilisateur
function getLoginConnection(){
	/*j'appelle la fonction getDatabaseConnection pour me connecter à la base
	de données avant de préparer une requête (selection de la table t_users
	 si les champs userLogin et userPassword sont égaux aux variables login
	et password) à l'execution.*/
	$co_db_statement=getDatabaseConnection()->prepare("SELECT * FROM users 
		WHERE email= :login AND password= :password");
	/*execution de la requête de selection sachant que les variables login et 
	password sont égales aux input login et password.*/
	$co_db_statement->execute([':login' => $_POST['login'], ':password' 
		=> $_POST['pwd']]);
	//récupération du résultat de l'execution de la requete SELECT
	$user=$co_db_statement->fetch();
	//retourne le résultat du fetch
	return $user;

}
//fonction pour inscrire dans la base de données un nouvel utilisateur
function subscribe(){
	/*j'appelle la fonction getDatabaseConnection pour me connecter à la base 
	de données avant de préparer une requête (insertion dans la table t_users
	les valeurs inconnues de userLogin et userPassword) à l'éxécution.*/
	$co_db_statement=getDatabaseConnection()->prepare("INSERT INTO `users` (`email`, `password`) VALUES (?, ?);");
	/*execution de la requete d'insertion sachant que les valeurs inconnues 
	sont égales aux input nickname et password protégé par un convertisseur 
	de caractères spéciaux en entité html*/
	$co_db_statement->execute([htmlspecialchars($_POST["email"]),
		htmlspecialchars($_POST["password"])]);
}
// fonction pour afficher la liste de tâche
function browseProfil(){
	/*j'appelle la fonction getDatabaseConnection pour me connecter à la base 
	de données avant de préparer une requête (selection de tous les éléments 
	de la table t_elements) à l'execution.*/
	$co_db_statement=getDatabaseConnection()->prepare("SELECT * FROM 
		users WHERE userid= :userid");
	//execution de la requete de selection
	$co_db_statement->execute([':userid' => $_SESSION['userid']]);
	/*récupération du résultat de l'execution stocké dans un tableau contenant
	tous les éléments de de la requete*/ 
	$profil=$co_db_statement->fetch();
	// retourne le resultat du fetchAll
	return $profil;
}

function editProfil(){
	/*j'appelle la fonction getDatabaseConnection pour me connecter à la base de
	données avant de préparer une requete (modification dans la table t_elements
	des éléments elementName, elementDescription de la tache X. )*/
	$co_db_statement=getDatabaseConnection()->prepare("UPDATE users SET email= :email, name= :name, adress= :adress, phone= :phone, siren= :siren, logo= :logo WHERE userid= :userid");
	/*execution de la requete en donnant à la requete les valeurs d'input nom et 
	descri ainsi que du parametre URL de id*/
	$co_db_statement->execute([':email'=>$_POST["email"], ':name'=>$_POST["name"], ':adress'=>$_POST["adress"], ':phone'=>$_POST["phone"], ':siren'=>$_POST["siren"],
		':logo'=>$_POST['logo'],':userid'=> $_SESSION["userid"]]);

}