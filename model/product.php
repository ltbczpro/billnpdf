<?php

// fonction pour afficher la liste de tâche
function browseProduct($userid){
    /*j'appelle la fonction getDatabaseConnection pour me connecter à la base
    de données avant de préparer une requête (selection de tous les éléments
    de la table t_elements) à l'execution.*/
    $co_db_statement=getDatabaseConnection()->prepare("SELECT * FROM 
		user_product INNER JOIN products WHERE user_product.user_id=? AND products.product_id= user_product.product_id ORDER BY products.name ASC");
    //execution de la requete de selection
    $co_db_statement->execute([$userid]);
    /*récupération du résultat de l'execution stocké dans un tableau contenant
    tous les éléments de de la requete*/
    $products=$co_db_statement->fetchAll(PDO::FETCH_ASSOC);
    // retourne le resultat du fetchAll
    return $products;
}

function selectProduct($userid, $productid){

    $co_db_statement=getDatabaseConnection()->prepare("SELECT * FROM
		products WHERE user_id=? AND product_id=? ");
    //execution de la requete de selection
    $co_db_statement->execute([$userid, $productid]);
    //récupération du résultat de l'execution stocké dans un tableau contenant
    //tous les éléments de de la requete
    $product=$co_db_statement->fetch();
     //retourne le resultat du fetchAll
    return $product;
}


function editProduct($name, $designation, $productid){
    /*j'appelle la fonction getDatabaseConnection pour me connecter à la base de
    données avant de préparer une requete (modification dans la table t_elements
    des éléments elementName, elementDescription de la tache X. )*/
    $co_db_statement=getDatabaseConnection()->prepare("UPDATE products SET name=?, designation=?  WHERE product_id=?");
    /*execution de la requete en donnant à la requete les valeurs d'input nom et
    descri ainsi que du parametre URL de id*/
    return $co_db_statement->execute([$name, $designation, $productid]);

}

function addProduct($name, $designation){
    $PDO=getDatabaseConnection();
    $co_db_statement=$PDO->prepare("INSERT INTO products (name, designation) VALUES (?,?)");
    $result=$co_db_statement->execute([$name, $designation]);
    if ($result===true){
        return $PDO->lastInsertId();
    }else{
        return null;
    }
}

function jointure($userid, $lastid){
    $co_db_statement=getDatabaseConnection()->prepare("INSERT INTO user_product (user_id, product_id) VALUES (?,?)");
    $co_db_statement->execute([$userid, $lastid]);
}
?>