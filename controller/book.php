<?php

require __DIR__."/../app/loader.php";
require __DIR__."/../model/client.php";

$clients=browseClient($_SESSION['userid']);


if ($_POST["clientid"]){

	$_SESSION['selectedid'] = $_POST['clientid'];
}

if (isset($_POST["name"], $_POST["adress"], $_POST["edit"], $_POST["id"])){
	if (editClient($_POST["name"], $_POST["adress"], $_SESSION["userid"], $_POST["id"])) {
		header('Location:book.php');
	}
}

if (isset($_POST["name"], $_POST["adress"], $_POST["add"])){
	if (addClient(htmlspecialchars($_POST["name"]), htmlspecialchars($_POST["adress"]), $_SESSION["userid"])){
		header('Location:book.php');
	}
}

if (isset( $_POST["delete"], $_POST["id"])){
    if (deleteClient( $_POST["id"])) {
        header('Location:book.php');
    }
}

require __DIR__."/../view/book.php";
?>