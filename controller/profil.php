<?php
require __DIR__."/../app/loader.php";

	require __DIR__."/../model/profil.php";
	
	$profil=browseProfil($_SESSION['userid']);
	

	if (isset($_POST["email"], $_POST["name"], $_POST["adress"], $_POST["phone"], $_POST["siren"])){
		//alors on appelle la fonction edit()
		if (editProfil($_POST["email"], $_POST["name"],$_POST["adress"], $_POST["phone"],$_POST["siren"], $_SESSION["userid"])){

			header('Location:profil.php');
		}
	}

	require __DIR__."/../view/profil.php";
?>