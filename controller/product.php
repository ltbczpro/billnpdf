<?php

require __DIR__."/../app/loader.php";
require __DIR__."/../model/product.php";

$products=browseProduct($_SESSION['userid']);

if ($_POST["filterid"]){

    $_SESSION['selectedid'] = $_POST['filterid'];
}

if (isset($_POST["name"], $_POST["designation"], $_POST["productid"], $_POST["edit"])){
    if (editProduct($_POST["name"],$_POST["designation"], $_POST["productid"])) {
        header('Location:product.php');
    }
}

if (isset($_POST["name"], $_POST["designation"], $_POST["add"])){
    $last_id=addProduct(htmlspecialchars($_POST["name"]), htmlspecialchars($_POST["designation"]), $_SESSION['userid']);
    if (!is_null($last_id)){
        jointure($_SESSION['userid'], $last_id);
        header('Location:product.php');
    }
}
require __DIR__."/../view/product.php";