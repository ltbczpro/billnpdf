<?php


require __DIR__."/../app/loader.php";
require __DIR__."/../model/connection.php";

if(isset($_POST["login"], $_POST["pwd"])) {

	$user = getLoginConnection($_POST["login"], $_POST["pwd"]);


	if($user) {
		$login=$user["email"];
		$password=$user["password"];
		$userid=$user["userid"];

		
		if($login==$_POST["login"] && $password==$_POST["pwd"]){
			session_start();
		
			$_SESSION["email"]=$login;
			$_SESSION["password"]=$password;
			$_SESSION["userid"]=$userid;
		
			header("Location:home.php");
		}
	}
} 
else {
	
	require __DIR__."/../view/subscribe.php";
	if (isset($_POST['email'], $_POST['password'])){

		subscribe(htmlspecialchars($_POST["email"]),
		htmlspecialchars($_POST["password"]));

		header("Location:/billnpdf/index.php");
	}
}

?>