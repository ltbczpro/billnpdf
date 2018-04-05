<?php

require __DIR__."/../app/loader.php";
require __DIR__."/../model/product.php";

$products=browseProduct($_SESSION['userid']);

if (isset($_POST["name"], $_POST["designation"], $_SESSION["userid"], $_POST["add"])){
    $last_id=addProduct(htmlspecialchars($_POST["name"]), htmlspecialchars($_POST["designation"]), $_SESSION["userid"]);
    if (!is_null($last_id)){
        jointure($_SESSION['userid'], $last_id);
        header('Location:product.php');
    }
}

if (isset($_POST["name"], $_POST["designation"], $_POST["edit"])){
    $product=selectProduct($_POST['productid']);
    if($product==true && $product['created_by']==$_SESSION['userid']){
        editProduct($_POST["name"],$_POST["designation"], $_POST["productid"]);
        header('Location:product.php');
    }else{
        echo("<script>alert('You can\'t edit this product because you\'re not this owner.')</script>");
    }
}

if (isset($_POST["delete"])){
    $product=selectProduct($_POST['productid']);
    if($product==true && $product['created_by']==$_SESSION['userid']){
        deleteProduct($_POST["productid"]);
        header('Location:product.php');
    }else{
        echo("<script>alert('You can\'t edit this product because you\'re not this owner.')</script>");
    }
}




if ($_POST["filterid"]){

    $_SESSION['selectedid'] = $_POST['filterid'];
}

require __DIR__."/../view/product.php";