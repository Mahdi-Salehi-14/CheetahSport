<?php
    $sql = "SELECT * FROM product WHERE id = ?";
    $result = $db -> query($sql, $productinorder['productid']);
    $product = $result -> fetchArray();

    if(isset($product['id'])){
        $id = $product['id'];
        $img = $product['productimg'];
        $name = $product['productname'];

        $productnumber = $productinorder['productnumber'];
    }
?>