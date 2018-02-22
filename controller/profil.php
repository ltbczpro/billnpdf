<?php
session_start();

	require __DIR__."/../model/model.php";
	
	$profil=browseProfil();
	

	if (isset($_POST["email"], $_POST["name"],$_POST["adress"], $_POST["phone"],$_POST["siren"], $_POST["logo"])){
		//alors on appelle la fonction edit()

		var_dump($_POST["email"], $_POST["name"],$_POST["adress"], $_POST["phone"],$_POST["siren"], $_POST["logo"]);

		editProfil();

		var_dump($_POST["email"], $_POST["name"],$_POST["adress"], $_POST["phone"],$_POST["siren"], $_POST["logo"]);
	}

	require __DIR__."/../view/profil.php";
?>