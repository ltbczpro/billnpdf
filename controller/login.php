<?php

require __DIR__."/../model/model.php";
// Si les input du formulaire sont remplis
if(isset($_POST["login"], $_POST["pwd"])) {
// alors on recquiert le fichier model
	
// stockage dans user du résultat de la fonction getFirstUser
	$user = getLoginConnection();

// s'il y a des donnees dans user alors on stocke les donnees dans des variables.
	if($user) {
		$login=$user["email"];
		$password=$user["password"];
		$userid=$user["userid"];

		// si les donnees de la base de donnees et celles de l'input sont equivalentes alors la session démarre.
		if($login==$_POST["login"] && $password==$_POST["pwd"]){
			session_start();
			//variables globales pour garder les données d'authentification
			$_SESSION["email"]=$login;
			$_SESSION["password"]=$password;
			$_SESSION["userid"]=$userid;
			//acces au controller de browse
			
			header("Location:home.php");
		}
	}
} 
else {
	// affichage du formulaire
	require __DIR__."/../view/subscribe.php";
	if (isset($_POST['email'], $_POST['password'])){
		subscribe();
		header("Location:/billstation/natif/index.php");
	}
}

?>