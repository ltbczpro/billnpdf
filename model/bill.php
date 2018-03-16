<?php

function saveBill($name, $userid){
	$co_db_statement=getDatabaseConnection()->prepare("INSERT INTO bills (name, userid) VALUES (?,?)");
	return $co_db_statement->execute([$name, $userid]);
}

function browseBill($userid){
	$co_db_statement=getDatabaseConnection()->prepare("SELECT * FROM 
		bills WHERE userid=?");
	$co_db_statement->execute([$userid]);
	$bills=$co_db_statement->fetchAll(PDO::FETCH_ASSOC);
	return $bills;
}