<?php

function browseProduct(){
    $co_db_statement=getDatabaseConnection()->prepare("SELECT * FROM products ORDER BY name ASC");
    $co_db_statement->execute([]);
    $products=$co_db_statement->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}

function addProduct($name, $designation, $createdby){
    $PDO=getDatabaseConnection();
    $co_db_statement=$PDO->prepare("INSERT INTO products (name, designation, created_by) VALUES (?,?,?)");
    $result=$co_db_statement->execute([$name, $designation, $createdby]);
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

function selectProduct($productid){

    $co_db_statement=getDatabaseConnection()->prepare("SELECT * FROM products WHERE product_id=? ");
    $co_db_statement->execute([$productid]);
    $product=$co_db_statement->fetch();
    return $product;
}

function editProduct($name, $designation, $productid){
    $co_db_statement=getDatabaseConnection()->prepare("UPDATE products SET name=?, designation=? WHERE products.product_id=? ");
    return $co_db_statement->execute([$name, $designation, $productid]);

}

function deleteProduct($productid){
    $co_db_statement=getDatabaseConnection()->prepare("DELETE FROM products WHERE products.product_id=?");
    return $co_db_statement->execute([$productid]);
}

?>