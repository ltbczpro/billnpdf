<?php
// fonction pour afficher la liste de tâche
function browseClient($userid){
	/*j'appelle la fonction getDatabaseConnection pour me connecter à la base 
	de données avant de préparer une requête (selection de tous les éléments 
	de la table t_elements) à l'execution.*/
	$co_db_statement=getDatabaseConnection()->prepare("SELECT * FROM 
		clients WHERE user_id=?");
	//execution de la requete de selection
	$co_db_statement->execute([$userid]);
	/*récupération du résultat de l'execution stocké dans un tableau contenant
	tous les éléments de de la requete*/ 
	$clients=$co_db_statement->fetchAll(PDO::FETCH_ASSOC);
	// retourne le resultat du fetchAll
	return $clients;
}

function selectClient($userid, $clientid){

	$co_db_statement=getDatabaseConnection()->prepare("SELECT * FROM 
		clients WHERE user_id=? AND client_id=? ");
	//execution de la requete de selection
	$co_db_statement->execute([$userid, $clientid]);
	/*récupération du résultat de l'execution stocké dans un tableau contenant
	tous les éléments de de la requete*/ 
	$client=$co_db_statement->fetch();
	// retourne le resultat du fetchAll
	return $client;
}

function editClient($name, $adress, $userid, $clientid){
	/*j'appelle la fonction getDatabaseConnection pour me connecter à la base de
	données avant de préparer une requete (modification dans la table t_elements
	des éléments elementName, elementDescription de la tache X. )*/
	$co_db_statement=getDatabaseConnection()->prepare("UPDATE clients SET name=?, adress=? WHERE user_id=? AND client_id=?");
	/*execution de la requete en donnant à la requete les valeurs d'input nom et 
	descri ainsi que du parametre URL de id*/
	return $co_db_statement->execute([$name, $adress, $userid, $clientid]);

}

function addClient($name, $adress, $userid){
	$co_db_statement=getDatabaseConnection()->prepare("INSERT INTO clients (name, adress, user_id) VALUES (?,?,?)");
	return $co_db_statement->execute([$name, $adress, $userid]);
}
?>