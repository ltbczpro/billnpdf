<?php
session_start();

require __DIR__."/../model/client.php";

$clients=browseClient($_SESSION['userid']);

if (isset($_POST["name"], $_POST["adress"], $_POST["edit"], $_POST["id"])){
	if (editClient($_POST["name"], $_POST["adress"], $_SESSION["userid"], $_POST["id"])) {
		header('Location:book.php');
	}
}

if (isset($_POST["name"], $_POST["adress"], $_POST["add"])){
	//alors on appelle la fonction edit()
	if (addClient(htmlspecialchars($_POST["name"]), htmlspecialchars($_POST["adress"]), $_SESSION["userid"])){
		header('Location:book.php');
	}
}

require __DIR__."/../view/book.php";
?>