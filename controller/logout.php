<?php 

require __DIR__."/../app/loader.php";

// On détruit les variables de notre session
session_unset ();

// On détruit notre session
session_destroy ();

// On redirige le visiteur vers la page d'accueil
header ('Location:/billnpdf/index.php');

 ?>