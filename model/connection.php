<?php
// fonction pour loguer un utilisateur
function getLoginConnection($email, $password){
	/*j'appelle la fonction getDatabaseConnection pour me connecter à la base
	de données avant de préparer une requête (selection de la table t_users
	 si les champs userLogin et userPassword sont égaux aux variables login
	et password) à l'execution.*/
	$co_db_statement=getDatabaseConnection()->prepare("SELECT * FROM users 
		WHERE email=? AND password=?");
	/*execution de la requête de selection sachant que les variables login et 
	password sont égales aux input login et password.*/
	$co_db_statement->execute([$email, $password]);
	//récupération du résultat de l'execution de la requete SELECT
	$user=$co_db_statement->fetch();
	//retourne le résultat du fetch
	return $user;

}
//fonction pour inscrire dans la base de données un nouvel utilisateur
function subscribe($email, $password){
	/*j'appelle la fonction getDatabaseConnection pour me connecter à la base 
	de données avant de préparer une requête (insertion dans la table t_users
	les valeurs inconnues de userLogin et userPassword) à l'éxécution.*/
	$co_db_statement=getDatabaseConnection()->prepare("INSERT INTO `users` (`email`, `password`) VALUES (?, ?);");
	/*execution de la requete d'insertion sachant que les valeurs inconnues 
	sont égales aux input nickname et password protégé par un convertisseur 
	de caractères spéciaux en entité html*/
	$co_db_statement->execute([$email, $password]);
}